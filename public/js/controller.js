function get(variable) {
    var jsonData = new Object();
    
    // Use $.getJSON to fetch data from "get.php" and pass the variable as a query parameter
    $.getJSON('get.php?lang=' + variable, function(data) {
        console.log(variable);
        // Your code to handle the JSON data
        jsonData = data;
        console.log(jsonData);
    });
}

document.getElementById('getDataButton').onclick = function() {
    // Call the get() function when the button is clicked
    get('apartament'); // Replace 'your_variable_here' with the actual variable you want to pass
};