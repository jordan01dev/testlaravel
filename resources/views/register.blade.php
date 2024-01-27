<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>GESTION DE TICKETS</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/feather/feather.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="assets/img/login.png" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>S'INSCRIRE</h1>
                            <p class="account-subtitle">Entrer les details pour créer votre compte </p>

                            <form id="registrationForm" action="{{route('register.store')}}"  method="POST">
                            @csrf
                                <div class="form-group">
                                    <label>Nom <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name='nom_ut'>
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Prénom <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name='prenom_ut'>
                                    <span class="profile-views"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>E-mail <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name='email_ut'>
                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Numero de telephone <span class="login-danger">*</span></label>
                                    <input class="form-control" type="text" name='num_tel'>
                                    <span class="profile-views"><i class="fas fa-envelope"></i></span>
                                </div>
                                <div class="form-group">
                                    <label>Mot de Passe <span class="login-danger">*</span></label>
                                    <input class="form-control pass-input" type="text" name='motDepasse'>
                                    <span class="profile-views feather-eye toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <label>Confirmez votre Mot de Passe<span class="login-danger">*</span></label>
                                    <input class="form-control pass-confirm" type="text" name='motDepasse'>
                                    <span class="profile-views feather-eye reg-toggle-password"></span>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit" name='register'>INSCRIPTION</button>
                                </div>
                            </form>
                            <div class=" dont-have">Déjà Enregistré? <a href="{{route('login')}}">CONNEXION</a></div>

<div class="login-or">
<span class="or-line"></span>
<span class="span-or">OU</span>
</div>

<div class="social-login">
<a href="#"><i class="fab fa-google-plus-g"></i></a>
<a href="#"><i class="fab fa-facebook-f"></i></a>
<a href="#"><i class="fab fa-twitter"></i></a>
<a href="#"><i class="fab fa-linkedin-in"></i></a>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/script.js"></script>


</body>
</html>
