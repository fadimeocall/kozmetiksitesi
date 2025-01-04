
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şampuan Çeşitleri ve Faydaları</title>
    <style>
        /* Şampuan Sayfası Genel Stilleri */
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

/* Şampuan Konteyner */
.sampuan-container {
    padding: 60px 20px;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Şampuan Türleri */
.sampuan-content {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.sampuan-topic {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

.sampuan-topic h2 {
    margin-bottom: 10px;
    font-size: 22px;
}

.sampuan-topic p {
    font-size: 16px;
}

/* Şampuan Ürünleri */
.sampuan-products {
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

    <!-- Ana İçerik -->
    <section class="sampuan-container">
        <div class="container">
            <h1>Şampuan Çeşitleri ve Faydaları</h1>
            <p>Saç tipinize uygun doğru şampuanı seçmek, sağlıklı ve parlak saçlara sahip olmanın en önemli adımıdır. İster kuru, ister yağlı saçlara sahipseniz, her saç tipi için özel formüle edilmiş şampuanlar bulunmaktadır.</p>

            <!-- Şampuan Türleri -->
            <div class="sampuan-content">
                <div class="sampuan-topic">
                    <h2>Kuru Saçlar İçin Şampuan</h2>
                    <p>Kuru saçlar için geliştirilmiş şampuanlar, saç tellerini nemlendirir ve yumuşak bir görünüm kazandırır. İçeriğindeki doğal yağlar saçın nem dengesini korur.</p>
                </div>

                <div class="sampuan-topic">
                    <h2>Yağlı Saçlar İçin Şampuan</h2>
                    <p>Yağlı saçlara uygun şampuanlar, fazla sebumu temizler ve saç derisinin yağ dengesini düzenler. Hafif formülü sayesinde saçlarınız gün boyu ferah kalır.</p>
                </div>

                <div class="sampuan-topic">
                    <h2>Kepek Önleyici Şampuan</h2>
                    <p>Kepek önleyici şampuanlar, saç derisini arındırarak kepek oluşumunu önler. Ayrıca kaşıntıyı hafifletir ve saç derisini rahatlatır.</p>
                </div>
            </div>

            <!-- Popüler Şampuan Ürünleri -->
            <div class="sampuan-products">
                <h2>Popüler Şampuanlar</h2>
                <div class="product-list">
                    <div class="product">
                        <img src="{{ asset('images/sampuan1.jpg') }}" alt="Nemlendirici Şampuan">
                        <h3>Nemlendirici Şampuan</h3>
                        <p>Fiyat: 120₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/sampuan2.jpg') }}" alt="Yağlı Saçlar İçin Şampuan">
                        <h3>Yağlı Saçlar İçin Şampuan</h3>
                        <p>Fiyat: 140₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/sampuan3.jpg') }}" alt="Kepek Önleyici Şampuan">
                        <h3>Kepek Önleyici Şampuan</h3>
                        <p>Fiyat: 130₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php");?>
</body>
</html>
