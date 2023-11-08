
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

$( function() {
    var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
         dateFormat: 'yy-mm-dd',
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        dateFormat: 'yy-mm-dd',
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
      from2 = $( "#from2" )
      .datepicker({
        dateFormat: 'yy-mm-dd',
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        to2.datepicker( "option", "minDate", getDate( this ) );
      }),
    to2 = $( "#to2" ).datepicker({
        dateFormat: 'yy-mm-dd',
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1
    })
    .on( "change", function() {
      from2.datepicker( "option", "maxDate", getDate( this ) );
    });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );