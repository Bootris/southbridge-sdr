<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Zone - Ultimate Lawyer Theme</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #c0aa83;
            --primary-light: #e9e1d4;
            --secondary: #4a5568;
            --accent: #2d3748;
            --light: #f9f9f9;
            --dark: #333333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            background-color: var(--light);
            line-height: 1.6;
            overflow-x: hidden;
            /* Prevent horizontal scroll */
        }

        .serif {
            font-family: 'Playfair Display', serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Top Bar */
        .top-bar {
            background-color: #4a5568;
            color: white;
            padding: 8px 0;
            text-align: center;
        }

        .top-bar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .contact-info {
            display: flex;
            align-items: center;
        }

        .contact-info-item {
            display: flex;
            align-items: center;
            margin-right: 20px;
            font-size: 0.9rem;
        }

        .contact-info-item i {
            margin-right: 8px;
        }

        .social-links-top {
            display: flex;
        }

        .social-link-top {
            color: white;
            margin-left: 15px;
            font-size: 0.9rem;
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 100;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-right: 10px;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
        }

        .logo-title {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--accent);
            line-height: 1;
        }

        .logo-subtitle {
            font-size: 0.8rem;
            color: var(--secondary);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--secondary);
            font-weight: 500;
            font-size: 0.9rem;
            text-transform: uppercase;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--primary);
        }

        .cta-button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 10px 20px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            text-transform: uppercase;
            font-size: 0.8rem;
        }

        .cta-button:hover {
            background-color: #b09a73;
        }

        /* Hero Section */
        .hero {
            height: 500px;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1589994965851-a8f479c573a9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 20px;
            width: 100%;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .hero-button {
            padding: 12px 25px;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s;
            text-transform: uppercase;
            font-size: 0.9rem;
            display: inline-block;
            width: 100%;
            text-align: center;
        }

        .hero-button:hover {
            background-color: #b09a73;
        }

        .hero-button.outline {
            background-color: transparent;
            border: 2px solid white;
        }

        .hero-button.outline:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Features Section */
        .features {
            padding: 0;
            padding-top: 5rem;
            position: relative;
            z-index: 10;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .feature-card {
            background-color: white;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background-color: var(--primary-light);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.8rem;
            margin: 0 auto 20px;
        }

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--accent);
        }

        .feature-description {
            color: var(--secondary);
            font-size: 0.9rem;
        }

        /* Practice Areas */
        .practice-areas {
            padding: 80px 0;
            background-color: var(--light);
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--accent);
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary);
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.1rem;
            margin-bottom: 60px;
            color: var(--secondary);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .practice-areas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .practice-area-card {
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .practice-area-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .practice-area-image {
            height: 200px;
            background-color: #e2e8f0;
            background-size: cover;
            background-position: center;
        }

        .practice-area-content {
            padding: 25px;
        }

        .practice-area-title {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--accent);
        }

        .practice-area-description {
            color: var(--secondary);
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .read-more {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .read-more i {
            margin-left: 5px;
            transition: transform 0.3s;
        }

        .read-more:hover i {
            transform: translateX(5px);
        }

        /* Attorneys */
        .attorneys {
            padding: 80px 0;
            background-color: white;
        }

        .attorneys-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .attorney-card {
            text-align: center;
            transition: transform 0.3s;
        }

        .attorney-card:hover {
            transform: translateY(-10px);
        }

        .attorney-image {
            width: 100%;
            height: 300px;
            background-color: #e2e8f0;
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
        }

        .attorney-name {
            font-size: 1.3rem;
            margin-bottom: 5px;
            color: var(--accent);
        }

        .attorney-position {
            color: var(--primary);
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .attorney-description {
            color: var(--secondary);
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .attorney-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .attorney-social a {
            width: 35px;
            height: 35px;
            background-color: var(--primary-light);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s, color 0.3s;
        }

        .attorney-social a:hover {
            background-color: var(--primary);
            color: white;
        }

        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }

        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta-description {
            font-size: 1.1rem;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .cta-button-primary {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 15px 30px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
            text-transform: uppercase;
        }

        .cta-button-primary:hover {
            background-color: #b09a73;
        }

        .cta-button-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
            padding: 15px 30px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
            text-transform: uppercase;
        }

        .cta-button-secondary:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* Footer */
        footer {
            background-color: var(--accent);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .footer-logo-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-right: 10px;
        }

        .footer-logo-text {
            font-weight: 700;
            font-size: 1.5rem;
            color: white;
        }

        .footer-description {
            opacity: 0.7;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .social-link:hover {
            background-color: var(--primary);
        }

        .footer-title {
            font-size: 1.2rem;
            margin-bottom: 20px;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: white;
            opacity: 0.7;
            text-decoration: none;
            transition: opacity 0.3s;
            font-size: 0.9rem;
        }

        .footer-links a:hover {
            opacity: 1;
            color: var(--primary);
        }

        .footer-contact-item {
            display: flex;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .footer-contact-item i {
            margin-right: 10px;
            color: var(--primary);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Mobile Menu - Improved for left side navigation */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--secondary);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 80%;
            /* Reduced width to show as a sidebar */
            height: 100%;
            background-color: white;
            z-index: 1000;
            padding: 20px;
            overflow-y: auto;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            transform: translateX(-100%);
        }

        .mobile-menu.active {
            transform: translateX(0);
            display: block;
        }

        .mobile-menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .mobile-menu-overlay.active {
            display: block;
        }

        .mobile-menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .mobile-menu-close {
            background: none;
            border: none;
            color: var(--secondary);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .mobile-menu-nav ul {
            list-style: none;
            display: block;
        }

        .mobile-menu-nav ul li {
            margin-left: 0;
            margin-bottom: 15px;
        }

        .mobile-menu-nav ul li a {
            text-decoration: none;
            color: var(--secondary);
            font-weight: 500;
            font-size: 1.1rem;
            text-transform: uppercase;
            transition: color 0.3s;
            display: block;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .mobile-menu-nav ul li a:hover {
            color: var(--primary);
        }

        .mobile-menu-cta {
            margin-top: 30px;
            text-align: center;
        }

        /* Enhanced View Services Button */
        .view-services-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 12px 25px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            z-index: 99;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: none;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            50% {
                transform: scale(1.05);
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }
        }

        /* Responsive */
        @media (max-width: 992px) {
            .features-grid {
                grid-template-columns: repeat(1, 1fr);
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .view-services-button {
                display: block;
            }
        }

        @media (max-width: 768px) {
            .top-bar-container {
                flex-direction: column;
                gap: 10px;
            }

            .contact-info {
                flex-direction: column;
                align-items: center;
                gap: 8px;
            }

            .contact-info-item {
                margin-right: 0;
            }

            .social-links-top {
                margin-top: 10px;
            }

            nav {
                display: none;
            }

            .mobile-menu-nav {
                display: block;
            }

            .mobile-menu-toggle {
                display: block;
                order: 3
            }

            .header-container {
                justify-content: space-between;
                padding: 1rem;
                gap: 1rem
            }

            .logo-title {
                font-size: 1.5rem;
            }

            .logo-subtitle {
                font-size: 0.7rem;
            }

            .hero {
                height: 400px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .cta-title {
                font-size: 2rem;
            }

            .hero-buttons {
                flex-direction: column;
                width: 100%;
                max-width: 300px;
                margin-left: auto;
                margin-right: auto;
            }

            .cta-button {
                display: block;
                width: 100%;
                text-align: center;
            }

            /* Make the hero button for View Services more prominent */
            .hero-button.outline {
                background-color: rgba(255, 255, 255, 0.2);
                border: 2px solid var(--primary);
                color: white;
                font-weight: 700;
            }

            .hero-button.outline:hover {
                background-color: var(--primary);
            }
        }

        @media (max-width: 480px) {
            .hero {
                height: 350px;
            }

            .hero-title {
                font-size: 1.8rem;
            }

            .hero-buttons {
                flex-direction: column;
                gap: 10px;
            }

            .cta-buttons {
                flex-direction: column;
                gap: 15px;
                padding: 0 20px;
            }

            .feature-card {
                padding: 30px 20px;
            }

            .feature-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }

            .feature-title {
                font-size: 1.3rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .section-subtitle {
                font-size: 1rem;
                margin-bottom: 40px;
            }
        }
    </style>
</head>

<body>
    <div class="top-bar">
        <div class="container top-bar-container">
            <div class="contact-info">
                <div class="contact-info-item">
                    <i class="fas fa-envelope"></i>
                    <span>{{ __('lawyer.top_bar.contact_info.email') }}</span>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>{{ __('lawyer.top_bar.contact_info.location') }}</span>
                </div>
                <div class="contact-info-item">
                    <i class="fas fa-phone"></i>
                    <span>{{ __('lawyer.top_bar.contact_info.phone') }}</span>
                </div>
            </div>
            <div class="social-links-top">
                <a href="#" class="social-link-top"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-link-top"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-link-top"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" class="social-link-top"><i class="fas fa-rss"></i></a>
            </div>

            <!-- Language switcher -->
            <div class="language-switcher">
                @php
                $currentRoute = request()->route();
                $currentParams = $currentRoute ? $currentRoute->parameters() : [];
                unset($currentParams['locale']); // Remove locale from current params
                @endphp

                <a href="{{ route($currentRoute ? $currentRoute->getName() : 'law', array_merge(['locale' => 'sr'], $currentParams)) }}"
                    class="{{ app()->getLocale() == 'sr' ? 'active' : '' }}"> <span class="flag-icon">🇷🇸</span>
                    <span class="lang-text">SR</span></a> |
                <a href="{{ route($currentRoute ? $currentRoute->getName() : 'law', array_merge(['locale' => 'en'], $currentParams)) }}"
                    class="{{ app()->getLocale() == 'en' ? 'active' : '' }}"> <span class="flag-icon">🇬🇧</span>
                    <span class="lang-text">EN</span></a>
            </div>
        </div>
    </div>

    <header>
        <div class="header-container container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <div class="logo-text">
                    <div class="logo-title">{{ __('lawyer.header.logo.title') }}</div>
                    <div class="logo-subtitle">{{ __('lawyer.header.logo.subtitle') }}</div>
                </div>
            </div>
            <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                <ul>
                    <li><a href="#">{{ __('lawyer.header.nav.home') }}</a></li>
                    <li><a href="#">{{ __('lawyer.header.nav.about') }}</a></li>
                    <li><a href="#practice-areas">{{ __('lawyer.header.nav.practice_areas') }}</a></li>
                    <li><a href="#attorneys">{{ __('lawyer.header.nav.attorneys') }}</a></li>
                    {{-- <li><a href="#">{{ __('lawyer.header.nav.gallery') }}</a></li>
                    <li><a href="#">{{ __('lawyer.header.nav.blog') }}</a></li> --}}
                    <li><a href="#contact">{{ __('lawyer.header.nav.contact') }}</a></li>
                </ul>
            </nav>
            <button class="cta-button">{{ __('lawyer.header.cta_button') }}</button>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay"></div>

    <!-- Mobile Menu - Improved for left side navigation -->
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu-header">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <div class="logo-text">
                    <div class="logo-title">{{ __('lawyer.header.logo.title') }}</div>
                    <div class="logo-subtitle">{{ __('lawyer.header.logo.subtitle') }}</div>
                </div>
            </div>
            <button class="mobile-menu-close" id="mobile-menu-close">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <nav class="mobile-menu-nav">
            <ul>
                <li><a href="#">{{ __('lawyer.header.nav.home') }}</a></li>
                <li><a href="#">{{ __('lawyer.header.nav.about') }}</a></li>
                <li><a href="#practice-areas">{{ __('lawyer.header.nav.practice_areas') }}</a></li>
                <li><a href="#attorneys">{{ __('lawyer.header.nav.attorneys') }}</a></li>
                {{-- <li><a href="#">{{ __('lawyer.header.nav.gallery') }}</a></li>
                <li><a href="#">{{ __('lawyer.header.nav.blog') }}</a></li> --}}
                <li><a href="#contact">{{ __('lawyer.header.nav.contact') }}</a></li>
            </ul>
        </nav>
        <div class="mobile-menu-cta">
            <button class="cta-button">{{ __('lawyer.header.cta_button') }}</button>
        </div>
    </div>

    <!-- Floating View Services Button for Mobile -->
    <a href="#practice-areas" class="view-services-button" id="view-services-button">
        {{ __('lawyer.view_services_button') }}
    </a>

    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title serif">{{ __('lawyer.hero.title') }}</h1>
            <div class="hero-buttons">
                <a href="#" class="hero-button">{{ __('lawyer.hero.buttons.know_more') }}</a>
                <a href="#practice-areas" class="hero-button outline">{{ __('lawyer.hero.buttons.view_services') }}</a>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3 class="feature-title serif">{{ __('lawyer.features.cards.fair_fees.title') }}</h3>
                    <p class="feature-description">{{ __('lawyer.features.cards.fair_fees.description') }}</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-percentage"></i>
                    </div>
                    <h3 class="feature-title serif">{{ __('lawyer.features.cards.free_consultation.title') }}</h3>
                    <p class="feature-description">{{ __('lawyer.features.cards.free_consultation.description') }}</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title serif">{{ __('lawyer.features.cards.quality_representation.title') }}</h3>
                    <p class="feature-description">{{ __('lawyer.features.cards.quality_representation.description') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="practice-areas" id="practice-areas">
        <div class="container">
            <h2 class="section-title serif">{{ __('lawyer.practice_areas.title') }}</h2>
            <p class="section-subtitle">{{ __('lawyer.practice_areas.subtitle') }}</p>

            <div class="practice-areas-grid">
                <div class="practice-area-card">
                    <div class="practice-area-image"
                        style="background-image: url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <div class="practice-area-content">
                        <h3 class="practice-area-title serif">{{ __('lawyer.practice_areas.areas.family_law.title') }}
                        </h3>
                        <p class="practice-area-description">{{ __('lawyer.practice_areas.areas.family_law.description')
                            }}</p>
                        <a href="#" class="read-more">{{ __('lawyer.practice_areas.learn_more') }} <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="practice-area-card">
                    <div class="practice-area-image"
                        style="background-image: url('https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <div class="practice-area-content">
                        <h3 class="practice-area-title serif">{{ __('lawyer.practice_areas.areas.business_law.title') }}
                        </h3>
                        <p class="practice-area-description">{{
                            __('lawyer.practice_areas.areas.business_law.description') }}</p>
                        <a href="#" class="read-more">{{ __('lawyer.practice_areas.learn_more') }} <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="practice-area-card">
                    <div class="practice-area-image"
                        style="background-image: url('https://images.unsplash.com/photo-1601972599720-36938d4ecd31?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <div class="practice-area-content">
                        <h3 class="practice-area-title serif">{{
                            __('lawyer.practice_areas.areas.criminal_defense.title') }}</h3>
                        <p class="practice-area-description">{{
                            __('lawyer.practice_areas.areas.criminal_defense.description') }}</p>
                        <a href="#" class="read-more">{{ __('lawyer.practice_areas.learn_more') }} <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="practice-area-card">
                    <div class="practice-area-image"
                        style="background-image: url('https://images.unsplash.com/photo-1603796846097-bee99e4a601f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <div class="practice-area-content">
                        <h3 class="practice-area-title serif">{{ __('lawyer.practice_areas.areas.personal_injury.title')
                            }}</h3>
                        <p class="practice-area-description">{{
                            __('lawyer.practice_areas.areas.personal_injury.description') }}</p>
                        <a href="#" class="read-more">{{ __('lawyer.practice_areas.learn_more') }} <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="practice-area-card">
                    <div class="practice-area-image"
                        style="background-image: url('https://images.unsplash.com/photo-1575505586569-646b2ca898fc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <div class="practice-area-content">
                        <h3 class="practice-area-title serif">{{ __('lawyer.practice_areas.areas.real_estate_law.title')
                            }}</h3>
                        <p class="practice-area-description">{{
                            __('lawyer.practice_areas.areas.real_estate_law.description') }}</p>
                        <a href="#" class="read-more">{{ __('lawyer.practice_areas.learn_more') }} <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="practice-area-card">
                    <div class="practice-area-image"
                        style="background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <div class="practice-area-content">
                        <h3 class="practice-area-title serif">{{ __('lawyer.practice_areas.areas.employment_law.title')
                            }}</h3>
                        <p class="practice-area-description">{{
                            __('lawyer.practice_areas.areas.employment_law.description') }}</p>
                        <a href="#" class="read-more">{{ __('lawyer.practice_areas.learn_more') }} <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="attorneys" id="attorneys">
        <div class="container">
            <h2 class="section-title serif">{{ __('lawyer.attorneys.title') }}</h2>
            <p class="section-subtitle">{{ __('lawyer.attorneys.subtitle') }}</p>

            <div class="attorneys-grid">
                <div class="attorney-card">
                    <div class="attorney-image"
                        style="background-image: url('https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <h3 class="attorney-name serif">{{ __('lawyer.attorneys.team.john_doe.name') }}</h3>
                    <p class="attorney-position">{{ __('lawyer.attorneys.team.john_doe.position') }}</p>
                    <p class="attorney-description">{{ __('lawyer.attorneys.team.john_doe.description') }}</p>
                    <div class="attorney-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="attorney-card">
                    <div class="attorney-image"
                        style="background-image: url('https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <h3 class="attorney-name serif">{{ __('lawyer.attorneys.team.jane_smith.name') }}</h3>
                    <p class="attorney-position">{{ __('lawyer.attorneys.team.jane_smith.position') }}</p>
                    <p class="attorney-description">{{ __('lawyer.attorneys.team.jane_smith.description') }}</p>
                    <div class="attorney-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="attorney-card">
                    <div class="attorney-image"
                        style="background-image: url('https://images.unsplash.com/photo-1556157382-97eda2f9e2bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <h3 class="attorney-name serif">{{ __('lawyer.attorneys.team.michael_johnson.name') }}</h3>
                    <p class="attorney-position">{{ __('lawyer.attorneys.team.michael_johnson.position') }}</p>
                    <p class="attorney-description">{{ __('lawyer.attorneys.team.michael_johnson.description') }}</p>
                    <div class="attorney-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="attorney-card">
                    <div class="attorney-image"
                        style="background-image: url('https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80');">
                    </div>
                    <h3 class="attorney-name serif">{{ __('lawyer.attorneys.team.sarah_williams.name') }}</h3>
                    <p class="attorney-position">{{ __('lawyer.attorneys.team.sarah_williams.position') }}</p>
                    <p class="attorney-description">{{ __('lawyer.attorneys.team.sarah_williams.description') }}</p>
                    <div class="attorney-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2 class="cta-title serif">{{ __('lawyer.cta.title') }}</h2>
            <p class="cta-description">{{ __('lawyer.cta.description') }}</p>
            <div class="cta-buttons">
                <button class="cta-button-primary">{{ __('lawyer.cta.buttons.schedule') }}</button>
                <button class="cta-button-secondary">{{ __('lawyer.cta.buttons.contact') }}</button>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div>
                    <div class="footer-logo">
                        <div class="footer-logo-icon">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <span class="footer-logo-text">{{ __('lawyer.header.logo.title') }}</span>
                    </div>
                    <p class="footer-description">{{ __('lawyer.footer.description') }}</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="footer-title">{{ __('lawyer.footer.sections.practice_areas.title') }}</h3>
                    <ul class="footer-links">
                        <li><a href="#">{{ __('lawyer.footer.sections.practice_areas.family_law') }}</a></li>
                        <li><a href="#">{{ __('lawyer.footer.sections.practice_areas.business_law') }}</a></li>
                        <li><a href="#">{{ __('lawyer.footer.sections.practice_areas.criminal_defense') }}</a></li>
                        <li><a href="#">{{ __('lawyer.footer.sections.practice_areas.personal_injury') }}</a></li>
                        <li><a href="#">{{ __('lawyer.footer.sections.practice_areas.real_estate_law') }}</a></li>
                        <li><a href="#">{{ __('lawyer.footer.sections.practice_areas.employment_law') }}</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer-title">{{ __('lawyer.footer.sections.quick_links.title') }}</h3>
                    <ul class="footer-links">
                        <li><a href="#">{{ __('lawyer.footer.sections.quick_links.home') }}</a></li>
                        <li><a href="#">{{ __('lawyer.footer.sections.quick_links.about') }}</a></li>
                        <li><a href="#attorneys">{{ __('lawyer.footer.sections.quick_links.attorneys') }}</a></li>
                        <li><a href="#">{{ __('lawyer.footer.sections.quick_links.blog') }}</a></li>
                        <li><a href="#">{{ __('lawyer.footer.sections.quick_links.gallery') }}</a></li>
                        <li><a href="#contact">{{ __('lawyer.footer.sections.quick_links.contact') }}</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer-title">{{ __('lawyer.footer.sections.contact.title') }}</h3>
                    <div class="footer-contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{ __('lawyer.footer.sections.contact.address') }}</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone"></i>
                        <span>{{ __('lawyer.footer.sections.contact.phone') }}</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>{{ __('lawyer.footer.sections.contact.email') }}</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-clock"></i>
                        <span>{{ __('lawyer.footer.sections.contact.hours') }}</span>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} {{ __('lawyer.footer.copyright') }}</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple scroll animation for navigation
            document.querySelectorAll('nav a, .mobile-menu-nav a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId.startsWith('#')) {
                        e.preventDefault();
                        const targetElement = document.querySelector(targetId);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 80,
                                behavior: 'smooth'
                            });
                            
                            // Close mobile menu if open
                            if (mobileMenu.classList.contains('active')) {
                                closeMobileMenu();
                            }
                        }
                    }
                });
            });
            
            // Improved Mobile menu functionality
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuClose = document.getElementById('mobile-menu-close');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
            const viewServicesButton = document.getElementById('view-services-button');
            
            function openMobileMenu() {
                mobileMenu.classList.add('active');
                mobileMenuOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
            
            function closeMobileMenu() {
                mobileMenu.classList.remove('active');
                mobileMenuOverlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
            
            if (mobileMenuToggle && mobileMenu && mobileMenuClose) {
                mobileMenuToggle.addEventListener('click', openMobileMenu);
                
                mobileMenuClose.addEventListener('click', closeMobileMenu);
                
                mobileMenuOverlay.addEventListener('click', closeMobileMenu);
                
                // Close mobile menu when clicking on a link
                document.querySelectorAll('.mobile-menu-nav a').forEach(link => {
                    link.addEventListener('click', closeMobileMenu);
                });
            }
            
            // View Services button scroll
            if (viewServicesButton) {
                viewServicesButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    const practiceAreas = document.getElementById('practice-areas');
                    if (practiceAreas) {
                        window.scrollTo({
                            top: practiceAreas.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            }
    </script>
</body>

</html>