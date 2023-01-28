@extends('website.layouts.master')
@section('content')
    <div id="home" class="banner-area four ms-0 me-0" style="margin-bottom: 70px;">
        <!-- <div class="banner-img">
                    <img src="assets/img/banner/banner-main3.png" alt="Image">
                </div> -->
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-content">
                        <span class="sub-head">Hey It's</span>
                        <h1>Mohamad Mansour</h1>
                        <p>Hello I am a <span>Software Developer</span> from Lebanon. I have rich experience of 1+
                            years in Web Developer</p>
                        <div class="banner-btn-area">
                            <a class="common-btn" href="#contact">Contact With Me</a>
                            <!-- <a class="common-btn banner-btn" href="#">Hire Me</a> -->
                        </div>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/M.mansour.028" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/mohamadmansour028" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/mohamad-mansour-68012921a" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://mohamadmansour.me/" target="_blank">
                                    <i class='bx bxl-dribbble'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="about-area four pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title four">
                            <h2>About <span>Me</span></h2>
                            <p>As a highly motivated and skilled software developer with over a year of experience in developing and testing cutting-edge software and web applications, I possess a strong foundation in computer science and practical programming skills. My background in Business Computer from Lebanese University Faculty of Technology has provided me with the knowledge and expertise to deliver high-quality and innovative solutions for various projects. My goal is to continue to grow and learn in the field of software development to provide unique and efficient solutions for clients.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="left">
                                    <ul>
                                        <li>
                                            <span>Age:</span>
                                            <span id="birthday"> </span> 
                                        </li>
                                        <li>
                                            <span>Residence:</span>
                                            Dalhoun
                                        </li>
                                        <li>
                                            <span>Address:</span>
                                            <a href="#">Iklim ,Lebanon</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="right">
                                    <ul>
                                        <li>
                                            <span>Phone:</span>
                                            <a href="tel:+96171039605">+961 71039605</a>
                                        </li>
                                        <li>
                                            <span>Email:</span>
                                            <a href="mail:mohamadmansour028@gmail.com">mohamadmansour028@gmail.com</a>
                                        </li>
                                        <li>
                                            <span>Website:</span>
                                            <a href="https://mohamadmansour.me/">mohamadmansour.me</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                            <div class="about-img-two">
                                <img src="assets/img/about-main1.png" alt="About">
                            </div>
                        </div> -->
            </div>
        </div>
    </section>

    <!-- <section id="portfolio" class="work-area ptb-100">
                <div class="container">
                    <div class="section-title four">
                        <h2>At First See My Awesome <span>Work</span> That Gain A Vast Popularity</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work1.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">Pancake Logo</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work2.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">Business Card</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work3.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">Brochure</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work4.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">Flyer</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work5.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">Packaging</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work6.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">Illustration</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work7.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">UX/UI</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work8.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">Web Design</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work9.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">Web Development</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="work-item">
                                <div class="overlay">
                                    <img src="assets/img/work/work10.jpg" alt="Work">
                                    <div class="inner">
                                        <h3>
                                            <a href="work-details.html">Animation</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="common-btn four" href="works.html">Explore All Work</a>
                    </div>
                </div>
            </section> -->


    <section id="projects" class="case-study-area pb-100">
        <div class="container">
            <div class="section-title four">
                <h2>Some <span>Of My Successfuly Projects</span></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-6 col-lg-6">
                    <div class="case-study-img">
                        <div class="overlay">
                            <img src="assets/img/new/1.png" alt="Work">
                            <div class="inner">
                                <h3>
                                    <a href="https://majanexpres.com/">Deliver Product</a>
                                </h3>
                                <span>CMS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="case-study-content">
                        <h3>
                            <a href="https://majanexpres.com/">Deliver Product</a>
                        </h3>
                        <p>Air & Ocean Cargo Insurance</p>
                        <p>Technologies used : Php, Laravel, Javascript, MySql</p>
                        <a class="case-study-btn" href="https://majanexpres.com/">
                            Go to Website
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="case-study-content">
                        <h3>
                            <a href="https://unifind-lb.org/">Combines all universities in Lebanon</a>
                        </h3>
                        <p>Platform that combines all universities in Lebanon at your disposal.</p>
                        <p>Technologies used : Php, Laravel, Javascript, Ajax, MySql</p>
                        <a class="case-study-btn" href="https://unifind-lb.org/">
                            Go to Website
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="case-study-img">
                        <div class="overlay">
                            <img src="assets/img/new/2.png" alt="Work">
                            <div class="inner">
                                <h3>
                                    <a href="https://unifind-lb.org/">Combines all universities in Lebanon</a>
                                </h3>
                                <span>CMS</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="case-study-img">
                        <div class="overlay">
                            <img src="assets/img/new/3.png" alt="Work">
                            <div class="inner">
                                <h3>
                                    <a href="https://houselashhes.com/">E-commerce</a>
                                </h3>
                                <!-- <span></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="case-study-content">
                        <h3>
                            <a href="https://houselashhes.com/">E-commerce</a>
                        </h3>
                        <p>Online Store</p>
                        <p>Technologies used : Php, Laravel, Javascript, Ajax, MySql</p>
                        <a class="case-study-btn" href="https://houselashhes.com/">
                            Go To Website
                            <i class="flaticon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section id="contact" class="contact-area four pb-70">
        <div class="container">
            <div class="section-title four">
                <h2>Contact <span>Me</span></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <form id="contactForm1" action="{{ route('sendContact') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Name*" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" placeholder="Phone" required
                                        data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="msg_subject" class="form-control"
                                        placeholder="Subject" required data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6"
                                        placeholder="Write message" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            @if (Session::get('err'))
                                <div class="col-lg-12">
                                    <div class="bg-success text-white p-3 mb-2 ">
                                        {{ Session::get('err') }}
                                    </div>
                                </div>
                            @endif
                            <div class="col-lg-12">
                                <button type="submit" class="btn common-btn four">
                                    Send Message
                                    <span></span>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="contact-content">
                        <div class="top">
                            <ul>
                                <li>
                                    <span>Phone:</span>
                                    <a href="tel:+96171039605">+961 71039605</a>
                                </li>
                                <li>
                                    <span>Email:</span>
                                    <a href="mail:mohamadmansour028@gmail.com">mohamadmansour028@gmail.com</a>
                                </li>
                                <li>
                                    <span>Website:</span>
                                    <a href="https://mohamadmansour.me/">mohamadmansour.me</a>
                                </li>
                                <li>
                                    <span>Address:</span>
                                    <a href="#">Iklim ,Lebanon</a>
                                </li>
                            </ul>
                        </div>
                        <div class="bottom">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/M.mansour.028" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/in/mohamad-mansour-68012921a" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://mohamadmansour.me/" target="_blank">
                                        <i class='bx bxl-dribbble'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
