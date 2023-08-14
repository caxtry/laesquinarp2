<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precios</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/svg+xml" href="../asset/icon.png" />
    <style>
        body {
            background-color: #031f25;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .team_item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .team_desc {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #ffd700;
            font-weight: bold;
        }
        .animated_price {
            font-weight: bold;
            color: #ff9a00;
            font-size: 1.2rem;
        }
        .team_animated {
            font-size: 1rem;
            margin-top: 5px;
            color: #999;
        }
    </style>
</head>
<body>

    <section class="section team" id="team">
        <div class="container">
            <div class="title_wrapper">
                <h3 class="section_title">Planes</h3>
                <h4 class="section_eng">Plans</h4>
                <img src="../asset/title-shap.png" alt="" class="title_shape">
                <a href="../src/dashboard.php#about" class="gobackbutton">Go back</a>
            </div> 


            <div class="team_list grid">
                <div class="team_item">
                    <div class="team_banner">
                        <h3 class="team_title">Básico</h3>
                        <div class="team_price">
                            <p class="team_desc">$30</p>
                            <p class="team_animated">Animado: <span class="animated_price">$40</span></p>
                        </div>
                    </div>
                </div>
                            
                <div class="team_item">
                    <div class="team_banner">
                        <h3 class="team_title">Avanzado</h3>
                        <div class="team_price">
                            <p class="team_desc">$50</p>
                            <p class="team_animated">Animado: <span class="animated_price">$60</span></p>
                        </div>
                    </div>
                    <br>
                    <div class="team_badges_panel2">
                        <h3 class="team_title">Costumizable</h3>
                    </div>
                </div>
                            
                <div class="team_item">
                    <div class="team_banner">
                        <h3 class="team_title">3D</h3>
                        <div class="team_price">
                            <p class="team_desc">$250</p>
                            <p class="team_animated">Animado: <span class="animated_price">$350</span></p>
                        </div>
                    </div>
                    <br>
                    <div class="team_badges_panel2">
                        <h3 class="team_title">Costumizable</h3>
                    </div>
                </div>

            </div>
            
        </div>
    </section>
    <br>
    <h3 class="section_title">Metodo De Pago</h3>
    <ul class="team_social-list">
        <li class="team_social_item">
            <a href="https://paypal.me/EAcevedoCortes" class="team_social-link" target="_blank">
                <i class='bx bxl-paypal'></i>
            </a>
        </li>
        <li class="team_social_item">
            <a href="https://cash.app/$ccaxtry" class="team_social-link" target="_blank">
                <i class='bx' ><img src="../asset/cashapp.png" alt=""></i>
            </a>
        </li>
    </ul>
    <br>
    <h3 class="section_eng">Abre un ticket para poder tener mas informacion</h3>
    <a href="https://discord.com/channels/988591652220313672/1087210648137629756" class="button contact_button" target="_blank">Abrir Ticket</a>
    
</body>
</html>
