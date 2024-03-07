
    <!-- <header>
        <div class="content d-flex justify-content-between align-items-center">
            <div><a href="home.php">
                <img src="<?php echo base_url('') ?>dist/img/icon/logo.png" alt="logo"></a>
            </div>
            <div class="menus">
                <ul class="d-flex justify-content-between">
                    <li>
                        <div class="dropdown show">
                            <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Features
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="student-feacture.php">For Studets</a>
                                <a class="dropdown-item" href="admin-feacture.php">For Administration</a>
                                <a class="dropdown-item" href="teacher-feacture.php">For Teachers</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Resources</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="book-demo.php" class="book_a_demo">Book a Demo</a></li>
                </ul>

            </div>
        </div>
    </header> -->

    <header>
        <nav class="navbar navbar-expand-sm bg-dark fixed-top content">
            <div class="container-fluid">
                <a href="<?php echo base_url('') ?>" class="logo">

                    <img src="<?php echo base_url('') ?>assets/img/icon/logo.png" alt="logo" width="120px">
                </a>

                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <button class="navbar-toggler hidden-lg-up text-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    &#9776;
                </button>

                <div id="navbarCollapse" class="menus collapse navbar-collapse justify-content-between">
                    <ul class="navbar-nav ml-auto nev_menu">
                        <!-- <li class="nav-item">
                            <a href="<?php echo base_url() ?>" class="nav-link ">
                                Home
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="<?php echo base_url('features') ?>" class="nav-link ">
                                Features
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('about_us') ?>" class="nav-link ">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('blog') ?>" class="nav-link ">
                                Resources
                            </a>
                        </li>
                        <li class="nav-item mobile-display">
                            <div class="dropdown show">
                                <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-bs-haspopup="true" aria-bs-expanded="false">
                                    Terms & Policies    
                                </a>
                                <div class="dropdown-menu" aria-bs-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo base_url('terms_of_use') ?>">Terms of use</a>
                                    <a class="dropdown-item" href="<?php echo base_url('cookie_policy') ?>">Cookie Policy</a>
                                    <a class="dropdown-item" href="<?php echo base_url('anti_bullying_policy') ?>">Anti-Bullying Policy</a>
                                    <a class="dropdown-item" href="<?php echo base_url('privacy_policy') ?>">Privacy Policy</a>
                                    <a class="dropdown-item" href="<?php echo base_url('community_guidlines ') ?>">Community Guidlines</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mobile-display">
                            <a href="<?php echo base_url('get_started') ?>" class="nav-link  get_start">
                            Get Started
                            </a>
                        </li>
                        <li class="nav-item mobile-display">
                            <a href="<?php echo base_url('get_in_touch') ?>" class="nav-link sign-in">
                            Get In Touch
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto desktop-display">
                     
                        <li class="nav-item">
                            <a href="<?php echo base_url('get_started') ?>" class="nav-link  get_start">
                            Get Started
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://campus.unicircle.io/" target="_blank" class="nav-link sign-in m-0">
                            Sign In
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </header>
