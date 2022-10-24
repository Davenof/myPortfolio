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
                        <h3 class="lead mt-5">Agent-based Modelling</h3> 
                        <ul class="small d-inline-flex flex-wrap gap-4">
                            <li><a href="coded.php">Hand-coded Websites</a></li>
                            <li><a href="wordpress.php">WordPress Websites</a></li>
                            <li><a href="webapps.php">Web Applications</a></li>
                            <li><a href="prototypes.php">Prototypes</a></li>
                            <li><a href="graphics.php">Graphic Designs</a></li>
                        </ul>                       

                        <!--COVID-19 SIMULATION -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="covid">       
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://tinyurl.com/4kkrf69t" target="_blank"><img src="img/projects/abm/1.jpg" width="100%" height="auto" alt="Model screenshot" title="Model screenshot"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Model Screenshot </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://tinyurl.com/4kkrf69t" target="_blank">COVID-19 Transmission and Prevention Model</a></div> 
                                                    <div class="text-primary mb-2">Agent-based Modelling Using NetLogo</div>
                                                    <div class="lead fs-6">
                                                        I developed this model June 2021 as a biologically-inspired computing project. 
                                                        <div class="mt-3 fw-bold">Technology Used</div>
                                                        NetLogo
                                                        <div class="mt-3 fw-bold">Model Summary</div>
                                                        The model simulates the transmission and prevention of the coronavirus (COVID-19) among humans interfacing in a small community.
                                                        The model basically shows how one COVID-positive person can transmit the virus to an entire community when
                                                        preventive measures are not adhered to. The model also simulates how people who strictly follow recommended preventive
                                                        measures can save themselves from contracting the disease. However, the only basis for prevention 
                                                        simulated in the model is social distance. Other factors influencing transmission and prevention, 
                                                        as well as recovery were not simulated. 
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
                                                        <div class="mt-3 fw-bold">NetLogo</div>
                                                        The model was coded in NetLogo using the NetLogo desktop app.                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-how" role="tabpanel" aria-labelledby="pills-how-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div>
                                                    <p>The model initialises with 30 persons of three breeds. There is one COVID-19 positive person from one breed named 
                                                    INFECTED and identified by the colour orange. There are 25 unprotected persons from another breed named PEOPLE, and 
                                                    identified by the colour grey. The third breed is the COMPLIANT breed. They are identified by the colour blue and 
                                                    comprise 4 protected persons. </p>
                                                    
                                                    <p>The persons move about their community in random manner. Anyone within 1.99 metres range from an infected 
                                                    person, and is not protected contracts the infection and turns orange. 1.99 is the susceptibility range 
                                                    in the model as two metres social distance is recommended for safety. However, only the PEOPLE 
                                                    breed has been represented as vulnerable as they are the unprotected group who do not abide by safety measures. 
                                                    Therefore, the COMPLIANT breed is protected and not prone to contracting the infection even when they are within 
                                                    1.99 radius of an infected person. This is because the model assumes they follow all safety precautions to the letter and 
                                                    never go wrong. Hence, they stand a lean or no chance of getting infected. </p>
                                                    
                                                    <p>When all unprotected persons are infected, the modelling stops automatically and the ticks stop counting. That 
                                                    means there is no vulnerable person left to be infected.</p>

                                                    <p>Summarily, the model explains the risk of not taking safety measures, and the importance of diligent adherence to 
                                                        safety precautions, as research shows that social distancing and stringent hygiene effectively reduce transmission 
                                                        and flattens the epidemic curve.                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-use" role="tabpanel" aria-labelledby="pills-use-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div>
                                                        <p>The "Model Info" section at the bottom, as shown in the image below provides information
                                                            on how to use the model.
                                                        </p>
                                                        <p class="text-center"><a href="https://tinyurl.com/4kkrf69t" target="_blank"><img src="img/projects/abm/1b.jpg" width="50%" height="auto" alt="Model screenshot" title="Model screenshot"></a></p>
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
                                            <button class="nav-link" id="pills-how-tab" data-bs-toggle="pill" data-bs-target="#pills-how" type="button" role="tab" aria-controls="pills-how" aria-selected="false">How It Works</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-use-tab" data-bs-toggle="pill" data-bs-target="#pills-use" type="button" role="tab" aria-controls="pills-use" aria-selected="false">How To Use It</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visitmodel-tab" data-bs-toggle="pill" data-bs-target="#pills-visitmodel" type="button" role="tab" aria-controls="pills-visitmodel" aria-selected="false"><a href="https://tinyurl.com/4kkrf69t" target="_blank">See Model</a></button>
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
