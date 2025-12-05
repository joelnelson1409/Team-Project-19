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