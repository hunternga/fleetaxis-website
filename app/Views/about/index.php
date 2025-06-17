<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>About Us - FleetAxis<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/solutions-specific.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- About Hero Section -->
    <section class="sol-hero">
        <div class="container sol-hero-container py-5">
            <div class="sol-hero-card">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="sol-hero-badge">
                            <span class="badge rounded-pill bg-primary px-4 py-2">
                                Our Story
                            </span>
                        </div>
                        <h1 class="fw-bold text-dark mb-4">
                            Built by Fleet Managers, for Fleet Managers
                        </h1>
                        <p class="lead mb-4">
                            From a small startup to a trusted industry leader, discover how real-world experience shapes everything we do at FleetAxis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Company Overview Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://img.freepik.com/free-photo/business-people-discussing-charts-meeting_23-2147626625.jpg" 
                         alt="FleetAxis Team" class="img-fluid rounded-lg shadow-lg" style="width: 100%; height: auto;">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Our Journey</h2>
                    <p class="mb-4">FleetAxis was born in 2020 when our founder, Rajiv Sharma, experienced firsthand the challenges of managing a logistics company during the pandemic. After struggling with inefficient tracking systems and mounting operational costs, he assembled a team of engineers and fleet experts to build a solution that would actually work for real-world operations.</p>
                    
                    <p class="mb-4">Starting with just 5 team members working out of a small office in Bangalore, we developed our first GPS tracking system for a local delivery company. When that solution cut their fuel costs by 18% and improved delivery times by 23%, we knew we had created something special.</p>
                    
                    <p class="mb-4">Today, our team of 86 professionals includes former fleet managers, logistics experts, data scientists, and software engineers who understand the daily challenges our clients face. This industry expertise is our secret advantage – we don't just build technology; we build solutions that solve real operational problems.</p>
                    
                    <p>Unlike competitors who rely on off-the-shelf components, we've developed our proprietary hardware and software stack from the ground up, giving us unmatched flexibility to customize solutions for any fleet size or industry – from last-mile delivery startups to large-scale transportation companies across India and Southeast Asia.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Mission and Vision Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Our Mission & Vision</h2>
                <p class="lead mx-auto" style="max-width: 700px;">Guided by clear principles to deliver exceptional value</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 p-xl-5">
                            <div class="mb-4">
                                <span class="badge bg-primary p-3 rounded-circle">
                                    <i class="fas fa-bullseye fa-2x"></i>
                                </span>
                            </div>
                            <h3 class="fw-bold mb-3">Our Mission</h3>
                            <p class="mb-0">To empower businesses with innovative fleet management solutions that optimize operations, enhance safety, and drive sustainable growth while providing exceptional value and unparalleled customer service.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4 p-xl-5">
                            <div class="mb-4">
                                <span class="badge bg-primary p-3 rounded-circle">
                                    <i class="fas fa-binoculars fa-2x"></i>
                                </span>
                            </div>
                            <h3 class="fw-bold mb-3">Our Vision</h3>
                            <p class="mb-0">To be the global leader in fleet management technology, setting industry standards for innovation, reliability, and customer satisfaction while contributing to a safer, more efficient, and environmentally responsible transportation ecosystem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Core Values Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Our Core Values</h2>
                <p class="lead mx-auto" style="max-width: 700px;">The principles that guide everything we do</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-box mb-3 mx-auto">
                                <i class="fas fa-lightbulb text-primary fa-3x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Innovation</h4>
                            <p class="mb-0">We constantly push the boundaries of what's possible in fleet management technology.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-box mb-3 mx-auto">
                                <i class="fas fa-handshake text-primary fa-3x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Integrity</h4>
                            <p class="mb-0">We conduct business with honesty, transparency, and ethical standards in all interactions.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-box mb-3 mx-auto">
                                <i class="fas fa-users text-primary fa-3x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Customer Focus</h4>
                            <p class="mb-0">We put our customers at the center of everything we do, delivering exceptional service.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-box mb-3 mx-auto">
                                <i class="fas fa-medal text-primary fa-3x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Excellence</h4>
                            <p class="mb-0">We strive for the highest standards of quality in our products, services, and support.</p>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Company Culture Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-4">Life at FleetAxis</h2>
                    <p class="mb-4">At FleetAxis, we believe that great solutions come from a culture that values innovation, collaboration, and personal growth. Our workspace is designed to foster creativity and open communication, where ideas flow freely and every team member feels empowered to contribute.</p>
                    
                    <div class="mb-4">
                        <h5 class="fw-bold">What sets us apart:</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <div class="d-flex">
                                    <div class="me-3 text-primary"><i class="fas fa-check-circle"></i></div>
                                    <div>Flat organizational structure that encourages direct communication</div>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex">
                                    <div class="me-3 text-primary"><i class="fas fa-check-circle"></i></div>
                                    <div>Regular field visits to client operations to stay connected to real-world challenges</div>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="d-flex">
                                    <div class="me-3 text-primary"><i class="fas fa-check-circle"></i></div>
                                    <div>Continuous learning with our weekly knowledge sharing sessions</div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="me-3 text-primary"><i class="fas fa-check-circle"></i></div>
                                    <div>Work-life balance with flexible scheduling and remote work options</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <a href="careers.html" class="btn btn-primary rounded-pill px-4 py-2">Join Our Team</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3">
                        <div class="col-6">
                            <img src="https://img.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg" 
                                 alt="Team Collaboration" class="img-fluid rounded shadow-sm mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                            <img src="https://img.freepik.com/free-photo/people-working-office_23-2147656234.jpg" 
                                 alt="Office Environment" class="img-fluid rounded shadow-sm" style="height: 200px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="col-6">
                            <img src="https://img.freepik.com/free-photo/colleagues-giving-fist-bump_53876-64857.jpg" 
                                 alt="Team Building" class="img-fluid rounded shadow-sm mb-3" style="height: 200px; object-fit: cover; width: 100%;">
                            <img src="https://img.freepik.com/free-photo/business-people-office-meeting_23-2148910060.jpg" 
                                 alt="Meeting Room" class="img-fluid rounded shadow-sm" style="height: 200px; object-fit: cover; width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Achievement Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Our Impact By Numbers</h2>
                <p class="lead mx-auto" style="max-width: 700px;">Real results that drive business transformation</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="achievement-box p-4">
                        <div class="achievement-icon mb-3">
                            <i class="fas fa-users text-primary fa-3x"></i>
                        </div>
                        <h3 class="fw-bold text-primary display-4 mb-2">187</h3>
                        <p class="fw-bold mb-0">Active Clients</p>
                        <p class="text-muted small">Across 6 industries</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="achievement-box p-4">
                        <div class="achievement-icon mb-3">
                            <i class="fas fa-truck text-primary fa-3x"></i>
                        </div>
                        <h3 class="fw-bold text-primary display-4 mb-2">12,842</h3>
                        <p class="fw-bold mb-0">Connected Vehicles</p>
                        <p class="text-muted small">Generating real-time data</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="achievement-box p-4">
                        <div class="achievement-icon mb-3">
                            <i class="fas fa-gas-pump text-primary fa-3x"></i>
                        </div>
                        <h3 class="fw-bold text-primary display-4 mb-2">₹36Cr</h3>
                        <p class="fw-bold mb-0">Client Fuel Savings</p>
                        <p class="text-muted small">In the last fiscal year</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="achievement-box p-4">
                        <div class="achievement-icon mb-3">
                            <i class="fas fa-award text-primary fa-3x"></i>
                        </div>
                        <h3 class="fw-bold text-primary display-4 mb-2">97.3%</h3>
                        <p class="fw-bold mb-0">Client Retention</p>
                        <p class="text-muted small">Industry-leading loyalty</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm p-4">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                                <img src="https://img.freepik.com/free-vector/business-vision-concept-illustration_114360-7130.jpg" class="img-fluid rounded" alt="Growth Statistics" style="max-height: 150px;">
                            </div>
                            <div class="col-md-8">
                                <h4 class="fw-bold mb-3">Our Growth Journey</h4>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="progress flex-grow-1 me-3" style="height: 8px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                                    </div>
                                    <span class="fw-bold">85% YoY Revenue Growth</span>
                                </div>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="progress flex-grow-1 me-3" style="height: 8px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 72%"></div>
                                    </div>
                                    <span class="fw-bold">72% Team Expansion</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1 me-3" style="height: 8px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 63%"></div>
                                    </div>
                                    <span class="fw-bold">63% Market Share Increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="contact.html" class="btn btn-primary rounded-pill px-4 py-2">Partner With Us</a>
            </div>
        </div>
    </section>
      <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Client Success Stories</h2>
                <p class="lead mx-auto" style="max-width: 700px;">Real results from businesses that trust our solutions</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm p-4 h-100">
                        <div class="d-flex mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="ms-auto text-primary fw-bold">ROI: 327%</span>
                        </div>
                        <p class="mb-4">"Before implementing FleetAxis, our 38-vehicle fleet was hemorrhaging money through fuel theft and inefficient routes. Within 90 days of deployment, we documented a 24% reduction in fuel expenses and cut our delivery delays by 37%. Their custom geofencing solution for our sensitive delivery areas has been a game-changer for our security protocols."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" 
                                 alt="Vikram Singh" class="rounded-circle" width="60" height="60" style="object-fit: cover;">
                            <div class="ms-3">
                                <h5 class="fw-bold mb-1">Vikram Singh</h5>
                                <p class="mb-0 text-muted">Operations Director, Speedex Logistics</p>
                                <div class="mt-2">
                                    <span class="badge bg-secondary me-1">38-Vehicle Fleet</span>
                                    <span class="badge bg-secondary">Logistics</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm p-4 h-100">
                        <div class="d-flex mb-3">
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="ms-auto text-primary fw-bold">ROI: 215%</span>
                        </div>
                        <p class="mb-4">"As our food delivery startup scaled from 12 to 85 drivers in just 8 months, we desperately needed a system that could grow with us. FleetAxis not only handled our rapid expansion but provided critical insights that helped us optimize delivery zones. Their driver behavior monitoring reduced our accident rate by 62% and cut insurance premiums by ₹3.8 lakhs annually. The 24/7 support team has been exceptional during our night operations."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://img.freepik.com/free-photo/cheerful-middle-aged-woman-with-curly-hair_1262-20859.jpg" 
                                 alt="Meena Desai" class="rounded-circle" width="60" height="60" style="object-fit: cover;">
                            <div class="ms-3">
                                <h5 class="fw-bold mb-1">Meena Desai</h5>
                                <p class="mb-0 text-muted">Co-founder, FreshFeast Delivery</p>
                                <div class="mt-2">
                                    <span class="badge bg-secondary me-1">85-Vehicle Fleet</span>
                                    <span class="badge bg-secondary">Food Delivery</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Video Testimonial -->
            <div class="row mt-5">
                <div class="col-lg-10 mx-auto">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="ratio ratio-16x9 h-100">
                                    <img src="https://img.freepik.com/free-photo/focused-logistics-manager-working-tablet_1262-20857.jpg" 
                                         class="img-fluid" alt="Video Testimonial Thumbnail" style="object-fit: cover;">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <div class="bg-white rounded-circle d-flex align-items-center justify-content-center" 
                                             style="width: 80px; height: 80px; cursor: pointer;">
                                            <i class="fas fa-play fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 p-md-5 d-flex flex-column justify-content-center h-100">
                                    <h4 class="fw-bold mb-3">How Bluestar Transport Increased Fleet Efficiency by 43%</h4>
                                    <p class="mb-4">"When you manage 140+ vehicles across multiple states, real-time visibility isn't just nice to have—it's essential. FleetAxis delivered when no other solution could."</p>
                                    <div class="d-flex align-items-center">
                                        <img src="https://img.freepik.com/free-photo/portrait-smiling-businessman_171337-10442.jpg" 
                                             alt="Rajesh Kumar" class="rounded-circle" width="50" height="50" style="object-fit: cover;">
                                        <div class="ms-3">
                                            <h5 class="fw-bold mb-0">Rajesh Kumar</h5>
                                            <p class="mb-0 text-muted">Fleet Director, Bluestar Transport</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Call-to-Action Section -->
    <section class="py-5">
        <div class="container">
            <div class="sol-card" style="background: linear-gradient(135deg, #1e3c72, #2a5298);">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="p-4">
                            <img src="https://img.freepik.com/free-vector/global-logistics-network-concept_1302-13392.jpg" class="img-fluid rounded shadow" alt="Fleet Management Solutions" style="max-height: 280px; object-fit: cover; width: 100%;">
                        </div>
                    </div>
                    <div class="col-lg-7 text-center text-lg-start p-4 py-lg-5">
                        <h2 class="sol-card-title text-white mb-3">Experience Fleet Management Reimagined</h2>
                        <p class="text-white mb-4 lead">Schedule a personalized consultation with our fleet specialists to see how our solution can be tailored to your specific operational challenges.</p>
                        
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <div class="card bg-white bg-opacity-10 border-0 p-3 h-100">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3 bg-white text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; min-width: 50px;">
                                            <i class="fas fa-calculator fa-lg"></i>
                                        </div>
                                        <div class="text-white">
                                            <h5 class="mb-1 fw-bold">ROI Calculator</h5>
                                            <p class="mb-0 small">Get a customized savings projection</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="card bg-white bg-opacity-10 border-0 p-3 h-100">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3 bg-white text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; min-width: 50px;">
                                            <i class="fas fa-laptop-code fa-lg"></i>
                                        </div>
                                        <div class="text-white">
                                            <h5 class="mb-1 fw-bold">Live Demo</h5>
                                            <p class="mb-0 small">See our platform in action</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                            <a href="contact.html#demo" class="btn btn-light rounded-pill px-4 py-3 fw-bold">
                                <i class="fas fa-calendar-check me-2"></i>Schedule Consultation
                            </a>
                            <a href="products.html" class="btn btn-outline-light rounded-pill px-4 py-3">
                                <i class="fas fa-box me-2"></i>Explore Hardware
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
// Intersection Observer for animation
const observerOptions = {
    root: null,
    threshold: 0.1,
    rootMargin: '0px'
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-in');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe elements
document.querySelectorAll('.value-card, .team-card, .achievement-card').forEach(el => {
    observer.observe(el);
});
</script>
<?= $this->endSection() ?>
