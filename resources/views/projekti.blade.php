<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pisanje Projekata - Profesionalne Usluge za Subvencije i Fondove</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1e3a8a;
            --primary-light: #3b82f6;
            --secondary: #1f2937;
            --accent: #10b981;
            --light: #f8fafc;
            --white: #ffffff;
            --text-dark: #374151;
            --text-light: #6b7280;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .logo i {
            margin-right: 0.5rem;
            font-size: 2rem;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--primary);
        }

        .cta-btn {
            background: var(--primary);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .cta-btn:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
        }

        /* Hamburger Menu Styles - NEW */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 0.5rem;
            z-index: 1001;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: var(--primary);
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        /* Mobile Menu - NEW */
        .mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.95);
            z-index: 999;
            padding-top: 80px;
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-menu nav {
            text-align: center;
            padding: 2rem;
        }

        .mobile-menu nav ul {
            flex-direction: column;
            gap: 2rem;
        }

        .mobile-menu nav a {
            color: white;
            font-size: 1.2rem;
            display: block;
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mobile-menu .cta-btn {
            display: inline-block;
            margin-top: 2rem;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 3rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-form {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .hero-form h3 {
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .submit-btn {
            width: 100%;
            background: var(--primary);
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: var(--primary-light);
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background: var(--light);
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        .section-header p {
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .service-icon i {
            font-size: 1.5rem;
            color: white;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--secondary);
        }

        .service-card p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        .service-features {
            list-style: none;
        }

        .service-features li {
            padding: 0.5rem 0;
            color: var(--text-dark);
            display: flex;
            align-items: center;
        }

        .service-features li i {
            color: var(--accent);
            margin-right: 0.5rem;
        }

        /* Organizations Section */
        .organizations {
            padding: 80px 0;
            background: white;
        }

        .org-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 3 columns on desktop */
            gap: 2rem;
            align-items: center;
        }

        .org-card {
            text-align: center;
            padding: 2rem 1.5rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            background: #fafafa;
            border: 1px solid #f0f0f0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .org-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            background: white;
        }

        .org-logo {
            width: 80px;
            height: 80px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .org-card:hover .org-logo {
            background: var(--primary);
            color: white;
            transform: scale(1.1);
        }

        .org-card h4 {
            margin-bottom: 1rem;
            color: var(--dark);
            font-size: 1.2rem;
        }

        .org-card p {
            color: #666;
            line-height: 1.6;
            flex-grow: 1;
        }

        /* Process Section */
        .process {
            padding: 80px 0;
            background: var(--light);
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .step {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 1.5rem;
        }

        .step h3 {
            margin-bottom: 1rem;
            color: var(--secondary);
        }

        /* Stats Section */
        .stats {
            padding: 80px 0;
            background: var(--primary);
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item h3 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: var(--secondary);
            color: white;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-secondary {
            background: transparent;
            color: white;
            padding: 1rem 2rem;
            border: 2px solid white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
        }

        .btn-secondary:hover {
            background: white;
            color: var(--secondary);
        }

        /* Footer */
        footer {
            background: var(--secondary);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: white;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            line-height: 1.8;
        }

        .footer-section a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
        }

        /* Language Switcher - Separate Button Style */
        .language-switcher {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .language-switcher a {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 12px;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.7);
            background: rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 14px;
            min-width: 60px;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .language-switcher a:hover {
            background: rgba(37, 99, 235, 0.3);
            color: white;
            border-color: rgba(37, 99, 235, 0.4);
            transform: translateY(-1px);
        }

        .language-switcher a.active {
            background: #2563eb;
            color: white;
            border-color: #3b82f6;
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.4);
        }

        .language-switcher .flag-icon {
            font-size: 16px;
            line-height: 1;
        }

        .language-switcher .lang-text {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        /* Responsive - UPDATED */
        @media (max-width: 768px) {

            /* Show hamburger menu on mobile */
            .hamburger {
                display: flex;
            }

            /* Hide desktop navigation on mobile */
            .header-content nav {
                display: none;
            }

            /* Hide desktop CTA button on mobile */
            .header-content .cta-btn {
                display: none;
            }

            .hero-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .header-content {
                justify-content: space-between;
            }

            /* Services grid mobile */
            .services-grid {
                grid-template-columns: 1fr;
            }

            /* Organizations grid mobile */
            .org-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            /* Process steps mobile */
            .process-steps {
                grid-template-columns: 1fr;
            }

            /* Stats grid mobile */
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            /* CTA buttons mobile */
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn-primary,
            .btn-secondary {
                width: 100%;
                max-width: 300px;
            }

            /* Footer mobile */
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            /* Section headers mobile */
            .section-header h2 {
                font-size: 2rem;
            }

            .cta-section h2 {
                font-size: 2rem;
            }

            /* Container padding mobile */
            .container {
                padding: 0 15px;
            }
        }

        @media (max-width: 768px) {

            /* Show hamburger menu on mobile */
            .hamburger {
                display: flex;
            }

            /* Hide desktop navigation on mobile */
            .header-content nav {
                display: none;
            }

            /* Hide desktop CTA button on mobile */
            .header-content .cta-btn {
                display: none;
            }

            /* Hide desktop language switcher on mobile */
            .language-switcher {
                display: none;
            }

            /* Mobile Language Switcher - Horizontal Layout */
            .mobile-language-switcher {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 20px 0;
                padding: 15px 0;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                gap: 20px;
            }

            .mobile-language-switcher a {
                display: flex;
                align-items: center;
                gap: 8px;
                color: #fff;
                text-decoration: none;
                padding: 10px 15px;
                border-radius: 8px;
                transition: all 0.3s ease;
                font-size: 16px;
                min-width: 80px;
                justify-content: center;
            }

            .mobile-language-switcher a:hover {
                background-color: rgba(255, 255, 255, 0.1);
            }

            .mobile-language-switcher a.active {
                background-color: rgba(255, 255, 255, 0.2);
                font-weight: bold;
            }

            .mobile-language-switcher .separator {
                display: none;
                /* Hide separator for cleaner look */
            }

            .mobile-language-switcher .flag-icon {
                font-size: 18px;
            }

            .mobile-language-switcher .lang-text {
                font-size: 14px;
                font-weight: 500;
            }

        }

        @media (min-width: 769px) {

            /* Show desktop language switcher on desktop */
            .language-switcher {
                display: flex;
            }

            /* Hide mobile language switcher on desktop */
            .mobile-language-switcher {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-file-contract"></i>
                    {{ __('projekti.header.logo_text') }}
                </div>
                <nav>
                    <ul>
                        <li><a href="#pocetna">{{ __('projekti.header.nav.home') }}</a></li>
                        <li><a href="#usluge">{{ __('projekti.header.nav.services') }}</a></li>
                        <li><a href="#proces">{{ __('projekti.header.nav.process') }}</a></li>
                        <li><a href="#organizacije">{{ __('projekti.header.nav.partners') }}</a></li>
                        <li><a href="#kontakt">{{ __('projekti.header.nav.contact') }}</a></li>
                    </ul>
                </nav>

                <!-- Hamburger Menu Button -->
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- Language switcher -->
                <div class="language-switcher">
                    @php
                    $currentRoute = request()->route();
                    $currentParams = $currentRoute ? $currentRoute->parameters() : [];
                    unset($currentParams['locale']); // Remove locale from current params
                    @endphp

                    <a href="{{ route($currentRoute ? $currentRoute->getName() : 'projekti', array_merge(['locale' => 'sr'], $currentParams)) }}"
                        class="{{ app()->getLocale() == 'sr' ? 'active' : '' }}"> <span class="flag-icon">🇷🇸</span>
                        <span class="lang-text">SR</span></a> |
                    <a href="{{ route($currentRoute ? $currentRoute->getName() : 'projekti', array_merge(['locale' => 'en'], $currentParams)) }}"
                        class="{{ app()->getLocale() == 'en' ? 'active' : '' }}"> <span class="flag-icon">🇬🇧</span>
                        <span class="lang-text">EN</span></a>
                </div>
            </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <nav>
            <ul>
                <li><a href="#pocetna" onclick="closeMobileMenu()">{{ __('projekti.header.nav.home') }}</a></li>
                <li><a href="#usluge" onclick="closeMobileMenu()">{{ __('projekti.header.nav.services') }}</a></li>
                <li><a href="#proces" onclick="closeMobileMenu()">{{ __('projekti.header.nav.process') }}</a></li>
                <li><a href="#organizacije" onclick="closeMobileMenu()">{{ __('projekti.header.nav.partners') }}</a>
                </li>
                <li><a href="#kontakt" onclick="closeMobileMenu()">{{ __('projekti.header.nav.contact') }}</a></li>
            </ul>

            <!-- Language switcher for mobile -->
            <div class="mobile-language-switcher">
                @php
                $currentRoute = request()->route();
                $currentParams = $currentRoute ? $currentRoute->parameters() : [];
                unset($currentParams['locale']); // Remove locale from current params
                @endphp

                <a href="{{ route($currentRoute ? $currentRoute->getName() : 'projekti', array_merge(['locale' => 'sr'], $currentParams)) }}"
                    class="{{ app()->getLocale() == 'sr' ? 'active' : '' }}" onclick="closeMobileMenu()">
                    <span class="flag-icon">🇷🇸</span>
                    <span class="lang-text">SR</span>
                </a>
                <span class="separator">|</span>
                <a href="{{ route($currentRoute ? $currentRoute->getName() : 'projekti', array_merge(['locale' => 'en'], $currentParams)) }}"
                    class="{{ app()->getLocale() == 'en' ? 'active' : '' }}" onclick="closeMobileMenu()">
                    <span class="flag-icon">🇬🇧</span>
                    <span class="lang-text">EN</span>
                </a>
            </div>

            <a href="#upit" class="btn-primary cta-btn" onclick="closeMobileMenu()">
                {{ __('projekti.cta.buttons.schedule') }}
            </a>
        </nav>
    </div>


    <!-- Hero Section -->
    <section id="pocetna" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>{{ __('projekti.hero.title') }}</h1>
                    <p>{{ __('projekti.hero.description') }}</p>
                </div>
                <div id="upit" class="hero-form">
                    <h3>{{ __('projekti.hero.form.title') }}</h3>

                    {{-- Flash success message --}}
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    {{-- Flash errors --}}
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('projekti.contact', app()->getLocale()) }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="ime" placeholder="{{ __('projekti.hero.form.name') }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="{{ __('projekti.hero.form.email') }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <select name="tip_projekta" required>
                                <option value="">{{ __('projekti.hero.form.project_types.select') }}</option>
                                <option value="eu_fondovi">{{ __('projekti.hero.form.project_types.eu_funds') }}
                                </option>
                                <option value="usaid">{{ __('projekti.hero.form.project_types.usaid') }}</option>
                                <option value="startup">{{ __('projekti.hero.form.project_types.startup') }}</option>
                                <option value="ministarstvo">{{ __('projekti.hero.form.project_types.ministry') }}
                                </option>
                                <option value="ostalo">{{ __('projekti.hero.form.project_types.other') }}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="poruka" placeholder="{{ __('projekti.hero.form.message') }}"></textarea>
                        </div>
                        <button type="submit" class="submit-btn">{{ __('projekti.hero.form.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="usluge" class="services">
        <div class="container">
            <div class="section-header">
                <h2>{{ __('projekti.services.title') }}</h2>
                <p>{{ __('projekti.services.description') }}</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <h3>{{ __('projekti.services.cards.eu_funds.title') }}</h3>
                    <p>{{ __('projekti.services.cards.eu_funds.description') }}</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.eu_funds.features.call_analysis') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.eu_funds.features.project_proposal') }}</li>
                        <li><i class="fas fa-check"></i> {{ __('projekti.services.cards.eu_funds.features.budget_plan')
                            }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.eu_funds.features.implementation') }}</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-flag-usa"></i>
                    </div>
                    <h3>{{ __('projekti.services.cards.usaid.title') }}</h3>
                    <p>{{ __('projekti.services.cards.usaid.description') }}</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.usaid.features.grant_applications') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.usaid.features.logical_framework') }}</li>
                        <li><i class="fas fa-check"></i> {{ __('projekti.services.cards.usaid.features.me_plan') }}</li>
                        <li><i class="fas fa-check"></i> {{ __('projekti.services.cards.usaid.features.reporting') }}
                        </li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>{{ __('projekti.services.cards.startup.title') }}</h3>
                    <p>{{ __('projekti.services.cards.startup.description') }}</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> {{ __('projekti.services.cards.startup.features.business_plan')
                            }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.startup.features.financial_model') }}</li>
                        <li><i class="fas fa-check"></i> {{ __('projekti.services.cards.startup.features.pitch_deck') }}
                        </li>
                        <li><i class="fas fa-check"></i> {{ __('projekti.services.cards.startup.features.due_diligence')
                            }}</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3>{{ __('projekti.services.cards.government.title') }}</h3>
                    <p>{{ __('projekti.services.cards.government.description') }}</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.government.features.innovation_vouchers') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.government.features.development_projects') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.government.features.export_subsidies') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.government.features.digitalization') }}</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>{{ __('projekti.services.cards.consulting.title') }}</h3>
                    <p>{{ __('projekti.services.cards.consulting.description') }}</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.consulting.features.development_strategies') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.consulting.features.market_analysis') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.consulting.features.project_management') }}</li>
                        <li><i class="fas fa-check"></i> {{ __('projekti.services.cards.consulting.features.evaluation')
                            }}</li>
                    </ul>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>{{ __('projekti.services.cards.partnership.title') }}</h3>
                    <p>{{ __('projekti.services.cards.partnership.description') }}</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.partnership.features.partner_network') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.partnership.features.consortiums') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.partnership.features.agreements') }}</li>
                        <li><i class="fas fa-check"></i> {{
                            __('projekti.services.cards.partnership.features.coordination') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Organizations Section -->
    <section id="organizacije" class="organizations">
        <div class="container">
            <div class="section-header">
                <h2>{{ __('projekti.organizations.title') }}</h2>
                <p>{{ __('projekti.organizations.description') }}</p>
            </div>
            <div class="org-grid">
                <div class="org-card">
                    <div class="org-logo">
                        <i class="fas fa-flag-usa"></i>
                    </div>
                    <h4>{{ __('projekti.organizations.orgs.usaid.title') }}</h4>
                    <p>{{ __('projekti.organizations.orgs.usaid.description') }}</p>
                </div>
                <div class="org-card">
                    <div class="org-logo">
                        <i class="fas fa-star-of-david"></i>
                    </div>
                    <h4>{{ __('projekti.organizations.orgs.eu.title') }}</h4>
                    <p>{{ __('projekti.organizations.orgs.eu.description') }}</p>
                </div>
                <div class="org-card">
                    <div class="org-logo">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h4>{{ __('projekti.organizations.orgs.ministry.title') }}</h4>
                    <p>{{ __('projekti.organizations.orgs.ministry.description') }}</p>
                </div>
                <div class="org-card">
                    <div class="org-logo">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h4>{{ __('projekti.organizations.orgs.startup.title') }}</h4>
                    <p>{{ __('projekti.organizations.orgs.startup.description') }}</p>
                </div>
                <div class="org-card">
                    <div class="org-logo">
                        <i class="fas fa-university"></i>
                    </div>
                    <h4>{{ __('projekti.organizations.orgs.banks.title') }}</h4>
                    <p>{{ __('projekti.organizations.orgs.banks.description') }}</p>
                </div>
                <div class="org-card">
                    <div class="org-logo">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4>{{ __('projekti.organizations.orgs.un.title') }}</h4>
                    <p>{{ __('projekti.organizations.orgs.un.description') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="proces" class="process">
        <div class="container">
            <div class="section-header">
                <h2>{{ __('projekti.process.title') }}</h2>
                <p>{{ __('projekti.process.description') }}</p>
            </div>
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>{{ __('projekti.process.steps.step1.title') }}</h3>
                    <p>{{ __('projekti.process.steps.step1.description') }}</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>{{ __('projekti.process.steps.step2.title') }}</h3>
                    <p>{{ __('projekti.process.steps.step2.description') }}</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>{{ __('projekti.process.steps.step3.title') }}</h3>
                    <p>{{ __('projekti.process.steps.step3.description') }}</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>{{ __('projekti.process.steps.step4.title') }}</h3>
                    <p>{{ __('projekti.process.steps.step4.description') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>150+</h3>
                    <p>{{ __('projekti.stats.successful_projects') }}</p>
                </div>
                <div class="stat-item">
                    <h3>€2.5M</h3>
                    <p>{{ __('projekti.stats.secured_funds') }}</p>
                </div>
                <div class="stat-item">
                    <h3>85%</h3>
                    <p>{{ __('projekti.stats.success_rate') }}</p>
                </div>
                <div class="stat-item">
                    <h3>50+</h3>
                    <p>{{ __('projekti.stats.satisfied_clients') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>{{ __('projekti.cta.title') }}</h2>
            <p>{{ __('projekti.cta.description') }}</p>
            <div class="cta-buttons">
                <a href="#upit" class="btn-primary">
                    {{ __('projekti.cta.buttons.schedule') }}
                </a>
                <a href="tel:{{ config('app.phone_number') }}" class="btn-secondary">
                    {{ __('projekti.cta.buttons.call_us') }}
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontakt">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>{{ __('projekti.header.logo_text') }}</h3>
                    <p>{{ __('projekti.footer.description') }}</p>
                </div>
                <div class="footer-section">
                    <h3>{{ __('projekti.footer.contact.title') }}</h3>
                    <p>{{ __('projekti.footer.contact.email') }}</p>
                    <p>{{ __('projekti.footer.contact.phone') }}</p>
                    <p>{{ __('projekti.footer.contact.address') }}</p>
                </div>
                <div class="footer-section">
                    <h3>{{ __('projekti.footer.services.title') }}</h3>
                    <p><a href="#usluge">{{ __('projekti.footer.services.eu_funds') }}</a></p>
                    <p><a href="#usluge">{{ __('projekti.footer.services.usaid') }}</a></p>
                    <p><a href="#usluge">{{ __('projekti.footer.services.startup') }}</a></p>
                    <p><a href="#usluge">{{ __('projekti.footer.services.government') }}</a></p>
                </div>
                <div class="footer-section">
                    <h3>{{ __('projekti.footer.follow_us.title') }}</h3>
                    <p><a href="#">{{ __('projekti.footer.follow_us.linkedin') }}</a></p>
                    <p><a href="#">{{ __('projekti.footer.follow_us.facebook') }}</a></p>
                    <p><a href="#">{{ __('projekti.footer.follow_us.twitter') }}</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} {{ __('projekti.footer.copyright') }}</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
      
      // Focus name input if this is the schedule button going to #pocetna
      if (this.getAttribute('href') === '#upit' && this.classList.contains('btn-primary')) {
        setTimeout(() => {
          const nameInput = document.querySelector('input[name="ime"]');
          if (nameInput) {
            nameInput.focus();
          }
        }, 500);
      }
    }
  });
});
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for internal links
    const nav = document.querySelector('header').offsetHeight;
    document.querySelector('#pocetna').style.paddingTop = `${nav + 32}px`;

});
    </script>
    <script>
        // Hamburger menu functionality
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');

        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            
            // Prevent body scroll when menu is open
            if (mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Close mobile menu function
        function closeMobileMenu() {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        }

        // Close mobile menu when clicking outside
        mobileMenu.addEventListener('click', function(e) {
            if (e.target === mobileMenu) {
                closeMobileMenu();
            }
        });

        // Close mobile menu on window resize if screen becomes larger
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                closeMobileMenu();
            }
        });
    </script>
</body>

</html>