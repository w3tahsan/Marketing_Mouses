@extends('frontend.master')
@section('content')
<!--=====================================-->
<!--=====================================-->
<!--=           Banner Start            =-->
<!--=====================================-->
<section class="page-header" data-bg-image="{{ asset('front') }}/image/banner/inner-page-banner.jpg">
    <div class="container">
        <div class="page-header-wrapper">
            <div class="breadcrumb-wrapper">
                <div class="breadcrumbs">
                    <span class="list-item"><a href="index.html">HOME</a></span>
                    <span class="list-item"><span class="separator"> / </span></span>
                    <span class="list-item"><span class="current-item">SERVICE</span></span>
                </div>
            </div>
            <h1 class="page-header-title">SERVICE DETAILS</h1>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=            Banner End             =-->
<!--=====================================-->
<!--=====================================-->
<!--=           Team Start           =-->
<!--=====================================-->
<section class="single-project-wrap">
    <div class="container">
        <h2 class="section-inner-title">Website Design and Development</h2>
        <p>A website acts like a digital visiting card for your business and can prove a game-changer. A research conducted by eMarketer and Statista shows that online retail sales will reach $6.51 trillion by 2023, with eCommerce websites taking up 22.3% of total retail sales. A website can become a valuable asset for your business to cope with changing consumer behavior.
        </p>

        <div class="single-project-img">
            <img width="1500" height="700" src="{{ asset('front') }}/image/project/project-26.jpg" alt="project">
        </div>
        <h2 class="section-inner-title">Why website is important for a business</h2>
        <div class="reason_item pt-3">
            <h4># Establish credibility and build trust</h4>
            <p>In 2011, Google introduced the Zero Moment of Truth, or ZMOT, which focuses on how consumers research online for information and make purchase decisions. A website helps your business interact with consumers at ZMOT to establish you as a credible and trustworthy business.</p>
        </div>
        <div class="reason_item pt-3">
            <h4># 24x7 sales channel</h4>
            <p>A website enables customers to purchase from your business outside business hours. It allows you to reach consumers globally, making your website a powerful revenue channel. The website is always at work serving potential and existing customers from the comfort of their space.</p>
        </div>
        <div class="reason_item pt-3">
            <h4># Cost-effective</h4>
            <p>A website costs less to develop and maintain compared to a physical store. You can use your website to announce a new product or service launch, host sales, or share relevant content that benefits your customers. </p>
        </div>
        <div class="reason_item pt-3">
            <h4># Business expansion</h4>
            <p>A website helps your business build brand awareness and reach new customers. It showcases your products or services and generates awareness about them. You can do SEO to increase your online visibility, reach the right audience and further expand your business. </p>
        </div>
        <div class="reason_item pt-3">
            <h4># Increase organic traffic</h4>
            <p>If you follow SEO best practices, your business website may show on the search results when people search for keywords related to your product or service. You can reach a new audience with consistent efforts to grow your online presence.</p>
        </div>
        <div class="reason_item pt-3">
            <h4># Improve customer experience</h4>
            <p>Consumers can also use your website to raise queries regarding a particular product or service using contact forms or chatbots. The feedback, survey, or contact forms connected to a CRM help you manage leads, address inquiries, improve business and generate sales.</p>
        </div>
        <div class="reason_item pt-3">
            <h4># Complement digital marketing efforts</h4>
            <p>A responsive and user-friendly website helps facilitate digital marketing efforts. It helps you create an email database for marketing, content strategy to improve organic traffic, and develop landing pages for ads. You can reach a broader audience through Google Ads and Facebook Ads and direct them to your website for conversion. </p>
        </div>
        <div class="reason_item pt-3">
            <h4># Create a local presence</h4>
            <p>If you are running a local business, a website can help reach a relevant audience searching for your products and services.According to Safari Digital, 97% of users use search to find local businesses. Being visible online will help your business increase revenue and visibility in local markets. </p>
        </div>
        <div class="reason_item pt-3">
            <h4># Attract potential business partners</h4>
            <p>Whether you sell products or services, a website can help you find new partners that can help you expand your business.Marketplaces and service providers may find your business on search engines and contact you with a proposition. A website helps them understand your company, values, and products and identify collaboration opportunities. </p>
        </div>
        <div class="reason_item pt-3">
            <h4># Understand your customers</h4>
            <p>A website helps you collect sales and customer data that can be used to understand sales trends and customer demographics. It helps determine what your customers look for before making a purchase. Collecting such information can help create products and services that add more value to your customers.</p>
        </div>
        <div class="reason_item pt-3">
            <h4># Test your product or service</h4>
            <p>You can use your website to connect with your customers and test products. You can provide them free samplers and collect feedback to determine market acceptance. This way, you can evaluate a new product or service before heavily investing in it. </p>
        </div>
        <div class="reason_item pt-3">
            <h4># Upsell your product or service</h4>
            <p>A website helps you create product bundles or add free samplers to a customer's purchase. It is an effective method to introduce a new product and show complementary products to your customers. It helps increase the cart value and helps scale revenue. </p>
        </div>

        <div class="row g-4 mt-5 mb-4 has-animation">
            <div class="col-xl-3 col-md-6 col-12">
                <div class="translate-bottom transition-delay-200">
                    <div class="service-box style-1 color-1">
                        <div class="entry-icon"><i class="fas fa-bolt"></i></div>
                        <h3 class="entry-title title-dark"><a href="#">User Friendly Design</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="translate-bottom transition-delay-1000">
                    <div class="service-box style-1 color-3">
                        <div class="entry-icon"><i class="fas fa-code"></i></div>
                        <h3 class="entry-title title-dark"><a href="#">Full Dynamic</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="translate-bottom transition-delay-600">
                    <div class="service-box style-1 color-2">
                        <div class="entry-icon"><i class="fas fa-bezier-curve"></i></div>
                        <h3 class="entry-title title-dark"><a href="#">Support All Devices</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="translate-bottom transition-delay-1000">
                    <div class="service-box style-1 color-3">
                        <div class="entry-icon"><i class="fas fa-search"></i></div>
                        <h3 class="entry-title title-dark"><a href="#">SEO Friendly</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=             Pricing              =-->
