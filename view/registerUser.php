<?php

include '../template/header.html';
include '../template/menu.html';

?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Cadastro de usuário</h1>

        <form class="col s12" action="../App/user/create.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Imagem</span>
                        <input type="file" required name="arquivo">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Selecione uma imagem para este usuário">
                    </div>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="nome" type="text" class="validate" required name="nome">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s12 m6">
                    <input id="sobrenome" type="text" class="validate" name="sobrenome">
                    <label for="sobrenome">Sobrenome</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">person</i>
                    <input id="cpf" type="text" class="validate" name="cpf">
                    <label for="cpf">CPF</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">phone</i>
                    <input id="contato" type="text" class="validate" name="contato">
                    <label for="contato">Contato</label>
                </div>

                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">work</i>
                    <input id="funcao" type="text" class="validate" name="funcao">
                    <label for="funcao">Função do usuário</label>
                </div>

                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">lock</i>
                    <input id="senha" type="password" class="validate" name="senha">
                    <label for="senha">Senha</label>
                </div>
                <div class="input-field col s12 m12 center">
                    <button type="submit" name="btn-cadastrar-usuario" class="waves-effect waves-light btn-large pink">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>