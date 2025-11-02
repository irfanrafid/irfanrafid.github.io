<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio website saya">
    <meta name="keywords" content="developer, portfolio, web development">
    <meta name="author" content="Nama Anda">
    <title>Irfan Rafid R- Web Developer Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">Irfan Rafid</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Halo! Saya Irfan Rafid</h1>
            <p>Web Developer & Designer</p>
            <a href="#projects" class="btn">Lihat Proyek Saya</a>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="about">
        <div class="container">
            <h2>Tentang Saya</h2>
            <p>Seorang developer yang passionate tentang menciptakan website yang indah dan fungsional. Saya memiliki pengalaman dalam HTML, CSS, JavaScript, dan berbagai framework modern.</p>
            
            <h3>Skill Saya</h3>
            <div class="skills">
                <div class="skill">
                    <span class="skill-name">HTML/CSS</span>
                    <div class="skill-bar"><div class="skill-level" style="width: 90%"></div></div>
                </div>
                <div class="skill">
                    <span class="skill-name">JavaScript</span>
                    <div class="skill-bar"><div class="skill-level" style="width: 85%"></div></div>
                </div>
                <div class="skill">
                    <span class="skill-name">React</span>
                    <div class="skill-bar"><div class="skill-level" style="width: 80%"></div></div>
                </div>
                <div class="skill">
                    <span class="skill-name">Git/GitHub</span>
                    <div class="skill-bar"><div class="skill-level" style="width: 85%"></div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="projects">
    <div class="container">
        <h2>Proyek Saya</h2>
        <div class="projects-grid">
            
            <!-- NEW PROJECT 1 -->
            <div class="project-card">
                <div class="project-image" style="background: #1a1a1a;"></div>
                <h3>Portfolio Fotografer</h3>
                <p>Website portfolio profesional untuk fotografer dengan gallery, about, dan contact section.</p>
                <div class="technologies">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                </div>
                <div class="project-links">
                    <a href="/projects/portofolio-pribadi/" class="btn-small">View Demo</a>
                    <a href="https://github.com/username/portfolio-pribadi" class="btn-small" target="_blank">View Code</a>
                </div>
            </div>

            <!-- NEW PROJECT 2 -->
            <div class="project-card">
                <div class="project-image" style="background: #0066cc;"></div>
                <h3>Digital Marketing Agency</h3>
                <p>Website perusahaan dengan services, pricing, testimonials, dan dashboard komunikasi professional.</p>
                <div class="technologies">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                </div>
                <div class="project-links">
                    <a href="/projects/portofolio-perusahaan/" class="btn-small">View Demo</a>
                    <a href="https://github.com/username/portofolio-perusahaan" class="btn-small" target="_blank">View Code</a>
                </div>
            </div>

            <!-- NEW PROJECT 3 -->
            <div class="project-card">
                <div class="project-image" style="background: #ff8c42;"></div>
                <h3>E-Commerce / POS System</h3>
                <p>Platform e-commerce dengan shopping cart, product management, dan checkout functionality yang berfungsi.</p>
                <div class="technologies">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                </div>
                <div class="project-links">
                    <a href="/projects/sistem-pos/" class="btn-small">View Demo</a>
                    <a href="https://github.com/username/sistem-pos" class="btn-small" target="_blank">View Code</a>
                </div>
            </div>

            <!-- NEW PROJECT 4 -->
            <div class="project-card">
                <div class="project-image" style="background: #8b4513;"></div>
                <h3>Restaurant Website</h3>
                <p>Website restoran dengan menu interaktif, reservation system, dan testimonial pelanggan yang lengkap.</p>
                <div class="technologies">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JavaScript</span>
                </div>
                <div class="project-links">
                    <a href="/projects/restaurant-website/" class="btn-small">View Demo</a>
                    <a href="https://github.com/username/restaurant-website" class="btn-small" target="_blank">View Code</a>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Hubungi Saya</h2>
            <p>Tertarik untuk berkolaborasi? Mari kita terhubung!</p>
            <div class="contact-info">
                <p><strong>Email:</strong> email@example.com</p>
                <p><strong>GitHub:</strong> <a href="https://github.com/username" target="_blank">github.com/username</a></p>
                <p><strong>LinkedIn:</strong> <a href="https://linkedin.com/in/username" target="_blank">linkedin.com/in/username</a></p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Nama Anda. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>