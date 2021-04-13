<?php get_header() ?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
 <!-- Home-->
<section class="home-area element-cover-bg" id="home" style="background-image:url(img/Emodee.jpg)">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-lg-8 home-content text-center">
                <h1 class="home-name">NEAPSYS</h1>
                <h4 class="cd-headline clip home-headline">Nous sommes <span class="cd-words-wrapper single-headline"><b class="is-visible">Front-end Developer</b><b>UI Designer</b><b>Web Designer</b><b> Graphics Designer</b></span></h4>
            </div>
        </div>
    </div>
    <div class="fixed-wrapper">

        <!-- Social media icons-->
        <div class="fixed-block block-right">
            <ul class="list-unstyled social-icons">
                <li><a href="https://www.instagram.com/emayedavid" target="_blank"><i class="icon ion-logo-instagram"></i></a></li>
                <li><a href="https://twitter.com/davidemaye" target="_blank"><i class="icon ion-logo-twitter"></i></a></li>
                <li><a href="https://web.facebook.com/emaye.david" target="_blank"><i class="icon ion-logo-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/davidemaye" target="_blank"><i class="icon ion-logo-linkedin"></i></a></li>
            </ul>
        </div>
        <div class="fixed-block block-left">
            <ul class="list-unstyled social-icons languages-list">
                <li>
                    <a href="#0">
                        <span class="single-language">ENG</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <span class="single-language">FRA</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- About lightbox-->
