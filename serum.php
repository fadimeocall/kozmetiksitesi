<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serumlar</title>
    <style>
        /* Serumlar Sayfası Genel Stilleri */
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

/* Serumlar Sayfası Konteyner */
.serumlar-container {
    padding: 60px 20px;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Serum İçerikleri */
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

/* Video Alanı */
.serum-video {
    margin-top: 40px;
    text-align: center;
}

.serum-video iframe {
    max-width: 100%;
    height: auto;
}

/* Header ve Footer */
header, footer {
    background-color: #f4a5c4;
    text-align: center;
    padding: 15px 0;
}

    </style>
</head>
<body>
<?php include("header.php");?>

    <!-- Ana İçerik Başlangıcı -->
    <section class="serumlar-container">
        <div class="container">
            <h1>Serumlar ve Kullanım Rehberi</h1>
            <p>Serumlar, cilt bakımının vazgeçilmez bir parçasıdır. Yüksek yoğunlukta aktif bileşenler içeren serumlar, cilt sorunlarına hedeflenmiş çözümler sunar.</p>

            <div class="serum-content">
                <!-- Serum Türleri -->
                <div class="serum-topic">
                    <h2>Hyaluronik Asit Serumları</h2>
                    <p>Hyaluronik asit serumları, cildin nem dengesini artırır ve dolgun görünmesini sağlar. Özellikle kuru ciltler için idealdir.</p>
                </div>

                <div class="serum-topic">
                    <h2>C Vitamini Serumları</h2>
                    <p>Cilt tonunu eşitlemek ve parlaklık kazandırmak için kullanılan C vitamini serumları, düzenli kullanımda leke görünümünü de azaltır.</p>
                </div>

                <div class="serum-topic">
                    <h2>Peptid Serumları</h2>
                    <p>Peptid içerikli serumlar, ince çizgiler ve kırışıklıklarla savaşır. Cilde elastikiyet kazandırır ve genç bir görünüm sağlar.</p>
                </div>

                <div class="serum-topic">
                    <h2>Retinol Serumları</h2>
                    <p>Retinol serumları, akne tedavisinde ve yaşlanma belirtilerinin giderilmesinde etkilidir. Düşük oranlarla başlayarak düzenli şekilde kullanılması önerilir.</p>
                </div>

                <div class="serum-topic">
                    <h2>Niacinamide Serumları</h2>
                    <p>Niacinamide, gözeneklerin görünümünü azaltır ve ciltteki yağ üretimini dengeler. Karma ve yağlı ciltler için uygundur.</p>
                </div>

                <div class="serum-topic">
                    <h2>E Vitaminli Serumlar</h2>
                    <p>E vitamini serumları, cildi çevresel zararlara karşı korur ve cildi derinlemesine nemlendirir.</p>
                </div>
            </div>

            <!-- Serum Kullanımı Hakkında Video -->
            <div class="serum-video">
                <h2>Serum Kullanımı Nasıl Olmalı?</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xyz" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <?php include("footer.php");?>
</body>
</html>
