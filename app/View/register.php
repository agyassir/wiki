<?php include_once '../app/View/includes/header.php' ?>
<body>
    <div class="container d-flex justify-content-center w-full mt-8" style="height: 600px;">
        <div class="d-flex mt-8 w-full col-md-4 align-items-center">
            <form class="form-control shadow" id="registrationForm" action="./registration" method="post" novalidate>
                <div class="mb-3">
                    <label for="lastname" class="form-label">username</label>
                    <input type="text" class="form-control" id="lastname" name="usernname" placeholder="Nom d'utilisateur" required>
                    <div class="valid-feedback">Valide.</div>
                    <div class="invalid-feedback">Veuillez entrer un nom d'utilisateur.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    <div class="valid-feedback">Valide.</div>
                    <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                    <div class="valid-feedback">Valide.</div>
                    <div class="invalid-feedback">Veuillez entrer un mot de passe.</div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="submit" value="regester" type="submit">S'inscrire</button>
                </div>
                <div class="mt-3">
            <p>I have an account, <a href="login">login</a>.</p>
        </div>
            </form>
        </div>
    </div>
</body>
