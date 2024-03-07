<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicircle | Home</title>
    <?= view('./link/css') ?>
    <style>
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
                        <span>About Unicircle?</span>
                        <p class="mt-5">At Unicircle we're reshaping the student experience by offering a comprehensive,
                            all-inclusive social platform exclusively designed for students in India.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how_started">
        <div class="container_width">
            <div class="row justify-content-between">
                <div class="col-md-6">
                    <h6>How it started</h6>
                    <br>
                    <h4>Designed by Educators, <br>Embraced by Students</h4>
                    <p>
                        <br>
                        At Unicircle, our story started with Shanky & Chetan witnessing the chaos students faced
                        daily—struggling with scattered campus info. This bugged them, so they decided to fix it.
                        <br><br>
                        Months of research led to Unicircle—a game-changer designed to simplify campus life, connect
                        students, and redefine the essence of college camaraderie.
                    </p>
                </div>
                <div class="col-md-4">
                    <img class="text-right" src="<?php echo base_url() ?>/assets/img/about_us/design_educators.png"
                        alt="" style="width:100%;">
                </div>
            </div>
        </div>
    </section>
    <section class="our_mission">
        <div class="container_width">
            <div class="row">
                <div class="col-md-6">
                    <div class="mission_box">
                        <p>Our mission</p>
                        <br>
                        <h4>To tackle the student engagement problem head on.</h4>
                        <div class="text-end">


                            <img class="mt-5 text-right" src="<?php echo base_url() ?>/assets/img/about_us/mission.png"
                                alt="" style="width:155px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mission_img">
                    <img class="text-right" src="<?php echo base_url() ?>/assets/img/about_us/mission_right_1.png"
                        alt="">
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="leadership">
        <div class="container_width">
            <div class="row desktop-display">
                <h4 class="">Our <br><span> Leadership </span></h4>
                
                <div class="col-md-3">
                    <div class="leader_box box_1">
                        <div class="leader_content d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Shanky Paryani</h4>
                                <p class="mb-0">Co-founder & CEO</p>
                            </div>
                            <div>
                                <img src="<?php echo base_url() ?>/assets/img/about_us/ln.png" alt=""
                                    style="width:30px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="leader_box box_2">
                        <div class="leader_content d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Chetan Wakalkar</h4>
                                <p class="mb-0">Co-founder & CMO</p>
                            </div>
                            <div>
                                <img src="<?php echo base_url() ?>/assets/img/about_us/ln.png" alt=""
                                    style="width:30px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="leader_box box_3">
                        <div class="leader_content d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Rahul Parab</h4>
                                <p class="mb-0">Director & CTO</p>
                            </div>
                            <div>
                                <img src="<?php echo base_url() ?>/assets/img/about_us/ln.png" alt=""
                                    style="width:30px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="leader_box box_4">
                        <div class="leader_content d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Rahul Gokhale</h4>
                                <p class="mb-0">Chief Revenue Officer</p>
                            </div>
                            <div>
                                <img src="<?php echo base_url() ?>/assets/img/about_us/ln.png" alt=""
                                    style="width:30px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mobile-display">
                <h4 class="">Our <span> Leadership </span></h4>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="leader_box box_1">
                            <div class="leader_content d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>Shanky Paryani</h4>
                                    <p class="mb-0">Co-founder & CEO</p>
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>/assets/img/about_us/ln.png" alt=""
                                        style="width:30px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="leader_box box_2">
                            <div class="leader_content d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>Chetan Wakalkar</h4>
                                    <p class="mb-0">Co-founder & CMO</p>
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>/assets/img/about_us/ln.png" alt=""
                                        style="width:30px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="leader_box box_3">
                            <div class="leader_content d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>Rahul Parab</h4>
                                    <p class="mb-0">Director & CTO</p>
                                </div>
                                <div>
                                    <img src="<?php echo base_url() ?>/assets/img/about_us/ln.png" alt=""
                                        style="width:30px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                    <div class="leader_box box_4">
                        <div class="leader_content d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Rahul Gokhale</h4>
                                <p class="mb-0">Chief Revenue Officer</p>
                            </div>
                            <div>
                                <img src="<?php echo base_url() ?>/assets/img/about_us/ln.png" alt=""
                                    style="width:30px;">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="values">
        <div class="container_width">
            <div class="row">
                <div class="section_title mb-5 mt-5 text-center">
                    <span>Our Values</span>
                </div>
                <div class="col-md-4">
                    <div class="simplicity-box">
                        <p>We're devoted to streamlining our product, processes, and every interaction with you. By
                            eliminating unnecessary barriers, we focus on what truly matters, making every effort
                            impactful and meaningful.</p>
                        <div class="d-flex justify-content-between">
                            <h4>Simplicity</h4>
                            <img src="<?php echo base_url() ?>/assets/img/about_us/simplicity.png" alt=""
                                style="width:80px;">
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="speed-box">
                        <p>We move swiftly, respond promptly, and take decisive action. But speed without purpose is
                            futile. We take ownership, act intentionally, gather feedback, and evolve. This isn't just
                            speed; it's momentum and direction driving us forward.</p>
                        <div class="d-flex justify-content-between">
                            <h4>Speed</h4>
                            <img src="<?php echo base_url() ?>/assets/img/about_us/speed.png" alt=""
                                style="width:80px;">
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sound-box">
                        <p>Our commitment goes beyond reaching goals; it's about how we get there. At Tines, doing right
                            by our customers and team sets us apart. We trust, show transparency, uphold honesty, and
                            stand firm on integrity—always.</p>
                        <div class="d-flex justify-content-between">
                            <h4>Soundness</h4>
                            <img src="<?php echo base_url() ?>/assets/img/about_us/soundness.png" alt=""
                                style="width:80px;">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= view('common_file/footer') ?>
</body>
<?= view('link/js') ?>
<script>
    $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,

    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1    
        }
    }
})
</script>

</html>