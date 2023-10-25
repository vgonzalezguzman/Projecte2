function fetchData() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            var titol_value = response.Titol;
            console.log("Titol: " + titol_value);
        }
    };
    xhr.open("GET", "get.php", true);
    xhr.send();
}


        // Trigger the fetchData function when the body loads
        window.onload = fetchData;