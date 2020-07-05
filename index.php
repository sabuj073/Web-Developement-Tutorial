<?php 
include "includes/header.php";
?>
<!--header section end-->

<!--body content wrap start-->
<div class="main">
<?php
$get_banner = mysqli_query($con,"SELECT * from banner"); 
$get_banner = mysqli_fetch_array($get_banner);
?>

<!--hero section start-->
<section class="hero-equal-height pt-165 pb-100 gradient-overly-right-light" style="background: url('<?php echo $get_banner['img']; ?>')no-repeat center center / cover">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-6">
                <div class="hero-slider-content">
                    <span class="text-uppercase">Total Business Solutions</span>
                    <h1>Your Most Trusted Business Partner</h1>
                    <p class="lead">Holisticly procrastinate mission-critical convergence with reliable customer service. Assertively underwhelm idea-sharing for impactful solutions. </p>

                    <div class="action-btns mt-3">
                        <a href="#" class="btn secondary-solid-btn">Get Start Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--hero section end-->

<!--promo section start-->
<section class="promo-block ptb-100 mt--165 z-index position-relative">
    <div class="container">
        <div class="row">
            <?php
            $result = mysqli_query($con,"SELECT * from card");
            while($get_card = mysqli_fetch_array($result)){
             ?>
             <div class="col-md-4 col-lg-4">
                <div class="single-promo-block promo-hover-bg-1 hover-image shadow-lg p-5 custom-radius white-bg">
                    <div class="promo-block-icon mb-3">
                        <span class="fab <?php echo $get_card['icon']; ?> icon-md color-primary"></span>
                    </div>
                    <div class="promo-block-content">
                        <h5><?php echo $get_card['tittle']; ?></h5>
                        <p><?php echo $get_card['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</section>
<!--promo section end-->

<!--about us section start-->
<section class="about-us-section pb-100">
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-12 col-lg-6">
            <div class="video-promo-content mb-md-4 mb-lg-0">
                <h2>Corporate Agency for Your Business Solutions</h2>
                <p class="lead">Interactively develop timely niche markets before extensive imperatives. Professionally
                repurpose strategies.</p>
                <ul class="list-unstyled tech-feature-list">
                    <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Creative</strong> Websites Design</li>
                    <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Accounting</strong> Procedures Guidebook</li>
                    <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Cost</strong> Accounting Fundamentals</li>
                    <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong> Optimization Services</li>
                </ul>
                <div class="action-btns mt-4">
                    <a href="#" class="btn primary-solid-btn mr-2">View Our Services</a>
                    <a href="#" class="btn outline-btn">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="image-wrap">
                <img src="img/about-img.jpg" alt="video" class="img-fluid rounded">
            </div>
        </div>
    </div>
</div>
</section>
<!--about us section end-->

<!--services section start-->
<section class="services-section ptb-100 gray-light-bg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="section-heading text-center mb-5">
                <h2>We Provide Best Quality Services</h2>
                <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                foster tactical solutions without enabled value.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                <div class="service-icon mr-4">
                    <span class="ti-announcement icon-md color-secondary"></span>
                </div>
                <div class="services-content-wrap">
                    <h5>Marketing Services</h5>
                    <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
                    partnerships.</p>
                    <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                <div class="service-icon mr-4">
                    <span class="ti-light-bulb icon-md color-secondary"></span>
                </div>
                <div class="services-content-wrap">
                    <h5>Web App Development</h5>
                    <p class="mb-0">Quickly pontificate holistic e-commerce rather than goal-oriented web-readiness enhance inexpensive.</p>
                    <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                <div class="service-icon mr-4">
                    <span class="ti-headphone-alt icon-md color-secondary"></span>
                </div>
                <div class="services-content-wrap">
                    <h5>24/7 Call Center Service</h5>
                    <p class="mb-0">Authoritatively reinvent multimedia based niches with global portals orchestrate client-centered .</p>
                    <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                <div class="service-icon mr-4">
                    <span class="ti-bell icon-md color-secondary"></span>
                </div>
                <div class="services-content-wrap">
                    <h5>Social Media Marketing</h5>
                    <p class="mb-0">Assertively leverage other's standardized e-services with fully tested e-commerce strategize synergistic. </p>
                    <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                <div class="service-icon mr-4">
                    <span class="ti-briefcase icon-md color-secondary"></span>
                </div>
                <div class="services-content-wrap">
                    <h5>Corporate Business</h5>
                    <p class="mb-0">Enthusiastically scale client-centric supply chains vis-a-vis enabled benefits empower global core.</p>
                    <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                <div class="service-icon mr-4">
                    <span class="ti-vector icon-md color-secondary"></span>
                </div>
                <div class="services-content-wrap">
                    <h5>Creative Consultancy</h5>
                    <p class="mb-0">Conveniently productize corporate imperatives for innovative best practices ideas whereas ethical change.</p>
                    <a href="services-details.html" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--services section end-->

<!--promo section start-->
<section class="promo-section gradient-bg ptb-100">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8">
            <div class="app-business-content text-center text-white">
                <h2 class="text-white">Download Apps Managing Business</h2>
                <p class="lead">Building your Apps busines helps attract more potential clients.
                Our integrated marketing team will work directly long-term high-impact convergence. </p>

                <div class="action-btns mt-5">
                    <ul class="list-inline app-download-list">
                        <li class="list-inline-item">
                            <a href="#" class="d-flex align-items-center border rounded">
                                <span class="fab fa-windows icon-sm mr-3"></span>
                                <div class="download-text text-left">
                                    <span>Download form</span>
                                    <h5 class="mb-0">Windows</h5>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="d-flex align-items-center border rounded">
                                <span class="fab fa-apple icon-sm mr-3"></span>
                                <div class="download-text text-left">
                                    <span>Download form</span>
                                    <h5 class="mb-0">App Store</h5>
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="d-flex align-items-center border rounded">
                                <span class="fab fa-google-play icon-sm mr-3"></span>
                                <div class="download-text text-left">
                                    <span>Download form</span>
                                    <h5 class="mb-0">Google Play</h5>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--promo section end-->

<!--our work or portfolio section start-->
<section class="our-portfolio-section ptb-100">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="section-heading text-center mb-5">
                <h2>Check Our Quality Work</h2>
                <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements. Intrinsicly
                develop end-to-end customer service without extensive data.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center pb-2">
                <?php
                $get = mysqli_query($con,"SELECT * from work");
                while($row = mysqli_fetch_array($get)){ 
                   ?>
                   <button type="button" class="filter-btn" onclick="get_demo(<?php echo $row['id'];?>)"><?php echo $row['work_name']; ?></button>
               <?php } ?>
           </div>
           <div class="portfolio-container" id="MixItUp">
            <div class="mix portfolio-item branding" data-ref="mixitup-target">
                <div class="portfolio-wrapper">
                    <a href="project-details.html" target="_blank">
                        <div class="content-overlay"></div>
                        <img class="img-fluid" src="img/portfolios/3.jpg" alt="portfolio"/>
                        <div class="content-details fadeIn-bottom text-white">
                            <h5 class="text-white mb-1">Creative Design</h5>
                            <p>Design</p>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>
        </div>
    </div>
</div>
</div>
</section>
<!--our work or portfolio section end-->

<!--blog section start-->
<section class="our-blog-section ptb-100 gray-light-bg">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="section-heading mb-5">
                <h2>Our Latest News</h2>
                <p class="lead">
                    Enthusiastically drive revolutionary opportunities before emerging leadership. Distinctively
                    transform tactical methods of empowerment via resource.
                </p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="single-blog-card card border-0 shadow-sm">
                <div class="blog-img">
                    <a href="#"><span class="category position-absolute">Business</span></a>
                    <a href="#"><img src="img/blog/1.jpg" class="card-img-top position-relative img-fluid" alt="blog"></a>
                </div>
                <div class="card-body">
                    <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk.</p>
                </div>
                <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                    <div class="author-meta d-flex align-items-center">
                        <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                        <div class="author-content">
                            <a href="#" class="d-block">ThemeTags</a>
                            <small>May 26, 2020</small>
                        </div>
                    </div>
                    <div class="author-like">
                        <a href="#"><span class="fa fa-share-alt"></span> 50</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="single-blog-card card border-0 shadow-sm">
                <div class="blog-img">
                    <a href="#"><span class="category position-absolute">SEO, Analytics</span></a>
                    <a href="#"><img src="img/blog/2.jpg" class="card-img-top position-relative img-fluid" alt="blog"></a>
                </div>
                <div class="card-body">
                    <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>
                    <p class="card-text">Synergistically engage effective ROI after customer directed partnerships.</p>
                </div>
                <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                    <div class="author-meta d-flex align-items-center">
                        <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                        <div class="author-content">
                            <a href="#" class="d-block">ThemeTags</a>
                            <small>May 28, 2020</small>
                        </div>
                    </div>
                    <div class="author-like">
                        <a href="#"><span class="fa fa-share-alt"></span> 30</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="single-blog-card card border-0 shadow-sm">
                <div class="blog-img">
                    <a href="#"><span class="category position-absolute">Marketing</span></a>
                    <a href="#"><img src="img/blog/3.jpg" class="card-img-top position-relative img-fluid" alt="blog"></a>
                </div>
                <div class="card-body">
                    <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                    <p class="card-text">Holisticly mesh open-source leadership rather than proactive users.</p>
                </div>
                <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                    <div class="author-meta d-flex align-items-center">
                        <span class="fa fa-user mr-2 p-3 bg-white rounded-circle border"></span>
                        <div class="author-content">
                            <a href="#" class="d-block">ThemeTags</a>
                            <small>May 30, 2020</small>
                        </div>
                    </div>
                    <div class="author-like">
                        <a href="#"><span class="fa fa-share-alt"></span> 55</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--blog section end-->

<!--testimonial section start-->
<section class="testimonial-section ptb-100">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8">
            <div class="section-heading mb-5 text-center">
                <h2>What Clients Say About Us</h2>
                <p class="lead">
                    Rapidiously morph transparent internal or "organic" sources whereas resource sucking
                    e-business. Conveniently innovate compelling internal.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                <blockquote>
                    Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.
                </blockquote>
                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                    <div class="d-flex align-items-center">
                        <img src="img/client-1.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                        <div class="client-info">
                            <h5 class="mb-0">Austin Cesar</h5>
                            <small class="mb-0">Team Leader</small>
                        </div>
                    </div>
                    <div class="client-ratting">
                        <ul class="list-inline client-ratting-list">
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                        </ul>
                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-6 col-lg-4">
            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                <blockquote>
                    Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly revolutionize worldwide users vis-a-vis enterprise best practices.
                </blockquote>
                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                    <div class="d-flex align-items-center">
                        <img src="img/client-2.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                        <div class="client-info">
                            <h5 class="mb-0">Pirtle Karol</h5>
                            <small class="mb-0">Team Leader</small>
                        </div>
                    </div>
                    <div class="client-ratting">
                        <ul class="list-inline client-ratting-list">
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                        </ul>
                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                <blockquote>
                    Interactively grow backend scenarios through one paradigms. Distinctively and communicate efficient information without effective meta-services.
                </blockquote>
                <div class="client-img d-flex align-items-center justify-content-between pt-4">
                    <div class="d-flex align-items-center">
                        <img src="img/client-3.jpg" alt="client" width="50" class="img-fluid rounded-circle shadow-sm mr-3"/>
                        <div class="client-info">
                            <h5 class="mb-0">Joe Pirtle</h5>
                            <small class="mb-0">Marketing Head</small>
                        </div>
                    </div>
                    <div class="client-ratting">
                        <ul class="list-inline client-ratting-list">
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                            <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                        </ul>
                        <span class="font-weight-bold">5.0 <small class="font-weight-lighter">Out of 5</small></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</section>
<!--testimonial section end-->


<!--team two section start-->
<section class="team-two-section ptb-100 gray-light-bg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
            <div class="section-heading text-center mb-5">
                <h2>Meet Our Lovely Team</h2>
                <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                disseminate user-centric outsourcing.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="staff-member">
                <div class="card text-center border-0">
                    <img src="img/team-1.jpg" alt="team image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="teacher mb-0">Richard Ford</h5>
                        <span>Instructor of Mathematics</span>
                        <ul class="list-inline pt-2 social">
                            <li class="list-inline-item"><a href="#" target="_blank"><span
                                class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"><span
                                    class="ti-linkedin"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                        class="ti-dribbble"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p><a
                                    href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                    <span class="teacher-field text-white">Instructor of Mathematics</span>
                                    <ul class="list-inline py-4 social">
                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                            class="ti-facebook"></span></a></li>
                                            <li class="list-inline-item"><a href="#" target="_blank"><span
                                                class="ti-linkedin"></span></a></li>
                                                <li class="list-inline-item"><a href="#" target="_blank"><span
                                                    class="ti-dribbble"></span></a></li>
                                                </ul>
                                                <p class="teacher-see-profile">
                                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="staff-member">
                                        <div class="card text-center border-0">
                                            <img src="img/team-3.jpg" alt="team image" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="teacher mb-0">Kely Roy</h5>
                                                <span>Lead Designer</span>
                                                <ul class="list-inline pt-2 social">
                                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                        class="ti-facebook"></span></a></li>
                                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                            class="ti-linkedin"></span></a></li>
                                                            <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                class="ti-dribbble"></span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="overlay d-flex align-items-center justify-content-center">
                                                        <div class="overlay-inner">
                                                            <p class="teacher-quote">"Credibly extend high-payoff web-readiness via top-line relationships." </p><a
                                                            href="#" class="teacher-name">
                                                            <h5 class="mb-0 teacher text-white">Kely Roy</h5></a><span class="teacher-field text-white">Lead Designer</span>
                                                            <ul class="list-inline py-4 social">
                                                                <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                    class="ti-facebook"></span></a></li>
                                                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                        class="ti-linkedin"></span></a></li>
                                                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                            class="ti-dribbble"></span></a></li>
                                                                        </ul>
                                                                        <p class="teacher-see-profile">
                                                                            <a href="#" class="btn outline-white-btn">View my profile</a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="staff-member">
                                                                <div class="card text-center border-0">
                                                                    <img src="img/team-2.jpg" alt="team image" class="img-fluid">
                                                                    <div class="card-body">
                                                                        <h5 class="teacher mb-0">Gerald Nichols</h5>
                                                                        <span>Managing Director</span>
                                                                        <ul class="list-inline pt-2 social">
                                                                            <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                                class="ti-facebook"></span></a></li>
                                                                                <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                                    class="ti-linkedin"></span></a></li>
                                                                                    <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                                        class="ti-dribbble"></span></a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="overlay d-flex align-items-center justify-content-center">
                                                                                <div class="overlay-inner">
                                                                                    <p class="teacher-quote">"Authoritatively evolve stand-alone e-tailers whereas prospective partnerships." </p><a
                                                                                    href="#" class="teacher-name">
                                                                                    <h5 class="mb-0 teacher text-white">Gerald Nichols</h5></a>
                                                                                    <span class="teacher-field text-white">Managing Director</span>
                                                                                    <ul class="list-inline py-4 social">
                                                                                        <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                                            class="ti-facebook"></span></a></li>
                                                                                            <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                                                class="ti-linkedin"></span></a></li>
                                                                                                <li class="list-inline-item"><a href="#" target="_blank"><span
                                                                                                    class="ti-dribbble"></span></a></li>
                                                                                                </ul>
                                                                                                <p class="teacher-see-profile">
                                                                                                    <a href="#" class="btn outline-white-btn">View my profile</a>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                    <!--team two section end-->

                                                                    <!--call to action section start-->
                                                                    <section class="call-to-action py-5">
                                                                        <div class="container">
                                                                            <div class="row justify-content-around align-items-center">
                                                                                <div class="col-md-7">
                                                                                    <div class="subscribe-content">
                                                                                        <h3 class="mb-1">Consulting Agency for Your Business</h3>
                                                                                        <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="action-btn text-lg-right text-sm-left">
                                                                                        <a href="#" class="btn secondary-solid-btn">Contact With Us</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                    <!--call to action section end-->

                                                                </div>
                                                                <!--body content wrap end-->


                                                                <!--footer section start-->

                                                                <?php include "includes/footer.php"; ?>
                                                                <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
                                                                <script type="text/javascript">
                                                                    $(document).ready(function(){

                                                                          $.ajax({
                                                                            url:"includes/action.php",
                                                                            type:"POST",
                                                                            data : {
                                                                                get_port:1,
                                                                                id:1
                                                                            },
                                                                            cache : false,
                                                                            success:function(response){
                                                                                console.log(response);
                                                                                $("#MixItUp").html(response);
                                                                            }

                                                                        });
                                                                            

                                                                        });

                                                                    function get_demo(id){


                                                                        $.ajax({
                                                                            url:"includes/action.php",
                                                                            type:"POST",
                                                                            data : {
                                                                                get_port:1,
                                                                                id:id
                                                                            },
                                                                            cache : false,
                                                                            success:function(response){
                                                                                console.log(response);
                                                                                $("#MixItUp").html(response);
                                                                            }

                                                                        });

                                                                    }
                                                                </script>
