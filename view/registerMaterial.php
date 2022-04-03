<?php

include '../template/header.html';
include '../template/menu.html';

?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Cadastrar material</h1>

        <form class="col s12" action="../App/material/create.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Imagem</span>
                        <input type="file" required name="arquivo">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Selecione uma imagem para este material">
                    </div>
                </div>

                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">title</i>
                    <input id="nome" name="nome" type="text" class="validate">
                    <label for="nome">Nome do material</label>
                </div>

                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">place</i>
                    <!-- <input id="local" name="local" type="text" class="validate"> -->
                    <select id="local" name="local">
                        <option value="" disabled selected>Local de armazenamento</option>
                        <option>Direção</option>
                        <option>Limpeza</option>
                        <option>Educação Física</option>
                        <option>Música</option>
                    </select>
                </div>

                <div class="input-field col s12 m3">
                    <i class="material-icons prefix">pin</i>
                    <input id="qty" name="qty" type="number" class="validate" min="1">
                    <label for="qty">Quantidade</label>
                </div>

                <div class="input-field col s12 m12">
                    <i class="material-icons prefix">edit</i>
                    <input id="obs" name="obs" type="text" class="validate">
                    <label for="obs">Observação</label>
                </div>
                <div class="input-field col s12 m12 center">
                    <button type="submit" name="btn-cadastrar-material" class="waves-effect waves-light btn-large pink disabled">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>