<div class="lightbox-wrapper" id="about" data-simplebar>
    <div class="container-fluid">
        <div class="lightbox-close">
            <div data-modal-close=""><span>Accueil</span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading page-heading">
                                    <p class="section-description">Get to know me</p>
                                    <h2 class="section-title">About me</h2>
                                    <div class="animated-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Info section-->
                    <div class="info-section single-section container">
                        <div class="row align-items-center">
                            <!-- Picture part-->
                            <div class="col-12 col-lg-5 info-img"><img class="img-fluid img-thumbnail" src="img/IMG-20200327-WA0074-02.jpg" alt="About Picture"></div>
                            <!-- Content part-->
                            <div class="col-12 col-lg-7 info-content">
                                <div class="content-block">
                                    <h2 class="content-subtitle">Qui sommes-nous ?</h2>
                                    <h6 class="content-title">I'm David Emaye, a Front-end Developer,Web Designer and a Graphics Designer</h6>
                                    <div class="content-description">
                                        <p>
                                            David Emaye is a Web Designer, an undergraduate currently undergoing a B.Tech degree in Computer Science. He has more than
                                            two years commercial experience providing front-end development, producing high quality responsive websites and exceptional user experience.
                                        </p>
                                        <p>
                                            The work he provides is of highest quality, fully responsive, and tested in a wide range of devices. He takes great care to
                                            ensure each project is well-documented and easily maintainable so you can enhance a website as your company grows.
                                        </p>
                                        <p>
                                            His clients have found that launching with a well considered and well developed front-end has saved them time and money
                                            and makes for a product that is consistently of high quality.
                                        </p>
                                    </div>
                                    <!-- <address class="content-info">
                                      <div class="row">
                                        <div class="col-12 col-md-6 single-info"><span>Name:</span>
                                          <p>David Emaye</p>
                                        </div>
                                        <div class="col-12 col-md-6 single-info"><span>Email:</span>
                                          <p><a href="mailto:emayeodavid@gmail.com">emayeodavid@gmail.com</a></p>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12 col-md-6 single-info"><span>Age:</span>
                                          <p>20</p>
                                        </div>
                                        <div class="col-12 col-md-6 single-info"><span>From:</span>
                                          <p>Lagos, Nigeria</p>
                                        </div>
                                      </div>
                                    </address> -->
                                    <div class="d-block d-sm-flex align-items-center"><a class="btn content-download button-main button-scheme" href="documents/David Emaye CV.pdf" onclick="download" role="button" download="David Emaye CV">Download CV</a>
                                        <ul class="list-unstyled list-inline content-follow">
                                            <li class="list-inline-item"><a href="https://twitter.com/davidemaye" target="_blank"><i class="icon ion-logo-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.instagram.com/emayedavid" target="_blank"><i class="icon ion-logo-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/davidemaye" target="_blank"><i class="icon ion-logo-linkedin"></i></a></li>
                                            <li class="list-inline-item"><a href="https://web.facebook.com/emaye.david" target="_blank"><i class="icon ion-logo-facebook"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services section-->
                    <div class="services-container expertises">
                        <div class="services-section single-section container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-heading">
                                        <p class="section-description">Services i offer to my clients</p>
                                        <h2 class="section-title">Nos Expertises</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Single service-->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service"><i class="icon service-icon ion-logo-css3"></i>
                                        <h6 class="service-title">Front-end Development</h6>
                                        <p class="service-description">I create responsive websites that allow the user to
                                            experience your website in the best and most appropriate way suited to the device they are using.</p>
                                    </div>
                                </div>
                                <!-- Single service-->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service"><i class="icon service-icon ion-md-images"></i>
                                        <h6 class="service-title">Graphics Design</h6>
                                        <p class="service-description">As a Front-end developer, I believe it is important to understand both design
                                            and development to achieve a successful user-facing product.</p>
                                    </div>
                                </div>
                                <!-- Single service-->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service"><i class="icon service-icon ion-logo-ionic"></i>
                                        <h6 class="service-title">Web Design</h6>
                                        <p class="service-description">I have excellent understanding of graphic design, colour schemes, button
                                            design, interface design, Photoshop /Illustrator, navigational design.</p>
                                    </div>
                                </div>
                                <!-- Single service-->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service mb-lg-0"><i class="icon service-icon ion-logo-wordpress"></i>
                                        <h6 class="service-title">WordPress Site Development</h6>
                                        <p class="service-description">In many projects, my client’s require the ability to manage the content of their website. WordPress
                                            is the world’s most popular content management system which I have many years of experience with.</p>
                                    </div>
                                </div>
                                <!-- Single service-->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service mb-md-0"><i class="icon service-icon ion-md-move"></i>
                                        <h6 class="service-title">Web Development</h6>
                                        <p class="service-description">I work to design, create, and maintain websites and web applications. I write codes
                                            in several programming languages such as HTML, CSS, PHP, and JavaScript that is easy to read which means it can be maintained in the future</p>
                                    </div>
                                </div>
                                <!-- Single service-->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service mb-0"><i class="icon service-icon ion-ios-rocket"></i>
                                        <h6 class="service-title">Learn More</h6>
                                        <p class="service-description">If you’d like to find out more about how I work and my process of working with clients, please send
                                            me a message in the contact page and give a little information about the project you have in mind.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonials section-->
                    <div class="testimonials-section single-section container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading">
                                    <p class="section-description">What my clients think about me</p>
                                    <h2 class="section-title">Testimonials</h2>
                                </div>
                            </div>
                        </div>
                        <div class="my-slider">
                            <div class="slider-item">
                                <!-- Single review-->
                                <div class="single-review swiper-slide">
                                    <div class="review-header d-flex justify-content-between">
                                        <div class="review-client">
                                            <div class="media"><img class="img-fluid rounded-circle client-avatar" src="img/client-1.jpg" alt="Client">
                                                <div class="client-details">
                                                    <h6 class="client-name">Julia Sakura</h6><span class="client-role">Envato Customer</span>
                                                </div>
                                            </div>
                                        </div><i class="icon ion-md-quote review-icon"></i>
                                    </div>
                                    <p class="review-content">David did an excellent creative job, addressing our request quickly, and also providing her own graphic insight, being open to feedback and changes or edits when they arose. She worked with us the entire way. Highly recommended.</p>
                                </div>
                            </div>
                            <div class="slider-item">
                                <!-- Single review-->
                                <div class="single-review swiper-slide">
                                    <div class="review-header d-flex justify-content-between">
                                        <div class="review-client">
                                            <div class="media"><img class="img-fluid rounded-circle client-avatar" src="img/client-2.jpg" alt="Client">
                                                <div class="client-details">
                                                    <h6 class="client-name">John Santana</h6><span class="client-role">Entrepreneur</span>
                                                </div>
                                            </div>
                                        </div><i class="icon ion-md-quote review-icon"></i>
                                    </div>
                                    <p class="review-content">David did an excellent creative job, addressing our request quickly, and also providing her own graphic insight, being open to feedback and changes or edits when they arose. She worked with us the entire way. Highly recommended.</p>
                                </div>
                            </div>
                            <div class="slider-item">
                                <!-- Single review-->
                                <div class="single-review swiper-slide">
                                    <div class="review-header d-flex justify-content-between">
                                        <div class="review-client">
                                            <div class="media"><img class="img-fluid rounded-circle client-avatar" src="img/client-3.jpg" alt="Client">
                                                <div class="client-details">
                                                    <h6 class="client-name">Maria Wilson</h6><span class="client-role">Envato Customer</span>
                                                </div>
                                            </div>
                                        </div><i class="icon ion-md-quote review-icon"></i>
                                    </div>
                                    <p class="review-content">David did an excellent creative job, addressing our request quickly, and also providing her own graphic insight, being open to feedback and changes or edits when they arose. She worked with us the entire way. Highly recommended.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Expertises lightbox-->
