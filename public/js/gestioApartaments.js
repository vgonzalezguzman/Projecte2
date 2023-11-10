$(document).ready(function () {
    // Attach a change event listener to the select elements
    $("#pisosSelect, #arrendatariSelect").on("change", function () {
        // Get the selected values
        var selectedPisoValue = $("#pisosSelect").val();
        var selectedArrendatariValue = $("#arrendatariSelect").val();

        $("#apartament-list").empty();

        // Construct the URL
        var url = "index.php?r=gestioReservesPis";

        // Add parameters using the data option
        var requestData = {};

        if (selectedPisoValue !== "") {
            requestData.piso = selectedPisoValue;
        }

        if (selectedArrendatariValue !== "") {
            requestData.arrendatari = selectedArrendatariValue;
        }

        // Make the AJAX request
        $.get(url, requestData, function (data) {
            // Parse the JSON data received
            var jsonData = JSON.parse(data);

            // Loop through the JSON data and append it to the "apartament-list" div
            $.each(jsonData.dadesPisos, function (index, apartamento) {
                console.log(apartamento);
                var html = createCard(apartamento);
                $("#apartament-list").append(html);
            });
        });
    });
});

// Function to create an HTML card for each apartment
function createCard(apartamento) {
    return `
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="${apartamento.img_url}" class="card-img-top" alt="Imagen del apartamento">
                <div class="card-body">
                    <h5 class="card-title">${apartamento.Titol}</h5>
                    <p class="card-text">${apartamento.Descripcio}</p>
                    <p class="card-text">Usuari arrendatari: <br>${apartamento.Nom} ${apartamento.Cognoms}</p>
                    <p class="card-text">Telèfon : <br>${apartamento.Telefon}</p>
                    <p class="card-text">E-mail : <br>${apartamento.Email}</p>
                    <p class="card-text">Estat actual de la reserva : <br>${apartamento.EstatReserva}</p>
                    <p class="card-text">Preu : <br>${apartamento.preu}</p>
                    <p class="card-text">Dates: <br>Inici ${apartamento.DataInici} Final ${apartamento.DataFinal}</p>
                </div>
                <div class="card-footer justify-content-between">
                    ${apartamento.EstatReserva === "NO CONFIRMAT" ?
            `<form action="index.php" method="post">
                            <input type="hidden" name="r" value="confirmReservation">
                            <input type="hidden" name="ID_Reserva" value="${apartamento.id_reserva}">
                            <button class="btn btn-success text-start" type="submit">Confirmar reserva</button>
                        </form>
                        <form action="index.php" method="post">
                            <input type="hidden" name="r" value="cancelReservation">
                            <input type="hidden" name="ID_Reserva" value="${apartamento.id_reserva}">
                            <button class="btn btn-danger text-end" type="submit">Cancelar reserva</button>
                        </form>` :
            `<div class="">
                            <p>Tot en ordre!</p>
                        </div>`}
                </div>
            </div>
        </div>
    `;
}
