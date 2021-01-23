<!DOCTYPE html>
<html>
<head>
    <title>Demo Cek Lokasi Geolocation HTML5</title>
</head>
 
<body>
<center>
<p>Cek lokasi anda! >> <button onclick="getLocation()">Cek</button></p>
 
 
<p id="tampilkan"></p>
</center>
<script>
var view = document.getElementById("tampilkan");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
    }
}
 function showPosition(position) {
    view.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
 }
</script>
</body>
</html>