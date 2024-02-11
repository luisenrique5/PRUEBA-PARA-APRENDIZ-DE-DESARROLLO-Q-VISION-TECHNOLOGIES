/*js aliados */
const aliados = document.querySelectorAll('.aliado');

aliados.forEach(aliado => {
    aliado.addEventListener('mouseover', () => {
        aliado.style.opacity = '0.8'; /* Cambia la opacidad del logo al 80% al pasar el cursor */
    });
    aliado.addEventListener('mouseout', () => {
        aliado.style.opacity = '1'; /* Devuelve la opacidad del logo al valor original al quitar el cursor */
    });
});
