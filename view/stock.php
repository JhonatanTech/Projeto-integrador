<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Estoque</h1>
        <div class="row">
            <form class="col s12 m12">
                <div class="row">
                    <div class="input-field col s12 m3">
                        <i class="material-icons prefix">search</i>
                        <input id="search" type="text" class="validate">
                        <label for="search">Pesquisar</label>
                    </div>
                </div>
            </form>
        </div>

        <table class="centered responsive-table striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Material</th>
                    <th>Quantidade</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>001</td>
                    <td>Tesoura</td>
                    <td>12</td>
                    <td>
                        <a class="btn-floating waves-effect waves-light cyan hoverable tooltipped" data-position="right" data-tooltip="Editar"><i class="material-icons">edit</i></a>
                        <a class=" btn btn-floating waves-effect waves-light red hoverable tooltipped" data-position="right" data-tooltip="Excluir"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include '../template/footer.html'; ?>