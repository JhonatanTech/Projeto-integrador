<?php include '../template/header.html'; ?>

<style>
    .container.login {
        display: flex !important;
        margin-top: 20vh !important;
        margin-bottom: 15vh !important;
    }
</style>

<div class="container login">
    <div class="row">
        <h2 class="center-align">Login</h2>
        <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                    <input id="username" type="text" class="validate">
                    <label for="username">Email</label>
                </div>
                <div class="input-field col s12">
                    <input id="senha" type="password">
                    <label for="senha">Senha</label>
                </div>
                <div class="input-field col s12 center">
                    <button type="submit" class="waves-effect waves-light btn-large pink">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>