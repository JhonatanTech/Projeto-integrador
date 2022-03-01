//funcionando (por conta do reload não aparece)
const itensMenu = document.querySelectorAll('nav ul li')
itensMenu.forEach(element => {
    element.addEventListener('click', () => {
        const itens= document.querySelectorAll('nav ul li');
        itens.forEach(item => {
            item.classList.remove('active')
        });
        element.classList.add('active')
    })
});