<!--=====================================-->
<section class="pricing-wrap style-1">
    <div class="container">
        <div class="section-heading style-2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-content">
                        <div class="section-sub-title">OUR PRICE TABLE</div>
                        <h2 class="section-title">Choose the Best Package</h2>
                        <p class="section-text">We helping client to create with our talented expert.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center has-animation active-animation">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-200">
                    <div class="pricing-box style-1">
                        <div class="entry-price">$39.00</div>
                        <div class="entry-duration">PER/MONTH</div>
                        <div class="entry-package">SILVER PACK</div>
                        <ul class="entry-info">
                            <li><i class="fas fa-check"></i>Responsive Design</li>
                            <li><i class="fas fa-check"></i>Unlimited Elements</li>
                            <li class="item-deactivate"><i class="fas fa-check"></i>Premium Theme</li>
                            <li class="item-deactivate"><i class="fas fa-check"></i>24/7 support </li>
                        </ul>
                        <a class="pricing-btn" href="#">BUY PLAN</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-400">
                    <div class="pricing-box style-1">
                        <div class="entry-price">$49.00</div>
                        <div class="entry-duration">PER/MONTH</div>
                        <div class="entry-package">GOLD PACK</div>
                        <ul class="entry-info">
                            <li><i class="fas fa-check"></i>Responsive Design</li>
                            <li><i class="fas fa-check"></i>Unlimited Elements</li>
                            <li><i class="fas fa-check"></i>Premium Theme</li>
                            <li class="item-deactivate"><i class="fas fa-check"></i>24/7 support </li>
                        </ul>
                        <a class="pricing-btn" href="#">BUY PLAN</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="translate-bottom transition-delay-600">
                    <div class="pricing-box style-1">
                        <div class="entry-price">$89.00</div>
                        <div class="entry-duration">PER/MONTH</div>
                        <div class="entry-package">PLATINUM PACK</div>
                        <ul class="entry-info">
                            <li><i class="fas fa-check"></i>Responsive Design</li>
                            <li><i class="fas fa-check"></i>Unlimited Elements</li>
                            <li><i class="fas fa-check"></i>Premium Theme</li>
                            <li><i class="fas fa-check"></i>24/7 support </li>
                        </ul>
                        <a class="pricing-btn" href="#">BUY PLAN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=             Pricing  end             =-->
<!--=====================================-->

<!--=====================================-->
<!--=       Call To Action- Start       =-->
<!--=====================================-->
<section class="call-to-action-wrap style-1" style="background: #f5f5f5">
    <div class="container">
        <div class="row gap-lg-5 has-animation active-animation">
            <div class="col-lg-5">
                <div class="translate-left transition-delay-200">
                    <div class="call-to-action-box style-1">
                        <div class="entry-form">
                            <form method="POST" id="contact-form" novalidate="true">
                                <div class="row">
                                    <div class="col-lg-12 form-group">
                                        <input type="text" class="form-control" placeholder="Full Name" name="name" data-error="Name field is required" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <input type="email" class="form-control" placeholder="E-mail" name="email" data-error="Email field is required" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <textarea name="message" id="form-message" class="form-control textarea" placeholder="Your Message" cols="30" rows="4" data-error="Message field is required" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-lg-12 form-group">
                                        <button type="submit" class="btn-fill btn-square w-100 disabled">SEND MESSAGE</button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center">
                <div class="translate-right transition-delay-200">
                    <div class="call-to-action-box style-1">
                        <h2 class="entry-title">Let’s Talk About<span> Your Project</span></h2>
                        <p class="entry-text">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in that some form by injected humour or randomised words which don't look even slightly believable.
                        </p>
                        <div class="entry-contact"><a href="#"><i class="fas fa-phone-alt"></i>+227-300-3676</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=         Call To Action- End       =-->
<!--=====================================-->
<!--=====================================-->
<!--=             Team End           =-->
<!--=====================================-->
@endsection
