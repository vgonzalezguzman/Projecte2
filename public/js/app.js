$( function() {
    var dateFormat = "dd/mm/yy",
      from = $( "#from" )
        .datepicker({
         dateFormat: 'dd/mm/yy',
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        dateFormat: 'dd/mm/yy',
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
      from2 = $( "#from2" )
      .datepicker({
        dateFormat: 'dd/mm/yy',
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on("change", function () {
        to.datepicker("option", "minDate", getDate(this));
      }),
    to2 = $( "#to2" ).datepicker({
        dateFormat: 'dd/mm/yy',
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1
    })
      .on("change", function () {
        from.datepicker("option", "maxDate", getDate(this));
      });
  // Datepicker for the second date range
  from2 = $("#from2")
    .datepicker({
    
      dateFormat: 'dd/mm/yy',
      minDate: -1,
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1
    })
    .on("change", function () {
      to3.datepicker("option", "minDate", getDate(this));
    }),
  to3 = $( "#to3" ).datepicker({
    
      dateFormat: 'dd/mm/yy',
      minDate: -1,
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1
    })
      .on("change", function () {
        from3.datepicker("option", "maxDate", getDate(this));
      });
  // Function to parse the date from the datepicker input
  function getDate(element) {
    var date;
    try {
      date = $.datepicker.parseDate(dateFormat, element.value);
    } catch (error) {
      date = null;
    }
  } );
  $('#modalPis<?= $id ?>').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var apartamentId = button.data('apartament-id');
    $('#apartamentIdField').val(apartamentId);
});

    var apartamentId;  // Variable global para almacenar el ID_Apartament

    function asociarApartamentId(id) {
        // Cerrar el primer modal antes de abrir el segundo
        var modalPis = new bootstrap.Modal(document.getElementById('modalPis0'));
        modalPis.hide();

        apartamentId = id;  // Almacena el ID_Apartament en la variable global
        // Actualiza el valor del campo oculto en el formulario de reserva
        document.getElementById('apartamentIdField').value = apartamentId;
        // Abre el modal de reserva
        var reservaModal = new bootstrap.Modal(document.getElementById('reservaModal'));
        reservaModal.show();
    }