<div class="lightbox-wrapper" id="expertises" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div data-modal-close=""><span>Accueil</span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Get to know me</p>
                                <h2 class="section-title">Expertise</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Services section-->
                    <div class="container-fluid services-container">
                        <div class="services-section single-section">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-heading">
                                        <p class="section-description">Services i offer to my clients</p>
                                        <h2 class="section-title">Nos Expertises</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Single service-->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service"><i class="icon service-icon ion-logo-css3"></i>
                                        <h6 class="service-title">Front-end Development</h6>
                                        <p class="service-description">I create responsive websites that allow the user to
                                            experience your website in the best and most appropriate way suited to the device they are using.</p>
                                    </div>
                                </div>
                                <!-- Single service-->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service"><i class="icon service-icon ion-md-images"></i>
                                        <h6 class="service-title">Graphics Design</h6>
                                        <p class="service-description">As a Front-end developer, I believe it is important to understand both design
                                            and development to achieve a successful user-facing product.</p>
                                    </div>
                                </div>
                                <!-- Single service-->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-service"><i class="icon service-icon ion-logo-ionic"></i>
                                        <h6 class="service-title">Web Design</h6>
                                        <p class="service-description">I have excellent understanding of graphic design, colour schemes, button
                                            design, interface design, Photoshop /Illustrator, navigational design.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="single-section">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6 img-part">
                                    <img src="/img/post-5.jpg" alt="">
                                </div>
                                <div class="col-12 col-lg-6 content-part">
                                    <h3 class="content-title">Take a tour of my office</h3>
                                    <p class="content-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod molestias adipisci suscipit aspernatur ut, laborum voluptate, iste quidem mollitia, molestiae nostrum id amet necessitatibus temporibus. Excepturi inventore odio rem itaque!</p>
                                </div>

                            </div>
                            <div class="row">
                            </div>
                        </div>
                        <div class="single-section">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6 img-part">
                                    <img src="/img/post-5.jpg" alt="">
                                </div>
                                <div class="col-12 col-lg-6 content-part">
                                    <h3 class="content-title">Take a tour of my office</h3>
                                    <p class="content-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod molestias adipisci suscipit aspernatur ut, laborum voluptate, iste quidem mollitia, molestiae nostrum id amet necessitatibus temporibus. Excepturi inventore odio rem itaque!</p>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                        </div>
                        <div class="single-section">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-6 img-part">
                                    <img src="/img/post-5.jpg" alt="">
                                </div>
                                <div class="col-12 col-lg-6 content-part">
                                    <h3 class="content-title">Take a tour of my office</h3>
                                    <p class="content-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod molestias adipisci suscipit aspernatur ut, laborum voluptate, iste quidem mollitia, molestiae nostrum id amet necessitatibus temporibus. Excepturi inventore odio rem itaque!</p>
                                </div>

                            </div>
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Resume lightbox-->
<div class="lightbox-wrapper" id="resume" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div class="close-btn" data-modal-close=""><span class="btn-line"></span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Check out my Resume</p>
                                <h2 class="section-title">Resume</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Resume section-->
                    <div class="resume-section single-section">
                        <div class="row">
                            <!-- Education part-->
                            <div class="col-12 col-md-6">
                                <div class="col-block education">
                                    <h3 class="col-title">Education</h3>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">B.Tech Computer Science</h5><span class="item-details">Ondo State University of Sience and Technology / 2016 - till date</span>
                                        <p class="item-description"></p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">Digital Marketing</h5><span class="item-details">Google Digital Skills For Africa / January 2019</span>
                                        <p class="item-description"></p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">Front End Web Development (Practical Course)</h5><span class="item-details">Udemy / March 2020</span>
                                        <p class="item-description"></p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">Responsible Leadership on Transparency and Good Governance</h5><span class="item-details">Yali Network / Febuary 2020</span>
                                        <p class="item-description"></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Experience part-->
                            <div class="col-12 col-md-6">
                                <div class="col-block experience">
                                    <h3 class="col-title">Experience</h3>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">Front-end Developer and Web Developer</h5><span class="item-details">Techcross Limited / 2020 - Present</span>
                                        <p class="item-description">
                                        <ul>
                                            <li>Generated design frameworks designed to encourage maximal user response rates to ad placements.</li>
                                            <li>Created site layout and user interface using HTML and CSS practices for company's clients.</li>
                                            <li>Strengthened company brand and identity by creating distinctive websites for clients.</li>
                                            <li>Built and styled three new mobile-friendly websites and transitioned old site into mobile-friendly version.</li>
                                            <li>Established web hosting for site and uploaded site files to hosting account.</li>
                                        </ul>
                                        </p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">Front-end Developer and Web Developer</h5><span class="item-details">Medipal Healthcare / 2020 - Present</span>
                                        <p class="item-description">
                                        <ul>
                                        </ul>
                                        </p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">User Activation and Engagement Executive </h5><span class="item-details">Winkleaf / 2019 - Present</span>
                                        <p class="item-description">
                                        <ul>
                                            <li>Driving in Contents into the company’s web app.</li>
                                            <li>Develop marketing strategies to increase company revenue.</li>
                                            <li>Monitored social media and online sources for industry trends.</li>
                                        </ul>
                                        </p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">Team Lead and Project Manager </h5><span class="item-details">Team GROW / 2019 - Present</span>
                                        <p class="item-description">
                                        <ul>
                                            <li>Executed community based projects to achieve the United Nation Sustainable Development Goals.</li>
                                            <li>Conducted training and mentored team members to promote productivity, accuracy and commitment to friendly service.</li>
                                            <li>Provided administrative support for 5 projects.</li>
                                            <li>Led team of 25 members while providing exceptional customer service.</li>
                                        </ul>
                                        </p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">Project Manager </h5><span class="item-details">World Merit / 2019 - Present</span>
                                        <p class="item-description">
                                        <ul>
                                            <li>Executed a community project based on proper waste disposal.</li>
                                            <li>Delegation of duties to personal team members and supervision of projects.</li>
                                            <li>Closely collaborated with project members to identify and quickly address problems.</li>
                                            <li>Drove team success through shared vision and recognition of quality performance.</li>
                                            <li>Determined root cause of problems and issues to implement courses of action required to implement solutions.</li>
                                        </ul>
                                        </p>
                                    </div>
                                    <div class="resume-item"><span class="item-arrow"></span>
                                        <h5 class="item-title">Regional Leader (Salt Talks Ondo) </h5><span class="item-details">Salt House (Salt Talks Africa) / 2019 - Present</span>
                                        <p class="item-description">
                                        <ul>
                                            <li>Delegation of duties to team members and supervision of researches and projects.</li>
                                            <li>Led Research team to a riverine community for a Community Research.</li>
                                            <li>Organized individual referrals to obtain community service.</li>
                                            <li>Played instrumental role in creative planning and review sessions, working with resourceful team to elevate quality of content and designs.</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Skills section-->
                    <div class="skills-section single-section">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-heading">
                                    <p class="section-description">My level of knowledge in some tools</p>
                                    <h2 class="section-title">My Skills</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="single-skill" data-percentage="85">
                                    <div class="skill-info"><span class="skill-name">HTML</span><span class="skill-percentage"></span></div>
                                    <div class="progress skill-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="single-skill" data-percentage="40">
                                    <div class="skill-info"><span class="skill-name">Tailwind CSS</span><span class="skill-percentage"></span></div>
                                    <div class="progress skill-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="single-skill" data-percentage="50">
                                    <div class="skill-info"><span class="skill-name">JavaScript</span><span class="skill-percentage"></span></div>
                                    <div class="progress skill-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="single-skill" data-percentage="85">
                                    <div class="skill-info"><span class="skill-name">Figma</span><span class="skill-percentage"></span></div>
                                    <div class="progress skill-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="single-skill" data-percentage="70">
                                    <div class="skill-info"><span class="skill-name">CSS</span><span class="skill-percentage"></span></div>
                                    <div class="progress skill-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="single-skill" data-percentage="80">
                                    <div class="skill-info"><span class="skill-name">WordPress</span><span class="skill-percentage"></span></div>
                                    <div class="progress skill-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="single-skill" data-percentage="10">
                                    <div class="skill-info"><span class="skill-name">Vue JS</span><span class="skill-percentage"></span></div>
                                    <div class="progress skill-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="single-skill" data-percentage="80">
                                    <div class="skill-info"><span class="skill-name">Corel Draw</span><span class="skill-percentage"></span></div>
                                    <div class="progress skill-progress">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio lightbox-->
