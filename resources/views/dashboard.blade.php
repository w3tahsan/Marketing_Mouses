@extends('layouts.admin')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h3>Welcome To Dashboard, <b>{{ Auth::user()->name }}</b></h3>
        </div>
        <div class="card-body"></div>
    </div>
</div>
@endsection
