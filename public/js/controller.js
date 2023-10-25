<<<<<<< HEAD
function fetchData() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            var titol_value = response.Titol;
            console.log("Titol: " + titol_value);
        }
    };
    xhr.open("GET", "get.php", true);
    xhr.send();
}


        // Trigger the fetchData function when the body loads
        window.onload = fetchData;
=======


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
>>>>>>> 0541d0779cc5a5575b704b962a717b570f7d2064
