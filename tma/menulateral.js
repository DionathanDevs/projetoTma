
document.addEventListener('DOMContentLoaded', () => {
    const btnExpandir = document.querySelector('.btn-expandir');
    const menuLateral = document.querySelector('.menu-lateral');
    const body = document.querySelector('body');

    if (btnExpandir && menuLateral) {
        // Remove event listener duplicado (se existir)
        btnExpandir.onclick = null;

        // Adiciona o evento para alternar a classe
        btnExpandir.addEventListener('click', (e) => {
            menuLateral.classList.toggle('show');
            e.stopPropagation();  // Impede o clique no botão de fechar o menu
        });

        // Fecha o menu lateral se clicar fora dele
        body.addEventListener('click', (e) => {
            if (!menuLateral.contains(e.target) && !btnExpandir.contains(e.target)) {
                menuLateral.classList.remove('show');
            }
        });
    }
});

