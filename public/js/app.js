
document.addEventListener('DOMContentLoaded', function () {
    const startDateInput = document.getElementById('start');
    const endDateInput = document.getElementById('end');

    // Escuchar cambios en las fechas
    startDateInput.addEventListener('change', () => {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);

        if (startDate > endDate) {
            endDateInput.value = startDateInput.value;
        }
    });

    endDateInput.addEventListener('change', () => {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);

        if (endDate < startDate) {
            startDateInput.value = endDateInput.value;
        }
    });
});

let lastScrollTop = 0;
        
// Función para manejar el evento de scroll
window.addEventListener("scroll", function () {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
        // El usuario está desplazándose hacia abajo, oculta el elemento
        document.querySelector(".dropdown").classList.add("hidden");
    } else {
        // El usuario está desplazándose hacia arriba, muestra el elemento
        document.querySelector(".dropdown").classList.remove("hidden");
    }

    lastScrollTop = scrollTop;
});