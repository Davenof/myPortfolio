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
                        <h3 class="lead mt-5">Hand-coded Websites</h3> 
                        <ul class="small d-inline-flex flex-wrap gap-4">
                            <li><a href="wordpress.php">WordPress Websites</a></li>
                            <li><a href="webapps.php">Web Applications</a></li>
                            <li><a href="prototypes.php">Prototypes</a></li>
                            <li><a href="abm.php">Agent-Based Modelling</a></li>
                            <li><a href="graphics.php">Graphic Designs</a></li>
                        </ul>

                        <!--MY PORTFOLIO -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="portfolio">       
                            <div class="tab-content" id="pills-tabContent1">
                                <div class="tab-pane fade show active" id="pills-about1" role="tabpanel" aria-labelledby="pills-about1-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="index.php" target="_blank"><img src="img/projects/106.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of website's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Website's Responsive Views</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="index.php" target="_blank">DAVIDOFILI.INFO</a></div> 
                                                    <div class="text-primary mb-2">The Portfolio You Are Viewing</div>
                                                    <div class="lead fs-6">
                                                        I hand-coded my portfolio between June and July 2022. However, the portfolio is an on-going project as
                                                        I improve on it from time to time.  

                                                        <div class="mt-3 fw-bold">Technologies Used</div>
                                                        HTML 5, Bootstrap 5, CSS 3, JavaScript, PHP, CorelDRAW
                                                        <div class="mt-3 fw-bold">Design Principles</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">General</div> <div class="badge rounded-pill bg-secondary mb-2">Heuristics</div> <div class="badge rounded-pill bg-secondary mb-2">Nielsen</div><br>
                                                        Having gained experience from the application of several design principles, I applied general design knowledge
                                                        in the design of my portfolio. However, the Jakob Nielsen's 
                                                        <a href="https://www.nngroup.com/articles/ten-usability-heuristics/" target="_blank" class="principle fst-italic">10 Usability Heuristics for User Interface Design</a>  
                                                        helped in my heuristic analysis. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-techlang1" role="tabpanel" aria-labelledby="pills-techlang1-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                <div class="lead fs-3 mb-2">Summary</div> 
                                                <div class="small text-muted mb-2">This is only a summary of how technologies and design principles have been applied. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        The markup that determined the structure of the entire website was done with HTML 5. HTML 
                                                        set the tone for styling and animation. 

                                                        <div class="mt-3 fw-bold">Bootstrap 5</div>
                                                        A Bootstrap 5 theme was used. However, with significant HTML and CSS addition to the default markup
                                                        and styling respectively, the theme was redesigned to look completely different from the original. 
                                                        Nevertheless, some Bootstrap 5 theme defaults played significant roles in the responsiveness of the 
                                                        website. Also, Bootstrap 5 classes were used largely for styling single elements, tweaking fonts, and 
                                                        making responsive columns.

                                                        <div class="mt-3 fw-bold">CSS 3</div>
                                                        CSS 3 was used extensively for redesigning the default Bootstrap 5 theme. The complete responsiveness of all elements 
                                                        on all pages was done with CSS 3. The homepage was styled almost completely with CSS 3, including defining media rules
                                                        for excellent responsiveness. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="mt-3 fw-bold">JavaScript</div>
                                                    JavaScript was used with CSS to make the sidebar holding the menu items toggle. JavaScript was also used to 
                                                    highlight on the menu list, the current page the site's visitor is viewing. Additionally, JavaScript was 
                                                    used to implement Google analytics on the website.

                                                    <div class="mt-3 fw-bold">PHP</div>
                                                    PHP was used to call into each page, the sidebar holding the menu items, the header holding the "Menu Toggle" button,
                                                    and the footer holding the site credits. The essence was to reduce the size of the pages, and to enhance page loading time consequently.
                                                    PHP was used also to create sessions that collect site visits data for analytics. PHP sessions were preferred 
                                                    over cookies as collected data are stored on the server, as against storing them on the site visitor's browser 
                                                    like cookies do. Additionally, PHP was used to manage redirections where they apply.

                                                    <div class="mt-3 fw-bold">CorelDRAW</div>
                                                    All images on the website were enhanced with CorelDRAW in order to achieve their purpose. CorelDraw was used to 
                                                    trim and resize images, add overlay effects where needed, and enhance overall appearance. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles1" role="tabpanel" aria-labelledby="pills-principles1-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of aspects of design principles applied.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">Visibility of System Status</div>
                                                        Page titles were used on all the pages, apart from the homepage, to help site users know what page they are 
                                                        currently viewing. In addition to page titles, the menu item (on the sidebar menu list) linking the current page a 
                                                        visitor is viewing changes colour and becomes underlined. Also, section titles and subtitles were used where 
                                                        necessary to help the site's user recognise what section of the page they are on. On pages with lengthy content, 
                                                        accordions and section buttons were used to compress and manage content for quick visibility and easy navigation.
                                                        To help the site's user know the current section they are on, the background colour of buttons linking 
                                                        the section changes, as well as the text colour. Such clues help the user understand what part of the page they are on. <br>

                                                        To further reduce confusion and help users ascertain where they are on a page with lengthy text,
                                                        pages were kept generally short so that readers would not have to scroll deep down the page and get 
                                                        confused or bored. Hence, accordions, columns, and sentence rephrasing were used to compact text and reduce the height of pages. 
                                                        Keeping pages short is beneficial to mobile users to avoid "endless" scrolling, thus, helping them reach out   
                                                        quickly for system status clues.
                                                                                                            
                                                        <div class="mt-3 fw-bold">Match Between System and the Real World</div>
                                                        I designed my portfolio for anyone who may have access to it; not just for people in the same field or profession 
                                                        as me. Therefore, simple and plain English was used broadly to express ideas. However, where coding syntax was 
                                                        used, they were mostly italicised and wrapped in quotation marks. 

                                                        <div class="mt-3 fw-bold">User Control and Freedom</div>
                                                        To give the site's user an "emergency exit" when they need to leave a page or section, the menu sidebar was fixed 
                                                        to the left side of pages to enhance visibility, as psychology theories and design principles have it that elements 
                                                        on the left side have high visibility chances. One of the reasons the menu items were positioned to the left as 
                                                        against the conventional top navigation style is to help mobile users who may have to scroll way down a lengthy page 
                                                        to not scroll back up before they can leave the page. Hence, the "Menu Toggle" button was made sticky on mobile 
                                                        devices, so that no matter where a user may be on the page, the button is always within sight, and when clicked, the 
                                                        menu sidebar slides in from the left, also within the user's current "<span class="fst-italic">viewport</span>". 
                                                        Similarly, for larger screens not considered mobile, users always have the sidebar within sight no matter where they 
                                                        may be on the page. That helps them avoid getting stuck and feeling frustrated. <br>
                                                        On some pages, such as the "Projects" page, tabs were used as submenu to complement the primary menu. That helps the 
                                                        user remain in control of their activities on the site.

                                                        <div class="mt-3 fw-bold">Consistency and Standards</div>
                                                        Consistency was maintained where elements like buttons, tabs, accordions, and other navigational features were used. 
                                                        Although such elements were used to perform similar actions across the website's pages, they were also used in 
                                                        similar fashion as they would be used on other websites and systems. Apart from standard coding syntax that were 
                                                        used to express specific ideas, British spellings were also used consistently because of my background.
                                                
                                                        <div class="mt-3 fw-bold">Error Prevention</div>
                                                        The website was designed in a way that error messages or action feedback would not be needed. HTML markups and CSS 
                                                        styles make up the bulk of the website, with little JavaScript for menu toggling. Hence, the website does not contain 
                                                        much error-prone conditions order than hyperlinking texts and elements. However, where images are hyperlinked, alternative 
                                                        texts and image titles which appear upon hovering over the image were provided. Apart from an alternative text playing 
                                                        an important accessibility and inclusivity role, they also have been provided alongside image titles as feedback to the 
                                                        user, in the event that the image didn't display for some reasons.

                                                        <div class="mt-3 fw-bold">Recognition Rather Than Recall</div>
                                                        To minimise memory load for the site's user, irrespective of their device's screen dimensions, visible sizes were used 
                                                        for texts and other elements. Visibility hierarchy was maintained also according to the 
                                                        <a href="https://en.wikipedia.org/wiki/Visual_hierarchy" target="_blank">Gestalt Principle (theory) of Visual Hierarchy</a>. 
                                                        Using visible sizes helps the user retrieve information easily so they don't have to put in much cognitive effort 
                                                        to recognise options.

                                                        <div class="mt-3 fw-bold">Flexibility and Efficiency of Use</div>
                                                        To speed up interaction for the site's user, the option of toggling the menu sidebar was provided so that the user 
                                                        could choose what view was most convenient for them at a particular time. Also, various options for navigating 
                                                        content were provided, such as the primary menu, hypertexts, buttons, etc. Rather than having just the 
                                                        primary menu and page scrolling as the only navigation options, the user was provided with options to enhance 
                                                        flexibility and efficiency. However, the "page search" feature was not included as an option for speeding up 
                                                        interaction because I have plans of including other dynamic and server-side features in the future. Therefore, 
                                                        upon implementation of dynamic functions, users will be able to search the entire website for specific content, 
                                                        as well as enjoy other dynamic options. Furthermore, all external links provided on the site were targeted to open up 
                                                        in a different browser tab. That was done to accelerate revisiting the site and the particular section the user 
                                                        was on after viewing an external content, rather than depending on the browser's "back" option, or retyping the 
                                                        web address.
                                                    
                                                        <div class="mt-3 fw-bold">Aesthetic and Minimalist Design</div>
                                                        Information not necessarily relevant have been expunged as much as possible to give prominence to relevant units 
                                                        of information, as well as improve their visibility. Also, elements and features that may not be used were 
                                                        also removed. Hence, all current inclusions have the potentiality of use. To achieve minimalism also,  
                                                        limited colour, few elements (where applicable), sufficient white (negative) space/background, varied typography, 
                                                        and some sort of "flat design" were used. However, the aim of the minimalistic design was not to achieve an overly 
                                                        simple-looking website, but to keep the user interface focused on elements and content that support user tasks.

                                                        <div class="mt-3 fw-bold">Help Users Recognize, Diagnose, and Recover From Errors</div>
                                                        Because the website is devoid of extensive dynamic content and made up of linked files and texts, there wasn't 
                                                        much need to worry about error recognition, diagnosis, and recovery on the "frontend". However, because links 
                                                        could be broken, and images might not display for some reasons, links were crosschecked to avoid breaks as "Error 
                                                        Prevention", while alternative texts and image titles which appear upon mouse hover were used to help the user 
                                                        recognise what is missing, in addition to their conventional function of accessibility and inclusivity. Nonetheless, 
                                                        server side error handling mechanisms have been depended upon for "backend"-related error recognition, diagnosis, and 
                                                        recovery.

                                                        <div class="mt-3 fw-bold">Help and Documentation</div>
                                                        The minimalistic design of the website reduces to a great extent, the website user's need for additional explanation 
                                                        to carry out necessary tasks. However, other than providing alternative image texts for a person who is blind, or 
                                                        a person with vision impairment or low vision, image titles which display when an image is hovered on were also 
                                                        provided to help the user without vision impairment understand what an image is about. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab1" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about1-tab" data-bs-toggle="pill" data-bs-target="#pills-about1" type="button" role="tab" aria-controls="pills-about1" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang1-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang1" type="button" role="tab" aria-controls="pills-techlang1" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-principles1-tab" data-bs-toggle="pill" data-bs-target="#pills-principles1" type="button" role="tab" aria-controls="pills-principles1" aria-selected="false">Principles Application</button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--Portfolio Ends-->

                        <!-- OnePage -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="onepage">       
                            <div class="tab-content" id="pills-tabContent2">
                                <div class="tab-pane fade show active" id="pills-about2" role="tabpanel" aria-labelledby="pills-about2-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://davenof.github.io/onepage/" target="_blank"><img src="img/projects/109.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of website's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Website's Responsive Views</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://davenof.github.io/onepage/" target="_blank">OnePage</a></div> 
                                                    <div class="text-primary mb-2">A Mobile-First One-Page Layout Website</div>
                                                    <div class="lead fs-6">
                                                        I developed this website in October 2022. The aim was to implement a Mobile-First one-page layout template 
                                                        which could be adapted by anyone. 
                                                        <div class="mt-3 fw-bold">Technologies Used</div>
                                                        HTML 5, CSS, JavaScript, CorelDRAW

                                                        <div class="mt-3 fw-bold">Development Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">Mobile-First</div> <br>
                                                        The website was developed first for mobile phones, before it was scaled up for relatively wider 
                                                        screen sizes in line with the 
                                                        <a href="https://www.invisionapp.com/inside-design/mobile-first-design/" target="_blank" class="principle fst-italic">Mobile-First</a>
                                                        principle.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-techlang2" role="tabpanel" aria-labelledby="pills-techlang2-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                <div class="lead fs-3 mb-2">Summary</div> 
                                                <div class="small text-muted mb-2">This is only a summary of how technologies have been used. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        The entire structure of the website was marked up using HTML 5 syntax for accessibility, especially for 
                                                        screen readers which aid website navigation for the blind and visually impaired.

                                                        <div class="mt-3 fw-bold">CSS</div>
                                                        CSS was used to style the website in its entirety. With the <a href="https://www.w3.org/TR/mediaqueries-3/" target="_blank" class="text-primary">CSS Media Queries Rule</a>, 
                                                        responsive designs which resulted from mobile-first implementation were achieved. Text transition from bottom to top in 
                                                        the homepage slide show was done with CSS. The behaviour and hover effects of all the buttons on the 
                                                        website were done with CSS. In the "Testimonial" section, CSS was used to achieve the text sliding effect. 
                                                        In the "Our Team" section also, CSS was used to implement an overlay effect that appears upon hover 
                                                        on a team member's image, or click on touch screen devices.

                                                        <div class="mt-3 fw-bold">JavaScript</div>
                                                        JavaScript was used to implement dynamism and interactivity on the website. It was used to implement the mobile menu 
                                                        functionality. With JavaScript, the header background colour changes on scroll. And when the background colour changes, 
                                                        the website's logo changes as well to enhance its visibility. The header and logo changes happen only when the screen 
                                                        size is 1024 pixels wide and above. The header and logo behaviours 
                                                        which also are relative to screen width was achieved with JavaScript. Similarly, the active section of the website upon 
                                                        scrolling is indicated through automatic highlighting of the corresponsing menu item in the header. The behaviour is also 
                                                        implemented only when minimum screen width is 1024 pixels, and that was done with JavaScript. JavaScript was used to 
                                                        implement the slider functionality on the homepage — including the automatic slide show, next and previous navigation,
                                                        and the navigational dots below the slides. On the "What We Offer" and "Products" pages, the "Learn More" and "Read More" 
                                                        hyperlinks respectively, implement animated effects upon hover, and that was done with JavaScript. 

                                                        <div class="mt-3 fw-bold">CorelDRAW</div>
                                                        Image resizing, cropping, design of the two logos used, and other image enhancements were done using CorelDRAW.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles2" role="tabpanel" aria-labelledby="pills-principles2-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of mobile-first implementation.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">Mobile-First</div>
                                                        In developing this website, mobile implementation was the default layer upon which responsiveness for bigger
                                                        screen sizes was built. Mobile-first was chosen as the default design and development method because: 
                                                        <ul>
                                                            <li>research statistics have shown that the majority of Internet users nowadays access the Web with mobile devices; </li>
                                                            <li><a href="https://developers.google.com/search/mobile-sites/mobile-first-indexing" target="_blank">Google's mobile-first indexing</a> shows Google predominantly uses the mobile version of 
                                                            content for indexing and ranking. </li>
                                                        </ul>
                                                        The minimum screen width used as default in the design of this website was 360 pixels. Upon completion of 
                                                        a section of the website, media query tools in the browser's developer tools area was used to check for 
                                                        "break points" which were fixed using <a href="https://www.w3.org/TR/mediaqueries-3/" target="_blank" class="text-primary">CSS Media Queries Rule</a>. 
                                                        That ensured responsiveness on all screen sizes.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab2" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about2-tab" data-bs-toggle="pill" data-bs-target="#pills-about2" type="button" role="tab" aria-controls="pills-about2" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang2-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang2" type="button" role="tab" aria-controls="pills-techlang2" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-principles2-tab" data-bs-toggle="pill" data-bs-target="#pills-principles2" type="button" role="tab" aria-controls="pills-principles2" aria-selected="false">Principles Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit2-tab" data-bs-toggle="pill" data-bs-target="#pills-visit2" type="button" role="tab" aria-controls="pills-visit2" aria-selected="false"><a href="https://davenof.github.io/onepage/" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--OnePage Ends-->

                        <!-- Club Laver -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="clublaver">       
                            <div class="tab-content" id="pills-tabContent3">
                                <div class="tab-pane fade show active" id="pills-about3" role="tabpanel" aria-labelledby="pills-about3-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://davenof.github.io/clublaver/" target="_blank"><img src="img/projects/110.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of website's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Website's Responsive Views</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://davenof.github.io/clublaver/" target="_blank">Club Laver</a></div> 
                                                    <div class="text-primary mb-2">A Mobile-First Social Club Website</div>
                                                    <div class="lead fs-6">
                                                        I developed this website in October 2022. The aim was to implement a Mobile-First social club website template 
                                                        which could be adapted by anyone. 
                                                        <div class="mt-3 fw-bold">Technologies Used</div>
                                                        HTML 5, CSS, JavaScript, CorelDRAW

                                                        <div class="mt-3 fw-bold">Development Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">Mobile-First</div> <br>
                                                        The website was developed first for mobile phones, before it was scaled up for relatively wider 
                                                        screen sizes in line with the 
                                                        <a href="https://www.invisionapp.com/inside-design/mobile-first-design/" target="_blank" class="principle fst-italic">Mobile-First</a>
                                                        principle.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-techlang3" role="tabpanel" aria-labelledby="pills-techlang3-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                <div class="lead fs-3 mb-2">Summary</div> 
                                                <div class="small text-muted mb-2">This is only a summary of how technologies have been used. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        The entire structure of the website was marked up using HTML 5 syntax for accessibility, especially for 
                                                        screen readers which aid website navigation for the blind and visually impaired.

                                                        <div class="mt-3 fw-bold">CSS</div>
                                                        CSS was used to style the entire website. The <a href="https://www.w3.org/TR/mediaqueries-3/" target="_blank" class="text-primary">CSS Media Queries Rule</a>, 
                                                        was used to achieve responsiveness from mobile to bigger screen sizes. Text transition from bottom to top in 
                                                        the homepage slide show was done with CSS. The text and button hover effects were also also done with CSS.

                                                        <div class="mt-3 fw-bold">JavaScript</div>
                                                        JavaScript was used to add some behaviour to the website. It was used to implement the mobile menu 
                                                        functionality. JavaScript was also used to implement the slider functionality on the homepage — including 
                                                        the automatic slide show, next and previous navigation, and the navigational dots below the slides. 

                                                        <div class="mt-3 fw-bold">CorelDRAW</div>
                                                        Image resizing, cropping, and other image enhancements were done with CorelDRAW.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles3" role="tabpanel" aria-labelledby="pills-principles3-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of mobile-first implementation.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">Mobile-First</div>
                                                        Mobile implementation was the default layer upon which responsiveness for bigger
                                                        screen sizes was built. Mobile-first was chosen as the default design and development method because: 
                                                        <ul>
                                                            <li>statistics have it that the majority of Internet users access the Web with mobile devices; </li>
                                                            <li><a href="https://developers.google.com/search/mobile-sites/mobile-first-indexing" target="_blank"> 
                                                                Google's mobile-first indexing</a> shows Google predominantly uses the mobile version of 
                                                            content for indexing and ranking. </li>
                                                        </ul>
                                                        The minimum screen width used as default in the design of this website was 350 pixels. Upon completion of 
                                                        a section of the website, media query tools in the browser's developer tools area was used to check for 
                                                        "break points" which were fixed using <a href="https://www.w3.org/TR/mediaqueries-3/" target="_blank" class="text-primary">CSS Media Queries Rule</a> 
                                                        to ensure responsiveness on all screen sizes.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab3" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about3-tab" data-bs-toggle="pill" data-bs-target="#pills-about3" type="button" role="tab" aria-controls="pills-about3" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang3-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang3" type="button" role="tab" aria-controls="pills-techlang3" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-principles3-tab" data-bs-toggle="pill" data-bs-target="#pills-principles3" type="button" role="tab" aria-controls="pills-principles3" aria-selected="false">Principles Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit3-tab" data-bs-toggle="pill" data-bs-target="#pills-visit3" type="button" role="tab" aria-controls="pills-visit3" aria-selected="false"><a href="https://davenof.github.io/clublaver/" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--Club Laver Ends-->

                        <!-- Website Design System -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="designsystem">       
                            <div class="tab-content" id="pills-tabContent7">
                                <div class="tab-pane fade show active" id="pills-about7" role="tabpanel" aria-labelledby="pills-about7-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://davenof.github.io/websitedesignsystem/" target="_blank"><img src="img/projects/111.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of website's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Website's Responsive Views</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://davenof.github.io/websitedesignsystem/" target="_blank">Website Design System</a></div> 
                                                    <div class="text-primary mb-2">A Model Website Design System for First-Timers</div>
                                                    <div class="lead fs-6">
                                                        I developed this website design system in September 2022. The aim was to create a basic model for those who wish to understand
                                                        what a website design system could be like, and/or those who wish to develop one for the first time. 
                                                        
                                                        <div class="mt-3 fw-bold">Technologies Used</div>
                                                        HTML 5, CSS, JavaScript, CorelDRAW

                                                        <div class="mt-3 fw-bold">Design Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">General</div> <div class="badge rounded-pill bg-secondary mb-2">Heuristics</div> <br>
                                                        No specific design principle was given preference. However, my experience with several design principles 
                                                        came into play where necessary.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-techlang7" role="tabpanel" aria-labelledby="pills-techlang7-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                <div class="lead fs-3 mb-2">Summary</div> 
                                                <div class="small text-muted mb-2">This is only a summary of how technologies have been used. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        The structure of the website was marked up using HTML 5 syntax for accessibility.

                                                        <div class="mt-3 fw-bold">CSS</div>
                                                        The website's styling was done with CSS.

                                                        <div class="mt-3 fw-bold">JavaScript</div>
                                                        JavaScript was used to implement the mobile menu functionality when the website is viewed on 
                                                        a mobile device. JavaScript was also used to shrink and stick the header to the top of the page upon scrolling. 
                                                        Also, JavaScript was used to stick the menu sidebar to a particular height of the 
                                                        "<span class="fst-italic">viewport</span>" upon scrolling. Furthermore, JavaScript was used to automatically highlight 
                                                        the corresponding menu item when the section of the page they link to is active. 

                                                        <div class="mt-3 fw-bold">CorelDRAW</div>
                                                        CorelDRAW was used to design the logo.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles7" role="tabpanel" aria-labelledby="pills-principles7-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of design principles' implementation.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">General / Heuristics</div>
                                                        No design principle was followed to the letter in the design process of this website. However, previous 
                                                        design experiences helped me style and position elements in ways that enhance visibility, accessibility, 
                                                        and usability. For example, red backgrounds were given to texts that a user should take note of. Text size, 
                                                        style, and white spaces were used to create visual hierarchy, etc.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab7" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about7-tab" data-bs-toggle="pill" data-bs-target="#pills-about7" type="button" role="tab" aria-controls="pills-about7" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang7-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang7" type="button" role="tab" aria-controls="pills-techlang7" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-principles7-tab" data-bs-toggle="pill" data-bs-target="#pills-principles7" type="button" role="tab" aria-controls="pills-principles7" aria-selected="false">Principles Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit7-tab" data-bs-toggle="pill" data-bs-target="#pills-visit7" type="button" role="tab" aria-controls="pills-visit7" aria-selected="false"><a href="https://davenof.github.io/websitedesignsystem/" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--Website Design System Ends-->
                        
                        <!-- CSS @font-face Cheat Sheet -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="fontface">       
                            <div class="tab-content" id="pills-tabContent8">
                                <div class="tab-pane fade show active" id="pills-about8" role="tabpanel" aria-labelledby="pills-about8-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://davenof.github.io/fontfacecheatsheet/" target="_blank"><img src="img/projects/112.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of website's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Website's Responsive Views</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://davenof.github.io/fontfacecheatsheet/" target="_blank">CSS @font-face Cheat Sheet</a></div> 
                                                    <div class="text-primary mb-2">A Cheat Sheet for the CSS @font-face Rule</div>
                                                    <div class="lead fs-6">
                                                        I designed this cheat sheet in September 2022. The aim was to compile a quick and easy-to-use reference tool for understanding 
                                                        the basics of the CSS <code>@font-face</code> rule.
                                                        
                                                        <div class="mt-3 fw-bold">Technologies Used</div>
                                                        HTML 5, CSS, CorelDRAW

                                                        <div class="mt-3 fw-bold">Design Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">General</div> <div class="badge rounded-pill bg-secondary mb-2">Heuristics</div> <br>
                                                        No specific design principle was given preference. However, my experience with several design principles 
                                                        played a significant role in the design process
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-techlang8" role="tabpanel" aria-labelledby="pills-techlang8-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                <div class="lead fs-3 mb-2">Summary</div> 
                                                <div class="small text-muted mb-2">This is only a summary of how technologies have been used. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        The structure of the cheat sheet was marked up with HTML 5 to enhance accessibility.

                                                        <div class="mt-3 fw-bold">CSS</div>
                                                        The website was styled completely with CSS.

                                                        <div class="mt-3 fw-bold">CorelDRAW</div>
                                                        The logo was designed with CorelDRAW.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles8" role="tabpanel" aria-labelledby="pills-principles8-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of design principles' implementation.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">General / Heuristics</div>
                                                        No specific design principle was applied in the design process. However, my versed experience with 
                                                        design principles guided the styling and positioning of elements for visibility, accessibility, 
                                                        and usability. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab8" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about8-tab" data-bs-toggle="pill" data-bs-target="#pills-about8" type="button" role="tab" aria-controls="pills-about8" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang8-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang8" type="button" role="tab" aria-controls="pills-techlang8" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-principles8-tab" data-bs-toggle="pill" data-bs-target="#pills-principles8" type="button" role="tab" aria-controls="pills-principles8" aria-selected="false">Principles Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit8-tab" data-bs-toggle="pill" data-bs-target="#pills-visit8" type="button" role="tab" aria-controls="pills-visit8" aria-selected="false"><a href="https://davenof.github.io/fontfacecheatsheet/" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--CSS @fontface Cheat Sheet Ends-->

                        <!-- KEEPFIT -->                                
                        <div class="card-body mt-5 mb-5 py-5 border" id="keepfit">       
                            <div class="tab-content" id="pills-tabContent4">
                                <div class="tab-pane fade show active" id="pills-about4" role="tabpanel" aria-labelledby="pills-about4-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="projects/keepfit/index.html" target="_blank"><img src="img/projects/104.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of prototype's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Responsive Static Prototype </div>
                                                    <div class="small text-center mt-1 p-1">Click the "Highlights" button below to see the prototype highlights,
                                                        and the "Technologies Application" button for information about the partially dynamic version (Extended Version)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="projects/keepfit/index.html" target="_blank">KeepFit</a></div> 
                                                    <div class="text-primary mb-2">Web Version of a Mobile Fitness App</div>
                                                    <div class="lead fs-6">
                                                        I designed this prototype April 2022 as part of the Digital Skills for the Workplace Web Development programme in Liverpool, England. 
                                                        The programme was funded by the <a href="https://www.gov.uk/government/organisations/department-for-education" target="_blank" class="text-primary">UK Department for Education</a>, <a href="https://www.liverpoolcityregion-ca.gov.uk/" target="_blank" class="text-primary">Liverpool City Region Combined Authority</a>, 
                                                        <a href="https://tinyurl.com/2p9nwvnz" target="_blank" class="text-primary">Metro Mayor Liverpool City Region</a>, and the <a href="https://www.gov.uk/government/topical-events/plan-for-jobs" target="_blank" class="text-primary">Plan for Jobs</a> (UK Government). 
                                                        Training was provided by <a href="https://code-academy.co.uk/" target="_blank" class="text-primary">Code</a> (Academy), UK. 
                                                        <div class="mt-3 fw-bold">Technologies and Languages Used</div>
                                                        HTML 5, CSS 3, Bootstrap 5, JavaScript, CorelDRAW
                                                        <div class="mt-3 fw-bold">Design Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">Shneiderman</div> <br>
                                                        General UX design guiding principles were followed in the design of this website to give users a good experience. 
                                                        However, the dominant design principle adhered to is the Shneiderman's <a href="https://www.designprinciplesftw.com/collections/shneidermans-eight-golden-rules-of-interface-design" target="_blank" class="principle fst-italic">"Eight Golden Rules of Interface Design"</a>.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-techlang4" role="tabpanel" aria-labelledby="pills-techlang4-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        The entire structure of this prototype was marked up with HTML 5.

                                                        <div class="mt-3 fw-bold">CSS 3</div>
                                                        CSS 3 was used to complement Bootstrap styles in order to avoid large-scale repitition. For example,
                                                        where a Bootstrap 5 class was to be used repeatedly across most pages and page sections to achieve the same purpose,
                                                        in order to avoid repeating the class, reduce the file size, and increase page loading time, a CSS 3 class with a global 
                                                        style is used instead. So, wherever the class is used, all the CSS-defined features/styles apply, as against writing 
                                                        and rewriting several Bootstrap classes to achieve the same purpose.
                                                        Also, CSS 3 was used to alter some Bootstrap defaults such as "<span class="fst-italic">color</span>", 
                                                        "<span class="fst-italic">margin</span>", "<span class="fst-italic">font-size</span>", "<span class="fst-italic">font-family</span>", etc, 
                                                        
                                                        <div class="mt-3 fw-bold">Boostrap 5</div>
                                                        A Bootstrap 5 theme was used for the prototype. However, the theme was tweaked beyond its defaults so that
                                                        it looked significantly different. That notwithstanding, Bootstrap 5 defaults for responsiveness were relied upon.
                                                        Also, Bootstrap 5 classes were used extensively for styling where appropriate.
                                                        
                                                        <div class="mt-3 fw-bold">JavaScript</div>
                                                        JavaScript (Bootstrap 5 scripts) was used to implement the animated graphs and charts on the "Dashboard", as well as the dynamic table.
                                                        JavaScript was also used to implement the sidebar toggle feature so that users can have full or boxed view of the Dashboard content.
                                                        
                                                        <div class="mt-3 fw-bold">CorelDRAW</div>
                                                        All image enhancements were done with CorelDRAW. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card border-0 mb-4">
                                                <div class="border-bottom card-header mt-4"><h5>Entended Version</h5> </div>
                                                <div class="card-body">
                                                    <div>
                                                        PHP and MySQL were used in the <a href="projects/keepfit-extended/index.php" target="_blank">extended version</a> of the prototype. 
                                                        The extended version is partially dynamic. It is partially dynamic because only a few aspects of the "Class Login" side of the prototype is dynamic.
                                                        Other aspects of the "Class Login", as well as the entire "Remote Login" side are static. See the "Highlights" tab below.
                                                        
                                                        <div class="mt-3 fw-bold">PHP</div>
                                                        PHP was used to develop the "Signup" and "Login" systems, and to connect the systems to the users databases created with MySQL.
                                                        PHP was used also to dynamically include into the pages, the primary and secondary "navigation bars", the "sidebar", and the footer. 
                                                        Furthermore, PHP was used to dynamically display the email address, name, and designation (teacher or instructor) of the logged-in user,
                                                        and to notify users to log in when they try to access a page that only logged in users have access to.
                                                        
                                                        <div class="mt-3 fw-bold">MySQL</div>
                                                        MySQL was used to create the the relational database that stores users' data. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles4" role="tabpanel" aria-labelledby="pills-principles4-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of aspects of design principles applied.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">Consistency</div>
                                                        For consistency, identical terminologies were used in the feedback users get when an action is successful 
                                                        (e.g., during signup, joining a class, etc.) or unsuccessful. The primary and secondary navigation bars, 
                                                        as well as the footer are consistent, even during media responsiveness. Also, the colour choice and blend 
                                                        are consistent across pages. Hyperlinks are consistently blue, a fine blend of black and orange is the 
                                                        dominant appearance, and backgrounds are a combination of white and gray.
                                                                
                                                        <div class="mt-3 fw-bold">Shortcuts</div>
                                                        Although the website is simple and straight to the point, the fact that frequent users would like faster ways to 
                                                        get frequently performed tasks done was taken into consideration. Hence, a "Remember Password" option was included 
                                                        in the login pages so users wouldn't have to enter their login details always. A "Forgotten user ID or password?" 
                                                        option was also provided to make life easy for users when they forget a login detail. A "Home" link was made 
                                                        suffiently available before and during a login session to give users the option of trying again from home. On the 
                                                        "Class Login" page, links to the "Remote Login", "Signup", and "Home" pages were provided for easy navigation, and 
                                                        done likewise on the "Remote Login" page.  Furthermore, "Download", "Print", and "Share" options were provided as 
                                                        macros on pages with stats, so that with one click, users can download, print, or share data rather than following 
                                                        the computer convention of doing same.
                                                                
                                                        <div class="mt-3 fw-bold">Informative Feedback</div>
                                                        When users signup, join a class, try to access a page only logged in users have access to (in the partially dynamic 
                                                        version), etc., they get an appropriate feedback.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="mt-3 fw-bold">Dialogue to Yield Closure.</div>
                                                    The informative feedback provided above was designed to yield closure, and to give users the satisfaction of 
                                                    accomplishment at the end of a successfully completed task.

                                                    <div class="mt-3 fw-bold">Simple Error Handling</div>
                                                    The prototype which simulates a website was designed to be simple and straightforward so that users cannot make 
                                                    a serious error. However, for the fact that people could click something in error when they meant to click 
                                                    something else, or make other possible human errors, the Shortcuts provided above were designed to also be 
                                                    error handlers.
                                                        
                                                    <div class="mt-3 fw-bold">Easy Reversal of Actions</div>
                                                    Although the prototype has little or no action that needs reversal, breadcrumbs were provided however in the 
                                                    "Dashboard" child pages to help users reduce the number of actions they have to take to get to a higher-level page. 
                                                    Also, the "Students Data Table" has an option in the top-left corner that allows users change the number of entries 
                                                    they would like to view per page, as well as return to the default. Similarly, the table is paginated at the 
                                                    bottom-right so that users could explore other pages, and as well reverse their action to default. 
                                                                
                                                    <div class="mt-3 fw-bold">Internal Locus of Control</div>
                                                    The entire prototype was designed to be very simple to explore, to give users a sense of control over the actual website. 

                                                    <div class="mt-3 fw-bold">Short-term Memory Load Reduction</div>
                                                    In order to reduce short-term memory load, a group of elements does not have more than four large elements in 
                                                    the group. Where cards were used, e.g., in the "Dashboard", not more than four cards were used in a group so 
                                                    that the user's brain wouldn't have much to process. Although the Dashboard contains data from all students' 
                                                    activities, options to view individual data group were provided in the sidebar navigation of the Dashboard.                                                                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-highlights4" role="tabpanel" aria-labelledby="pills-highlights4-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="lead fs-3 mb-2">Summary</div> 
                                                <div class="small text-muted mb-2">The highlights given below are those that may not be easily noticed by 
                                                    someone browsing through the prototype.</div>
                                                <div class="card-body">
                                                    <div>
                                                        <div class="mt-3 fw-bold">Access Type</div>
                                                        The system was designed in way that when a user logs in while in class, the "Access Type" is green. On the other hand,
                                                        the "Access Type" is amber when they log in from a location other than class (Remote Login).   
                                                                
                                                        <div class="mt-3 fw-bold">Dynamic Homepage Prototyped</div>
                                                        Before users log in, there is a "Sign Up" link and a "Log In" button on the homepage. When they visit the homepage
                                                        while logged in, the "Sign Up" and "Log In" options are no longer present on the homepage. When the user logs out,
                                                        they are redirected to the homepage with the "Sign Up" and "Log In" options back on the page.  
                                                            
                                                        <div class="mt-3 fw-bold">Owner's and Visitor's Profile Views</div>
                                                        When a user (teacher or instructor) views their profile (e.g., from the Dashboard's secondary navigation bar) while logged in, 
                                                        the options to delete and edit the profile are available to them. However, when someone else views the profile 
                                                        (e.g., from the "Classes" page, by clicking the image or name of the class instructor), they don't see the "Delete" and 
                                                        "Edit" options. Rather, they see the options to follow or message the instructor.                                                                                                                                                                                                               
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="mt-3 fw-bold">Profile Edit Simulated</div>
                                                    The prototype was designed in a way that the profile owner can actually edit their profile (apart from their 
                                                    email address which doesn't change) and save it. However, there is no depth to the editing and saving as there 
                                                    is no database that holds the information. 

                                                    <div class="mt-3 fw-bold">Access Type Privileges</div>
                                                    When the system detects the login session is "Class Login", the options to download, print, and share dashboard 
                                                    stats/data are available to the user. Contrarily, the same options are disabled when the "Access Type" is not "Class", 
                                                    as download of students' fitness data is only allowed in class. This is for security reasons.

                                                    <div class="mt-3 fw-bold">Sidebar Menu Toggle</div>
                                                    On the "Dashboard" page, users have the option to expand or contract the page view using the hamburger icon at the top-right 
                                                    corner of the secondary navigation bar. However, when the page is not Dashboard, the toggle icon is disabled because 
                                                    other pages don't have the sidebar menu.  
                                                    
                                                    <div class="mt-3 fw-bold">Colour Convention</div>
                                                    On the Dashboard and its child pages, the colour green represents positive or impressive data. 
                                                    Blue represents something good or normal, but not as impressive as the greens. Yellow represents something that calls 
                                                    for concern, although it is not aweful. Red represents something in a bad shape and should be looked into. 
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab4" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about4-tab" data-bs-toggle="pill" data-bs-target="#pills-about4" type="button" role="tab" aria-controls="pills-about4" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang4-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang4" type="button" role="tab" aria-controls="pills-techlang4" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-principles4-tab" data-bs-toggle="pill" data-bs-target="#pills-principles4" type="button" role="tab" aria-controls="pills-principles4" aria-selected="false">Principle Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-highlights4-tab" data-bs-toggle="pill" data-bs-target="#pills-highlights4" type="button" role="tab" aria-controls="pills-highlights4" aria-selected="false">Highlights</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit4-tab" data-bs-toggle="pill" data-bs-target="#pills-visit4" type="button" role="tab" aria-controls="pills-visit" aria-selected="false"><a href="projects/keepfit/index.html" target="_blank">See Prototype</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--KeepFit Ends-->

                        <!-- SOLACE LIBRARY PROJECT -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="solib">       
                            <div class="tab-content" id="pills-tabContent5">
                                <div class="tab-pane fade show active" id="pills-about5" role="tabpanel" aria-labelledby="pills-about5-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="projects/solib/index.php" target="_blank"><img src="img/projects/102.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of data-driven views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Data-driven Website</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="projects/solib/index.php" target="_blank">Solace Library</a></div> 
                                                    <div class="text-primary mb-2">Data-driven Website (Academic Project)</div>
                                                    <div class="lead fs-6">
                                                        I designed this website in 2021 as part of the requirements for completing a module successfully. Along with an accompanying critique, I was graded 75% (Distinction).
                                                        <div class="mt-3 fw-bold">Technologies and Languages Used</div>
                                                        HTML 5, CSS 3, JavaScript, MySQL, JSON API, PHP
                                                        
                                                        <div class="mt-3 fw-bold">Design Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">No Dominant</div> <div class="badge rounded-pill bg-secondary mb-2">General</div><br>
                                                        General UX design guiding principles were followed in the design of this website to give 
                                                        users a good experience. The goal was to develop a data-driven website and not a responsive website. So, the website
                                                        is not fully responsive. However, with the right "<span class="fst-italic">viewport</span>" set, as well as appropriate "<span class="fst-italic">box-sizing</span>",
                                                        the website is responsive to a large extent.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-techlang5" role="tabpanel" aria-labelledby="pills-techlang5-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        The entire structure of the website was marked up with HTML 5. 
                                                        
                                                        <div class="mt-3 fw-bold">CSS 3</div>
                                                        The entire styling of the website was done with CSS 3.
                                                        
                                                        <div class="mt-3 fw-bold">JavaScript</div>
                                                        Javascript was used to add dynamic behaviour and special effects to the website. For example, the loading spinner (dots moving in circles) 
                                                        that displays when books are being populated in the catalogue. JavaScript was also used to complement PHP functions
                                                        in command validation, e.g., to make a request to the "sign_up function" to actually sign a new user up; to fetch 
                                                        a user during a "user search", etc.
                                                        
                                                        <div class="mt-3 fw-bold">MySQL</div>
                                                        MySQL is the relational database that holds and manages all data inputted into the website.
                                                        The admin and user databases were implemented with MySQL.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card border-0 mb-4">
                                                <div class="card-body">
                                                    <div>
                                                        <div class="mt-3 fw-bold">JSON API</div>
                                                        Basically, JSON API was used for data interchange between the website and <a href="https://openlibrary.org/" target="_blank">Open Library</a>, as part of data-drivenness. 
                                                        With JSON API, users could search the Open Library catalogue through this website's catalogue search, and get the results displayed in the search results 
                                                        page of the website.  
                                                        
                                                        <div class="mt-3 fw-bold">PHP</div>
                                                        PHP was used mainly to implement dynamism and interactivity. It also played a major role in the website being data-driven 
                                                        as it was used to create connections between markups (HTML IDs and tags) and the databases (MySQL). For example, users can 
                                                        sign up, log in, edit and update their accounts, delete accounts, upload and edit books (book data), delete books they uploaded, etc. 
                                                        PHP basically managed the server-side. Used with JavaScript, the website achieved a great deal of dynamism, interactivity, and data-drivenness. 
                                                        
                                                        <div class="mt-3 fw-bold">CorelDRAW</div>
                                                        Image resizing, format conversion, and all enhancements were done with CorelDRAW. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab5" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about5-tab" data-bs-toggle="pill" data-bs-target="#pills-about5" type="button" role="tab" aria-controls="pills-about5" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang5-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang5" type="button" role="tab" aria-controls="pills-techlang5" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit5-tab" data-bs-toggle="pill" data-bs-target="#pills-visit5" type="button" role="tab" aria-controls="pills-visit5" aria-selected="false"><a href="projects/solib/index.php" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!-- Solace Library Ends -->
                            
                        <!-- ECOCORE -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="ecocore">       
                            <div class="tab-content" id="pills-tabContent6">
                                <div class="tab-pane fade show active" id="pills-about6" role="tabpanel" aria-labelledby="pills-about6-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://ecocounts.community/" target="_blank"><img src="img/projects/105.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of header's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Hand-coded Custom WordPress Header</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://ecocounts.community/" target="_blank">EcoCore</a></div> 
                                                    <div class="text-primary mb-2">Climate Action Organisation</div>
                                                    <div class="lead fs-6">
                                                        I hand-coded this custom header for a WordPress website in June 2022. The organisation had need for a particular header style. 
                                                        When attempts to get the job done as needed yielded unproductive, they got me in and I delivered. Hence, the recommendation by 
                                                        Adam Hardy FRSA in the <a href="recommendations.php" class="text-primary">Recommendations page</a>.  

                                                        <div class="mt-3 fw-bold">Technologies Used</div>
                                                        HTML 5, CSS 3

                                                        <div class="mt-3 fw-bold">Design Principles</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">UX Mantra</div> <div class="badge rounded-pill bg-secondary mb-2">Participatry Design</div> <br>
                                                        My delivery of the job was based on the widely acclaimed UX mantra, "<span class="fst-italic">You Are Not the User</span>",  
                                                        and on the principle of "<span class="fst-italic">participatory design</span>". 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-techlang6" role="tabpanel" aria-labelledby="pills-techlang6-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                <div class="lead fs-3 mb-2">Summary</div> 
                                                <div class="small text-muted mb-2">This is only a summary of how technologies and design principles have been applied. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        The entire structure of the header was marked up with HTML 5. The website ran on a WordPress theme which had a default header that rested above the default 
                                                            page body. The body had content whose layout and responsiveness could be affected by a tweak in 
                                                            the header. However, the WordPress default was tweaked with additional HTML 5 tags added 
                                                            appropriately. 

                                                        <div class="mt-3 fw-bold">CSS 3</div>
                                                        By targeting appropriate "<span class="fst-italic">Classes</span>" and "<span class="fst-italic">IDs</span>",
                                                        styling was done with CSS to the user's taste. Also, following the <a href="https://www.w3.org/TR/mediaqueries-3/" target="_blank" class="text-primary">W3C Media Queries Level 3 Recommendation</a>, responsive design was done for specific 
                                                            screens types to the user's satisfaction. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles6" role="tabpanel" aria-labelledby="pills-principles6-tab">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of aspects of design principles applied.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">You Are Not the User</div>
                                                        Although there were preferable approaches to solving the problem, I stuck with the user's choice of 
                                                        hand-coding. As a trained designer, I would deliver the design in a particular style based on heuristics,
                                                        however, the widely acclaimed UX mantra, "You Are Not the User", which is broadly attributed to Don Norman 
                                                        and Jakob Nielsen set the boundaries.

                                                        <div class="mt-3 fw-bold">Participatory Design</div>
                                                        Participatory design which has become integral in user-centred design was essential in my delivery of the job.
                                                        At every stage of the design, the user was carried along. They were informed about my next course of action,
                                                        they took part in the design process, and they got a report about what work was done at the end of the day.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab6" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about6-tab" data-bs-toggle="pill" data-bs-target="#pills-about6" type="button" role="tab" aria-controls="pills-about6" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang6-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang6" type="button" role="tab" aria-controls="pills-techlang6" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-principles6-tab" data-bs-toggle="pill" data-bs-target="#pills-principles6" type="button" role="tab" aria-controls="pills-principles6" aria-selected="false">Principles Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit6-tab" data-bs-toggle="pill" data-bs-target="#pills-visit6" type="button" role="tab" aria-controls="pills-visit6" aria-selected="false"><a href="https://ecocounts.community/" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--EcoCore Ends-->
                    </div>
                </main>
<?php
    include_once 'footer.php';
?>
