<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Restoran Italia Premium - Pengalaman Kuliner Terbaik">
    <title>La Bella Italia - Restoran Italia Premium</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #8b4513;
            --secondary: #654321;
            --accent: #ff6b35;
            --light: #faf5f1;
            --dark: #2a2a2a;
        }

        body {
            font-family: 'Georgia', 'Segoe UI', sans-serif;
            background: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* HEADER */
        header {
            background: white;
            padding: 1.5rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            color: var(--primary);
            font-style: italic;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--accent);
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            padding: 8rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-style: italic;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: var(--accent);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-weight: 600;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 107, 53, 0.3);
        }

        /* FEATURED SECTION */
        .featured {
            background: white;
            padding: 4rem 0;
            text-align: center;
            margin: 2rem 0;
            border-radius: 10px;
        }

        .featured h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: var(--primary);
        }

        .featured-item {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .featured-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, var(--accent) 0%, var(--primary) 100%);
            border-radius: 10px;
        }

        .featured-content h3 {
            font-size: 2rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }

        .featured-content p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            line-height: 1.8;
        }

        .price {
            font-size: 2rem;
            color: var(--accent);
            font-weight: bold;
            margin-bottom: 1.5rem;
        }

        /* MENU SECTION */
        .menu {
            padding: 4rem 0;
            background: white;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .menu h2 {
            text-align: center;
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 3rem;
        }

        .menu-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .menu-tab {
            padding: 0.8rem 1.5rem;
            background: var(--light);
            border: 2px solid transparent;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
            color: var(--dark);
        }

        .menu-tab.active {
            border-color: var(--accent);
            background: white;
            color: var(--accent);
        }

        .menu-tab:hover {
            border-color: var(--accent);
        }

        .menu-items {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .menu-item {
            background: var(--light);
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 5px solid var(--accent);
        }

        .menu-item-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 0.5rem;
        }

        .menu-item-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--primary);
        }

        .menu-item-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--accent);
        }

        .menu-item-desc {
            font-size: 0.9rem;
            color: #666;
            font-style: italic;
        }

        .menu-item-allergens {
            font-size: 0.8rem;
            color: #999;
            margin-top: 0.5rem;
        }

        /* ABOUT SECTION */
        .about {
            padding: 4rem 0;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .about p {
            font-size: 1.05rem;
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .about-image {
            width: 100%;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            border: 2px solid white;
        }

        /* TESTIMONIALS */
        .testimonials {
            padding: 4rem 0;
            background: white;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .testimonials h2 {
            text-align: center;
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 3rem;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: var(--light);
            padding: 2rem;
            border-radius: 8px;
            border-top: 5px solid var(--accent);
        }

        .testimonial-stars {
            color: var(--accent);
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .testimonial-author {
            font-weight: 600;
            color: var(--primary);
        }

        .testimonial-role {
            font-size: 0.9rem;
            color: #666;
        }

        /* RESERVATION SECTION */
        .reservation {
            padding: 4rem 0;
            background: linear-gradient(135deg, var(--accent) 0%, var(--primary) 100%);
            border-radius: 10px;
            margin: 2rem 0;
            color: white;
        }

        .reservation h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .reservation-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            font-family: inherit;
            background: white;
            color: var(--dark);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-row .form-group {
            margin-bottom: 1rem;
        }

        /* LOCATION SECTION */
        .location {
            padding: 4rem 0;
            background: white;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .location h2 {
            text-align: center;
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 2rem;
        }

        .location-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .map {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #ddd 0%, #aaa 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
        }

        .location-info {
            background: var(--light);
            padding: 2rem;
            border-radius: 10px;
        }

        .info-item {
            margin-bottom: 1.5rem;
        }

        .info-item h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .info-item p {
            line-height: 1.8;
        }

        /* FOOTER */
        footer {
            background: var(--dark);
            color: white;
            padding: 2rem 0;
            text-align: center;
            margin-top: 4rem;
            border-radius: 10px 10px 0 0;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 1rem;
            color: var(--accent);
            text-decoration: none;
        }

        @media (max-width: 768px) {
            nav ul {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .featured-item,
            .about-content,
            .location-content {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .menu-tabs {
                flex-direction: column;
            }

            .menu-tab {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="logo">🍝 La Bella Italia</div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#reservation">Reservasi</a></li>
                    <li><a href="#location">Lokasi</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Pengalaman Kuliner Italia yang Autentik</h1>
            <p>Cita rasa tradisional Italia di setiap hidangan</p>
            <button class="btn" onclick="document.getElementById('reservation').scrollIntoView({behavior: 'smooth'})">Pesan Meja Sekarang</button>
        </div>
    </section>

    <!-- FEATURED DISH -->
    <section class="container">
        <div class="featured">
            <div class="featured-item">
                <div class="featured-image"></div>
                <div class="featured-content">
                    <h2>Hidangan Spesial Hari Ini</h2>
                    <h3>Risotto ai Funghi Porcini</h3>
                    <p>Risotto premium dengan jamur porcini pilihan dari Italia, mentega berkualitas tinggi, dan keju Parmigiano-Reggiano asli. Disiapkan dengan teknik tradisional Italia yang telah teruji.</p>
                    <div class="price">Rp 185.000</div>
                    <button class="btn">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </section>

    <!-- MENU -->
    <section id="menu" class="container">
        <div class="menu">
            <h2>Menu Kami</h2>
            <div class="menu-tabs">
                <button class="menu-tab active" onclick="filterMenu('all')">Semua</button>
                <button class="menu-tab" onclick="filterMenu('appetizer')">Appetizer</button>
                <button class="menu-tab" onclick="filterMenu('main')">Main Course</button>
                <button class="menu-tab" onclick="filterMenu('dessert')">Dessert</button>
                <button class="menu-tab" onclick="filterMenu('beverage')">Minuman</button>
            </div>
            <div class="menu-items" id="menuItems">
                <!-- Menu items will be generated by JavaScript -->
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div>
                    <h2>Tentang La Bella Italia</h2>
                    <p>La Bella Italia adalah restoran Italia premium yang telah melayani masyarakat Jakarta selama lebih dari 15 tahun. Kami menghadirkan cita rasa autentik Italia langsung dari resep turun-temurun keluarga kami.</p>
                    <p>Setiap hidangan disiapkan oleh chef berpengalaman yang pernah belajar langsung di Italia. Kami menggunakan bahan-bahan berkualitas premium yang diimpor langsung dari Italia.</p>
                    <p>Misi kami adalah memberikan pengalaman kuliner Italia yang tak terlupakan kepada setiap pelanggan kami.</p>
                </div>
                <div class="about-image"></div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="container">
        <div class="testimonials">
            <h2>Apa Kata Pelanggan Kami</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                    <div class="testimonial-text">"Tempat terbaik untuk makan Italia di Jakarta! Makanannya lezat, pelayanannya ramah, dan suasananya romantis. Pasti akan balik lagi!"</div>
                    <div class="testimonial-author">Rika Wijaya</div>
                    <div class="testimonial-role">Pengunjung Tetap</div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                    <div class="testimonial-text">"Kualitas makanan premium, harga yang masuk akal, dan atmosfer yang sangat nyaman. Chef mereka tahu apa yang dia lakukan. Merekomendasikan ke semua orang!"</div>
                    <div class="testimonial-author">Budi Santoso</div>
                    <div class="testimonial-role">Blogger Kuliner</div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-stars">⭐⭐⭐⭐⭐</div>
                    <div class="testimonial-text">"Sempurna untuk romantic dinner! Makanannya autentik, wine selectionnya bagus, dan staff sangat attentive. Terima kasih La Bella Italia!"</div>
                    <div class="testimonial-author">Sinta Kusuma</div>
                    <div class="testimonial-role">Pelanggan Korporat</div>
                </div>
            </div>
        </div>
    </section>

    <!-- RESERVATION -->
    <section id="reservation" class="container">
        <div class="reservation">
            <h2>Reservasi Meja</h2>
            <form class="reservation-form" onsubmit="handleReservation(event)">
                <div class="form-row">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="tel" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tamu</label>
                        <select required>
                            <option value="">Pilih jumlah tamu</option>
                            <option value="1">1 Orang</option>
                            <option value="2">2 Orang</option>
                            <option value="3">3 Orang</option>
                            <option value="4">4 Orang</option>
                            <option value="5">5 Orang</option>
                            <option value="6+">6+ Orang</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" required>
                    </div>
                    <div class="form-group">
                        <label>Jam</label>
                        <input type="time" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Catatan Khusus (Opsional)</label>
                    <input type="text" placeholder="Contoh: Anniversary celebration, dietary restrictions">
                </div>
                <button type="submit" class="btn">Konfirmasi Reservasi</button>
            </form>
        </div>
    </section>

    <!-- LOCATION -->
    <section id="location" class="container">
        <div class="location">
            <h2>Kunjungi Kami</h2>
            <div class="location-content">
                <div class="map">📍 Google Maps Embed</div>
                <div class="location-info">
                    <div class="info-item">
                        <h3>📍 Alamat</h3>
                        <p>Jl. Senayan Kav. 2, Menteng<br>Jakarta Selatan, 12210</p>
                    </div>
                    <div class="info-item">
                        <h3>📞 Telepon</h3>
                        <p>(021) 7222-1234<br>+62 812-3456-7890</p>
                    </div>
                    <div class="info-item">
                        <h3>⏰ Jam Operasional</h3>
                        <p>Senin - Kamis: 11:00 - 22:00<br>Jumat - Minggu: 11:00 - 23:00</p>
                    </div>
                    <div class="info-item">
                        <h3>✉️ Email</h3>
                        <p>info@labellaItalia.com<br>reservasi@labellaItalia.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <a href="/" class="back-link">← Kembali ke Portfolio Utama</a>
            <p>&copy; 2025 La Bella Italia. Semua Hak Dilindungi. Dengan cinta untuk Italia ❤️</p>
        </div>
    </footer>

    <script>
        const menuData = {
            all: [],
            appetizer: [],
            main: [],
            dessert: [],
            beverage: []
        };

        const fullMenuData = [
            { category: 'appetizer', name: 'Caprese Salad', price: 'Rp 85.000', desc: 'Tomat segar, mozarella, basil, dan olive oil premium' },
            { category: 'appetizer', name: 'Bruschetta Al Pomodoro', price: 'Rp 75.000', desc: 'Roti Italia yang dipanggang dengan tomat dan bawang putih' },
            { category: 'appetizer', name: 'Calamari Fritti', price: 'Rp 125.000', desc: 'Cumi-cumi goreng dengan lemon sauce' },
            
            { category: 'main', name: 'Spaghetti Carbonara', price: 'Rp 135.000', desc: 'Resep otentik dari Roma dengan pancetta dan pecorino' },
            { category: 'main', name: 'Fettuccine Alfredo', price: 'Rp 128.000', desc: 'Fettuccine dalam saus krem mentega dan keju Parmigiano' },
            { category: 'main', name: 'Lasagna Bolognese', price: 'Rp 145.000', desc: 'Lapisan pasta, daging sapi, dan béchamel sauce' },
            { category: 'main', name: 'Risotto ai Funghi', price: 'Rp 185.000', desc: 'Risotto dengan jamur porcini premium dari Italia' },
            { category: 'main', name: 'Osso Buco', price: 'Rp 275.000', desc: 'Daging sapi dalam broth tomat dengan sayuran Italia' },
            
            { category: 'dessert', name: 'Tiramisu', price: 'Rp 65.000', desc: 'Dessert klasik Italia dengan mascarpone dan kopi' },
            { category: 'dessert', name: 'Panna Cotta', price: 'Rp 55.000', desc: 'Cream dessert lembut dengan berry sauce' },
            { category: 'dessert', name: 'Zabaglione', price: 'Rp 60.000', desc: 'Dessert tradisional Italia dengan wine dan telur' },
            
            { category: 'beverage', name: 'Espresso', price: 'Rp 35.000', desc: 'Kopi Italia yang kuat dan aromatik' },
            { category: 'beverage', name: 'Cappuccino', price: 'Rp 45.000', desc: 'Espresso dengan susu foam yang lembut' },
            { category: 'beverage', name: 'Italian Tiramisu Coffee', price: 'Rp 50.000', desc: 'Kopi spesial dengan rasa tiramisu' },
        ];

        function filterMenu(category) {
            const menuItems = document.getElementById('menuItems');
            const tabs = document.querySelectorAll('.menu-tab');
            
            tabs.forEach(tab => tab.classList.remove('active'));
            event.target.classList.add('active');

            let items = category === 'all' ? fullMenuData : fullMenuData.filter(item => item.category === category);
            
            menuItems.innerHTML = items.map(item => `
                <div class="menu-item">
                    <div class="menu-item-header">
                        <div class="menu-item-name">${item.name}</div>
                        <div class="menu-item-price">${item.price}</div>
                    </div>
                    <div class="menu-item-desc">${item.desc}</div>
                </div>
            `).join('');
        }

        function handleReservation(e) {
            e.preventDefault();
            alert('Terima kasih! Reservasi Anda telah diterima. Kami akan mengkonfirmasi melalui email/telepon Anda.');
            e.target.reset();
        }

        // Initialize menu
        filterMenu('all');
    </script>
</body>
</html>