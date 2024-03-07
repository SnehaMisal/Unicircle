<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicircle | Home</title>
    <?= view('./link/css') ?>
</head>

<body>
    <?= view('common_file/header') ?>
    <!-- onscreen section start -->
    <section class="onscreen-section">
        <div class="container-fluid banner-section">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-6">
                    <div class="banner-title ">
                        <!-- <h3 class="word"></h3> -->
                        <h3>Your Modern <br> Campus, Superhero!</h3>
                        <h6>India's <span style="color: #1E5FD7; font-weight: 700;">#1</span> Private Community App -
                            <br> Tailored for
                            Your College's Success
                        </h6>
                        <a href="<?php echo base_url('get_started') ?>" type="button" class="btn  btn-lg">Get
                            Started</a>
                    </div>
                </div>
                <div class="col-md-5 cust_slider">
                    <div class="owl-carousel owl-theme whyUni-carousel" id="whyUni-carousel">
                        <div class="item">
                            <img src="<?php echo base_url() ?>/assets/img/slider_img/slider_4.jpg" alt="1000X1000">
                            <div class="slider-content">
                                <p class="mb-0"><small>Dhruv Saigal</small></p>
                                <p>Got some second-hand textbooks—such a steal! 😊
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url() ?>/assets/img/slider_img/slider_1.png" alt="1000X1000">
                            <div class="slider-content">
                                <p class="mb-0"><small>Lara Saigal</small></p>
                                <p>Hey Team! 👋 Anyone up for a quick brainstorming session for our marketing project?
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url() ?>/assets/img/slider_img/slider_2.jpg" alt="1000X1000">
                            <div class="slider-content">
                                <p class="mb-0"><small>Wesley Burland</small></p>
                                <p>Got some second-hand textbooks—such a steal! 😊
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url() ?>/assets/img/slider_img/slider_3.jpg" alt="1000X1000">
                            <div class="slider-content">
                                <p class="mb-0"><small>Shefali Nair</small></p>
                                <p>Too many events to pick from, how do I decide? 🤔
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="why_us">
        <div class="container_width">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="resour_title mb-5 mt-5 text-center">
                        <span>Why Unicircle?</span>
                        <h4 class="mt-5 desktop-display">A bridge between you and your students.</h4>
                        <p>Unicircle makes it easy for you to stay connected with your students, so you can make
                            informed decisions. Share campus-wide announcements, targeted messaging, built-in event and
                            job app along with social capabilities for students to stay connected with one another.</p>
                    </div>
                </div>
            </div>
            <div class="row why_us_mobile mobile-display">
                <!-- <div class="chat_box mb-3">
                    <h3>Unify chat, events, and
                        emails on a single platform.</h3>
                    <div class="owl-carousel testimonial-carousel">
                        <div class="single-testimonial slider_1">
                            <div class="testimonials-wrapper">
                                <div class="testimonials-img">
                                    <img src="<?php echo base_url() ?>/assets/img/home-page/slider_1.png">
                                </div>
                                <div class="testimonials-blob"></div>

                                <div class="testimonials-person-info">
                                    <img src="<?php echo base_url() ?>/assets/img/home-page/student_marketeer.jpg">
                                    <p><b>Student Marketeer </b><br /><span>Redbull</span></p>
                                    <p class="info_2">part-time, fresher</p>
                                    <button type="button" class="btn btn-lg">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial slider_2">
                            <div class="testimonials-wrapper">
                                <div class="testimonials-img">
                                    <img src="<?php echo base_url() ?>/assets/img/home-page/slider_2.png">
                                </div>

                                <div class="testimonials-blob"></div>

                                <div class="testimonials-person-info">
                                    <button type="button" class="btn btn-lg">Buy Ticket</button>
                                    <p><b>Alumni Meet & Greet </b><br /><span>05 Feburary 2022</span></p>
                                    <p class="info_2">Jehangir Hall, 16.00 - 18.00</p>

                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial slider_3">
                            <div class="testimonials-wrapper">
                                <div class="testimonials-img"><img
                                        src="<?php echo base_url() ?>/assets/img/home-page/slider_3.png"></div>
                                <div class="testimonials-blob"></div>

                                <div class="testimonials-person-info">
                                    <p><b>20% OFF</b><br /><span>Save on a new Apple Watch with Apple education
                                            pricing.</span></p>
                                    <button type="button" class="btn btn-lg">Redeem now</button>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial slider_4">
                            <div class="testimonials-wrapper">
                                <div class="testimonials-img"><img
                                        src="<?php echo base_url() ?>/assets/img/home-page/slider_4.png"></div>

                                <div class="testimonials-blob"></div>
                                <div class="testimonials-person-info">
                                    <div class="msger-chat">
                                        <div class="msg left-msg">
                                            <div class="msg-img">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/slider_2.png">
                                            </div>

                                            <div class="msg-bubble">


                                                <div class="msg-text">
                                                    Hey everyone! Ready to dive into our study session for the upcoming
                                                    exam?
                                                </div>
                                                <div class="msg-info">
                                                    <div class="msg-info-name"></div>
                                                    <div class="msg-info-time">18:16 </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="msg right-msg">
                                            <div class="msg-img">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/slider_4.png">
                                            </div>

                                            <div class="msg-bubble">


                                                <div class="msg-text">
                                                    Absolutely! I’ve got my notes prepped and ready.
                                                </div>
                                                <div class="msg-info">
                                                    <div class="msg-info-time">18:17</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <h3 class="desktop-display">Get your students on the same page. Literally.</h3>
                <h3 class="mobile-display mt-3 mb-3">Get your students <br>on the same page. Literally.</h3>
                <img src="<?php echo base_url() ?>/assets/img/home-page/chat.png" alt="">
                <h4>A smarter way to work together</h4>
                <p>Streamline collaboration with chat, docs, and groups in one feed for peak productivity.</p>
            </div>
            <div class="row justify-content-center mobile-display pt-5">
                <div class="col-md-8">
                    <hr>
                    <div class="resour_title mb-5 mt-5 text-center">
                        <h4 class="mt-5">Modern Connectivity for Modern Campuses</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="nav  nav-justified nav-pills" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="discover-tab" data-bs-toggle="tab"
                            data-bs-target="#discover" type="button" role="tab" aria-controls="discover"
                            aria-selected="true">Discover </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="connect-tab" data-bs-toggle="tab" data-bs-target="#connect"
                            type="button" role="tab" aria-controls="connect" aria-selected="false">Connect </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="thrive-tab" data-bs-toggle="tab" data-bs-target="#thrive"
                            type="button" role="tab" aria-controls="thrive" aria-selected="false">Thrive</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="share-tab" data-bs-toggle="tab" data-bs-target="#share"
                            type="button" role="tab" aria-controls="share" aria-selected="false">Share </button>
                    </li>
                </ul>
                <hr>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="discover" role="tabpanel" aria-labelledby="discover-tab">
                        <div class="row justify-content-between mt-5">
                            <div class="col-md-7">
                                <div>
                                    <h4>Effortlessly manage your student activities with ease</h4>
                                    <p class="mt-4 ">Go beyond academics; it's your gateway to enriching every aspect of
                                        your campus
                                        journey, creating a more vibrant and fulfilling experience.</p>

                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-3 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/event.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Events Galore
                                                </h4>
                                                <p>Immerse yourself in a multitude of campus events.</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/deals.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Exclusive Deals
                                                </h4>
                                                <p>Enjoy specially tailored student discounts.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/well-being.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Well-Being
                                                </h4>
                                                <p>Prioritize your holistic growth with access to well-being resources.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/jobs.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Student Jobs
                                                </h4>
                                                <p>Explore job opportunities tailored for students.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="desktop_display">
                                    <img src="<?php echo base_url() ?>/assets/img/home-page/discover.png" alt=""
                                        style="width:200px;">
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="connect" role="tabpanel" aria-labelledby="connect-tab">
                        <div class="row justify-content-between align-items-center mt-5">
                            <div class="col-md-6">
                                <div>
                                    <h4>Collaborate and Succeed Together.</h4>
                                    <p class="mt-4 ">Our social app for students provides real-time collaboration
                                        features for study groups and projects. Connect with classmates, share
                                        resources, and work together to achieve academic success.</p>

                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-4 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/study_group.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Study Groups
                                                </h4>
                                                <p>Join or create study groups to collaborate with classmates and boost
                                                    your
                                                    learning.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/team_up.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Team Up
                                                </h4>
                                                <p>Form project teams to work on assignments, presentations, and group
                                                    projects.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="desktop_display">
                                    <img src="<?php echo base_url() ?>/assets/img/home-page/connect_img.png" alt=""
                                        style="width:200px;">
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="thrive" role="tabpanel" aria-labelledby="thrive-tab">
                        <div class="row justify-content-between align-items-center mt-5">
                            <div class="col-md-6">
                                <div>
                                    <h4>Discover and Connect with Students</h4>
                                    <p class="mt-4 ">Our private and authenticated social app for Students offers a
                                        range of additional functionalities to enhance your social experience. With
                                        custom profiles, you can showcase your interests and connect with like-minded
                                        individuals. Direct messaging allows you to have private conversations with your
                                        friends and classmates. And with media sharing, you can easily share photos,
                                        videos, and other media with your network.</p>

                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-4 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/custom_profile.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Custom Profiles
                                                </h4>
                                                <p>Create a personalized profile to showcase your interests.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/direct_msg.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Direct Messaging
                                                </h4>
                                                <p>Have private conversations with your friends and classmates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/media_shearing.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Media Sharing
                                                </h4>
                                                <p>Easily share photos, videos, and other media with your network.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="desktop_display">
                                    <img src="<?php echo base_url() ?>/assets/img/home-page/thrive.png" alt=""
                                        style="width:200px;">
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="share" role="tabpanel" aria-labelledby="share-tab">
                        <div class="row justify-content-between align-items-center mt-5">
                            <div class="col-md-6">
                                <div>
                                    <h4>Experience a vibrant campus culture</h4>
                                    <p class="mt-4 ">Connect students across departments effortlessly, fostering
                                        collaboration and communication. </p>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-12 mt-3">
                                        <div class="row sub-box align-items-center">
                                            <div class="col-md-12 col-2">
                                                <img src="<?php echo base_url() ?>/assets/img/home-page/campus_update.png"
                                                    alt="">
                                            </div>
                                            <div class="col-md-12 col-10">
                                                <h4 class="subtitle mt-2">
                                                    Instant Campus Updates
                                                </h4>
                                                <p>Receive vital news, announcements, and circulars directly on
                                                    students'
                                                    devices via push notifications, ensuring real-time awareness of
                                                    campus
                                                    activities and events.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="desktop_display">
                                    <img src="<?php echo base_url() ?>/assets/img/home-page/share.png" alt=""
                                        style="width:200px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to use section start -->
    <section class="" id="about-section">
        <div class=" about-section">
            <div class="container_width ">
                <!-- <div class="feacher-title desktop-display">
                <h3>Campus App, <b> Built for Higher Education</b></h3>
            </div> -->
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="row justify-content-around pt-3  video_section">
                            <div class="col-md-5 text-center">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <!-- <iframe width="560" height="315"
                                            src="https://www.youtube-nocookie.com/embed/bJXeLQvMgCM?autoplay=1&mute=1"
                                            frameborder="0" allowfullscreen></iframe> -->

                                    <img src="<?php echo base_url('') ?>assets/img/home-page/video_1.png" alt=""
                                        width="100%">

                                    <video width="100%" height="auto"  loop controls controlsList="nodownload  nofullscreen">
                                        <source src="<?php echo base_url('') ?>assets/video/universitys_landscape.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <!-- <video src="<?php echo base_url('') ?>assets/video/universitys_landscape.mp4"
                                        width="100%" controls></video> -->
                                    <!-- <iframe class="youtube_video"
                                        src="<?php echo base_url('') ?>assets/video/universitys_landscape.mp4"
                                        frameborder="0" allowfullscreen></iframe> -->
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/video_2.png" alt=""
                                        width="100%">
                                </div>
                            </div>
                            <div class="col-md-5 pt-5">
                                <div class="about-content pt-3">
                                    <h3>Transform Your University's Landscape with Unicircle</h3>
                                    <p>In a rapidly evolving educational landscape, universities that harness the power
                                        of
                                        innovation excel. Unicircle isn't just an app; it's the catalyst that propels
                                        your
                                        institution into the forefront of modern education.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reveal">
        <div class="how-use ">
            <div class="container_width">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-4">
                        <div class="how-use-content mb-3">
                            <h3> Experience a private and secure social app.</h3>
                            <p class="mt-4">Connect with your classmates and friends in a safe & protected online
                                environment. Share photos, messages, & more.
                            </p>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12 col-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="security_verify">
                                            <h5>Security</h5>
                                            <p>Our app prioritizes the safety & privacy of students, ensuring a
                                                worry-free
                                                experience.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="security_verify">
                                            <h5>Verified Community</h5>
                                            <p>Every user is authenticated for a secure environment.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mobile-display">
                                <img src="<?php echo base_url('') ?>assets/img/home-page/mob_smart_phone.png" alt=""
                                    width="100%">
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-1 col-1">
                                <div class="symbol">
                                    <span>{</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-3">
                                <div class="pers">
                                    <span>70%</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-7">
                                <div class="box_content">
                                    <p>students cite privacy breaches as a major concern on current social media.</p>
                                </div>
                            </div>
                            <div class="col-md-1 col-1">
                                <div class="symbol">
                                    <span>}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 desktop-display">
                        <div class="how-use-content text-center">
                            <div class="how-use-btn">
                                <img src="<?php echo base_url('') ?>assets/img/home-page/smart_phone.png" alt=""
                                    width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlap_div">
            <div class=" container">
                <div class="row ">
                    <div class="resour_title mb-5 mt-5">
                        <span>Resources</span>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="digital-img ">
                            <div>
                                <!-- <img
                                    src="<?php echo base_url('') ?>assets/img/blog/blog-1.png"
                                    alt="" style="width: 100%;"> -->
                                <div class="resourse_img_content">
                                    <h4>Why is Mobile Student Portal a Must for Every University & College?
                                        <a href="<?php echo base_url('blog_1') ?>"
                                            class="mobile-display text-white">read blog ></a>
                                    </h4>
                                    <p>Disruptive digital technologies have become second-nature to younger generations.
                                        A
                                        college freshman was around 5 years old when ...<a
                                            href="<?php echo base_url('blog_1') ?>">read blog ></a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-8 col-6">
                                <div class="digital-content">
                                    <h3>Segment & communicate with diverse audiences</h3>
                                    <p>How do you ensure your institution delivers the right message, to the right
                                        person,
                                        at
                                        the right time? Unicircle makes it easy for ...</p>
                                    <a href="<?php echo base_url('blog_2') ?>">read blog ></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="<?php echo base_url('') ?>assets/img/home-page/friends-friendship-walking-park-togetherness.png"
                                    alt="" style="width: 100%;">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-8 col-6">
                                <div class="digital-content">
                                    <h3>Live in Your Students’ Digital World</h3>
                                    <p>Competing for the attention of college students has always been a challenge, As
                                        you
                                        can see, email notifications ...</p>
                                    <a href="<?php echo base_url('blog_3') ?>">read blog ></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-6">
                                <img src="<?php echo base_url('') ?>assets/img/home-page/friends-friendship.jpg" alt=""
                                    style="width: 100%;">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- How to use section end -->
    <section class="reveal middle-content ">
        <div class="container_width ">
            <div class="row justify-content-center text-center">
                <hr class="mobile-display">
                <div class="col-md-7">
                    <div class="blog-title mt-5">
                        <h3>Discover a new way to connect and learn with our social app for Students</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-4 col-lg-3">
                    <div class="card card-body  ">
                        <div>
                            <div class="content">
                                <div class="blog-img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/garden.png" alt=""
                                        style="width:49px;">
                                </div>
                                <div class="blog-content">
                                    <h3>Unlock endless possibilities
                                        for academic and social
                                        growth</h3>
                                    <p>Our app provides a step-by-step guide on how to make the most of your academic
                                        and social experience</p>
                                </div>

                                <a href="<?php echo base_url('get_started') ?>">Get Started ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card card-body  ">
                        <div>
                            <div class="content">
                                <div class="blog-img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/business.png" alt=""
                                        style="width:49px;">
                                </div>
                                <div class="blog-content">
                                    <h3 class=" pr-5">Connect with like minded students annd expand your network</h3>
                                    <p>Discover new opportunities for collaboration and knowledge sharing</p>
                                </div>
                                <a href="<?php echo base_url('get_started') ?>">Get Started ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card card-body  ">
                        <div>
                            <div class="content">
                                <div class="blog-img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/news.png" alt=""
                                        style="width:49px;">
                                </div>
                                <div class="blog-content">
                                    <h3>Stay updated with the latest news and events in your academic community</h3>
                                    <p>Never miss out on important announcements and opportunities</p>
                                </div>
                                <a href="<?php echo base_url('get_started') ?>">Get Started ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="benefit-section ">
        <div class="container_width reveal">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="benefit-title">
                        <h3> Got any Questions?</h3>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item ">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                            What is UN1CIRCLE, and how can it benefit our institution?
                                        </button>
                                    </div>
                                    <div id="faq-content-1" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            UN1CIRCLE is a student-centric platform designed to enhance campus life. It
                                            simplifies communication, fosters genuine connections, and offers a secure
                                            space. Strengthen student engagement, streamline announcements, and create a
                                            more connected campus community.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item d-flex">
                            <div class="faq_img">
                                <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                    style="width:25px;">
                            </div>
                            <div style="width:100%">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        How does UN1CIRCLE address privacy and security concerns for our students?
                                    </button>
                                </div>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        Prioritizing student privacy, UN1CIRCLE employs robust security measures like
                                        private circles, ensuring a safe and authenticated environment for student
                                        connections.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item d-flex">
                            <div class="faq_img">
                                <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                    style="width:25px;">
                            </div>
                            <div style="width:100%">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        What types of campus events and announcements can be shared on UN1CIRCLE?
                                    </button>
                                </div>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        UN1CIRCLE accommodates various campus events and announcements, serving as a
                                        centralized platform for academic updates, extracurricular activities, and
                                        crucial information. </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item d-flex">
                            <div class="faq_img">
                                <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                    style="width:25px;">
                            </div>
                            <div style="width:100%">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        How does UN1CIRCLE handle the verification process for student accounts?
                                    </button>
                                </div>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        UN1CIRCLE ensures secure account verification. Students exclusively log in using
                                        their institute-registered mobile number, receiving a one-time password (OTP)
                                        for an extra layer of authentication. </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item d-flex">
                            <div class="faq_img">
                                <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                    style="width:25px;">
                            </div>
                            <div style="width:100%">
                                <div class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        How can our institution measure the success and impact of UN1CIRCLE on
                                        student engagement? </button>
                                </div>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                    <div class="accordion-body">
                                        UN1CIRCLE provides analytics tools to measure success and impact, allowing
                                        institutions to track user activity, analyze trends, and continuously
                                        enhance the student experience. </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                                            What kind of support, resources, and training does UN1CIRCLE provide for
                                            onboarding, integration, administrators, and staff? </button>
                                    </div>
                                    <div id="faq-content-6" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            UN1CIRCLE offers comprehensive support, resources, and training for a smooth
                                            onboarding and integration process. Administrators and staff receive
                                            training covering key features, controls, and best practices for efficient
                                            platform management. </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item ">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-7">
                                            Is UN1CIRCLE compatible with existing campus communication systems and
                                            tools?
                                        </button>
                                    </div>
                                    <div id="faq-content-7" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            UN1CIRCLE operates independently and is not designed to integrate with
                                            existing campus communication systems. </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-8">
                                            Can the UN1CIRCLE higher education app improve student engagement?
                                        </button>
                                    </div>
                                    <div id="faq-content-8" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            Yes, the UN1CIRCLE app enhances engagement by providing customized
                                            experiences and facilitating better interactions on and off campus.
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="accordion-item ">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-9">
                                            Is end-user UX a priority for the UN1CIRCLE college student app?
                                        </button>
                                    </div>
                                    <div id="faq-content-9" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            Absolutely, UN1CIRCLE prioritizes delivering delightful experiences,
                                            continuously evolving features based on student needs and preferences.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-10">
                                            Can I use the UN1CIRCLE campus app to keep students updated about campus
                                            news? </button>
                                    </div>
                                    <div id="faq-content-10" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            Yes, UN1CIRCLE includes free app notifications for real-time updates on
                                            campus news, events, and more. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-11">
                                            Can higher education institutions personalize UN1CIRCLE? </button>
                                    </div>
                                    <div id="faq-content-11" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            Yes, UN1CIRCLE allows institutions to personalize experiences through
                                            unlimited profiles and roles, targeting specific student cohorts with
                                            relevant messaging.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item ">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-12">
                                            Can admins without programming experience configure the UN1CIRCLE mobile app
                                            for
                                            students?
                                        </button>
                                    </div>
                                    <div id="faq-content-12" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            Certainly, UN1CIRCLE's no-code App Manager enables admins without
                                            programming
                                            experience to configure the app, empowering institutions to delegate
                                            permissions
                                            effectively.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-13">
                                            How often is your mobile app for college updated?
                                        </button>
                                    </div>
                                    <div id="faq-content-13" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            UN1CIRCLE follows a monthly development release cycle, introducing new
                                            features
                                            and functionality seamlessly with no downtime for the end-user.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <div class="d-flex">
                                <div class="faq_img">
                                    <img src="<?php echo base_url('') ?>assets/img/home-page/faq.png" alt=""
                                        style="width:25px;">
                                </div>
                                <div style="width:100%">
                                    <div class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-content-14">
                                            How does UN1CIRCLE protect the data and identity of its users?
                                        </button>
                                    </div>
                                    <div id="faq-content-14" class="accordion-collapse collapse"
                                        data-bs-parent="#faqlist1">
                                        <div class="accordion-body">
                                            UN1CIRCLE integrates with customer identity management systems using
                                            standard
                                            protocols, and real-time encryption ensures constant data protection. The
                                            platform is also GDPR compliant.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button id="next">See All</button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?= view('common_file/footer') ?>
