<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bintang Homestay | Penginapan Nyaman di Watukarung</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        /* Global Styles */
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }

        .hero-overlay {
            background: linear-gradient(to right, rgba(3, 7, 18, 0.85), rgba(7, 29, 73, 0.7));
        }

        /* Navbar Styles */
        .navbar-ocean {
            background: rgba(3, 7, 18, 0.65);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(59, 130, 246, 0.15);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .navbar-ocean.scrolled {
            background: rgba(3, 7, 18, 0.9);
            box-shadow: 0 4px 30px rgba(2, 6, 23, 0.25);
        }

        .nav-container {
            max-width: 1280px;
            padding: 1rem 1.5rem;
        }

        .logo-wave {
            background: linear-gradient(135deg, rgba(147, 197, 253, 0.9) 0%, rgba(96, 165, 250, 0.95) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 2px 4px rgba(7, 29, 73, 0.25);
        }

        .nav-pill {
            padding: 0.5rem 1rem;
            margin: 0 0.25rem;
            border-radius: 9999px;
            font-weight: 500;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(30, 58, 138, 0.3);
            color: rgba(219, 234, 254, 0.9);
            border: 1px solid rgba(59, 130, 246, 0.15);
            font-size: 0.9rem;
        }

        @media (min-width: 1024px) {
            .nav-pill {
                padding: 0.75rem 1.5rem;
                margin: 0 0.5rem;
                font-size: 1rem;
            }
        }

        .nav-pill:hover {
            transform: translateY(-2px);
            background: rgba(29, 78, 216, 0.4);
            color: white;
            box-shadow: 0 4px 12px rgba(29, 78, 216, 0.15);
            border-color: rgba(59, 130, 246, 0.3);
        }

        .nav-pill.active {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.6) 0%, rgba(29, 78, 216, 0.7) 100%);
            color: white;
            border-color: rgba(147, 197, 253, 0.5);
        }

        .nav-button-ocean {
            background: linear-gradient(135deg, rgba(249, 168, 38, 0.95) 0%, rgba(234, 88, 12, 0.9) 100%);
            color: white;
            padding: 0.5rem 1.25rem;
            border-radius: 9999px;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(5, 11, 26, 0.25);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(251, 191, 36, 0.3);
            font-size: 0.9rem;
        }

        @media (min-width: 1024px) {
            .nav-button-ocean {
                padding: 0.75rem 2rem;
                font-size: 1rem;
            }
        }

        .nav-button-ocean:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(234, 88, 12, 0.25);
            background: linear-gradient(135deg, rgba(251, 191, 36, 0.95) 0%, rgba(234, 88, 12, 0.95) 100%);
        }

        /* Mobile Menu */
        .mobile-menu-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: none;
        }

        .mobile-menu-container.show {
            display: block;
        }

        .mobile-menu-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .mobile-menu {
            position: absolute;
            top: 0;
            right: 0;
            width: 85%;
            max-width: 320px;
            height: 100%;
            background: rgba(3, 7, 18, 0.95);
            border-left: 1px solid rgba(30, 64, 175, 0.3);
            box-shadow: -10px 0 30px rgba(2, 6, 23, 0.5);
            overflow-y: auto;
            transform: translateX(100%);
            transition: transform 0.3s ease-out;
            padding: 1.5rem;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        .mobile-nav-item {
            padding: 0.75rem 1.25rem;
            margin: 0.25rem 0;
            border-radius: 9999px;
            background: rgba(30, 58, 138, 0.3);
            color: rgba(219, 234, 254, 0.9);
            transition: all 0.3s ease;
            border: 1px solid rgba(59, 130, 246, 0.1);
            font-size: 0.95rem;
            display: flex;
            align-items: center;
        }

        .mobile-nav-item:hover,
        .mobile-nav-item.active {
            background: rgba(29, 78, 216, 0.4);
            color: white;
        }

        .mobile-menu-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            color: white;
            font-size: 1.5rem;
            background: transparent;
            border: none;
            cursor: pointer;
        }

        /* Hero Section */
        .hero-section {
            height: 100vh;
            min-height: 600px;
            max-height: 1200px;
        }

        .hero-content {
            background: rgba(3, 7, 18, 0.7);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(59, 130, 246, 0.15);
            box-shadow: 0 10px 30px rgba(2, 6, 23, 0.5);
            padding: 1.5rem;
            width: 90%;
            max-width: 800px;
        }

        @media (min-width: 768px) {
            .hero-content {
                padding: 2rem;
            }
        }

        .hero-title {
            font-size: 2rem;
            line-height: 1.2;
        }

        @media (min-width: 768px) {
            .hero-title {
                font-size: 3rem;
            }
        }

        .hero-subtitle {
            font-size: 1rem;
        }

        @media (min-width: 768px) {
            .hero-subtitle {
                font-size: 1.25rem;
            }
        }

        /* Video Background */
        .video-bg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
        }

        /* Room Card Styles */
        .room-card {
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: auto;
            margin-bottom: 2rem;
        }

        @media (min-width: 1024px) {
            .room-card {
                height: 100%;
                margin-bottom: 0;
            }
        }

        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .room-badge {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background: linear-gradient(135deg, #3B82F6 0%, #1D4ED8 100%);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.7rem;
            font-weight: 600;
        }

        @media (min-width: 768px) {
            .room-badge {
                top: 1rem;
                right: 1rem;
                padding: 0.25rem 1rem;
                font-size: 0.75rem;
            }
        }

        .price-tag {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1E40AF;
        }

        @media (min-width: 768px) {
            .price-tag {
                font-size: 1.5rem;
            }
        }

        .per-night {
            font-size: 0.75rem;
            color: #6B7280;
        }

        @media (min-width: 768px) {
            .per-night {
                font-size: 0.875rem;
            }
        }

        .amenity-icon {
            color: #3B82F6;
            margin-right: 0.5rem;
            font-size: 0.875rem;
        }

        /* Room Swiper */
        .room-swiper {
            height: 250px;
            min-height: 250px;
        }

        @media (min-width: 768px) {
            .room-swiper {
                height: 300px;
                min-height: 300px;
            }
        }

        .room-swiper .swiper-slide {
            height: 100%;
        }

        /* Gallery Grid */
        .gallery-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
        }

        @media (min-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 1rem;
            }
        }

        @media (min-width: 1024px) {
            .gallery-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Lightbox */
        #lightbox {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 99999;
            display: none;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.9);
            padding: 1rem;
        }

        .lightbox-container {
            width: 100%;
            max-width: 1200px;
            height: 100%;
            max-height: 90vh;
            position: relative;
        }

        .lightbox-swiper {
            height: calc(100% - 100px);
            width: 100%;
        }

        .thumbnail-swiper {
            height: 80px;
            padding: 0.5rem 0;
            margin-top: 10px;
        }

        .thumbnail-swiper .swiper-slide {
            width: 80px;
            height: 60px;
            opacity: 0.6;
            transition: opacity 0.3s;
            cursor: pointer;
        }

        .thumbnail-swiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .lightbox-close {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 1.5rem;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
        }

        .lightbox-close:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: white;
            background: rgba(0, 0, 0, 0.5);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 1.2rem;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        /* Testimonial */
        .testimonial-swiper {
            padding-bottom: 2rem;
        }

        /* Section Padding */
        .section-py {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        @media (min-width: 768px) {
            .section-py {
                padding-top: 4rem;
                padding-bottom: 4rem;
            }
        }

        /* Container */
        .section-container {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        @media (min-width: 640px) {
            .section-container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            .section-container {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        /* Button Sizes */
        .btn {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }

        @media (min-width: 768px) {
            .btn {
                padding: 0.75rem 1.5rem;
                font-size: 1rem;
            }
        }

        /* Text Sizes */
        .section-title {
            font-size: 1.75rem;
        }

        @media (min-width: 768px) {
            .section-title {
                font-size: 2.25rem;
            }
        }

        .section-subtitle {
            font-size: 1rem;
        }

        @media (min-width: 768px) {
            .section-subtitle {
                font-size: 1.25rem;
            }
        }

        /* Utility Classes */
        .text-balance {
            text-wrap: balance;
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

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        /* WhatsApp Button */
        .whatsapp-btn {
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
            bottom: 1rem;
            right: 1rem;
        }

        @media (min-width: 768px) {
            .whatsapp-btn {
                width: 60px;
                height: 60px;
                font-size: 1.75rem;
                bottom: 2rem;
                right: 2rem;
            }
        }
    </style>
</head>

<body class="bg-gray-900 text-gray-100 font-sans">
    <!-- Hero Section with Navbar -->
    <section id="home" class="hero-section relative flex items-center overflow-hidden">
        <!-- Hero Video Background -->
        <div class="absolute inset-0 w-full h-full">
            <video autoplay muted loop playsinline class="video-bg">
                <source src="/videos/PantaiWatuKarung.mp4" type="video/mp4">
                <img src="/images/fallback-hero.jpg" alt="Pantai Watukarung" class="w-full h-full object-cover">
            </video>
            <div class="absolute inset-0 bg-gradient-to-b from-blue-900/30 via-slate-900/70 to-blue-900/30"></div>
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-6 relative z-10">
            <div class="hero-content mx-auto">
                <h1 class="hero-title font-bold mb-4 text-balance">Penginapan Nyaman di <span
                        class="text-blue-300">Pantai Watukarung</span></h1>
                <p class="hero-subtitle mb-6 text-blue-100 text-balance">Nikmati liburan Anda dengan kenyamanan maksimal
                    hanya beberapa langkah dari pantai terindah di Pacitan.</p>
                <div class="flex flex-wrap gap-3">
                    <a href="#pemesanan"
                        class="btn bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium flex items-center">
                        <i class="fas fa-calendar-check mr-2"></i> Pesan Sekarang
                    </a>
                    <a href="#kamar"
                        class="btn bg-white/10 hover:bg-white/20 text-white rounded-lg font-medium border border-white/20 flex items-center">
                        <i class="fas fa-bed mr-2"></i> Lihat Kamar
                    </a>
                </div>
            </div>
        </div>

        <!-- Floating Navbar -->
        <header class="fixed top-0 left-0 right-0 z-50" x-data="{ isOpen: false, scrolled: false }"
            @scroll.window="scrolled = (window.pageYOffset > 20)">
            <nav class="navbar-ocean transition-all duration-400" :class="{ 'scrolled': scrolled }">
                <div class="nav-container flex justify-between items-center py-2 lg:py-3">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <a href="#home" class="text-xl md:text-2xl font-bold logo-wave flex items-center">
                            <img src="{{ asset('images/bintang.png') }}" alt="Logo"
                                class="w-8 h-8 md:w-10 md:h-10 mr-2">
                            <span class="hidden sm:inline">Bintang Homestay</span>
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden lg:flex items-center space-x-2">
                        <div class="flex space-x-1">
                            <a href="#home" class="nav-pill active">
                                <i class="fas fa-home mr-2"></i>Beranda
                            </a>
                            <a href="#fasilitas" class="nav-pill">
                                <i class="fas fa-umbrella-beach mr-2"></i>Fasilitas
                            </a>
                            <a href="#kamar" class="nav-pill">
                                <i class="fas fa-bed mr-2"></i>Kamar
                            </a>
                            <a href="#galeri" class="nav-pill">
                                <i class="fas fa-camera mr-2"></i>Galeri
                            </a>
                            <a href="#wisata" class="nav-pill">
                                <i class="fas fa-map-marked-alt mr-2"></i>Wisata
                            </a>
                            <a href="#testimoni" class="nav-pill">
                                <i class="fas fa-star mr-2"></i>Testimoni
                            </a>
                            <a href="#kontak" class="nav-pill">
                                <i class="fas fa-phone mr-2"></i>Kontak
                            </a>
                        </div>
                        <a href="#pemesanan" class="nav-button-ocean ml-2">
                            <i class="fas fa-calendar-check mr-2"></i>Pesan
                        </a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="lg:hidden">
                        <button @click="isOpen = true" class="text-blue-100 focus:outline-none">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                    </div>
                </div>
            </nav>

            <!-- Mobile Navigation -->
            <div class="mobile-menu-container" :class="{ 'show': isOpen }" x-show="isOpen" x-transition>
                <div class="mobile-menu-overlay" @click="isOpen = false"></div>
                <div class="mobile-menu" :class="{ 'open': isOpen }">
                    <button class="mobile-menu-close" @click="isOpen = false">
                        <i class="fas fa-times"></i>
                    </button>

                    <div class="flex flex-col space-y-4 mt-12">
                        <a href="#home" @click="isOpen = false" class="mobile-nav-item active">
                            <i class="fas fa-home mr-3"></i>Beranda
                        </a>
                        <a href="#fasilitas" @click="isOpen = false" class="mobile-nav-item">
                            <i class="fas fa-umbrella-beach mr-3"></i>Fasilitas
                        </a>
                        <a href="#kamar" @click="isOpen = false" class="mobile-nav-item">
                            <i class="fas fa-bed mr-3"></i>Kamar
                        </a>
                        <a href="#galeri" @click="isOpen = false" class="mobile-nav-item">
                            <i class="fas fa-camera mr-3"></i>Galeri
                        </a>
                        <a href="#wisata" @click="isOpen = false" class="mobile-nav-item">
                            <i class="fas fa-map-marked-alt mr-3"></i>Wisata
                        </a>
                        <a href="#testimoni" @click="isOpen = false" class="mobile-nav-item">
                            <i class="fas fa-star mr-3"></i>Testimoni
                        </a>
                        <a href="#kontak" @click="isOpen = false" class="mobile-nav-item">
                            <i class="fas fa-phone mr-3"></i>Kontak
                        </a>
                        <a href="#pemesanan" @click="isOpen = false" class="nav-button-ocean text-center mt-4 py-2">
                            <i class="fas fa-calendar-check mr-2"></i>Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <div class="absolute bottom-6 left-0 right-0 flex justify-center">
            <a href="#fasilitas" class="scroll-down animate-bounce">
                <i class="fas fa-chevron-down text-2xl"></i>
            </a>
        </div>
    </section>

    <!-- Promo Banner -->
    <div class="bg-blue-900 text-white py-2 px-4 text-center text-sm md:text-base">
        <div class="container mx-auto flex flex-wrap items-center justify-center">
            <span class="font-bold mr-2"><i class="fas fa-gift mr-1"></i>PROMO KHUSUS!</span>
            <span class="mr-2">Diskon 5% untuk pemesanan minimal 3 malam</span>
            <a href="#pemesanan" class="underline font-medium whitespace-nowrap">Pesan Sekarang</a>
        </div>
    </div>

    <!-- Fasilitas Unggulan -->
    <section id="fasilitas" class="section-py bg-gray-50">
        <div class="section-container mx-auto">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="section-title font-bold mb-3 text-gray-900">Fasilitas Unggulan</h2>
                <div class="w-20 h-1.5 bg-gradient-to-r from-orange-400 to-yellow-400 mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan berbagai fasilitas untuk membuat pengalaman
                    menginap Anda lebih nyaman dan berkesan</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                    <div class="text-blue-600 mb-3 text-3xl md:text-4xl">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2 text-gray-800">WiFi Cepat</h3>
                    <p class="text-gray-600 text-sm md:text-base">Akses internet berkecepatan tinggi gratis untuk semua
                        tamu</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                    <div class="text-blue-600 mb-3 text-3xl md:text-4xl">
                        <i class="fas fa-umbrella-beach"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2 text-gray-800">Dekat Pantai</h3>
                    <p class="text-gray-600 text-sm md:text-base">Hanya 5 menit jalan kaki ke Pantai Watukarung yang
                        indah</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                    <div class="text-blue-600 mb-3 text-3xl md:text-4xl">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2 text-gray-800">Parkir Luas</h3>
                    <p class="text-gray-600 text-sm md:text-base">Area parkir aman dan luas untuk kendaraan tamu</p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                    <div class="text-blue-600 mb-3 text-3xl md:text-4xl">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 class="text-lg md:text-xl font-semibold mb-2 text-gray-800">Dapur Bersama</h3>
                    <p class="text-gray-600 text-sm md:text-base">Fasilitas dapur lengkap untuk memasak makanan favorit
                        Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kamar & Harga -->
    <section id="kamar" class="section-py bg-white">
        <div class="section-container mx-auto">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="section-title font-bold mb-3 text-gray-900">Pilihan Kamar Kami</h2>
                <div class="w-20 h-1.5 bg-gradient-to-r from-orange-400 to-yellow-400 mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Temukan kamar yang sesuai dengan kebutuhan Anda</p>
            </div>

            <div class="flex flex-col lg:flex-row gap-6 md:gap-8 items-stretch justify-center">
                <!-- Kamar Standard (Double Bed) -->
                <div class="room-card bg-white rounded-xl overflow-hidden shadow-lg relative w-full lg:w-1/2">
                    <div class="flex flex-col lg:flex-row h-full">
                        <!-- Bagian gambar -->
                        <div class="lg:w-1/2 relative">
                            <div class="room-badge">TERPOPULER</div>
                            <div class="swiper room-swiper h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/kamar1.jpeg" alt="Kamar Double Bed"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/home10.jpeg" alt="Kamar Mandi Standard"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <!-- Bagian detail -->
                        <div class="lg:w-1/2 p-4 md:p-6 flex flex-col">
                            <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2">Kamar Double Bed</h3>
                            <p class="text-gray-600 text-sm md:text-base mb-3 md:mb-4">Kamar nyaman dengan kasur double
                                untuk pasangan atau individu</p>

                            <div class="flex items-center mb-3 md:mb-4">
                                <span class="price-tag">Rp 350.000</span>
                                <span class="per-night ml-1">/malam</span>
                            </div>

                            <div class="border-t border-gray-200 pt-3 md:pt-4 mb-3 md:mb-4">
                                <h4 class="font-semibold text-gray-800 mb-2 text-sm md:text-base">Fasilitas Kamar:</h4>
                                <ul class="space-y-1 md:space-y-2 text-sm">
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-bed amenity-icon"></i> 1 Double Bed (160x200 cm)
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-tv amenity-icon"></i> TV 32"
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-snowflake amenity-icon"></i> AC
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-wifi amenity-icon"></i> WiFi Gratis
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kamar Twin (2 Single Beds) -->
                <div class="room-card bg-white rounded-xl overflow-hidden shadow-lg relative w-full lg:w-1/2">
                    <div class="flex flex-col lg:flex-row h-full">
                        <!-- Bagian gambar -->
                        <div class="lg:w-1/2 relative">
                            <div class="swiper room-swiper h-full">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/images/kamar2.jpeg" alt="Kamar Twin Bed"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/images/home7.jpeg" alt="Kamar Twin"
                                            class="w-full h-full object-cover">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <!-- Bagian detail -->
                        <div class="lg:w-1/2 p-4 md:p-6 flex flex-col">
                            <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-2">Kamar Twin Bed</h3>
                            <p class="text-gray-600 text-sm md:text-base mb-3 md:mb-4">Kamar dengan 2 single bed untuk
                                teman atau keluarga kecil</p>

                            <div class="flex items-center mb-3 md:mb-4">
                                <span class="price-tag">Rp 350.000</span>
                                <span class="per-night ml-1">/malam</span>
                            </div>

                            <div class="border-t border-gray-200 pt-3 md:pt-4 mb-3 md:mb-4">
                                <h4 class="font-semibold text-gray-800 mb-2 text-sm md:text-base">Fasilitas Kamar:</h4>
                                <ul class="space-y-1 md:space-y-2 text-sm">
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-bed amenity-icon"></i> 2 Single Bed (90x200 cm)
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-tv amenity-icon"></i> TV 32"
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-snowflake amenity-icon"></i> AC
                                    </li>
                                    <li class="flex items-center text-gray-600">
                                        <i class="fas fa-chair amenity-icon"></i> Ruang Lebih Luas
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri -->
    <section id="galeri" class="section-py bg-gray-50">
        <div class="section-container mx-auto">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="section-title font-bold mb-3 text-gray-900">Galeri Kami</h2>
                <div class="w-20 h-1.5 bg-gradient-to-r from-orange-400 to-yellow-400 mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Lihat suasana dan fasilitas Bintang Homestay</p>
            </div>

            <!-- Grid Kolase Galeri -->
            <div class="gallery-grid grid mb-6 md:mb-8">
                <div class="gallery-item cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 aspect-square"
                    onclick="openLightbox(0)">
                    <img src="/images/home.jpeg" alt="Bintang Homestay"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    <i class="fas fa-search-plus"></i>
                </div>
                <div class="gallery-item cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 aspect-square"
                    onclick="openLightbox(1)">
                    <img src="/images/home2.jpeg" alt="Lobby"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    <i class="fas fa-search-plus"></i>
                </div>
                <div class="gallery-item cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 aspect-square"
                    onclick="openLightbox(2)">
                    <img src="/images/home1.jpeg" alt="Area Parkir"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    <i class="fas fa-search-plus"></i>
                </div>
                <div class="gallery-item cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 aspect-square"
                    onclick="openLightbox(3)">
                    <img src="/images/home3.jpeg" alt="Shower"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    <i class="fas fa-search-plus"></i>
                </div>
                <div class="gallery-item cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 aspect-square"
                    onclick="openLightbox(4)">
                    <img src="/images/home4.jpeg" alt="Pemandangan"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    <i class="fas fa-search-plus"></i>
                </div>
                <div class="gallery-item cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 aspect-square"
                    onclick="openLightbox(5)">
                    <img src="/images/home11.jpeg" alt="Lantai 1"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    <i class="fas fa-search-plus"></i>
                </div>
                <div class="gallery-item cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 aspect-square"
                    onclick="openLightbox(6)">
                    <img src="/images/home6.jpeg" alt="Lantai 2"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    <i class="fas fa-search-plus"></i>
                </div>
                <div class="gallery-item cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-lg transition duration-300 aspect-square"
                    onclick="openLightbox(7)">
                    <img src="/images/home12.jpeg" alt="Logo"
                        class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>

            <!-- Lightbox Modal yang diperbaiki -->
            <div id="lightbox">
                <div class="lightbox-container">
                    <button class="lightbox-close" onclick="closeLightbox()">
                        <i class="fas fa-times"></i>
                    </button>

                    <!-- Swiper utama untuk gambar besar -->
                    <div class="swiper lightbox-swiper">
                        <div class="swiper-wrapper">
                            <!-- Slides akan ditambahkan oleh JavaScript -->
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- Thumbnail gallery di bawah -->
                    <div class="swiper thumbnail-swiper">
                        <div class="swiper-wrapper">
                            <!-- Thumbnail akan ditambahkan oleh JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rekomendasi Wisata -->
    <section id="wisata" class="section-py bg-gradient-to-b from-blue-50 to-gray-50">
        <div class="section-container mx-auto">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="section-title font-bold mb-3 text-gray-900 relative inline-block">
                    <span class="relative z-10">Rekomendasi Wisata Sekitar</span>
                </h2>
                <div class="w-20 h-1.5 bg-gradient-to-r from-orange-400 to-yellow-400 mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">Jelajahi keindahan alam Pacitan dengan
                    destinasi wisata terbaik di sekitar Watukarung</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <!-- Goa Gong -->
                <div
                    class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-gray-100">
                    <div class="h-48 sm:h-56 overflow-hidden relative">
                        <img src="/images/GONG.jpeg" alt="Goa Gong"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <span
                            class="absolute top-3 right-3 bg-orange-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">TERPOPULER</span>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center mb-1">
                            <i class="fas fa-star text-yellow-400 mr-1 text-sm"></i>
                            <span class="text-xs md:text-sm font-semibold text-gray-700">4.8 (1.2k review)</span>
                        </div>
                        <h3
                            class="text-base md:text-lg font-bold mb-1 md:mb-2 text-gray-800 group-hover:text-orange-500 transition-colors">
                            Goa Gong</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2 md:mb-3 line-clamp-2">Goa terindah di Asia
                            Tenggara dengan formasi stalaktit dan stalagmit yang memukau.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center text-xs text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1 md:mr-2 text-orange-400"></i>
                                <span>~15 km</span>
                            </div>
                            <a href="https://youtu.be/n3J4ZTFNFVQ?si=deoJAX35GrayuQ52" target="_blank"
                                class="text-orange-500 hover:text-orange-600 font-medium flex items-center text-xs md:text-sm">
                                Explore <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pantai Kasap -->
                <div
                    class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-gray-100">
                    <div class="h-48 sm:h-56 overflow-hidden relative">
                        <img src="/images/kasap.jpg" alt="Pantai Kasap"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center mb-1">
                            <i class="fas fa-star text-yellow-400 mr-1 text-sm"></i>
                            <span class="text-xs md:text-sm font-semibold text-gray-700">4.7 (890 review)</span>
                        </div>
                        <h3
                            class="text-base md:text-lg font-bold mb-1 md:mb-2 text-gray-800 group-hover:text-orange-500 transition-colors">
                            Pantai Kasap</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2 md:mb-3 line-clamp-2">Pantai dengan pasir putih
                            dan air jernih yang cocok untuk berenang dan snorkeling.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center text-xs text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1 md:mr-2 text-orange-400"></i>
                                <span>~8 km</span>
                            </div>
                            <a href="https://youtu.be/T6ykmxbb6tU?si=gzhrGTOQa32bJL1O" target="_blank"
                                class="text-orange-500 hover:text-orange-600 font-medium flex items-center text-xs md:text-sm">
                                Explore <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Pantai Klayar -->
                <div
                    class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-gray-100">
                    <div class="h-48 sm:h-56 overflow-hidden relative">
                        <img src="/images/klayar.jpg" alt="Pantai Klayar"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        <span
                            class="absolute top-3 right-3 bg-blue-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">EKSLUSIF</span>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center mb-1">
                            <i class="fas fa-star text-yellow-400 mr-1 text-sm"></i>
                            <span class="text-xs md:text-sm font-semibold text-gray-700">4.9 (1.5k review)</span>
                        </div>
                        <h3
                            class="text-base md:text-lg font-bold mb-1 md:mb-2 text-gray-800 group-hover:text-orange-500 transition-colors">
                            Pantai Klayar</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2 md:mb-3 line-clamp-2">Pantai eksotis dengan
                            formasi batuan unik dan air terjun kecil di tepi pantai.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center text-xs text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1 md:mr-2 text-orange-400"></i>
                                <span>~25 km</span>
                            </div>
                            <a href="https://youtu.be/cldWgBqW9Ps?si=7IPKLtEB6CmQH-bd" target="_blank"
                                class="text-orange-500 hover:text-orange-600 font-medium flex items-center text-xs md:text-sm">
                                Explore <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sungai Maron -->
                <div
                    class="group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border border-gray-100">
                    <div class="h-48 sm:h-56 overflow-hidden relative">
                        <img src="/images/MARON.jpg" alt="Sungai Maron"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-4 md:p-6">
                        <div class="flex items-center mb-1">
                            <i class="fas fa-star text-yellow-400 mr-1 text-sm"></i>
                            <span class="text-xs md:text-sm font-semibold text-gray-700">4.5 (750 review)</span>
                        </div>
                        <h3
                            class="text-base md:text-lg font-bold mb-1 md:mb-2 text-gray-800 group-hover:text-orange-500 transition-colors">
                            Sungai Maron</h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-2 md:mb-3 line-clamp-2">Wisata sungai alami
                            dengan air jernih dan suasana asri yang cocok untuk kegiatan susur sungai.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center text-xs text-gray-500">
                                <i class="fas fa-map-marker-alt mr-1 md:mr-2 text-orange-400"></i>
                                <span>~12 km</span>
                            </div>
                            <a href="https://youtu.be/DftKpcWkKyg?si=zLBElQb-MwwZRm6B" target="_blank"
                                class="text-orange-500 hover:text-orange-600 font-medium flex items-center text-xs md:text-sm">
                                Explore <i class="fas fa-chevron-right ml-1 text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section id="testimoni" class="section-py bg-white">
        <div class="section-container mx-auto">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="section-title font-bold mb-3 text-gray-900">Apa Kata Tamu Kami</h2>
                <div class="w-20 h-1.5 bg-gradient-to-r from-orange-400 to-yellow-400 mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Pengalaman nyata dari tamu yang pernah menginap di Bintang
                    Homestay</p>
            </div>

            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper pb-8 md:pb-12">
                    <!-- Testimoni 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card p-6 rounded-xl shadow-md h-full">
                            <div class="flex items-center mb-3">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Dewi Lestari"
                                    class="w-10 h-10 rounded-full mr-3 object-cover">
                                <div>
                                    <h4 class="font-bold text-gray-800 text-sm md:text-base">Dewi Lestari</h4>
                                    <div class="flex text-yellow-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 italic text-xs md:text-sm">"Kamar sangat nyaman dan bersih. Lokasi
                                strategis dekat pantai. Pelayanan staff sangat ramah dan membantu. Pasti akan kembali
                                lagi!"</p>
                        </div>
                    </div>

                    <!-- Testimoni 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card p-6 rounded-xl shadow-md h-full">
                            <div class="flex items-center mb-3">
                                <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Budi Santoso"
                                    class="w-10 h-10 rounded-full mr-3 object-cover">
                                <div>
                                    <h4 class="font-bold text-gray-800 text-sm md:text-base">Budi Santoso</h4>
                                    <div class="flex text-yellow-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 italic text-xs md:text-sm">"Homestay dengan fasilitas lengkap dan
                                harga terjangkau. WiFi cepat, kamar mandi bersih, dan ada dapur bersama yang sangat
                                membantu."</p>
                        </div>
                    </div>

                    <!-- Testimoni 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card p-6 rounded-xl shadow-md h-full">
                            <div class="flex items-center mb-3">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Anita Wijaya"
                                    class="w-10 h-10 rounded-full mr-3 object-cover">
                                <div>
                                    <h4 class="font-bold text-gray-800 text-sm md:text-base">Anita Wijaya</h4>
                                    <div class="flex text-yellow-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 italic text-xs md:text-sm">"Sangat cocok untuk keluarga. Kamar luas
                                dan bersih. Area parkir aman. Hanya saja sarapan belum tersedia, tapi banyak warung
                                makan di sekitar."</p>
                        </div>
                    </div>

                    <!-- Testimoni 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card p-6 rounded-xl shadow-md h-full">
                            <div class="flex items-center mb-3">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Rudi Hermawan"
                                    class="w-10 h-10 rounded-full mr-3 object-cover">
                                <div>
                                    <h4 class="font-bold text-gray-800 text-sm md:text-base">Rudi Hermawan</h4>
                                    <div class="flex text-yellow-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-600 italic text-xs md:text-sm">"Penginapan terbaik di Watukarung!
                                Pemandangan bagus, staff ramah, dan fasilitas lengkap. Sudah 3 kali menginap di sini dan
                                selalu puas."</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Peta & Kontak -->
    <section id="kontak" class="section-py bg-gray-50">
        <div class="section-container mx-auto">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="section-title font-bold mb-3 text-gray-900">Hubungi Kami</h2>
                <div class="w-20 h-1.5 bg-gradient-to-r from-orange-400 to-yellow-400 mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami siap membantu Anda untuk informasi lebih lanjut atau
                    pemesanan</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 lg:gap-12">
                <!-- Informasi Kontak -->
                <div>
                    <div class="bg-white p-6 rounded-xl shadow-md h-full">
                        <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-6 text-gray-800">Informasi Kontak</h3>

                        <div class="space-y-4 md:space-y-6">
                            <div class="flex items-start">
                                <div class="text-blue-600 mt-0.5 mr-3">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 text-sm md:text-base">Alamat</h4>
                                    <p class="text-gray-600 text-xs md:text-sm">Jl. Pantai Watukarung No. 123, Desa
                                        Watukarung, Kec. Pringkuku, Pacitan, Jawa Timur</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="text-blue-600 mt-0.5 mr-3">
                                    <i class="fas fa-phone-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 text-sm md:text-base">Telepon/WhatsApp</h4>
                                    <p class="text-gray-600 text-xs md:text-sm">+62 896-8189-1033</p>
                                    <p class="text-gray-600 text-xs md:text-sm">+62 882-9478-1090</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="text-blue-600 mt-0.5 mr-3">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 text-sm md:text-base">Email</h4>
                                    <p class="text-gray-600 text-xs md:text-sm">info@bintanghomestay.com</p>
                                    <p class="text-gray-600 text-xs md:text-sm">reservation@bintanghomestay.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="text-blue-600 mt-0.5 mr-3">
                                    <i class="fas fa-clock text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 text-sm md:text-base">Jam Operasional</h4>
                                    <p class="text-gray-600 text-xs md:text-sm">Setiap hari 24 jam</p>
                                    <p class="text-gray-600 text-xs md:text-sm">Check-in: 13:00 WIB | Check-out: 11:00
                                        WIB</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 md:mt-8">
                            <h4 class="font-semibold text-gray-800 mb-3 text-sm md:text-base">Media Sosial</h4>
                            <div class="flex space-x-3 md:space-x-4">
                                <a href="#" class="text-blue-600 hover:text-blue-800 text-xl">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" class="text-pink-600 hover:text-pink-800 text-xl">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="text-blue-400 hover:text-blue-600 text-xl">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="text-red-600 hover:text-red-800 text-xl">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Peta Lokasi -->
                <div>
                    <div class="bg-white p-6 rounded-xl shadow-md h-full">
                        <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-6 text-gray-800">Lokasi Kami</h3>
                        <div class="rounded-xl overflow-hidden h-64 md:h-80 lg:h-96">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.43136285088!2d110.97157957500978!3d-8.236455891796606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7bddbf867b05f7%3A0x9df2ed136347df0b!2sBintang%20Homestay%20Watukarung!5e1!3m2!1sid!2sid!4v1747496251450!5m2!1sid!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="mt-3 md:mt-4 text-center">
                            <a href="https://maps.google.com/?q=Bintang+Homestay+Watukarung" target="_blank"
                                class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center text-sm md:text-base">
                                <i class="fas fa-directions mr-1 md:mr-2"></i> Dapatkan Petunjuk Arah
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Elegant Agoda Booking Section -->
    <section id="pemesanan" class="section-py bg-white">
        <div class="section-container mx-auto max-w-4xl">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-800">Pesan Kamar Anda</h2>
                <div class="w-20 h-1.5 bg-gradient-to-r from-orange-400 to-yellow-400 mx-auto mb-4 rounded-full"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami bekerja sama dengan platform terpercaya untuk
                    memberikan pengalaman pemesanan yang nyaman</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Tiket.com Booking -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-center mb-3">
                        <div class="bg-white p-1.5 rounded-md shadow-xs mr-2 md:mr-3">
                            <img src="https://www.tiket.com/favicon.ico" alt="Tiket.com" class="h-5 md:h-6"
                                onerror="this.style.display='none'">
                        </div>
                        <span class="text-gray-700 font-medium text-sm md:text-base">Pesan melalui</span>
                    </div>
                    <h3 class="text-base md:text-lg font-medium text-gray-800 mb-1 md:mb-2 text-center">Tiket.com</h3>
                    <p class="text-gray-600 text-xs md:text-sm mb-3 md:mb-4 text-center max-w-xs mx-auto">Platform
                        travel terbesar di Indonesia dengan harga kompetitif</p>
                    <div class="text-center">
                        <a href="https://www.tiket.com/homes/indonesia/bintang-homestay-watukarung-605001684298220966"
                            target="_blank"
                            class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 md:py-3 px-6 md:px-8 rounded-md transition-colors duration-200 text-sm md:text-base">
                            Pesan di Tiket.com
                        </a>
                    </div>
                </div>

                <!-- Agoda Booking -->
                <div class="bg-gray-50 rounded-xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-center justify-center mb-3">
                        <div class="bg-white p-1.5 rounded-md shadow-xs mr-2 md:mr-3">
                            <img src="https://www.agoda.com/favicon.ico" alt="Agoda" class="h-5 md:h-6"
                                onerror="this.style.display='none'">
                        </div>
                        <span class="text-gray-700 font-medium text-sm md:text-base">Pesan melalui</span>
                    </div>
                    <h3 class="text-base md:text-lg font-medium text-gray-800 mb-1 md:mb-2 text-center">Agoda</h3>
                    <p class="text-gray-600 text-xs md:text-sm mb-3 md:mb-4 text-center max-w-xs mx-auto">Platform
                        internasional dengan jaminan harga terbaik</p>
                    <div class="text-center">
                        <a href="https://www.agoda.com/id-id/bintang-homestay-watukarung-h37351915/hotel/pacitan-id.html?ds=heSmelgg4%2BFrJaOs"
                            target="_blank"
                            class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 md:py-3 px-6 md:px-8 rounded-md transition-colors duration-200 text-sm md:text-base">
                            Pesan di Agoda
                        </a>
                    </div>
                </div>
            </div>

            <!-- WhatsApp Support -->
            <div class="bg-gray-50 rounded-xl p-6 md:p-8 shadow-sm border border-gray-100 mt-6">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6 md:gap-8">
                    <div class="text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start mb-3">
                            <div class="bg-white p-1.5 rounded-md shadow-xs mr-2 md:mr-3 text-green-500">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </div>
                            <span class="text-gray-700 font-medium text-sm md:text-base">Butuh Bantuan?</span>
                        </div>
                        <h3 class="text-base md:text-lg font-medium text-gray-800 mb-1 md:mb-2">Tim Kami Siap Membantu
                        </h3>
                        <p class="text-gray-600 text-xs md:text-sm mb-3 md:mb-4 max-w-xs">Respon cepat melalui WhatsApp
                            24 jam</p>
                    </div>
                    <a href="https://wa.me/6289681891033" target="_blank"
                        class="inline-block bg-green-500 hover:bg-green-600 text-white font-medium py-2 md:py-3 px-6 md:px-8 rounded-md transition-colors duration-200 text-sm md:text-base">
                        Hubungi Kami
                    </a>
                </div>
            </div>

            <div class="text-center mt-6 md:mt-8">
                <p class="text-gray-500 text-xs md:text-sm">Proses pemesanan aman dan terjamin</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6 md:pt-16 md:pb-8">
        <div class="section-container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10 mb-10 md:mb-12">
                <!-- Tentang Kami -->
                <div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4 flex items-center">
                        <img src="{{ asset('images/bintang.png') }}" alt="Logo"
                            class="w-6 h-6 md:w-7 md:h-7 mr-2">
                        Bintang Homestay
                    </h3>
                    <p class="text-gray-400 mb-3 md:mb-4 text-sm md:text-base">Penginapan nyaman dengan fasilitas
                        lengkap di Pantai Watukarung, Pacitan. Memberikan pengalaman menginap terbaik dengan harga
                        terjangkau.</p>
                    <div class="flex space-x-3 md:space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition text-lg md:text-xl">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition text-lg md:text-xl">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition text-lg md:text-xl">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition text-lg md:text-xl">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Link Cepat -->
                <div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4">Link Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="#home"
                                class="text-gray-400 hover:text-white transition text-sm md:text-base">Beranda</a></li>
                        <li><a href="#fasilitas"
                                class="text-gray-400 hover:text-white transition text-sm md:text-base">Fasilitas</a>
                        </li>
                        <li><a href="#kamar"
                                class="text-gray-400 hover:text-white transition text-sm md:text-base">Kamar</a></li>
                        <li><a href="#galeri"
                                class="text-gray-400 hover:text-white transition text-sm md:text-base">Galeri</a></li>
                        <li><a href="#wisata"
                                class="text-gray-400 hover:text-white transition text-sm md:text-base">Wisata</a></li>
                        <li><a href="#testimoni"
                                class="text-gray-400 hover:text-white transition text-sm md:text-base">Testimoni</a>
                        </li>
                        <li><a href="#kontak"
                                class="text-gray-400 hover:text-white transition text-sm md:text-base">Kontak</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4">Kontak Kami</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start text-sm md:text-base">
                            <i class="fas fa-map-marker-alt mt-1 mr-2 md:mr-3"></i>
                            <span>Jl. Pantai Watukarung No. 123, Pacitan, Jawa Timur</span>
                        </li>
                        <li class="flex items-center text-sm md:text-base">
                            <i class="fas fa-phone-alt mr-2 md:mr-3"></i>
                            <span>+62 896-8189-1033</span>
                        </li>
                        <li class="flex items-center text-sm md:text-base">
                            <i class="fas fa-envelope mr-2 md:mr-3"></i>
                            <span>info@bintanghomestay.com</span>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4">Newsletter</h3>
                    <p class="text-gray-400 mb-3 md:mb-4 text-sm md:text-base">Dapatkan promo dan penawaran khusus
                        dengan berlangganan newsletter kami.</p>
                    <form class="flex">
                        <input type="email" placeholder="Email Anda"
                            class="px-3 py-2 rounded-l-lg focus:outline-none text-gray-800 w-full text-sm md:text-base">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 px-3 py-2 rounded-r-lg transition text-sm md:text-base">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-6 md:pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0 text-sm md:text-base">© 2023 Bintang Homestay. All rights
                    reserved.</p>
                <div class="flex space-x-4 md:space-x-6 text-sm md:text-base">
                    <a href="/sitemap" class="text-gray-400 hover:text-white transition">Sitemap</a>
                    <a href="/privacy-policy" class="text-gray-400 hover:text-white transition">Privacy Policy</a>
                    <a href="/terms-of-service" class="text-gray-400 hover:text-white transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6289681891033" target="_blank"
        class="whatsapp-btn fixed bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition z-50">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        // Data gambar galeri
        const galleryData = [{
                src: "/images/home.jpeg",
                title: "Bintang Homestay"
            },
            {
                src: "/images/home2.jpeg",
                title: "Lobby"
            },
            {
                src: "/images/home1.jpeg",
                title: "Area Parkir"
            },
            {
                src: "/images/home3.jpeg",
                title: "Shower"
            },
            {
                src: "/images/home4.jpeg",
                title: "Pemandangan"
            },
            {
                src: "/images/home11.jpeg",
                title: "Lantai 1"
            },
            {
                src: "/images/home6.jpeg",
                title: "Lantai 2"
            },
            {
                src: "/images/home12.jpeg",
                title: "Logo"
            }
        ];

        let lightboxSwiper = null;
        let thumbnailSwiper = null;
        const galleryItems = document.querySelectorAll('.gallery-item');

        function openLightbox(index) {
            const lightbox = document.getElementById('lightbox');
            const mainSwiperWrapper = document.querySelector('.lightbox-swiper .swiper-wrapper');
            const thumbnailWrapper = document.querySelector('.thumbnail-swiper .swiper-wrapper');

            // Clear existing slides
            mainSwiperWrapper.innerHTML = '';
            thumbnailWrapper.innerHTML = '';

            // Add all images to lightbox
            galleryData.forEach((img, i) => {
                // Slide utama
                const mainSlide = document.createElement('div');
                mainSlide.className = 'swiper-slide';
                mainSlide.setAttribute('data-title', img.title);

                const mainImage = document.createElement('img');
                mainImage.src = img.src;
                mainImage.alt = img.title;
                mainImage.classList.add('w-full', 'h-full', 'object-contain');
                mainSlide.appendChild(mainImage);
                mainSwiperWrapper.appendChild(mainSlide);

                // Thumbnail
                const thumbSlide = document.createElement('div');
                thumbSlide.className = 'swiper-slide cursor-pointer';
                thumbSlide.style.opacity = i === index ? '1' : '0.6';
                thumbSlide.style.transition = 'opacity 0.3s';

                const thumbImage = document.createElement('img');
                thumbImage.src = img.src;
                thumbImage.alt = img.title;
                thumbImage.classList.add('w-full', 'h-full', 'object-cover');
                thumbSlide.appendChild(thumbImage);
                thumbnailWrapper.appendChild(thumbSlide);

                // Click handler untuk thumbnail
                thumbSlide.addEventListener('click', () => {
                    lightboxSwiper.slideTo(i);
                    updateActiveThumbnail(i);
                });
            });

            // Initialize main swiper jika belum ada
            if (!lightboxSwiper) {
                lightboxSwiper = new Swiper('.lightbox-swiper', {
                    loop: false,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    keyboard: {
                        enabled: true,
                    },
                    on: {
                        slideChange: function() {
                            updateActiveThumbnail(this.realIndex);
                        }
                    }
                });
            }

            // Initialize thumbnail swiper
            if (!thumbnailSwiper) {
                thumbnailSwiper = new Swiper('.thumbnail-swiper', {
                    slidesPerView: 'auto',
                    spaceBetween: 8,
                    centeredSlides: true,
                    slideToClickedSlide: true
                });
            }

            // Go to the clicked slide
            lightboxSwiper.slideTo(index);
            thumbnailSwiper.slideTo(index);

            // Show lightbox
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';

            // Add animation class
            lightbox.classList.add('animate-fade-in');
        }

        function updateActiveThumbnail(index) {
            const thumbnails = document.querySelectorAll('.thumbnail-swiper .swiper-slide');
            thumbnails.forEach((thumb, i) => {
                thumb.style.opacity = i === index ? '1' : '0.6';
            });

            // Update thumbnail swiper untuk memastikan thumbnail aktif terlihat
            thumbnailSwiper.slideTo(index);
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('animate-fade-in');
            lightbox.style.display = 'none';
            document.body.style.overflow = '';

            if (lightboxSwiper) {
                lightboxSwiper.destroy(true, true);
                lightboxSwiper = null;
            }

            if (thumbnailSwiper) {
                thumbnailSwiper.destroy(true, true);
                thumbnailSwiper = null;
            }
        }

        // Add click event listeners to all gallery items
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', function() {
                openLightbox(index);
            });
        });

        // Close lightbox when clicking outside the image
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });

        // Close with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && document.getElementById('lightbox').style.display === 'flex') {
                closeLightbox();
            }
        });

        // Initialize other Swipers (room swipers, testimonial swiper, etc.)
        document.addEventListener('DOMContentLoaded', function() {
            // Room Swipers
            const roomSwipers = document.querySelectorAll('.room-swiper');
            roomSwipers.forEach(swiper => {
                new Swiper(swiper, {
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    autoplay: {
                        delay: 3000,
                    },
                });
            });

            // Testimonial Swiper
            const testimonialSwiper = new Swiper('.testimonial-swiper', {
                slidesPerView: 1,
                spaceBetween: 16,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 24,
                    }
                }
            });

            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar-ocean');
                if (window.scrollY > 20) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
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

            // Prevent video from playing on mobile when not in view
            const heroVideo = document.querySelector('.video-bg');
            if (window.innerWidth < 768) {
                heroVideo.pause();
            }

            // Replay video when it comes into view
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
        });
    </script>
</body>

</html>
