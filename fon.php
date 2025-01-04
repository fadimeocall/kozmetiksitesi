
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fondötenler</title>
    <style>
        /* Fondötenler Sayfası Genel Stilleri */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

h1, h2 {
    color: #333;
}

p {
    color: #555;
}

/* Fondöten Konteyner */
.fondoten-container {
    padding: 60px 20px;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Fondöten Türleri */
.fondoten-content {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.fondoten-topic {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

.fondoten-topic h2 {
    margin-bottom: 10px;
    font-size: 22px;
}

.fondoten-topic p {
    font-size: 16px;
}

/* Fondöten Ürünleri */
.fondoten-products {
    margin-top: 40px;
}

.product-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.product {
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    max-width: 300px;
}

.product img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

.product h3 {
    font-size: 18px;
    margin: 10px 0;
}

.product p {
    font-size: 16px;
    color: #666;
}

.buy-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f4a5c4;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 10px;
    transition: background-color 0.3s;
}

.buy-button:hover {
    background-color: #e092b3;
}

    </style>
</head>
<body>
<?php include("header.php");?>

    <!-- Ana İçerik Başlangıcı -->
    <section class="fondoten-container">
        <div class="container">
            <h1>Fondöten Seçimi ve Önerileri</h1>
            <p>Fondöten, makyajın temelini oluşturan en önemli ürünlerden biridir. Cilt tipinize uygun bir fondöten seçimi, doğal bir görünüm ve kalıcı bir makyaj sağlar. İşte fondöten seçimi ile ilgili öneriler ve satıştaki ürünlerimiz:</p>

            <!-- Fondöten Türleri -->
            <div class="fondoten-content">
                <div class="fondoten-topic">
                    <h2>Mat Fondöten</h2>
                    <p>Yağlı ciltler için idealdir. Parlamayı önler ve ciltte mat bir bitiş sağlar. Gün boyu taze bir görünüm için tercih edilebilir.</p>
                </div>

                <div class="fondoten-topic">
                    <h2>Nemlendirici Özellikli Fondöten</h2>
                    <p>Kuru ciltler için formüle edilmiştir. Cildi nemlendirir ve doğal bir parlaklık sunar.</p>
                </div>

                <div class="fondoten-topic">
                    <h2>Full Coverage (Tam Kapatıcı) Fondöten</h2>
                    <p>Özel günlerde kusursuz bir görünüm için tercih edilen bu fondötenler, ciltteki leke ve kusurları tamamen kapatır.</p>
                </div>
            </div>

            <!-- Örnek Fondöten Ürünleri -->
            <div class="fondoten-products">
                <h2>Popüler Fondöten Ürünleri</h2>
                <div class="product-list">
                    <div class="product">
                        <img src="{{ asset('images/fondoten1.jpg') }}" alt="Mat Fondöten">
                        <h3>Mat Fondöten</h3>
                        <p>Fiyat: 180₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/fondoten2.jpg') }}" alt="Nemlendirici Fondöten">
                        <h3>Nemlendirici Fondöten</h3>
                        <p>Fiyat: 200₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/fondoten3.jpg') }}" alt="Full Coverage Fondöten">
                        <h3>Full Coverage Fondöten</h3>
                        <p>Fiyat: 250₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php");?>
</body>
</html>
