<div id="pop-sign">
    <button type="button" id="close-sign" class="close" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <form class="mt-5 mb-5" action="" method="post">

        <div class="form-group">
            <label for="SignInNom">Nom</label>
            <input type="text" class="form-control" id="SignInNom" placeholder="Nom" name="nom">
            <label for="SignInPrenom">Prenom</label>
            <input type="text" class="form-control" id="SignInPrenom" placeholder="Prenom" name="prenom">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password check</label>
            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>