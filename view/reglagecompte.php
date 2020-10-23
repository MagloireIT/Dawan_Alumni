<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dawan Alumni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<?php include "nav-connexion.php"; ?>
<br><br><br><br><br><br>

<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8 border">
<h3 style="text-align: center; margin-bottom:5rem;">
Modifier mes informations</h3>




<form class="form-horizontal">
<fieldset>

<div class="col-md-12">
  <h5 style="padding-bottom: 1rem;">Changer la photo de profil :</h5>
    <img id="photoup" src="#" alt=""/>
</div>
<div class="col-md-12">
<input type='file' onchange="uploadimage(this);"/>
</div>

<script>
  function uploadimage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photoup')
                        .attr('src', e.target.result)
                        .width(300)
                        .height(300);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<div class="form-group" style="padding-top: 3rem;">
  <label class="col-md-4 control-label" for="nom">Nom</label>  
  <div class="col-md-12">
  <input id="nom" name="nom" type="text" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">Prenom</label>  
  <div class="col-md-12">
  <input id="prenom" name="prenom" type="text" class="form-control input-md">
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-12">
<input type="email" id="email" class="form-control input-md">  
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="mdp">Mot de passe</label>
  <div class="col-md-12">
    <input id="mdp" name="mdp" type="password"class="form-control input-md">
  </div>
</div>

<div class="form-group">
<label class="col-md-3 control-label"></label>
  <div class="col-md-10">
    <input type="submit">
  </div>
</div>
</fieldset></form>


</div>
<div class="col-md-2"></div>








</div>
</div>

    <?php include "footer.php"; ?>
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