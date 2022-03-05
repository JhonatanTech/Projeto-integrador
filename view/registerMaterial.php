<?php include '../template/header.html';
include '../template/menu.html'; ?>

<div class="container">
    <div class="row">
        <h1 class="center-align">Cadastrar material</h1>

        <form class="col s12 ">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">title</i>
                    <input id="material" type="text" class="validate">
                    <label for="material">Material</label>
                </div>
                <div class="input-field col s12 m3">
                    <i class="material-icons prefix">category</i>
                    <select>
                        <option value="" disabled selected>Selecione a categoria</option>
                        <option value="1">Limpeza</option>
                        <option value="2">Direção</option>
                        <option value="3">Sala de aula</option>
                    </select>
                </div>
                <div class="input-field col s12 m3">
                    <i class="material-icons prefix">pin</i>
                    <input id="qty" type="text" class="validate">
                    <label for="qty">Quantidade</label>
                </div>
                <div class="input-field col s12 m12 center">
                    <button type="submit" class="waves-effect waves-light btn-large pink">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include '../template/footer.html'; ?>