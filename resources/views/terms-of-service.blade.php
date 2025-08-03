<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Syarat & Ketentuan | Bintang Homestay Watukarung</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #111827;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .header {
            background: linear-gradient(135deg, #1e40af 0%, #1e3a8a 100%);
            color: white;
            padding: 100px 20px 60px;
            text-align: center;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            min-height: 200px;
        }
        .header-content {
            max-width: 100%;
            width: 100%;
        }
        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        .last-updated {
            font-size: 0.95rem;
            opacity: 0.9;
            color: white;
            margin-top: 10px;
        }
        .content {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-bottom: 40px;
            position: relative;
        }
        .footer {
            background-color: #111827;
            color: white;
            padding: 40px 0;
            text-align: center;
        }
        h2 {
            color: #1e40af;
            margin-top: 40px;
            margin-bottom: 20px;
            font-size: 1.5rem;
            font-weight: 600;
            position: relative;
            padding-left: 20px;
        }
        h2:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.35em;
            height: 1em;
            width: 8px;
            background: linear-gradient(to bottom, #3b82f6, #1e40af);
            border-radius: 4px;
        }
        p {
            margin-bottom: 1.2rem;
            color: #374151;
            font-size: 1.05rem;
            line-height: 1.7;
        }
        ul {
            padding-left: 24px;
            margin-bottom: 1.5rem;
        }
        li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 10px;
            color: #4b5563;
        }
        li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #3b82f6;
            font-weight: bold;
        }
        .contact-info {
            background-color: #f3f4f6;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #3b82f6;
        }
        .contact-info p {
            margin-bottom: 0.5rem;
        }

        /* Navbar Styles */
        .navbar-ocean {
            background: rgba(3, 7, 18, 0.9);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(59, 130, 246, 0.15);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
        }
        .nav-container {
            max-width: 1280px;
            padding: 1rem 1.5rem;
            margin: 0 auto;
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
        .nav-pill:hover {
            transform: translateY(-2px);
            background: rgba(29, 78, 216, 0.4);
            color: white;
            box-shadow: 0 4px 12px rgba(29, 78, 216, 0.15);
            border-color: rgba(59, 130, 246, 0.3);
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
        .mobile-nav-item:hover, .mobile-nav-item.active {
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

        @media (max-width: 768px) {
            .header {
                padding: 80px 15px 40px;
                min-height: 180px;
            }
            .header h1 {
                font-size: 2rem;
            }
            .content {
                padding: 25px;
            }
            h2 {
                font-size: 1.3rem;
                margin-top: 30px;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.8rem;
                line-height: 1.3;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-50" x-data="{ isOpen: false }">
        <nav class="navbar-ocean">
            <div class="nav-container flex justify-between items-center py-2 lg:py-3">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-xl md:text-2xl font-bold logo-wave flex items-center">
                        <img src="{{ asset('images/bintang.png') }}" alt="Logo" class="w-8 h-8 md:w-10 md:h-10 mr-2">
                        <span class="hidden sm:inline">Bintang Homestay</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-2">
                    <div class="flex space-x-1">
                        <a href="/" class="nav-pill">
                            <i class="fas fa-home mr-2"></i>Beranda
                        </a>
                        <a href="/#fasilitas" class="nav-pill">
                            <i class="fas fa-umbrella-beach mr-2"></i>Fasilitas
                        </a>
                        <a href="/#kamar" class="nav-pill">
                            <i class="fas fa-bed mr-2"></i>Kamar
                        </a>
                        <a href="/#galeri" class="nav-pill">
                            <i class="fas fa-camera mr-2"></i>Galeri
                        </a>
                        <a href="/terms-of-service" class="nav-pill active">
                            <i class="fas fa-file-contract mr-2"></i>Syarat & Ketentuan
                        </a>
                    </div>
                    <a href="/#pemesanan" class="nav-button-ocean ml-2">
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
                    <a href="/" @click="isOpen = false" class="mobile-nav-item">
                        <i class="fas fa-home mr-3"></i>Beranda
                    </a>
                    <a href="/#fasilitas" @click="isOpen = false" class="mobile-nav-item">
                        <i class="fas fa-umbrella-beach mr-3"></i>Fasilitas
                    </a>
                    <a href="/#kamar" @click="isOpen = false" class="mobile-nav-item">
                        <i class="fas fa-bed mr-3"></i>Kamar
                    </a>
                    <a href="/#galeri" @click="isOpen = false" class="mobile-nav-item">
                        <i class="fas fa-camera mr-3"></i>Galeri
                    </a>
                    <a href="/terms-of-service" @click="isOpen = false" class="mobile-nav-item active">
                        <i class="fas fa-file-contract mr-3"></i>Syarat & Ketentuan
                    </a>
                    <a href="/#pemesanan" @click="isOpen = false" class="nav-button-ocean text-center mt-4 py-2">
                        <i class="fas fa-calendar-check mr-2"></i>Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Header -->
    <div class="header">
        <div class="container">
            <div class="header-content">
                <h1>Syarat & Ketentuan</h1>
                <p class="last-updated">Terakhir diperbarui: 1 Januari 2023</p>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="content">
            <p>Dengan memesan kamar di Bintang Homestay, Anda setuju untuk terikat oleh syarat dan ketentuan berikut ("Syarat Layanan"). Harap baca dengan seksama sebelum membuat pemesanan.</p>

            <h2>1. Pemesanan</h2>
            <ul>
                <li>Pemesanan dapat dilakukan melalui website partner kami (Agoda) atau langsung melalui WhatsApp</li>
                <li>Anda harus berusia minimal 18 tahun untuk membuat pemesanan</li>
                <li>Semua pemesanan tunduk pada ketersediaan kamar</li>
            </ul>

            <h2>2. Pembayaran</h2>
            <ul>
                <li>Pembayaran dilakukan saat check-in atau sesuai ketentuan platform pemesanan</li>
                <li>Kami menerima pembayaran tunai dan transfer bank</li>
                <li>Semua harga sudah termasuk pajak dan biaya layanan</li>
            </ul>

            <h2>3. Kebijakan Pembatalan</h2>
            <ul>
                <li>Pembatalan lebih dari 7 hari sebelum check-in: pengembalian dana penuh</li>
                <li>Pembatalan 3-7 hari sebelum check-in: biaya 50% dari total pemesanan</li>
                <li>Pembatalan kurang dari 3 hari sebelum check-in: tidak ada pengembalian dana</li>
                <li>No-show: dikenakan biaya 100% dari total pemesanan</li>
            </ul>

            <h2>4. Check-in/Check-out</h2>
            <ul>
                <li>Check-in: 14:00 WIB</li>
                <li>Check-out: 12:00 WIB</li>
                <li>Check-in awal atau check-out terlambat tunduk pada ketersediaan dan mungkin dikenakan biaya tambahan</li>
            </ul>

            <h2>5. Perilaku Tamu</h2>
            <ul>
                <li>Dilarang merokok di dalam kamar (tersedia area merokok khusus)</li>
                <li>Dilarang membawa hewan peliharaan</li>
                <li>Kerusakan properti akan dikenakan biaya perbaikan</li>
                <li>Kami berhak mengeluarkan tamu yang melanggar ketentuan tanpa pengembalian dana</li>
            </ul>

            <h2>6. Kebijakan Anak-anak</h2>
            <ul>
                <li>Anak di bawah 5 tahun: gratis (berbagi tempat tidur dengan orang tua)</li>
                <li>Anak 5-12 tahun: dikenakan biaya tambahan 50% dari tarif dewasa</li>
                <li>Anak di atas 12 tahun: dikenakan tarif dewasa penuh</li>
            </ul>

            <h2>7. Perubahan Ketentuan</h2>
            <p>Kami dapat mengubah Syarat & Ketentuan ini kapan saja. Perubahan akan berlaku segera setelah diposting di website kami.</p>

            <h2>8. Hubungi Kami</h2>
            <p>Untuk pertanyaan tentang Syarat & Ketentuan ini, silakan hubungi:</p>
            <div class="contact-info">
                <p><i class="fas fa-envelope mr-2 text-blue-500"></i> Email: info@bintanghomestay.com</p>
                <p><i class="fas fa-phone-alt mr-2 text-blue-500"></i> Telepon: +62 812-3456-7890</p>
                <p><i class="fas fa-map-marker-alt mr-2 text-blue-500"></i> Alamat: Jl. Pantai Watukarung No. 123, Pacitan, Jawa Timur</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <p>&copy; 2023 Bintang Homestay Watukarung. All rights reserved.</p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="/sitemap" class="text-white hover:text-blue-300">Sitemap</a>
                <a href="/privacy-policy" class="text-white hover:text-blue-300">Privacy Policy</a>
                <a href="/terms-of-service" class="text-white hover:text-blue-300">Terms of Service</a>
            </div>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="#" class="text-white hover:text-blue-300"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white hover:text-blue-300"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-white hover:text-blue-300"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6289681891033" target="_blank"
        class="fixed bottom-4 right-4 bg-green-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition z-50"
        style="width: 50px; height: 50px; font-size: 1.5rem;">
        <i class="fab fa-whatsapp"></i>
    </a>
</body>
</html>