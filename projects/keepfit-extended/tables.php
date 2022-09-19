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
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Students' Data - KeepFit</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <!-- <link href="css/styles-2.css" rel="stylesheet" /> -->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <!-- Navigation-->
        <!-- Primary Navbar-->
        <?php
            include_once 'primary-nav.php';
        ?>
        <!-- Secondary Navbar-->
        <?php
            include_once 'secondary-nav-dashboard.php';
        ?>
        <!-- Main Content Area -->
        <div id="layoutSidenav">
            <!-- Sidebar -->
            <?php
                include_once 'sidebar.php';
            ?>
            <!-- White Monthly Charts Area -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <ol class="sub-dashboard breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <h3 class="mt-4"><i class="fas fa-table"></i> &nbsp; Students' Data Table</h3>
                        <p></p>
                        <div class="card mb-4">
                            <div class="card-header report-para">
                                <i class="fas fa-id-card me-1"></i>All Enrolled Students
                                <ul>
                                    <li class="small text-primary"><a href="#!"><i class="fas fa-download fa-sm"></i> Download</a></li>
                                    <li class="small text-primary">&#124;</li>
                                    <li class="small text-primary"><a href="#!"><i class="fas fa-print fa-sm"></i> Print</a></li>
                                    <li class="small text-primary">&#124;</li>
                                    <li class="small text-primary"><a href="#!"><i class="fas fa-share fa-sm"></i> Share</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>School Name</th>
                                            <th>Area Code</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Badge</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Student Name</th>
                                            <th>School Name</th>
                                            <th>Area Code</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Badge</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>David Ofili</td>
                                            <td>Everton Free School</td>
                                            <td>L4</td>
                                            <td>14</td>
                                            <td>2022/01/25</td>
                                            <td><i class="fa fa-award"></i> Cardio Magician</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>The Alsop High School</td>
                                            <td>L32</td>
                                            <td>13</td>
                                            <td>2022/07/25</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td><i class="fa fa-crown"></i> Endurance Queen</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Calderstones School</td>
                                            <td>L4</td>
                                            <td>15</td>
                                            <td>2022/03/29</td>
                                            <td><i class="fa fa-shield"></i> Contender</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Archbishop Beck Catholic Sports College</td>
                                            <td>L20</td>
                                            <td>16</td>
                                            <td>2022/11/28</td>
                                            <td><i class="fa fa-trophy"></i> Board Leader</td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Childwall Sports & Science Academy</td>
                                            <td>L9</td>
                                            <td>12</td>
                                            <td>2012/12/02</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Liverpool College</td>
                                            <td>L15</td>
                                            <td>13</td>
                                            <td>2022/08/06</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>King David High School</td>
                                            <td>L6</td>
                                            <td>15</td>
                                            <td>2022/10/14</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Holly Lodge Girls' College</td>
                                            <td>L27</td>
                                            <td>13</td>
                                            <td>2022/09/15</td>
                                            <td> -- </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Dixons Broadgreen Academy</td>
                                            <td>L12</td>
                                            <td>14</td>
                                            <td>2022/12/13</td>
                                            <td><i class="fa fa-medal"></i> Swim Goldfish</td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Childwall Sports & Science Academy</td>
                                            <td>L9</td>
                                            <td>12</td>
                                            <td>2012/12/02</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Everton Free School</td>
                                            <td>L4</td>
                                            <td>14</td>
                                            <td>2012/01/25</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>North Liverpool Academy</td>
                                            <td>L13</td>
                                            <td>14</td>
                                            <td>2022/12/18</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td><i class="fa fa-crown"></i> Strength Queen</td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>St Edward's College</td>
                                            <td>L3</td>
                                            <td>16</td>
                                            <td>2022/11/27</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Notre Dame Catholic College</td>
                                            <td>L48</td>
                                            <td>15</td>
                                            <td>2022/06/09</td>
                                            <td><i class="fa fa-trophy"></i> Board Leader</td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Holly Lodge Girls' College</td>
                                            <td>L27</td>
                                            <td>12</td>
                                            <td>2022/04/10</td>
                                            <td><i class="fa fa-medal"></i> Trailblazer</td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>North Liverpool Academy</td>
                                            <td>L13</td>
                                            <td>16</td>
                                            <td>2022/10/13</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>The Alsop High School</td>
                                            <td>L32</td>
                                            <td>13</td>
                                            <td>2022/09/26</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Fiona Green</td>
                                            <td>Everton Free School</td>
                                            <td>L4</td>
                                            <td>14</td>
                                            <td>2012/01/25</td>
                                            <td><i class="fa fa-award"></i> Cardio Magician</td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>The Alsop High School</td>
                                            <td>L32</td>
                                            <td>13</td>
                                            <td>2022/07/25</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Jennifer Chang</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td><i class="fa fa-crown"></i> Endurance Queen</td>
                                        </tr>
                                        <tr>
                                            <td>Ifeoma Onyedikachi</td>
                                            <td>Calderstones School</td>
                                            <td>L4</td>
                                            <td>15</td>
                                            <td>2022/03/29</td>
                                            <td><i class="fa fa-shield"></i> Contender</td>
                                        </tr>
                                        <tr>
                                            <td>Gavin Joyce</td>
                                            <td>Archbishop Beck Catholic Sports College</td>
                                            <td>L20</td>
                                            <td>16</td>
                                            <td>2022/11/28</td>
                                            <td><i class="fa fa-trophy"></i> Board Leader</td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>Childwall Sports & Science Academy</td>
                                            <td>L9</td>
                                            <td>12</td>
                                            <td>2012/12/02</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Ernest Musasizi</td>
                                            <td>Liverpool College</td>
                                            <td>L15</td>
                                            <td>13</td>
                                            <td>2022/08/06</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Caesar Vance</td>
                                            <td>King David High School</td>
                                            <td>L6</td>
                                            <td>15</td>
                                            <td>2022/10/14</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Holly Lodge Girls' College</td>
                                            <td>L27</td>
                                            <td>13</td>
                                            <td>2022/09/15</td>
                                            <td> -- </td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Dixons Broadgreen Academy</td>
                                            <td>L12</td>
                                            <td>14</td>
                                            <td>2022/12/13</td>
                                            <td><i class="fa fa-medal"></i> Swim Goldfish</td>
                                        </tr>
                                        <tr>
                                            <td>Shou Itou</td>
                                            <td>Childwall Sports & Science Academy</td>
                                            <td>L9</td>
                                            <td>12</td>
                                            <td>2012/12/02</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Chan Hin</td>
                                            <td>Everton Free School</td>
                                            <td>L4</td>
                                            <td>14</td>
                                            <td>2012/01/25</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Hiroyuki Osayuki</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Nayo Mwabadiwe</td>
                                            <td>North Liverpool Academy</td>
                                            <td>L13</td>
                                            <td>14</td>
                                            <td>2022/12/18</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Brendan Thandiwe</td>
                                            <td>Redbridge High School</td>
                                            <td>L16</td>
                                            <td>14</td>
                                            <td>2022/01/12</td>
                                            <td><i class="fa fa-crown"></i> Strength Queen</td>
                                        </tr>
                                        <tr>
                                            <td>Macy Gray</td>
                                            <td>St Edward's College</td>
                                            <td>L3</td>
                                            <td>16</td>
                                            <td>2022/11/27</td>
                                            <td>--</td>
                                        </tr>
                                        <tr>
                                            <td>Martena Mccray</td>
                                            <td>Notre Dame Catholic College</td>
                                            <td>L48</td>
                                            <td>15</td>
                                            <td>2022/06/09</td>
                                            <td><i class="fa fa-trophy"></i> Board Leader</td>
                                        </tr>
                                        <tr>
                                            <td>Prescott Bartlett</td>
                                            <td>Holly Lodge Girls' College</td>
                                            <td>L27</td>
                                            <td>12</td>
                                            <td>2022/04/10</td>
                                            <td><i class="fa fa-medal"></i> Trailblazer</td>
                                        </tr>
                                        <tr>
                                            <td>Suki Burks</td>
                                            <td>North Liverpool Academy</td>
                                            <td>L13</td>
                                            <td>16</td>
                                            <td>2022/10/13</td>
                                            <td><i class="fa fa-star"></i> Achiever</td>
                                        </tr>
                                        <tr>
                                            <td>Michelle House</td>
                                            <td>The Alsop High School</td>
                                            <td>L32</td>
                                            <td>13</td>
                                            <td>2022/09/26</td>
                                            <td>--</td>
                                        </tr>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
