<?php 

include '../template/header.html';
include '../template/menu.html';

?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Solicitar material</h1>

        <form class="col s12 ">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">title</i>
                    <select>
                        <option value="" disabled selected>Material</option>
                        <option value="1">Limpeza</option>
                        <option value="2">Direção</option>
                        <option value="3">Sala de aula</option>
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
                    <button type="submit" class="waves-effect waves-light btn-large pink">Solicitar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>