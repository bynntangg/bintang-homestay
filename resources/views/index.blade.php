<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bintang Homestay | Penginapan Premium di Watukarung, Pacitan</title>
    <meta name="description"
        content="Penginapan nyaman dengan fasilitas lengkap di Pantai Watukarung, Pacitan. Tempat menginap terbaik untuk liburan Anda dengan pemandangan pantai yang menakjubkan.">
    <meta name="keywords"
        content="homestay watukarung, penginapan pacitan, bintang homestay, wisata pacitan, pantai watukarung">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="Bintang Homestay | Penginapan Premium di Watukarung">
    <meta property="og:description" content="Penginapan nyaman dengan fasilitas lengkap di Pantai Watukarung, Pacitan.">
    <meta property="og:image" content="https://bintanghomestay.com/images/social-preview.jpg">
    <meta property="og:url" content="https://bintanghomestay.com">
    <meta property="og:type" content="website">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bintang Homestay | Penginapan Premium di Watukarung">
    <meta name="twitter:description"
        content="Penginapan nyaman dengan fasilitas lengkap di Pantai Watukarung, Pacitan.">
    <meta name="twitter:image" content="https://bintanghomestay.com/images/social-preview.jpg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
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

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 100vh;
            min-height: 700px;
            max-height: 1200px;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .hero-video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(3, 7, 18, 0.2) 0%, rgba(3, 7, 18, 0.8) 100%);
            z-index: 1;
        }

        .hero-content-container {
            position: relative;
            z-index: 2;
            width: 100%;
            padding: 0 1.5rem;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 2.5rem;
            background: rgba(3, 7, 18, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-radius: 1rem;
            border: 1px solid rgba(59, 130, 246, 0.2);
            box-shadow: 0 20px 40px rgba(2, 6, 23, 0.5);
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 1.5rem;
            line-height: 1.1;
        }

        .hero-title .highlight-text {
            position: relative;
            display: inline-block;
        }

        .hero-title .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 10px;
            left: 0;
            width: 100%;
            height: 12px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            z-index: -1;
            opacity: 0.7;
            transform: scaleX(0);
            transform-origin: left;
            animation: highlight 1.5s ease-in-out forwards 1s;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--primary-light);
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            color: var(--white);
            font-size: 1.5rem;
            animation: bounce 2s infinite;
        }

        /* Navbar Styles */
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
            /* Tambahkan ini */
        }

        /* Tambahkan/modifikasi bagian ini di CSS Anda */
        .logo-brand {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            font-weight: 700;
            color: var(--white);
            z-index: 1001;
            margin-right: auto;
            /* Memberikan ruang di sebelah kanan */
            padding: 0.5rem 0;
        }

        .logo-brand img {
            width: 60px;
            height: 60px;
            margin-right: 0;
            margin-bottom: 0.25rem;
        }

        .logo-brand .logo-text {
            display: none;
            /* Sembunyikan teks di mobile jika perlu */
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

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 1001;
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

        /* Mobile Menu Styles */
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
            /* Ini yang membuat rounded pill */
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

        /* Section Styles */
        .section {
            padding: 6rem 0;
            position: relative;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, var(--secondary), var(--secondary-light));
            border-radius: 2px;
        }

        .section-subtitle {
            font-size: 1.25rem;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        /* Features Section */
        .features-section {
            background-color: var(--light);
        }

        .feature-card {
            background: var(--white);
            border-radius: 1rem;
            padding: 2rem;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(29, 78, 216, 0.1) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.75rem;
            color: var(--primary);
        }

        .feature-title {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--dark-light);
        }

        .feature-text {
            color: var(--gray);
        }

        /* Rooms Section */
        .rooms-section {
            background-color: var(--white);
        }

        .room-card {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .room-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .room-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            padding: 0.25rem 1rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            z-index: 1;
        }

        .room-swiper {
            height: 300px;
        }

        .room-swiper .swiper-slide {
            overflow: hidden;
        }

        .room-swiper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .room-card:hover .room-swiper img {
            transform: scale(1.05);
        }

        .room-details {
            padding: 1.5rem;
        }

        .room-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--dark-light);
        }

        .room-price {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .room-price span {
            font-size: 0.875rem;
            color: var(--gray);
            font-weight: 400;
        }

        .room-amenities {
            margin-bottom: 1.5rem;
        }

        .amenity-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            color: var(--gray);
        }

        .amenity-item i {
            margin-right: 0.5rem;
            color: var(--primary);
        }

        /* Gallery Section */
        .gallery-section {
            background-color: var(--light);
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .gallery-item {
            border-radius: 0.75rem;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            aspect-ratio: 1/1;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, transparent 50%);
            display: flex;
            align-items: flex-end;
            padding: 1.5rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-caption {
            color: var(--white);
            transform: translateY(20px);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }

        /* Lightbox */
        .lightbox {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 9999;
            display: none;
            align-items: center;
            justify-content: center;
        }

        .lightbox-container {
            width: 90%;
            max-width: 1200px;
            position: relative;
        }

        .lightbox-close {
            position: absolute;
            top: -50px;
            right: 0;
            color: var(--white);
            font-size: 1.5rem;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
        }

        .lightbox-slider {
            height: 70vh;
        }

        .lightbox-slider .swiper-slide {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lightbox-slider img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }

        .lightbox-thumbs {
            height: 100px;
            margin-top: 1rem;
            overflow: hidden;
        }

        .lightbox-thumbs .swiper-slide {
            width: auto;
            opacity: 0.5;
            transition: opacity 0.3s ease;
            cursor: pointer;
            height: 100%;
        }

        .lightbox-thumbs .swiper-slide-thumb-active {
            opacity: 1;
        }

        .lightbox-thumbs img {
            width: auto;
            height: 100%;
            object-fit: cover;
            border-radius: 4px;
        }

        /* Testimonials Section */
        .testimonials-section {
            background-color: var(--white);
        }

        .testimonial-card {
            background: var(--white);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 1rem;
        }

        .testimonial-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-author {
            font-weight: 600;
            color: var(--dark-light);
            margin-bottom: 0.25rem;
        }

        .testimonial-rating {
            color: var(--warning);
        }

        .testimonial-text {
            font-style: italic;
            color: var(--gray);
            position: relative;
        }

        .testimonial-text::before,
        .testimonial-text::after {
            content: '"';
            font-size: 2rem;
            color: var(--primary-light);
            opacity: 0.3;
            position: absolute;
        }

        .testimonial-text::before {
            top: -15px;
            left: -10px;
        }

        .testimonial-text::after {
            bottom: -25px;
            right: -10px;
        }

        /* Nearby Section */
        .nearby-section {
            background: linear-gradient(to bottom, var(--light) 0%, var(--white) 100%);
        }

        .destination-card {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .destination-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .destination-image {
            height: 220px;
            position: relative;
            overflow: hidden;
        }

        .destination-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .destination-card:hover .destination-image img {
            transform: scale(1.1);
        }

        .destination-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--secondary);
            color: var(--white);
            padding: 0.25rem 1rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .destination-content {
            padding: 1.5rem;
        }

        .destination-rating {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .destination-title {
            font-size: 1.25rem;
            margin-bottom: 0.75rem;
            color: var(--dark-light);
        }

        .destination-description {
            color: var(--gray);
            margin-bottom: 1rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .destination-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .destination-distance {
            display: flex;
            align-items: center;
            color: var(--gray);
        }

        .destination-distance i {
            margin-right: 0.5rem;
            color: var(--secondary);
        }

        .destination-link {
            color: var(--secondary);
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .destination-link i {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .destination-link:hover i {
            transform: translateX(3px);
        }

        /* Contact Section */
        .contact-section {
            background-color: var(--light);
        }

        .contact-card {
            background: var(--white);
            border-radius: 1rem;
            padding: 2rem;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .contact-info {
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(29, 78, 216, 0.1) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: var(--primary);
        }

        .contact-label {
            font-weight: 600;
            color: var(--dark-light);
            margin-bottom: 0.25rem;
        }

        .contact-text {
            color: var(--gray);
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, rgba(29, 78, 216, 0.1) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            transform: translateY(-3px);
        }

        .map-container {
            height: 100%;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Booking Section */
        .booking-section {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.05) 0%, rgba(29, 78, 216, 0.05) 100%);
        }

        .booking-card {
            background: var(--white);
            border-radius: 1rem;
            padding: 2rem;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.3s ease;
        }

        .booking-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .booking-platform {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .booking-logo {
            width: 40px;
            height: 40px;
            border-radius: 0.5rem;
            overflow: hidden;
            margin-right: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .booking-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 0.25rem;
        }

        .booking-title {
            font-size: 1.25rem;
            color: var(--dark-light);
            margin-bottom: 1rem;
        }

        .booking-description {
            color: var(--gray);
            margin-bottom: 1.5rem;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .cta-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .cta-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--white);
        }

        .cta-text {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn-cta-primary {
            background: var(--white);
            color: var(--primary);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-cta-primary:hover {
            background: rgba(255, 255, 255, 0.9);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            color: var(--primary);
        }

        .btn-cta-secondary {
            background: transparent;
            color: var(--white);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            border: 2px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .btn-cta-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            color: var(--white);
        }

        /* Footer */
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

        /* WhatsApp Button */
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

        /* Back to Top Button */
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
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        @keyframes highlight {
            from {
                transform: scaleX(0);
            }

            to {
                transform: scaleX(1);
            }
        }

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
        @media (max-width: 1199.98px) {
            .hero-title {
                font-size: 3rem;
            }

            .section {
                padding: 5rem 0;
            }
        }

        @media (max-width: 991.98px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .section-subtitle {
                font-size: 1.1rem;
            }
        }

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
        }

        /* Untuk mobile */
        @media (max-width: 991.98px) {
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
            .hero-title {
                font-size: 2.2rem;
            }

            .hero-content {
                padding: 1.5rem;
            }

            .section {
                padding: 4rem 0;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .cta-title {
                font-size: 2rem;
            }

            .cta-text {
                font-size: 1.1rem;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .footer-legal {
                flex-direction: column;
                gap: 0.5rem;
                margin-top: 1rem;
            }
        }

        @media (max-width: 575.98px) {
            .hero-title {
                font-size: 1.8rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .cta-title {
                font-size: 1.5rem;
            }

            .cta-buttons {
                flex-direction: column;
                gap: 1rem;
            }

            .btn-cta-primary,
            .btn-cta-secondary {
                width: 100%;
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
    <!-- Navbar -->
    <header class="navbar-ocean" id="navbar">
        <div class="navbar-container">
            <!-- Di bagian navbar (header) -->
            <a href="#home" class="logo-brand">
                <img src="images/bintang.png" alt="Bintang Homestay" class="logo-img">
                <span class="logo-text">Bintang Homestay</span>
            </a>
            <nav class="nav-menu">
                <ul class="nav-list d-flex mb-0">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active">
                            <i class="fas fa-home me-2"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#fasilitas" class="nav-link">
                            <i class="fas fa-umbrella-beach me-2"></i> Fasilitas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#kamar" class="nav-link">
                            <i class="fas fa-bed me-2"></i> Kamar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#galeri" class="nav-link">
                            <i class="fas fa-camera me-2"></i> Galeri
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#wisata" class="nav-link">
                            <i class="fas fa-map-marked-alt me-2"></i> Wisata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimoni" class="nav-link">
                            <i class="fas fa-star me-2"></i> Testimoni
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#kontak" class="nav-link">
                            <i class="fas fa-phone me-2"></i> Kontak
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="d-flex align-items-center">
                <a href="#pemesanan" class="btn-book me-3 d-none d-md-inline-flex">
                    <i class="fas fa-calendar-check me-2"></i> Pesan Sekarang
                </a>

                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <a href="#home" class="logo-brand">
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
                    <a href="#home" class="mobile-nav-link">
                        <i class="fas fa-home"></i> Beranda
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="#fasilitas" class="mobile-nav-link">
                        <i class="fas fa-umbrella-beach"></i> Fasilitas
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="#kamar" class="mobile-nav-link">
                        <i class="fas fa-bed"></i> Kamar
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="#galeri" class="mobile-nav-link">
                        <i class="fas fa-camera"></i> Galeri
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="#wisata" class="mobile-nav-link">
                        <i class="fas fa-map-marked-alt"></i> Wisata
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="#testimoni" class="mobile-nav-link">
                        <i class="fas fa-star"></i> Testimoni
                    </a>
                </li>
                <li class="mobile-nav-item">
                    <a href="#kontak" class="mobile-nav-link">
                        <i class="fas fa-phone"></i> Kontak
                    </a>
                </li>
            </ul>
        </nav>

        <a href="#pemesanan" class="btn-book w-100 mt-3">
            <i class="fas fa-calendar-check me-2"></i> Pesan Sekarang
        </a>
    </div>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="hero-video-container">
            <video autoplay muted loop playsinline class="video-bg">
                <source src="videos/PantaiWatuKarung.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="hero-overlay"></div>
        </div>

        <div class="hero-content-container">
            <div class="hero-content" data-aos="fade-up">
                <h1 class="hero-title">
                    Homestay's Bintang <span class="highlight-text">Watukarung Beach</span>
                </h1>
                <p class="hero-subtitle">
                    Nikmati liburan Anda dengan kenyamanan maksimal hanya beberapa langkah dari pantai terindah di
                    Pacitan.
                </p>
                <div class="hero-buttons">
                    <a href="#pemesanan" class="btn-book me-3">
                        <i class="fas fa-calendar-check me-2"></i> Pesan Sekarang
                    </a>
                    <a href="#kamar" class="btn btn-outline-light">
                        <i class="fas fa-bed me-2"></i> Lihat Kamar
                    </a>
                </div>
            </div>
        </div>

        <a href="#fasilitas" class="scroll-down">
            <i class="fas fa-chevron-down"></i>
        </a>
    </section>

    <!-- Features Section -->
    <section class="section features-section" id="fasilitas">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Fasilitas Unggulan</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Kami menyediakan berbagai fasilitas untuk membuat pengalaman menginap Anda lebih nyaman dan berkesan
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-wifi"></i>
                        </div>
                        <h3 class="feature-title">WiFi Cepat</h3>
                        <p class="feature-text">
                            Akses internet berkecepatan tinggi gratis untuk semua tamu dengan jangkauan di seluruh area
                            homestay.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-umbrella-beach"></i>
                        </div>
                        <h3 class="feature-title">Dekat Pantai</h3>
                        <p class="feature-text">
                            Hanya 5 menit jalan kaki ke Pantai Watukarung yang indah dengan akses khusus untuk tamu
                            kami.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-car"></i>
                        </div>
                        <h3 class="feature-title">Parkir Luas</h3>
                        <p class="feature-text">
                            Area parkir aman dan luas untuk kendaraan tamu dengan sistem keamanan 24 jam.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <h3 class="feature-title">Dapur Bersama</h3>
                        <p class="feature-text">
                            Fasilitas dapur lengkap untuk memasak makanan favorit Anda dengan peralatan modern.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rooms Section -->
    <section class="section rooms-section" id="kamar">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Pilihan Kamar Kami</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Temukan kamar yang sesuai dengan kebutuhan Anda dengan fasilitas lengkap dan harga terjangkau
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="room-card">
                        <div class="room-badge">Terpopuler</div>
                        <div class="room-swiper swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="images/kamar1.jpeg" alt="Kamar Double Bed">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/home10.jpeg" alt="Kamar Mandi Standard">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/kamar2.jpeg" alt="Interior Kamar">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="room-details">
                            <h3 class="room-title">Kamar Double Bed</h3>
                            <div class="room-price">
                                Rp 350.000 <span>/ malam</span>
                            </div>
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-bed"></i> 1 Double Bed (160x200 cm)
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i> TV 32" dengan channel lengkap
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-snowflake"></i> AC dengan pengatur suhu
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i> WiFi gratis kecepatan tinggi
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-bath"></i> Kamar mandi dengan shower air panas
                                </div>
                            </div>
                            <a href="#pemesanan" class="btn-book w-100">
                                <i class="fas fa-calendar-check me-2"></i> Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="room-card">
                        <div class="room-badge">Keluarga</div>
                        <div class="room-swiper swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="images/kamar2.jpeg" alt="Kamar Twin Bed">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/home7.jpeg" alt="Kamar Twin">
                                </div>
                                <div class="swiper-slide">
                                    <img src="images/kamar1.jpeg" alt="Interior Kamar">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="room-details">
                            <h3 class="room-title">Kamar Twin Bed</h3>
                            <div class="room-price">
                                Rp 350.000 <span>/ malam</span>
                            </div>
                            <div class="room-amenities">
                                <div class="amenity-item">
                                    <i class="fas fa-bed"></i> 2 Single Bed (90x200 cm)
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-tv"></i> TV 32" dengan channel lengkap
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-snowflake"></i> AC dengan pengatur suhu
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-wifi"></i> WiFi gratis kecepatan tinggi
                                </div>
                                <div class="amenity-item">
                                    <i class="fas fa-bath"></i> Kamar mandi dengan shower air panas
                                </div>
                            </div>
                            <a href="#pemesanan" class="btn-book w-100">
                                <i class="fas fa-calendar-check me-2"></i> Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="section gallery-section" id="galeri">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Galeri Kami</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Jelajahi suasana dan fasilitas Bintang Homestay melalui koleksi foto kami
                </p>
            </div>

            <div class="gallery-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="gallery-item" onclick="openLightbox(0)">
                    <img src="images/home.jpeg" alt="Bintang Homestay">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h4>Fasade Homestay</h4>
                            <p>Tampak depan Bintang Homestay</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" onclick="openLightbox(1)">
                    <img src="images/home2.jpeg" alt="Lobby">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h4>Area Lobby</h4>
                            <p>Ruang tamu yang nyaman</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" onclick="openLightbox(2)">
                    <img src="images/home1.jpeg" alt="Area Parkir">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h4>Area Parkir</h4>
                            <p>Parkir luas dan aman</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" onclick="openLightbox(3)">
                    <img src="images/home3.jpeg" alt="Shower">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h4>Kamar Mandi</h4>
                            <p>Bersih dengan air panas</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" onclick="openLightbox(4)">
                    <img src="images/home4.jpeg" alt="Pemandangan">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h4>Pemandangan</h4>
                            <p>View dari kamar</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" onclick="openLightbox(5)">
                    <img src="images/home11.jpeg" alt="Lantai 1">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h4>Koridor Lantai 1</h4>
                            <p>Akses ke kamar</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" onclick="openLightbox(6)">
                    <img src="images/home6.jpeg" alt="Lantai 2">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h4>Koridor Lantai 2</h4>
                            <p>Area kamar lantai atas</p>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" onclick="openLightbox(7)">
                    <img src="images/home12.jpeg" alt="Logo">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h4>Logo Homestay</h4>
                            <p>Identitas kami</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lightbox -->
            <div class="lightbox" id="lightbox">
                <div class="lightbox-container">
                    <button class="lightbox-close" onclick="closeLightbox()">
                        <i class="fas fa-times"></i>
                    </button>

                    <div class="lightbox-slider swiper">
                        <div class="swiper-wrapper">
                            <!-- Slides will be added by JavaScript -->
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                    <div class="lightbox-thumbs swiper">
                        <div class="swiper-wrapper">
                            <!-- Thumbs will be added by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials-section" id="testimoni">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Apa Kata Tamu Kami</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Pengalaman nyata dari tamu yang pernah menginap di Bintang Homestay
                </p>
            </div>

            <div class="testimonial-slider swiper" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Dewi Lestari">
                                </div>
                                <div>
                                    <h4 class="testimonial-author">Dewi Lestari</h4>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                Kamar sangat nyaman dan bersih. Lokasi strategis dekat pantai. Pelayanan staff sangat
                                ramah dan membantu. Pasti akan kembali lagi!
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Budi Santoso">
                                </div>
                                <div>
                                    <h4 class="testimonial-author">Budi Santoso</h4>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                Homestay dengan fasilitas lengkap dan harga terjangkau. WiFi cepat, kamar mandi bersih,
                                dan ada dapur bersama yang sangat membantu.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Anita Wijaya">
                                </div>
                                <div>
                                    <h4 class="testimonial-author">Anita Wijaya</h4>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                Sangat cocok untuk keluarga. Kamar luas dan bersih. Area parkir aman. Hanya saja sarapan
                                belum tersedia, tapi banyak warung makan di sekitar.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-header">
                                <div class="testimonial-avatar">
                                    <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Rudi Hermawan">
                                </div>
                                <div>
                                    <h4 class="testimonial-author">Rudi Hermawan</h4>
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="testimonial-text">
                                Penginapan terbaik di Watukarung! Pemandangan bagus, staff ramah, dan fasilitas lengkap.
                                Sudah 3 kali menginap di sini dan selalu puas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Nearby Section -->
    <section class="section nearby-section" id="wisata">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Rekomendasi Wisata Sekitar</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Jelajahi keindahan alam Pacitan dengan destinasi wisata terbaik di sekitar Watukarung
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="images/GONG.jpeg" alt="Goa Gong">
                            <div class="destination-badge">Terpopuler</div>
                        </div>
                        <div class="destination-content">
                            <div class="destination-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <span class="ms-2 small">4.8 (1.2k review)</span>
                            </div>
                            <h3 class="destination-title">Goa Gong</h3>
                            <p class="destination-description">
                                Goa terindah di Asia Tenggara dengan formasi stalaktit dan stalagmit yang memukau.
                            </p>
                            <div class="destination-meta">
                                <div class="destination-distance">
                                    <i class="fas fa-map-marker-alt"></i> ~15 km
                                </div>
                                <a href="https://youtu.be/n3J4ZTFNFVQ?si=deoJAX35GrayuQ52" target="_blank"
                                    class="destination-link">
                                    Explore <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="images/kasap.jpg" alt="Pantai Kasap">
                        </div>
                        <div class="destination-content">
                            <div class="destination-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                                <span class="ms-2 small">4.7 (890 review)</span>
                            </div>
                            <h3 class="destination-title">Pantai Kasap</h3>
                            <p class="destination-description">
                                Pantai dengan pasir putih dan air jernih yang cocok untuk berenang dan snorkeling.
                            </p>
                            <div class="destination-meta">
                                <div class="destination-distance">
                                    <i class="fas fa-map-marker-alt"></i> ~8 km
                                </div>
                                <a href="https://youtu.be/T6ykmxbb6tU?si=gzhrGTOQa32bJL1O" target="_blank"
                                    class="destination-link">
                                    Explore <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="images/klayar.jpg" alt="Pantai Klayar">
                            <div class="destination-badge">Eksklusif</div>
                        </div>
                        <div class="destination-content">
                            <div class="destination-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <span class="ms-2 small">4.9 (1.5k review)</span>
                            </div>
                            <h3 class="destination-title">Pantai Klayar</h3>
                            <p class="destination-description">
                                Pantai eksotis dengan formasi batuan unik dan air terjun kecil di tepi pantai.
                            </p>
                            <div class="destination-meta">
                                <div class="destination-distance">
                                    <i class="fas fa-map-marker-alt"></i> ~25 km
                                </div>
                                <a href="https://youtu.be/cldWgBqW9Ps?si=7IPKLtEB6CmQH-bd" target="_blank"
                                    class="destination-link">
                                    Explore <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="images/MARON.jpg" alt="Sungai Maron">
                        </div>
                        <div class="destination-content">
                            <div class="destination-rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <span class="ms-2 small">4.5 (750 review)</span>
                            </div>
                            <h3 class="destination-title">Sungai Maron</h3>
                            <p class="destination-description">
                                Wisata sungai alami dengan air jernih dan suasana asri yang cocok untuk kegiatan susur
                                sungai.
                            </p>
                            <div class="destination-meta">
                                <div class="destination-distance">
                                    <i class="fas fa-map-marker-alt"></i> ~12 km
                                </div>
                                <a href="https://youtu.be/DftKpcWkKyg?si=zLBElQb-MwwZRm6B" target="_blank"
                                    class="destination-link">
                                    Explore <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section contact-section" id="kontak">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Hubungi Kami</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Kami siap membantu Anda untuk informasi lebih lanjut atau pemesanan
                </p>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-card">
                        <h3 class="mb-4">Informasi Kontak</h3>

                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="contact-label">Alamat</h4>
                                    <p class="contact-text">
                                        Jl. Pantai Watukarung No. 123, Desa Watukarung, Kec. Pringkuku, Pacitan, Jawa
                                        Timur
                                    </p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h4 class="contact-label">Telepon/WhatsApp</h4>
                                    <p class="contact-text">
                                        +62 896-8189-1033<br>
                                        +62 882-9478-1090
                                    </p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="contact-label">Email</h4>
                                    <p class="contact-text">
                                        info@bintanghomestay.com<br>
                                        reservation@bintanghomestay.com
                                    </p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h4 class="contact-label">Jam Operasional</h4>
                                    <p class="contact-text">
                                        Setiap hari 24 jam<br>
                                        Check-in: 13:00 WIB | Check-out: 11:00 WIB
                                    </p>
                                </div>
                            </div>
                        </div>

                        <h4 class="mb-3">Media Sosial</h4>
                        <div class="social-links">
                            <a href="#" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-link">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-card h-100">
                        <h3 class="mb-4">Lokasi Kami</h3>
                        <div class="map-container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.43136285088!2d110.97157957500978!3d-8.236455891796606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bddbf867b05f7%3A0x9df2ed136347df0b!2sBintang%20Homestay%20Watukarung!5e1!3m2!1sid!2sid!4v1747496251450!5m2!1sid!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="text-center mt-3">
                            <a href="https://maps.google.com/?q=Bintang+Homestay+Watukarung" target="_blank"
                                class="btn-book">
                                <i class="fas fa-directions me-2"></i> Dapatkan Petunjuk Arah
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="section booking-section" id="pemesanan">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title" data-aos="fade-up">Pesan Kamar Anda</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Kami bekerja sama dengan platform terpercaya untuk memberikan pengalaman pemesanan yang nyaman
                </p>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="booking-card">
                        <div class="booking-platform">
                            <div class="booking-logo">
                                <img src="https://www.tiket.com/favicon.ico" alt="Tiket.com">
                            </div>
                            <span>Pesan melalui</span>
                        </div>
                        <h3 class="booking-title">Tiket.com</h3>
                        <p class="booking-description">
                            Platform travel terbesar di Indonesia dengan harga kompetitif dan promo menarik
                        </p>
                        <a href="https://www.tiket.com/homes/indonesia/bintang-homestay-watukarung-605001684298220966"
                            target="_blank" class="btn-book w-100">
                            <i class="fas fa-external-link-alt me-2"></i> Pesan di Tiket.com
                        </a>
                    </div>
                </div>

                <div class="col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="booking-card">
                        <div class="booking-platform">
                            <div class="booking-logo">
                                <img src="https://www.agoda.com/favicon.ico" alt="Agoda">
                            </div>
                            <span>Pesan melalui</span>
                        </div>
                        <h3 class="booking-title">Agoda</h3>
                        <p class="booking-description">
                            Platform internasional dengan jaminan harga terbaik dan ulasan tamu yang transparan
                        </p>
                        <a href="https://www.agoda.com/id-id/bintang-homestay-watukarung-h37351915/hotel/pacitan-id.html?ds=heSmelgg4%2BFrJaOs"
                            target="_blank" class="btn-book w-100">
                            <i class="fas fa-external-link-alt me-2"></i> Pesan di Agoda
                        </a>
                    </div>
                </div>
            </div>

            <div class="booking-support" data-aos="fade-up" data-aos-delay="400">
                <div class="row align-items-center">
                    <div class="col-md-8 mb-3 mb-md-0">
                        <div class="d-flex align-items-center">
                            <div class="support-icon me-3">
                                <i class="fab fa-whatsapp fa-2x text-success"></i>
                            </div>
                            <div>
                                <h4 class="mb-1">Butuh Bantuan?</h4>
                                <p class="mb-0">Tim kami siap membantu Anda 24 jam melalui WhatsApp</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <a href="https://wa.me/6289681891033" target="_blank" class="btn-book">
                            <i class="fab fa-whatsapp me-2"></i> Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta-section">
        <div class="cta-pattern"></div>
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2 class="cta-title">Siap Memesan Penginapan Anda?</h2>
                <p class="cta-text">
                    Nikmati pengalaman menginap terbaik di Watukarung dengan fasilitas lengkap dan pelayanan ramah.
                </p>
                <div class="cta-buttons">
                    <a href="#pemesanan" class="btn-cta-primary">
                        <i class="fas fa-calendar-check me-2"></i> Pesan Sekarang
                    </a>
                    <a href="#kontak" class="btn-cta-secondary">
                        <i class="fas fa-phone me-2"></i> Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
                        <li><a href="#home" class="footer-link">Beranda</a></li>
                        <li><a href="#fasilitas" class="footer-link">Fasilitas</a></li>
                        <li><a href="#kamar" class="footer-link">Kamar</a></li>
                        <li><a href="#galeri" class="footer-link">Galeri</a></li>
                        <li><a href="#wisata" class="footer-link">Wisata</a></li>
                        <li><a href="#testimoni" class="footer-link">Testimoni</a></li>
                        <li><a href="#kontak" class="footer-link">Kontak</a></li>
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
                        <span>+62 896-8189-1033</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>bintang@homestay.com</span>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3">
                    <h3 class="footer-title">Newsletter</h3>
                    <p class="footer-about">
                        Dapatkan promo dan penawaran khusus dengan berlangganan newsletter kami.
                    </p>
                    <form class="footer-newsletter">
                        <input type="email" placeholder="Email Anda" class="footer-input">
                        <button type="submit" class="footer-button">
                            <i class="fas fa-paper-plane me-2"></i> Berlangganan
                        </button>
                    </form>
                </div>
            </div>

            <div class="footer-divider"></div>

            <div class="footer-bottom">
                <p class="footer-copyright">
                    &copy; 2023 Bintang Homestay. All rights reserved.
                </p>
                <div class="footer-legal">
                    <a href="/privacy-policy" class="footer-legal-link">Kebijakan Privasi</a>
                    <a href="/terms-of-service" class="footer-legal-link">Syarat & Ketentuan</a>
                    <a href="/sitemap" class="footer-legal-link">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/6289681891033" target="_blank" class="whatsapp-button">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Back to Top Button -->
    <a href="#home" class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Scripts -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Main JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenuClose = document.getElementById('mobileMenuClose');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        mobileMenuClose.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        });

        // Close mobile menu when clicking on a link
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            });
        });

        // Prevent closing when clicking inside mobile menu
        mobileMenu.addEventListener('click', (e) => {
            e.stopPropagation();
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            const isClickInsideMobileMenu = mobileMenu.contains(e.target);
            const isClickOnMenuButton = mobileMenuBtn.contains(e.target);

            if (mobileMenu.classList.contains('active') && !isClickInsideMobileMenu && !isClickOnMenuButton) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }

            // Back to top button
            const backToTop = document.getElementById('backToTop');
            if (window.scrollY > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });

        // Initialize room swipers
        const roomSwipers = document.querySelectorAll('.room-swiper');
        roomSwipers.forEach(swiper => {
            new Swiper(swiper, {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        });

        // Initialize testimonial slider
        const testimonialSlider = new Swiper('.testimonial-slider', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                }
            }
        });

        // Gallery lightbox
        const galleryItems = [{
                src: 'images/home.jpeg',
                title: 'Fasade Homestay',
                description: 'Tampak depan Bintang Homestay'
            },
            {
                src: 'images/home2.jpeg',
                title: 'Area Lobby',
                description: 'Ruang tamu yang nyaman'
            },
            {
                src: 'images/home1.jpeg',
                title: 'Area Parkir',
                description: 'Parkir luas dan aman'
            },
            {
                src: 'images/home3.jpeg',
                title: 'Kamar Mandi',
                description: 'Bersih dengan air panas'
            },
            {
                src: 'images/home4.jpeg',
                title: 'Pemandangan',
                description: 'View dari kamar'
            },
            {
                src: 'images/home11.jpeg',
                title: 'Koridor Lantai 1',
                description: 'Akses ke kamar'
            },
            {
                src: 'images/home6.jpeg',
                title: 'Koridor Lantai 2',
                description: 'Area kamar lantai atas'
            },
            {
                src: 'images/home12.jpeg',
                title: 'Logo Homestay',
                description: 'Identitas kami'
            }
        ];

        let lightboxSlider, lightboxThumbs;

        function openLightbox(index) {
            const lightbox = document.getElementById('lightbox');
            const lightboxSliderWrapper = document.querySelector('.lightbox-slider .swiper-wrapper');
            const lightboxThumbsWrapper = document.querySelector('.lightbox-thumbs .swiper-wrapper');

            // Clear existing slides
            lightboxSliderWrapper.innerHTML = '';
            lightboxThumbsWrapper.innerHTML = '';

            // Add slides
            galleryItems.forEach((item, i) => {
                // Main slide
                const slide = document.createElement('div');
                slide.className = 'swiper-slide';

                const img = document.createElement('img');
                img.src = item.src;
                img.alt = item.title;

                slide.appendChild(img);
                lightboxSliderWrapper.appendChild(slide);

                // Thumbnail
                const thumb = document.createElement('div');
                thumb.className = 'swiper-slide';

                const thumbImg = document.createElement('img');
                thumbImg.src = item.src;
                thumbImg.alt = item.title;

                thumb.appendChild(thumbImg);
                lightboxThumbsWrapper.appendChild(thumb);
            });

            // Initialize sliders if not already initialized
            if (!lightboxSlider) {
                lightboxSlider = new Swiper('.lightbox-slider', {
                    loop: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    }
                });
            }

            if (!lightboxThumbs) {
                lightboxThumbs = new Swiper('.lightbox-thumbs', {
                    slidesPerView: 'auto',
                    spaceBetween: 10,
                    centeredSlides: true,
                    slideToClickedSlide: true,
                });

                // Connect thumbs to main slider
                lightboxSlider.controller.control = lightboxThumbs;
                lightboxThumbs.controller.control = lightboxSlider;
            }

            // Go to selected slide
            lightboxSlider.slideTo(index);

            // Show lightbox
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.style.display = 'none';
            document.body.style.overflow = '';
        }

        // Close lightbox when clicking outside
        document.getElementById('lightbox').addEventListener('click', (e) => {
            if (e.target === e.currentTarget) {
                closeLightbox();
            }
        });

        // Close lightbox with ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && document.getElementById('lightbox').style.display === 'flex') {
                closeLightbox();
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Pause video on mobile when not in view
        const heroVideo = document.querySelector('.hero-video-container video');
        if (window.innerWidth < 768) {
            heroVideo.pause();
        }

        // Play/pause video based on visibility
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    heroVideo.play();
                } else {
                    heroVideo.pause();
                }
            });
        }, {
            threshold: 0.5
        });

        observer.observe(heroVideo);
    </script>
</body>

</html>
