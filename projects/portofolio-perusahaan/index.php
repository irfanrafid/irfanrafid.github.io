<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Digital Marketing Agency Indonesia - Solusi Marketing Terpadu">
    <title>Nexus Digital - Digital Marketing Agency</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #0066cc;
            --secondary: #004a99;
            --accent: #ff6b35;
            --light: #f5f7fa;
            --dark: #1a1a1a;
            --text: #333;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text);
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

        .brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: var(--text);
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }

        nav a:hover {
            color: var(--primary);
        }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 6rem 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2rem;
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

        /* SERVICES */
        .services {
            padding: 6rem 0;
            background: var(--light);
        }

        .services h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .service-card h3 {
            color: var(--primary);
            margin-bottom: 1rem;
        }

        /* WHY CHOOSE US */
        .why-us {
            padding: 6rem 0;
        }

        .why-us-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .why-us h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        .feature-list {
            list-style: none;
        }

        .feature-list li {
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
            padding-left: 2rem;
            position: relative;
        }

        .feature-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--accent);
            font-weight: bold;
            font-size: 1.5rem;
        }

        .feature-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 10px;
        }

        /* TESTIMONIALS */
        .testimonials {
            padding: 6rem 0;
            background: var(--light);
        }

        .testimonials h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            border-left: 5px solid var(--accent);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1rem;
            color: #666;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--primary);
        }

        .author-info h4 {
            color: var(--primary);
            margin-bottom: 0.25rem;
        }

        .author-info p {
            font-size: 0.85rem;
            color: #999;
        }

        /* PRICING */
        .pricing {
            padding: 6rem 0;
        }

        .pricing h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .pricing-card {
            background: white;
            border: 2px solid #eee;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
        }

        .pricing-card:hover {
            border-color: var(--accent);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transform: translateY(-10px);
        }

        .pricing-card.featured {
            border-color: var(--accent);
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            transform: scale(1.05);
        }

        .pricing-card h3 {
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .pricing-card.featured h3,
        .pricing-card.featured p {
            color: white;
        }

        .price {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--accent);
            margin: 1rem 0;
        }

        .pricing-card.featured .price {
            color: var(--accent);
        }

        .features-list {
            list-style: none;
            text-align: left;
            margin: 1.5rem 0;
        }

        .features-list li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #eee;
        }

        .pricing-card.featured .features-list li {
            border-bottom-color: rgba(255, 255, 255, 0.2);
        }

        /* CONTACT */
        .contact {
            padding: 6rem 0;
            background: var(--light);
        }

        .contact h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary);
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .contact-info {
            background: white;
            padding: 2rem;
            border-radius: 10px;
        }

        .info-item {
            margin-bottom: 2rem;
        }

        .info-item h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        /* FOOTER */
        footer {
            background: var(--dark);
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 1rem;
            color: var(--accent);
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            nav ul {
                gap: 1rem;
                font-size: 0.9rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .why-us-content,
            .contact-content {
                grid-template-columns: 1fr;
            }

            .pricing-card.featured {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="brand">🚀 NEXUS Digital</div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- HERO -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Transform Your Business with Digital Marketing</h1>
            <p>Solusi marketing terpadu untuk meningkatkan pertumbuhan bisnis Anda</p>
            <button class="btn">Mulai Sekarang</button>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="services">
        <div class="container">
            <h2>Layanan Kami</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3>Social Media Marketing</h3>
                    <p>Strategi media sosial yang efektif untuk meningkatkan engagement dan konversi. Kami mengelola semua platform utama untuk Anda.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">📊</div>
                    <h3>SEO & Analytics</h3>
                    <p>Optimasi mesin pencari untuk meningkatkan visibility online. Data-driven strategy untuk hasil maksimal.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">✉️</div>
                    <h3>Email Marketing</h3>
                    <p>Campaign email yang terukur dan efektif. Kami membuat automation yang meningkatkan customer retention.</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎨</div>
                    <h3>Content Design</h3>
                    <p>Desain konten yang menarik dan profesional. Visual yang memukau untuk meningkatkan brand awareness.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="why-us">
        <div class="container">
            <div class="why-us-content">
                <div>
                    <h2>Mengapa Pilih Kami?</h2>
                    <ul class="feature-list">
                        <li>Tim profesional dengan 10+ tahun pengalaman</li>
                        <li>Strategi marketing yang disesuaikan untuk bisnis Anda</li>
                        <li>ROI yang terukur dan transparan</li>
                        <li>Laporan bulanan yang detail dan akurat</li>
                        <li>Support 24/7 untuk membantu kesuksesan Anda</li>
                        <li>Teknologi terkini dalam industri digital marketing</li>
                    </ul>
                </div>
                <div class="feature-image"></div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials">
        <div class="container">
            <h2>Testimoni Klien Kami</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-text">"Nexus Digital berhasil meningkatkan penjualan kami hingga 300% dalam 6 bulan pertama. Tim mereka sangat profesional dan responsif."</div>
                    <div class="testimonial-author">
                        <div class="author-avatar"></div>
                        <div class="author-info">
                            <h4>Budi Santoso</h4>
                            <p>CEO, PT. Retail Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">"Luar biasa! Strategi mereka sangat efektif dan ROI yang kami dapatkan jauh melebihi ekspektasi. Highly recommended!"</div>
                    <div class="testimonial-author">
                        <div class="author-avatar"></div>
                        <div class="author-info">
                            <h4>Siti Nurhaliza</h4>
                            <p>Founder, Beauty Brand Jakarta</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">"Profesional, transparan, dan hasil yang nyata. Nexus Digital adalah partner terbaik untuk transformasi digital kami."</div>
                    <div class="testimonial-author">
                        <div class="author-avatar"></div>
                        <div class="author-info">
                            <h4>Ahmad Wijaya</h4>
                            <p>Director, Tech Startup XYZ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->
    <section id="pricing" class="pricing">
        <div class="container">
            <h2>Paket Harga</h2>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <h3>Starter</h3>
                    <div class="price">Rp 5 Juta</div>
                    <p>/bulan</p>
                    <ul class="features-list">
                        <li>✓ Social Media Management</li>
                        <li>✓ Basic SEO</li>
                        <li>✓ Monthly Report</li>
                        <li>✗ Email Marketing</li>
                        <li>✗ Content Creation</li>
                    </ul>
                    <button class="btn">Pilih Paket</button>
                </div>
                <div class="pricing-card featured">
                    <h3>Professional</h3>
                    <div class="price">Rp 12 Juta</div>
                    <p>/bulan</p>
                    <ul class="features-list">
                        <li>✓ Social Media Management</li>
                        <li>✓ Advanced SEO</li>
                        <li>✓ Email Marketing</li>
                        <li>✓ Content Creation</li>
                        <li>✓ Weekly Report</li>
                    </ul>
                    <button class="btn">Pilih Paket</button>
                </div>
                <div class="pricing-card">
                    <h3>Enterprise</h3>
                    <div class="price">Rp 25 Juta</div>
                    <p>/bulan</p>
                    <ul class="features-list">
                        <li>✓ Semua di Professional</li>
                        <li>✓ Dedicated Account Manager</li>
                        <li>✓ Custom Strategy</li>
                        <li>✓ Priority Support</li>
                        <li>✓ Real-time Analytics</li>
                    </ul>
                    <button class="btn">Pilih Paket</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <div class="contact-content">
                <form class="contact-form" onsubmit="handleSubmit(event)">
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" placeholder="Nama perusahaan Anda" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="email@perusahaan.com" required>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="tel" placeholder="(021) 1234-5678" required>
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea placeholder="Jelaskan kebutuhan marketing Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim Pesan</button>
                </form>
                <div class="contact-info">
                    <div class="info-item">
                        <h3>📍 Alamat</h3>
                        <p>Menara Nexus, Jl. Sudirman No. 456<br>Jakarta Selatan, 12190</p>
                    </div>
                    <div class="info-item">
                        <h3>📞 Telepon</h3>
                        <p>(021) 5555-9999<br>+62 812-9999-8888</p>
                    </div>
                    <div class="info-item">
                        <h3>✉️ Email</h3>
                        <p>hello@nexusdigital.com<br>support@nexusdigital.com</p>
                    </div>
                    <div class="info-item">
                        <h3>🕐 Jam Kerja</h3>
                        <p>Senin - Jumat: 09:00 - 18:00<br>Sabtu: 10:00 - 14:00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <a href="/" class="back-link">← Kembali ke Portfolio Utama</a>
            <p>&copy; 2025 NEXUS Digital. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function handleSubmit(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah dikirim. Kami akan menghubungi Anda dalam 24 jam.');
            e.target.reset();
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>