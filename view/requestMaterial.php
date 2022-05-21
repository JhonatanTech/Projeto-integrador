<?php

include '../template/header.html';
include '../template/menu.html';

include '../App/material/db_connect.php';
?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Solicitar material</h1>

        <form class="col s12 ">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">title</i>
                    <select class="icons">
                        <option disabled selected>Material</option>
                        <?php
                        $sql = "SELECT * FROM material ORDER BY nome ASC";

                        $resultado = mysqli_query($connect, $sql);

                        if (mysqli_num_rows($resultado) > 0) :
                            while ($dados = mysqli_fetch_array($resultado)) : ?>
                                <option value="" data-icon="../upload/<?php echo $imagem = (file_exists('../upload/' . $dados['imagem'])) ? $dados['imagem'] : 'default.png'; ?>"><?php echo $dados['nome']; ?></option>
                            <?php
                            endwhile;
                        else :
                            ?>
                            <option>Sem materiais</option>
                        <?php
                        endif;
                        ?>
                    </select>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">pin</i>
                    <input id="qty" type="number" class="validate">
                    <label for="qty">Quantidade</label>
                </div>
                <div class="input-field col s12 m12">
                    <i class="material-icons prefix">edit</i>
                    <textarea id="obs" class="materialize-textarea" data-length="120"></textarea>
                    <label for="obs">Observação</label>
                </div>
                <div class="input-field col s12 m12 center">
                    <button type="submit" name="btn-solicitarf-material" class="waves-effect waves-light btn-large pink">Solicitar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>