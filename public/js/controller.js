function get(variable) {
    var jsonData = new Object();
    console.log(variable);
    
    // Use $.getJSON to fetch data from "get.php" and pass the variable as a query parameter
    $.getJSON('../src/controllers/get.php?lang=' + variable, function(data) {
        // Your code to handle the JSON data
        jsonData = data;
        console.log(jsonData);
    });
};

function fetchData() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            var titol_value = response.Titol;
            document.getElementById("output").innerHTML = "Titol: " + titol_value;
        }
    };
    xhr.open("GET", "get.php", true);
    xhr.send();
}