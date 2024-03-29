<?php

include '../App/login/verifica_login.php';
include '../template/header.html';
include '../template/menu.html';

include_once '../App/db_connect.php';

if (isset($_GET['id'])) :
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM material WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Atualizar: <?php echo $dados['nome']; ?></h1>

        <img class="circle materialboxed z-depth-1 img-edit" src="../upload/<?php echo $imagem = (file_exists('../upload/' . $dados['imagem'])) ? $dados['imagem'] : 'default.png'; ?>" alt="">

        <form class="col s12" action="../App/material/update.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">title</i>
                    <input id="nome" name="nome" type="text" class="validate" value="<?php echo $dados['nome']; ?>">
                    <label for="nome">Nome do material</label>
                </div>

                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">place</i>
                    <select id="local" name="local" class="validate" required>
                        <option value="<?php echo $dados['local']; ?>" selected><?php echo $dados['local']; ?></option>
                        <option>Direção</option>
                        <option>Limpeza</option>
                        <option>Educação Física</option>
                        <option>Música</option>
                    </select>
                </div>

                <div class="input-field col s12 m3">
                    <i class="material-icons prefix">pin</i>
                    <input id="qty" name="qty" type="number" class="validate" value="<?php echo $dados['qtd']; ?>" min="1">
                    <label for="qty">Quantidade</label>
                </div>

                <div class="input-field col s12 m12">
                    <i class="material-icons prefix">edit</i>
                    <input id="obs" name="obs" type="text" class="validate" value="<?php echo $dados['obs']; ?>">
                    <label for="obs">Observação</label>
                </div>
                <div class="input-field col s12 m12 center">
                    <button type="submit" name="btn-editar-material" class="waves-effect waves-light btn-large green darken-4">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>