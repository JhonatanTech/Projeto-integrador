<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almoxarifado - Befama</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="befama.svg" type="image/x-icon">
    <link rel="icon" href="befama.svg" type="image/x-icon">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="style/materialize/materialize.css">

    <!-- CSS  -->
    <link rel="stylesheet" href="style/geral.css">
    <link rel="stylesheet" href="style/footer.css">
    <link rel="stylesheet" href="style/view/profile.css">

    <!--Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<style>
    .container.login {
        display: flex !important;
        /* margin-top: 15vh !important;
        margin-bottom: 15vh !important; */
    }
</style>

<div class="container login">
    <div class="row">
        <h2 class="center-align">Login</h2>
        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
            <div class="card-panel red darken-1">
                <span class="white-text">ERRO: Usuário ou senha inválidos.</span>
            </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <form class="col s12" action="App/login/login.php" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input name="usuario" id="usuario" type="text" class="validate" autofocus="">
                    <label for="usuario">Usuário</label>
                </div>

                <div class="input-field col s12">
                    <input name="senha" id="senha" type="password">
                    <label for="senha">Senha</label>
                </div>
                <div class="input-field col s12 center">
                    <button type="submit" class="waves-effect waves-light btn-large pink">Entrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include 'template/footer.html'; ?>