function viewdata(){
    jQuery.ajax({
        type: "GET",
        url: "../../src/controllers/ctrlSelect.php",
        data: {userid: group_id_tb},
        dataType: 'json',
        success: function(data) {
             var the_returned_string = data.html;
             alert(the_returned_string);
        }
     });
}
window.addEventListener("load", (event) => {
    console.log("page is fully loaded");
  });

        // Trigger the fetchData function when the body loads
        window.onload = viewdata;