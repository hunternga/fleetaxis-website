<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Products - FleetAxis<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="<?= base_url('assets/css/solutions-specific.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/products-specific.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <!-- Products Hero Section -->
    <section class="sol-hero py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <h1 class="fw-bold text-dark mb-3">Fleet Management Hardware</h1>
                    <p class="lead mb-0">Premium products for effective fleet tracking and management</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Product Categories Section -->
    <section class="py-4">
        <div class="container">            <div class="row">
                <div class="col-lg-12">
                    <div class="product-categories">
                        <a href="#all-products" class="product-category-link active" data-category="all">All Products</a>
                        <a href="#all-products" class="product-category-link" data-category="gps-tracker">GPS Trackers</a>
                        <a href="#all-products" class="product-category-link" data-category="dashcam">Dashcams</a>
                        <a href="#all-products" class="product-category-link" data-category="tyre-accessory">Tyre Accessories</a>
                        <a href="#all-products" class="product-category-link" data-category="car-adapter">Car Adapters</a>
                        <a href="#all-products" class="product-category-link" data-category="gps-accessory">GPS Accessories</a>
                    </div>
                </div>
            </div>
        </div>    </section>
    
    <!-- Products Grid Section -->
    <section id="all-products" class="py-4 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2">Our Products</h2>
                <p class="mx-auto" style="max-width: 700px;">Discover our premium range of fleet management hardware and accessories.</p>            </div>
            
            <div class="product-grid">
                <!-- Product 1: FleetTrack Pro Wired GPS Tracker -->
                <div class="product-card" data-category="gps-tracker">
                    <a href="#demo" class="product-card-link" data-product="FleetTrack Pro Wired GPS Tracker">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 41%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/4_12738d87-b8b4-48c8-811a-1ac93acf0295.png?v=1738053109&width=360" 
                                 alt="Fleettrack Pro™ Wired GPS Tracker" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack Pro™ Wired GPS Tracker | For Car, Bike, Scooter, Truck, Bus with 15+ Premium Features</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 4,699.00</span>
                            <span class="product-sale-price">From Rs. 2,749.00</span>
                        </div>
                    </a>
                </div>                <!-- Product 2: FleetTrack OBD GPS Tracker -->
                <div class="product-card" data-category="gps-tracker">
                    <a href="#demo" class="product-card-link" data-product="FleetTrack OBD GPS Tracker">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 60%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/obd_5.png?v=1748252298&width=360" 
                                 alt="FleetTrack OBD GPS Tracker for Car" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">FleetTrack OBD GPS Tracker for Car | 1 Yr Free App & SIM | Real-Time Location & Geofence Alerts</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 9,999.00</span>
                            <span class="product-sale-price">Rs. 3,999.00</span>
                        </div>
                    </a>
                </div>                <!-- Product 3: Fleettrack Go Wireless GPS Tracker -->
                <div class="product-card" data-category="gps-tracker">
                    <a href="#demo" class="product-card-link" data-product="Fleettrack Go Wireless GPS Tracker">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 43%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/12_19.png?v=1748252336&width=360" 
                                 alt="Fleettrack Go Wireless GPS Tracker" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack Go Wireless GPS Tracker | 10000mAh Battery | Magnetic Base for Easy Installation</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 6,999.00</span>
                            <span class="product-sale-price">From Rs. 3,999.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 4: Fleettrack Shield Waterproof Tracker -->
                <div class="product-card" data-category="gps-tracker">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-soldout-badge">SOLD OUT</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/2_8fd7f5a2-d946-437b-87a8-90fc7f7fd1a8.png?v=1738053084&width=360" 
                                 alt="Fleettrack Shield™ Waterproof Wired GPS Tracker" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack Shield™ Waterproof Wired GPS Tracker | For Car, Bike, Scooter, Truck, Bus</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 6,990.00</span>
                            <span class="product-sale-price">From Rs. 2,999.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 5: Fleettrack Dual Dash Cam -->
                <div class="product-card" data-category="dashcam">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 35%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/1_360ce236-e9da-4f83-852b-11c45474c3cd.png?v=1720776551&width=360" 
                                 alt="Fleettrack Dual Dash Cam" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack Dual Dash Cam 24x7 Remote Video Monitoring | 2-Way Voice Calling | Live Tracking</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 19,999.00</span>
                            <span class="product-sale-price">Rs. 12,999.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 6: Fleettrack Dual Channel Car DashCam -->
                <div class="product-card" data-category="dashcam">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 50%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/1_f6c47c40-d936-4e10-97b4-a3f828796678.png?v=1736512324&width=360" 
                                 alt="Fleettrack Dual Channel Car DashCam" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack Dual Channel Car DashCam | 4K Front, 1080p Rear | Night Vision | Voice Control</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 14,999.00</span>
                            <span class="product-sale-price">From Rs. 7,499.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 7: Fleettrack DashCam for Car -->
                <div class="product-card" data-category="dashcam">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 71%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/3_c37f9194-4377-46b0-82ac-b4dffe5e92c2.png?v=1736512423&width=360" 
                                 alt="Fleettrack DashCam for Car" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack DashCam for Car | Real 2K with HDR Imaging | GPS Logger | Night Owl Vision</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 12,999.00</span>
                            <span class="product-sale-price">From Rs. 3,799.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 8: Fleettrack 4G Single Dash Cam -->
                <div class="product-card" data-category="dashcam">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 47%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/5_7b508590-838a-4987-a3e5-10d9de9b94c8.png?v=1740384160&width=360" 
                                 alt="Fleettrack 4G Single Dash Cam" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack 4G Single Dash Cam | 2-Way Voice Calling | Live Tracking | Infra Red Night Vision</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 14,999.00</span>
                            <span class="product-sale-price">Rs. 7,999.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 9: Fleettrack Connect Pro 3-in-1 CarPlay Adapter -->
                <div class="product-card" data-category="car-adapter">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 50%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/Untitled_design_-_2025-03-30T204312.350.png?v=1743347655&width=360" 
                                 alt="Fleettrack Connect Pro™ 3-in-1 CarPlay Adapter" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack Connect Pro™ 3-in-1 CarPlay Adapter | Wireless CarPlay & Android Auto | Android 10</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 11,999.00</span>
                            <span class="product-sale-price">Rs. 5,999.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 10: Fleettrack Connect 2-in-1 CarPlay Adapter -->
                <div class="product-card" data-category="car-adapter">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 50%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/1_78015dd5-eabc-4a9f-aa58-3aa41f95a848.png?v=1738921563&width=360" 
                                 alt="Fleettrack Connect™ 2-in-1 CarPlay Adapter" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack Connect™ 2-in-1 CarPlay Adapter | Wireless CarPlay & Android Auto</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 5,999.00</span>
                            <span class="product-sale-price">Rs. 2,999.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 11: Fleettrack Digital Tyre Inflator -->
                <div class="product-card" data-category="tyre-accessory">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 45%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/1_d2e34205-4a5f-4a01-8e74-7ff03b504ca2.png?v=1729151392&width=360" 
                                 alt="Fleettrack Digital Tyre Inflator" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack Digital Tyre Inflator with Dual Display & Auto Shut-Off | Multiple Nozzle Attachment</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 5,499.00</span>
                            <span class="product-sale-price">Rs. 2,999.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 12: Fleettrack AirCheck™ Digital Tyre Pressure Gauge -->
                <div class="product-card" data-category="tyre-accessory">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 50%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/12_5.png?v=1738243882&width=360" 
                                 alt="Fleettrack AirCheck™ Digital Tyre Pressure Gauge" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack AirCheck™ - Digital Tyre Pressure Gauge | Accurate Readings in PSI, Bar, kPa, kg/cm²</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 1,999.00</span>
                            <span class="product-sale-price">Rs. 999.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 13: 12V Relay for GPS Tracker -->
                <div class="product-card" data-category="gps-accessory">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 50%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/1_49d3f477-0b77-46ca-bd5f-1d0cf27051b6.png?v=1707834754&width=360" 
                                 alt="12V Relay for GPS Tracker" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">12V Relay for GPS Tracker</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 400.00</span>
                            <span class="product-sale-price">Rs. 200.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 14: 12V Relay Bike Couplers for GPS Trackers -->
                <div class="product-card" data-category="gps-accessory">
                    <a href="#" class="product-card-link">
                        <div class="product-badge">
                            <span class="product-sale-badge">Save 50%</span>
                        </div>
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/Coupler_BENEFITS.png?v=1718451419&width=360" 
                                 alt="12V Relay Bike Couplers for GPS Trackers" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">12V Relay Bike Couplers for GPS Trackers</h3>
                        <div class="product-price-container">
                            <span class="product-regular-price">Rs. 1,000.00</span>
                            <span class="product-sale-price">Rs. 500.00</span>
                        </div>
                    </a>
                </div>
                
                <!-- Product 15: Fleettrack Tag Smart Bluetooth Tracker -->
                <div class="product-card" data-category="gps-tracker">
                    <a href="#" class="product-card-link">
                        <div class="product-image-container">
                            <img src="https://fleettrack.in/cdn/shop/files/4_fc877668-6138-419a-a0ea-2676b89911c3.png?v=1727334719&width=360" 
                                 alt="Fleettrack Tag Smart Bluetooth Tracker" class="product-image">
                            <div class="product-image-overlay">
                                <div class="product-image-zoom">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-vendor">Vendor: FleetAxis Store</div>
                        <h3 class="product-title">Fleettrack Tag | BT Tracker | Find Keys, Wallets, Luggage, Pets, Gadgets | Loud 98 dB Sound</h3>
                        <div class="product-price-container">
                            <span class="product-sale-price">Rs. 1,199.00</span>                        </div>                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Demo Request Section -->
    <section class="py-5 bg-light" id="demo">
        <div class="container">
            <div class="expert-contact p-4">
                <div class="row align-items-center g-3">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-2">Request a Product Demo</h2>
                        <p class="mb-3">Schedule a live demonstration with our product specialists to see our fleet management solutions in action.</p>
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3">
                                <i class="fas fa-headset fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Personalized Demo</h5>
                                <p class="mb-0">Get a customized walkthrough tailored to your business needs</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form class="demo-request-form" id="demoRequestForm">
                            <div class="mb-2">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="mb-2">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="mb-2">
                                <input type="tel" class="form-control" placeholder="Your Phone Number" required>
                            </div>                            <div class="mb-2">
                                <select class="form-select" id="productInterest" name="productInterest" required>
                                    <option value="" selected disabled>I'm interested in...</option>
                                    <option value="gps-tracker">GPS Trackers</option>
                                    <option value="dashcam">Dashcams</option>
                                    <option value="tyre-accessory">Tyre Accessories</option>
                                    <option value="car-adapter">Car Adapters</option>
                                    <option value="gps-accessory">GPS Accessories</option>
                                    <option value="all">All Products</option>
                                </select>
                            </div>
                            <input type="hidden" id="specificProduct" name="specificProduct">
                            <div class="mb-2">
                                <textarea class="form-control" rows="2" placeholder="Tell us about your fleet size and requirements"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-pill px-4 py-2 w-100">Schedule Demo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2">Best Selling Products</h2>
                <p class="mx-auto" style="max-width: 700px;">Our most popular products trusted by fleet managers across the country</p>
            </div>
            
            <div class="row g-3">
                <!-- Featured Product 1 -->
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="product-badge position-absolute" style="top: 20px; right: 20px;">
                            <span class="badge bg-danger px-3 py-2">Save 60%</span>
                        </div>
                        <div class="text-center mb-4">
                            <div class="product-image-container mx-auto" style="max-width: 200px;">
                                <img src="https://fleettrack.in/cdn/shop/files/obd_5.png?v=1748252298&width=360" 
                                     alt="FleetTrack OBD GPS Tracker" class="product-image img-fluid">
                            </div>
                            <h3 class="pricing-title">FleetTrack OBD GPS Tracker</h3>
                            <div class="pricing-price">Rs. 3,999<span class="pricing-duration"></span></div>
                            <p class="text-muted"><del>Rs. 9,999</del> | Easy Plug & Play</p>
                        </div>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> 1 Yr Free App & SIM</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Real-time tracking</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Voice monitoring</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Geofence alerts</li>                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Driving history</li>
                        </ul>
                        <div class="text-center">
                            <a href="#demo" class="btn btn-primary rounded-pill px-4 py-2">Buy Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Product 2 -->
                <div class="col-lg-4">
                    <div class="pricing-card featured">
                        <div class="badge bg-primary position-absolute" style="top: 20px; right: 20px;">Best Seller</div>
                        <div class="text-center mb-4">
                            <div class="product-image-container mx-auto" style="max-width: 200px;">
                                <img src="https://fleettrack.in/cdn/shop/files/3_c37f9194-4377-46b0-82ac-b4dffe5e92c2.png?v=1736512423&width=360" 
                                     alt="Fleettrack DashCam for Car" class="product-image img-fluid">
                            </div>
                            <h3 class="pricing-title">DashCam for Car</h3>
                            <div class="pricing-price">Rs. 3,799<span class="pricing-duration"></span></div>
                            <p class="text-muted"><del>Rs. 12,999</del> | Save 71%</p>
                        </div>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Real 2K with HDR Imaging</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> F1.8 Large Aperture</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> GPS Logger</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Night Owl Vision</li>                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Voice Control & WiFi</li>
                        </ul>
                        <div class="text-center">
                            <a href="#demo" class="btn btn-primary rounded-pill px-4 py-2">Buy Now</a>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Product 3 -->
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <div class="product-badge position-absolute" style="top: 20px; right: 20px;">
                            <span class="badge bg-danger px-3 py-2">Save 41%</span>
                        </div>
                        <div class="text-center mb-4">
                            <div class="product-image-container mx-auto" style="max-width: 200px;">
                                <img src="https://fleettrack.in/cdn/shop/files/4_12738d87-b8b4-48c8-811a-1ac93acf0295.png?v=1738053109&width=360" 
                                     alt="Fleettrack Pro™ Wired GPS Tracker" class="product-image img-fluid">
                            </div>
                            <h3 class="pricing-title">Fleettrack Pro™ GPS Tracker</h3>
                            <div class="pricing-price">Rs. 2,749<span class="pricing-duration"></span></div>
                            <p class="text-muted"><del>Rs. 4,699</del> | For Car, Bike, Truck</p>
                        </div>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Real-time tracking</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Engine on/off detection</li>                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Ignition alerts</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> Geofence control</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i> 15+ Premium features</li>
                        </ul>
                        <div class="text-center">
                            <a href="#demo" class="btn btn-outline-primary rounded-pill px-4 py-2">Buy Now</a>                        </div>
                    </div>
                </div>
            </div>
        </div>    </section>
    
    <!-- Product Call-to-Action Section -->
    <section class="py-5">
        <div class="container">
            <div class="sol-card" style="background: linear-gradient(135deg, #007bff, #0056b3);">
                <div class="row g-0 align-items-center">                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="p-4">
                            <img src="https://img.freepik.com/free-vector/gps-tracking-system-realistic-composition-with-satellite-tracking-map-location-car-3d-illustration_1284-56907.jpg" class="img-fluid rounded" alt="Fleet Management Solutions" style="max-height: 260px; object-fit: cover; width: 100%;">
                        </div>
                    </div>
                    <div class="col-lg-8 text-center text-lg-start p-4 py-lg-5">
                        <h2 class="sol-card-title text-white mb-3">Upgrade Your Fleet with FleetAxis</h2>
                        <p class="text-white mb-4 lead">Experience premium fleet management products that deliver real business value:</p>
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 bg-white text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-tachometer-alt"></i>
                                    </div>
                                    <div class="text-white">Improved Fleet Efficiency</div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 bg-white text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="text-white">Reduced Operational Costs</div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 bg-white text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <div class="text-white">Enhanced Vehicle Security</div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="me-3 bg-white text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                    <div class="text-white">Real-time Fleet Visibility</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3">
                            <a href="#demo" class="btn btn-light rounded-pill px-4 py-2">Request Demo</a>
                            <a href="#all-products" class="btn btn-outline-light rounded-pill px-4 py-2">View Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all filter buttons and product cards
            const filterButtons = document.querySelectorAll('.product-category-link');
            const productCards = document.querySelectorAll('.product-card');
            
            // Add click event listener to each filter button
            filterButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Get the category value from data-category attribute
                    const filterValue = this.getAttribute('data-category');
                    
                    // Show/hide products based on category
                    productCards.forEach(card => {
                        if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
              // Demo request form handling
            const demoForm = document.getElementById('demoRequestForm');
            const specificProductField = document.getElementById('specificProduct');
            const productInterestSelect = document.getElementById('productInterest');
            
            // Handle product card clicks to pre-populate the demo form
            const productLinks = document.querySelectorAll('.product-card-link');
            productLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const productName = this.getAttribute('data-product');
                    if (productName && specificProductField) {
                        specificProductField.value = productName;
                    }
                    
                    const category = this.closest('.product-card').getAttribute('data-category');
                    if (category && productInterestSelect) {
                        // Set the product interest dropdown to match the product category
                        for (let i = 0; i < productInterestSelect.options.length; i++) {
                            if (productInterestSelect.options[i].value === category) {
                                productInterestSelect.selectedIndex = i;
                                break;
                            }
                        }
                    }
                });
            });
            
            if (demoForm) {
                demoForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // In a real implementation, you would send the form data to a server here
                    
                    // Clear form fields
                    this.reset();
                    
                    // Show success message
                    const formContainer = this.parentElement;
                    const successMessage = document.createElement('div');
                    successMessage.className = 'alert alert-success';
                    successMessage.innerHTML = '<strong>Thank you!</strong> Your demo request has been submitted. Our team will contact you shortly.';
                    
                    formContainer.innerHTML = '';
                    formContainer.appendChild(successMessage);
                    
                    // Scroll to the success message
                    successMessage.scrollIntoView({ behavior: 'smooth' });
                });
            }
        });
    </script>
<?= $this->endSection() ?>
