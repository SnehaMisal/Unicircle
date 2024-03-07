<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicircle | Coming Soon</title>
    <?php $this->load->view('css'); ?>
    
</head>

<body>
<?php $this->load->view('header'); ?>
   
    <!-- Admin Banner section start -->
    <section>
        <div class="coming-banner">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 col-10">
                    <img src="<?php echo base_url('') ?>dist/img/comming-soon.png" alt="" style="width:auto;">
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Admin Banner section end -->
    <section>
        <div class="coming-section">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <h3>Coming Soon!</h3>
                   
                    <p>Sorry for the inconvenience - we're still working on this part of the documentation.</p>
                    <p>Please check back at a later date.</p>
                        <a href="<?php echo base_url('get_started') ?>" type="button" class="btn career-btn btn-lg"> Back </a><br>
                        
                </div>
            </div>
        </div>
    </section>
    





    <?php $this->load->view('footer'); ?>
</body>
<?php $this->load->view('js'); ?>

</html>