@extends('layouts.app')
@section('content')
    <div class="wrapper">

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Our Projects</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Our Projects</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Know More About the Project Start -->
        <section class="projects_know_more">
            <div class="container projects_know_more">         
                  

                <div class="project-content projects_know_more">
                    <div class="project-left projects_know_more">
                        <img src="images/geo-bags-project.jpg" alt="Main Project Image">
                        <h3>Project Gallery</h3>
                        <div class="image-gallery projects_know_more">
                            <img src="images/project1.jpg" alt="Geo bag project image 1">
                            <img src="images/project2.jpg" alt="Geo bag project image 2">
                            <img src="images/project3.jpg" alt="Geo bag project image 3">
                            <img src="images/project4.jpg" alt="Geo bag project image 4">
                            <img src="images/project5.jpg" alt="Geo bag project image 5">
                        </div>
                    </div>

                    <div class="project-details projects_know_more">
                        <h2>Project Overview</h2>
                        <p>
                            This project utilizes high-strength Geo Bags for riverbank reinforcement, protecting against
                            erosion
                            while maintaining ecological balance. The bags are filled with local soil and stacked to form a
                            stable,
                            permeable barrier that adapts to water flow and environmental stress.
                        </p>

                        <h3>Detailed Description</h3>
                        <p>
                            Geo Bags are crucial for eco-friendly shoreline protection. They are highly durable and resist
                            erosion
                            during high water flow. In this project, layers of geo bags were positioned to create a
                            protective slope
                            that reduces the impact of river currents on the bank soil.
                        </p>

                        <h3>Project Implementation</h3>
                        <p>
                            The bags were filled with locally sourced sand and sewn shut on-site. They were then arranged in
                            a
                            staggered formation, allowing water to pass while securing the soil. This method required
                            minimal
                            machinery and used primarily local manpower.
                        </p>

                        <h3>Outcomes</h3>
                        <p>
                            The project successfully reduced erosion in the affected region by over 85%. The site has
                            remained intact
                            after two seasonal floods, and vegetation has begun to reappear around the geo bags, promoting a
                            healthier
                            ecosystem.
                        </p>

                        <a href="/Projects" class="back-btn projects_know_more">← Back to Projects</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Know More About the Project End -->

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
                                        provide consultation and implementation of <span class="highlight-text">erosion
                                            control measures</span>.
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
                                        Geo-textiles act as <span class="highlight-text">a protective barrier</span> by
                                        reinforcing soil and preventing
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
                                        Yes! We analyze each project's unique requirements and provide <span
                                            class="highlight-text">tailor-made
                                            solutions</span> using Geo-textiles, Geo-bags, Concrete Mattresses, and other
                                        advanced
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
                                        With over <span class="highlight-text">15 years of expertise</span>, we focus on
                                        providing high-quality,
                                        sustainable, and cost-effective solutions. Our commitment to innovation and
                                        engineering excellence sets us apart in the field of erosion control.
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