<?php
session_start();

$adminEmail = 'contact@guillaume.com';
$adminPassword = '12345';
if (count($_POST) === 2) {
    if ($adminEmail === $_POST['email'] && $adminPassword === $_POST['password']){
        print("ok");
        $_SESSION['is_logged_in']=true;

        header('location: http://'.$_SERVER['HTTP_HOST'].'/admin/index.php');
        exit();
        }
    else  {
        $errorMessage='Mauvais indentifiant mec.';
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
</body>
<div class="container">
<?php if (isset($errorMessage)){ ?>
    <div class="alert alert-danger">
        <?= $errorMessage?>
    </div>
    <?php } ?>
<form novalidate action=""http://<?=$_SERVER['HTTP_HOST']?>/admin/login"" method="post" "form-signin">
    <img class="mb-4" src="ostrich.jpg" alt="" width="165" height="200  ">
    <h1 class="h3 mb-3 font-weight-normal">Veuillez vous connecter</h1>
    <label for="inputEmail" class="sr-only">Adresse email</label>
    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Adresse email" required autofocus>
    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Se souvenir de moi
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>

</form>
</div>


</html>
