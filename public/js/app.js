


// calelendari

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
 
    from3 = $( "#from3" )
    .datepicker({
    
      dateFormat: 'yy-mm-dd',
      minDate: -1,
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1
    })
    .on( "change", function() {
      to3.datepicker( "option", "minDate", getDate( this ) );
    }),
  to3 = $( "#to3" ).datepicker({
    
      dateFormat: 'yy-mm-dd',
      minDate: -1,
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1
  })
  .on( "change", function() {
    from3.datepicker( "option", "maxDate", getDate( this ) );
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


//cookies alert


  if (!localStorage.getItem('cookieAlertShown')) {
    // Mostrar la alerta
    document.write('<div class="alert alert-dismissible alert-danger position-fixed bottom-0 start-50 translate-middle-x" style="width: 80%; z-index: 1000;" role="alert">\
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>\
                        <strong>Nota:</strong> Este sitio web utiliza cookies para mejorar la experiencia del usuario.\
                    </div>');

    // Marcar que la alerta ha sido mostrada
    localStorage.setItem('cookieAlertShown', 'true');
}


// mapa

var map = L.map('map').setView([42.2664500, 2.9616300], 13);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var marker =L.marker([apartament.Latitud, apartament.Longitud]).addTo(map);

setTimeout(function () { map.invalidateSize() }, 300);
