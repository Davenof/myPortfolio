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
                        <nav class="mt-5">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-websites-tab" data-bs-toggle="tab" data-bs-target="#nav-websites" type="button" role="tab" aria-controls="nav-websites" aria-selected="true">Websites</button>
                                <button class="nav-link" id="nav-prototypes-tab" data-bs-toggle="tab" data-bs-target="#nav-prototypes" type="button" role="tab" aria-controls="nav-prototypes" aria-selected="false">Prototypes</button>
                                <button class="nav-link" id="nav-graphics-tab" data-bs-toggle="tab" data-bs-target="#nav-graphics" type="button" role="tab" aria-controls="nav-graphics" aria-selected="false">Graphics</button>
                                <button class="nav-link" id="nav-abm-tab" data-bs-toggle="tab" data-bs-target="#nav-abm" type="button" role="tab" aria-controls="nav-abm" aria-selected="false">Agent-based Modelling</button>
                                <button class="nav-link" id="nav-defunct-tab" data-bs-toggle="tab" data-bs-target="#nav-defunct" type="button" role="tab" aria-controls="nav-defunct" aria-selected="false">Defunct Websites</button>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">

                        <!--WEBSITES TAB -->
                        <div class="tab-pane fade show active" id="nav-websites" role="tabpanel" aria-labelledby="nav-websites-tab">
                            <h3 class="mt-5">Websites</h3>
                            <div class="lead mt-3">
                                I have designed 20+ websites and blogs since 2005 for organisations in different industries, as well as for private 
                                individuals and special projects. However, I relied solely on content management systems for website projects until
                                2010 when I started coding.
                            </div>
                            
                            <!--MY PORTFOLIO -->
                            <div class="card-body mt-5 mb-5 p-0 border" id="portfolio">       
                                <div class="tab-content" id="pills-tabContent5">
                                    <div class="tab-pane fade show active" id="pills-about5" role="tabpanel" aria-labelledby="pills-about5-tab">
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
                                    <div class="tab-pane fade" id="pills-techlang5" role="tabpanel" aria-labelledby="pills-techlang5-tab">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of how technologies and design principles have been applied. It is not detailed for a quick and easy read.</div>
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
                                                        JavaScript was used with CSS to make the sidebar holding the menu items toggle. Although the default Bootstrap 5 
                                                        script for sidebar toggle was relied upon, however, the script was tweaked substantially to achieve the same 
                                                        effect on the homepage which has many underlying customisations. JavaScript was also used to implement Google analytics
                                                        on the website.

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
                                    <div class="tab-pane fade" id="pills-principles5" role="tabpanel" aria-labelledby="pills-principles5-tab">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                        <div class="lead fs-3 mb-2">Summary</div> 
                                                        <div class="small text-muted mb-2">This is only a summary of aspects of design principles applied.</div>
                                                        <div>
                                                            <div class="mt-3 fw-bold">Visibility of System Status</div>
                                                            Page titles were used on all the pages, apart from the homepage, to help site users know what page they are 
                                                             viewing at the time. Also, section titles and subtitles were used where necessary to help site users recognise 
                                                            what section of the page they are on. On pages with lengthy content, accordions, tabs, and section buttons were used
                                                            to compact and manage content for quick visibility and easy navigation.
                                                            To help the site's user know the current section they are on, the background colour of buttons and tabs linking 
                                                            the section changes, as well as the text colour. For tabs, such as those in the "Projects" page, the bottom border 
                                                            of the tab disappears in addition to the change in the background and text colours to give an "open" indication. 
                                                            Such clues help the user understand what part of the page they are on. <br>

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
                                                            against the conventional top navigation style, is to help mobile users who may have to scroll way down a lengthy page 
                                                            to not scroll back up before they can leave the page. Hence, the "Menu Toggle" button was made sticky on mobile 
                                                            devices so that no matter where a user may be on the page, the button is always within sight, and when clicked, the 
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
                                                            could choose what view was most convenient for them at a particular time. Also, various optons for navigating 
                                                            content were provided, such as the primary menu, hypertexts, tabs, buttons, etc. Rather than having just the 
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
                                                            of information, as well as improve their visibility. Also, elements and features that users may not be use were 
                                                            also removed, hence, all current inclusions have the potentiality of use. To achieve minimalism also,  
                                                            limited colour, few elements (where applicable), sufficient white (negative) space/background, varied typography, 
                                                            and some sort of "flat design" were used. However, the aim of the minimalistic design was not to achieve an overly 
                                                            simple-looking website, but to keep the user interface focused on elements and content that support user tasks.

                                                            <div class="mt-3 fw-bold">Help Users Recognize, Diagnose, and Recover From Errors</div>
                                                            Because the website is devoid of dynamic content and made up of linked files and texts, there wasn't 
                                                            much need to worry about error recognition, diagnosis, and recovery on the "frontend". However, because links 
                                                            can be broken, and images may not display for some reasons, links have been crosschecked to avoid breaks as "Error 
                                                            Prevention", while alternative texts and image titles which appear upon cursor hover were used to help the user 
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
                                        <ul class="nav nav-pills justify-content-center py-2" id="pills-tab5" role="tablist">
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link active" id="pills-about5-tab" data-bs-toggle="pill" data-bs-target="#pills-about5" type="button" role="tab" aria-controls="pills-about5" aria-selected="true">Overview</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-techlang5-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang5" type="button" role="tab" aria-controls="pills-techlang5" aria-selected="false">Technologies Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-principles5-tab" data-bs-toggle="pill" data-bs-target="#pills-principles5" type="button" role="tab" aria-controls="pills-principles5" aria-selected="false">Principles Application</button>
                                            </li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>
                            <!-- NIGERIAN LIBRARY ASSOCIATION -->
                            <div class="card-body mt-5 mb-5 p-0 border" id="nlaWebsite">       
                                <div class="tab-content" id="pills-tabContent7">
                                    <div class="tab-pane fade show active" id="pills-about7" role="tabpanel" aria-labelledby="pills-about7-tab">
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
                                    <div class="tab-pane fade" id="pills-techlang7" role="tabpanel" aria-labelledby="pills-techlang7-tab">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                        <div class="lead fs-3 mb-2">Summary</div> 
                                                        <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not detailed for a quick and easy read.</div>
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
                                    <div class="tab-pane fade" id="pills-principles7" role="tabpanel" aria-labelledby="pills-principles7-tab">
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
                                                <button class="nav-link active" id="pills-about7-tab" data-bs-toggle="pill" data-bs-target="#pills-about7" type="button" role="tab" aria-controls="pills-about7" aria-selected="true">Overview</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-techlang7-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang7" type="button" role="tab" aria-controls="pills-techlang7" aria-selected="false">Technologies Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-principles7-tab" data-bs-toggle="pill" data-bs-target="#pills-principles7" type="button" role="tab" aria-controls="pills-principles7" aria-selected="false">Principle Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-visit7-tab" data-bs-toggle="pill" data-bs-target="#pills-visit7" type="button" role="tab" aria-controls="pills-visit7" aria-selected="false"><a href="https://nla.ng/" target="_blank">Visit Site</a></button>
                                            </li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>

                            <!-- DIGITAL CITIZENS PROJECT -->
                            <div class="card-body mt-5 mb-5 p-0 border" id="digitalcitizens">       
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
                                                    <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not detailed for a quick and easy read.</div>
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
                            </div>
    
                            <!-- NIPIAN PROJECT-->
                            <div class="card-body mt-5 mb-5 p-0 border" id="nipian">       
                                <div class="tab-content" id="pills-tabContent2">
                                    <div class="tab-pane fade show active" id="pills-about2" role="tabpanel" aria-labelledby="pills-about2-tab">
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
                                    <div class="tab-pane fade" id="pills-techlang2" role="tabpanel" aria-labelledby="pills-techlang2-tab">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                        <div class="lead fs-3 mb-2">Summary</div> 
                                                        <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not detailed for a quick and easy read.</div>
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
                                    <div class="tab-pane fade" id="pills-principles2" role="tabpanel" aria-labelledby="pills-principles2-tab">
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
                                                <button class="nav-link active" id="pills-about2-tab" data-bs-toggle="pill" data-bs-target="#pills-about2" type="button" role="tab" aria-controls="pills-about2" aria-selected="true">Overview</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-techlang2-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang2" type="button" role="tab" aria-controls="pills-techlang2" aria-selected="false">Technologies Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-principles2-tab" data-bs-toggle="pill" data-bs-target="#pills-principles2" type="button" role="tab" aria-controls="pills-principles2" aria-selected="false">Principle Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-visit2-tab" data-bs-toggle="pill" data-bs-target="#pills-visit2" type="button" role="tab" aria-controls="pills-visit" aria-selected="false"><a href="https://nipian.org/" target="_blank">Visit Site</a></button>
                                            </li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>

                            <!-- VICTORIA OKOJIE PROJECT -->
                            <div class="card-body mt-5 mb-5 p-0 border" id="vicokojie">       
                                <div class="tab-content" id="pills-tabContent6">
                                    <div class="tab-pane fade show active" id="pills-about6" role="tabpanel" aria-labelledby="pills-about6-tab">
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
                                    <div class="tab-pane fade" id="pills-techlang6" role="tabpanel" aria-labelledby="pills-techlang6-tab">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not detailed for a quick and easy read.</div>
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
                                    <div class="tab-pane fade" id="pills-principles6" role="tabpanel" aria-labelledby="pills-principles6-tab">
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
                                        <ul class="nav nav-pills justify-content-center py-2" id="pills-tab6" role="tablist">
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link active" id="pills-about6-tab" data-bs-toggle="pill" data-bs-target="#pills-about6" type="button" role="tab" aria-controls="pills-about6" aria-selected="true">Overview</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-techlang6-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang6" type="button" role="tab" aria-controls="pills-techlang6" aria-selected="false">Technologies Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-principles6-tab" data-bs-toggle="pill" data-bs-target="#pills-principles6" type="button" role="tab" aria-controls="pills-principles6" aria-selected="false">Principle Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-visit6-tab" data-bs-toggle="pill" data-bs-target="#pills-visit6" type="button" role="tab" aria-controls="pills-visit6" aria-selected="false"><a href="https://vicokojie.org/" target="_blank">Visit Site</a></button>
                                            </li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>
    
                            <!-- SOLACE LIBRARY PROJECT -->
                            <div class="card-body mt-5 mb-5 p-0 border" id="solib">       
                                <div class="tab-content" id="pills-tabContent3">
                                    <div class="tab-pane fade show active" id="pills-about3" role="tabpanel" aria-labelledby="pills-about3-tab">
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
                                    <div class="tab-pane fade" id="pills-techlang3" role="tabpanel" aria-labelledby="pills-techlang3-tab">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                        <div class="lead fs-3 mb-2">Summary</div> 
                                                        <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not detailed for a quick and easy read.</div>
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
                                        <ul class="nav nav-pills justify-content-center py-2" id="pills-tab3" role="tablist">
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link active" id="pills-about3-tab" data-bs-toggle="pill" data-bs-target="#pills-about3" type="button" role="tab" aria-controls="pills-about3" aria-selected="true">Overview</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-techlang2-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang3" type="button" role="tab" aria-controls="pills-techlang3" aria-selected="false">Technologies Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-visit2-tab" data-bs-toggle="pill" data-bs-target="#pills-visit3" type="button" role="tab" aria-controls="pills-visit" aria-selected="false"><a href="projects/solib/index.php" target="_blank">Visit Site</a></button>
                                            </li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>

                            <!-- ECOCORE -->
                            <div class="card-body mt-5 mb-5 p-0 border" id="ecocore">       
                                <div class="tab-content" id="pills-tabContent4">
                                    <div class="tab-pane fade show active" id="pills-about4" role="tabpanel" aria-labelledby="pills-about4-tab">
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
                                    <div class="tab-pane fade" id="pills-techlang4" role="tabpanel" aria-labelledby="pills-techlang4-tab">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of how technologies and design principles have been applied. It is not detailed for a quick and easy read.</div>
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
                                    <div class="tab-pane fade" id="pills-principles4" role="tabpanel" aria-labelledby="pills-principles4-tab">
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
                                        <ul class="nav nav-pills justify-content-center py-2" id="pills-tab4" role="tablist">
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link active" id="pills-about4-tab" data-bs-toggle="pill" data-bs-target="#pills-about4" type="button" role="tab" aria-controls="pills-about4" aria-selected="true">Overview</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-techlang4-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang4" type="button" role="tab" aria-controls="pills-techlang4" aria-selected="false">Technologies Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-principles4-tab" data-bs-toggle="pill" data-bs-target="#pills-principles4" type="button" role="tab" aria-controls="pills-principles4" aria-selected="false">Principles Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-visit4-tab" data-bs-toggle="pill" data-bs-target="#pills-visit4" type="button" role="tab" aria-controls="pills-visit4" aria-selected="false"><a href="https://ecocounts.community/" target="_blank">Visit Site</a></button>
                                            </li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <!--PROTOTYPES TAB -->
                        <div class="tab-pane fade" id="nav-prototypes" role="tabpanel" aria-labelledby="nav-prototypes-tab">
                            <h3 class="mt-5">Prototypes</h3>
                                                                       
                            <!-- NIGERIAN LIBRARY ASSOCIATION -->
                            <div class="card-body mt-5 mb-5 p-0 border" id="nla">       
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-about100" role="tabpanel" aria-labelledby="pills-about100-tab">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card border-0">
                                                    <div class="project-image card-body mt-3">
                                                        <a href="https://tinyurl.com/y7zkfdep" target="_blank"><img src="img/projects/103.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of prototype's responsive views"></a>
                                                        <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Responsive Prototype <br> (88.0 <a href="https://en.wikipedia.org/wiki/System_usability_scale" target="_blank">SUS</a> Score after Remote Moderated Usbility Testing)</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="card mb-4 border-0">
                                                    <div class="project-detail card-body">
                                                        <div class="lead fs-3 mb-2"><a href="https://tinyurl.com/y7zkfdep" target="_blank">Nigerian Library Association</a></div> 
                                                        <div class="text-primary mb-2">Professional Association</div>
                                                        <div class="lead fs-6">
                                                            I designed this high-fidelity prototype in August 2021, both as an academic work and as a replacement for the <a href="https://nla.ng/" target="_blank" class="text-primary">Nigerian
                                                            Library Association's website</a>. The prototype was part of my <a href="education.php" class="text-primary">master's in computer science</a> project. Along with my
                                                            dissertation, I scored a distinction. This was instrumental to my graduating with a distinction.
                                                            
                                                            <div class="mt-3 fw-bold">Technologies Used</div>
                                                            InVision (Studio), CorelDRAW
                                                            
                                                            <div class="mt-3 fw-bold">Design Principles</div>
                                                            <div class="badge rounded-pill bg-secondary mb-2">Nielsen</div> <div class="badge rounded-pill bg-secondary mb-2">Gestalt</div> <div class="badge rounded-pill bg-secondary mb-2">Norman</div> <br>
                                                            The design principles implemented in the prototype include the Jakob Nielsen’s <a href="https://tinyurl.com/yryxruan" target="_blank" class="principle fst-italic">Horizontal Prototyping</a>, the <a href="https://en.wikipedia.org/wiki/Visual_hierarchy" target="_blank" class="principle fst-italic">Gestalt Principle (theory) of Visual Hierarchy</a>, 
                                                            and the Don Norman's <a href="https://tinyurl.com/2p89d7j6" target="_blank" class="principle fst-italic">Principles of Design</a>.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>
                                    <div class="tab-pane fade" id="pills-techlang100" role="tabpanel" aria-labelledby="pills-techlang100-tab">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                    <div class="lead fs-3 mb-2">Summary</div> 
                                                    <div class="small text-muted mb-2">This is only a summary of how technologies and design principles have been applied. It is not detailed for a quick and easy read.</div>
                                                        <div>
                                                            <div class="mt-3 fw-bold">InVision (Studio)</div>
                                                            The entire prototype, apart from image enhancement was built with InVision. 
                                                            
                                                            <div class="mt-3 fw-bold">CorelDRAW</div>
                                                            All image enhancements - cropping, overlays, backgrounds, etc. - were done with CorelDRAW. 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-principles100" role="tabpanel" aria-labelledby="pills-principles100-tab">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                        <div class="lead fs-3 mb-2">Summary</div> 
                                                        <div class="small text-muted mb-2">This is only a summary of aspects of design principles applied.</div>
                                                        <div>
                                                            <div class="lead fs-5 mt-3 mb-2">Jakob Nielsen's Horizontal Prototyping</div>
                                                            The prototype was designed to display the entire user interface of the website without any underlying functionality. For
                                                            example, when a form’s submit button is clicked, the intricacies of the submission process are not
                                                            implemented. Also, when members log in, they are directed to the Association's forum on the website, but the complex details
                                                            that represent the functionality of the forum are not prototyped. 
                                                            
                                                            <div class="lead fs-5 mt-3 mb-2">Gestalt and Don Norman's Principles</div>

                                                            <div class="mt-3 fw-bold">Background</div>
                                                            A significantly usable website was the aim of the prototype, hence, white was the primary and dominant background 
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
                                                        To boost the visibility of all important content, the prototype pages were trimmed uniformly across
                                                        board to hold only a few content, where the remainder of a long content is displayed on another page.
                                                        The standard dimension for all pages is 1440px (width) x 2000px (height), except for pages that display
                                                        an expanded accordion menu, where the height of such pages is 2400px. The accordion was used
                                                        where necessary to compress very long segmented content into one page to enhance visibility.

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
                                        <ul class="nav nav-pills justify-content-center py-2" id="pills-tab" role="tablist">
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link active" id="pills-about100-tab" data-bs-toggle="pill" data-bs-target="#pills-about100" type="button" role="tab" aria-controls="pills-about100" aria-selected="true">Overview</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-techlang100-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang100" type="button" role="tab" aria-controls="pills-techlang100" aria-selected="false">Technologies Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-principles100-tab" data-bs-toggle="pill" data-bs-target="#pills-principles100" type="button" role="tab" aria-controls="pills-principles100" aria-selected="false">Principles Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-visit100-tab" data-bs-toggle="pill" data-bs-target="#pills-visit100" type="button" role="tab" aria-controls="pills-visit100" aria-selected="false"><a href="https://tinyurl.com/y7zkfdep" target="_blank">See Prototype</a></button>
                                            </li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>

                            <!-- KEEPFIT -->                                
                            <div class="card-body mt-5 mb-5 p-0 border" id="keepfit">       
                                <div class="tab-content" id="pills-tabContent3">
                                    <div class="tab-pane fade show active" id="pills-about101" role="tabpanel" aria-labelledby="pills-about101-tab">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card border-0">
                                                    <div class="project-image card-body mt-3">
                                                        <a href="projects/keepfit/index.html" target="_blank"><img src="img/projects/104.jpg" width="100%" height="auto" alt="Website's resposive views" title="Screenshots of prototype's responsive views"></a>
                                                        <div class="lead fs-6 text-center mt-1 p-1 shadow rounded">Responsive Static Prototype </div>
                                                        <div class="small text-center mt-1 p-1">Click the "Highlights" button below to see the prototype highlights,
                                                            and the "Technologies Application" button for information about the partially dynamic version (Extended Version)</div>
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
                                    <div class="tab-pane fade" id="pills-techlang101" role="tabpanel" aria-labelledby="pills-techlang101-tab">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="card mb-4 border-0">
                                                    <div class="card-body">
                                                        <div class="lead fs-3 mb-2">Summary</div> 
                                                        <div class="small text-muted mb-2">This is only a summary of how technologies, languages, and design principles have been applied. It is not detailed for a quick and easy read.</div>
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
                                    <div class="tab-pane fade" id="pills-principles101" role="tabpanel" aria-labelledby="pills-principles102-tab">
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
                                    <div class="tab-pane fade" id="pills-highlights101" role="tabpanel" aria-labelledby="pills-highlights102-tab">
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
                                        <ul class="nav nav-pills justify-content-center py-2" id="pills-tab101" role="tablist">
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link active" id="pills-about101-tab" data-bs-toggle="pill" data-bs-target="#pills-about101" type="button" role="tab" aria-controls="pills-about101" aria-selected="true">Overview</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-techlang101-tab" data-bs-toggle="pill" data-bs-target="#pills-techlang101" type="button" role="tab" aria-controls="pills-techlang101" aria-selected="false">Technologies Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-principles101-tab" data-bs-toggle="pill" data-bs-target="#pills-principles101" type="button" role="tab" aria-controls="pills-principles101" aria-selected="false">Principle Application</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-highlights101-tab" data-bs-toggle="pill" data-bs-target="#pills-highlights101" type="button" role="tab" aria-controls="pills-highlights101" aria-selected="false">Highlights</button>
                                            </li>
                                            <li class="nav-item border rounded-3 border-primary mb-2" role="presentation">
                                                <button class="nav-link" id="pills-visit101-tab" data-bs-toggle="pill" data-bs-target="#pills-visit101" type="button" role="tab" aria-controls="pills-visit" aria-selected="false"><a href="projects/keepfit/index.html" target="_blank">See Prototype</a></button>
                                            </li>
                                        </ul>                                
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <!--GRAPHICS TAB -->
                        <div class="tab-pane fade" id="nav-graphics" role="tabpanel" aria-labelledby="nav-graphics-tab">
                            <h3 class="mt-5">Graphics / Branding</h3>
                            <div class="card-header mt-5"><h5>Official Company Logos</h5></div>
                            <div class="lead mt-2">
                                <ul>
                                    <li>Only logos accepted by organisations/companies as official are included in the list.</li>
                                    <li>The list is not exhaustive as a few others are currently not reachable.</li>
                                </ul>
                            </div>
                            <div class="row mt-5 mb-2">
                                <!--JHL Logo --> 
                                <div class="card col-lg-4 border-0 mb-4">
                                    <div class="training-page card-header">
                                        <img src="img/projects/graphics/1.jpg" width="300" height="auto" alt="University of Benin Library" title="Uniben Library Logo">
                                        <p class="card-title text-center mt-2">The Logo of the University of Benin Library, Nigeria <br>
                                            Designed: <span class="text-muted">2014</span> &nbsp;|&nbsp; With: <span class="text-muted">CorelDRAW</span><br> &nbsp;
                                        </p>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingOne">
                                                    <span class="btn btn-primary col-12 text-white text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><h5>Other Info</h5></span>
                                                </div>
                                                <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne">
                                                    <div class="accordion-body">
                                                    I also designed the cover pages of the first editions of the university's Journals of Science and Technology, and the Humanities, respectively.
                                                    Both journals were managed by the University Library. 
                                                    <br><br>
                                                    Other of my graphical inputs included but were not limited to event flyers, posters, banners, business cards
                                                     for some principal officers, letterheads, among others.     
                                                    </div>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>  
                                <!--CERHI Logo -->  
                                <div class="card col-lg-4 border-0 mb-4">
                                    <div class="training-page card-header">
                                        <a href="https://www.cerhiuniben.edu.ng/" target="_target"><img src="img/projects/graphics/2.jpg" width="300" height="auto" alt="CERHI Logo" title="CERHI Logo"></a>
                                        <p class="card-title text-center mt-2">The Logo of a World Bank Project <br>
                                            (<a href="https://www.cerhiuniben.edu.ng/" target="_target" class="small">Centre of Excellence in Reproductive Health Innovation</a>) <br>
                                            Designed: <span class="text-muted">2014</span> &nbsp;|&nbsp; With: <span class="text-muted">CorelDRAW</span>
                                        </p>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingTwo">
                                                    <span class="btn btn-primary col-12 text-white text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><h5>Other Info</h5></span>
                                                </div>
                                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo">
                                                    <div class="accordion-body">
                                                    Other logos were designed for the Centre by other people, including contractors, but mine was chosen by the 
                                                    Centre's Board as the official logo of the Centre because it depicted everything that defined the Centre - 
                                                    reproduction (the family), academics (the graduation cap and scroll), Nigeria (the traditional dresses), 
                                                    the University of Benin (the colours - purple, green, and gold), Africa (the map), 
                                                    an international centre (the plant, similar to that in the United Nations logo), and innovation (the concept).
                                                    <br><br> 
                                                    I also designed the letter head of the Centre, and the initial flyers used to advertise the Centre's programmes. 
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                                <!--LAG Logo --> 
                                <div class="card col-lg-4 border-0 mb-4">
                                    <div class="training-page card-header">
                                        <img src="img/projects/graphics/3.jpg" width="300" height="auto" alt="Library Advocacy Group Logo" title="LAG Logo">
                                        <p class="card-title text-center mt-2">Library Advocacy Group Logo <br>
                                            Designed: <span class="text-muted">2017</span> &nbsp;|&nbsp; With: <span class="text-muted">CorelDRAW</span> <br> 
                                        </p>
                                        <br><br>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingThree">
                                                    <span class="btn btn-primary col-12 text-white text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><h5>Other Info</h5></span>
                                                </div>
                                                <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree">
                                                <div class="accordion-body">
                                                    I also designed the letterhead of the group which was the foremost and most influencial advocacy group 
                                                    for libraries and librarians in Nigeria.      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2 mb-2">
                                <!--DC Logo --> 
                                <div class="card col-lg-4 border-0 mb-4">
                                    <div class="training-page card-header">
                                        <a href="https://digitalcitizens.tech/" target="_target"><img src="img/projects/graphics/4.jpg" width="300" height="auto" alt="Digital Citizens Logo" title="DC Logo"></a>
                                        <p class="card-title text-center mt-2">Digital Citizens Logo <br>
                                            Designed: <span class="text-muted">2018</span> &nbsp;|&nbsp; With: <span class="text-muted">CorelDRAW</span> <br> 
                                        </p>
                                        <br><br>
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <div class="accordion-header" id="headingFour">
                                                    <span class="btn btn-primary col-12 text-white text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><h5>Other Info</h5></span>
                                                </div>
                                                <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour">
                                                <div class="accordion-body">
                                                    I also designed the letterhead, business cards, ID cards, and invoice of the company, as well as several
                                                    flyers and posters for events.      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div> 
                            <!--LETTERHEADS -->  
                            <div class="card-header mt-5"><h5>Official Company Letterheads</h5></div>
                            <div class="lead mt-2">
                                <ul>
                                    <li>Only letterheads accepted by organisations/companies as official are included in the list.</li>
                                    <li>The list is not exhaustive as a few others are currently not reachable.</li>
                                </ul>
                            </div>
                            <div class="row mt-5 mb-2">
                                <!--LAG Letterhead -->  
                                <div class="col-xl-6">
                                    <div class="card mb-4 border-0">
                                        <a href="https://digitalcitizens.tech/" target="_target" class="text-center"><img src="img/projects/graphics/5.jpg" width="400" height="auto" alt="Digital Citizens Logo" title="LAG letterhead sample"></a>
                                        <p class="card-title text-center mt-2">Library Advocacy Group Letterhead <br>
                                            Designed: <span class="text-muted">2017</span> &nbsp;|&nbsp; With: <span class="text-muted">CorelDRAW</span> <br> 
                                        </p>
                                    </div>                   
                                </div>
                                <!--DC Letterhead --> 
                                <div class="col-xl-6">
                                    <div class="card mb-4 border-0">
                                        <a href="https://digitalcitizens.tech/" target="_target" class="text-center"><img src="img/projects/graphics/6.jpg" width="400" height="auto" alt="Digital Citizens Logo" title="DC letterhead sample"></a>
                                        <p class="card-title text-center mt-2">Digital Citizens Letterhead <br>
                                            Designed: <span class="text-muted">2018</span> &nbsp;|&nbsp; With: <span class="text-muted">CorelDRAW</span> <br> 
                                        </p>
                                    </div>                   
                                </div>
                            </div>                                                   
                        </div>

                        <!--AGENT-BASED MODELLING TAB -->
                        <div class="tab-pane fade" id="nav-abm" role="tabpanel" aria-labelledby="nav-abm-tab">
                        <h3 class="mt-5">Agent-based Modelling</h3>
                        <div class="card-body mt-5 mb-5 p-0 border" id="keepfit">       
                                <div class="tab-content" id="pills-tabContent3">
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

                        <!--DEFUNCT WEBSITES TAB -->
                        <div class="tab-pane fade" id="nav-defunct" role="tabpanel" aria-labelledby="nav-defunct-tab">
                            <h3 class="mt-5">Defunct Websites</h3>
                            <div class="lead mt-2">
                                <ul>
                                    <li>The list contains websites I built, but no longer exist at their initial web addresses.</li>
                                    <li>The list is not exhaustive as only those documented are provided.</li>
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
                    </div>
                </main>
<?php
    include_once 'footer.php';
?>
