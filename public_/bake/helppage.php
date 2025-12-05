<?php
// help.php - Bakes & Cakes Help Page
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Help & FAQ | Bakes & Cakes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="light">

<header class="site-header">
    <div class="logo-area">
        <img src="img/logo.png" alt="Bakes & Cakes logo" class="logo">
        <div class="brand-text">
            <h1>Bakes & Cakes</h1>
            <p class="tagline">Your home for all your bakes and cakes</p>
        </div>
    </div>

       <nav class="main-nav">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="loginpage.php">Login</a></li>
            <li class="has-dropdown">
                <a href="categories.php">Categories</a>
                <ul class="dropdown">
                    <li><a href="products.php?category=cakes">Cakes</a></li>
                    <li><a href="products.php?category=cookies">Cookies</a></li>
                    <li><a href="products.php?category=pastries">Pastries</a></li>
                    <li><a href="products.php?category=bread">Bread</a></li>
                </ul>
            </li>
            <li><a href="basket.php">Basket</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="help.php" class="active">Help</a></li>
        </ul>
    </nav>

    <button id="theme-toggle" aria-label="Toggle light or dark mode">
       Dark mode
    </button>
</header>

<main>
    <section class="section">
        <h2>Help & Frequently Asked Questions</h2>
        <p class="section-intro">
            Find answers to common questions about ordering, delivery, allergies, and more.
        </p>
    </section>

    <section class="section section-alt">
        <h3>Ordering & Payment</h3>
        <div class="faq-grid">
            <div class="faq-item">
                <h4>How do I place an order?</h4>
                <p>
                    Browse our products, add items to your basket, and proceed to checkout. 
                    You'll need to create an account or log in to complete your purchase.
                </p>
            </div>

            <div class="faq-item">
                <h4>What payment methods do you accept?</h4>
                <p>
                    We accept all major credit and debit cards.
                </p>
            </div>

            <div class="faq-item">
                <h4>Can I modify or cancel my order?</h4>
                <p>
                    Orders can be modified or cancelled within 2 hours of placing them. 
                    Please contact us immediately via the <a href="contact.php">Contact page</a> if you need to make changes.
                </p>
            </div>

            <div class="faq-item">
                <h4>Do you offer gift cards?</h4>
                <p>
                    Yes! Gift cards are available in various denominations. Contact us to purchase a gift card for your loved ones.
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <h3>Delivery & Collection</h3>
        <div class="faq-grid">
            <div class="faq-item">
                <h4>What are your delivery areas?</h4>
                <p>
                    We currently deliver within a 10-mile radius of Birmingham city centre. 
                    Enter your postcode at checkout to check if we deliver to your area.
                </p>
            </div>

            <div class="faq-item">
                <h4>How much is delivery?</h4>
                <p>
                    Delivery costs £3.99 for orders under £25, and is free for orders over £25.
                </p>
            </div>

            <div class="faq-item">
                <h4>When will my order arrive?</h4>
                <p>
                    Standard delivery takes 1-2 business days. You can choose a specific delivery date at checkout. 
                    Same-day delivery is available for orders placed before 10am.
                </p>
            </div>
        </div>
    </section>

     <section class="section section-alt">
        <h3>Allergies & Dietary Requirements</h3>
        <div class="faq-grid">
            <div class="faq-item">
                <h4>Do you offer gluten-free products?</h4>
                <p>
                    Yes! Look for the <span class="badge gluten-free">Gluten free</span> badge on product pages. 
                    You can also filter products by dietary requirements.
                </p>
            </div>

            <div class="faq-item">
                <h4>How do you prevent cross-contamination?</h4>
                <p>
                    Our gluten-free products are prepared in a dedicated area with separate equipment. 
                    However, our kitchen does handle allergens, so please contact us if you have severe allergies.
                </p>
            </div>

            <div class="faq-item">
                <h4>Can I request custom allergen-free items?</h4>
                <p>
                    We're happy to discuss custom orders! Use our <a href="contact.php">Contact form</a> 
                    to tell us about your requirements, and we'll see what we can do.
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <h3>Product Information</h3>
        <div class="faq-grid">
            <div class="faq-item">
                <h4>How long do your products stay fresh?</h4>
                <p>
                    Most items stay fresh for 3-5 days when stored properly. 
                    Specific storage instructions are included with your order.
                </p>
            </div>

            <div class="faq-item">
                <h4>Can I freeze your baked goods?</h4>
                <p>
                    Yes! Most of our products freeze well for up to 3 months. 
                    We recommend defrosting at room temperature before enjoying.
                </p>
            </div>

            <div class="faq-item">
                <h4>Do you use organic ingredients?</h4>
                <p>
                    We use locally sourced ingredients where possible and are committed to quality. 
                    Specific ingredient information is available on each product page.
                </p>
            </div>

            <div class="faq-item">
                <h4>Can I see the nutritional information?</h4>
                <p>
                    Nutritional information is available on request. 
                    Please contact us with the specific product names you're interested in.
                </p>
            </div>
        </div>
    </section>

      <section class="section section-alt">
        <h3>Account & Registration</h3>
        <div class="faq-grid">
            <div class="faq-item">
                <h4>Do I need an account to order?</h4>
                <p>
                    Yes, you need to <a href="register.php">create an account</a> to place orders. 
                    This helps us track your order history and save your preferences.
                </p>
            </div>

            <div class="faq-item">
                <h4>I forgot my password. What should I do?</h4>
                <p>
                    Click the "Forgot your password?" link on the <a href="loginpage.php">login page</a>. 
                    You'll receive an email with instructions to reset your password.
                </p>
            </div>

            <div class="faq-item">
                <h4>How do I update my account details?</h4>
                <p>
                    Log in to your account and visit your account settings page to update your email, 
                    password, or delivery address.
                </p>
            </div>

            <div class="faq-item">
                <h4>Is my information secure?</h4>
                <p>
                    Yes! We use industry-standard security measures to protect your personal information 
                    and payment details. We never share your data with third parties.
                </p>
            </div>
        </div>
    </section>