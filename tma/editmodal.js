const modal = document.getElementById('editModal');
const closeButton = document.querySelector('.close-button');
const editButtons = document.querySelectorAll('.button-edit');
 

editButtons.forEach(button => {
    button.addEventListener('click', () => {
        
        const id = button.getAttribute('data-id');
 
      
        const newUrl = window.location.origin + window.location.pathname + "?editar&id=" + id;
        history.pushState(null, "", newUrl);
 
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
 
        modal.style.display = 'flex'; 
    });
});
 

    document.addEventListener("DOMContentLoaded", function () {
        
        var msg = document.getElementById("alert_sucess");

        if (msg) {
            
            setTimeout(function () {
                msg.style.opacity = "0"; 
                setTimeout(() => msg.remove(), 500); 
            }, 9000);
        }

        
        const url = new URL(window.location);
        url.searchParams.delete("sucess"); 
        window.history.replaceState({}, document.title, url.toString());
         
    });


closeButton.addEventListener('click', () => {
    modal.style.display = 'none'; 
    history.pushState(null, "", window.location.pathname); 
});
 

window.addEventListener('click', event => {
    if (event.target === modal) {
        modal.style.display = 'none'; 
        history.pushState(null, "", window.location.pathname);
    }
});