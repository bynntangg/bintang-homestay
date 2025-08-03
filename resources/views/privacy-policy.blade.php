<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kebijakan Privasi | Bintang Homestay Watukarung</title>
    <meta name="description"
        content="Kebijakan privasi Bintang Homestay Watukarung, Pacitan. Ketahui bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda.">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate on Scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --primary: #3B82F6;
            --primary-dark: #1D4ED8;
            --primary-light: #93C5FD;
            --secondary: #F97316;
            --secondary-dark: #EA580C;
            --secondary-light: #FDBA74;
            --dark: #030712;
            --dark-light: #1F2937;
            --gray: #6B7280;
            --gray-light: #E5E7EB;
            --light: #F9FAFB;
            --white: #FFFFFF;
            --success: #10B981;
            --warning: #F59E0B;
            --danger: #EF4444;
        }

        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            background-color: var(--white);
            overflow-x: hidden;
            line-height: 1.6;
            padding-top: 80px;
            /* Untuk mengkompensasi navbar fixed */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }

        a {
            text-decoration: none;
            transition: all 0.3s ease;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .text-balance {
            text-wrap: balance;
        }

        /* Utility Classes */
        .bg-gradient-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        }

        .bg-gradient-secondary {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark) 100%);
        }

        .text-gradient-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .text-gradient-secondary {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        /* Navbar Styles - Sama dengan contoh */
        .navbar-ocean {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(3, 7, 18, 0.5);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(59, 130, 246, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1000;
            padding: 0.5rem 0;
        }

        .navbar-ocean.scrolled {
            background: rgba(3, 7, 18, 0.95);
            box-shadow: 0 4px 30px rgba(2, 6, 23, 0.25);
            padding: 0.25rem 0;
        }

        .navbar-container {
            max-width: 1320px;
            width: 100%;
            padding: 0 1.5rem;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .logo-brand {
            display: flex;
            flex-direction: row;
            align-items: center;
            font-weight: 700;
            color: var(--white);
            z-index: 1001;
            margin-right: auto;
            padding: 0.5rem 0;
        }

        .logo-brand img {
            width: 60px;
            height: 60px;
            margin-right: 0.5rem;
        }

        .logo-brand .logo-text {
            display: none;
        }

        .nav-menu {
            display: flex;
            align-items: center;
        }

        .nav-list {
            display: flex;
            list-style: none;
            margin-bottom: 0;
            padding-left: 0;
        }

        .nav-item {
            margin: 0 0.5rem;
        }

        .nav-link {
            padding: 0.75rem 1.25rem;
            border-radius: 50px;
            font-weight: 500;
            color: rgba(219, 234, 254, 0.9);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            white-space: nowrap;
        }

        .nav-link:hover,
        .nav-link.active {
            background: rgba(29, 78, 216, 0.4);
            color: var(--white);
            transform: translateY(-2px);
        }

        .nav-link.active {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.6) 0%, rgba(29, 78, 216, 0.7) 100%);
            box-shadow: 0 4px 12px rgba(29, 78, 216, 0.15);
        }

        .btn-book {
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark) 100%);
            color: var(--white);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(5, 11, 26, 0.25);
            transition: all 0.3s ease;
            border: none;
            display: inline-flex;
            align-items: center;
        }

        .btn-book:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(234, 88, 12, 0.3);
            color: var(--white);
        }

        /* Mobile Menu - Sama dengan contoh */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 1001;
        }

        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .mobile-menu {
            position: fixed;
            top: 0;
            right: -100%;
            width: 320px;
            height: 100vh;
            background: var(--dark);
            z-index: 1000;
            transition: right 0.3s ease;
            padding: 5rem 2rem 2rem;
            overflow-y: auto;
        }

        .mobile-menu.active {
            right: 0;
        }

        .mobile-menu-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            right: 1.5rem;
        }

        .mobile-menu-close {
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
        }

        .mobile-nav-item {
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .mobile-nav-link {
            color: var(--white);
            font-weight: 500;
            display: flex;
            align-items: center;
            padding: 0.75rem 1.25rem;
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.1);
            margin: 0.25rem 0;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .mobile-nav-link.active {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.6) 0%, rgba(29, 78, 216, 0.7) 100%);
            box-shadow: 0 4px 12px rgba(29, 78, 216, 0.15);
        }

        .mobile-nav-link:hover,
        .mobile-nav-link:focus {
            background: rgba(29, 78, 216, 0.4);
            transform: translateY(-2px);
        }

        .mobile-nav-link i {
            margin-right: 1rem;
            width: 24px;
            text-align: center;
        }

        /* Privacy Policy Content Styles */
        .privacy-header {
            background:
                linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
                url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: var(--dark);
            padding: 6rem 0;
            position: relative;
            margin-bottom: 3rem;
            border-left: 5px solid var(--secondary);
        }

        .privacy-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.1;
        }

        .privacy-header-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .privacy-title {
            color: var(--primary-dark);
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .last-updated {
            color: var(--gray);
            font-weight: 500;
        }

        .privacy-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .privacy-content {
            background: var(--white);
            border-radius: 1rem;
            padding: 2.5rem;
            margin-bottom: 3rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--gray-light);
        }

        .privacy-content h2 {
            color: var(--primary-dark);
            margin-top: 2.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .privacy-content h2:first-child {
            margin-top: 0;
        }

        .privacy-content h2::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.35em;
            height: 1em;
            width: 8px;
            background: linear-gradient(to bottom, var(--primary), var(--primary-dark));
            border-radius: 4px;
        }

        .privacy-content p {
            margin-bottom: 1.5rem;
            color: var(--dark-light);
            font-size: 1.05rem;
            line-height: 1.7;
        }

        .privacy-content ul {
            padding-left: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .privacy-content li {
            margin-bottom: 0.75rem;
            position: relative;
            padding-left: 1rem;
            color: var(--dark-light);
        }

        .privacy-content li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: var(--primary);
            font-weight: bold;
        }

        .privacy-content strong {
            color: var(--dark);
        }

        .contact-info {
            background-color: var(--light);
            padding: 1.5rem;
            border-radius: 0.75rem;
            border-left: 4px solid var(--primary);
            margin-top: 1.5rem;
        }

        .contact-info p {
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
        }

        .contact-info i {
            margin-right: 0.75rem;
            color: var(--primary);
            width: 20px;
            text-align: center;
        }

        /* Footer - Sama dengan contoh */
        .footer {
            background-color: var(--dark);
            color: var(--white);
            padding: 4rem 0 2rem;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .footer-logo img {
            width: 40px;
            height: 40px;
            margin-right: 0.75rem;
        }

        .footer-about {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 1.5rem;
        }

        .footer-title {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            color: var(--white);
            position: relative;
            padding-bottom: 0.75rem;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: linear-gradient(to right, var(--secondary), var(--secondary-light));
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 0.75rem;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-link:hover {
            color: var(--white);
            transform: translateX(5px);
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .footer-contact-item i {
            margin-right: 0.75rem;
            color: var(--primary-light);
        }

        .footer-social {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .footer-social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            transition: all 0.3s ease;
        }

        .footer-social-link:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .footer-newsletter {
            margin-top: 1.5rem;
        }

        .footer-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border-radius: 50px;
            border: none;
            background: rgba(255, 255, 255, 0.1);
            color: var(--white);
            margin-bottom: 1rem;
        }

        .footer-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .footer-button {
            width: 100%;
            padding: 0.75rem;
            border-radius: 50px;
            background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark) 100%);
            color: var(--white);
            border: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .footer-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .footer-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin: 3rem 0 2rem;
        }

        .footer-bottom {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            text-align: center;
        }

        .footer-copyright {
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 1rem;
        }

        .footer-legal {
            display: flex;
            gap: 1.5rem;
        }

        .footer-legal-link {
            color: rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
        }

        .footer-legal-link:hover {
            color: var(--white);
        }

        /* WhatsApp Button - Sama dengan contoh */
        .whatsapp-button {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            background: var(--success);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
            z-index: 999;
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
        }

        .whatsapp-button:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(16, 185, 129, 0.4);
        }

        /* Back to Top Button - Sama dengan contoh */
        .back-to-top {
            position: fixed;
            bottom: 5rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            box-shadow: 0 5px 20px rgba(59, 130, 246, 0.3);
            z-index: 998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background: var(--primary-dark);
            transform: translateY(-5px);
        }

        /* Animations */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7);
            }

            70% {
                box-shadow: 0 0 0 15px rgba(16, 185, 129, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(16, 185, 129, 0);
            }
        }

        /* Responsive Styles */
        @media (max-width: 991.98px) {
            .nav-menu {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .btn-book.me-3 {
                margin-right: 1rem !important;
            }

            .logo-brand {
                flex-direction: row;
                align-items: center;
            }

            .logo-brand img {
                margin-right: 0.5rem;
                margin-bottom: 0;
            }
        }

        @media (max-width: 767.98px) {
            .privacy-header {
                padding: 4rem 0;
            }

            .privacy-title {
                font-size: 2rem;
            }

            .privacy-content {
                padding: 1.5rem;
            }

            .footer-bottom {
                flex-direction: column;
            }

            .footer-legal {
                flex-direction: column;
                gap: 0.5rem;
                margin-top: 1rem;
            }
        }

        @media (max-width: 575.98px) {
            .privacy-title {
                font-size: 1.75rem;
            }

            .whatsapp-button {
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
                bottom: 1.5rem;
                right: 1.5rem;
            }

            .back-to-top {
                width: 40px;
                height: 40px;
                font-size: 1rem;
                bottom: 4.5rem;
                right: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar - Sama dengan contoh -->
    <header class="navbar-ocean" id="navbar">
        <div class="navbar-container">
            <a href="/" class="logo-brand">
                <img src="images/bintang.png" alt="Bintang Homestay" class="logo-img">
                <span class="logo-text">Bintang Homestay</span>
            </a>
            <nav class="nav-menu">
                <ul class="nav-list d-flex mb-0">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="fas fa-home me-2"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}#fasilitas" class="nav-link">
                            <i class="fas fa-umbrella-beach me-2"></i> Fasilitas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}#kamar" class="nav-link">
                            <i class="fas fa-bed me-2"></i> Kamar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}#galeri" class="nav-link">
                            <i class="fas fa-camera me-2"></i> Galeri
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}#wisata" class="nav-link">
                            <i class="fas fa-map-marked-alt me-2"></i> Wisata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}#testimoni" class="nav-link">
                            <i class="fas fa-star me-2"></i> Testimoni
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}#kontak" class="nav-link">
                            <i class="fas fa-phone me-2"></i> Kontak
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="d-flex align-items-center">
                <a href="{{ url('/') }}#pemesanan" class="btn-book me-3 d-none d-md-inline-flex">
                    <i class="fas fa-calendar-check me-2"></i> Pesan Sekarang
                </a>

                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>
    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <a href="/" class="logo-brand">
                <img src="images/bintang.png" alt="Bintang Homestay">
                <span>Bintang Homestay</span>
            </a>
            <button class="mobile-menu-close" id="mobileMenuClose">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <nav class="mobile-nav">
            <ul class="mobile-nav-list">
                <li class="mobile-nav-item">
                    <a href="/" class="mobile-nav-link">
                        <i class="fas fa-home"></i> Beranda
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="{{ url('/') }}#fasilitas" class="mobile-nav-link">
                        <i class="fas fa-umbrella-beach"></i> Fasilitas
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="{{ url('/') }}#kamar" class="mobile-nav-link">
                        <i class="fas fa-bed"></i> Kamar
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="{{ url('/') }}#galeri" class="mobile-nav-link">
                        <i class="fas fa-camera"></i> Galeri
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="{{ url('/') }}#wisata" class="mobile-nav-link">
                        <i class="fas fa-map-marked-alt"></i> Wisata
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="{{ url('/') }}#testimoni" class="mobile-nav-link">
                        <i class="fas fa-star"></i> Testimoni
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="{{ url('/') }}#kontak" class="mobile-nav-link">
                        <i class="fas fa-phone"></i> Kontak
                    </a>
                </li>
            </ul>
        </nav>

        <a href="{{ url('/') }}#pemesanan" class="btn-book w-100 mt-3">
            <i class="fas fa-calendar-check me-2"></i> Pesan Sekarang
        </a>
    </div>

    <!-- Privacy Policy Header -->
    <section class="privacy-header">
        <div class="privacy-header-content" data-aos="fade-up">
            <h1 class="privacy-title">Kebijakan Privasi</h1>
            <p class="last-updated">Terakhir diperbarui: 1 Januari 2023</p>
        </div>
    </section>

    <!-- Privacy Policy Content -->
    <main class="privacy-container">
        <article class="privacy-content" data-aos="fade-up" data-aos-delay="100">
            <p class="intro">Bintang Homestay ("kami", "milik kami", "kita") menghargai privasi Anda. Kebijakan
                Privasi ini menjelaskan bagaimana kami mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda
                ketika Anda menggunakan layanan kami.</p>

            <h2>1. Informasi yang Kami Kumpulkan</h2>
            <p>Kami dapat mengumpulkan informasi berikut untuk memberikan layanan terbaik kepada Anda:</p>
            <ul>
                <li><strong>Informasi pribadi</strong> seperti nama lengkap, alamat email, dan nomor telepon</li>
                <li><strong>Detail pemesanan</strong> termasuk tanggal check-in/check-out dan tipe kamar yang dipilih
                </li>
                <li><strong>Informasi pembayaran</strong> (kami tidak menyimpan detail kartu kredit secara langsung)
                </li>
                <li><strong>Data penggunaan website</strong> seperti alamat IP, jenis browser, dan halaman yang
                    dikunjungi</li>
            </ul>

            <h2>2. Bagaimana Kami Menggunakan Informasi Anda</h2>
            <p>Informasi yang kami kumpulkan digunakan secara bertanggung jawab untuk:</p>
            <ul>
                <li>Memproses pemesanan dan menyediakan layanan sesuai permintaan Anda</li>
                <li>Meningkatkan pengalaman pengguna dan kualitas layanan kami</li>
                <li>Mengirim konfirmasi pemesanan dan informasi penting lainnya</li>
                <li>Memenuhi kewajiban hukum dan peraturan yang berlaku</li>
            </ul>

            <h2>3. Perlindungan Data</h2>
            <p>Kami menerapkan langkah-langkah keamanan teknis dan organisasional yang memadai untuk melindungi
                informasi pribadi Anda dari akses, penggunaan, atau pengungkapan yang tidak sah. Sistem kami menggunakan
                enkripsi dan kontrol akses yang ketat.</p>

            <h2>4. Penyimpanan Data</h2>
            <p>Kami menyimpan data pribadi Anda hanya selama diperlukan untuk tujuan yang dijelaskan dalam kebijakan
                ini, atau sesuai dengan persyaratan hukum yang berlaku. Setelah periode retensi berakhir, data akan
                dihapus atau dianonimkan secara aman.</p>

            <h2>5. Hak Anda</h2>
            <p>Sebagai pemilik data, Anda memiliki hak-hak berikut:</p>
            <ul>
                <li><strong>Hak Akses</strong> - Meminta informasi tentang data pribadi yang kami simpan</li>
                <li><strong>Hak Koreksi</strong> - Memperbaiki data yang tidak akurat atau tidak lengkap</li>
                <li><strong>Hak Penghapusan</strong> - Meminta penghapusan data pribadi Anda dalam kondisi tertentu</li>
                <li><strong>Hak Pembatasan</strong> - Membatasi pemrosesan data Anda dalam situasi tertentu</li>
            </ul>

            <h2>6. Perubahan Kebijakan</h2>
            <p>Kebijakan Privasi ini mungkin diperbarui dari waktu ke waktu untuk mencerminkan perubahan dalam praktik
                kami atau persyaratan hukum. Versi terbaru akan selalu tersedia di halaman ini dengan tanggal pembaruan
                yang disesuaikan.</p>

            <h2>7. Hubungi Kami</h2>
            <p>Jika Anda memiliki pertanyaan atau kekhawatiran tentang Kebijakan Privasi kami, jangan ragu untuk
                menghubungi tim kami melalui:</p>
            <div class="contact-info">
                <p><i class="fas fa-envelope"></i> Email: privacy@bintanghomestay.com</p>
                <p><i class="fas fa-phone-alt"></i> Telepon: +62 812-3456-7890</p>
                <p><i class="fas fa-map-marker-alt"></i> Alamat: Jl. Pantai Watukarung No. 123, Pacitan, Jawa Timur</p>
            </div>
        </article>
    </main>

    <!-- Footer - Sama dengan contoh -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="footer-logo">
                        <img src="images/bintang.png" alt="Bintang Homestay">
                        <span>Bintang Homestay</span>
                    </div>
                    <p class="footer-about">
                        Penginapan nyaman dengan fasilitas lengkap di Pantai Watukarung, Pacitan. Memberikan pengalaman
                        menginap terbaik dengan harga terjangkau.
                    </p>
                    <div class="footer-social">
                        <a href="#" class="footer-social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="footer-social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="footer-social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="footer-social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-lg-2 mb-4 mb-md-0">
                    <h3 class="footer-title">Link Cepat</h3>
                    <ul class="footer-links">
                        <li><a href="/" class="footer-link">Beranda</a></li>
                        <li><a href="{{ url('/') }}#fasilitas" class="footer-link">Fasilitas</a></li>
                        <li><a href="{{ url('/') }}#kamar" class="footer-link">Kamar</a></li>
                        <li><a href="{{ url('/') }}#galeri" class="footer-link">Galeri</a></li>
                        <li><a href="{{ url('/') }}#wisata" class="footer-link">Wisata</a></li>
                        <li><a href="{{ url('/') }}#testimoni" class="footer-link">Testimoni</a></li>
                        <li><a href="{{ url('/') }}#kontak" class="footer-link">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                    <h3 class="footer-title">Kontak Kami</h3>
                    <div class="footer-contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Jl. Pantai Watukarung No. 123, Pacitan, Jawa Timur</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>+62 896-812 3456 7890</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>bintang@homestay.com</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-clock"></i>
                        <span>24/7 Layanan Pelanggan</span>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <h3 class="footer-title">Newsletter</h3>
                    <p class="footer-about mb-3">
                        Berlangganan newsletter kami untuk mendapatkan penawaran khusus dan informasi terbaru.
                    </p>
                    <form class="footer-newsletter">
                        <input type="email" class="footer-input" placeholder="Alamat Email Anda" required>
                        <button type="submit" class="footer-button">
                            <i class="fas fa-paper-plane me-2"></i> Berlangganan
                        </button>
                    </form>
                </div>
            </div>

            <div class="footer-divider"></div>

            <div class="footer-bottom">
                <p class="footer-copyright">
                    &copy; <span id="currentYear"></span> Bintang Homestay Watukarung. Semua Hak Dilindungi.
                </p>
                <div class="footer-legal">
                    <a href="/privacy-policy" class="footer-legal-link">Kebijakan Privasi</a>
                    <a href="/terms-of-service" class="footer-legal-link">Syarat & Ketentuan</a>
                    <a href="/sitemap" class="footer-legal-link">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button - Sama dengan contoh -->
    <a href="https://wa.me/6281234567890" class="whatsapp-button" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Back to Top Button - Sama dengan contoh -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenuClose = document.getElementById('mobileMenuClose');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');

        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            mobileMenuOverlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // Mencegah scroll ketika menu terbuka
        });

        mobileMenuClose.addEventListener('click', function() {
            closeMobileMenu();
        });

        // Close when clicking overlay
        mobileMenuOverlay.addEventListener('click', function() {
            closeMobileMenu();
        });

        function closeMobileMenu() {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            document.body.style.overflow = ''; // Mengembalikan scroll
        }

        // Close mobile menu when clicking on a link
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                closeMobileMenu();
            });
        });

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });

        // Set current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>
