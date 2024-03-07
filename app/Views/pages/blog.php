<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicircle | Blog </title>
    <?= view('./link/css') ?>
</head>

<body>
<?= view('common_file/header') ?>
    <section>
        <div class="blog-header">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 section_title">
                    <span>Blog Home</span>
                    <p class="mt-5">Occasional thoughts on Unicircle features, virtual software, education technology and other things.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="blogs-section">
            <div class="row justify-content-around">
                <div class="col-md-4">
                    <div class="blog-home-screen">
                        <div class="card card-body">
                            <img class="" src="<?php echo base_url('') ?>assets/img/blog/blog-1.png"
                                alt="" style="width: 100%;">
                            <div class="content">

                                <div class="blog-content">
                                    <h3>Why is Mobile Student Portal a Must for Every University & College?</h3>
                                    <p>Disruptive digital technologies have become second-nature to younger generations. A college freshman was around 5 years old when ...</p>
                                    
                                </div>
                                <a href="<?php echo base_url('blog_1') ?>" type="button"
                                        class="btn blog-btn btn-lg">read blog   > </a><br>
                                <!-- <a href="http://">Learn more <img src="images/Right Arrow.png" alt=""
                                    style="width: 34px;"></a> -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-home-screen">
                        <div class="card card-body">
                            <img class=""
                                src="<?php echo base_url('') ?>assets/img/blog/blog-2.png" alt=""
                                style="width: 100%;">
                            <div class="content">
                                <div class="blog-content">
                                    <h3>Push Notifications for Higher Education - A ‘smart’ system</h3>
                                    <p>Gen Z-ers practically exit the womb gripping a smartphone (98 percent use one). As a new wave of college students make their transition onto campus…</p>
                                        
                                </div>
                                <a href="<?php echo base_url('blog_2') ?>" type="button"
                                        class="btn blog-btn btn-lg"> read blog   ></a><br>
                                <!-- <a href="http://">Learn more <img src="images/Right Arrow.png" alt=""
                                    style="width: 34px;"></a> -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-home-screen">
                        <div class="card card-body">
                            <img class=""
                                src="<?php echo base_url('') ?>assets/img/blog/blog-3.png" alt=""
                                style="width: 100%;">
                            <div class="content">
                                <div class="blog-content">
                                    <h3>Personas in Higher Education</h3>
                                    <p>Personas represent the different user types or demographics that use a site, brand, or product in a similar fashion. Companies have found them to ...
                                    </p>
                                    
                                </div>
                                <a href="<?php echo base_url('blog_3') ?>" type="button"
                                        class="btn blog-btn btn-lg">read blog   ></a><br>
                                <!-- <a href="http://">Learn more <img src="images/Right Arrow.png" alt=""
                                    style="width: 34px;"></a> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Action Section End -->

    <?= view('common_file/footer') ?>
</body>
<?= view('link/js') ?>

</html>