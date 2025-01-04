<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nemlendiriciler</title>
    <style>
        /* Nemlendiriciler Sayfası Genel Stilleri */
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

/* Nemlendiriciler Konteyner */
.nemlendiriciler-container {
    padding: 60px 20px;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Nemlendirici Türleri */
.nemlendirici-content {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.nemlendirici-topic {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

.nemlendirici-topic h2 {
    margin-bottom: 10px;
    font-size: 22px;
}

.nemlendirici-topic p {
    font-size: 16px;
}

/* Nemlendirici Ürünleri */
.nemlendirici-products {
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
    <section class="nemlendiriciler-container">
        <div class="container">
            <h1>Nemlendiriciler ve Cilt Sağlığı</h1>
            <p>Nemlendiriciler, cildin doğal nem dengesini korumak ve çevresel faktörlerin neden olduğu kuruluğu önlemek için kullanılan önemli bakım ürünleridir. Cilt tipinize uygun bir nemlendirici seçerek sağlıklı ve parlak bir cilt görünümü elde edebilirsiniz.</p>

            <!-- Nemlendirici Türleri -->
            <div class="nemlendirici-content">
                <div class="nemlendirici-topic">
                    <h2>Hafif Nemlendiriciler</h2>
                    <p>Hafif formüllü nemlendiriciler, özellikle yağlı ve karma ciltler için uygundur. Cildi nemlendirirken, gözenekleri tıkamaz ve cilde mat bir görünüm sağlar.</p>
                </div>

                <div class="nemlendirici-topic">
                    <h2>Yoğun Nemlendiriciler</h2>
                    <p>Yoğun nemlendiriciler, kuru ve hassas ciltler için özel olarak formüle edilmiştir. Derinlemesine nemlendirme sağlayarak cilt bariyerini güçlendirir ve cildi yumuşatır.</p>
                </div>

                <div class="nemlendirici-topic">
                    <h2>Anti-Aging Nemlendiriciler</h2>
                    <p>İçerdiği antioksidanlar ve hyaluronik asit ile cilt yaşlanmasını önlemeye yardımcı olan bu ürünler, ince çizgi ve kırışıklıkların görünümünü azaltır.</p>
                </div>
            </div>

            <!-- Örnek Nemlendirici Ürünleri -->
            <div class="nemlendirici-products">
                <h2>Popüler Nemlendirici Ürünler</h2>
                <div class="product-list">
                    <div class="product">
                        <img src="{{ asset('images/nemlendirici1.jpg') }}" alt="Nemlendirici 1">
                        <h3>Hafif Nemlendirici Krem</h3>
                        <p>Fiyat: 150₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/nemlendirici2.jpg') }}" alt="Nemlendirici 2">
                        <h3>Yoğun Nemlendirici Losyon</h3>
                        <p>Fiyat: 200₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/nemlendirici3.jpg') }}" alt="Nemlendirici 3">
                        <h3>Anti-Aging Nemlendirici</h3>
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
