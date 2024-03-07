<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicircle | Home</title>
    <?= view('./link/css') ?>
    <style>
        .container_width{
            width: 70%;
        }
        @media (min-width: 320px) and (max-width: 600px) {
            .about_us .container_width{
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <?= view('common_file/header') ?>
    <section class="about_us">
        <div class="container_width banner-section">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="section_title mb-5 mt-5 text-center">
                        <span>Features</span>
                        <p class="mt-5">Empower your university journey with our all-in-one platform for networking, collaboration, and student life enhancement!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container_width">
            <div class="row align-items-center justify-content-between flex-lg-row flex-column-reverse">
                <div class="col-md-6 col-lg-4 ">
                    <img src="<?php echo base_url() ?>/assets/img/features-img/bridge.png" alt=""
                                    class="fec_img_w">
                    <h4>A bridge between you & your students</h4>
                    <p>Newsletters & announcements delivered with targeted push notifications & personalized in-app feeds.</p>
                </div>
                <div class="col-md-6 col-lg-6 col-10">
                 <img src="<?php echo base_url() ?>/assets/img/features-img/bridge_std_1.png" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="features" style="background: #F5F5F5;">
        <div class="container_width">
            <div class="row align-items-center justify-content-between flex-lg-row flex-column-reverse">
                <div class="col-md-6 col-lg-4">
                    <img src="<?php echo base_url() ?>/assets/img/features-img/communicassion.png" alt=""
                                    class="fec_img_w">
                    <h4>Enable Connections in ways Students Expect</h4>
                    <p>Student orgs, post feeds, and chat, enable students to self-organize in the ways that they're used to.</p>
                </div>
                <div class="col-md-6 col-lg-6 col-10">
                  <img src="<?php echo base_url() ?>/assets/img/features-img/communicassion-stud.png" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container_width">
            <div class="row align-items-center justify-content-between flex-lg-row flex-column-reverse">
                <div class="col-md-6 col-lg-4">
                    <img src="<?php echo base_url() ?>/assets/img/features-img/event.png" alt=""
                                    class="fec_img_w">
                    <h4>Elevate Events and Opportunities</h4>
                    <p>Easily create and share events and job opportunities with specific student groups using our integrated solution.</p>
                </div>
                <div class="col-md-6 col-lg-6 col-10">
                  <img src="<?php echo base_url() ?>/assets/img/features-img/elevate_event.png" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="features" style="background: #F5F5F5;">
        <div class="container_width">
            <div class="row align-items-center justify-content-between flex-lg-row flex-column-reverse">
                <div class="col-md-6 col-lg-4">
                    <img src="<?php echo base_url() ?>/assets/img/features-img/foster.png" alt=""
                                    class="fec_img_w">
                    <h4>Foster a vibrant student culture</h4>
                    <p>Celebrate achievements, promote mental health, and build a positive atmosphere on campus.</p>
                </div>
                <div class="col-md-6 col-lg-6 col-10">
                  <img src="<?php echo base_url() ?>/assets/img/features-img/foster_vibrate.png" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container_width">
            <div class="row align-items-center justify-content-between flex-lg-row flex-column-reverse">
                <div class="col-md-6 col-lg-4">
                    <img src="<?php echo base_url() ?>/assets/img/features-img/boost.png" alt=""
                                    class="fec_img_w">
                    <h4>Boost Success with Collective Learning!</h4>
                    <p>Expand your circle, meet new faces, and team up for academic excellence.</p>
                </div>
                <div class="col-md-6 col-lg-6 col-10">
                  <img src="<?php echo base_url() ?>/assets/img/features-img/boost_success.png" alt="" width="100%">
                </div>
            </div>
        </div>
    </section>
    <?= view('common_file/footer') ?>
</body>
<?= view('link/js') ?>


</html>