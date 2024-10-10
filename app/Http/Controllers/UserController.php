<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class UserController extends Controller
{
    function edit_profile(){
        return view('admin.edit_profile');
    }
    function user_update(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email',
        ],[
            'name.required'=>'please nam de',
            'email.required'=>'please email de',
            'email.email'=>'thik thak email de',
        ]);
        if(User::where('email', $request->email)->exists()){
            User::find(Auth::id())->update([
                'name'=>$request->name,
            ]);
        }
        else{
            User::find(Auth::id())->update([
                'name'=>$request->name,
                'email'=>$request->email,
            ]);
        }
        return back()->with('success', 'User Updated');
    }

    function password_update(Request $request){
        $request->validate([
            'current_password'=>'required',
            // 'password'=> ['required', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'password_confirmation'=>'required',
        ]);

        if(password_verify($request->current_password, Auth::user()->password)){
            User::find(Auth::id())->update([
                'password'=>bcrypt($request->password),
            ]);
            return back()->with('pass_update', 'Password Updated');
        }
        else{
            return back()->with('curnt', 'Current Password Wrong');
        }
    }


    function user_photo_update(Request $request){
        $request->validate([
            'profile_photo'=>'required',
            'profile_photo'=> 'mimes:jpg,png,gif,jpeg',
            'profile_photo'=> 'max:1024',
        ]);

        if(Auth::user()->image != null){
            $delete_from = public_path('uploads/user/'.Auth::user()->image);
            unlink($delete_from);
        }

        $photo = $request->profile_photo;
        $extension = $photo->extension();
        // create image manager with desired driver
        $manager = new ImageManager(new Driver());

        // read image from file system
        $image = $manager->read($photo);

        // Store image
        $file_name = Auth::id().'.'.$extension;

        // save modified image in new format
        $image->save(public_path('uploads/user/'.$file_name));

        User::find(Auth::id())->update([
            'photo'=>$file_name,
        ]);
        return back()->with('photo_update', 'Profile Photo Updated');

    }

    function user_logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    // function user_list(){
    //     $users = User::all();
    //     return view('backend.user.user_list', [
    //         'users'=> $users,
    //     ]);
    // }

    // function user_delete($id){
    //     User::find($id)->delete();
    //     return back()->with('del', 'User Deleted success!');
    // }
}
