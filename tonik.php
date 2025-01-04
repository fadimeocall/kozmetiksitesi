
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tonikler</title>
    <style>
        /* Tonikler Sayfası Genel Stilleri */
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

/* Tonikler Sayfası Konteyner */
.tonikler-container {
    padding: 60px 20px;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Tonik Türleri */
.tonik-content {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.tonik-topic {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

.tonik-topic h2 {
    margin-bottom: 10px;
    font-size: 22px;
}

.tonik-topic p {
    font-size: 16px;
}

/* Tonik Ürünleri */
.tonik-products {
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
    <section class="tonikler-container">
        <div class="container">
            <h1>Tonikler ve Cilt Bakımı</h1>
            <p>Tonikler, cilt temizliği sonrası cildin pH dengesini sağlamak, gözenekleri sıkılaştırmak ve cildi canlandırmak için kullanılan önemli ürünlerdir. Doğru tonik seçimi ile cilt bakım rutininizi bir üst seviyeye taşıyabilirsiniz.</p>

            <!-- Tonik Türleri -->
            <div class="tonik-content">
                <div class="tonik-topic">
                    <h2>Alkol İçermeyen Tonikler</h2>
                    <p>Hassas ciltler için özel olarak formüle edilen alkol içermeyen tonikler, cildi tahriş etmeden temizler ve yatıştırır.</p>
                </div>

                <div class="tonik-topic">
                    <h2>Nemlendirici Tonikler</h2>
                    <p>Nemlendirici özellikteki tonikler, cildi hem temizler hem de derinlemesine nemlendirme sağlar. Kuru ciltler için idealdir.</p>
                </div>

                <div class="tonik-topic">
                    <h2>Arındırıcı Tonikler</h2>
                    <p>Yağlı ve akneye meyilli ciltler için özel olarak tasarlanmış arındırıcı tonikler, cildi fazla sebumdan arındırır ve gözenekleri derinlemesine temizler.</p>
                </div>
            </div>

            <!-- Örnek Tonik Ürünleri -->
            <div class="tonik-products">
                <h2>Popüler Tonik Ürünleri</h2>
                <div class="product-list">
                    <div class="product">
                        <img src="{{ asset('images/tonik1.jpg') }}" alt="Tonik 1">
                        <h3>Nemlendirici Tonik</h3>
                        <p>Fiyat: 120₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/tonik2.jpg') }}" alt="Tonik 2">
                        <h3>Hassas Ciltler İçin Tonik</h3>
                        <p>Fiyat: 150₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                    <div class="product">
                        <img src="{{ asset('images/tonik3.jpg') }}" alt="Tonik 3">
                        <h3>Arındırıcı Tonik</h3>
                        <p>Fiyat: 135₺</p>
                        <a href="#" class="buy-button">Satın Al</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php");?>
</body>
</html>
