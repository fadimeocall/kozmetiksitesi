<head>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #f4a5c4; /* Kozmetik için hoş bir pembe ton */
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo a {
            color: white;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        /* Menü kısmını ortalamak için düzenleme yapıyoruz */
        .navigation {
            display: flex;
            justify-content: center; /* Yatayda ortalamayı sağlar */
            width: 100%; /* Tam genişlik almasını sağla */
        }

        .navigation ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navigation ul li {
            margin-left: 30px; /* Menü öğeleri arasındaki mesafe */
            position: relative; /* Dropdown menüsünün pozisyonunu ayarlamak için */
        }

        .navigation ul li a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            transition: color 0.3s;
        }

        .navigation ul li a:hover {
            color: #ffebf5; /* Hafif bir vurgu rengi */
        }

        /* Dropdown menüsünü gizleme ve gösterme için gerekli stil */
        .dropdown:hover .dropdown-menu {
            display: block; /* Hover ile dropdown menüsünü göster */
        }

        .dropdown-menu {
            display: none; /* Başlangıçta gizli */
            position: absolute;
            top: 100%; /* Menü öğelerinin hemen altında görünmesini sağlar */
            left: 0;
            background-color: #f4a5c4;
            min-width: 150px;
            border-radius: 5px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .dropdown-menu a {
            display: block;
            padding: 10px;
            color: white;
            text-decoration: none;
        }

        .dropdown-menu a:hover {
            background-color: #ff577f;
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="anasayfa">F-Charm</a>
            </div>
            <nav class="navigation">
                <ul>
                    <li><a href="anasayfa">Ana Sayfa</a></li>
                    <li class="dropdown">
                        <a href="cilt-bakim">Cilt Bakım</a>
                        <div class="dropdown-menu">
                            <a href="serum">Serum</a>
                            <a href="tonik">Tonik</a>
                            <a href="nemlendirici">Nemlendirici</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="makyaj">Makyaj</a>
                        <div class="dropdown-menu">
                            <a href="fon">Fondöten</a>
                            
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="sac-bakim">Saç Bakım</a>
                        <div class="dropdown-menu">
                            <a href="sacserumlari">Saç Serumları</a>
                            <a href="sampuan">Şampuan</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>
