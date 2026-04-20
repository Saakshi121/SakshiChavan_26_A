<?php
$apiKey = "f00c38e0279b7bc85480c3fe775d518c";

$city = "";
$data = null;

if (isset($_GET['city'])) {
    $city = $_GET['city'];

    $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&appid=$apiKey";

    $response = file_get_contents($url);
    $data = json_decode($response, true);
}
?>
<!DOCTYPE html> 
 
<head> 
    <link rel="stylesheet" href="WeatherApp.css"> 
    <link rel="stylesheet" href= 
"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> 
    <link rel="stylesheet" href= 
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> 
    <link rel="stylesheet" href= 
"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&displ
 ay=swap"> 
     <title>Weather App</title>
</head> 
 
<body> 
    <div class="container"> 
        <div class="weather-card"> 
            <h1 style="color: lightblue;"> 
                 
                Check Your Surrounding Weather on: 
            </h1> 
            <h3> 
                Weather  
            </h3> 
            <input type="text" id="city-input" 
                placeholder="Enter city name or region"> 
            <button id="city-input-btn" 
                    onclick="weatherFn($('#city-input').val())"> 
                    Get Weather 
            </button> 
            <div id="weather-info" 
                class="animate__animated animate__fadeIn"> 
                <h3 id="city-name"></h3> 
                <p id="date"></p> 
                <img 
src="https://i.pinimg.com/originals/06/c4/f7/06c4f70ec5931e2342e703e8a3f
 0a253.png" alt="Weather Icon" width="40" height="40"> 
                <p id="temperature"></p> 
                <p id="description"></p> 
                <p id="wind-speed"></p> 
            </div> 
        </div> 
    </div> 
    <script src= 
"https://code.jquery.com/jquery-3.6.0.min.js"> 
    </script> 
    <script src= 
"https://momentjs.com/downloads/moment.min.js"> 
    </script> 
    <script src="WeatherApp.js"></script> 
</body> 
 
</html>