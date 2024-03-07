<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicircle | Home</title>
    <?php $this->load->view('css'); ?>
    <style>
    .modal-dialog {
        max-width: 800px;
        margin: 30px auto;
    }



    .modal-body {
        position: relative;
        padding: 0px;
    }

    .close {
        position: absolute;
        right: -30px;
        top: 0;
        z-index: 999;
        font-size: 2rem;
        font-weight: normal;
        color: #fff;
        opacity: 1;
    }
    </style>
</head>

<body>
<?php $this->load->view('header'); ?>
   
    <!-- Admin Banner section start -->
    <section>
        <div class="admin-banner">
            <div class="container-fluid">
                <div class="row desktop-display">
                    <img src="<?php echo base_url('') ?>dist/img/banner-image/career-banner.png" alt="" style="width:100%;">
                </div>
            </div>
        </div>
    </section>
    <!-- Admin Banner section end -->
    <section>
        <div class="career-section">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3>UniCircle in a nutshell</h3>
                    <h5>A rising star in the world of student engagement!</h5>
                    <p>UniCircle is a SAAS scaleup founded in 2022. We
                        offer solutions to institutions by offering an all-in-one solution for CRM and to stay connected
                        with students.</p>
                    <h6>CAREERS AT UNICIRCLE</h6>
                    <h5>Work with us</h5>
                    <p>Explore remote-friendly, flexible opportunities and join our mission to build tomorrow’s
                        cloud-based technology in a rapidly expanding academic world!</p>
                        <a href="<?php echo base_url('get_started') ?>" type="button" class="btn career-btn btn-lg"> View Careers </a><br>
                        <a href="<?php echo base_url('comming_soon') ?>" class="" 
                            ><u>Looking for Internship?</u></a>
                </div>
            </div>
        </div>
    </section>

    <?php $this->load->view('footer'); ?>
</body>
<?php $this->load->view('js'); ?>

</html>