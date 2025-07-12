<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SouthBridge SDR - Scale Your Sales Without Hiring In-House</title>
    <meta name="description" content="Outsource expert SDRs, launch targeted outreach campaigns, and close more U.S. deals — all with one proven partner.">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #2ecc71;
            --primary-dark: #27ae60;
            --primary-light: #e8f8f0;
            --secondary: #333333;
            --accent: #1abc9c;
            --light: #f9f9f9;
            --dark: #333333;
            --gray: #6c757d;
            --gray-light: #e9ecef;
            --white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
            --border-radius: 0.5rem;
            --transition: all 0.3s ease;
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
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Container and Layout */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        @media (min-width: 768px) {
            .container {
                padding: 0 2rem;
            }
        }

        /* Grid System */
        .grid {
            display: grid;
            gap: 2rem;
        }

        .grid-1 { grid-template-columns: 1fr; }
        .grid-2 { grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); }
        .grid-3 { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); }

        @media (min-width: 768px) {
            .md\:grid-2 { grid-template-columns: repeat(2, 1fr); }
            .md\:grid-3 { grid-template-columns: repeat(3, 1fr); }
        }

        /* Flexbox Utilities */
        .flex {
            display: flex;
        }

        .flex-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .flex-between {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .flex-col {
            flex-direction: column;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .items-center {
            align-items: center;
        }

        .gap-4 > * + * {
            margin-left: 1rem;
        }

        .gap-y-2 > * + * {
            margin-top: 0.5rem;
        }

        /* Spacing */
        .section {
            padding: 4rem 0;
        }

        @media (min-width: 768px) {
            .section {
                padding: 6rem 0;
            }
        }

        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-16 { margin-bottom: 4rem; }
        .mt-10 { margin-top: 2.5rem; }
        .mt-16 { margin-top: 4rem; }

        /* Typography */
        .text-center { text-align: center; }
        .text-primary { color: var(--primary); }
        .text-secondary { color: var(--secondary); }
        .text-white { color: var(--white); }
        .text-gray { color: var(--gray); }

        .text-sm { font-size: 0.875rem; }
        .text-base { font-size: 1rem; }
        .text-lg { font-size: 1.125rem; }
        .text-xl { font-size: 1.25rem; }
        .text-2xl { font-size: 1.5rem; }
        .text-3xl { font-size: 1.875rem; }
        .text-4xl { font-size: 2.25rem; }

        @media (min-width: 768px) {
            .md\:text-4xl { font-size: 2.25rem; }
            .md\:text-5xl { font-size: 3rem; }
        }

        @media (min-width: 1024px) {
            .lg\:text-6xl { font-size: 3.75rem; }
        }

        .font-bold { font-weight: 700; }
        .font-semibold { font-weight: 600; }

        /* Backgrounds */
        .bg-white { background-color: var(--white); }
        .bg-light { background-color: var(--light); }
        .bg-primary { background-color: var(--primary); }
        .bg-primary-light { background-color: var(--primary-light); }
        /* Updated flex container for perfect centering */
        .flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .justify-center {
            justify-content: center;
        }

        .items-center {
            align-items: center;
        }

        .gap-4 {
            gap: 1rem;
        }
           /* Enhanced button styles */
           .btn {
            display: inline-block;
            padding: 16px 32px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            text-align: center;
            min-width: 200px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.7);
        }

        .btn-white {
            background-color: var(--white);
            color: var(--primary);
        }

        .btn-white:hover {
            background-color: var(--primary-light);
        }

        /* Cards */
        .card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
            margin-bottom: 2rem; /* Added spacing between cards */
        }

        .card:hover {
            transform: translateY(-0.5rem);
            box-shadow: var(--shadow-lg);
        }

        .card-header {
            height: 0.75rem;
            background-color: var(--primary);
            margin: -2rem -2rem 2rem -2rem;
            border-radius: var(--border-radius) var(--border-radius) 0 0;
        }

        /* Icons */
        .icon-circle {
            width: 4rem;
            height: 4rem;
            background-color: var(--primary-light);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.25rem;
        }

        /* Header */
        .header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .header .container {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: 700;
        }

        .logo i {
            color: var(--primary);
            margin-right: 0.5rem;
        }

        .nav {
            display: none;
        }

        @media (min-width: 768px) {
            .nav {
                display: flex;
                gap: 2rem;
            }
        }

        .nav-link {
            color: var(--secondary);
            font-weight: 500;
            font-size: 0.875rem;
            text-transform: uppercase;
            transition: var(--transition);
        }

        .nav-link:hover {
            color: var(--primary);
        }

        /* Mobile Menu */
        .mobile-toggle {
            display: block;
            background: none;
            border: none;
            color: var(--secondary);
            font-size: 1.5rem;
            cursor: pointer;
        }

        @media (min-width: 768px) {
            .mobile-toggle {
                display: none;
            }
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 80%;
            max-width: 300px;
            height: 100vh;
            background-color: var(--white);
            z-index: 1000;
            padding: 1.5rem;
            transform: translateX(-100%);
            transition: var(--transition);
            box-shadow: var(--shadow-lg);
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        .mobile-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }

        .mobile-overlay.active {
            display: block;
        }

        .mobile-nav {
            margin-top: 2rem;
        }

        .mobile-nav a {
            display: block;
            padding: 1rem 0;
            color: var(--secondary);
            font-weight: 500;
            border-bottom: 1px solid var(--gray-light);
            transition: var(--transition);
        }

        .mobile-nav a:hover {
            color: var(--primary);
        }

        /* Hero Section */
        .hero {
            position: relative;
            color: var(--white);
            padding: 4rem 0;
            min-height: 70vh;
            display: flex;
            align-items: center;
        }

        @media (min-width: 768px) {
            .hero {
                padding: 6rem 0;
                min-height: 80vh;
            }
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0.8;
            z-index: -2;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.8) 0%, rgba(26, 188, 156, 0.8) 100%);
            z-index: -1;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 48rem;
        }

        /* Section Titles */
        .section-title {
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 5rem;
            height: 0.25rem;
            background-color: var(--primary);
        }

        /* Process Steps */
        .process-step {
            display: flex;
            margin-bottom: 2rem;
        }

        .process-number {
            width: 2.5rem;
            height: 2.5rem;
            background-color: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 1rem;
            flex-shrink: 0;
        }

        /* FIXED: About section team box alignment */
        .about-section-content {
            margin-bottom: 2rem;
        }

        .about-section-content h3 {
            color: var(--secondary);
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .about-section-content p {
            color: var(--gray);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        /* FIXED: Team highlight box - now consistent with other sections */
        .team-highlight {
            background-color: var(--primary-light);
            padding: 1.5rem;
            border-radius: var(--border-radius);
            border-left: 4px solid var(--primary);
            margin-top: 1rem;
        }

        .team-highlight h4 {
            color: var(--secondary);
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .team-highlight p {
            color: var(--gray);
            margin-bottom: 0;
        }

        /* FIXED: Service cards check list alignment */
        .service-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1.5rem 0;
        }

        .service-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 0.75rem;
            padding: 0;
        }

        .service-list li:last-child {
            margin-bottom: 0;
        }

        .service-list li i {
            color: var(--primary);
            margin-right: 0.75rem;
            margin-top: 0.125rem;
            flex-shrink: 0;
            font-size: 1rem;
        }

        .service-list li span {
            color: var(--gray);
            line-height: 1.5;
            flex: 1;
        }

        /* FIXED: Pricing card positioning */
        .pricing-card {
            background-color: var(--white);
            padding: 2rem;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
            max-width: 42rem;
            margin: 3rem auto 0 auto; /* Better spacing from cards above */
            text-align: center;
        }

        .pricing-card h3 {
            color: var(--secondary);
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .pricing-card p {
            color: var(--gray);
            margin-bottom: 1.5rem;
        }

        .pricing-highlight {
            color: var(--primary);
            font-weight: bold;
        }

        /* Forms */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--secondary);
            margin-bottom: 0.5rem;
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid var(--gray-light);
            border-radius: var(--border-radius);
            transition: var(--transition);
            font-family: inherit;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.7);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        /* Footer */
        .footer {
            background-color: var(--secondary);
            color: var(--white);
            padding: 3rem 0 1rem;
        }

        .footer-title {
            position: relative;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 3rem;
            height: 0.125rem;
            background-color: var(--primary);
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            transition: var(--transition);
            display: block;
            padding: 0.25rem 0;
        }

        .footer-link:hover {
            color: var(--primary);
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            background-color: rgba(255, 255, 255, 0.7);
            color: var(--white);
            border-radius: 50%;
            transition: var(--transition);
            margin-right: 1rem;
        }

        .social-link:hover {
            background-color: var(--primary);
        }

        /* Utilities */
        .relative { position: relative; }
        .absolute { position: absolute; }
        .inset-0 { top: 0; right: 0; bottom: 0; left: 0; }
        .z-10 { z-index: 10; }
        .w-full { width: 100%; }
        .h-full { height: 100%; }
        .object-cover { object-fit: cover; }
        .overflow-hidden { overflow: hidden; }
        .rounded-lg { border-radius: var(--border-radius); }
        .shadow-xl { box-shadow: var(--shadow-lg); }
        .border-l-4 { border-left: 4px solid var(--primary); }
        .max-w-3xl { max-width: 48rem; margin: 0 auto; }
        .mx-auto { margin-left: auto; margin-right: auto; }

        /* Responsive Images */
        .img-container {
            position: relative;
            height: 400px;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        @media (max-width: 767px) {
            .img-container {
                height: 250px;
            }
        }

        /* Top Bar */
        .top-bar {
            background-color: var(--primary);
            color: var(--white);
            padding: 0.5rem 0;
            font-size: 0.875rem;
        }

        @media (max-width: 767px) {
            .top-bar {
                display: none;
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 767px) {
            .hero {
                padding: 3rem 0;
                min-height: 60vh;
            }
            
            .section {
                padding: 3rem 0;
            }
            
            .text-4xl {
                font-size: 1.875rem;
            }
            
            .card {
                padding: 1.5rem;
            }
            
            .grid {
                gap: 1.5rem;
            }
            
            .btn {
                padding: 0.625rem 1.25rem;
                font-size: 0.8rem;
            }

            .pricing-card {
                margin: 2rem auto 0 auto;
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 0.75rem;
            }
            
            .hero {
                padding: 2rem 0;
            }
            
            .text-4xl {
                font-size: 1.5rem;
            }
            
            .text-3xl {
                font-size: 1.5rem;
            }
            
            .card {
                padding: 1rem;
            }

            .pricing-card {
                padding: 1rem;
            }
        }
         /* Contact Section Specific */
         .contact-info-card {
            background: #f9fafb;
            padding: 2rem;
            border-radius: 16px;
            border: 1px solid #e5e7eb;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .contact-item:last-child {
            margin-bottom: 0;
        }

        .contact-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #10b981, #34d399);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: white;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .contact-details h4 {
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.25rem;
        }

        .contact-details p {
            color: #6b7280;
            margin: 0;
        }

        /* Footer Styles */
        .footer {
            background: #111827;
            color: white;
            padding: 60px 0 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .logo i {
            margin-right: 0.5rem;
            color: #10b981;
        }

        .footer-title {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: white;
        }

        .footer-link {
            display: block;
            color: #9ca3af;
            text-decoration: none;
            margin-bottom: 0.75rem;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #10b981;
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #374151;
            border-radius: 10px;
            color: white;
            text-decoration: none;
            margin-right: 0.75rem;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #10b981;
            transform: translateY(-2px);
        }

        .footer-bottom {
            border-top: 1px solid #374151;
            margin-top: 3rem;
            padding-top: 2rem;
            text-align: center;
            color: #9ca3af;
        }
    </style>
</head>
<body>
    <div class="flex flex-col min-h-screen">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="container flex-between">
                <div class="flex items-center gap-4">
                    <div class="flex items-center">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>info@southbridgesdr.com</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        <span>United States</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-phone mr-2"></i>
                        <span>+381 63 416 289</span>
                    </div>
                </div>
                <div class="flex">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="header">
            <div class="container flex-between">
                <div class="logo">
                    <i class="fas fa-leaf"></i>
                    <span class="text-primary">South</span>
                    <span class="text-secondary">Bridge</span>
                </div>
                
                <nav class="nav">
                    <a href="#home" class="nav-link">Home</a>
                    <a href="#about" class="nav-link">About Us</a>
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#process" class="nav-link">Our Process</a>
                    <a href="#why-us" class="nav-link">Why Choose Us</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </nav>
                
                <button class="btn btn-primary" style="display: none;">Get A Quote</button>
                
                <button class="mobile-toggle" id="mobile-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </header>

        <!-- Mobile Menu -->
        <div class="mobile-overlay" id="mobile-overlay"></div>
        <div class="mobile-menu" id="mobile-menu">
            <div class="flex-between mb-4">
                <div class="logo">
                    <i class="fas fa-leaf"></i>
                    <span class="text-primary">South</span>
                    <span class="text-secondary">Bridge</span>
                </div>
                <button id="mobile-close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="mobile-nav">
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#services">Services</a>
                <a href="#process">Our Process</a>
                <a href="#why-us">Why Choose Us</a>
                <a href="#contact">Contact</a>
            </nav>
            <div class="text-center mt-6">
                <button class="btn btn-primary">Get A Quote</button>
            </div>
        </div>

        <main>
            <!-- Hero Section -->
            <section id="home" class="hero">
                <div class="hero-bg"></div>
                <div class="hero-overlay"></div>
                <div class="container">
                    <div class="hero-content">
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                            Let's Amplify Your Business Success
                        </h1>
                        <p class="text-xl mb-8">
                            Outsource expert SDRs, launch targeted outreach campaigns, and close more U.S. deals — all with one proven partner.
                        </p>
                        <div class="flex flex-wrap gap-4 mb-8">
                            <a href="#contact" class="btn btn-white">Get Started</a>
                            <a href="#services" class="btn btn-outline">Learn More</a>
                        </div>
                        <div class="flex flex-wrap gap-4 gap-y-2 text-sm md:text-base">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-white mr-2"></i>
                                <span>Dedicated SDRs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About Us Section -->
            <section id="about" class="section bg-white">
                <div class="container">
                    <div class="max-w-3xl text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-secondary section-title">About Us</h2>
                        <p class="text-lg text-gray">
                            SouthBridge SDR is a sales development agency that helps companies scale through outsourced sales teams, lead generation, and deal-closing services.
                        </p>
                    </div>
                    <div class="grid md:grid-2 items-center">
                        <div>
                            <div class="team-highlight">
                                <h3>Our Mission</h3>
                                <p>
                                    To help businesses grow revenue through expert outreach and high-converting strategies without building an in-house team.
                                </p>
                            </div>
                            <div class="team-highlight">
                                <h3>Who We Work With</h3>
                                <p>
                                    We primarily work with U.S. companies looking to scale their sales operations efficiently without the overhead of building an in-house team.
                                </p>
                            </div>
                            <div class="team-highlight">
                                <h4>Our Team</h4>
                                <p>
                                    Our team consists of experienced SDRs, expert copywriters, and dedicated account managers who work together to deliver exceptional results for our clients.
                                </p>
                            </div>
                        </div>
                        <div class="img-container">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="SouthBridge SDR Team" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Services Section -->
            <!-- Services Section -->
        <section id="services" class="section bg-light">
            <div class="container">
                <div class="max-w-3xl text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-secondary section-title">Our Services</h2>
                    <p class="text-lg text-gray">
                        We offer three comprehensive business models to help you scale your sales operations and close more deals.
                    </p>
                </div>
                <div class="grid md:grid-3">
                    <!-- Service 1 -->
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="icon-circle">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-secondary text-center">Outsourced SDR Teams</h3>
                        <p class="text-gray mb-6 text-center">
                            Dedicated sales reps acting as your extended team, fully integrated with your sales process.
                        </p>
                        <ul class="service-list">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Personal SDRs dedicated to your business</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>500+ monthly email contacts</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Weekly check-ins and reporting</span>
                            </li>
                        </ul>
                        <a href="#contact" class="flex-center text-primary font-semibold">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <!-- Service 2 -->
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="icon-circle">
                            <i class="fas fa-search"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-secondary text-center">Lead Generation & Outreach</h3>
                        <p class="text-gray mb-6 text-center">
                            Multichannel prospecting via LinkedIn & email with A/B tested campaigns.
                        </p>
                        <ul class="service-list">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>A/B tested copy that converts</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Warmed-up domains for better deliverability</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Sales Navigator included</span>
                            </li>
                        </ul>
                        <a href="#contact" class="flex-center text-primary font-semibold">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>

                    <!-- Service 3 -->
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="icon-circle">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-secondary text-center">Contract & Deal Closing</h3>
                        <p class="text-gray mb-6 text-center">
                            We handle nurturing and conversion, including contract negotiation.
                        </p>
                        <ul class="service-list">
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>End-to-end sales process management</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Slack support for real-time updates</span>
                            </li>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span>Contract negotiation and closing</span>
                            </li>
                        </ul>
                        <a href="#contact" class="flex-center text-primary font-semibold">
                            Learn More <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

            <!-- Process Section -->
            <section id="process" class="section bg-white">
                <div class="container">
                    <div class="max-w-3xl text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-secondary section-title">How We Work</h2>
                        <p class="text-lg text-gray">
                            Our streamlined process ensures a smooth experience from onboarding to ongoing optimization.
                        </p>
                    </div>
                    <div class="grid md:grid-2 items-center">
                        <div>
                            <div class="process-step">
                                <div class="process-number">1</div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-secondary">Discovery Call</h3>
                                    <p class="text-gray">
                                        We understand your ICP (Ideal Customer Profile) and market goals to create a tailored strategy.
                                    </p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="process-number">2</div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-secondary">Onboarding</h3>
                                    <p class="text-gray">
                                        Setup of email domains, SDR channels, and tools to ensure everything is ready for launch.
                                    </p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="process-number">3</div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-secondary">Outreach Launch</h3>
                                    <p class="text-gray">
                                        LinkedIn + email campaigns go live with carefully crafted messaging to your target audience.
                                    </p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="process-number">4</div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-secondary">Weekly Reporting</h3>
                                    <p class="text-gray">
                                        Clear updates, metrics, and lead flow to keep you informed of campaign performance.
                                    </p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="process-number">5</div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-secondary">Handoff or Closing</h3>
                                    <p class="text-gray">
                                        We either book calls for your team or close deals directly, depending on your chosen service.
                                    </p>
                                </div>
                            </div>
                            <div class="process-step">
                                <div class="process-number">6</div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2 text-secondary">Ongoing Optimization</h3>
                                    <p class="text-gray">
                                        A/B testing, copy changes, and audience refinement to continuously improve results.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="img-container">
                            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Our Process" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Why Choose Us Section -->
            <section id="why-us" class="section bg-light">
                <div class="container">
                    <div class="max-w-3xl text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-secondary section-title">Why Choose Us</h2>
                        <p class="text-lg text-gray">
                            We're not just another sales agency – we're your dedicated partner in growth.
                        </p>
                    </div>
                    <div class="grid md:grid-3">
                        <div class="card">
                            <div class="icon-circle">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-4 text-secondary text-center">Performance-Driven Results</h3>
                            <p class="text-gray text-center">
                                Our proven frameworks generate qualified leads that convert into real business opportunities.
                            </p>
                        </div>
                        <div class="card">
                            <div class="icon-circle">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-4 text-secondary text-center">Transparency & Accountability</h3>
                            <p class="text-gray text-center">
                                Real-time Slack support, weekly reports, and complete visibility into our processes.
                            </p>
                        </div>
                        <div class="card">
                            <div class="icon-circle">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-4 text-secondary text-center">Long-Term Partnerships</h3>
                            <p class="text-gray text-center">
                                We grow with you, acting as a true extension of your team, not just a temporary solution.
                            </p>
                        </div>
                    </div>
                    <div class="pricing-card">
                        <h3>Maximize Your Growth</h3>
                        <p>
                            Starting at just <span class="pricing-highlight">$1,200/month</span> – everything included with a 3-month commitment.
                        </p>
                        <a href="#contact" class="btn btn-primary">Get Started Today</a>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
    <!-- CTA Section -->
    <section class="section bg-primary text-white relative">
        <div class="absolute inset-0 z-0"></div>
        <div class="container relative z-10">
            <div class="max-w-3xl text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Scale Your Sales?</h2>
                <p class="text-xl mb-8">
                    Let's talk about how SouthBridge SDR can help you generate more leads, book more meetings, and close more deals.
                </p>
                <div class="flex flex-wrap justify-center items-center gap-4">
                    <a href="#contact" class="btn btn-white">Book a Free Consultation</a>
                    <a href="#services" class="btn btn-outline">Explore Our Services</a>
                </div>
            </div>
        </div>
    </section>

  <!-- Contact Section -->
  <section id="contact" class="section bg-white">
        <div class="container">
            <div class="max-w-3xl text-center mb-16">
                <h2 class="text-3xl font-bold mb-6 text-secondary">Contact Us</h2>
                <p class="text-lg text-gray">
                    Let's talk about how we can help you scale your sales operations.
                </p>
            </div>
            <div class="grid md:grid-2">
                <div>
                    <form class="contact-info-card">
                        <div class="grid grid-2">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" class="form-input" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-input" placeholder="your@email.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" id="company" class="form-input" placeholder="Your Company">
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" class="form-textarea" placeholder="Tell us about your sales goals..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-full">Send Message</button>
                    </form>
                </div>
                <div class="contact-info-card">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold mb-4 text-secondary">Let's Talk Sales Growth</h3>
                        <p class="text-gray mb-6">
                            Schedule a free consultation to discuss your sales goals and how we can help you achieve them.
                        </p>
                    </div>
                    <div class="space-y-4">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p>info@southbridgesdr.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Phone</h4>
                                <p>+381 63 416 289</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-slack"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Slack</h4>
                                <p>Connect with us on Slack for real-time support</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="contact-details">
                                <h4>WhatsApp</h4>
                                <p>Message us on WhatsApp for quick responses</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h4>Location</h4>
                                <p>Remote globally, focused on the U.S. market</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="grid md:grid-2 lg:grid-cols-4">
                <div>
                    <div class="logo">
                        <i class="fas fa-leaf"></i>
                        <span class="text-primary">South</span>
                        <span class="text-white">Bridge</span>
                    </div>
                    <p class="text-gray mb-6">
                        Scale your sales without hiring in-house. Outsource expert SDRs, launch targeted outreach campaigns, and close more U.S. deals.
                    </p>
                    <div class="flex">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div>
                    <h3 class="footer-title">Services</h3>
                    <a href="#services" class="footer-link">Outsourced SDR Teams</a>
                    <a href="#services" class="footer-link">Lead Generation & Outreach</a>
                    <a href="#services" class="footer-link">Contract & Deal Closing</a>
                    <a href="#process" class="footer-link">Our Process</a>
                    <a href="#why-us" class="footer-link">Why Choose Us</a>
                </div>
                <div>
                    <h3 class="footer-title">Quick Links</h3>
                    <a href="#home" class="footer-link">Home</a>
                    <a href="#about" class="footer-link">About Us</a>
                    <a href="#testimonials" class="footer-link">Testimonials</a>
                    <a href="#blog" class="footer-link">Blog</a>
                    <a href="#contact" class="footer-link">Contact</a>
                </div>
                <div>
                    <h3 class="footer-title">Contact Us</h3>
                    <div class="space-y-4">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <p>info@southbridgesdr.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-details">
                                <p>+381 63 416 289</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <p>Remote globally, focused on the U.S. market</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-details">
                                <p>Mon-Fri: 9:00 AM - 5:00 PM EST</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 SouthBridge SDR. All rights reserved.</p>
            </div>
        </div>
    </footer>

    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.getElementById('mobile-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileClose = document.getElementById('mobile-close');
            const mobileOverlay = document.getElementById('mobile-overlay');
            const mobileLinks = document.querySelectorAll('.mobile-nav a');

            function openMobileMenu() {
                mobileMenu.classList.add('active');
                mobileOverlay.classList.add('active');
                document.body.style.overflow = 'hidden';
            }

            function closeMobileMenu() {
                mobileMenu.classList.remove('active');
                mobileOverlay.classList.remove('active');
                document.body.style.overflow = 'auto';
            }

            mobileToggle.addEventListener('click', openMobileMenu);
            mobileClose.addEventListener('click', closeMobileMenu);
            mobileOverlay.addEventListener('click', closeMobileMenu);
            
            mobileLinks.forEach(link => {
                link.addEventListener('click', closeMobileMenu);
            });

            // Smooth scrolling
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const headerHeight = document.querySelector('header').offsetHeight;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Form validation
            const contactForm = document.querySelector('form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;
                    const message = document.getElementById('message').value;
                    
                    if (!name || !email || !message) {
                        alert('Please fill in all required fields.');
                        return;
                    }
                    
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email)) {
                        alert('Please enter a valid email address.');
                        return;
                    }
                    
                    alert('Thank you for your message! We will get back to you soon.');
                    contactForm.reset();
                });
            }
        });
    </script>
</body>
</html>