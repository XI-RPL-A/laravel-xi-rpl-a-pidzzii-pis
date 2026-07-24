<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educa Studio - Landing Page All-in-One</title>
    <style>
        /* ==================== 1. CSS STYLING ==================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
        }

        nav .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e67e22;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #555;
            font-weight: 600;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #e67e22;
        }

        section {
            padding: 120px 20px 80px 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        p {
            font-size: 1.1rem;
            color: #7f8c8d;
            max-width: 800px;
            margin-bottom: 40px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            width: 100%;
            max-width: 1200px;
        }

        .card {
            background: white;
            padding: 30px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-bottom: 10px;
            color: #34495e;
        }

        #home { background-color: #fff8f2; }
        #products { background-color: #ffffff; }
        #news { background-color: #f9f9f9; }
        #program { background-color: #ffffff; }
        #about-us { background-color: #ecf0f1; }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e67e22;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: 15px;
        }
        .btn:hover { background-color: #d35400; }
    </style>
</head>
<body>

    <!-- ==================== 2. HTML STRUCTURE ==================== -->
    <header>
        <nav>
            <div class="logo">Educa Studio</div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#program">Program</a></li>
                <li><a href="#about-us">About Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- SECTION 1: HOME -->
    <section id="home">
        <h2>Kreativitas Tanpa Batas</h2>
        <p>Kami mengembangkan perangkat lunak edukasi dan permainan digital interaktif menarik untuk anak-anak seluruh Indonesia.</p>
        <a href="#products" class="btn">Lihat Produk Kami</a>
    </section>

    <!-- SECTION 2: PRODUCTS (Route Prefix) -->
    <section id="products">
        <h2>Daftar Produk</h2>
        <p>Kumpulan game edukasi dan buku cerita anak interaktif terbaik kami.</p>
        <div class="grid-container">
            <div class="card" style="border-top: 5px solid #e67e22;">
                <h3>Marbel Edu Games</h3>
                <p>Game edukasi interaktif belajar berhitung, membaca, dan mengenal warna.</p>
                <a href="product" class="btn">Buka URL</a>
            </div>
            <div class="card" style="border-top: 5px solid #2ecc71;">
                <h3>Marbel & Friends</h3>
                <p>Petualangan seru bersama teman-teman dalam simulasi profesi anak.</p>
                <a href="product" class="btn">Buka URL</a>
            </div>
            <div class="card" style="border-top: 5px solid #9b59b6;">
                <h3>Riri Story Books</h3>
                <p>Aplikasi buku cerita rakyat dan fabel nusantara interaktif audio visual.</p>
                <a href="product" class="btn">Buka URL</a>
            </div>
            <div class="card" style="border-top: 5px solid #e74c3c;">
                <h3>Kolak Kids Songs</h3>
                <p>Kumpulan lagu anak-anak nusantara dengan animasi 3D yang ceria.</p>
                <a href="product" class="btn">Buka URL</a>
            </div>
        </div>
    </section>

    <!-- SECTION 3: NEWS (Route Param) -->
    <section id="news">
        <h2>Berita & Artikel</h2>
        <p>Ikuti perkembangan terbaru mengenai aktivitas, inovasi, dan kontribusi sosial kami.</p>
        <div class="grid-container" style="max-width: 800px;">
            <!-- <div class="card" style="text-align: left;">
                <span style="color: #7f8c8d; font-size: 0.9rem;">Berita Terpopuler</span>
                <h3 style="margin-top: 5px;">Educa Studio Berbagi Untuk Warga Sekitar Terdampak COVID-19</h3>
                <p style="font-size: 1rem; margin-bottom: 15px;">Wujud kepedulian sosial perusahaan dalam membantu meringankan beban pemenuhan kebutuhan pangan harian masyarakat...</p>
                <a href="news" style="color: #e67e22; font-weight: bold; text-decoration: none;">Buka URL Berita →</a>
            </div> -->
            <div class="card">
                <h3>Educa Studio Berbagi Untuk Warga Sekitar Terdampak COVID-19</h3>
                <p>Wujud kepedulian sosial perusahaan dalam membantu meringankan beban pemenuhan kebutuhan pangan harian masyarakat...</p>
                <a href="news/1" class="btn">Buka Berita</a>
            </div>
            <div class="card">
                <h3>Lagu Karya Anak Game Di Indonesia yang Sukses Terkenal</h3>
                <p>Welcome to PUBG Mobile, to PUBG Mobile Game PUBG Game PUBG, Welcome to Game Free Fire, Game FF Game FF, Karya Anak FF....</p>
                <a href="news/2" class="btn">Buka Berita</a>
            </div>
        </div>
    </section>

    <!-- SECTION 4: PROGRAM (Route Prefix) -->
    <section id="program">
        <h2>Program Kerja</h2>
        <p>Bergabunglah bersama kami untuk membangun masa depan industri kreatif digital yang lebih baik.</p>
        <div class="grid-container">
            <div class="card">
                <h3>Karir</h3>
                <p>Temukan ruang tumbuh dan kembangkan talenta terbaik Anda bersama tim profesional.</p>
                <a href="program" class="btn">Detail Karir</a>
            </div>
            <div class="card">
                <h3>Magang</h3>
                <p>Program internship terstruktur bagi siswa/mahasiswa untuk terjun ke industri nyata.</p>
                <a href="program" class="btn">Detail Magang</a>
            </div>
            <div class="card">
                <h3>Kunjungan Industri</h3>
                <p>Terbuka bagi sekolah atau universitas yang ingin melihat dapur produksi kami.</p>
                <a href="program" class="btn">Detail Kunjungan</a>
            </div>
        </div>
    </section>

    <!-- SECTION 5: ABOUT US (Route Biasa) -->
    <section id="about-us">
        <h2>Tentang Kami</h2>
        <p>Educa Studio didirikan untuk menciptakan media edukasi berbasis teknologi terkini. Berpusat di Salatiga, kami berkomitmen menghadirkan kegembiraan belajar bagi jutaan anak di seluruh dunia.</p>
        <a href="about" style="color:#7f8c8d; text-decoration: underline; font-size: 0.9rem;">Tentang Kami</a>
    </section>

    <!-- ==================== 3. JAVASCRIPT AUTO-SCROLL ==================== -->
    <script>
        // Menangkap variabel section yang dikirimkan oleh controller/route Laravel
        const targetSection = "{{ $section ?? 'home' }}";

        // Menunggu sampai halaman sepenuhnya dimuat
        window.addEventListener('DOMContentLoaded', () => {
            if (targetSection) {
                const element = document.getElementById(targetSection);
                if (element) {
                    // Memberikan sedikit jeda waktu (delay) agar efek scroll berjalan mulus
                    setTimeout(() => {
                        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }, 300);
                }
            }
        });
    </script>
</body>
</html>
