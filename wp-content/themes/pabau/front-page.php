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
            <h3></h3>
            <p></p>
        </div>
    </div>
</section>

<section id="contact">
    <div class="upper">
        <h2>Get Started Today</h2>
        <p>Sign up for a free trial and see how CRM Pro can help your business grow.</p>
    </div>
    <div class="form">
        <form action="">
            <input type="text" id="first-name" name="Fname" placeholder="First Name" required>
            <input type="text" id="last-name" name="Lname" placeholder="Last Name" required>
            <input type="text" id="mobile" name="mobile" placeholder="Phone Number">
            <input type="text" id="country" name="country" placeholder="Country">
            <button type="submit" class="form-button">Request Free Trial</button>
        </form>
    </div>
</section>

<?php get_footer();