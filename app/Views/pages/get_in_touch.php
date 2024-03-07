<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicircle | Get In Touch</title>
    <?= view('./link/css') ?>
    <style>
        .learn_more_btn{
            display:none;
        }
    </style>
</head>

<body>
    <?= view('common_file/header') ?>
    <section>
        <div class="contact-header">
            <div class="row justify-content-center text-center">
                <div class="col-md-10 section_title">
                    <span>Get in touch</span>
                    <p class="mt-5">We've got different ways for you to get in contact with us, depending on what you need help with:
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="contact-section">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-6">
                    <div class="demo">
                        <h4>Get in touch</h4>
                        <p>Please submit your information below and we will be in touch shortly to set up a live demo.</p>
                        <!-- <div id="progressbar">
                            <div></div>
                        </div> -->
                        <form class="info-form">
                            <div class="form-group ">
                                <label for="inputtext">Email Address <span>*</span></label>
                                <input type="email" class="form-control" id="inputtext" placeholder="">
                            </div>
                            <div class="form-group ">
                                <label for="inputtext">Subject <span>*</span></label>
                                <input type="text" class="form-control" id="inputtext" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="inputtext">Message <span>*</span></label>
                                <textarea class="form-control" name="" id="" rows="8"></textarea>
                            </div>
                            <div class="text-center mt-4    ">
                                <button type="submit" class="btn ">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-box">
                        <h3>Contact</h3>
                        <p>Any Questions? Inquiries? Demo Requests? Fill out the form and we'll be back to you shortly.
                        </p>

                    </div>
                    <hr class="mt-4 mb-4">
                    <div class="contact-box mt-4">
                        <div class="d-flex">
                            <div>
                                <h3>Contact Sales</h3>
                                <p>Looking for a custom quote? <br>Drop us a line at <a
                                        href="mailto:sales@unicircle.io"> <u> sales@unicircle.io</u></a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-box mt-4">
                        <div class="d-flex ">
                            <div>
                                <h3>Technical Support</h3>
                                <p>Contact your sales representative or alternatively send an email to<a
                                        href="mailto:support@eventus.io"><u> support@eventus.io</u></a> </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Admin Banner section end -->


    <?= view('common_file/footer') ?>
</body>
<?= view('link/js') ?>

</html>