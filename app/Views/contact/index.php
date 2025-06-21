<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Contact Us - FleetAxis<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/solutions-specific.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Contact Hero Section -->
<section class="sol-hero">
    <div class="container sol-hero-container py-5">
        <div class="sol-hero-card">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="sol-hero-badge">
                        <span class="badge rounded-pill bg-primary px-4 py-2">
                            Contact & Support
                        </span>
                    </div>
                    <h1 class="fw-bold text-dark mb-4">
                        We're Here to Help You Succeed
                    </h1>
                    <p class="lead mb-4">
                        Connect with our fleet management experts to discuss your needs and discover how we can optimize your operations.
                    </p>
                    <div class="d-flex justify-content-center">
                        <a href="#contact-form" class="btn btn-primary rounded-pill px-4 py-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Unified Contact Form Section -->
<section class="py-5 bg-light" id="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="fw-bold mb-4 text-center">Get in Touch</h3>
                        <form id="unifiedForm" class="needs-validation" novalidate>
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inquiryType" class="form-label">How can we help you?</label>
                                        <select class="form-select" id="inquiryType" required>
                                            <option value="">Select your inquiry type</option>
                                            <option value="demo">Request a Demo</option>
                                            <option value="enterprise">Enterprise Solutions</option>
                                            <option value="individual">Individual Solutions</option>
                                            <option value="support">Technical Support</option>
                                            <option value="sales">Sales Inquiry</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">Please select an inquiry type.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" required>
                                        <div class="invalid-feedback">First name is required.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" required>
                                        <div class="invalid-feedback">Last name is required.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                        <div class="invalid-feedback">A valid email is required.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" required>
                                        <div class="invalid-feedback">Phone number is required.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company" class="form-label">Company Name</label>
                                        <input type="text" class="form-control" id="company" required>
                                        <div class="invalid-feedback">Company name is required.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fleetSize" class="form-label">Fleet Size</label>
                                        <select class="form-select" id="fleetSize">
                                            <option value="">Select fleet size</option>
                                            <option value="1-10">1-10 vehicles</option>
                                            <option value="11-50">11-50 vehicles</option>
                                            <option value="51-200">51-200 vehicles</option>
                                            <option value="201+">201+ vehicles</option>
                                            <option value="na">Not Applicable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="5" placeholder="Tell us about your requirements or questions..." required></textarea>
                                        <div class="invalid-feedback">Please enter your message.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="consent" required>
                                        <label class="form-check-label" for="consent">
                                            I agree to receive communications from FleetAxis. View our <a href="#">Privacy Policy</a>.
                                        </label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary px-5 py-3">
                                        Submit Inquiry
                                        <i class="fas fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Info Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="contact-icon mb-4">
                            <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                        </div>                            <h4 class="mb-3">Visit Us</h4>
                        <p class="mb-0">FleetAxis Technologies Pvt. Ltd.<br>HSR Layout, Sector 2<br>Bengaluru, Karnataka 560102<br>India</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="contact-icon mb-4">
                            <i class="fas fa-phone fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Call Us</h4>
                        <p class="mb-0">Support: +91 80-4123-9876<br>Sales: +91 80-4123-9877</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="contact-icon mb-4">
                            <i class="fas fa-envelope fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Email Us</h4>
                        <p class="mb-0">info@fleetaxis.in<br>support@fleetaxis.in</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    </section>   
     <!-- Features Section -->
<section class="py-5" style="background: linear-gradient(135deg, #007bff, #0056b3);">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-comments fa-3x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">24/7 Support</h4>
                        <p class="mb-0 text-muted">Our dedicated team is available round the clock to assist you with any queries.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-laptop-code fa-3x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Live Demo</h4>
                        <p class="mb-0 text-muted">Experience our solutions firsthand with a personalized demonstration.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-tools fa-3x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Custom Solutions</h4>
                        <p class="mb-0 text-muted">Get tailored solutions that perfectly match your business requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <i class="fas fa-handshake fa-3x text-primary"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Expert Guidance</h4>
                        <p class="mb-0 text-muted">Our experts will help you choose the right solution for your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
// Form validation
(function () {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();

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
document.querySelectorAll('.contact-card').forEach(el => {
    observer.observe(el);
});
</script>
<?= $this->endSection() ?>
