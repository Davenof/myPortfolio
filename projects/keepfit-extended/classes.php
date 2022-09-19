<?php

    session_start();

    if (!isset($_SESSION['userEmail'])) {
        header("Location: 401.php");
        die();
} 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Classes - KeepFit</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Powers the Toggle Tooltip -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php
                include_once 'primary-nav.php';
            ?>
            <!-- Secondary Navbar-->
            <?php
                include_once 'secondary-nav.php';
            ?>
            <!-- Header Ends -->
        <main>
            <!-- Page Content Starts-->
            <header class="py-5 test-bg">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder mb-2">A good fitness attitude keeps you collected </h1>
                                <p class="lead fw-normal mb-4">Get inspired with exercises designed to keep you hale, confident, sound, and hearty! Your health is your wealth</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#current-classes">Get Started</a>
                                    <a class="btn btn-outline-light btn-lg px-4" id="btn-changed" href="challenges.php">Challenge Yourself</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="images/6.jpg" width="600" height="400" alt="Classes Profile Picture" /></div>
                    </div>
                </div>
            </header>
            <!-- Testimonial section-->
            <div class="py-5 bg-dark">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic text-light">"Working with teachers and instructors has saved me tons of doctor's appointments. Taking part in classes helped me develop a sound mind and a confident attitude!"</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="images/profile_photo.png" width="40" height="40" alt="Student Photo" />
                                    <div class="fw-bold text-white">
                                        David Ofili
                                        <span class="fw-bold text-muted mx-1">/</span>
                                        <span class="text-warning">Hillside High School</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Classes Section-->
            <section class="py-5">
                <div class="container px-5 my-5" id="current-classes">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Current Classes</h2>
                                <p class="lead fw-normal text-muted mb-5">The only bad class is the one you did not join!</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <a class="class-image-edit" href="class-template.php"><img class="card-img-top" src="images/1.jpg" alt="Class Image" /></a>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2 exe-category"><a class="text-decoration-none text-white" href="#!">Flexibility</a></div>
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2 exe-category"><a class="text-decoration-none text-white" href="#!">Endurance</a></div>
                                    <div class="badge bg-warning bg-gradient rounded-pill mb-2"><a class="text-decoration-none text-white" href="#!">Outdoor</a></div>
                                    <h5 class="class-title-edit card-title mb-3"><a class="text-decoration-none link-dark" href="class-template.php">Strength and Mobility</a></h5>
                                    <p class="card-text mb-0">Research has shown that it's important to get all four types of exercise: endurance, strength, balance, and flexibility. 
                                        Each one has different benefits. Doing one kind also can improve your ability to do the others, and variety helps reduce boredom and risk of injury. <a href="class-template.php">Read more</a></p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="class-image-edit" href="profile-view.php"><img class="rounded-circle me-3" src="images/profile_photo.png" width="40" height="40" alt="Instructor's Photo" /></a>
                                            <div class="small">
                                                <div class="class-title-edit fw-bold"><a class="text-decoration-none link-dark" href="profile-view.php">David Ofili</a> <span class="fw-normal text-muted">| Instructor</span> </div>
                                                <div class="text-muted">Started April 1, 2022 &middot; 14 days left</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <a class="class-image-edit" href="class-template.php"><img class="card-img-top" src="images/2.jpg" alt="Class Image" /></a>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2 exe-category"><a class="text-decoration-none text-white" href="#!">Balance</a></div>
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2 exe-category"><a class="text-decoration-none text-white" href="#!">Flexibility</a></div>
                                    <div class="badge bg-warning bg-gradient rounded-pill mb-2"><a class="text-decoration-none text-white" href="#!">Indoor & Outdoor</a></div>
                                    <h5 class="class-title-edit card-title mb-3"><a class="text-decoration-none link-dark" href="class-template.php">Wellbeing Workout</a></h5>
                                    <p class="card-text mb-0">All exercises are  not equally intense and difficult. Join an interesting supportive class of 
                                        people with a knack for wellbeing. This class combines dance, yoga, and light workouts, and concludes with a warm balm bath
                                        in the spa for complete freshness and wellness. <a href="class-template.php">Read more</a> 
                                    </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="class-image-edit" href="profile-view.php"><img class="rounded-circle me-3" src="images/profile_photo.png" width="40" height="40" alt="Instructor's Photo" /></a>
                                            <div class="small">
                                                <div class="class-title-edit fw-bold"><a class="text-decoration-none link-dark" href="profile-view.php">Jaydee Jay</a> <span class="fw-normal text-muted">| Instructor</span> </div>
                                                <div class="text-muted">Started April 9, 2022 &middot; 21 days left</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <a class="class-image-edit" href="class-template.php"><img class="card-img-top" src="images/3.jpg" alt="Class Image" /></a>
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2 exe-category"><a class="text-decoration-none text-white" href="#!">Balance</a></div>
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2 exe-category"><a class="text-decoration-none text-white" href="#!">Strength</a></div>
                                    <div class="badge bg-warning bg-gradient rounded-pill mb-2"><a class="text-decoration-none text-white" href="#!">Indoor</a></div>
                                    <h5 class="class-title-edit card-title mb-3"><a class="text-decoration-none link-dark" href="class-template.php">Legs, Butt and Thigh</a></h5>
                                    <p class="card-text mb-0">This fast-paced class is lovely and easy to continue at home. 
                                        It gets your heart rate up (bonus cardio!) and recruits your inner and outer thigh muscles to help you quickly switch directions.  
                                        This class comes with free swimming, diet, and weight loss lessons. <a href="class-template.php">Read more</a> </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="class-image-edit" href="profile-view.php"><img class="rounded-circle me-3" src="images/profile_photo.png" width="40" height="40" alt="Instructor's Photo" /></a>
                                            <div class="small">
                                                <div class="class-title-edit fw-bold"><a class="text-decoration-none link-dark" href="profile-view.php">Laura Fyls</a> <span class="fw-normal text-muted">| Instructor</span> </div>
                                                <div class="text-muted">Starts May 2, 2022 &middot; 16 days more</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
         <!-- Footer-->
        <div id="layoutAuthentication_footer">
            <footer class="bg-dark py-4 mt-auto">
                <div class="container px-5">
                    <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                        <div class="col-auto">
                            <div class="small m-0 text-muted" id="attribution">
                                &copy; 2022 | Designed and developed by <a class="text-muted" href="https://www.linkedin.com/in/david-ofili-7b9a752a/" 
                                target="_blank">David Ofili</a>. Powered by <a class="text-muted" href="https://code-academy.co.uk/" 
                                target="_blank">Code Academy UK</a> | All rights reserved.
                            </div>
                        </div>
                        <div class="col-auto" id="attr-link">
                            <a class="link-light small text-muted" href="#!">Privacy</a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-light small text-muted" href="#!">Terms</a>
                            <span class="text-white mx-1">&middot;</span>
                            <a class="link-light small text-muted" href="#!">Contact</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
        <!-- <?php // include_once 'footer-basic.php'; ?> -->