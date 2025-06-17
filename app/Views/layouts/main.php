<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?= $this->renderSection('title') ?> - FleetAxis</title>
    
    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <?= $this->renderSection('styles') ?>
</head>
<body>
    <!-- Header -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="<?= base_url() ?>">
                <div class="brand-logo bg-primary text-white d-flex align-items-center justify-content-center"
                    style="width:40px; height:40px; font-weight:bold; border-radius:8px;">
                    <i class="fas fa-truck-moving"></i>
                </div>
                <span class="ms-2 fw-bold">FleetAxis</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>            <div class="collapse navbar-collapse" id="navbarNav">                <ul class="navbar-nav ms-auto align-items-center">                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?= base_url('solutions') ?>" id="solutionsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Solutions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="solutionsDropdown">
                            <li><a class="dropdown-item" href="<?= base_url('solutions/enterprise') ?>">Enterprise Solutions</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('solutions/individual') ?>">Individual Solutions</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('solutions/industry') ?>">Industry Solutions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('features') ?>">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('products') ?>">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a href="<?= base_url('contact#demo') ?>" class="btn btn-primary rounded-pill px-4">
                            Request Demo
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer --> 
   <footer class="footer bg-dark py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4">
                <!-- Company Info -->
                <div class="col">
                    <div class="footer-brand">
                        <div class="d-flex align-items-center mb-4">
                            <div class="brand-logo bg-white text-primary d-flex align-items-center justify-content-center"
                                style="width:48px; height:48px; font-weight:bold; border-radius:12px;">
                                <i class="fas fa-truck-moving"></i>
                            </div>
                            <h3 class="ms-3 mb-0 text-white h2">FleetAxis</h3>
                        </div>
                        <p class="text-light mb-4">Transform your fleet operations with our innovative tracking solutions. Experience the future of fleet management today.</p>                        <div class="social-links d-flex gap-3">
                            <a href="https://linkedin.com/company/fleetaxis" class="social-link" target="_blank" rel="noopener">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://twitter.com/fleetaxis" class="social-link" target="_blank" rel="noopener">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://facebook.com/fleetaxis" class="social-link" target="_blank" rel="noopener">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com/fleetaxis" class="social-link" target="_blank" rel="noopener">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Solutions -->
                <div class="col">
                    <h5 class="text-white mb-4">Solutions</h5>                    <ul class="footer-links list-unstyled">
                        <li><a href="<?= base_url('solutions/enterprise') ?>">Enterprise Solutions</a></li>
                        <li><a href="<?= base_url('solutions/individual') ?>">Individual Solutions</a></li>
                        <li><a href="<?= base_url('solutions/industry') ?>">Industry Solutions</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div class="col">
                    <h5 class="text-white mb-4">Company</h5>                    <ul class="footer-links list-unstyled">
                        <li><a href="<?= base_url('features') ?>">Features</a></li>
                        <li><a href="<?= base_url('products') ?>">Products</a></li>
                        <li><a href="<?= base_url('about') ?>">About Us</a></li>
                        <li><a href="<?= base_url('careers') ?>">Careers</a></li>
                        <li><a href="<?= base_url('contact') ?>">Contact</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div class="col">
                    <h5 class="text-white mb-4">Resources</h5>                    <ul class="footer-links list-unstyled">
                        <li><a href="<?= base_url('help') ?>">Help Center</a></li>
                        <li><a href="<?= base_url('docs') ?>">Documentation</a></li>
                        <li><a href="<?= base_url('api') ?>">API Reference</a></li>
                        <li><a href="<?= base_url('status') ?>">Status Page</a></li>
                        <li><a href="<?= base_url('case-studies') ?>">Case Studies</a></li>
                        <li><a href="<?= base_url('blog') ?>">Blog</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="col">
                    <h5 class="text-white mb-4">Stay Connected</h5>
                    <p class="text-light mb-4">Subscribe to our newsletter for updates and insights.</p>                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email address">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <hr class="border-secondary my-4">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p class="mb-0 text-light">&copy; 2025 FleetAxis. All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline text-center text-md-end mb-0">                            <li class="list-inline-item">
                                <a href="<?= base_url('terms') ?>" class="text-light text-decoration-none">Terms</a>
                            </li>
                            <li class="list-inline-item ms-3">
                                <a href="<?= base_url('privacy') ?>" class="text-light text-decoration-none">Privacy</a>
                            </li>
                            <li class="list-inline-item ms-3">
                                <a href="<?= base_url('cookies') ?>" class="text-light text-decoration-none">Cookies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
