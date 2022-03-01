const inputSetor = document.querySelectorAll('#setor');
const inputAcesso = document.querySelectorAll('#acesso');

document.addEventListener('resize', () => {
    if (window.innerWidth < 770) {
        inputSetor[0].getAttribute.placeholder = 'Setor'
        inputAcesso[0].getAttribute.placeholder = 'Acesso'
    }
})