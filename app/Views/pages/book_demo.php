<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicircle | Home</title>
    <?= view('./link/css') ?>
<style>
    .blog-header p{
        font-size: 40px;
    }
    .demo{
        border-top: 5px solid #2D5DD0;
        background:#fff;
    }
    .get_start-btn{
        display:none;
    }
</style>
</head>

<body>
    <?= view('common_file/header') ?>
    <!-- Admin Banner section start -->
    <section>
        <div class="blog-header">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 section_title">
                    <span>Get Started</span>
                    <p class="mt-5">Get a Free Demo of Unicircle’s Campus Engagement Software
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section style="background: #FFFFFF;">
        <div class="request-demo-section">
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="demo-content">
                        <h4>Request a Demo</h4>
                        <h3>Get a Free Demo of UN1CIRCLE’s Campus Engagement Software</h3>
                        <p>UN1CIRCLE’s Campus Software is everything you need to improve student engagement and strengthen student-institution relationship - backed by a support team that helps you focus on what matters: Delivering an impactful student experience.</p>


                    </div>
                </div>
                <div class="col-md-5">
                    <div class="demo">
                        <div class="demo-form">
                            <h3>Yes, I want a demo</h3>
                            <p>Please submit your information below and we will be in touch shortly to set up a live
                                demo.
                            </p>
                        </div>
                        <form class="info-form">
                            
                            <!-- <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputtext">Countries <span>*</span></label>
                                    <select name="" id="address-country" class="form-control"
                                        id="exampleFormControlSelect1">
                                    </select>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label for="inputtext"> Name *</label>
                                    <input type="text" class="form-control" id="inputtext" placeholder="">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputtext">Last Name *</label>
                                    <input type="text" class="form-control" placeholder=""
                                        aria-label="Last name">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputtext">Email *</label>
                                    <input type="email" class="form-control" id="inputtext" placeholder="">
                                </div>
                                <div class=" col-md-6">
                                    <label for="inputtext">Phone *</label>
                                    <input type="text" class="form-control" id="inputtext" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputtext">Institution Name *</label>
                                    <input type="text" class="form-control" id="inputtext" placeholder="">
                                </div>
                                <div class=" col-md-6">
                                    <label for="inputtext">Website URL</label>
                                    <input type="text" class="form-control" id="inputtext" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputtext">Number of Students *</label>
                                <!-- <input type="text" class="form-control" id="inputtext" placeholder=""
                                    value="100 to 500"> -->
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Select</option>
                                    <option>100-1000</option>
                                    <option>1000-2000</option>
                                    <option>2000-3000</option>
                                    <option>3000-4000</option>
                                    <option>4000-5000</option>
                                    <option>5000-10000</option>
                                    <option>10000+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck"
                                        >
                                        Subscribe to Unicircle’s marketing blog
                                    </label>
                                </div>
                            </div>
                            <p>We’re committed to your privacy. UN1CIRCLE uses the information you provide to us to contact you about our relevant content, products and services.</p>
                            <div class="text-center">
                                <button type="submit" class="btn ">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?= view('common_file/footer') ?>
</body>
<?= view('link/js') ?>


<script>
// country Name

// International telephone format
// $("#phone").intlTelInput();
// get the country data from the plugin
// var countryData = window.intlTelInputGlobals.getCountryData(),
//     addressDropdown = document.querySelector("#address-country");

// populate the country dropdown
// for (var i = 0; i < countryData.length; i++) {
//     var country = countryData[i];
//     var optionNode = document.createElement("option");
//     optionNode.value = country.iso2;
//     var textNode = document.createTextNode(country.name);
//     optionNode.appendChild(textNode);
//     addressDropdown.appendChild(optionNode);
// }
// set it's initial value
</script>

</html>