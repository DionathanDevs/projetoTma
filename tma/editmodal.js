const modal = document.getElementById('editModal');
const closeButton = document.querySelector('.close-button');
const editButtons = document.querySelectorAll('.button-edit');
 
// Abre o modal ao clicar em um botão de editar
editButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Obtém o ID do item clicado
        const id = button.getAttribute('data-id');
 
        // Atualiza a URL sem recarregar a página
        const newUrl = window.location.origin + window.location.pathname + "?editar&id=" + id;
        history.pushState(null, "", newUrl);
 
        // Preenche os campos do modal com os dados do botão clicado
        document.getElementById("field0").value = button.getAttribute("data-id");
        document.getElementById("field1").value = button.getAttribute("data-name");
        document.getElementById("field2").value = button.getAttribute("data-deviceid");
        document.getElementById("field3").value = button.getAttribute("data-datalog-number");
        document.getElementById("field4").value = button.getAttribute("data-model");
        document.getElementById("field5").value = button.getAttribute("data-software");
        document.getElementById("field6").value = button.getAttribute("data-login");
        document.getElementById("field7").value = button.getAttribute("data-password");
        document.getElementById("field9").value = button.getAttribute("data-ip");
        document.getElementById("field10").value = button.getAttribute("data-mask");
        document.getElementById("field11").value = button.getAttribute("data-gateway");
        document.getElementById("field12").value = button.getAttribute("data-rack-panel");
        document.getElementById("field13").value = button.getAttribute("data-rack-sw");
        document.getElementById("field14").value = button.getAttribute("data-rack-sw-port");
 
        modal.style.display = 'flex'; // Torna o modal visível
    });
});
 
// Fecha o modal ao clicar no botão de fechar
closeButton.addEventListener('click', () => {
    modal.style.display = 'none'; // Esconde o modal
    history.pushState(null, "", window.location.pathname); // Remove parâmetros da URL
});
 
// Fecha o modal ao clicar fora dele
window.addEventListener('click', event => {
    if (event.target === modal) {
        modal.style.display = 'none'; // Esconde o modal se o clique for fora
        history.pushState(null, "", window.location.pathname);
    }
});