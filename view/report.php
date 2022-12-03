<?php
include '../App/login/verifica_login.php';
include '../template/header.html';
include '../template/menu.html';
?>

<div class="container">
    <iframe title="Almoxarifado_befama" width="100%" height="541.25" src="https://app.powerbi.com/reportEmbed?reportId=13fece65-8081-4ac5-b259-c38bd4b37758&autoAuth=true&ctid=cf72e2bd-7a2b-4783-bdeb-39d57b07f76f" frameborder="0" allowFullScreen="true"></iframe>

    <div class="input-field col s12 center">
        <a id="botao-bi" href="https://app.powerbi.com/reportEmbed?reportId=13fece65-8081-4ac5-b259-c38bd4b37758&autoAuth=true&ctid=cf72e2bd-7a2b-4783-bdeb-39d57b07f76f" class="waves-effect waves-light btn-large green darken-4" target="_blank">Power BI externo</a>
    </div>
</div>

<?php include '../template/footer.html'; ?>