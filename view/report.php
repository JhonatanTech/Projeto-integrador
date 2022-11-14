<?php
// include '../App/login/verifica_login.php';
include '../template/header.html';
include '../template/menu.html';
?>

<div class="container">
    <iframe title="Relatório Almoxarifado" width="100%" height="600" src="https://app.powerbi.com/reportEmbed?reportId=c0d7c86e-0810-46a0-9c83-35e4efcf3cf9&autoAuth=true&ctid=cf72e2bd-7a2b-4783-bdeb-39d57b07f76f" frameborder="0" allowFullScreen="true"></iframe>
    
        <div class="input-field col s12 center">
        <a id="botao-bi" href="https://app.powerbi.com/reportEmbed?reportId=88621f93-08f1-4e56-a9d1-39843d3a593f&autoAuth=true&ctid=cf72e2bd-7a2b-4783-bdeb-39d57b07f76f" class="waves-effect waves-light btn-large green darken-4" target="_blank">Power BI externo</a>
    </div>
</div>

<?php include '../template/footer.html'; ?>