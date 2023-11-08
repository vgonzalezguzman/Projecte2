
// document.addEventListener('DOMContentLoaded', function () {
//     const startDateInput = document.getElementById('start');
//     const endDateInput = document.getElementById('end');

//     // Escuchar cambios en las fechas
//     startDateInput.addEventListener('change', () => {
//         const startDate = new Date(startDateInput.value);
//         const endDate = new Date(endDateInput.value);

//         if (startDate > endDate) {
//             endDateInput.value = startDateInput.value;
//         }
//     });

//     endDateInput.addEventListener('change', () => {
//         const startDate = new Date(startDateInput.value);
//         const endDate = new Date(endDateInput.value);

//         if (endDate < startDate) {
//             startDateInput.value = endDateInput.value;
//         }
//     });
// });

$(document).ready(function() {
    // Attach a change event listener to the select element
    $("#pisosSelect").on("change", function() {
        // Get the selected value
        var selectedValue = $(this).val();

        if (selectedValue === "") {
            // If the selected value is empty, load the default PHP file
            $.get("index.php?r=gestioReservesDefault", function(data) {
                // Replace the content of the "apartament-list" div with the PHP file contents
                $("#apartament-list").html(data);
            });
        } else {
            // Construct the URL with the selected value and redirect
            $.get("index.php?r=gestioReserves&piso=" + selectedValue, function(data) {
                $("#apartament-list").html(data);
            });
        }
    });
});