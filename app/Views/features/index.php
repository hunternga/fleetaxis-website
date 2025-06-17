<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Features - FleetAxis<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/solutions-specific.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/features-specific.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>


    <!-- Features Hero Section -->
    <section class="sol-hero">
        <div class="container sol-hero-container py-5">
            <div class="sol-hero-card">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="sol-hero-badge">
                            <span class="badge rounded-pill bg-primary px-4 py-2">
                                Key Features
                            </span>
                        </div>
                        <h1 class="fw-bold text-dark mb-4">
                            Powerful Features for Modern Fleet Management
                        </h1>
                        <p class="lead mb-4">
                            Discover the comprehensive suite of features that make FleetAxis the leading choice for fleet management.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Core Features Section -->
    <section id="core-features" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Core Features</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card shadow-sm rounded p-4 h-100 bg-white">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                                <i class="fas fa-map-marked-alt fa-2x"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3 class="h5 fw-bold">Real-time Tracking</h3>
                            <p class="text-muted mb-0">Monitor your fleet's location and status in real-time with advanced GPS tracking and geofencing capabilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card shadow-sm rounded p-4 h-100 bg-white">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                                <i class="fas fa-tachometer-alt fa-2x"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3 class="h5 fw-bold">Performance Analytics</h3>
                            <p class="text-muted mb-0">Gain insights into vehicle performance, driver behavior, and fuel efficiency with comprehensive analytics dashboards.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card shadow-sm rounded p-4 h-100 bg-white">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                                <i class="fas fa-calendar-check fa-2x"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3 class="h5 fw-bold">Maintenance Scheduling</h3>
                            <p class="text-muted mb-0">Automate maintenance schedules and receive alerts for service due dates to keep your fleet running smoothly.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-3">
                <div class="col-md-4">
                    <div class="feature-card shadow-sm rounded p-4 h-100 bg-white">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                                <i class="fas fa-route fa-2x"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3 class="h5 fw-bold">Route Optimization</h3>
                            <p class="text-muted mb-0">Calculate the most efficient routes based on traffic, weather, and delivery requirements to save time and fuel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card shadow-sm rounded p-4 h-100 bg-white">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                                <i class="fas fa-user-shield fa-2x"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3 class="h5 fw-bold">Driver Safety Monitoring</h3>
                            <p class="text-muted mb-0">Monitor driving patterns, detect harsh braking or acceleration, and provide coaching to improve driver safety.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card shadow-sm rounded p-4 h-100 bg-white">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon bg-primary bg-opacity-10 text-primary p-3 rounded-circle">
                                <i class="fas fa-gas-pump fa-2x"></i>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h3 class="h5 fw-bold">Fuel Management</h3>
                            <p class="text-muted mb-0">Track fuel consumption, detect theft, and identify opportunities to reduce fuel costs across your fleet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Advanced Features Section -->
    <section id="advanced-features" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Advanced Capabilities</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 text-primary p-2 rounded-circle me-3">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <h3 class="h5 fw-bold mb-0">Mobile Application</h3>
                            </div>
                            <p class="text-muted">Control your fleet on the go with our powerful mobile application. Get real-time alerts, approve requests, and access important data from anywhere.</p>
                            <ul class="list-unstyled mt-3 text-muted">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Available for iOS and Android</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Real-time push notifications</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Offline mode capabilities</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 text-primary p-2 rounded-circle me-3">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h3 class="h5 fw-bold mb-0">Advanced Reporting</h3>
                            </div>
                            <p class="text-muted">Generate comprehensive reports on fleet performance, cost analysis, and compliance. Schedule automated reports to be delivered to stakeholders.</p>
                            <ul class="list-unstyled mt-3 text-muted">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Customizable report templates</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Export to PDF, Excel, or CSV</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Scheduled report generation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-4">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 text-primary p-2 rounded-circle me-3">
                                    <i class="fas fa-bell"></i>
                                </div>
                                <h3 class="h5 fw-bold mb-0">Smart Alerting System</h3>
                            </div>
                            <p class="text-muted">Receive instant alerts for critical events like unauthorized vehicle use, speeding, idling, or entering/exiting geofenced zones.</p>
                            <ul class="list-unstyled mt-3 text-muted">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Customizable alert thresholds</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Multiple notification channels</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Priority-based alerting</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="feature-icon bg-primary bg-opacity-10 text-primary p-2 rounded-circle me-3">
                                    <i class="fas fa-users-cog"></i>
                                </div>
                                <h3 class="h5 fw-bold mb-0">Role-Based Access Control</h3>
                            </div>
                            <p class="text-muted">Define precise access permissions for different user roles to ensure data security and operational efficiency.</p>
                            <ul class="list-unstyled mt-3 text-muted">
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Granular permission settings</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Multiple user roles</li>
                                <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Audit trail for user actions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Integration Features Section -->
    <section id="integrations" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Seamless Integrations</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&h=500&q=80" 
                             alt="System Integration" class="img-fluid rounded mb-4">
                        <h3 class="h4 fw-bold mb-3">Open API Architecture</h3>
                        <p class="text-muted">Our robust API allows for seamless integration with your existing systems, including ERP, accounting software, and more. This enables real-time data flow between all your business systems.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="integration-card p-3 bg-white shadow-sm rounded h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="integration-icon bg-primary bg-opacity-10 p-2 rounded me-3">
                                        <i class="fas fa-file-invoice-dollar text-primary"></i>
                                    </div>
                                    <h4 class="h6 fw-bold mb-0">Accounting Software</h4>
                                </div>
                                <p class="text-muted small mb-0">Integrate with popular accounting platforms like QuickBooks, Xero, and SAP.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="integration-card p-3 bg-white shadow-sm rounded h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="integration-icon bg-primary bg-opacity-10 p-2 rounded me-3">
                                        <i class="fas fa-building text-primary"></i>
                                    </div>
                                    <h4 class="h6 fw-bold mb-0">ERP Systems</h4>
                                </div>
                                <p class="text-muted small mb-0">Connect with enterprise systems like SAP, Oracle, and Microsoft Dynamics.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="integration-card p-3 bg-white shadow-sm rounded h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="integration-icon bg-primary bg-opacity-10 p-2 rounded me-3">
                                        <i class="fas fa-box text-primary"></i>
                                    </div>
                                    <h4 class="h6 fw-bold mb-0">Warehouse Management</h4>
                                </div>
                                <p class="text-muted small mb-0">Integrate with WMS systems for seamless inventory and logistics coordination.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="integration-card p-3 bg-white shadow-sm rounded h-100">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="integration-icon bg-primary bg-opacity-10 p-2 rounded me-3">
                                        <i class="fas fa-headset text-primary"></i>
                                    </div>
                                    <h4 class="h6 fw-bold mb-0">CRM Platforms</h4>
                                </div>
                                <p class="text-muted small mb-0">Connect with Salesforce, HubSpot, and other CRM tools for customer management.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Demo Request Section -->
    <section class="sol-section" style="padding-top: 0;">
        <div class="container">
            <div class="sol-card" style="background: linear-gradient(135deg, #007bff, #0056b3);">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-8 mx-auto text-center py-5">
                        <h2 class="sol-card-title text-white">Ready to Experience These Features?</h2>
                        <p class="text-white mb-4">Get a personalized demonstration of FleetAxis in action. Our experts will show you how these features can transform your fleet management.</p>
                        <div class="d-flex justify-content-center gap-3 flex-wrap">
                            <a href="contact.html" class="btn btn-light rounded-pill px-4 py-2">Contact Us</a>
                            <a href="contact.html#demo" class="btn btn-outline-light rounded-pill px-4 py-2">Request Demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>