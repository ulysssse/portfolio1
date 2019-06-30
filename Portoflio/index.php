<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ulysse JEANJEAN</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
            <div class="menu-toggler">
                <div class="bar half start"></div>
                <div class="bar"></div>
                <div class="bar half end"></div>
            </div>
            <nav class="top-nav">
                <ul class="nav-list">
                    <li>
                        <a href="index.html" class="nav-link">Accueil</a>
                    </li>
                    <li>
                            <a href="#services" class="nav-link">Services</a>
                        </li>
                   <li>
                        <a href="#apropos" class="nav-link">A propos</a>
                    </li>
                    <li>
                        <a href="#monCV" class="nav-link">CV</a>
                    </li>
                    <li>
                        <a href="#Portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#Contact" class="nav-link">Contact</a>
                    </li>

                </ul>
            </nav>
            <div class="landing-text">
                <h1>Ulysse jeanjean</h1>
                <h6>Étudiant | INGÉSUP Ynov  </h6>
            </div>
    </header>

    <section class="apropos" id="apropos">
        <div class="container">
            <div class="profile.img">
                <img src="profile.png" alt="">
            </div>
            <div class="apropos-details">
                <div class="apropos-heading">
                    <h1>À propos</h1>
                    <h6>de Moi</h6>
                </div>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis ut urna in sagittis. 
                Proin libero est, mollis ut purus porttitor, eleifend lobortis justo. Aenean consectetur, 
                nisi maximus dictum blandit, quam nunc rhoncus lorem, vitae auctor enim mauris vitae tellus. 
                Nulla eu finibus lorem. 
                </p>
                <div class="reseaux-sociaux">
                    <ul class="nav-list">
                        <li>
                            <a href="#" class="icon-link">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        <li>
                            <a href="#" class="icon-link">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        <li>
                            <a href="#" class="icon-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="section-heading">
                <h1>Mes services</h1>
                <h6>A venir</h6>
            </div>
            <div class="mes-skills">
                <div class="competences">
                    <div class="icon-container">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h1>Web Design</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="competences">
                    <div class="icon-container">
                        <i class="fas fa-code"></i>
                    </div>
                    <h1>Web Dev  | html & css</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                <div class="competences">
                    <div class="icon-container">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h1>Management de projet |  Lorem ipsum dolor</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
                
            </div>
    </section>

    <section class="Portfolio" id="Portfolio">
        <div class="container">
            <div class="section-heading">
                <h1>Portfolio</h1>
                <h6>Mes projets</h6>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-img has-margin-right">
                     <img src="portfolio1.jpeg" alt="">
                </div>
                <div class="portfolio-description">
                    <h6>Mes projets </h6>
                    <h1>Mon site portfolio</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <a href="#" class="cta">En savoir plus</a>
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-description">
                    <h6>Web Dev</h6>
                    <h1>Site portfolio</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                    <a href="#" class="cta">En savoir plus</a>
                </div>
                <div class="portfolio-img">
                    <img src="portfolio2.jpeg" alt="">
                </div>
            </div>
            <div class="portfolio-item">
                <div class="portfolio-img has-margin-right">
                    <img src="portfolio3.jpeg" alt="">
                </div>
                <div class="portfolio-description">
                        <h6>Web Design</h6>
                        <h1>Site portfolio</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                        <a href="#" class="cta">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>
    <section class="monCV" id="monCV">
            <div class="container">
                <div class="section-heading">
                    <h1>Expérience</h1>
                    <h6>Mon CV</h6>
                </div>
            <div class="CV-img">
            <div class="CV-img"></div>
                <img src="CV Ulysse mars 2019.png" alt="">
                </div>
    </section>

    <section class="Contact" id="Contact">
    <div class="container">
  <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
  <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre email à bien été transmis !
  </div>
  <?php endif; ?>
<form action="send_form.php" method="post">
  <div class="row">
<div class="col-md-6">
  <div class="form-group">
  <label for="inputname">Votre nom</label>
  <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
<div class="col-md-6">
  <div class="form-group">
  <label for="inputemail">Votre email</label>
  <input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
<div class="col-md-12">
  <div class="form-group">
  <label for="inputmessage">Votre message</label>
  <textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
  </div><!--/*.form-group-->
  </div><!--/*.col-md-12-->
<div class="col-md-12">
  <div class="checkbox">
  <label for="checkspam">
  <input type="checkbox" name="antispam" id="checkspam">Je suis un spammer et je l'assume!
  </label>
  </div>
  </div><!--/*.col-md-12-->
<div class="col-md-12">
  <button type='submit' class='btn btn-primary'>Envoyer</button>
  </div><!--/*.col-md-12-->
</div><!--/*.row-->
  </form>
</div><!--/*.container-->
  <!-- END CONTENT -->
    </section>

    <footer class="copyright">
        <div class="up" id="up">
            <i class="fas fa-chevron-up"></i>
        </div>
        <p>&copy 2019 Ulysse JEANJEAN</p>
    </footer>

    <script>
        AOS.init();
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="main.js"></script>
</body>
</html>
<?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);