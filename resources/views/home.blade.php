@extends('layouts.master')
@section('title', 'Home')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>All Websites Should Be Fast, Beautiful & Get You Customers</h1>
                    <h2>Your business deserves a new website, and we can help. We use the latest technology to launch your
                        business into the online world.</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <!-- <section id="clients" class="clients section-bg">
                  <div class="container">

                    <div class="row" data-aos="zoom-in">

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="image.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://inventorypro.shop/img/inventorypro-png3.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://inventorypro.shop/img/inventorypro-png3.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://inventorypro.shop/img/inventorypro-png3.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://inventorypro.shop/img/inventorypro-png3.png" class="img-fluid" alt="">
                      </div>

                      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="https://inventorypro.shop/img/inventorypro-png3.png" class="img-fluid" alt="">
                      </div>

                    </div>

                  </div>
                </section> -->
        <!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Simplef puts together an exceptional team of experts to help you transform your visions into
                            reality.
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Client satisfaction and success is a huge achievement
                                for us</li>
                            <li><i class="ri-check-double-line"></i> We put in the necessary search to look for fresh and
                                interesting
                                ideas</li>
                            <li><i class="ri-check-double-line"></i> Our goal is to help you adapt to the changing demands
                                of modern
                                technology</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Our team has amazing expertise in website design, web development, mobile apps, Digital and
                            Social Media
                            Marketing. The engineering tool we apply will accelerate the efficiency and fuel the growth of
                            your
                            clients.
                            Utilizing the power of technology, we deliver end-to-end solutions for multi-million dollar
                            sponsored
                            start-ups to small and medium ventures. Workmanship and culture inspire us too.
                        </p>
                        <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <!-- <section id="why-us" class="why-us section-bg">
                  <div class="container-fluid" data-aos="fade-up">

                    <div class="row">

                      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                          <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                          </p>
                        </div>

                        <div class="accordion-list">
                          <ul>
                            <li>
                              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                <p>
                                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                              </div>
                            </li>

                            <li>
                              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                              </div>
                            </li>

                            <li>
                              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                              </div>
                            </li>

                          </ul>
                        </div>

                      </div>

                      <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                    </div>

                  </div>
                </section> -->
        <!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        <!-- <section id="skills" class="skills">
                  <div class="container" data-aos="fade-up">

                    <div class="row">
                      <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/skills.png" class="img-fluid" alt="">
                      </div>
                      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                        <p class="fst-italic">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                          magna aliqua.
                        </p>

                        <div class="skills-content">

                          <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>

                          <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>

                          <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>

                          <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>

                  </div>
                </section> -->
        <!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>We provide high-grade IT services for clients globally, detailed quality assurance, as well as
                        long-term
                        support and maintenance. The right set of services can help you achieve a particular business goal,
                        save
                        your IT budget and speed up your R&D and information technology processes.
                        We guarantee exemplary quality, on-time delivery, and seamless communication for the services that
                        we offer.
                        Simplef is your trusted technology partner. Feel free to contact us, regardless of your project
                        scope,
                        and we will help you.</p>
                </div>

                <div style="height: 300px;" class="row justify-content-md-center">
                    <div style="height: 100%; overflow: hidden;"
                        class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center p-b-60-px"
                        data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon d-flex justify-content-start align-items-center">
                                <!-- <i class="bx bxl-dribbble"></i> -->
                                <img src="https://s3-ap-southeast-1.amazonaws.com/com.analyzen.website/website/assets/images/service-icons/web-dev.svg"
                                    alt="">
                                <h4 class="d-flex justify-content-center align-items-center"><a href="">Website
                                        Development</a></h4>
                            </div>
                            <p>
                                Innovative web developers can help brands standstill in an ever-changing digital
                                environment. We are
                                committed to providing a user-friendly, fully functional, and very secure website.
                            </p>
                        </div>
                    </div>

                    <div style="height: 100%; overflow: hidden;"
                        class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center p-b-60-px"
                        data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon d-flex justify-content-start align-items-center">
                                <!-- <i class="bx bx-file"></i> -->
                                <img src="https://s3-ap-southeast-1.amazonaws.com/com.analyzen.website/website/assets/images/service-icons/online-activation.svg"
                                    alt="">
                                <h4><a href="">Mobile App Development</a></h4>
                            </div>
                            <p>
                                The mobile app development market is huge and is going to keep growing. Now is the time to
                                develop a
                                mobile app and expand your business globally. Android, iOS, or both, we will help you to
                                convert your
                                app idea into a flawless mobile app.
                            </p>
                        </div>
                    </div>
                    <div style="height: 100%; overflow: hidden;"
                        class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center p-b-60-px"
                        data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon d-flex justify-content-start align-items-center">
                                <!-- <i class="bx bx-file"></i> -->
                                <img src="https://s3-ap-southeast-1.amazonaws.com/com.analyzen.website/website/assets/images/service-icons/online-tv.svg"
                                    alt="">
                                <h4><a href="">Digital Marketing</a></h4>
                            </div>
                            <p>
                                Every online business needs digital and local online marketing to improve sales, revenue,
                                and leads
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Call To Action</h3>
                        <p> Don't get into complications and call us directly</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#contact">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Our products</h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                </div>
                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <a href="{{url('/details/ecommerce-details')}}">
                            <div class="portfolio-img" style="max-height: 400px; overflow: hidden;"><img
                                src="{{ asset('img/portfolio/ecommerce/image1.png') }}" class="img-fluid"
                                alt=""></div>
                        </a>
                        <div class="portfolio-info">
                            <h4>Advanced E-commerce website</h4>
                            <p>Using Laravel & Vue JS</p>
                            <a href="{{ asset('img/portfolio/ecommerce/image1.png') }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="Advanced E-commerce website"><i
                                    class="bx bx-plus"></i></a>
                            <a href="{{url('/details/ecommerce-details')}}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <!-- <section id="team" class="team section-bg">
                  <div class="container" data-aos="fade-up">

                    <div class="section-title">
                      <h2>Team</h2>
                      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">

                      <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                          <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                          <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social">
                              <a href=""><i class="ri-twitter-fill"></i></a>
                              <a href=""><i class="ri-facebook-fill"></i></a>
                              <a href=""><i class="ri-instagram-fill"></i></a>
                              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                          <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                          <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social">
                              <a href=""><i class="ri-twitter-fill"></i></a>
                              <a href=""><i class="ri-facebook-fill"></i></a>
                              <a href=""><i class="ri-instagram-fill"></i></a>
                              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                          <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                          <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            <div class="social">
                              <a href=""><i class="ri-twitter-fill"></i></a>
                              <a href=""><i class="ri-facebook-fill"></i></a>
                              <a href=""><i class="ri-instagram-fill"></i></a>
                              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                          <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                          <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            <div class="social">
                              <a href=""><i class="ri-twitter-fill"></i></a>
                              <a href=""><i class="ri-facebook-fill"></i></a>
                              <a href=""><i class="ri-instagram-fill"></i></a>
                              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </section> -->
        <!-- End Team Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <!-- <section id="faq" class="faq section-bg">
                  <div class="container" data-aos="fade-up">

                    <div class="section-title">
                      <h2>Frequently Asked Questions</h2>
                      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="faq-list">
                      <ul>
                        <li data-aos="fade-up" data-aos-delay="100">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                          </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                          </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                          </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                          </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="500">
                          <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                            </p>
                          </div>
                        </li>

                      </ul>
                    </div>

                  </div>
                </section> -->
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Let’s do something great together!</p>
                </div>

                <div class="row">

                    <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="#" method="POST" role="form" class="php-email-form row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject"
                                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" data-rule="required"
                                    data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->


