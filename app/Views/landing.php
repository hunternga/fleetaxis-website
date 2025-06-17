<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Welcome to FleetAxis
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container position-relative py-5">
            <div class="hero-card glass-effect p-4 p-md-5">
                <div class="row align-items-center g-4 p-3">
                    <div class="col-lg-7 hero-content text-lg-start text-center position-relative px-lg-4 py-3">                        <div class="hero-badge mb-4">
                            <span class="badge rounded-pill bg-primary px-4 py-2">
                                Next-Gen Fleet Management
                            </span>
                        </div>
                        <h1 class="hero-title fw-bold text-dark mb-4">
                            Transform Your Fleet with
                            <span class="gradient-text d-block text-primary">Intelligence</span>
                        </h1>
                        <p class="hero-description lead mb-4">
                            Experience the future of fleet management with AI-powered tracking and smart automation.
                        </p>
                        <div class="hero-buttons mb-4">
                            <a href="#contact" class="btn btn-primary btn-glow btn-lg me-3 px-4 py-2">
                                <span class="btn-text">Get Started</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            <a href="#features" class="btn btn-outline-secondary btn-glass btn-lg px-4 py-2">
                                <i class="fas fa-play me-2"></i>Watch Demo
                            </a>
                        </div>
                        <div class="hero-stats mt-5">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="stat-item glass-card p-3">
                                        <div class="stat-value text-primary fw-bold">98%</div>
                                        <div class="stat-label text-secondary">Accuracy Rate</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-item glass-card p-3">
                                        <div class="stat-value text-primary fw-bold">50K+</div>
                                        <div class="stat-label text-secondary">Vehicles Tracked</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="stat-item glass-card p-3">
                                        <div class="stat-value text-primary fw-bold">24/7</div>
                                        <div class="stat-label text-secondary">Live Monitoring</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="hero-visual p-4 d-flex justify-content-center align-items-center">
                            <div class="hero-image-wrapper position-relative">
                                <div class="logo-container">
                                    <div class="glass-card d-flex align-items-center justify-content-center hero-logo"
                                        style="width:300px; height:300px; font-size:24px; font-weight:bold; border-radius:50%;">
                                        LOGO</div>
                                </div>
                                <div class="circular-text">
                                    <svg viewBox="0 0 100 100">
                                        <path id="curve" d="M 25,50 a 25,25 0 1,1 50,0 a 25,25 0 1,1 -50,0"
                                            fill="transparent" />
                                        <text>
                                            <textPath href="#curve" class="text-muted">
                                                VEHICLE TRACKING SOLUTIONS • REAL-TIME MONITORING •
                                            </textPath>
                                        </text>
                                    </svg>
                                </div>
                                <div class="tech-badges">
                                    <div class="tech-badge bg-primary text-white">
                                        <i class="fas fa-satellite-dish"></i>
                                        <span>GPS Tracking</span>
                                    </div>
                                    <div class="tech-badge bg-primary text-white">
                                        <i class="fas fa-chart-line"></i>
                                        <span>Live Analytics</span>
                                    </div>
                                    <div class="tech-badge bg-primary text-white">
                                        <i class="fas fa-brain"></i>
                                        <span>AI Powered</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-explore bg-white shadow-sm">
            <div class="scroll-button">
                <i class="fas fa-chevron-down text-primary"></i>
            </div>
            <div class="explore-text text-dark">Scroll to Explore</div>
        </div>
    </section> <!-- Features Section -->
    <section id="features" class="py-5 bg-light position-relative">
        <div class="container position-relative">
            <div class="bg-blob-left"></div>
            <div class="bg-blob-right"></div>
            <div class="section-header text-center mb-5">
                <h6 class="text-uppercase fw-semibold accent-text">
                    <span class="badge rounded-pill bg-primary mb-3 px-4 py-2 d-inline-flex align-items-center">
                        <i class="fas fa-star me-2"></i>Key Features
                    </span>
                </h6>
                <h2 class="section-title">Powerful Fleet Management Tools</h2>
                <p class="section-subtitle">Our platform offers comprehensive tools to optimize your fleet operations
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3>Real-time Tracking</h3>
                            <p>Monitor your fleet's location and status in real-time with advanced GPS tracking and
                                geofencing capabilities.</p>
                            <a href="#" class="feature-link text-primary">Learn more <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3>Smart Analytics</h3>
                            <p>Make data-driven decisions with our comprehensive analytics dashboard and customizable
                                reports.</p>
                            <a href="#" class="feature-link text-primary">Learn more <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon-wrapper">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3>Advanced Security</h3>
                            <p>Enterprise-grade security features to protect your fleet data with end-to-end encryption
                                and access controls.</p>
                            <a href="#" class="feature-link text-primary">Learn more <i
                                    class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Solution Section -->
    <section id="solutions" class="py-5 bg-white position-relative">
        <div class="container position-relative">
            <div class="section-header text-center mb-5">
                <h6 class="text-uppercase fw-semibold accent-text">
                    <span class="badge rounded-pill bg-primary mb-3 px-4 py-2 d-inline-flex align-items-center">
                        <i class="fas fa-cube me-2"></i>Solutions
                    </span>
                </h6>
                <h2 class="section-title">Tailored Solutions for Every Need</h2>
                <p class="section-subtitle">Discover the perfect fleet management solution for your business</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="solution-card h-100">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <svg class="solution-icon-bg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="var(--bs-primary-bg-subtle)"/>
                                </svg>
                                <i class="fas fa-building position-absolute top-50 start-50 translate-middle text-primary fa-2x"></i>
                            </div>
                            <h3 class="solution-title">Enterprises</h3>
                            <p class="solution-subtitle">Complete fleet management solution</p>
                        </div>
                        <div class="solution-features">                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Fleet Management</h4>
                                    <p>Comprehensive fleet tracking & management</p>
                                </div>
                            </div>
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-car-side"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Vehicle Rental</h4>
                                    <p>Smart vehicle rental & leasing tracker</p>
                                </div>
                            </div>
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-users-gear"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Workforce</h4>
                                    <p>Field staff & workforce tracking system</p>
                                </div>
                            </div>
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-boxes-stacked"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Asset Tracking</h4>
                                    <p>Real-time asset & logistics monitoring</p>
                                </div>
                            </div>
                        </div>                        <div class="solution-action">
                            <a href="solutions.html#logistics" class="btn btn-primary btn-lg solution-btn">
                                <span>Explore Enterprise Solutions</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="solution-card h-100">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <svg class="solution-icon-bg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="var(--bs-primary-bg-subtle)"/>
                                </svg>
                                <i class="fas fa-user-shield position-absolute top-50 start-50 translate-middle text-primary fa-2x"></i>
                            </div>
                            <h3 class="solution-title">Individuals</h3>
                            <p class="solution-subtitle">Personal safety & tracking solutions</p>
                        </div>
                        <div class="solution-features">
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-car-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Vehicle Tracking</h4>
                                    <p>Real-time personal vehicle monitoring</p>
                                </div>
                            </div>
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Family Safety</h4>
                                    <p>Kids & elderly safety wearable devices</p>
                                </div>
                            </div>
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-motorcycle"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Two-Wheeler</h4>
                                    <p>Smart anti-theft protection systems</p>
                                </div>
                            </div>
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-paw"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Pet Tracking</h4>
                                    <p>GPS tracking for your beloved pets</p>
                                </div>
                            </div>
                        </div>
                        <div class="solution-action">
                            <a href="solutions.html#transport" class="btn btn-primary btn-lg solution-btn">
                                <span>Explore Personal Solutions</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>                <div class="col-lg-4">
                    <div class="solution-card h-100">
                        <div class="solution-header">
                            <div class="solution-icon">
                                <svg class="solution-icon-bg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="var(--bs-primary-bg-subtle)"/>
                                </svg>
                                <i class="fas fa-layer-group position-absolute top-50 start-50 translate-middle text-primary"></i>
                            </div>
                            <h3 class="solution-title">Other Segments</h3>
                            <p class="solution-subtitle">Specialized tracking solutions</p>
                        </div>
                        <div class="solution-features">
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-bus"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>School Transport</h4>
                                    <p>Real-time school bus tracking system</p>
                                </div>
                            </div>
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-ambulance"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Healthcare</h4>
                                    <p>Emergency vehicle monitoring solution</p>
                                </div>
                            </div>
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>E-Commerce</h4>
                                    <p>Delivery fleet tracking & management</p>
                                </div>
                            </div>
                            <div class="solution-feature">
                                <div class="feature-icon">
                                    <i class="fas fa-truck-pickup"></i>
                                </div>
                                <div class="feature-content">
                                    <h4>Heavy Equipment</h4>
                                    <p>Construction vehicle monitoring</p>
                                </div>
                            </div>
                        </div>
                        <div class="solution-action">
                            <a href="solutions.html#enterprise" class="btn btn-primary btn-lg solution-btn">
                                <span>Explore Specialized Solutions</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Comparison Section -->
    <section id="comparison" class="py-5 position-relative overflow-hidden">
        <div class="installation-bg"></div>
        <div class="container position-relative">
            <div class="bg-blob-left-installation"></div>
            <div class="bg-blob-right-installation"></div>
            <div class="section-header text-center mb-5">
                <h6 class="text-uppercase fw-semibold accent-text">
                    <span class="badge rounded-pill bg-primary mb-3 px-4 py-2">
                        <i class="fas fa-exchange-alt me-2"></i>Smart Transformation
                    </span>
                </h6>
                <h2 class="section-title">Experience the FleetAxis Difference</h2>
                <p class="section-subtitle col-lg-8 mx-auto">See how our intelligent solutions transform fleet
                    management into a streamlined operation</p>
            </div>
            <div class="before-after-wrapper">
                <div class="feature-card glass-card before-section">
                    <h4 class="text-center mb-3 text-danger">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        Traditional Fleet Challenges
                    </h4>
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-eye-slash text-danger"></i>
                            <span>No visibility of vehicle or loved ones</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-phone-slash text-danger"></i>
                            <span>Constant calls to check location</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-gas-pump text-danger"></i>
                            <span>High fuel costs and misuse</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chart-bar text-danger"></i>
                            <span>No data to make smart decisions</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-exclamation-triangle text-danger"></i>
                            <span>Delays, confusion, and worry</span>
                        </div>
                    </div>
                </div>

                <div class="comparison-arrow d-none d-md-flex">
                    <i class="fas fa-arrow-right"></i>
                </div>
                <div class="text-center d-md-none my-3">
                    <i class="fas fa-arrow-down comparison-arrow-mobile"></i>
                </div>
                <div class="feature-card glass-card after-section">
                    <h4 class="text-center mb-3 text-success">
                        <i class="fas fa-rocket me-2"></i>
                        FleetAxis Smart Solutions
                    </h4>
                    <div class="feature-list">
                        <div class="feature-item">
                            <i class="fas fa-location-dot text-success"></i>
                            <span>Real-time GPS tracking via app/web</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-shield-alt text-success"></i>
                            <span>Instant alerts & geo-fence safety zones</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-gas-pump text-success"></i>
                            <span>Fuel usage monitoring & efficiency</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chart-line text-success"></i>
                            <span>Trip history, reports, and driver behavior</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-truck-fast text-success"></i>
                            <span>Smarter fleet control, lower costs, happier customers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .before-after-wrapper {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 1.5rem;
            align-items: center;
        }

        .comparison-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--bs-primary);
            padding: 0 1rem;
        }

        .comparison-arrow-mobile {
            font-size: 1.5rem;
            color: var(--bs-primary);
        }

        @media (max-width: 767.98px) {
            .before-after-wrapper {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }
        }

        /* Override any animations or transitions */
        #comparison .glass-card,
        #comparison .feature-card,
        #comparison .glass-card:hover,
        #comparison .feature-card:hover {
            transform: none !important;
            transition: none !important;
            animation: none !important;
            box-shadow: 0 4px 15px rgba(31, 38, 135, 0.1) !important;
            background: rgba(255, 255, 255, 0.7);
            padding: 2rem;
        }

        #comparison .feature-item {
            padding: 0.75rem;
            border-radius: 8px;
            transform: none !important;
            transition: none !important;
        }

        #comparison .feature-item:hover {
            transform: none !important;
            background: none !important;
        }

        @media (max-width: 767.98px) {

            #comparison .glass-card,
            #comparison .feature-card {
                padding: 1.5rem !important;
            }
        }
    </style>
    <!-- Installation Process Section -->
    <section id="installation" class="py-5 position-relative overflow-hidden">
        <div class="installation-bg"></div>
        <div class="container position-relative">
            <div class="bg-blob-left-installation"></div>
            <div class="bg-blob-right-installation"></div>
            <div class="section-header text-center mb-5">
                <h6 class="text-uppercase fw-semibold accent-text">
                <span class="badge rounded-pill bg-primary mb-3 px-4 py-2">
                    <i class="fas fa-rocket me-2"></i>Quick Setup
                </span>
                </h6>
                <h2 class="section-title">Installation Made Simple</h2>
                <p class="section-subtitle col-lg-8 mx-auto">Get your tracking system up and running in minutes with our
                    streamlined setup process</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="installation-grid mt-0">
                        <div class="installation-card">
                            <div class="installation-icon">
                                <i class="fas fa-box-open"></i>
                                <div class="installation-icon-rings"></div>
                            </div>
                            <div class="installation-step">Step 1</div>
                            <h4>Choose Your Device</h4>
                            <div class="feature-list">
                                <div class="feature-item">
                                    <i class="fas fa-car"></i>
                                    <span>Vehicle Tracker</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Personal Safety Device</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-truck-moving"></i>
                                    <span>Fleet Management</span>
                                </div>
                            </div>
                            <div class="installation-time">
                                <i class="far fa-clock"></i> 5 minutes
                            </div>
                        </div>
                        <div class="installation-card">
                            <div class="installation-icon">
                                <i class="fas fa-tools"></i>
                                <div class="installation-icon-rings"></div>
                            </div>
                            <div class="installation-step">Step 2</div>
                            <h4>Quick Setup</h4>
                            <div class="feature-list">
                                <div class="feature-item">
                                    <i class="fas fa-plug"></i>
                                    <span>OBD Port Connection</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>No Wiring Required</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-headset"></i>
                                    <span>Tech Support Available</span>
                                </div>
                            </div>
                            <div class="installation-time">
                                <i class="far fa-clock"></i> 10-15 minutes
                            </div>
                        </div>
                        <div class="installation-card">
                            <div class="installation-icon">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="installation-icon-rings"></div>
                            </div>
                            <div class="installation-step">Step 3</div>
                            <h4>Mobile App Setup</h4>
                            <div class="feature-list">
                                <div class="feature-item">
                                    <i class="fas fa-download"></i>
                                    <span>Install iOS/Android App</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-user-plus"></i>
                                    <span>Quick Account Setup</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-link"></i>
                                    <span>Connect Your Device</span>
                                </div>
                            </div>
                            <div class="installation-time">
                                <i class="far fa-clock"></i> 5 minutes
                            </div>
                        </div>
                        <div class="installation-card">
                            <div class="installation-icon">
                                <i class="fas fa-chart-line"></i>
                                <div class="installation-icon-rings"></div>
                            </div>
                            <div class="installation-step">Step 4</div>
                            <h4>Start Monitoring</h4>
                            <div class="feature-list">
                                <div class="feature-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Real-time Location</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-draw-polygon"></i>
                                    <span>Geofencing</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-bell"></i>
                                    <span>Smart Alerts</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-history"></i>
                                    <span>Trip History</span>
                                </div>
                            </div>
                            <div class="installation-time">
                                <i class="fas fa-check-circle"></i> Ready to Go!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-center section-title">Get Started Today</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form class="contact-form p-4">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-5">
                                <input type="tel" class="form-control form-control-lg" placeholder="Your Phone Number"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select form-select-lg" required>
                                    <option value="" selected disabled>Select Solution Type</option>
                                    <option value="enterprise">Enterprises</option>
                                    <option value="individual">Individuals</option>
                                    <option value="family">Other Segments</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Get Started</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
