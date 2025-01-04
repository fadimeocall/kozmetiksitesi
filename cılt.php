<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cilt Bakım</title>
    <style>
        /* Genel Sayfa Stilleri */
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

/* Cilt Bakım Sayfası Ana Konteyner */
.cilt-bakim-container {
    padding: 60px 20px;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Cilt Bakım İçeriği */
.bakim-content {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.bakim-topic {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

.bakim-topic h2 {
    margin-bottom: 10px;
    font-size: 22px;
}

.bakim-topic p {
    font-size: 16px;
}

/* Video Alanı */
.bakim-video {
    margin-top: 40px;
    text-align: center;
}

.bakim-video iframe {
    max-width: 100%;
    height: auto;
}

/* Footer ve Header için Genel Stiller */
footer, header {
    background-color: #f4a5c4;
    text-align: center;
    padding: 15px 0;
}

    </style>
</head>
<body>
    <?php include('header.php'); ?>

    <!-- Ana İçerik Başlangıcı -->
    <section class="cilt-bakim-container">
        <div class="container">
            <h1>Cilt Bakım Ürünleri ve Önerileri</h1>

            <div class="bakim-content">
                <div class="bakim-topic">
                    <h2>Serum Kullanımının Faydaları</h2>
                    <p>Serumlar, cilt bakımında son derece etkili ürünlerdir. Yüksek yoğunlukta aktif içerikler barındırdıkları için cilde derinlemesine nüfuz eder ve hedeflenen sorunları hızla çözer. Özellikle cilt tonunu eşitleme, nem kaybını giderme ve kırışıklıkların görünümünü azaltma gibi faydaları vardır.</p>
                </div>

                <div class="bakim-topic">
                    <h2>Nemlendirici Kremler</h2>
                    <p>Cilt, çevresel faktörlere karşı korunmak ve nem dengesini sağlamak için nemlendirici kremlere ihtiyaç duyar. Doğru nemlendirici cildin nem seviyesini artırarak, kuruma, pul pul dökülme ve irritasyon gibi sorunları önler.</p>
                </div>

                <div class="bakim-topic">
                    <h2>Tonik ile Cilt Temizliği</h2>
                    <p>Tonik, cilt temizliğini tamamlayan ve cildin pH dengesini koruyan önemli bir üründür. Cilt temizliğinden sonra kullanılması gereken tonikler, gözenekleri sıkılaştırır ve cildi canlandırır.</p>
                </div>

                <div class="bakim-topic">
                    <h2>Cilt Maskeleri</h2>
                    <p>Cilt maskeleri, belirli cilt ihtiyaçlarını hedef alarak derinlemesine bakım sağlar. Haftada birkaç kez kullanılan maskeler ciltteki kirleri temizler, cildi besler ve pürüzsüzleştirir.</p>
                </div>

                <div class="bakim-topic">
                    <h2>Güneş Kremi Kullanımının Önemi</h2>
                    <p>Güneş ışınları, ciltte erken yaşlanma, lekelenme ve cilt kanseri gibi sorunlara yol açabilir. Bu yüzden her cilt tipine uygun güneş kremi kullanmak, cilt sağlığı için kritik öneme sahiptir.</p>
                </div>
            </div>

            <div class="bakim-video">
                <h2>Cilt Bakımı Nasıl Yapılır?</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xyz" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
</body>
</html>
