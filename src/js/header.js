document.addEventListener("DOMContentLoaded", function() {
    var rutasFormacion = document.getElementById("rutasFormacion");
    var submenuRutas = document.getElementById("submenuRutas");

    rutasFormacion.addEventListener("click", function(e) {
        e.preventDefault();
        submenuRutas.classList.toggle("show");
    });

    // Cerrar el menú desplegable si se hace clic fuera de él
    document.addEventListener("click", function(event) {
        if (!submenuRutas.contains(event.target) && event.target !== rutasFormacion) {
            submenuRutas.classList.remove("show");
        }
    });
});



