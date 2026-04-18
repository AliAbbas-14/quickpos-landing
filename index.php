<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS – Smart POS System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">QuickPOS</div>
        <nav>
            <a href="#">Features</a>
            <a href="#">Pricing</a>
            <a href="#">Contact</a>
        </nav>
        <a href="#" class="signup">Sign Up</a>
    </header>
        <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>The Last POS System You'll Ever Need</h1>
            <p>Fast, reliable, and easy-to-use point of sale for modern businesses.</p>
            <a href="#" class="btn-hero">Get Started for Free</a>
        </div>
        <div class="hero-image">
            <img src="https://placehold.co/500x400/2c3e66/white?text=POS+Mockup" alt="POS Software Mockup">
        </div>
    </section>
        <!-- Features Section -->
    <section class="features" id="features">
        <h2>Why Choose QuickPOS?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">📦</div>
                <h3>Inventory Management</h3>
                <p>Track stock in real-time, set low-stock alerts, and manage suppliers effortlessly.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Sales Analytics</h3>
                <p>Detailed reports, daily sales summaries, and performance insights to grow your business.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔌</div>
                <h3>Easy Integration</h3>
                <p>Seamlessly connect with accounting, e-commerce, and payment gateways.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">☁️</div>
                <h3>Cloud Backup</h3>
                <p>Automatic backups, secure data, and access from anywhere.</p>
            </div>
        </div>
    </section>
        <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <h2>Simple, Transparent Pricing</h2>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Basic</h3>
                <div class="price">$29<span>/month</span></div>
                <ul>
                    <li>✓ Up to 500 transactions/month</li>
                    <li>✓ Basic inventory management</li>
                    <li>✓ Email support</li>
                    <li>✗ Advanced analytics</li>
                </ul>
                <a href="#" class="btn-pricing">Get Basic</a>
            </div>
            <div class="pricing-card popular">
                <div class="popular-badge">Most Popular</div>
                <h3>Pro</h3>
                <div class="price">$79<span>/month</span></div>
                <ul>
                    <li>✓ Unlimited transactions</li>
                    <li>✓ Advanced inventory & analytics</li>
                    <li>✓ Priority support</li>
                    <li>✓ Integration with 10+ apps</li>
                </ul>
                <a href="#" class="btn-pricing">Get Pro</a>
            </div>
            <div class="pricing-card">
                <h3>Enterprise</h3>
                <div class="price">Custom</div>
                <ul>
                    <li>✓ Everything in Pro</li>
                    <li>✓ Dedicated account manager</li>
                    <li>✓ Custom integrations</li>
                    <li>✓ 99.9% SLA guarantee</li>
                </ul>
                <a href="#" class="btn-pricing">Contact Sales</a>
            </div>
        </div>
    </section>
        <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Get In Touch</h2>
        <p>Have questions? We'd love to hear from you.</p>
        <form action="contact.php" method="POST" class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit" name="submit">Send Message</button>
        </form>
    </section>
        <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <h3>QuickPOS</h3>
                <p>The smartest POS system for modern businesses.</p>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <a href="#">Features</a>
                <a href="#">Pricing</a>
                <a href="#">Contact</a>
            </div>
            <div class="footer-social">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#">📘 Facebook</a>
                    <a href="#">🐦 Twitter</a>
                    <a href="#">📸 Instagram</a>
                    <a href="#">🔗 LinkedIn</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 QuickPOS. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
