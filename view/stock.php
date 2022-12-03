<?php

include '../App/login/verifica_login.php';
include '../template/header.html';
include '../template/menu.html';
include '../template/message.php';

include_once('../App/db_connect.php');

$material   = "";
$local      = "";
?>

<div class="container">
    <div class="row">
        <div class="row">
            <h1 class="center-align">Estoque</h1>
            <form class="col s12 m12" method="POST">
                <div class="row">
                    <div class="input-field col s12 m3">
                        <i class="material-icons prefix">title</i>
                        <input id="search" type="text" class="validate" name="pesquisa-material">
                        <label for="search">Material</label>
                    </div>
                    <div class="input-field col s12 m4">
                        <i class="material-icons prefix">place</i>
                        <select id="pesquisa-local" name="pesquisa-local">
                            <option value="" disabled selected>Local de armazenamento</option>
                            <option>Direção</option>
                            <option>Limpeza</option>
                            <option>Educação Física</option>
                            <option>Música</option>
                        </select>
                    </div>
                    <div class="input-field col s12 m2">
                        <button class="btn-floating pink waves-effect waves-light tooltipped" data-position="top" data-tooltip="Pesquisar"><i class="material-icons">search</i></button>
                        <a href="stock.php" class="btn-floating waves-effect waves-light red tooltipped" data-position="top" data-tooltip="Limpar pesquisa"><i class="material-icons">clear</i></a>
                        <a href="registerMaterial.php" class="btn-floating waves-effect waves-light green tooltipped" data-position="top" data-tooltip="Adicionar material"><i class="material-icons">add</i></a>
                    </div>
                </div>
            </form>
        </div>

        <table class="centered striped responsive-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Imagem</th>
                    <th>Nome do material</th>
                    <th>Local de armazenamento</th>
                    <th>Quantidade</th>
                    <th>Observação</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                <?php
                if (isset($_POST['pesquisa-material'])) {
                    $material = $_POST['pesquisa-material'];
                }
                if (isset($_POST['pesquisa-local'])) {
                    $local = $_POST['pesquisa-local'];
                }

                $sql = "SELECT * FROM material WHERE nome LIKE '%$material%' AND local LIKE '%$local%' ORDER BY id DESC";

                $resultado = mysqli_query($connect, $sql);

                if (mysqli_num_rows($resultado) > 0) :
                    while ($dados = mysqli_fetch_array($resultado)) : ?>

                        <tr>
                            <td><?php echo $dados['id']; ?></td>
                            <td>
                                <img class="responsive-img materialboxed" src="../upload/<?php echo $imagem = (file_exists('../upload/' . $dados['imagem'])) ? $dados['imagem'] : 'default.png'; ?>" style="height: 60px;">
                            </td>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['local']; ?></td>
                            <td><?php echo $dados['qtd']; ?></td>
                            <td><a href="#obs-modal<?php echo $dados['id']; ?>" class="btn modal-trigger waves-effect waves-light">Observação</a></td>
                            </td>
                            <td>
                                <a href="editMaterial.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange waves-effect waves-light tooltipped" data-position="top" data-tooltip="Editar"><i class="material-icons">edit</i></a>
                                <a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger waves-effect waves-light tooltipped" data-position="right" data-tooltip="Deletar"><i class="material-icons">delete</i></a>
                            </td>

                            <!-- Modal Deletar -->
                            <div id="modal<?php echo $dados['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Opa!</h4>
                                    <p>Tem certeza que deseja excluir "<?php echo $dados['nome']; ?>"?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="../App/material/delete.php" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                        <button type="submit" name="btn-deletar-material" class="btn red">Sim, quero deletar</button>

                                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                    </form>
                                </div>
                            </div>

                            <!-- Modal Observação -->
                            <div id="obs-modal<?php echo $dados['id']; ?>" class="modal">
                                <div class="modal-content">
                                    <h4>Observação</h4>
                                    <p><?php echo $dados['obs']; ?></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
                                </div>
                            </div>
                        </tr>

                    <?php
                    endwhile;
                else : ?>

                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>

                <?php
                endif;
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php include '../template/footer.html'; ?>