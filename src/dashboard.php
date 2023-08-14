<?php
session_start();

if(!$_SESSION['logged_in']){
  header('Location: error.php');
  exit();
}
extract($_SESSION['userData']);

$avatar_url = "https://cdn.discordapp.com/avatars/$discord_id/$avatar.jpg";

// Check if the user is logged in and if user data is available
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in'] || !isset($_SESSION['userData'])) {
  header("Location: index.php");
  exit();
}

// Retrieve user data from the session
$userData = $_SESSION['userData'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Esquina RP | Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../js/styles.js">
    <link rel="icon" type="image/svg+xml" href="../asset/icon.png" />
    <link rel="stylesheet" href="../css/input.css">
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body id="top">
    
    <header class="header">
        <div class="container">
            <a href="#" class="Logo">
            <img src="../asset/logo.png" alt="">
            </a>

            <nav class="nav_menu">
                <ul class="nav_list">
                    <li>
                       <a href="#home" class="nav_link">Home</a>
                    </li>
                    <li>
                       <a href="#service" class="nav_link">Services</a>
                    </li>
                    <li>
                       <a href="#about" class="nav_link">About</a>
                    </li>
                    <li>
                       <a href="#exclusive" class="nav_link">Exclusive</a>
                    </li>
                    <li>
                        <a href="#feedback" class="nav_link">FeedBack</a>
                    </li>
                    <li>
                       <a href="#team" class="nav_link">Team</a>
                    </li>
                    <li>
                        <a href="#bots" class="nav_link">Bots</a>
                    </li>
                    <li>
                       <a href="#administrador" class="nav_link">Administrador</a>
                    </li>
                    <li>
                        <a href="#donators" class="nav_link">Donators</a>
                     </li>
                </ul>
            </nav>

            <button class="nav_toggle">
                <div class="icon_menu"></div>
            </button>
        </div>
    </header>

    <main>
        <section class="home" id="home">
            <div class="container">
                <div class="home_content">
                    <h2 class="home_title">
                        Welcome,
                    </h2>
                    <div class="social_list">
                    <img class="rounded-full w-12 h-12 mr-3" src="<?php echo $avatar_url?>">
                    <span style="color: white;"><a href="./profile.php"><?php echo $name;?></a></span>
                    </div> 
                    <div class="typing_text">
                        <span class="profession_text"></span>
                    </div>

                    <ul class="skills_list">
                        <li>
                            <span class="span">Made by</span>
                        </li>
   
                            <span id="skills_list" class="span">caxtry</span>

                    </ul>

                    <div class="social_list">
                        <a href="https://instagram.com/laesquinaroleplay" class="social_link" target="_blank">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                        <a href="https://discord.gg/laesquinarp" class="social_link" target="_blank">
                            <i class='bx bxl-discord' ></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section service" id="service">
            <div class="container">
                <div class="title_wrapper">
                    <h3 class="section_title">Nuestro Servicio de Providencia</h3>
                    <h4 class="section_eng">Our Porvide Service</h4>
                    <img src="asset/title-shap.png" class="title_shape" alt="">
                </div>

                <ul class="service_list grid">

                    <li class="service_item">
                        <div class="service_card">
                            <div class="service_icon">
                                <i class='bx bx-desktop'></i>
                            </div>

                            <div class="service_content">
                                <h3 class="service_title">
                                    Devlopment
                                </h3>

                                <p class="service_desc">

                                </p>
                            </div>
                        </div>
                    </li>

                    <li class="service_item">
                        <div class="service_card">
                            <div class="service_icon">
                                <i class='bx bx-support' ></i>
                            </div>

                            <div class="service_content">
                                <h3 class="service_title">
                                    Soporte
                                </h3>

                                <p class="service_desc">

                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container">
                <div class="about_container grid">
                    <div class="about_banner">
                        <img src="../asset/verify.png" alt="" class="img_cover" id="verifyIMG">
                    </div>

                    <div class="about_content">

                            <h3 class="bio">Nuestra Biografia</h3>

                            <h4>Somos una comunida con ganas de crear historias inolvidables ! No te lo pierdas y descubrelo!</h4>

                            <p class="bio_desc">
                                Un lugar donde la diversión nunca termina.
                                Nuestra ciudad está llena de emocionantes aventuras, desde las más
                                de moda hasta en los callejones más oscuros
                                
                                En nuestra ciudad encontrarás una variedad de lugares increíbles para visitar, desde sofisticadas tiendas y restaurantes hasta clubes nocturnos con
                                las mejores canciones para bailar.
                                
                                -También tenemos un área extensa
                                comercial, donde puedes comprar todo lo necesario para desarrollar tu juego de rol!
                                
                                Si buscas algo de acción tenemos varios lugares
                                cosas asombrosas para explorar, desde barrios peligrosos hasta lugares misteriosos. Poder incorporarse a pandillas, grupos del crimen organizado o simplemente salir con amigos a bares y discotecas.
                                
                                
                                Nuestra REGLA PRINCIPAL es abusar del 100% de la creatividad para salir
                                ¡Aún más emocionante la experiencia de todos los que se permitieron un límite de diversión 💯!
                                
                                No pierdas la oportunidad de conocer nuestro Discord y explorar de norte a sur todo lo que
                                tenemos para ofrecer ¡Únete a nosotros ahora y comienza tu aventura!
                            </p>

                         
                        <div class="about_info">
                            <div class="info_wrapper">
                                <h3 class="name">Discord</h3>
                                <span class="span"><a href="https://discord.gg/laesquinarp" target="_blank">discord.gg/laesquinarp</a></span>
                            </div>
                            <div class="info_wrapper">
                                <h3 class="name">Instagram</h3>
                                <span class="span"><a href="https://instagram.com/laesquinaroleplay" target="_blank">laesquinaroleplay</a></span>
                            </div>
                            <!-- <div class="info_wrapper">
                                <h3 class="name">Email</h3>
                                <span class="span">info@example.com</span>
                            </div>
                            <div class="info_wrapper">
                                <h3 class="name">Phone</h3>
                                <span class="span">+3 608-736-1802</span>
                            </div> -->
                    
                        <div class="about_buttons">
                            <a href="#wl" class="button hire">Solicitar WL</a>
                        </div>
                        <div class="about_buttons">
                            <a href="../policia/solicitarpolicia.php" class="button hire">Solicitar Policia</a>
                        </div>
                    </div>

                        <div class="credit_info">
                            <div class="info_wrapper">
                                <h3 class="name">Discord</h3>
                                <span class="span"><a href="https://discord.gg/3HuUY988hV" target="_blank">discord.gg/3HuUY988hV</a></span>
                            </div>
                            <div class="info_wrapper">
                                <h3 class="name">Instagram</h3>
                                <span class="span"><a href="https://instagram.com/caxtry" target="_blank">caxtry</a></span>
                            </div>
                            <div class="about_buttons">
                                <a href="../public/planes.php" class="button hire">Planes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="skills" id="skills">
            <div class="container">
                <div class="skills_container">
                    <div class="skills_items grid">
                        <div class="skills_wrapper">
                            <div class="skills_title">
                                <h3>Web Development</h3>
                            </div>
        
                            <div class="progress_container">
                                <div class="progress_bar" style="width: 95%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                                    <span class="percent">95%</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="skills_wrapper">
                            <div class="skills_title">
                                <h3>Ui Designer</h3>
                            </div>
        
                            <div class="progress_container">
                                <div class="progress_bar" style="width: 90%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                                    <span class="percent">90%</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="skills_wrapper">
                            <div class="skills_title">
                                <h3>Development</h3>
                            </div>
        
                            <div class="progress_container">
                                <div class="progress_bar" style="width: 100%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                                    <span class="percent">100%</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="skills_wrapper">
                            <div class="skills_title">
                                <h3>Photography</h3>
                            </div>
        
                            <div class="progress_container">
                                <div class="progress_bar" style="width: 85%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                                    <span class="percent">85%</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="skills_wrapper">
                            <div class="skills_title">
                                <h3>Support</h3>
                            </div>
        
                            <div class="progress_container">
                                <div class="progress_bar" style="width: 87%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                                    <span class="percent">87%</span>
                                </div>
                            </div>
                        </div>
    
                        <div class="skills_wrapper">
                            <div class="skills_title">
                                <h3>Design</h3>
                            </div>
        
                            <div class="progress_container">
                                <div class="progress_bar" style="width: 90%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                                    <span class="percent">90%</span>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>

        <section class="section work" id="exclusive">
            <div class="container">

                <div class="title_wrapper">
                        <h3 class="section_title">Nuestras Cosas Exclusiva</h3>
                        <h4 class="section_eng">Our Exclusive Things</h4>
                    <img src="../asset/title-shap.png" alt="" class="title_shape">
                </div>
                <div class="work_list grid">

                    <div class="work_item">
                       <div class="work_banner img-holder">
                          <a href="../exclusivo/cadenas.php"><img src="../asset/exlusive35.png" alt="" class="img_cover"></a>

                          <a href="../exclusivo/cadenas.php">
                            <div class="work_content">
                                <div class="work_wrapper">
                                    <div class="card_icon">
                                       <i class='bx bx-image' ></i>
                                    </div>
       
                                    <h3 class="card_title">Cadena Exclusiva</h3>
                                    <p class="card_desc">
                                       #35
                                    </p>
                                </div>
                          </a>
                          </div>
                       </div>
                    </div>

                    <div class="work_item">
                       <div class="work_banner img-holder">
                        <img src="../asset/peloexlusivo.png" alt="" class="img_cover">

                          <div class="work_content">
                            <div class="work_wrapper">
                                <div class="card_icon">
                                   <i class='bx bx-image' ></i>
                                </div>
   
                                <h3 class="card_title">Pelo Exclusivo</h3>
                                <p class="card_desc">
                                   #4
                                </p>
                            </div>
                          </div>
                       </div>
                    </div>

                    <div class="work_item">
                       <div class="work_banner img-holder">
                          <a href="../exclusivo/piel.php"><img src="../asset/pielexlusiva.png" alt="" class="img_cover"></a>

                          <a href="../exclusivo/piel.php">
                            <div class="work_content">
                            <div class="work_wrapper">
                                <div class="card_icon">
                                   <i class='bx bx-image' ></i>
                                </div>
   
                                <h3 class="card_title">Piel Exclusiva</h3>
                                <p class="card_desc">
                                   #12
                                </p>
                            </div>
                          </div></a>
                       </div>
                    </div>

                    <div class="work_item">
                       <div class="work_banner img-holder">
                          <a href="../exclusivo/chaleco.php"><img src="../asset/chalecoexclusiva.png" alt="" class="img_cover"></a>

                          <a href="../exclusivo/chaleco.php"><div class="work_content">
                            <div class="work_wrapper">
                                <div class="card_icon">
                                   <i class='bx bx-image' ></i>
                                </div>
   
                                <h3 class="card_title">Chaleco Exclusiva</h3>
                                <p class="card_desc">
                                   De, Los Demons Cartel
                                </p>
                            </div>
                          </div>
                        </a>
                       </div>
                    </div>



                </div>
            </div>
        </section>

        <section class="count">
            <div class="container">
                <div class="count_content">
                    <div class="count_wrapper">
                        <h3><span class="counter" data-counter="47"></span>+</h3>
                        <h4 class="count_desc"> Happy Costumer</h4>
                    </div>
                    <div class="count_wrapper">
                        <h3><span class="counter" data-counter="43"></span>+</h3>
                        <h4 class="count_desc"> Complate Work</h4>
                    </div>
                    <div class="count_wrapper">
                        <h3><span class="counter" data-counter="56"></span>+</h3>
                        <h4 class="count_desc">Our Award</h4>
                    </div>
                    <div class="count_wrapper">
                        <h3><span class="counter" data-counter="2000"></span>+</h3>
                        <h4 class="count_desc">Server Members</h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="section brand" id="feedback">
            <div class="container"> 
                <h4 class="mantenimiento">En Mantenimiento</h4>
                <h3 class="section_title">FeedBack</h3>
                <!-- <h4 class="section_eng"></h4>   -->
                <img src="asset/title-shap.png" alt="" class="title_shape">
                <a href="../public/feedback.php" class="button contact_button">Enviar FeedBack</a>
                <br>
                <div class="skills_container">
                    <div class="skills_items grid">
               
                    <div class="skills_container2">
                        <div class="grid">
                            <div class="space-between">
                        <div class="text-white font-black text-55px">"</div>
                        <img src="../asset/unknown.png" alt="" class="img-feedback">
                    </div>
                        <p class="team_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta placeat accusantium impedit quas fugiat quae eius molestiae porro mollitia doloribus! Ipsum harum vitae commodi dolores perferendis corporis, voluptatem amet eaque.</p>
                        <br>
                        <ul class="skills_list2">
                            <span class="blue-text-gradient">@</span>

                            <span class="feedbackusername">Lorem</span>
                          
                            <br>
                            <p class="feedbackdesc text-12px">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </ul>
                    </div>  
                    </div>

                    <div class="skills_container2">
                        <div class="grid">
                            <div class="space-between">
                        <div class="text-white font-black text-55px">"</div>
                        <img src="../asset/unknown.png" alt="" class="img-feedback">
                    </div>
                        <p class="team_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quae incidunt dolorum consequatur amet quaerat voluptates molestias doloremque. Consectetur error enim nobis ducimus dicta quibusdam velit totam animi, veniam architecto!</p>
                        <br>
                        <ul class="skills_list2">
                            <span class="blue-text-gradient">@</span>

                            <span class="feedbackusername">Lorem</span>
                          
                            <br>
                            <p class="feedbackdesc text-12px">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </ul>
                    </div>  
                    </div>

                </div>
                </div>
            </div>
        </section>

        <section class="section team" id="team">
            <div class="container">
                <div class="title_wrapper">
                    <h3 class="section_title">Nuestro Equipo</h3>
                    <h4 class="section_eng">Our Team</h4>
                    <img src="asset/title-shap.png" alt="" class="title_shape">
                        <a href="../public/superadmin.php" class="button contact_button">Super Admins</a>
                </div>

                <div class="team_list grid">

                    <div class="team_item">
                        <div class="team_banner">
                            <img src="../asset/dova.png" alt="" class="img_cover">
                        </div>

                        <div class="team_content">
                            <div class="team_badges_panel">
                                <img src="../asset/kingscrown.png" alt="" class="img-badge" title="Fundador De La Esquina RP">
                                <img src="../asset/adminshield.png" alt="" class="img-badge" title="Super Admin">
                                
                            </div>
                            <br>
                            <h3 class="team_title">dOva</h3>
                            <p class="team_desc">Fundador</p>

                            <ul class="team_social-list">
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-twitter' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-facebook' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-instagram' ></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="team_item">
                        <div class="team_banner">
                            <img src="../asset/destiny.png" alt="" class="img_cover">
                        </div>

                        <div class="team_content">
                            <div class="team_badges_panel">
                                <img src="../asset/ownershield.png" alt="" class="img-badge" title="Owner De La Esquina RP">
                                <img src="../asset/adminshield.png" alt="" class="img-badge" title="Super Admin">
                            </div>
                            <br>
                            <h3 class="team_title">Destiny</h3>
                            <p class="team_desc">Owner</p>

                            <ul class="team_social-list">
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-twitter' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-facebook' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-instagram' ></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="team_item">
                        <div class="team_banner">
                            <img src="../asset/lyzd.png" alt="" class="img_cover">
                        </div>

                        <div class="team_content">
                            <div class="team_badges_panel">
                                <img src="../asset/ownershield.png" alt="" class="img-badge" title="Owner De La Esquina RP">
                                <img src="../asset/adminshield.png" alt="" class="img-badge" title="Super Admin">
                            </div>
                            <br>
                            <h3 class="team_title">Lyzd</h3>
                            <p class="team_desc">Owner</p>

                            <ul class="team_social-list">
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-twitter' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-facebook' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-instagram' ></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="team_item">
                        <div class="team_banner">
                            <img src="../asset/caxtry.png" alt="" class="img_cover">
                        </div>

                        <div class="team_content">
                            <div class="team_badges_panel">
                                <img src="../asset/leader.png" alt="" class="img-badge" title="Creador De La Pagina">
                                <img src="../asset/adminshield.png" alt="" class="img-badge" title="Super Admin">
                                <img src="../asset/dev.png" alt="" class="img-badge" title="Developer">
                                <img src="../asset/bot-owner.png" alt="" class="img-badge" title="DSCT Bot Owner">
                            </div>
                            <br>
                            <h3 class="team_title">caxtry</h3>
                            <p class="team_desc">Creador de la pagina</p>
                            <p class="team_desc">Developer</p>
                            
                            <ul class="team_social-list">
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-twitter' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-facebook' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="https://instagram.com/laesquinaroleplay" class="team_social-link">
                                        <i class='bx bxl-instagram' ></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="team_item">
                        <div class="team_banner">
                            <img src="../asset/gucci.png" alt="" class="img_cover">
                        </div>

                        <div class="team_content">
                            <div class="team_badges_panel">
                                <img src="../asset/adminshield.png" alt="" class="img-badge" title="Super Admin">
                                <img src="../asset/dev.png" alt="" class="img-badge" title="Developer">
                            </div>
                            <br>
                            <h3 class="team_title">GUCCI</h3>
                            <p class="team_desc">Programmer</p>

                            <ul class="team_social-list">
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-twitter' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-facebook' ></i>
                                    </a>
                                </li>
                                <li class="team_social_item">
                                    <a href="#" class="team_social-link">
                                        <i class='bx bxl-instagram' ></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section team" id="bots">
            <div class="container">
                <div class="title_wrapper">
                    <h3 class="section_title">Discord Bots</h3>
                    <!-- <h4 class="section_eng"></h4> -->
                    <img src="asset/title-shap.png" alt="" class="title_shape">
                </div>

                <div class="team_list grid">

                    <div class="team_item">
                        <div class="team_banner">
                            <img src="../asset/DSCT.png" alt="" class="img_cover">
                        </div>

                        <div class="team_content">
                            <div class="team_badges_panel">
                                <img src="../asset/bot.png" alt="" class="img-badge" title="Bot">
                            </div>
                            <br>
                            <h3 class="team_title">DSCT</h3>
                            <p class="team_desc">Multipurpose</p>
                            
                            <ul class="team_social-list">
                                <li class="team_social_item">
                                    <a href="https://discord.gg/3HuUY988hV" class="team_social-link">
                                        <i class='bx bxl-discord' ></i>
                                    </a>
                                </li>
                            </ul>
                            <a href="https://discord.com/api/oauth2/authorize?client_id=1078161089658888223&permissions=1933271346806&scope=bot" class="button contact_button" target="_blank">Añadir al servidor</a>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section class="section contact" id="administrador">
            <div class="container">
                
                <div class="title_wrapper">
                    <img src="../asset/admin-badge.png" alt="" class="section_badge">
                    <br>
                    <h3 class="section_title">Ser Un Administrador</h3>
                    <h4 class="section_eng">Become An Administrador</h4>
                    <img src="asset/title-shap.png" alt="" class="title_shape">
                </div>

                <div class="contact_container">
                    <div class="contact_wrapper">
                        <input type="text" name="adminname" placeholder="Nombre" required class="input_field">
                        <input type="text" name="admindiscord" value="<?php echo $userData['name']; ?>" class="readonly_field" required readonly>
                        <input type="text" placeholder="Administrador" readonly class="readonly_field">
                    </div>              
                     <form onsubmit="handleSubmit(event)">
                <textarea placeholder="Mensaje de texto" required cols="30" rows="10" class="input_field">
Nombre:
Nacionalidad:
Cuanto tiempo llevas en el servidor (La Esquina RP):
¿Que edad tienes?:
¿Por que quieres ser administrador?:
Que podemos esperar de ti como administrador en nuestro servidor?:</textarea>
                <button type="submit" class="button send_button">
                    Enviar Mensaje
                </button>
            </form>
            <a href="../public/documento.php" class="button contact_button">Documento - Recomendable Leer</a>
        </div>
    </div>
</section>


<section class="section contact" id="wl">
    <div class="container">
        <div class="title_wrapper">
            <img src="../asset/blue-modmail-badge.png" alt="" class="section_badge">
            <br>
            <h3 class="section_title">Solicitar WL</h3>
            <h4 class="section_eng">Request WL</h4>
            <img src="../asset/title-shap.png" alt="" class="title_shape">
        </div>

        <div class="contact_container">
            <div class="contact_wrapper">
                <input type="text" name="namewl" placeholder="Nombre" required class="input_field">
                <input type="text" name="discordwl" value="<?php echo $userData['name']; ?>" class="readonly_field" required readonly>
                <input type="text" placeholder="WL" readonly class="readonly_field">
            </div>              
            <form onsubmit="handleWLSubmit(event)">
                <textarea name="wlmessage" placeholder="Ejemplo: Solicitar WL" required cols="30" rows="10" class="input_field"></textarea>
                <button type="submit" class="button send_button">
                    Enviar Mensaje
                </button>
            </form>
        </div>
    </div>
</section>


        <section class="section brand" id="donators">
            <div class="container"> 
                <h4 class="mantenimiento">En Mantenimiento</h4>
                <h3 class="section_title">Top Donadores</h3>
                <h4 class="section_eng">Top Donators</h4>  
                <img src="../asset/title-shap.png" alt="" class="title_shape">
                <br>
                <div class="skills_container">
                    <div class="skills_items grid">
               
              

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3 class="">1. nosoyathaa</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3 class="">2. orbis2815</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3 class="">3. boris
                            #6340</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3 class="">4. chipetterg4l</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>5. demente11</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>6. FLACO_GOMEZ
                            #5512</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>7. griselda_blanco_bb</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>8. jeffersoniti</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>
                
                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>9. loki.305</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>10. luispr.</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>11. lyanntp</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>12. realmontanaabaddie</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>13. snake_tv</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>14. impecaaitooh</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>15. kingrd3</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>16. jeremy_29</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>17. tonymontana3296</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>18. palga00x</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>19. eltal.salva</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>20. gps_2</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>21. Menor
                            #9730</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>22. tronky_pr</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>23. tektro.</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>24. pelu3934</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>25. elnene90</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>26. sikwinter</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>27. beningpleace</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>28. idelyuli2000</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>29. ogkomodin</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>30. candelier24</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>31. manueldh</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>32. candelier24</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>33. gfciccone</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>34. erwin199716</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>35. fietz</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>36. .thealmasy</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>37. synchrony0411</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>38. emersonelialh</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>39. alex_vercetti</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>40. fllowmigue1</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>41. .chispo</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>42. execution5123</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>43. salamanca11</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>44. chulooo_01</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>
                
                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>45. treboldrip</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>


                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>46. .german23</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>


                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>47. boris
                            #6340</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>


                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>48. brandiel</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>


                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>49. ash0743</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>


                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>50. .luis2118</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>


                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>51. elprimaso_</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>52. jdmxwill7401</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>53. fannyleetv</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>54. marlon.alz</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>55. վɑղƘҽҽ ヅ#0504</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>56. vanscongaming</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>

                <div class="skills_wrapper">
                    <div class="skills_title">
                        <h3>57. ermisjaquezz</h3>
                    </div>

                    <div class="progress_container">
                        <div class="progress_bar" style="width: 0%;animation-duration: 1.5s; animation-delay: .2s; animation-name: fadeInLeft; visibility: visible;">
                            <span class="percent">0$</span>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </section>
        
        <section class="section brand">
            <div class="container">
                <div class="swiper brand_container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <img src="../asset/logo.png" class="img_cover" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../asset/brand_2.png" class="img_cover" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../asset/brand_3.png" class="img_cover" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../asset/brand_4.png" class="img_cover" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../asset/brand_5.png" class="img_cover" alt="">
                        </div>
                    </div>
                </div>
            </div>
            </div>
                <!-- <ul class="skills_list">
                    <span class="skills_containerTheEnd"><img src="../asset/js.png" alt="" class="madeof"></span>
                    
                    <span class="skills_containerTheEnd"><img src="../asset/html.png" alt="" class="madeof"></span>
                    
                    <span class="skills_containerTheEnd"><img src="../asset/css.png" alt="" class="madeof"></span>
                </ul> -->
        </section>
    </main>
    

    <a href="#top" class="btn-top">
        <i class='bx bx-up-arrow-alt' ></i>
    </a>

    <a href="../public/planes.php" class="btn-panel">
    <i class='bx bxl-paypal'></i>
    </a>
    
    <footer class="footer">
        <div class="container">
            <p class="copyright">Copyright &copy; La Esquina RP all rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="../js/script.js"></script>
    
</body>
</html>