@endsection

@section('footer')

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <!-- <h3>Simplef</h3> -->
                        <svg style="height: 40px;" data-v-423bf9ae="" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 167.69999965259004 60" class="font">
                            <!---->
                            <!---->
                            <defs data-v-423bf9ae="">
                                <linearGradient data-v-423bf9ae="" gradientTransform="rotate(25)"
                                    id="8a5d69d2-c5c4-4aaa-ac07-9d0cc7b9d9cd" x1="0%" y1="0%"
                                    x2="100%" y2="0%">
                                    <stop data-v-423bf9ae="" offset="0%"
                                        style="stop-color: rgb(81, 6, 255); stop-opacity: 1;"></stop>
                                    <stop data-v-423bf9ae="" offset="100%"
                                        style="stop-color: rgb(97, 203, 242); stop-opacity: 1;"></stop>
                                </linearGradient>
                            </defs>
                            <g data-v-423bf9ae="" id="4fe99489-bcfe-433a-87ae-eec4ea2bf150"
                                fill="url(#8a5d69d2-c5c4-4aaa-ac07-9d0cc7b9d9cd)"
                                transform="matrix(4.285714577655423,0,0,4.285714577655423,0.12857268306674996,-12.000000374657809)">
                                <path
                                    d="M1.48 6.54C1.48 9.04 5.74 9.10 5.74 11.51C5.74 12.85 4.40 13.55 3.14 13.55C1.68 13.55 0.99 12.63 0.99 11.59C0.99 10.95 1.26 10.26 1.76 9.72C0.99 9.72-0.03 10.14-0.03 11.59C-0.03 13.29 1.37 14.10 2.90 14.10C4.62 14.10 6.55 13.05 6.55 11.12C6.55 8.26 2.37 8.30 2.37 6.22C2.37 5.05 3.68 3.14 5.45 3.14C6.05 3.14 6.23 3.36 6.23 3.74C6.23 4.55 5.40 5.89 5.40 6.68C5.40 6.99 5.53 7.21 5.87 7.28C6.31 6.57 6.94 5.22 6.94 4.20C6.94 3.40 6.57 2.80 5.47 2.80C3.04 2.80 1.48 4.98 1.48 6.54ZM9.60 8.13C8.65 8.13 7.59 11.00 7.59 12.07C7.59 12.73 7.94 13.24 8.67 13.24C9.76 13.24 10.88 12.36 11.42 10.75L11.30 10.61C10.50 12.21 9.77 12.75 9.14 12.75C8.68 12.75 8.46 12.59 8.46 11.91C8.46 10.60 9.91 8.90 9.91 8.44C9.91 8.25 9.77 8.13 9.60 8.13ZM10.35 6.83C10.79 6.83 11.26 6.43 11.26 6.08C11.26 5.75 11.07 5.64 10.79 5.64C10.35 5.64 9.77 5.98 9.77 6.37C9.77 6.69 10.04 6.83 10.35 6.83ZM14.67 13.19C14.85 12.81 15.05 12.33 15.34 11.89C16.21 10.56 16.72 9.80 17.18 9.80C17.39 9.80 17.58 9.94 17.58 10.30C17.58 10.85 17.16 11.61 17.16 12.29C17.16 12.85 17.44 13.31 18.10 13.31C19.22 13.31 20.08 11.98 20.52 10.81L20.36 10.61C19.92 11.56 19.25 12.82 18.48 12.82C18.16 12.82 18.06 12.60 18.06 12.35C18.06 11.76 18.58 10.75 18.58 10.01C18.58 9.53 18.37 9.11 17.78 9.11C16.83 9.11 16.04 10.21 15.46 11.27C15.61 10.89 15.89 10.01 15.89 9.30C15.89 8.72 15.71 8.23 15.13 8.23C14.13 8.23 12.94 9.70 12.18 10.89C12.39 10.19 12.54 9.55 12.54 9.30C12.54 9.07 12.42 8.93 12.17 8.93C11.90 8.93 11.63 9.10 11.52 9.23C11.51 10.46 10.56 12.75 10.56 12.96C10.56 13.10 11.05 13.26 11.31 13.26C12.00 11.37 13.68 9.16 14.49 9.16C14.74 9.16 14.84 9.37 14.84 9.69C14.84 10.67 13.96 12.66 13.96 12.91C13.96 13.10 14.45 13.19 14.67 13.19ZM21.83 13.24C23.76 13.24 25.13 11.19 25.13 9.73C25.13 8.78 24.54 8.13 23.72 8.13C22.62 8.13 21.77 9.27 21.29 10.19C21.49 9.28 21.62 8.57 21.62 8.30C21.62 7.98 21.42 7.66 20.94 7.66C20.72 7.66 20.69 7.73 20.68 7.90C20.01 13.51 19.43 13.96 18.77 16.27C18.76 16.32 18.97 16.80 19.21 16.80C19.26 16.80 19.33 16.77 19.38 16.73C19.70 16.42 20.44 13.83 21.10 11.03C21.45 10.22 22.44 8.78 23.42 8.78C23.98 8.78 24.22 9.27 24.22 9.86C24.22 11.28 22.86 12.92 21.36 12.92C21.17 12.92 21.01 12.92 21.01 12.99C21.01 13.10 21.34 13.24 21.83 13.24ZM30.45 3.84C30.45 3.44 30.28 2.80 29.99 2.80C29.04 2.80 25.63 9.17 25.63 11.86C25.63 12.68 25.96 13.30 26.75 13.30C27.76 13.30 28.64 12.32 29.39 10.72L29.18 10.61C28.69 11.70 27.90 12.85 27.16 12.85C26.75 12.85 26.54 12.50 26.54 11.77C26.54 11.35 26.61 10.86 26.73 10.36C28.77 8.67 30.45 5.08 30.45 3.84ZM29.92 3.93C29.96 3.93 30.02 3.98 30.02 4.16C30.02 5.10 28.48 8.25 26.85 9.88C27.62 7.18 29.54 3.93 29.92 3.93ZM33.14 8.69C33.14 8.01 32.70 7.84 32.27 7.84C30.62 7.84 28.71 10.21 28.71 11.87C28.71 12.78 29.29 13.50 30.42 13.50C31.81 13.50 33.26 12.42 34.02 10.74L33.85 10.61C33.15 11.96 31.91 13.09 30.72 13.09C29.85 13.09 29.61 12.49 29.61 11.91C29.61 11.77 29.62 11.59 29.67 11.41C31.26 11.26 33.14 10.12 33.14 8.69ZM32.23 8.27C32.47 8.27 32.52 8.39 32.52 8.60C32.52 9.80 30.73 10.79 29.74 11.14C30.11 9.81 31.33 8.27 32.23 8.27ZM38.22 10.61C37.70 11.49 37.32 11.98 36.67 11.98C35.78 11.98 35.63 11.07 35.45 9.80C35.42 9.60 35.29 9.39 35.10 9.35C35.18 9.11 35.27 8.88 35.36 8.65C37.14 7.41 39.10 5.01 39.10 3.42C39.10 3.08 39.02 2.80 38.63 2.80C36.30 2.80 32.63 12.70 32.63 15.57C32.63 16.60 33.11 16.80 33.40 16.80C34.47 16.80 35.55 14.22 35.56 11.89C35.87 12.17 36.26 12.35 36.60 12.35C37.14 12.35 37.95 11.87 38.43 10.75ZM35.20 12.04C35.20 13.51 34.30 16.13 33.77 16.13C33.60 16.13 33.50 15.88 33.50 15.46C33.50 14.50 34.01 12.50 34.72 10.40C35.06 11.06 35.20 11.47 35.20 12.04ZM38.36 3.74C38.49 3.74 38.56 3.79 38.56 3.93C38.56 4.51 37.39 6.41 35.59 8.08C36.54 5.71 37.63 3.74 38.36 3.74Z">
                                </path>
                            </g>
                            <!---->
                            <!---->
                        </svg>
                        <p>
                            Khulna<br>
                            Bangladesh <br>
                            <strong>Phone:</strong> +8801310641939<br>
                            <strong>Email:</strong> tanzirulhudatapantor@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Products</a></li>
                            <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                      <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">App Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Digital Marketing</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Follow us on social media to stay updated</p>
                        <div class="social-links mt-3">
                            <a href="https://www.facebook.com/simplef22" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="mailto:tanzirulhudatapantor@gmail.com" class="facebook"><i
                                    class="bx bxs-envelope"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Simplef</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

@endsection
