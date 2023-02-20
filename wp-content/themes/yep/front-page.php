<?php  
    $menuItems = getNavigationMenu(); 
    $data = getHomepageData();  
  
?>

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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/index.js" /> 
<title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    
    <body>
        <header>
            <nav>
                <ul>
                <?php foreach($menuItems as $item) { ?>  
                    <li>  
                        <a href="<?= $item->url ?>">  
                            <?= $item->title ?>  
                        </a>  
                    </li>  
                <?php  
                }  
                ?>
                    <li id="fig"><figure><img src="wp-content/themes/yep/assets/img/Gaellan-Logo.svg"></figure></li>
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
                <!-- <li>
                    <h3>YEPFOLIO EN QUELQUES MOTS</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </li> -->
                <li>
                    <section id="about">  
                        <h2 id="titre"><?= $data["a-propos"]["titre"] ?></h2>  
                        <p>  
                            <?= $data["a-propos"]["contenu"] ?>  
                            
                        </p>  
                    </section>
                </li>
                <?php 
                echo "<pre>";
                var_dump($data["projets"]); 
                echo "</pre>";
                var_dump($data); 
                ?>
                <section id="posts">  
                <?= $data["projets"][2]["category"] ?>
            </section>
                <li>
                    <ul>
                        <h2>MES DERNIERS PROJETS</h2>
                        <?php
                        foreach($data["projets"] as $projets){ ?>
                        <li  >
                                <h3><?= $projets["category"]; ?> </h3>
                                <h4><?= $projets["data"]->post_title; ?></h4>
                            </li>
                    <?php    } ?>
                    </ul>
                </li>
            </ul>
        </main>
        <footer>
                
                <form>
                    <h2>ME CONTACTER</h2>
                    <fieldset>
                        <label for="username">Prénom + Nom *</label>
                        <input type="text" name="username" id="username"/>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"/>
                        <label for="Message">Message</label>
                        <input id="textarea" type="textarea" name="Message" id="Message"/>
                        <input id="button" type="submit" value="Envoyer"/>
                    </fieldset>
                </form>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>