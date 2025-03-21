<?php

get_header();
?>

<section id="hero">
    <div class="text">
        <h1>Revolutionize Your Business with CRM Pro</h1>
        <p>Manage your customers, boost sales, and grow your business with our powerful CRM software.</p>
        <div class="buttons">
            <a href="#contact" class="button">Get Started</a>
            <a href="#features" class="button">Features</a>
        </div>
    </div>
    <div class="image">
        <img src="<?= esc_url(get_template_directory_uri() . '/assets/images/hero.webp'); ?>" alt="">
    </div>
</section>

<section id="features">
    <div class="heading">
        <h2>Key Features</h2>
    </div>
    <div class="feature-list">
        <div class="item">
            <h3>Customer Management</h3>
            <p>Easily manage all your customer data in one place.</p>
        </div>
        <div class="item">
            <h3>Sales Automation</h3>
            <p>Automate repetitive tasks and focus on closing deals.</p>
        </div>
        <div class="item">
            <h3>Analytics & Reporting</h3>
            <p>Get insights into your business performance with detailed reports.</p>
        </div>
        <div class="item">
            <h3>Email Integration</h3>
            <p>Sync with Gmail, Outlook, or other email providers for seamless communication.</p>
        </div>
        <div class="item">
            <h3>Lead Tracking</h3>
            <p>Track leads through the sales pipeline with real-time updates.</p>
        </div>
        <div class="item">
            <h3>Document Management</h3>
            <p>Store and organize important documents related to clients and deals.</p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="upper">
        <h2>Get Started Today</h2>
        <p>Sign up for a free trial and see how CRM Pro can help your business grow.</p>
    </div>
    <div class="form">
        <form id="lead-form">
            <input type="text" id="Fname" name="Fname" placeholder="First Name" required>
            <input type="text" id="Lname" name="Lname" placeholder="Last Name" required>
            <input type="email" id="email" name="email" placeholder="E-mail">
            <input type="text" id="mobile" name="mobile" placeholder="Phone Number">
            <button type="submit" class="form-button">Request Free Trial</button>
        </form>
        <p class="status"></p>
    </div>
</section>

<?php get_footer();