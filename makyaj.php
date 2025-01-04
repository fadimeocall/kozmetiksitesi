
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makyaj</title>
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

/* Makyaj Sayfası Ana Konteyner */
.makyaj-container {
    padding: 60px 20px;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Makyaj İçeriği */
.makyaj-content {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.makyaj-topic {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

.makyaj-topic h2 {
    margin-bottom: 10px;
    font-size: 22px;
}

.makyaj-topic p {
    font-size: 16px;
}

/* Video Alanı */
.makyaj-video {
    margin-top: 40px;
    text-align: center;
}

.makyaj-video iframe {
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
<?php include("header.php");?>

    <!-- Ana İçerik Başlangıcı -->
    <section class="makyaj-container">
        <div class="container">
            <h1>Makyaj Dünyasına Hoş Geldiniz!</h1>
            <p>Makyaj, kendinizi ifade etmenin ve güzelliğinizi ön plana çıkarmanın harika bir yoludur. Bu sayfada makyaj hakkında her şeyi öğreneceksiniz: temel bilgilerden, özel tekniklere kadar...</p>

            <div class="makyaj-content">
                <!-- Makyaj Konuları -->
                <div class="makyaj-topic">
                    <h2>Fondöten Seçimi ve Kullanımı</h2>
                    <p>Fondöten, cilt tonunu eşitleyen ve kusurları gizleyen bir üründür. Doğru fondöteni seçmek, cildinizin doğal yapısına ve ihtiyacına göre olmalıdır...</p>
                </div>

                <div class="makyaj-topic">
                    <h2>Göz Makyajı: Maskara, Eyeliner ve Far</h2>
                    <p>Göz makyajı, bakışları ön plana çıkarmak için önemli bir adımdır. Maskara, eyeliner ve far gibi ürünlerle gözleri vurgulamak oldukça etkili olabilir...</p>
                </div>

                <div class="makyaj-topic">
                    <h2>Ruj ve Dudak Bakımı</h2>
                    <p>Dudak makyajı, yüz hatlarını belirginleştirir ve cildinize canlılık katar. Rujunuzu doğru şekilde seçmek, dudaklarınızın görünümünü değiştirir...</p>
                </div>

                <div class="makyaj-topic">
                    <h2>Allık ve Kontür</h2>
                    <p>Allık ve kontür, yüz hatlarını belirginleştirmenin ve güzelliğinizi ön plana çıkarmanın mükemmel yollarıdır. Doğru tekniklerle uygulama yaparak doğal bir görünüm elde edebilirsiniz...</p>
                </div>

                <div class="makyaj-topic">
                    <h2>Makyaj Temizleme ve Bakımı</h2>
                    <p>Makyajın ardından doğru şekilde temizlenmesi cilt sağlığı için son derece önemlidir. Makyaj temizleyiciler ve cilt bakım ürünleri kullanarak cildinizi yenileyin...</p>
                </div>

                <div class="makyaj-topic">
                    <h2>Günlük Makyaj Rutini</h2>
                    <p>Günlük makyaj rutini, doğal ve taze bir görünüm elde etmenize yardımcı olabilir. İşte hızlı ve pratik bir günlük makyaj rutini önerisi...</p>
                </div>

                <div class="makyaj-topic">
                    <h2>Gece Makyajı: Daha Işıltılı Bir Görünüm</h2>
                    <p>Gece makyajı, akşam etkinliklerinde daha dikkat çekici ve ışıltılı bir görünüm elde etmenizi sağlar. Işıltılı farlar ve dikkat çekici rujlar kullanarak harika bir gece makyajı yapabilirsiniz...</p>
                </div>

                <div class="makyaj-topic">
                    <h2>Organik ve Doğal Makyaj Ürünleri</h2>
                    <p>Son yıllarda organik ve doğal makyaj ürünleri oldukça popüler. Cilt dostu içeriklerle yapılan makyaj, cildinize zarar vermeden güzellik sağlar...</p>
                </div>

                <div class="makyaj-topic">
                    <h2>Makyajda Sık Yapılan Hatalar ve Çözümleri</h2>
                    <p>Makyaj yaparken yapılan bazı hatalar ciltte istenmeyen sonuçlara yol açabilir. Bunlar arasında yanlış fondöten rengi seçimi, aşırı allık uygulaması gibi sorunlar yer alır...</p>
                </div>

            </div>

            <!-- Video Alanı -->
            <div class="makyaj-video">
                <h2>Makyaj Teknikleri Hakkında Video</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xyz" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <?php include("footer.php");?>
</body>
</html>
