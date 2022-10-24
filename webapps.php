<?php
    include_once 'header.php';
?>

<?php
    include_once 'sidebar.php';
?>

            <!-- Main Content -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-5 mt-5 mb-5">
                        <h3 class="page-title mt-4">PROJECTS</h3>

                        <!-- Projects Secondary Nav -->
                        <h3 class="lead mt-5">Web Applications</h3> 
                        <ul class="small d-inline-flex flex-wrap gap-4">
                            <li><a href="coded.php">Hand-coded Websites</a></li>
                            <li><a href="wordpress.php">WordPress Websites</a></li>
                            <li><a href="prototypes.php">Prototypes</a></li>
                            <li><a href="abm.php">Agent-Based Modelling</a></li>
                            <li><a href="graphics.php">Graphic Designs</a></li>
                        </ul>                       

                        <!--D-CALCULATOR -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="d-calculator">       
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://davenof.github.io/dalculator/" target="_blank"><img src="img/projects/webapps/1.jpg" width="100%" height="auto" alt="Calculator screenshot" title="Calculator screenshot"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Calculator Screenshot </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://davenof.github.io/dalculator/" target="_blank">D-Calculator | Version 1.0</a></div> 
                                                    <div class="text-primary mb-2">A Multipurpose Calculator</div>
                                                    <div class="lead fs-6">
                                                        Version 1.0 of D-Calculator was developed in September 2022 
                                                        <div class="mt-3 fw-bold">Technologies and Languages Used</div>
                                                        HTML 5, CSS, JavaScript

                                                        <div class="mt-3 fw-bold">Model Summary</div>                                                      
                                                        <p>
                                                            Version 1.0 is the current version of D-Calculator.
                                                        </p>
                                                        <p>
                                                            The calculator is meant to be a multipurpose calculator with functionalities 
                                                            that are beyond basic arithmetic. Hence, the final goal is to have a calculator 
                                                            that computes complex mathematical and statistical problems.
                                                        </p>
                                                        <p>
                                                            At Version 1.0 however, the calculator performs basic multiplication, division, 
                                                            addition, subtraction, and a few other mathematical functions correctly, but does 
                                                            not display the operators performing the math. That notwithstanding, visible operators 
                                                            will feature in later versions.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-tech" role="tabpanel" aria-labelledby="pills-tech-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div>
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        The entire structure of the calculator — including the display area and buttons — was marked up with 
                                                        HTML 5. 
                                                        
                                                        <div class="mt-3 fw-bold">CSS</div>
                                                        CSS was used to style the markup to make the calculator look the way it does.

                                                        <div class="mt-3 fw-bold">JavaScript</div>
                                                        The functionality of the calculator was accomplished with JavaScript.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>                                
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab101" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill" data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-tech-tab" data-bs-toggle="pill" data-bs-target="#pills-tech" type="button" role="tab" aria-controls="pills-tech" aria-selected="false">Technologies Application</button>
                                        </li>

                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visitmodel-tab" data-bs-toggle="pill" data-bs-target="#pills-visitmodel" type="button" role="tab" aria-controls="pills-visitmodel" aria-selected="false"><a href="https://davenof.github.io/dalculator/" target="_blank">See App</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php
    include_once 'footer.php';
?>
