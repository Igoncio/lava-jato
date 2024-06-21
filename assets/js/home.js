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
