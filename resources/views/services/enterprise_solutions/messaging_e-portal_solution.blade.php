<!DOCTYPE html>
<html>
<head>
    <x-head/>
</head>

<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
    <div class="container">
        <a class="navbar-brand logo" href="#">Vsoft Systems</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#client">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#articles">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#price">Store</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- NAVBAR END-->

<!-- HOME START-->
<section class="bg-home-half" id="home">
    <div class="bg-overlay"></div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="text-left text-white">
                            <!-- <h5 class="home-small-title text-uppercase text-white-50 mb-4">We create the web</h5> -->
                            <h2 class="home-title mb-4">Search Engine Optimization</h2>
                            <!-- <p class="home-desc text-white-50 mx-auto">Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.</p> -->
                            <div class="text-left pt-4 navbar-nav" style="width: 250px">
                                <a href="/services/web-services" class="btn btn-custom"><i class="mdi mdi-arrow-left ml-2">Web Services</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME END-->

{{-- Floating Action Button #Fab--}}
<x-fab/>

<!-- WELCOME START -->
<section class="section" id="feature">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="text-center">
                    <h4 class="title-heading">Search Engine Optimization</h4>
                    <!-- <p class="title-desc text-muted mt-3">Here goes the small description about "web_services"</p> -->
                    <p>
                        Vsoft Systems is a Cape Town based company. We offer and are actively engaged in SEO 
                        ( search engine optimization ) services for our clients.
                        <br>
                        <br>
                        We offer Pay-Per-Click (PPC) Consulting Search Engine Marketing (SEM), Link Building, 
                        SEO Consulting, SEO Copy writing, case study (SEO report). We have dedicated team and 
                        experts that analyze which aspect is important for web page optimization. We have dedicated 
                        team of experts that analyze which aspect is important for web page optimization.<br>
                    </p>
                </div>
            </div>
        </div>

        <!-- <div class="row mt-4">
            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/about/web_services_images/website_design/image2.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Website Design</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">Finding a professional web design company is a tiresome job so many to choose from !</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/about/web_services_images/website_design/image2.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Web Maintenance</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">We at Vsoft Systems, with our website maintenance team we will focus on enhancing existing</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features mt-4">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{asset('images/about/web_services_images/website_design/image2.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        <h4>Web Development</h4>
                        <p class="features-desc text-muted mt-3 pl-2 pr-2">VsoftSytems offers a professional Website development service to help you successfully plan,</p>
                    </div>
                </div>
            </div>
        </div> -->
        
    </div>
</section>
<!-- WELCOME END -->


<!-- SERVICES START -->
<section class="section bg-light" id="service">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4">
                <a href="/services/web-services">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="monitor"></i>
                        </div>
                        <div class="service-head">
                            <h4>Search Engine Marketing</h4>
                            <p class="text-muted mb-0">
                                Now you say: "Whether you're a small business or a high profile corporation, 
                                we can offer cutting-edge and strategic marketing services that will promote 
                                your business on the Internet."
                            </p>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="text-center mt-5">
                                    <a href="/services" class="btn btn-custom btn-round">See all Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/services">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="smartphone"></i>
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Mobile Application Development</h4>
                            <p class="text-muted mb-0">
                                Mobile applications can help individuals with quicker information access, 
                                maximum productivity, and timely responsiveness, there helping him reduce 
                                operating cost and risks.
                            </p>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="text-center mt-5">
                                    <a href="/services" class="btn btn-custom btn-round">See all Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="/services">
                    <div class="services-blog mt-4">
                        <div>
                            <i data-feather="smartphone"></i>
                        </div>
                        <div class="service-head">
                            <h4 class="mb-2">Game Development</h4>
                            <p class="text-muted mb-0">Game development is one of the most intricate parts 
                                of software development. Unlike ordinary applications, game development 
                                requires completely updated resources.</p>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <div class="text-center mt-5">
                                    <a href="/services" class="btn btn-custom btn-round">See all Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- SERVICES END -->

<!-- SERVICES START -->

<!-- SERVICES END -->

<!-- PORTFOLIO START-->


        <!-- portfolio menu -->

        <!-- End portfolio  -->

    <!-- Gallary -->

<!-- PORTFOLIO END-->

<!-- CLIENT START -->

<!-- CLIENT END -->

<!-- TEAM START -->

<!-- TEAM END -->

<!-- START CTA -->
<!-- <section class="section bg-cta">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h3 class="text-white text-center">Ready to start your next
                    web project now?</h3>
                <p class="cta-desc text-white text-center mt-3">When a good idea comes, you know, part of my job is to move it around, just see what people think, get people talking about it.</p>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-custom-white">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- END CTA -->

<!-- BLOG START -->

<!-- BLOG END -->

<!-- CONTACT START -->

<!-- CONTACT END -->

<!-- FOOTER START -->
<x-footer/>
<!-- FOOTER END -->

<!-- JAVASCRIPTS -->
<x-javascript/>

</body>
</html>