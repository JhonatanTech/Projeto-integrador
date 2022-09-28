{
const usuario = document.querySelector('#usuario')
usuario.addEventListener('blur', () => {
    if (usuario.value.length == 11) {
        $('#usuario').mask('000.000.000-00', {
            reverse: true
        });
    }
})

usuario.addEventListener('focus', () => {
    $('#usuario').unmask();
})

$('#cpf').mask('000.000.000-00', {reverse: true});
$('#contato').mask('(00) 00000-0000');
}