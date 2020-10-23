<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dawan Alumni | Espace membre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <link rel="stylesheet" href="../assets/css/nav-connexion.css"> -->
</head>
<body>
    
    <?php include "nav-connexion.php"; ?>

  <main class="container-fluid main-accueil">
    <div class="container">
    <div class="row bg-light section-accueil">
        <h1 class="mb-4">Bienvenu sur notre réseau Dawan Alumni</h1>

        <div class="col-md-8">
            <?php include "slider-containe.php"; ?>
        </div>

        <div class="col-md-4 contenu-accueil">
            <div class="text-accueil">
                There are many variations of passages of Lorem Ipsum available, 
                but the majority have suffered alteration in some form, by injected humour, 
                or randomised words which don't look even slightly believable. 
                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything 
                embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet 
                tend to repeat predefined chunks as necessary, making this the first true generator on the 
                Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model 
                sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem 
                Ipsum is therefore always free from repetition, injected humour, or non-characteristic words.
            </div>
        </div> 
    </div>
        <!-- ACTUALITES/EVENTS -->
       
    <div class="row bg-light section-accueil">
        <h1 class="mb-4">Retrouvez nos dernières actualités</h1>

        <div class="col-md-8">
        <figure class="videoTemoignage">
                <video controls width ="400">
                    <source src="http://www.dawan.fr/im-dyn/dawan-foad-temoignages.webm">
                </video>
                <figcaption>Témoignages d'anciens élèves</figcaption>
            </figure>
        </div>

        <div class="col-md-4 contenu-accueil">
            <div class="text-accueil border solid">

                <div class="logoLinkFb col-md-4">
                    <img src="../assets\img\logoDawan.png" width="200" alt="logo Dawan">
                    <div class="text-center ">
                        <img src="../assets/img/facebook.png" alt="logo Facebook Dawan" width="20px">
                        <a href="https://fr-fr.facebook.com/DawanFrance">Visiter la page Facebook DawanFrance</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</main>
    <?php include 'footer.php'?>
    


   

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="module" src="assets/js/app.js"></script>
</body>
</html>