<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Enterprise Solutions - FleetAxis<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/solutions-specific.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Solutions Hero Section -->
    <section class="sol-hero">
        <div class="container sol-hero-container">
            <div class="sol-hero-card">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="sol-hero-badge">
                            <span class="badge rounded-pill bg-primary px-4 py-2">
                                Enterprise GPS Solutions
                            </span>
                        </div>
                        <h1 class="sol-hero-title">
                            FleetAxis Enterprise GPS Tracking Solutions
                        </h1>
                        <p class="sol-hero-description">
                            Smart. Secure. Scalable.
                        </p>                        <p class="sol-hero-subtitle">
                            Comprehensive GPS Solutions for Business and Enterprise
                        </p>
                        <div class="mt-4">                            <a href="#enterprise-solutions" class="btn btn-primary rounded-pill px-4 me-2">Enterprise Solutions</a>
                            <a href="<?= base_url('solutions/individual') ?>" class="btn btn-outline-primary rounded-pill px-4 me-2">Individual Solutions</a>
                            <a href="<?= base_url('solutions/industry') ?>" class="btn btn-outline-primary rounded-pill px-4">Industry Solutions</a>
                        </div>
                    </div>
                </div>
            </div>        </div>
    </section>

    <!-- Enterprise Solutions Section -->
    <section id="enterprise-solutions" class="sol-section">
        <div class="container">
            <div class="sol-section-header">
                <span class="sol-section-subtitle">Enterprise Solutions</span>
                <h2 class="sol-section-title">Advanced Fleet & Asset Tracking</h2>
                <p class="sol-section-desc">Comprehensive solutions for large-scale operations</p>
            </div><!-- Fleet Management -->
            <div class="sol-card">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="sol-card-body">
                            <span class="sol-card-badge">Fleet Management</span>
                            <h2 class="sol-card-title">Fleet Management System</h2>
                            <p class="sol-card-desc">Maximize fleet efficiency with real-time GPS tracking</p>
                            <ul class="sol-features list-unstyled">
                                <li>Track multiple vehicles on one dashboard</li>
                                <li>Monitor speed, fuel usage, engine health</li>
                                <li>Driver behavior reports & trip replay</li>
                                <li>Route optimization & geofencing</li>
                            </ul>
                            <div class="sol-keywords">
                                <span class="text-muted small d-block mb-2">Keywords: </span>
                                <span class="sol-keyword">fleet tracking system</span>
                                <span class="sol-keyword">GPS for logistics</span>
                                <span class="sol-keyword">fleet optimization software</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <div class="sol-image-container">
                                <img src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7" alt="Fleet Management Dashboard" class="sol-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>            <!-- Vehicle Rental Solution -->
            <div class="sol-card">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="sol-card-body">
                            <span class="sol-card-badge">Rental Management</span>
                            <h2 class="sol-card-title">Vehicle Rental & Leasing GPS Solution</h2>
                            <p class="sol-card-desc">Protect your rental fleet and increase accountability</p>
                            <ul class="sol-features list-unstyled">
                                <li>Track trip distance, time, and location</li>
                                <li>Immobilization feature for security</li>
                                <li>Automated alerts for over-speeding and route deviation</li>
                            </ul>
                            <div class="sol-keywords">
                                <span class="text-muted small d-block mb-2">Keywords: </span>
                                <span class="sol-keyword">rental vehicle GPS</span>
                                <span class="sol-keyword">GPS for car hire</span>
                                <span class="sol-keyword">leasing vehicle tracker</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <div class="sol-image-container">
                                <img src="https://images.unsplash.com/photo-1614200187524-dc4b892acf16" alt="Vehicle Rental Tracking" class="sol-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>            <!-- Field Workforce -->
            <div class="sol-card">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="sol-card-body">
                            <span class="sol-card-badge">Workforce Management</span>
                            <h2 class="sol-card-title">Field Workforce Tracking</h2>
                            <p class="sol-card-desc">Monitor mobile employees in real time</p>
                            <ul class="sol-features list-unstyled">
                                <li>Mobile app-based GPS tracking</li>
                                <li>Attendance, task logging, and route history</li>
                                <li>Boost productivity & reduce manual reporting</li>
                            </ul>
                            <div class="sol-keywords">
                                <span class="text-muted small d-block mb-2">Keywords: </span>
                                <span class="sol-keyword">field staff GPS</span>
                                <span class="sol-keyword">on-field employee tracking</span>
                                <span class="sol-keyword">workforce management GPS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <div class="sol-image-container">
                                <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216" alt="Field Workforce Management" class="sol-image">
                            </div>
                        </div>
                    </div>
                </div>            </div>
            
            <!-- Asset Tracking -->
            <div class="sol-card">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="sol-card-body">
                            <span class="sol-card-badge">Asset Management</span>
                            <h2 class="sol-card-title">Asset & Container Tracking</h2>
                            <p class="sol-card-desc">Track non-vehicle assets like containers, cargo & tools</p>
                            <ul class="sol-features list-unstyled">
                                <li>Portable GPS devices with battery backup</li>
                                <li>Tamper-proof and location-aware</li>
                                <li>Alerts for movement, zone exits, or inactivity</li>
                            </ul>
                            <div class="sol-keywords">
                                <span class="text-muted small d-block mb-2">Keywords: </span>
                                <span class="sol-keyword">asset GPS tracker</span>
                                <span class="sol-keyword">container tracking system</span>
                                <span class="sol-keyword">cargo monitoring GPS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <div class="sol-image-container">                                <img src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3" alt="Asset and Container Tracking" class="sol-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section class="sol-section" style="padding-top: 0;">
        <div class="container">
            <div class="sol-card" style="background: linear-gradient(135deg, #007bff, #0056b3);">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-8 mx-auto text-center py-5">
                        <h2 class="sol-card-title text-white">Ready to Transform Your Fleet Operations?</h2>
                        <p class="text-white mb-4">Experience our enterprise-grade GPS tracking solutions for improved efficiency and control.</p>
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
