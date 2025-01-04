<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saç Serumları</title>
    <style>
        /* Saç Serumları Sayfası Genel Stilleri */
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

/* Saç Serumları Konteyner */
.sac-serum-container {
    padding: 60px 20px;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Serum Türleri */
.serum-content {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.serum-topic {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

.serum-topic h2 {
    margin-bottom: 10px;
    font-size: 22px;
}

.serum-topic p {
    font-size: 16px;
}

/* Serum Ürünleri */
.serum-products {
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
    <section class="sac-serum-container">
        <div class="container">
            <h1>Saç Serumları: Faydaları ve Öneriler</h1>
            <p>Saç serumları, saç sağlığını desteklemek, parlaklık kazandırmak ve saç problemlerini çözmek için geliştirilmiş ürünlerdir. Farklı saç tiplerine özel serum seçenekleri ile saçınıza en iyi bakımı sağlayabilirsiniz.</p>

            <!-- Saç Serum Türleri -->
            <div class="serum-content">
                <div class="serum-topic">
                    <h2>Onarıcı Saç Serumları</h2>
                    <p>Yıpranmış saç tellerini onarır ve saçların sağlıklı bir görünüme kavuşmasını sağlar. Özellikle sık işlem gören saçlar için idealdir.</p>
                </div>

                <div class="serum-topic">
                    <h2>Nemlendirici Saç Serumları</h2>
                    <p>Kuru saçlara nem kazandırır ve kabarmayı önler. Yumuşak ve parlak bir görünüm sunar.</p>
                </div>

                <div class="serum-topic">
                    <h2>Saç Dökülmesine Karşı Serumlar</h2>
                    <p>Saç köklerini güçlendirerek dökülmeyi azaltır. Düzenli kullanımda saçların daha güçlü ve dolgun görünmesini sağlar.</p>
                </div>
            </div>

            <!-- Popüler Saç Serumları -->
            <div class="serum-products">
                <h2>En Çok Tercih Edilen Saç Serumları</h2>
                <div class="product-list">
                    <div class="product">
                        <img src="{{ asset('images/serum1.jpg') }}" alt="Onarıcı Saç Serumu">
                        <h3>Onarıcı Saç Serumu</h3>
                        <p>Fiyat: 150₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/serum2.jpg') }}" alt="Nemlendirici Saç Serumu">
                        <h3>Nemlendirici Saç Serumu</h3>
                        <p>Fiyat: 180₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/serum3.jpg') }}" alt="Saç Dökülmesine Karşı Serum">
                        <h3>Saç Dökülmesine Karşı Serum</h3>
                        <p>Fiyat: 200₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php");?>
</body>
</html>
