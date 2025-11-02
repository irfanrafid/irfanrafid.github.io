<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TechStore - E-Commerce Platform untuk Elektronik">
    <title>TechStore - Online Shopping</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #ff8c42;
            --secondary: #2a4f6f;
            --accent: #2a9d8f;
            --light: #f5f5f5;
            --dark: #1a1a1a;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--light);
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* HEADER */
        header {
            background: white;
            padding: 1rem 0;
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
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .search-bar {
            display: flex;
            background: var(--light);
            border: 2px solid var(--primary);
            border-radius: 5px;
            overflow: hidden;
        }

        .search-bar input {
            border: none;
            padding: 0.7rem 1rem;
            background: transparent;
            flex: 1;
        }

        .search-bar button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.7rem 1rem;
            cursor: pointer;
        }

        .cart-icon {
            position: relative;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--accent);
            color: white;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            font-weight: bold;
        }

        /* NAV */
        nav {
            background: var(--secondary);
            padding: 1rem 0;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
            justify-content: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--primary);
        }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: white;
            color: var(--primary);
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: var(--accent);
            color: white;
        }

        .btn-add-cart {
            background: var(--accent);
            color: white;
            padding: 0.6rem 1.2rem;
            font-size: 0.9rem;
        }

        /* PRODUCTS */
        .products-section {
            padding: 4rem 0;
            background: white;
            margin: 2rem 0;
            border-radius: 10px;
        }

        .products-section h2 {
            text-align: center;
            font-size: 2.2rem;
            margin-bottom: 2rem;
            color: var(--secondary);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: var(--light);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--secondary);
        }

        .product-desc {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.4;
        }

        .product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .product-rating {
            font-size: 0.9rem;
            color: #ff9800;
            margin-bottom: 1rem;
        }

        .product-actions {
            display: flex;
            gap: 0.5rem;
        }

        .product-actions button {
            flex: 1;
        }

        /* CART SECTION */
        .cart-section {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .cart-section h2 {
            margin-bottom: 2rem;
            color: var(--secondary);
        }

        .cart-empty {
            text-align: center;
            padding: 2rem;
            color: #999;
        }

        .cart-items {
            margin-bottom: 2rem;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: var(--light);
            margin-bottom: 1rem;
            border-radius: 5px;
        }

        .cart-item-info {
            flex: 1;
        }

        .cart-item-name {
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .cart-item-price {
            color: var(--accent);
            font-weight: 600;
        }

        .cart-item-qty {
            width: 80px;
            text-align: center;
        }

        .cart-item-remove {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 3px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .cart-item-remove:hover {
            background: #c0392b;
        }

        .cart-summary {
            background: var(--light);
            padding: 1.5rem;
            border-radius: 5px;
            margin-bottom: 1.5rem;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
        }

        .summary-row.total {
            border-top: 2px solid #ddd;
            padding-top: 1rem;
            font-weight: 700;
            color: var(--secondary);
            font-size: 1.3rem;
        }

        .checkout-btn {
            width: 100%;
            padding: 1rem;
            font-size: 1.1rem;
        }

        /* CHECKOUT FORM */
        .checkout-form {
            background: var(--light);
            padding: 2rem;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--secondary);
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: inherit;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        /* FOOTER */
        footer {
            background: var(--secondary);
            color: white;
            padding: 2rem 0;
            text-align: center;
            margin-top: 4rem;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 1rem;
            color: var(--accent);
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .header-right {
                gap: 1rem;
            }

            .search-bar {
                display: none;
            }

            nav ul {
                gap: 1rem;
            }

            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 1rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .cart-item {
                flex-direction: column;
                gap: 1rem;
            }

            .cart-item-qty,
            .cart-item-remove {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <div class="logo">💻 TechStore</div>
            <div class="header-right">
                <div class="search-bar">
                    <input type="text" placeholder="Cari produk...">
                    <button>🔍</button>
                </div>
                <div class="cart-icon" onclick="alert('Buka keranjang belanja Anda')">
                    🛒
                    <span class="cart-count" id="cartCount">0</span>
                </div>
            </div>
        </div>
    </header>

    <!-- NAVIGATION -->
    <nav>
        <ul class="container">
            <li><a href="#home">Home</a></li>
            <li><a href="#products">Produk</a></li>
            <li><a href="#cart">Keranjang</a></li>
            <li><a href="#checkout">Checkout</a></li>
        </ul>
    </nav>

    <!-- HERO -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Selamat Datang di TechStore</h1>
            <p>Belanja gadget dan elektronik berkualitas dengan harga terbaik</p>
            <button class="btn">Mulai Belanja</button>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section id="products" class="container">
        <div class="products-section">
            <h2>Produk Populer</h2>
            <div class="products-grid" id="productsGrid">
                <!-- Products will be generated by JavaScript -->
            </div>
        </div>
    </section>

    <!-- CART -->
    <section id="cart" class="container">
        <div class="cart-section">
            <h2>🛒 Keranjang Belanja Anda</h2>
            <div id="cartContainer">
                <div class="cart-empty">Keranjang Anda masih kosong</div>
            </div>
        </div>
    </section>

    <!-- CHECKOUT -->
    <section id="checkout" class="container">
        <div class="checkout-form">
            <h2>📦 Form Checkout</h2>
            <form onsubmit="handleCheckout(event)">
                <div class="form-grid">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" required>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="tel" required>
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <input type="text" required>
                    </div>
                    <div class="form-group full">
                        <label>Alamat Lengkap</label>
                        <input type="text" required>
                    </div>
                    <div class="form-group">
                        <label>Metode Pengiriman</label>
                        <select required>
                            <option>Pilih metode pengiriman</option>
                            <option>Standar (5-7 hari) - Gratis</option>
                            <option>Express (2-3 hari) - Rp 50.000</option>
                            <option>Same Day - Rp 100.000</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <select required>
                            <option>Pilih metode pembayaran</option>
                            <option>Transfer Bank</option>
                            <option>Kartu Kredit</option>
                            <option>E-Wallet</option>
                            <option>COD (Bayar di Tempat)</option>
                        </select>
                    </div>
                    <div class="form-group full">
                        <button type="submit" class="btn btn-secondary checkout-btn">Lanjutkan Pembayaran</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <a href="/" class="back-link">← Kembali ke Portfolio Utama</a>
            <p>&copy; 2025 TechStore. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Product data
        const products = [
            { id: 1, name: 'Smartphone Pro', price: 8999000, desc: 'Smartphone flagship terbaru dengan spesifikasi tinggi', emoji: '📱' },
            { id: 2, name: 'Laptop Ultra', price: 15999000, desc: 'Laptop ultrabook dengan performa maksimal', emoji: '💻' },
            { id: 3, name: 'Wireless Earbuds', price: 2499000, desc: 'Earbuds nirkabel dengan noise cancellation', emoji: '🎧' },
            { id: 4, name: 'Smart Watch', price: 4999000, desc: 'Jam tangan pintar dengan health tracking', emoji: '⌚' },
            { id: 5, name: 'Tablet 12"', price: 5999000, desc: 'Tablet layar besar untuk produktivitas', emoji: '📱' },
            { id: 6, name: 'Gaming Monitor', price: 3999000, desc: 'Monitor gaming 144Hz dengan response time 1ms', emoji: '🖥️' },
            { id: 7, name: 'Mechanical Keyboard', price: 1499000, desc: 'Keyboard mekanik RGB dengan switch premium', emoji: '⌨️' },
            { id: 8, name: 'Wireless Mouse', price: 999000, desc: 'Mouse nirkabel presisi tinggi', emoji: '🖱️' }
        ];

        let cart = [];

        // Render products
        function renderProducts() {
            const grid = document.getElementById('productsGrid');
            grid.innerHTML = products.map(product => `
                <div class="product-card">
                    <div class="product-image">${product.emoji}</div>
                    <div class="product-info">
                        <div class="product-name">${product.name}</div>
                        <div class="product-desc">${product.desc}</div>
                        <div class="product-price">Rp ${product.price.toLocaleString('id-ID')}</div>
                        <div class="product-rating">⭐⭐⭐⭐⭐ (128 reviews)</div>
                        <div class="product-actions">
                            <button class="btn btn-add-cart" onclick="addToCart(${product.id})">Tambah ke Keranjang</button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Add to cart
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);

            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ ...product, quantity: 1 });
            }

            updateCart();
            alert(`${product.name} ditambahkan ke keranjang!`);
        }

        // Remove from cart
        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCart();
        }

        // Update cart
        function updateCart() {
            document.getElementById('cartCount').textContent = cart.length;
            const cartContainer = document.getElementById('cartContainer');

            if (cart.length === 0) {
                cartContainer.innerHTML = '<div class="cart-empty">Keranjang Anda masih kosong</div>';
                return;
            }

            const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const cartHTML = `
                <div class="cart-items">
                    ${cart.map(item => `
                        <div class="cart-item">
                            <div class="cart-item-info">
                                <div class="cart-item-name">${item.name}</div>
                                <div class="cart-item-price">Rp ${item.price.toLocaleString('id-ID')}</div>
                            </div>
                            <div class="cart-item-qty">Qty: ${item.quantity}</div>
                            <button class="cart-item-remove" onclick="removeFromCart(${item.id})">Hapus</button>
                        </div>
                    `).join('')}
                </div>
                <div class="cart-summary">
                    <div class="summary-row">
                        <span>Subtotal:</span>
                        <span>Rp ${total.toLocaleString('id-ID')}</span>
                    </div>
                    <div class="summary-row">
                        <span>Pajak (10%):</span>
                        <span>Rp ${Math.round(total * 0.1).toLocaleString('id-ID')}</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total:</span>
                        <span>Rp ${Math.round(total * 1.1).toLocaleString('id-ID')}</span>
                    </div>
                </div>
                <button class="btn btn-secondary checkout-btn" onclick="document.getElementById('checkout').scrollIntoView({behavior: 'smooth'})">Lanjut ke Checkout</button>
            `;
            cartContainer.innerHTML = cartHTML;
        }

        // Handle checkout
        function handleCheckout(e) {
            e.preventDefault();
            if (cart.length === 0) {
                alert('Keranjang Anda masih kosong!');
                return;
            }
            alert('Pesanan Anda telah berhasil diproses! Terima kasih telah berbelanja.');
            cart = [];
            updateCart();
            e.target.reset();
        }

        // Initialize
        renderProducts();
    </script>
</body>
</html>