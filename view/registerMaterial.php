<?php

include '../App/login/verifica_login.php';
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
                        <input type="file" required name="arquivo" class="validate">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path" type="text" placeholder="Selecione uma imagem para este material">
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
                    <select id="local" name="local" class="validate">
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

                <div class="input-field col s12">
                    <i class="material-icons prefix">edit</i>
                    <textarea id="obs" name="obs" class="materialize-textarea" data-length="120"></textarea>
                    <label for="obs">Observação</label>
                </div>
                <div class="input-field col s12 m12 center">
                    <button type="submit" name="btn-cadastrar-material" class="waves-effect waves-light btn-large green darken-4">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    M.AutoInit();
    $(document).ready(function() {
        $('textarea#obs').characterCounter();
    });
</script>

<?php include '../template/footer.html'; ?>