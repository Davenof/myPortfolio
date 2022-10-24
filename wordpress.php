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
                        <h3 class="lead mt-5">Wordpress Websites</h3> 
                        <ul class="small d-inline-flex flex-wrap gap-4">
                            <li><a href="coded.php">Hand-coded Websites</a></li>
                            <li><a href="webapps.php">Web Applications</a></li>
                            <li><a href="prototypes.php">Prototypes</a></li>
                            <li><a href="abm.php">Agent-Based Modelling</a></li>
                            <li><a href="graphics.php">Graphic Designs</a></li>
                        </ul>

                        <!-- DIGITAL CITIZENS PROJECT -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="digitalcitizens">       
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://digitalcitizens.tech/" target="_blank"><img src="img/projects/100.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of website's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Website's Responsive Views</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://digitalcitizens.tech/" target="_blank">Digital Citizens</a></div> 
                                                    <div class="text-primary mb-2">Digital Technology Services Provider</div>
                                                    <div class="lead fs-6">
                                                        I designed this website in 2020, and I have been managing it ever since. 
                                                        <div class="mt-3 fw-bold">Technologies and Languages Used</div>
                                                        WordPress, HTML 5, CSS 3, jQuery, PHP, Elementor, CorelDRAW

                                                        <div class="mt-3 fw-bold">Dominant Design Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">Gestalt</div> <br>
                                                        Although various user-centred and interaction design principles have been applied to ensure improved usability, accessibility, and inclusivity,
                                                        the dominant principle in the design of this website is the <a href="https://en.wikipedia.org/wiki/Visual_hierarchy" target="_blank" class="principle fst-italic">Gestalt Principle (theory) of Visual Hierarchy</a>.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>
                                <div class="tab-pane fade" id="pills-techlang" role="tabpanel" aria-labelledby="pills-techlang-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                <div class="lead fs-3 mb-2">Summary</div> 
                                                <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">WordPress</div>
                                                        WordPress is the platform on which the website runs. 

                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        HTML 5 is the markup language used to describe the structure of the website's content and pages. 

                                                        <div class="mt-3 fw-bold">CSS 3</div>
                                                        Although there is an active WordPress theme, CSS was used to make significant changes to the default theme styling
                                                        so that the theme looked substantially different from the original. However, the chosen theme contributed to the 
                                                        flexibility of the website.  

                                                        <div class="mt-3 fw-bold">jQuery</div>
                                                        jQuery was used to create responsive sections and columns in the landing page. The animation of content in the homepage
                                                        and in few aspects of other pages was done with jQuery. However, to conform with the <a href="https://www.w3.org/TR/mediaqueries-5/" target="_blank">W3C @media rule</a>, 
                                                        CSS was used to complement the responsiveness of the homepage.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card border-0 mb-4">
                                                <div class="card-body">
                                                    <div>
                                                        <div class="mt-3 fw-bold">PHP</div>
                                                        Although the website relies heavily on the default theme PHP, PHP to used to disable many theme default features on the homepage.
                                                        For examples, content in both columns of "<span class="fst-italic">The African Strategy</span>" section, and in the four columns of
                                                        the "<span class="fst-italic">DC Core Values</span>" section are from individual pages. Each of the columns originally linked back to the
                                                        pages where the content are called from so the user could read more. However, PHP was used to disable the underlying wrapper links.
                                                        On desktop view also, PHP was used to make a hidden laptop user on the company's logo appear during page scrolling. However, CSS was used
                                                        to hold the manipulated logo in position during scrolling.

                                                        <div class="mt-3 fw-bold">Elementor (Page Builder)</div>
                                                        All the pages of the website, except for the homepage were built with Elementor. Although the page styling was largely done with Elementor,
                                                        additional CSS was used to accomplished specific styling like "<span class="fst-italic">text-decoration</span>", text and border 
                                                        "<span class="fst-italic">hover</span>" effects, among others. HTML tags were used extensively also across pages. For instance, to create 
                                                        paragraphs, support inline CSS for styling single elements, etc.
                                                        
                                                        <div class="mt-3 fw-bold">CorelDraw</div>
                                                        All graphic designs were done with CorelDRAW. All the images on the website, from the homepage slider images to the tiniest page image had
                                                        different degrees of graphical manipulation and enhancement. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles" role="tabpanel" aria-labelledby="pills-principles-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of aspects of design principles applied.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">Colour</div>
                                                        Complimentary primary and secondary colours were used to determine visual hierarchy, as well as for aesthetics.
                                                        Where a dark background was used, the content on it was light-coloured to improve visibility. However, where
                                                        content had bright colours, a muted background was used for an excellent output.

                                                        <div class="mt-3 fw-bold">Size, Scale, and Grouping</div>
                                                        Different font sizes were used to attract readers' attention to the message they pass, according to their relative importance. 
                                                        Large font sizes were used to pass quick and short pieces of information, and font sizes between "<span class="fst-italic">1em</span>" and "<span class="fst-italic">1.3em</span>"
                                                        passed other imporatant, but longer message.
                                                        Line height was used across pages to enhance the visibility of texts. Spaces were used generously across pages to aid visual hierarchy. 
                                                        Also, spaces, horizontal lines, wide margins, column gaps, and background colour were used to show elements in a group.  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="mt-3 fw-bold">Alignment</div>
                                                    Headings were aligned to the top left side of their sections or columns as the Gestalt Psychology Theory of Visual Hierarchy
                                                    posits the human eyes see elements in the upper left corners first. Also, the core values of the company are positioned in the center 
                                                    of the section, as well as in the centre of the homepage sliders because the Gestalt Theory says prominence is given at the centre. 
                                                    Hence, the left and centre alignments of important headings helps communicate the value proposition of the company within seconds.   
                                                        
                                                    <div class="mt-3 fw-bold">Character</div>
                                                    In the midst of long texts and plenty elements, the contrast, size, and/shape of single important texts or elements is changed
                                                    to make them standout, hence, their message is passed across and not lost. 
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang" type="button" role="tab" aria-controls="pills-techlang" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-principles-tab" data-bs-toggle="pill" data-bs-target="#pills-principles" type="button" role="tab" aria-controls="pills-principles" aria-selected="false">Principle Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit-tab" data-bs-toggle="pill" data-bs-target="#pills-visit" type="button" role="tab" aria-controls="pills-visit" aria-selected="false"><a href="https://digitalcitizens.tech" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--DC Ends-->

                        <!-- VICTORIA OKOJIE PROJECT -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="vicokojie">       
                            <div class="tab-content" id="pills-tabContent2">
                                <div class="tab-pane fade show active" id="pills-about2" role="tabpanel" aria-labelledby="pills-about2-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://vicokojie.org/" target="_blank"><img src="img/projects/107.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of website's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Website's Responsive Views</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://vicokojie.org/" target="_blank">VICTORIA OKOJIE</a></div> 
                                                    <div class="text-primary mb-2">Personal Professional Portfolio</div>
                                                    <div class="lead fs-6">
                                                        I designed this website in 2021, and I have been managing it ever since. 
                                                        <div class="mt-3 fw-bold">Technologies and Languages Used</div>
                                                        WordPress, Elementor, CSS 3, CorelDRAW
                                                        
                                                        <div class="mt-3 fw-bold">Dominant Design Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">Gestalt</div> <br>
                                                        Various design principles were applied during the design phases of this website. However, the 
                                                        dominant principle in the design of this website is the <a href="https://en.wikipedia.org/wiki/Visual_hierarchy" target="_blank" class="principle fst-italic">Gestalt Principle (theory) of Visual Hierarchy</a>.
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
                                                <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">WordPress</div>
                                                        WordPress is the platform on which the website runs. 
                                                        
                                                        <div class="mt-3 fw-bold">Elementor</div>
                                                        All the pages of this website were designed with Elementor. 
                                                        
                                                        <div class="mt-3 fw-bold">CSS 3</div>
                                                        CSS was used to augment the Elementor design and to achieve specific styling of specific elements.  
                                                        
                                                        <div class="mt-3 fw-bold">CorelDRAW</div>
                                                        All images on the website were enhanced with CorelDRAW.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles2" role="tabpanel" aria-labelledby="pills-principles2-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of aspects of design principles applied.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">Colour</div>
                                                        Complimentary primary and secondary colours were used to determine visual hierarchy, as well as for aesthetics.
                                                        Where a dark background was used, the content on it was light-coloured to improve visibility, as seen in the footer,
                                                        "Projects" page, and the section below each page banner. Conversely, where
                                                        a white or light background is used, complimentary dark colours were used to enhance visibility.

                                                        <div class="mt-3 fw-bold">Size, Scale, and Grouping</div>
                                                        Different font sizes were used to attract readers' attention to the message they pass, according to their relative importance. 
                                                        Groups of elements with similar styles and information maintained the same font size and style
                                                        all through the site. Line height was used across pages to enhance the visibility of texts. 
                                                        Spaces were used generously across pages to aid visual hierarchy in different viewports. Also, paddings, horizontal 
                                                        lines, wide margins, column gaps, and background colour were used to show elements in a group.  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="mt-3 fw-bold">Alignment</div>
                                                    According to the design of the page, headings were aligned either to the top left side of their sections or to the middle, as the Gestalt Psychology Theory of Visual Hierarchy
                                                    states that the human eyes see elements in the upper left corners first, and prominence is given at the centre. Apart from the headings and other 
                                                    large texts that pass specific information like quotes, texts were largely aligned left as the human eye reads from left to right.
                                                                                
                                                    <div class="mt-3 fw-bold">Character</div>
                                                    Dotted section separators (instead of a simple or predictable pattern) and underlines were used to pass a message about sections and elements. On some pages, dotted separators
                                                    were used to indicate the end of a group of elements or section. Underlines were also used in the "Publications" page 
                                                    to indicate the name of the textbook in which the chapter was published. 
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
                                            <button class="nav-link" id="pills-principles2-tab" data-bs-toggle="pill" data-bs-target="#pills-principles2" type="button" role="tab" aria-controls="pills-principles2" aria-selected="false">Principle Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit2-tab" data-bs-toggle="pill" data-bs-target="#pills-visit2" type="button" role="tab" aria-controls="pills-visit2" aria-selected="false"><a href="https://vicokojie.org/" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!-- VicOkojie Ends -->

                        <!-- NIGERIAN LIBRARY ASSOCIATION -->
                        <div class="card-body mt-5 mb-5 py-5 border" id="nlawebsite">       
                            <div class="tab-content" id="pills-tabContent3">
                                <div class="tab-pane fade show active" id="pills-about3" role="tabpanel" aria-labelledby="pills-about3-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://nla.ng/" target="_blank"><img src="img/projects/108.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of website's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Website's Responsive Views</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://nla.ng/" target="_blank">Nigerian Library Association</a></div> 
                                                    <div class="text-primary mb-2">Professional Association</div>
                                                    <div class="lead fs-6">
                                                        I designed the current version of this website between December 2021 and January 2022. I was responsible for the management of the website until January 2022. 
                                                        <div class="mt-3 fw-bold">Technologies and Languages Used</div>
                                                        WordPress, Elementor, CSS 3, InVision, CorelDRAW

                                                        <div class="mt-3 fw-bold">Dominant Design Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">Gestalt</div> <div class="badge rounded-pill bg-secondary mb-2">Don Norman</div><br>
                                                        The dominant principles in the design of this website are the <a href="https://en.wikipedia.org/wiki/Visual_hierarchy" target="_blank" class="principle fst-italic">Gestalt Principle (theory) of Visual Hierarchy</a> 
                                                        and the Don Norman's <a href="https://tinyurl.com/2p89d7j6" target="_blank" class="principle fst-italic">Principles of Design</a>.
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
                                                    <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not exhaustive for a quick and easy read.</div>
                                                    <div>
                                                        <div class="mt-3 fw-bold">WordPress</div>
                                                        WordPress is the platform on which the website runs. 

                                                        <div class="mt-3 fw-bold">Elementor (Page Builder)</div>
                                                        Elementor was used to build replica pages of the 
                                                        <a href="https://tinyurl.com/y7zkfdep" target="_blank">prototype</a>.  

                                                        <div class="mt-3 fw-bold">CSS 3</div>
                                                        CSS was used to achieve specific styling that were not best with Elementor. 

                                                        <div class="mt-3 fw-bold">InVision</div>
                                                        The <a href="https://tinyurl.com/y7zkfdep" target="_blank">prototype</a> 
                                                        which guided the design of this website was built with InVision.

                                                        <div class="mt-3 fw-bold">CorelDraw</div>
                                                        All graphic designs were done with CorelDRAW. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-principles3" role="tabpanel" aria-labelledby="pills-principles3-tab">
                                    <div class="row">
                                    <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of aspects of design principles applied.</div>
                                                    <div>
                                                        <div class="lead fs-5 mt-3 mb-2">Gestalt and Don Norman's Principles</div>

                                                        <div class="mt-3 fw-bold">Background</div>
                                                        A significantly usable website was the aim, hence, white was the primary and dominant background 
                                                        colour across all pages, which made elements on it visible. However, in pages and sections of pages where a dark 
                                                        background was used, light-coloured elements were used on such backgrounds to enhance visibility, and in line with 
                                                        the Gestalt's principle that light elements are outstanding on a dark background, and vice versa.  

                                                        <div class="mt-3 fw-bold">Colours</div>
                                                        Four major colours were used to enhance the design – two primary colours (red and blue), and two 
                                                        secondary colours (green and gray) – in line with the principles which emphasise that too many colours may
                                                        be beautiful, but they could be overwhelming on a page, and could reduce visual hierarchy. 
                                                        Green, yellow, and red are the colours of the Association, with green as the dominant. 
                                                        Because of its dark appearance, green was used as background color in areas holding important elements that 
                                                        needed to be visible, like the header holding the navigation menu. Gray was used either as background colour to enhance the visibility
                                                        of the relatively darker elements on it, or as border colour to reduce the overwhelming feel of the white space around an
                                                        element, which makes the bordered elements appear as a group. Red was used mainly to attract attention to specific features 
                                                        and content, and as border colour to reduce the effect of large white spaces around elements. Blue was used 
                                                        for hypertexts and forms 'Submit' buttons.

                                                        <div class="mt-3 fw-bold">Size, Scale, and Grouping</div>
                                                        Three dominant font sizes were used for the main contents across pages. All headings were same font size. Same as all subheadings 
                                                        and the main page texts. However, larger font sizes were used on some banners to attract attention to the message they are 
                                                        passing across.   
                                                        
                                                        <div class="mt-3 fw-bold">Alignment</div>
                                                        Headings were aligned to the top left corner of pages and page sections to help the user determine quickly what a page or section is all about.
                                                        This was because the Gestalt Theory postulates that elements in the upper left corner are seen first. 
                                                        Page banners and sliders were aligned top center for prominence in line with the Gestalt principle. Hence, the message 
                                                        they hold is easily communicated. Pages listed in the “About NLA” submenu have a sidebar which also was aligned to the left
                                                        of the pages as the sidebar holds important quick facts about the Association.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="mt-3 fw-bold">Visibility</div>
                                                    To boost the visibility of all important content, the website pages were generally kept short
                                                    so that users would not have to scroll too deep before finding the information they sought.                                                   . 
                                                    Also, accordions were used where necessary (e.g., on the "Awards" and "Past Conferences" pages) to compress 
                                                    very long content into one page, to enhance visibility.

                                                    <div class="mt-3 fw-bold">Feedback</div>
                                                    The accordion feature used in some pages has the plus (+) and minus (-) signs which when clicked,
                                                    expands and retracts a particular row of the accordion, respectively. The plus and minus triggers for
                                                    expansion and retraction conform with Don Norman’s ‘Feedback’ principle which states that functions should
                                                    be designed in such a way that users get a corresponding action in response to the action they performed,
                                                    as an indication that the users action caused something to happen.

                                                    <div class="mt-3 fw-bold">Constraints</div>
                                                    According to Norman, the constraints design function restricts what user interaction can take
                                                    place at a time. Hence, when the prototype’s accordion menu expands, it does not overlap with the
                                                    footer, as the feature was constrained to open within the main text area which pushes the footer further
                                                    down, rather than overlap with it. 

                                                    <div class="mt-3 fw-bold">Mapping</div>
                                                    Mapping is the relationship between control and effect, where the control to a feature closely resembles
                                                    the effect (Norman, 2013). Hence, the plus (+) and minus (-) convention was adopted for the accordion
                                                    menu to easily communicate their functions of expansion and retraction, respectively.

                                                    <div class="mt-3 fw-bold">Consistency</div>
                                                    The design and function of the header, footer, and navigation menu is consistent across pages.
                                                    Consistency has also been maintained in the font family and size of headings and texts. Likewise, the
                                                    design of the main text area of pages listed on the “About NLA” submenu is similar, while pages not
                                                    listed in the “About NLA” submenu were designed in uniform fashion, except for the homepage which
                                                    is designed differently because of the kind of content it holds. The prototype design conforms with Norman's 
                                                    'Consistency' principle which teaches that interfaces should be designed to perform similar
                                                    operations, and similar elements should be designed to perform similar tasks consistently.

                                                    <div class="mt-3 fw-bold">Affordance</div>
                                                    Form fields have placeholders which give users instant clue about what particular information a field
                                                    requires from the user. Also, a form’s submit button communicates its function quickly to the users with
                                                    the text on the button. Additionally, the previous and next slider icons represented by angle brackets
                                                    give an indication about their role, as well as the back arrow icon on the login page. Basically, affordance is 
                                                    "to give a clue" for ease of use.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab7" role="tablist">
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link active" id="pills-about3-tab" data-bs-toggle="pill" data-bs-target="#pills-about3" type="button" role="tab" aria-controls="pills-about3" aria-selected="true">Overview</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-techlang3-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang3" type="button" role="tab" aria-controls="pills-techlang3" aria-selected="false">Technologies Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-principles3-tab" data-bs-toggle="pill" data-bs-target="#pills-principles3" type="button" role="tab" aria-controls="pills-principles3" aria-selected="false">Principle Application</button>
                                        </li>
                                        <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                            <button class="nav-link" id="pills-visit3-tab" data-bs-toggle="pill" data-bs-target="#pills-visit3" type="button" role="tab" aria-controls="pills-visit3" aria-selected="false"><a href="https://nla.ng/" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--NLA Ends-->
                        
                        <!-- NIPIAN PROJECT-->
                        <div class="card-body mt-5 mb-5 py-5 border" id="nipian">       
                            <div class="tab-content" id="pills-tabContent2">
                                <div class="tab-pane fade show active" id="pills-about4" role="tabpanel" aria-labelledby="pills-about4-tab">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card border-0">
                                                <div class="project-image card-body mt-3">
                                                    <a href="https://nipian.org/" target="_blank"><img src="img/projects/101.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of website's responsive views"></a>
                                                    <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Responsive Website and User Community</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="project-detail card-body">
                                                    <div class="lead fs-3 mb-2"><a href="https://nipian.org/" target="_blank">NIPIAN</a></div> 
                                                    <div class="text-primary mb-2">U.S. Government Funded Leadership Programme</div>
                                                    <div class="lead fs-6">
                                                        I designed this website in 2019, and I have been managing it ever since. 
                                                        <div class="mt-3 fw-bold">Technologies and Languages Used</div>
                                                        WordPress, BuddyPress, bbPress, Elementor, HTML 5, CSS 3, CorelDRAW
                                                        <div class="mt-3 fw-bold">Dominant Design Principle</div>
                                                        <div class="badge rounded-pill bg-secondary mb-2">Don Norman</div> <br>
                                                        General UX design guiding principles were followed in the design of this website to give 
                                                        users good experience. However, the dominant principles that guided the design were the Don Norman's <a href="https://tinyurl.com/2p89d7j6" target="_blank" class="principle fst-italic">Principles of Design</a>.
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
                                                        <div class="mt-3 fw-bold">WordPress</div>
                                                        WordPress is the platform on which the website and user community run. 
                                                        <div class="mt-3 fw-bold">BuddyPress and bbPress</div>
                                                        BuddyPress and bbPress were used to build an effective user community which allows participants to create forums and groups, start group and  
                                                        one-on-one conversations, among others. The NIPIAN community is the highlight of the website. It is the platform where 
                                                        most off-site activities are carried out. Aided by other pertinent plugins, the community also serves as a Learning Management System through
                                                        which participants receive and view their weekly tasks and assignments, as well as submit their assignments. 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card border-0 mb-4">
                                                <div class="card-body">
                                                    <div>
                                                        <div class="mt-3 fw-bold">Elementor (Page Builder)</div>
                                                        All pages viewable by the website's visitors were designed with Elementor, including the responsiveness of the pages.
                                                        
                                                        <div class="mt-3 fw-bold">HTML 5</div>
                                                        HTML tags were used to define the structure of specific sections containing texts and images. HTML was used to define paragraphs,
                                                        create content hyperlinks, as well as accessible and inclusive content, e.g., creating alternative texts for images.  
                                                        
                                                        <div class="mt-3 fw-bold">CSS 3</div>
                                                        CSS was used mainly for "<span class="fst-italic">text-decoration</span>". It was used to remove underlines from hypertexts, 
                                                        and for colour contrast upon hover.    
                                                        
                                                        <div class="mt-3 fw-bold">CorelDRAW</div>
                                                        All image enhancements were done with CorelDRAW. 
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
                                                        <div class="mt-3 fw-bold">Visibility</div>
                                                        To boost visibility of important content, such content were made bigger in size and/or different in colour, in contrast to the dominant colour around them.   
                                                                
                                                        <div class="mt-3 fw-bold">Feedback</div>
                                                        When participants complete an action in the community like assignment submission, file upload, deletion, etc., they get instant feedback
                                                        that helps them understand the status of their action.  
                                                            
                                                        <div class="mt-3 fw-bold">Constraints</div>
                                                        On the "Mentors" page, contact buttons are disabled for Mentors whose contact details are not available. And for Mentors who are no longer in the programme,
                                                        no contact button was provided in their column. Disabling and removing contact buttons constrain users from making any 
                                                        effort to click them. In the participants' Community also, WordPress dashboard defaults were disabled for participants
                                                        to constrain their activities.  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card mb-4 border-0">
                                                <div class="card-body">
                                                    <div class="mt-3 fw-bold">Mapping</div>
                                                    Slider arrows were used in the "Testimonials" section of the homepage to communicate the navigational behaviour of testimonials. 
                                                    Also, buttons were used in the homepage and "Mentors" page to communicate linkage with other content.  
                                                    
                                                    <div class="mt-3 fw-bold">Consistency</div>
                                                    Primary page navigation is made consistent with the header navigation menu. Also, buttons, irrespectively of their 
                                                    colour, size, or location consistently show linkage with other content. Cards, wherever they are found, communicate 
                                                    content relatedness and grouping of some sort.   
                                                                
                                                    <div class="mt-3 fw-bold">Affordance</div>
                                                    Blue text among primary black text as can be seen in the "About" page gives a clue that it is hyperlinked and clickable.  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects card-header mt-3">
                                    <ul class="nav nav-pills justify-content-center py-2" id="pills-tab2" role="tablist">
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
                                            <button class="nav-link" id="pills-visit4-tab" data-bs-toggle="pill" data-bs-target="#pills-visit4" type="button" role="tab" aria-controls="pills-visit4" aria-selected="false"><a href="https://nipian.org/" target="_blank">Visit Site</a></button>
                                        </li>
                                    </ul>                                
                                </div>
                            </div>
                        </div> <!--NIPIAN Ends-->
                    </div>

                    <!-- DEFUNCT WORDPRESS WEBSITES -->
                    <div class="container-fluid px-5 mt-5 mb-5">
                        <h3 class="lead fw-bold mt-5">Defunct Wordpress Websites</h3> 
                      
                        <div class="lead mt-2">
                            <ul>
                                <li>The list contains websites I built, which no longer exist at their initial web addresses.</li>
                                <li>The list is not exhaustive. Only those with available information are listed.</li>
                                <li>Where available, a <a href="https://archive.org/web/" target="_blank">Wayback Machine (Internet Archive)</a> snapshot is provided.</li>
                                <li>Please note that the Wayback Machine snapshot is not an accurate representation of the website when it was active.</li>
                            </ul>
                        </div>
                        <div class="row mt-5 mb-2">
                            <!-- Left Column -->
                            <div class="col-xl-6">
                                <div class="card mb-4 border-0">
                                    <div class="border-bottom pb-1">
                                        <span class="fw-bold">MedicsNG </span>
                                        <p> 
                                            <span class="text-muted">About:</span> A Paramedic Services Provider.<br>
                                            <span class="text-muted">Built:</span> 2018 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> http://medicsng.com
                                        </p>
                                    </div>  
                                    <div class="border-bottom mt-3 pb-1">
                                        <span class="fw-bold">Senior Staff Association of Nigerian Universities, Uniben Chapter </span>
                                        <p> 
                                            <span class="text-muted">About:</span> A Trade Union for Nigerian Universities' Senior Staff.<br>
                                            <span class="text-muted">Built:</span> 2018 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> http://ssanuuniben.org <br>
                                            <a href="https://tinyurl.com/2xdcuumd" target="_blank" class="small">Wayback Machine Snapshot</a>
                                        </p>
                                    </div>  
                                    <div class="border-bottom mt-3 pb-1">
                                        <span class="fw-bold">University of Benin Journal of the Humanities  </span>
                                        <p> 
                                            <span class="text-muted">About:</span> An Academic Journal<br>
                                            <span class="text-muted">Built:</span> 2017 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> https://ubjh.uniben.edu
                                        </p>
                                    </div>
                                    <div class="border-bottom mt-3 pb-1">
                                        <span class="fw-bold">University of Benin Journal of Science and Technology  </span>
                                        <p> 
                                            <span class="text-muted">About:</span> An Academic Journal<br>
                                            <span class="text-muted">Built:</span> 2017 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> https://ubjst.uniben.edu <br>
                                        </p>
                                    </div>
                                    <div class="border-bottom mt-3 pb-1">
                                        <span class="fw-bold">Venode Nigeria Limited </span>
                                        <p> 
                                            <span class="text-muted">About:</span> An Art Gallery <br>
                                            <span class="text-muted">Built:</span> 2017 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> http://venodenigerialimited.com <br>
                                            <a href="https://tinyurl.com/2p8uds88" target="_blank" class="small">Wayback Machine Snapshot</a>
                                        </p>
                                    </div>
                                    <div class="border-bottom mt-3 pb-1">
                                        <span class="fw-bold">Wesley University Library, Ondo, Nigeria </span>
                                        <p> 
                                            <span class="text-muted">About:</span> A University Library <br>
                                            <span class="text-muted">Built:</span> 2017 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> http://library.wesleyuniversity.info 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Right Column -->
                            <div class="col-xl-6">
                                <div class="card mb-4 border-0">
                                    <div class="border-bottom pb-1">
                                        <span class="fw-bold">Nigeria Library Association, Edo State Chapter  </span>
                                        <p> 
                                            <span class="text-muted">About:</span> A Professional Association<br>
                                            <span class="text-muted">Built:</span> 2015 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> http://nlaedostatechapter.com
                                        </p>
                                    </div>  
                                    <div class="border-bottom mt-3 pb-1">
                                        <span class="fw-bold">Library and Information Science without Walls </span>
                                        <p> 
                                            <span class="text-muted">About:</span> A Professional Journal<br>
                                            <span class="text-muted">Built:</span> 2015 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> http://liswiwa.nlaedostatechapter.com 
                                        </p>
                                    </div>  
                                    <div class="border-bottom mt-3 pb-1">
                                        <span class="fw-bold">Centre for Excellence in Reproductive Health Innovation</span>
                                        <p> 
                                            <span class="text-muted">About:</span> A World Bank Reproductive Health Innovation Project<br>
                                            <span class="text-muted">Built:</span> 2015 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> https://cerhi.uniben.edu <br><br>
                                            <span class="small">The website was managed by different people intermittently. Hence, the design changed frequently. However,
                                                my input was among the earliest at the inception of the Centre.
                                            </span>
                                        </p>
                                    </div>
                                    <div class="border-bottom mt-3 pb-1">
                                        <span class="fw-bold">BetterAchild  </span>
                                        <p> 
                                            <span class="text-muted">About:</span> A Not-for-Profit Project for the Welfare of Children and Young People<br>
                                            <span class="text-muted">Built:</span> 2010 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span>  http://betterachild.org <br>
                                            <a href="https://tinyurl.com/5n6u8x38" target="_blank" class="small">Wayback Machine Snapshot</a>
                                        </p>
                                    </div>
                                    <div class="border-bottom mt-3 pb-1">
                                        <span class="fw-bold">John Harris Library  </span>
                                        <p> 
                                            <span class="text-muted">About:</span> A University Library <br>
                                            <span class="text-muted">Built:</span> 2010 &nbsp;|&nbsp; <span class="text-muted">Initial URL:</span> https://library.uniben.edu <br>
                                            <a href="https://tinyurl.com/fky48ddv" target="_blank" class="small">Wayback Machine Snapshot</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
<?php
    include_once 'footer.php';
?>
