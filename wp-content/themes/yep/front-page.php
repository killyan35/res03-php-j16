<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>  
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
        <link rel="preconnect" href="https://fonts.googleapis.com">  
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
<title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    
    <body>
        <header>
            <nav>
                <ul>
                    <li>ACCUEIL</li>
                    <li>À PROPOS</li>
                    <li>MES PROJETS</li>
                    <li>ME CONTACTER</li>
                </ul>
            </nav>
        </header>
        <main>
            <ul>
                <li>
                    <h1>YEPFOLIO</h1>
                    <h2>DÉVELOPPEMENT WEB & MOBILE</h2>
                </li>
                <li>
                    <h3>YEPFOLIO EN QUELQUES MOTS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </li>
                <li>
                    <section>
                        <h2>MES DERNIERS PROJETS</h2>
                            <article>
                                <h3>APPLICATION SANTÉ</h3>
                                <h4>Pharmacie de Maurepas</h4>
                            </article>
                            <article>
                                <h3>SITE E-COMMERCE</h3>
                                <h4>Librairie l'écume des jours</h4>
                            </article>
                            <article>
                                <h3>SITE VITRINE</h3>
                                <h4>Boulangerie Gaitier</h4>
                            </article>
                            <article>
                                <h3>SITE INSTITUTIONNEL</h3>
                                <h4>Mairie de Ploutruc</h4>
                            </article>
                            <article>
                                <h3>SITE PROMOTIONNEL</h3>
                                <h4>Festival des choses</h4>
                            </article>
                    </section>
                </li>
            </ul>
        </main>
        <footer>
                <h2>ME CONTACTER</h2>
                <form>
                    <label for="username">Prénom + Nom *</label>
                    <input type="text" name="username" id="username" />
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" />
                    <label for="Message">Message</label>
                    <input type="text" name="Message" id="Message"/>
                    <input type="submit" value="Envoyer"/>
                </form>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>