</body>
<?= view('link/js') ?>
<script>
// jQuery("#carousel").owlCarousel({
//     autoplay: false,
//     rewind: true,
//     margin: 20,

//   items: 1,
//     responsiveClass: true,
//     autoHeight: true,
//     autoplayTimeout: 7000,
//     smartSpeed: 800,
//     nav: true,
//     dots: true,
//     responsive: {
//         0: {
//             items: 1,
//             dots: true,
//         },

//         600: {
//             items: 1,
//             dots: true,
//         },

//         1024: {
//             items: 1,
//             dots: true,
//         },

//         1366: {
//             items: 1,
//             dots: true,
//         }
//     }
// });
$('#whyUni-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ['<-', '->'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            nav: false,
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
$(function() {
    $('.testimonial-carousel').owlCarousel({
        nav: false,
        // navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            750: {
                items: 2,
            }
        }
    });
});
$(document).ready(function() {

    var list = $(".accordion .accordion-item");
    console.log("list", list);
    var numToShow = 5;
    var button = $("#next");
    var numInList = list.length;
    list.hide();
    if (numInList > numToShow) {
        button.show();
    }
    list.slice(0, numToShow).show();

    button.click(function() {
        var showing = list.filter(':visible').length;
        console.log("showing", showing);
        list.slice(showing - 1, list.length).fadeIn();
        var nowShowing = list.filter(':visible').length;
        console.log("nowShowing", nowShowing);
        if (nowShowing >= numInList) {
            button.hide();
        }
    });

});
</script>


</html>