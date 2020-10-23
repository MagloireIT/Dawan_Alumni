<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dawan Alumni</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    
    <?php include "view/nav.php"; ?>
<br><br><br><br>
    <div class="container">
<div class="row">

<!-- <button id="btnclick1" onclick="btnclick();toggleText(this.id);">Connexion</button> -->



<!-- 

<script>
    
    
function btnclick() {
  var formco1 = document.getElementById("formco1");
  var formsign1 = document.getElementById("formsign1");
  if (formco1.style.display === "none") {
    formco1.style.display = "block";
    formsign1.style.display = "none";
  } else {
    formco1.style.display = "none";
    formsign1.style.display = "block";
  }
} 
function toggleText(btnclick1)  {
   var text = document.getElementById(btnclick1).firstChild;
   text.data = text.data == "Connexion" ? "Inscription" : "Connexion";
}

</script> -->









<div class="col-md-6 border-right " id="formsign1">




<for m>
<fieldset>
<legend>Inscription</legend>
<div class="form-group">
  <label class="col-md-2" for="nom">Nom</label>  
  <div class="col-md-10">
  <input id="nom" name="nom" type="text" class="form-control input-md" required="">
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="prenom">Prenom</label>  
  <div class="col-md-10">
  <input id="prenom" name="prenom" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>




<div class="form-group">
  <label class="col-md-2 control-label" for="email">Email</label>
  <div class="col-md-10">
<input type="email" id="email" class="form-control input-md"required>  
  </div>
</div>





<div class="form-group">
  <label class="col-md-3 control-label" for="mdp">Mot de passe</label>
  <div class="col-md-10">
    <input id="mdp" name="mdp" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
<br>
  
<div class="form-group">
  <label class="col-md-5 control-label" for="confirmmdp">Confirmer le mot de passe</label>
  <div class="col-md-10">
    <input id="confirmmdp" name="confirmmdp" type="password" placeholder="" class="form-control input-md" required>
    
  </div>
</div>
  
<div class="form-group">
<label class="col-md-3 control-label"></label>
  <div class="col-md-10">
    <input type="submit">
  </div>
</div>
</fieldset>
</form>

   </div>






   <!-- form co -->
   <div class="col-md-6 border-left" id="formco1">
<form class="form-horizontal">
<fieldset>
<legend>Connexion</legend>
<div class="form-group">
  <label class="col-md-2 control-label" for="email">Email</label>
  <div class="col-md-10">
<input type="email" id="email" class="form-control input-md">  
  </div>
</div>





<div class="form-group">
  <label class="col-md-3 control-label" for="mdp">Mot de passe</label>
  <div class="col-md-10">
    <input id="mdp" name="mdp" type="password" placeholder="" class="form-control input-md" >
    
  </div>
</div>

<div class="form-group">
<label class="col-md-3 control-label"></label>
  <div class="col-md-10" style="padding-top: 152px;">
    <a href="/Dawan-Alumni/view/accueil.php"><input type="submit"></a>
  </div>
</div>
</fieldset>     
</form>

</div>

</div>



</div>
    <?php include "view/footer.php"; ?>
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