// Datepicker initialization
$(function () {
  // Date format for the datepicker
  var dateFormat = "mm/dd/yy",
    // Datepicker for the first date range
    from = $("#from")
      .datepicker({
        dateFormat: 'yy-mm-dd',
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on("change", function () {
        to.datepicker("option", "minDate", getDate(this));
      }),
    to = $("#to").datepicker({
      dateFormat: 'yy-mm-dd',
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
      dateFormat: 'yy-mm-dd',
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1
    })
    .on("change", function () {
      to2.datepicker("option", "minDate", getDate(this));
    }),
    to2 = $("#to2").datepicker({
      dateFormat: 'yy-mm-dd',
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1
    })
      .on("change", function () {
        from2.datepicker("option", "maxDate", getDate(this));
      });
  // Datepicker for the third date range
  from3 = $("#from3")
    .datepicker({

      dateFormat: 'yy-mm-dd',
      minDate: -1,
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1
    })
    .on("change", function () {
      to3.datepicker("option", "minDate", getDate(this));
    }),
    to3 = $("#to3").datepicker({

      dateFormat: 'yy-mm-dd',
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

    return date;
  }
});


// Cookies alert


if (!localStorage.getItem('cookieAlertShown')) {
  // Show the alert if not already shown
  document.write('<div class="alert alert-dismissible alert-danger position-fixed bottom-0 start-50 translate-middle-x" style="width: 80%; z-index: 1000;" role="alert">\
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>\
                        <strong>Nota:</strong> Este sitio web utiliza cookies para mejorar la experiencia del usuario.\
                    </div>');

  // Mark that the alert has been shown
  localStorage.setItem('cookieAlertShown', 'true');
}


