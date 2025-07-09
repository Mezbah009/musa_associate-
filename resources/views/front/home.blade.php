@extends('front.layouts.app')
@section('content')
    <!-- Banner -->
    <div class="banner-area banner-area-two banner-img-one">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    @foreach ($home_first_section as $key => $home_first_sections)
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6">
                                <div class="banner-item">
                                    <div class="banner-left">
                                        {{-- <h1>Expert Tax Solutions for Growing Businesses</h1> --}}
                                        <h1>{{ $home_first_sections->title }}</h1>
                                        <p>{!! $home_first_sections->description !!}</p>
                                        <a href="{{ route('front.appointment') }}">Get Appointment
                                            <i class="icofont-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-item">
                                    <div class="banner-right">
                                        <img class="banner-animation"
                                            src="{{ asset('uploads/first_section/' . $home_first_sections->image) }}"
                                            alt="Banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->


    <!-- Counter -->
    <div class="counter-area">
        <div class="container">
            <div class="row counter-bg">
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-judge"></i>
                        <div class="counter-inner">
                            <h3>
                                <span class="odometer" data-count="18">00</span>
                                <span class="target">+</span>
                            </h3>
                            <p>Attorneys</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-auction"></i>
                        <div class="counter-inner">
                            <h3>
                                <span class="odometer" data-count="99">00</span>
                                <span class="target">%</span>
                            </h3>
                            <p>Case Won</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-medal"></i>
                        <div class="counter-inner">
                            <h3>
                                <span class="odometer" data-count="100">00</span>
                                <span class="target">%</span>
                            </h3>
                            <p>Legal Way</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-3">
                    <div class="counter-item">
                        <i class="flaticon-team"></i>
                        <div class="counter-inner">
                            <h3>
                                <span class="odometer" data-count="10">00</span>
                                <span class="target">k</span>
                            </h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Counter -->

    <!-- Help -->
    <div class="help-area help-area-two pb-70">
        <div class="container-fluid">
            @foreach ($home_second_section as $key => $home_second_sections)
                @if ($key % 2 == 0)
                    <!-- Odd index: Image left, content right -->
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <div class="help-item help-left">
                                <img src="{{ asset('uploads/first_section/' . $home_second_sections->image) }}"
                                    alt="Help">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="help-item">
                                <div class="help-right">
                                    <h2>{{ $home_second_sections->title }}</h2>
                                    <p>{!! $home_second_sections->description !!}</p>
                                    <div class="help-inner-left">
                                        <ul>
                                            <li><i class="flaticon-checkmark"></i> Browse Our Website</li>
                                            <li><i class="flaticon-checkmark"></i> Choose Services</li>
                                        </ul>
                                    </div>
                                    <div class="help-inner-right">
                                        <ul>
                                            <li><i class="flaticon-checkmark"></i> Quick Reply</li>
                                            <li><i class="flaticon-checkmark"></i> Best Performances</li>
                                        </ul>
                                    </div>
                                    <div class="help-signature">
                                        <img src="{{ asset('front-assets/assets/img/home-one/4.png') }}" alt="Signature">
                                    </div>
                                    <h3>Barrister Babatunde Smithi</h3>
                                    <span>Founder and CEO</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!-- Even index: Content left, image right -->
                    <div class="row align-items-center help-wrap">
                        <div class="col-lg-6">
                            <div class="help-item">
                                <div class="help-right">
                                    <h2>{{ $home_second_sections->title }}</h2>
                                    <p>{!! $home_second_sections->description !!}</p>
                                    <div class="help-inner-left">
                                        <ul>
                                            <li><i class="flaticon-checkmark"></i> On Time Response</li>
                                            <li><i class="flaticon-checkmark"></i> Legal Way</li>
                                        </ul>
                                    </div>
                                    <div class="help-inner-right">
                                        <ul>
                                            <li><i class="flaticon-checkmark"></i> Legal Services</li>
                                            <li><i class="flaticon-checkmark"></i> Honest Work</li>
                                        </ul>
                                    </div>
                                    <a class="cmn-btn" href="{{ route('front.practice') }}">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="help-item help-left">
                                <img src="{{ asset('uploads/first_section/' . $home_second_sections->image) }}"
                                    alt="Help">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="help-shape">
                <img src="{{ asset('front-assets/assets/img/home-one/6.png') }}" alt="Shape">
            </div>
        </div>
    </div>
    <!-- End Help -->

    <!-- Practice -->
    <section class="practice-area practice-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>HOW CAN WE HELP YOU</span>
                <h2>Our Legal Practices Areas</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-law"></i>
                        </div>
                        <h3>Corporate Tax Advisory</h3>
                        <p>Strategic tax planning and compliance solutions tailored to your business structure and industry.
                        </p>
                        <a href="practice-details.html">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('front-assets/assets/img/home-one/7.png') }}"
                            alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('front-assets/assets/img/home-one/8.png') }}"
                            alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-family"></i>
                        </div>
                        <h3>Income Tax Services</h3>
                        <p>Expert guidance on personal and corporate income tax filing, assessment, and dispute resolution.
                        </p>
                        <a href="practice-details.html">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('front-assets/assets/img/home-one/7.png') }}"
                            alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('front-assets/assets/img/home-one/8.png') }}"
                            alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-inheritance"></i>
                        </div>
                        <h3>VAT & Customs Advisory</h3>
                        <p>End-to-end support with VAT registration, return filing, audits, and import-export tax
                            compliance.</p>
                        <a href="practice-details.html">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('front-assets/assets/img/home-one/7.png') }}"
                            alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('front-assets/assets/img/home-one/8.png') }}"
                            alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-mortarboard"></i>
                        </div>
                        <h3>Tax Litigation & Dispute Resolution</h3>
                        <p>Representation and advocacy in tax disputes before appellate authorities, tribunals, and courts.
                        </p>
                        <a href="practice-details.html">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('front-assets/assets/img/home-one/7.png') }}"
                            alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('front-assets/assets/img/home-one/8.png') }}"
                            alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-auction"></i>
                        </div>
                        <h3>Regulatory Compliance</h3>
                        <p>Helping businesses meet all legal and tax-related obligations to avoid penalties and ensure
                            smooth operations.</p>
                        <a href="practice-details.html">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('front-assets/assets/img/home-one/7.png') }}"
                            alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('front-assets/assets/img/home-one/8.png') }}"
                            alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-vulnerability"></i>
                        </div>
                        <h3>Withholding Tax Management</h3>
                        <p>Proper calculation, deduction, and submission of withholding tax for various payments and
                            transactions.</p>
                        <a href="practice-details.html">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('front-assets/assets/img/home-one/7.png') }}"
                            alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('front-assets/assets/img/home-one/8.png') }}"
                            alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-vulnerability"></i>
                        </div>
                        <h3>Transfer Pricing Advisory</h3>
                        <p>Assistance with inter-company transactions to meet international transfer pricing regulations and
                            documentation.</p>
                        <a href="practice-details.html">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('front-assets/assets/img/home-one/7.png') }}"
                            alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('front-assets/assets/img/home-one/8.png') }}"
                            alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-vulnerability"></i>
                        </div>
                        <h3>Audit & Assessment Support</h3>
                        <p>Professional support during NBR audits, tax assessments, and responses to show-cause notices.</p>
                        <a href="practice-details.html">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('front-assets/assets/img/home-one/7.png') }}"
                            alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('front-assets/assets/img/home-one/8.png') }}"
                            alt="Shape">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="practice-item">
                        <div class="practice-icon">
                            <i class="flaticon-vulnerability"></i>
                        </div>
                        <h3>Business Formation & Licensing</h3>
                        <p>Legal assistance for company registration, trade license acquisition.</p>
                        <a href="practice-details.html">Read More</a>
                        <img class="practice-shape-one" src="{{ asset('front-assets/assets/img/home-one/7.png') }}"
                            alt="Shape">
                        <img class="practice-shape-two" src="{{ asset('front-assets/assets/img/home-one/8.png') }}"
                            alt="Shape">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Practice -->

    <!-- Expertise -->


    <section class="expertise-area expertise-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>OUR EXPERTISE</span>
                <h2>Committed to Protecting Your Tax Rights</h2>
            </div>
            <div class="row align-items-center justify-content-center">
                @php
                    $chunks = $home_services_section->chunk(3); // Split into columns of 3 items
                @endphp

                @foreach ($chunks as $colIndex => $chunk)
                    <div class="col-lg-6">
                        <div class="expertise-item">
                            <ul>
                                @foreach ($chunk as $key => $service)
                                    <li class="wow fadeInUp" data-wow-delay=".{{ 3 + $key }}s">

                                        <div class="expertise-icon " style="width: 60px; height: 60px;">
                                            {{-- Background image --}}
                                            <img src="{{ asset('front-assets/assets/img/home-one/11.png') }}"
                                                alt="Shape"
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; transform: scale(1.7); z-index: 1;">


                                            {{-- Foreground icon --}}
                                            <img src="{{ asset('uploads/first_section/' . $service->icon) }}"
                                                alt="Icon" width="50px"
                                                style="position: relative; z-index: 2; display: block; margin: auto; top: 5px;"
                                                loading="lazy">
                                        </div>
                                        <h3>{{ $service->title }}</h3>
                                        <p>{!! $service->description !!}</p>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Expertise -->


    <!-- portfolio -->
    <section class="portfolio-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Check Out Our Popular Case Studies.</h2>
            </div>
            <div class="row justify-content-center">
                @foreach ($caseStudy as $case)
                    <div class="col-sm-6 col-lg-4">
                        <div class="portfolio-item wow fadeInUp" data-wow-delay=".3s">
                            <img src="{{ asset('uploads/casestudies/' . $case->image) }}" loading="lazy"
                                alt="{{ $case->title }}" alt="{{ $case->title }}">
                            <div class="portfolio-inner">
                                {{-- <span>Crime</span> --}}
                                <h3>
                                    <a
                                        href="{{ route('front.showCaseStudy', ['slug' => $case->slug]) }}">{{ $case->title }}</a>
                                </h3>
                                <p>{{ $case->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
          
        </div>
    </section>
    <!-- End portfolio -->

    <!-- Team -->
   <section class="team-area team-area-two pt-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($teamMembers as $member)
                    <div class="col-sm-6 col-lg-3">
                        <div class="team-item wow fadeInUp" data-wow-delay=".3s">
                            <img src="{{ asset('uploads/users/' . $member->image) }}" alt="T{{ $member->name }}">
                            <div class="team-inner">
                                <ul>
                                    <li>
                                        <a href="{{ $member->facebook }}" target="_blank">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $member->instagram }}" target="_blank">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $member->twitter }}" target="_blank">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $member->linkedin }}" target="_blank">
                                            <i class="icofont-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="#">{{ $member->name }}</a>
                                </h3>
                                <span>{{ $member->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Team -->

    <!-- Contact Form -->
    <div class="contact-form pb-100">
        <!-- Location -->
        <div class="loaction-area">
            <div class="container">
                <div class="row location-bg">
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-item">
                            <div class="location-icon">
                                <i class="flaticon-pin"></i>
                                <img src="{{ asset('front-assets/assets/img/home-one/12.png') }}" alt="Shape">
                            </div>
                            <h3>Location</h3>
                            <ul>
                                <li>2108-267 Dhaka, Bangladesh</li>
                            </ul>
                            <a class="location-link" href="https://www.google.com/maps" target="_blank">View on gogle
                                map</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-item">
                            <div class="location-icon">
                                <i class="flaticon-email"></i>
                                <img src="{{ asset('front-assets/assets/img/home-one/12.png') }}" alt="Shape">
                            </div>
                            <h3>Email</h3>
                            <ul>
                                <li>
                                    <a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#6b030e0707042b0712110445080406"><span
                                            class="__cf_email__"
                                            data-cfemail="670f020b0b08270b1e1d084904080a">associates@musa.com</span></a>
                                </li>
                                <li>
                                    <a
                                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#a1c8cfc7cee1cdd8dbce8fc2cecc"><span
                                            class="__cf_email__"
                                            data-cfemail="cea7a0a8a18ea2b7b4a1e0ada1a3">musa@associates.com</span></a>
                                </li>
                            </ul>
                            <a class="location-link" href="https://www.google.com/maps" target="_blank">View on gogle
                                map</a>
                        </div>
                    </div>
                    <div class="col-sm-6   col-lg-4">
                        <div class="location-item">
                            <div class="location-icon">
                                <i class="flaticon-call"></i>
                                <img src="{{ asset('front-assets/assets/img/home-one/12.png') }}" alt="Shape">
                            </div>
                            <h3>Phone</h3>
                            <ul>
                                <li>
                                    <a href="tel:+0755543332322">+07 5554 3332 322</a>
                                </li>
                                <li>
                                    <a href="tel:+0555962435736">+05 5596 2435 736</a>
                                </li>
                            </ul>
                            <a class="location-link" href="https://www.google.com/maps" target="_blank">View on gogle
                                map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Location -->

        <div class="container-fluid">
            <form id="contactForm">
                <div class="row contact-wrap">
                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required
                                data-error="Please enter your name" placeholder="Your Full Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required
                                data-error="Please enter your email" placeholder="Your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required
                                data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required
                                data-error="Please enter your subject" placeholder="Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required
                                data-error="Write your message" placeholder="Case Description"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <div class="text-center">
                            <button type="submit" class="contact-btn">Submit Case</button>
                        </div>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact Form -->

    <!-- Blog -->
    <section class="blog-area pt-100">
        <div class="container">
            <div class="section-title">
                <span>BLOG</span>
                <h2>Our Latest Blogs</h2>
            </div>
            <div class="blog-slider owl-theme owl-carousel">
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('front-assets/assets/img/home-one/blog/1.jpg') }}" alt="Blog">
                    </a>
                    <div class="blog-inner">
                        <span>Rights Case</span>
                        <h3>
                            <a href="blog-details.html">Justice May For You If You Are Innocent</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2024
                            </li>
                            <li>
                                <i class="icofont-user-alt-7"></i>
                                <a href="index-2.html#">John Doe</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut
                            labore.</p>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class="icofont-simple-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('front-assets/assets/img/home-one/blog/2.jpg') }}" alt="Blog">
                    </a>
                    <div class="blog-inner">
                        <span>Business Case</span>
                        <h3>
                            <a href="blog-details.html">By Whom Your Business Is Being Loss?</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2024
                            </li>
                            <li>
                                <i class="icofont-user-alt-7"></i>
                                <a href="index-2.html#">John Doe</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut
                            labore.</p>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class="icofont-simple-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('front-assets/assets/img/home-one/blog/3.jpg') }}" alt="Blog">
                    </a>
                    <div class="blog-inner">
                        <span>Criminal Case</span>
                        <h3>
                            <a href="blog-details.html">Who Can The Victim A Sue After A Car Accident?</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2024
                            </li>
                            <li>
                                <i class="icofont-user-alt-7"></i>
                                <a href="index-2.html#">John Doe</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut
                            labore.</p>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class="icofont-simple-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('front-assets/assets/img/home-one/blog/1.jpg') }}" alt="Blog">
                    </a>
                    <div class="blog-inner">
                        <span>Rights Case</span>
                        <h3>
                            <a href="blog-details.html">Justice May For You If You Are Innocent</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2024
                            </li>
                            <li>
                                <i class="icofont-user-alt-7"></i>
                                <a href="index-2.html#">John Doe</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut
                            labore.</p>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class="icofont-simple-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('front-assets/assets/img/home-one/blog/2.jpg') }}" alt="Blog">
                    </a>
                    <div class="blog-inner">
                        <span>Business Case</span>
                        <h3>
                            <a href="blog-details.html">By Whom Your Business Is Being Loss?</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2024
                            </li>
                            <li>
                                <i class="icofont-user-alt-7"></i>
                                <a href="index-2.html#">John Doe</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut
                            labore.</p>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class="icofont-simple-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('front-assets/assets/img/home-one/blog/3.jpg') }}" alt="Blog">
                    </a>
                    <div class="blog-inner">
                        <span>Criminal Case</span>
                        <h3>
                            <a href="blog-details.html">Who Can The Victim A Sue After A Car Accident?</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2024
                            </li>
                            <li>
                                <i class="icofont-user-alt-7"></i>
                                <a href="index-2.html#">John Doe</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut
                            labore.</p>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class="icofont-simple-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('front-assets/assets/img/home-one/blog/1.jpg') }}" alt="Blog">
                    </a>
                    <div class="blog-inner">
                        <span>Rights Case</span>
                        <h3>
                            <a href="blog-details.html">Justice May For You If You Are Innocent</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2024
                            </li>
                            <li>
                                <i class="icofont-user-alt-7"></i>
                                <a href="index-2.html#">John Doe</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut
                            labore.</p>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class="icofont-simple-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('front-assets/assets/img/home-one/blog/2.jpg') }}" alt="Blog">
                    </a>
                    <div class="blog-inner">
                        <span>Business Case</span>
                        <h3>
                            <a href="blog-details.html">By Whom Your Business Is Being Loss?</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2024
                            </li>
                            <li>
                                <i class="icofont-user-alt-7"></i>
                                <a href="index-2.html#">John Doe</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut
                            labore.</p>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class="icofont-simple-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-item">
                    <a href="blog-details.html">
                        <img src="{{ asset('front-assets/assets/img/home-one/blog/3.jpg') }}" alt="Blog">
                    </a>
                    <div class="blog-inner">
                        <span>Criminal Case</span>
                        <h3>
                            <a href="blog-details.html">Who Can The Victim A Sue After A Car Accident?</a>
                        </h3>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2024
                            </li>
                            <li>
                                <i class="icofont-user-alt-7"></i>
                                <a href="index-2.html#">John Doe</a>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc ut
                            labore.</p>
                        <a class="blog-link" href="blog-details.html">
                            Read More
                            <i class="icofont-simple-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->
@endsection
