<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/home_style.css">
    <link rel="shortcut icon" href="public/images/logo_site.WebP" />
</head>
<body>
    <header>
        <!-- Menu de navigation -->
       <?php include ("navbar_menu.php"); ?>
        <!-- Presentation -->
        <div class="presentation">
            <img src="public/images/melina.WebP"  alt="letter melina">
        </div>
        <p>Bienvenue dans mon portfolio, où chaque projet incarne l'alliance créative,</p>
        <p>du savoir-faire technique.</p>
        
        <div class="button_header">
            <button class="btn btn-gooey" onclick="location.href='#rubrique_about'">
                En savoir plus
                <div class="btn-blobs">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </button>
            <svg style="display: none;" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur result="blur" stdDeviation="10" in="SourceGraphic"></feGaussianBlur>
                        <feColorMatrix result="goo" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" mode="matrix" in="blur"></feColorMatrix>
                        <feBlend in2="goo" in="SourceGraphic"></feBlend>
                    </filter>
                </defs>
            </svg>
        </div>
        
        <div class="quote">
            <div class="quote-content">
                <span>• DEVELOPPEUSE WEB JUNIOR • DEVELOPPEUSE WEB JUNIOR • DEVELOPPEUSE WEB JUNIOR</span>
                <span>• DEVELOPPEUSE WEB JUNIOR • DEVELOPPEUSE WEB JUNIOR • DEVELOPPEUSE WEB JUNIOR</span>
            </div>
        </div>
    </header>

    <main>
       <?php include "about_me.php"; ?>
       
        <!-- Sections Projets -->
        <div id="rubrique_projet">
            <img src="public/images/title3.WebP" loading="lazy" alt="projet ">
            <div class="rubrique_projet_content">
                <div class="cards">
                    <!-- Carte 1 -->
                    <div class="card_1">
                        <div class="img"></div>
                        <div class="text_1">
                            <p>WEB SITES</p>
                        </div>
                    </div>

                    <!-- Carte 2 -->
                    <div class="card_2">
                        <div class="img"></div>
                        <div class="text_2">
                            <p>APPLICATIONS MOBILE</p>
                        </div>
                    </div>

                    <!-- Carte 3 -->
                    <div class="card_3">
                        <div class="img"></div>
                        <div class="text_3">
                            <p>AUTRES</p>
                        </div>
                    </div>

                </div>
            </div>


            <div class="button_projet">
                <a href="/projet" class="btn btn-gooey" >
                    En savoir plus
                    <div class="btn-blobs">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </a>
                <svg style="display: none;" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <filter id="goo">
                            <feGaussianBlur result="blur" stdDeviation="10" in="SourceGraphic"></feGaussianBlur>
                            <feColorMatrix result="goo" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" mode="matrix" in="blur"></feColorMatrix>
                            <feBlend in2="goo" in="SourceGraphic"></feBlend>
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <?php include "skills.php"; ?>
    </main>
    <footer>
      <!--Contact  -->
      <div class="contact" id="rubrique-contact">
            <img src="public/images/contact_title.WebP" loading="lazy" alt="">
            <div class="contact-container">
                <h2>Me Contacter</h2>
                <p>Une question, une opportunité ou un projet à discuter ? N'hésitez pas à me laisser un message, je vous répondrai rapidement.</p>
                <form action="mailto:melina.mouri@epitech.eu" method="post" enctype="text/plain">
                    <input type="text" name="nom" placeholder="Votre Nom" required>
                    <input type="email" name="email" placeholder="Votre Adresse Email" required>
                    <textarea name="message" placeholder="Votre Message" required></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>
        <p class="copyright">© 2025 MÉLINA MOURI</p>
    </footer>
    
    <div class="button-border scroll-to-top" onclick="scrollToTop()">
        <div class="button-base">
            <button class="button">Retour</button>
        </div>
    </div>

    <script>
    function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }
</script>

    
</body>
</html>