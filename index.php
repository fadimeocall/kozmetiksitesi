
<?php include("header.php");?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

section {
    padding: 40px 20px;
    background-color: #f9f9f9;
    text-align: center;
}

/* Ana Banner */
.main-banner {
    background-color: #f4a5c4;
    color: white;
    padding: 60px 0;
}

.main-banner h2 {
    font-size: 36px;
    margin-bottom: 10px;
}

.main-banner p {
    font-size: 18px;
    margin-bottom: 20px;
}

.main-banner .btn {
    background-color: #ff577f;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.main-banner .btn:hover {
    background-color: #e0476b;
}

/* Ürün Kartları */
.product-container {
    display: flex;
    justify-content: space-around;
    gap: 20px;
}

.product-card {
    background-color: white;
    padding: 20px;
    width: 250px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.product-card img {
    width: 100%;
    border-radius: 8px;
}

.product-card h3 {
    font-size: 18px;
    margin-top: 10px;
}

.product-card .btn {
    background-color: #f4a5c4;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
    border-radius: 5px;
}

.product-card .btn:hover {
    background-color: #ff577f;
}

/* Diğer Bölümler */
.november-deals, .best-sellers, .most-liked, .latest-news {
    background-color: #ffffff;
}

.news-container {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.news-item h3 {
    font-size: 18px;
}

.news-item p {
    font-size: 16px;
    color: #555;
}

/* Footer */
footer {
    background-color: #f4a5c4;
    color: white;
    padding: 30px 0;
    text-align: center;
}

    </style>
</head>
<body>


<!-- Ana Banner (Kampanya veya ürün promosyonu) -->
<section class="main-banner">
    <div class="banner-container">
        <h2>İndirimli Kozmetik Ürünleri Burada!</h2>
        <p>Şimdi alışveriş yapın, %50'ye varan indirim fırsatını kaçırmayın!</p>
        <a href="indirimler.php" class="btn">İndirimli Ürünlere Göz At</a>
    </div>
</section>

<!-- Gündem Olan Ürünler -->
<section class="featured-products">
    <h2>Gündem Olan Ürünler</h2>
    <div class="product-container">
        <!-- Ürün Kartları -->
        <div class="product-card">
            <img src="urun1.jpg" alt="Ürün 1">
            <h3>Ürün Adı 1</h3>
            <p>Özellikler</p>
            <a href="urun1.php" class="btn">Detaylar</a>
        </div>
        <div class="product-card">
            <img src="urun2.jpg" alt="Ürün 2">
            <h3>Ürün Adı 2</h3>
            <p>Özellikler</p>
            <a href="urun2.php" class="btn">Detaylar</a>
        </div>
        <!-- Diğer ürünler buraya eklenecek -->
    </div>
</section>

<!-- İndirimli Ürünler -->
<section class="discounted-products">
    <h2>İndirimli Ürünler</h2>
    <div class="product-container">
        <div class="product-card">
            <img src="indirimli1.jpg" alt="İndirimli Ürün 1">
            <h3>İndirimli Ürün 1</h3>
            <p>Özellikler</p>
            <a href="indirimli1.php" class="btn">Detaylar</a>
        </div>
        <!-- Diğer indirimli ürünler -->
    </div>
</section>

<!-- Efsane Kasım Kampanyası -->
<section class="november-deals">
    <h2>Efsane Kasım İndirimleri</h2>
    <p>Özel Kasım kampanyalarına göz atın!</p>
    <a href="kasim-kampanya.php" class="btn">Fırsatları Gör</a>
</section>

<!-- Çok Satan Ürünler -->
<section class="best-sellers">
    <h2>Çok Satan Ürünler</h2>
    <div class="product-container">
        <div class="product-card">
            <img src="satan1.jpg" alt="Çok Satan Ürün 1">
            <h3>Ürün Adı 1</h3>
            <a href="satan1.php" class="btn">Detaylar</a>
        </div>
        <!-- Diğer çok satan ürünler -->
    </div>
</section>

<!-- En Çok Beğenilen Ürünler -->
<section class="most-liked">
    <h2>En Çok Beğenilen Ürünler</h2>
    <div class="product-container">
        <div class="product-card">
            <img src="begeni1.jpg" alt="Beğenilen Ürün 1">
            <h3>Ürün Adı 1</h3>
            <a href="begeni1.php" class="btn">Detaylar</a>
        </div>
        <!-- Diğer beğenilen ürünler -->
    </div>
</section>

<!-- Güncel Kozmetik Haberleri -->
<section class="latest-news">
    <h2>Güncel Kozmetik Haberleri</h2>
    <div class="news-container">
        <div class="news-item">
            <h3><a href="haber1.php">Kozmetik Dünyasında Yeni Trendler</a></h3>
            <p>Kozmetik dünyasında bu yıl en çok tercih edilen ürünler...</p>
        </div>
        <!-- Diğer haberler -->
    </div>
</section>
<?php include("footer.php");?>

</body>
</html>