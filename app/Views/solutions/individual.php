<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Individual Solutions - FleetAxis<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/solutions-specific.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <!-- Individual Solutions Hero Section -->
    <section class="sol-hero">
        <div class="container sol-hero-container">
            <div class="sol-hero-card">
                <div class="row align-items-center">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="sol-hero-badge">
                            <span class="badge rounded-pill bg-primary px-4 py-2">
                                Personal GPS Solutions
                            </span>
                        </div>
                        <h1 class="sol-hero-title">
                            FleetAxis Individual GPS Tracking Solutions
                        </h1>
                        <p class="sol-hero-description">
                            Simple. Affordable. Reliable.
                        </p>                        <p class="sol-hero-subtitle">
                            GPS Tracking Solutions for Personal Vehicles & Assets
                        </p>                        <div class="mt-4">                            <a href="<?= base_url('solutions/enterprise') ?>" class="btn btn-outline-primary rounded-pill px-4 me-2">Enterprise Solutions</a>
                            <a href="#individual-solutions" class="btn btn-primary rounded-pill px-4 me-2">Individual Solutions</a>
                            <a href="<?= base_url('solutions/industry') ?>" class="btn btn-outline-primary rounded-pill px-4">Industry Solutions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Individual Solutions Section -->
    <section id="individual-solutions" class="sol-section">
        <div class="container">
            <div class="sol-section-header">
                <span class="sol-section-subtitle">Individual Solutions</span>
                <h2 class="sol-section-title">Personal Vehicle & Asset Tracking</h2>
                <p class="sol-section-desc">Affordable tracking solutions for individuals and small businesses</p>
            </div>

            <!-- Personal Vehicle Tracking -->
            <div class="sol-card">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="sol-card-body">
                            <span class="sol-card-badge">Vehicle Safety</span>
                            <h2 class="sol-card-title">Personal Vehicle Tracking</h2>
                            <p class="sol-card-desc">Keep your personal vehicle safe and monitored at all times</p>
                            <ul class="sol-features list-unstyled">
                                <li>Real-time location monitoring from your smartphone</li>
                                <li>Vehicle recovery assistance in case of theft</li>
                                <li>Driving history & trip records</li>
                                <li>Geo-fence alerts when vehicle leaves designated areas</li>
                            </ul>
                            <div class="sol-keywords">
                                <span class="text-muted small d-block mb-2">Keywords: </span>
                                <span class="sol-keyword">car GPS tracker</span>
                                <span class="sol-keyword">vehicle anti-theft</span>
                                <span class="sol-keyword">car security GPS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <div class="sol-image-container">
                                <img src="https://images.unsplash.com/photo-1494905998402-395d579af36f" alt="Personal Vehicle Tracking" class="sol-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Family Safety -->
            <div class="sol-card">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="sol-card-body">
                            <span class="sol-card-badge">Family Safety</span>
                            <h2 class="sol-card-title">Family Safety Tracking Solution</h2>
                            <p class="sol-card-desc">Ensure the safety of your loved ones with real-time location tracking</p>
                            <ul class="sol-features list-unstyled">
                                <li>Track elderly family members for safety</li>
                                <li>Monitor teenage drivers' speed and location</li>
                                <li>SOS emergency button for immediate alerts</li>
                                <li>Family location sharing with privacy controls</li>
                            </ul>
                            <div class="sol-keywords">
                                <span class="text-muted small d-block mb-2">Keywords: </span>
                                <span class="sol-keyword">family GPS tracker</span>
                                <span class="sol-keyword">child safety GPS</span>
                                <span class="sol-keyword">elderly tracking device</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <div class="sol-image-container">
                                <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300" alt="Family Safety Tracking" class="sol-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pet Tracking -->
            <div class="sol-card">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="sol-card-body">
                            <span class="sol-card-badge">Pet Safety</span>
                            <h2 class="sol-card-title">Pet Tracking Solution</h2>
                            <p class="sol-card-desc">Never lose track of your beloved pets again</p>
                            <ul class="sol-features list-unstyled">
                                <li>Lightweight, waterproof GPS trackers for pets</li>
                                <li>Real-time location updates on your smartphone</li>
                                <li>Safe zone alerts if pet leaves designated areas</li>
                                <li>Historical movement patterns and activity monitoring</li>
                            </ul>
                            <div class="sol-keywords">
                                <span class="text-muted small d-block mb-2">Keywords: </span>
                                <span class="sol-keyword">pet GPS tracker</span>
                                <span class="sol-keyword">dog tracking device</span>
                                <span class="sol-keyword">cat GPS collar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <div class="sol-image-container">
                                <img src="https://images.unsplash.com/photo-1544568100-847a948585b9" alt="Pet Tracking" class="sol-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Valuable Asset Tracking -->
            <div class="sol-card">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="sol-card-body">
                            <span class="sol-card-badge">Asset Protection</span>
                            <h2 class="sol-card-title">Valuable Asset Tracking</h2>
                            <p class="sol-card-desc">Protect your valuable possessions with discrete GPS tracking</p>
                            <ul class="sol-features list-unstyled">
                                <li>Small, concealable GPS trackers for valuables</li>
                                <li>Instant alerts when assets are moved unexpectedly</li>
                                <li>Long battery life with power-saving modes</li>
                                <li>Recovery assistance and location history</li>
                            </ul>
                            <div class="sol-keywords">
                                <span class="text-muted small d-block mb-2">Keywords: </span>
                                <span class="sol-keyword">asset GPS tracker</span>
                                <span class="sol-keyword">valuable tracking device</span>
                                <span class="sol-keyword">theft recovery GPS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4">
                            <div class="sol-image-container">
                                <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e" alt="Valuable Asset Tracking" class="sol-image">
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
                        <h2 class="sol-card-title text-white">Ready to Secure What Matters Most?</h2>
                        <p class="text-white mb-4">Experience peace of mind with our reliable, affordable GPS tracking solutions.</p>
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
