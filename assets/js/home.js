// JavaScript for Create Service Modal
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

document.getElementById('filter-plate').addEventListener('input', function() {
    var filter = this.value.toUpperCase();
    var options = document.getElementById('car-plate').options;

    for (var i = 0; i < options.length; i++) {
        var txtValue = options[i].textContent || options[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            options[i].style.display = "";
        } else {
            options[i].style.display = "none";
        }
    }
});

document.getElementById('cadastrarClienteBtn').addEventListener('click', function() {
    window.location.href = 'main_cadastrar_cliente.php';
});

// JavaScript for Finalize Service Modal
var finalizeModal2 = document.getElementById('finalizeModal2');
var finalizeBtn = document.getElementById('btn-finalizar');
var finalizeClose2 = document.getElementsByClassName('finalize-close2')[0];
var confirmFinalizeBtn2 = document.getElementById('confirmFinalizeBtn2');
var cancelFinalizeBtn2 = document.getElementById('cancelFinalizeBtn2');

// When the user clicks the button, open the modal 
finalizeBtn.onclick = function() {
    finalizeModal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
finalizeClose2.onclick = function() {
    finalizeModal2.style.display = "none";
}

// When the user clicks on cancel button, close the modal
cancelFinalizeBtn2.onclick = function() {
    finalizeModal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == finalizeModal2) {
        finalizeModal2.style.display = "none";
    }
}

// When the user clicks on confirm finalize button, close the modal and perform finalize action
confirmFinalizeBtn2.onclick = function() {
    finalizeModal2.style.display = "none";
    // Add your finalize action here
    alert("Serviço finalizado!");
}
