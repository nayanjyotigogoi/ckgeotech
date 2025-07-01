@extends('layouts.master')
@section('content')
    <div class="wrapper">
        <!-- Carousel Start -->
        <section id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Geo_Bags-1.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">Geo Bag Innovation</p>
                        <h1 class="animated fadeInLeft">For Smart Engineering for Smart Erosion Control</h1>
                        <a class="btn animated fadeInUp" href="images/Concrete_Mattresses-1.jpg">Get
                            A Quote</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/carousel-1.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">Reliable Geo Bag Solutions</p>
                        <h1 class="animated fadeInLeft">Preserving Nature, Protecting Lives</h1>
                        <a class="btn animated fadeInUp" href="images/carousel-1.jpg">Explore Services</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="images/Geo_Bags-2.jpg" alt="Carousel Image">
                    <div class="carousel-caption">
                        <p class="animated fadeInRight">We Are Trusted</p>
                        <h1 class="animated fadeInLeft">For Protecting Nature, Strengthening Foundations</h1>
                        <a class="btn animated fadeInUp"
                            href="https://htmlcodex.com/construction-company-website-template">Learn More</a>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </section>
        <!-- Carousel End -->

        <!-- About Start -->
        <section class="about wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="about-img">
                            <img src="images/Geo_Bags-2.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="section-header text-left">
                            <p>Welcome to CK GEO TECH</p>
                            <h2>15+ Years Experience</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Since its founding in 2009, CK GEO TECH has been at the forefront of civil engineering,
                                specializing in Geo-textile applications for river and coastal erosion protection. Operating
                                under the brand name of <span style="color: #fdbe33; font-weight: bold;">BC Engineering and
                                    Consultancy</span>, we have established a reputation for
                                delivering high-quality, sustainable, and effective erosion control solutions.
                            </p>
                            <p>We specialize in the design, installation, and execution of various Geo-textile solutions,
                                including:</p>
                            <ul>
                                <li><strong>Geo Tubes</strong> – Shoreline and riverbank stabilization</li>
                                <li><strong>Geo Bags</strong> – Reinforcement for erosion control</li>
                                <li><strong>Geo Mattresses</strong> – Durable river and coastal protection</li>
                                <li><strong>Concrete Mattresses</strong> – High-strength erosion prevention</li>
                            </ul>
                            <p>
                                With extensive experience, skilled manpower, and advanced machinery, we have successfully
                                executed numerous large-scale projects, providing long-term safety, stability, and
                                environmental protection.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->

        <!-- Fact Start -->
        <section class="fact">
            <div class="container-fluid">
                <div class="row counters">
                    <div class="col-md-6 fact-left wow slideInLeft">
                        <div class="row">
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">109</h2>
                                    <p>Expert Workers</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">85</h2>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 fact-right wow slideInRight">
                        <div class="row">
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-address"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">89</h2>
                                    <p>Completed Projects</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="fact-icon">
                                    <i class="flaticon-crane"></i>
                                </div>
                                <div class="fact-text">
                                    <h2 data-toggle="counter-up">3</h2>
                                    <p>Running Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Fact End -->

        <!-- Service Start -->
        <section class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Products</p>
                    <h2>Innovative Geo-textile Solutions</h2>
                </div>
                <div class="row">
                    <!-- Geo Tubes -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="images/geo-tube-1.jpg" alt="Geo Tubes">
                                <div class="service-overlay">
                                    <p>
                                        <strong>Purpose:</strong> Stabilizes shorelines and protects riverbanks.<br>
                                        <strong>How It Works:</strong> Large tubular containers made of high-strength
                                        Geo-textile are filled with sand or other fill material, forming an effective
                                        erosion barrier.<br>
                                        <strong>Benefits:</strong> Cost-effective, durable, and environmentally friendly.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Geo Tubes</h3>
                                <a class="btn" href="images/geo-tube-1.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>

                    <!-- Geo Mattresses -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="images/GeoMatress-1.jpeg" alt="Geo Mattresses">
                                <div class="service-overlay">
                                    <p>
                                        <strong>Purpose:</strong> Provides durable protection for rivers and coastal
                                        areas.<br>
                                        <strong>How It Works:</strong> Flexible, mattress-like structures filled with
                                        concrete or other materials ensure long-term erosion control and stability.<br>
                                        <strong>Benefits:</strong> High-strength, adaptable, and resistant to water
                                        currents.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Geo Mattresses</h3>
                                <a class="btn" href="images/GeoMatress-1.jpeg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>

                    <!-- Geo Bags -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="images/Geo_Bags-1.jpg" alt="Geo Bags">
                                <div class="service-overlay">
                                    <p>
                                        <strong>Purpose:</strong> Ideal for reinforcing riverbanks and preventing
                                        erosion.<br>
                                        <strong>How It Works:</strong> Made from durable Geo-textile materials, these bags
                                        are filled on-site with sand or soil to form protective barriers.<br>
                                        <strong>Benefits:</strong> Lightweight, flexible, and highly effective for erosion
                                        prevention.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Geo Bags</h3>
                                <a class="btn" href="images/Geo_Bags-1.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>

                    <!-- Concrete Mattresses -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="images/Concrete_Mattresses-1.jpg" alt="Concrete Mattresses">
                                <div class="service-overlay">
                                    <p>
                                        <strong>Purpose:</strong> Provides additional strength and stability for high-impact
                                        erosion control.<br>
                                        <strong>How It Works:</strong> Filled with concrete, these mattresses create a
                                        solid, protective layer against erosion.<br>
                                        <strong>Benefits:</strong> Strong, long-lasting, and effective for heavy-duty
                                        erosion protection.
                                    </p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Concrete Mattresses</h3>
                                <a class="btn" href="images/Concrete_Mattresses-1.jpg" data-lightbox="service">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->

         <!-- Portfolio Start -->
        <div class="portfolio">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Projects</p>
                    <h2>Visit Our Projects</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item {{ $project->status }} wow fadeInUp"
                            data-wow-delay="0.1s">
                            <div class="portfolio-warp">
                                <div class="portfolio-img">
                                    <img src="{{ asset($project->image) }}" alt="Project Image"
                                        style="height: 300px; object-fit: cover;">

                                    <div class="portfolio-overlay">
                                        <p>{{ $project->description }}</p>
                                    </div>
                                </div>
                                <div class="portfolio-text">
                                    <h3>{{ $project->name }}</h3>
                                    <a class="btn" href="/Know-more">+</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 load-more">
                        <a class="btn" href="#">Load More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->

        <!-- Video Start -->
        <div class="video wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <button type="button" class="btn-play" data-toggle="modal"
                    data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video End -->

        <!-- FAQs Start -->
        <section class="faqs">
            <div class="container">
                <div class="section-header text-center">
                    <p>Frequently Asked Questions</p>
                    <h2>You May Ask</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="accordion-1">
                            <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                        What services does CK GEO TECH provide?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        CK GEO TECH specializes in civil engineering solutions, particularly in
                                        <span class="highlight-text">Geo-textile applications</span>
                                        for river and coastal erosion protection. We also
                                        provide consultation and implementation of <span class="highlight-text">erosion control measures</span>.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                        What industries do you serve?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        We serve various industries, including infrastructure development, construction,
                                        environmental engineering, and government projects focused on riverbank and
                                        coastal protection.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                        How do Geo-textiles help in erosion control?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Geo-textiles act as <span class="highlight-text">a protective barrier</span> by reinforcing soil and preventing
                                        erosion caused by water currents, waves, or heavy rainfall. They enhance the
                                        stability of riverbanks and shorelines while allowing natural water flow.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                        Do you provide customized erosion control solutions?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        Yes! We analyze each project's unique requirements and provide  <span class="highlight-text">tailor-made
                                        solutions</span> using Geo-textiles, Geo-bags, Concrete Mattresses, and other advanced
                                        erosion control technologies.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                        Where has CK GEO TECH implemented its solutions?
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                    <div class="card-body">
                                        We have successfully executed projects across Assam, with a strong presence in
                                        riverbank protection, coastal management, and infrastructure development projects in
                                        various districts.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="accordion-2">
                            <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                    Why choose CK GEO TECH?
                                    </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        With over  <span class="highlight-text">15 years of expertise</span>, we focus on providing high-quality,
                                        sustainable, and cost-effective solutions. Our commitment to innovation and engineering excellence sets us apart in the field of erosion control.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                        Do you offer consultation and project planning?
                                    </a>
                                </div>
                                <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Yes, we provide end-to-end consultation, including site analysis, feasibility
                                        studies, project design, material selection, and implementation strategies to
                                        ensure long-term erosion protection.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                        Are CK GEO TECH's solutions environmentally friendly?
                                    </a>
                                </div>
                                <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        Yes! We prioritize eco-friendly engineering solutions that minimize
                                        environmental impact while ensuring strong and durable erosion control. Our
                                        Geo-textiles support natural vegetation growth and enhance sustainability.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.4s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                        How can I get a quote for my project?
                                    </a>
                                </div>
                                <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        You can request a quote by filling out our contact form on the website or
                                        emailing us at info@ckgeotech.com Our team will assess your project
                                        requirements and provide a detailed estimate.
                                    </div>
                                </div>
                            </div>
                            <div class="card wow fadeInRight" data-wow-delay="0.5s">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                        How can I contact CK GEO TECH for further inquiries?
                                    </a>
                                </div>
                                <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                    <div class="card-body">
                                        You can reach us via:
                                        <ul>
                                            <li><strong>Email:</strong> info@ckgeotech.com</li>
                                            <li><strong>Phone:</strong> +91 9854979243</li>
                                            <li><strong>Office Address:</strong> Sualkuchi, Assam, India</li>
                                        </ul>
                                        Our team is happy to assist you with any questions or project requirements!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQs End -->


        <!-- Contact Start -->
        <section class="contact wow fadeInUp">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>For Any Query</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="flaticon-address"></i>
                                <div class="contact-text">
                                    <h2>Location</h2>
                                    <p>Sualkuchi, Assam, India</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-call"></i>
                                <div class="contact-text">
                                    <h2>Phone</h2>
                                    <p>+91 9854979243</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-send-mail"></i>
                                <div class="contact-text">
                                    <h2>Email</h2>
                                    <p>info@ckgeotech.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject"
                                        required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact End -->

    </div>
@endsection
