function viewdata(){
    $.ajax({
        url: '../src/controllers/ctrlSelect.php', // Replace with the actual path to your controller.
        method: 'GET', // You can change the HTTP method as needed.
        dataType: 'json', // Set the expected data type.
  
        success: function(data) {
          // Handle the response from the controller here.
          console.log('Success: ', data);
        },
  
        error: function(error) {
            console.error('AJAX request failed. Status: ' + ', Error: ' + error);
        }
      });
}
/*window.addEventListener("load", (event) => {
    console.log("page is fully loaded");
  });

        // Trigger the fetchData function when the body loads
        window.onload = viewdata;*/