<div class="lightbox-wrapper" id="blog" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div data-modal-close=""><span>Accueil</span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Showcasing some of my best work</p>
                                <h2 class="section-title">Blog</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- blog section-->
                    <div class="blog-section single-section">
                        <!-- Thumbnail list-->
                        <div class="row justify-content-center">
                            <!-- Single item-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post">
                                    <a class="post-img" href="#0">
                                        <img class="card-img-top" src="/img/post-1.jpg" alt="Blog post">
                                        <span class="content-date">11 Dec, 20</span>
                                    </a>
                                    <div class="card-body post-content">
                                        <a href="#0">
                                            <h5 class="card-title content-title">Top tools for Photographers</h5>
                                        </a>
                                        <p class="card-text content-descritption">
                                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vero dolore perspiciatis, magni earum labore, odio dignissimos tempora temporibus totam similique?"
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single item-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post">
                                    <a class="post-img" href="#0">
                                        <img class="card-img-top" src="/img/post-2.jpg" alt="Blog post">
                                        <span class="content-date">11 Dec, 20</span>
                                    </a>
                                    <div class="card-body post-content">
                                        <a href="#0">
                                            <h5 class="card-title content-title">Top tools for Photographers</h5>
                                        </a>
                                        <p class="card-text content-descritption">
                                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vero dolore perspiciatis, magni earum labore, odio dignissimos tempora temporibus totam similique?"
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single item-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post">
                                    <a class="post-img" href="#0">
                                        <img class="card-img-top" src="/img/post-3.jpg" alt="Blog post">
                                        <span class="content-date">11 Dec, 20</span>
                                    </a>
                                    <div class="card-body post-content">
                                        <a href="#0">
                                            <h5 class="card-title content-title">Top tools for Photographers</h5>
                                        </a>
                                        <p class="card-text content-descritption">
                                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vero dolore perspiciatis, magni earum labore, odio dignissimos tempora temporibus totam similique?"
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single item-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post">
                                    <a class="post-img" href="#0">
                                        <img class="card-img-top" src="/img/post-4.jpg" alt="Blog post">
                                        <span class="content-date">11 Dec, 20</span>
                                    </a>
                                    <div class="card-body post-content">
                                        <a href="#0">
                                            <h5 class="card-title content-title">Top tools for Photographers</h5>
                                        </a>
                                        <p class="card-text content-descritption">
                                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vero dolore perspiciatis, magni earum labore, odio dignissimos tempora temporibus totam similique?"
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single item-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post">
                                    <a class="post-img" href="#0">
                                        <img class="card-img-top" src="/img/post-5.jpg" alt="Blog post">
                                        <span class="content-date">11 Dec, 20</span>
                                    </a>
                                    <div class="card-body post-content">
                                        <a href="#0">
                                            <h5 class="card-title content-title">Top tools for Photographers</h5>
                                        </a>
                                        <p class="card-text content-descritption">
                                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vero dolore perspiciatis, magni earum labore, odio dignissimos tempora temporibus totam similique?"
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single item-->
                            <div class="col-12 col-sm-8 col-lg-4">
                                <div class="card single-post">
                                    <a class="post-img" href="#0">
                                        <img class="card-img-top" src="/img/post-6.jpg" alt="Blog post">
                                        <span class="content-date">11 Dec, 20</span>
                                    </a>
                                    <div class="card-body post-content">
                                        <a href="#0">
                                            <h5 class="card-title content-title">Top tools for Photographers</h5>
                                        </a>
                                        <p class="card-text content-descritption">
                                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio vero dolore perspiciatis, magni earum labore, odio dignissimos tempora temporibus totam similique?"
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Join lightbox-->
<div class="lightbox-wrapper" id="join" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div data-modal-close=""><span>Accueil</span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Feel free to join me anytime</p>
                                <h2 class="section-title">Get in Touch</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- join section-->
                    <div class="join-section single-section">
                        <div class="row">
                            <!-- join form-->
                            <div class="col-12 col-lg-7">
                                <form class="join-form" id="join-form" action="http://exill.tn/demo/kitzu/template/php/contact.php">
                                    <h4 class="content-title">Join Us</h4>
                                    <div class="row">
                                        <div class="col-12 col-md-6 form-group"><input class="form-control" id="join-name" type="text" name="name" placeholder="Name" required=""></div>
                                        <div class="col-12 col-md-6 form-group"><input class="form-control" id="join-email" type="email" name="email" placeholder="Email" required=""></div>
                                        <div class="col-12 form-group"><input class="form-control" id="join-subject" type="text" name="subject" placeholder="Subject" required=""></div>
                                        <div class="col-12 form-group"><input class="form-control cv-download" id="join-subject" type="file" name="subject" placeholder="CV Download" required=""></div>
                                        <div class="col-12 form-group form-message"><textarea class="form-control" id="join-message" name="message" placeholder="Message" rows="5" required=""></textarea></div>
                                        <div class="col-12 form-submit"><button class="btn button-main button-scheme" id="join-submit" type="submit">Send Message</button>
                                            <p class="join-feedback"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- join info-->
                            <div class="col-12 col-lg-5">
                                <div class="join-info">
                                    <h4 class="content-title">Join Info</h4>
                                    <p class="info-description">Always available for freelance work if the right project comes along, Feel free to join me!</p>
                                    <ul class="list-unstyled list-info">
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Name</h6><span class="info-value">David Emaye</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-map"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Location</h6><span class="info-value">Lagos, Nigeria.</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-call"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Call Me</h6><span class="info-value"><a href="tel:+2348108551935">+2348108551935</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-send"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Email Me</h6><span class="info-value"><a href="mailto:emayeodavid@gmail.com">emayeodavid@gmail.com</a></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact lightbox-->
<div class="lightbox-wrapper" id="contact" data-simplebar>
    <div class="container">
        <div class="lightbox-close">
            <div data-modal-close=""><span>Accueil</span></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="lightbox-content">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading page-heading">
                                <p class="section-description">Feel free to contact me anytime</p>
                                <h2 class="section-title">Get in Touch</h2>
                                <div class="animated-bar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Contact section-->
                    <div class="contact-section single-section">
                        <div class="row">
                            <!-- Contact form-->
                            <div class="col-12 col-lg-7">
                                <form class="contact-form" id="contact-form" action="http://exill.tn/demo/kitzu/template/php/contact.php">
                                    <h4 class="content-title">Message Me</h4>
                                    <div class="row">
                                        <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-name" type="text" name="name" placeholder="Name" required=""></div>
                                        <div class="col-12 col-md-6 form-group"><input class="form-control" id="contact-email" type="email" name="email" placeholder="Email" required=""></div>
                                        <div class="col-12 form-group"><input class="form-control" id="contact-subject" type="text" name="subject" placeholder="Subject" required=""></div>
                                        <div class="col-12 form-group form-message"><textarea class="form-control" id="contact-message" name="message" placeholder="Message" rows="5" required=""></textarea></div>
                                        <div class="col-12 form-submit"><button class="btn button-main button-scheme" id="contact-submit" type="submit">Send Message</button>
                                            <p class="contact-feedback"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact info-->
                            <div class="col-12 col-lg-5">
                                <div class="contact-info">
                                    <h4 class="content-title">Contact Info</h4>
                                    <p class="info-description">Always available for freelance work if the right project comes along, Feel free to contact me!</p>
                                    <ul class="list-unstyled list-info">
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-logo-ionic"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Name</h6><span class="info-value">David Emaye</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-map"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Location</h6><span class="info-value">Lagos, Nigeria.</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-call"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Call Me</h6><span class="info-value"><a href="tel:+2348108551935">+2348108551935</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media align-items-center"><span class="info-icon"><i class="icon ion-md-send"></i></span>
                                                <div class="media-body info-details">
                                                    <h6 class="info-type">Email Me</h6><span class="info-value"><a href="mailto:emayeodavid@gmail.com">emayeodavid@gmail.com</a></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
 <?php else: ?>
    <h1>Pas d'article</h1>
<?php endif; ?>
<?php get_footer() ?>
