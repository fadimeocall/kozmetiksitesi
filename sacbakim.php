<?php include("header.php");?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saç Bakım</title>
    <style>
        /* Saç Bakım Sayfası Genel Stilleri */
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

/* Saç Bakım Sayfası Ana Konteyner */
.sac-bakim-container {
    padding: 60px 20px;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Saç İçerikleri */
.sac-content {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
}

.sac-topic {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
}

.sac-topic h2 {
    margin-bottom: 10px;
    font-size: 22px;
}

.sac-topic p {
    font-size: 16px;
}

/* Video Alanı */
.sac-video {
    margin-top: 40px;
    text-align: center;
}

.sac-video iframe {
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
    @include('header') <!-- Header dosyasını dahil et -->

    <!-- Ana İçerik Başlangıcı -->
    <section class="sac-bakim-container">
        <div class="container">
            <h1>Saç Bakımı ve Ürünleri</h1>
            <p>Saçlarınızın sağlıklı, güçlü ve parlak görünmesini sağlamak için doğru bakım ürünlerini seçmek çok önemlidir. Bu sayfada saç bakımına dair her şeyi keşfedeceksiniz.</p>

            <div class="sac-content">
                <!-- Saç Bakım Konuları -->
                <div class="sac-topic">
                    <h2>Şampuan Seçimi</h2>
                    <p>Farklı saç tiplerine uygun şampuanlar, saçın doğal dengesini korur. Özellikle kepek, yağlanma veya kuruluk gibi sorunlar için özel formüller seçilebilir.</p>
                </div>

                <div class="sac-topic">
                    <h2>Saç Kremleri ve Maskeler</h2>
                    <p>Saç kremleri, saç tellerini nemlendirir ve kırılmaları önler. Haftalık olarak kullanılan saç maskeleri ise saçınızı derinlemesine besler ve onarır.</p>
                </div>

                <div class="sac-topic">
                    <h2>Yağlar ve Serumlar</h2>
                    <p>Saç bakım yağları, saç köklerini beslerken saç tellerine doğal bir parlaklık kazandırır. Argan yağı, Hindistancevizi yağı ve saç serumları en çok tercih edilen ürünlerdir.</p>
                </div>

                <div class="sac-topic">
                    <h2>Isı Koruyucular</h2>
                    <p>Saç düzleştiricisi veya maşa gibi ısı veren aletleri kullanmadan önce, saçınızı ısıdan koruyan spreyler uygulayarak saçınızı hasardan koruyabilirsiniz.</p>
                </div>

                <div class="sac-topic">
                    <h2>Saç Dökülmesi ve Çözümleri</h2>
                    <p>Saç dökülmesi, hem kadınlar hem de erkekler için yaygın bir problemdir. Bu konuda etkili şampuanlar, serumlar ve vitamin takviyeleri ile saçlarınızı güçlendirebilirsiniz.</p>
                </div>

                <div class="sac-topic">
                    <h2>Saç Şekillendirme Ürünleri</h2>
                    <p>Saç köpükleri, jöleler ve spreyler gibi şekillendirme ürünleri ile saçlarınıza istediğiniz şekli verebilirsiniz. Doğru ürün kullanımı saçınızın gün boyu formda kalmasını sağlar.</p>
                </div>

                <div class="sac-topic">
                    <h2>Doğal Saç Renkleri ve Boyalar</h2>
                    <p>Ammonyaksız doğal saç boyaları veya bitkisel boyalar, saçınıza zarar vermeden rengini değiştirme imkanı sunar. Ayrıca, saç renginizi koruyucu ürünler de önerilir.</p>
                </div>

                <div class="sac-topic">
                    <h2>Saç Tarakları ve Aksesuarlar</h2>
                    <p>Saç fırçaları, taraklar, saç tokaları ve klipsler gibi aksesuarlar saç bakım rutininizin vazgeçilmez parçalarıdır. Saç tipinize uygun aksesuar seçmek önemlidir.</p>
                </div>

                <div class="sac-topic">
                    <h2>Saç Uzatma ve Bakım Yöntemleri</h2>
                    <p>Saç uzatma konusunda doğal çözümler ve düzenli bakım rutini saçlarınızın sağlıklı bir şekilde uzamasına yardımcı olabilir.</p>
                </div>
            </div>

            <!-- Video Alanı -->
            <div class="sac-video">
                <h2>Saç Bakım Teknikleri Hakkında Video</h2>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/xyz" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <?php include("footer.php");?>
</body>
</html>
