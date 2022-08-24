<!DOCTYPE html>
<html>
<head>
    <title>Desktop Building Decision Support System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>



<body>
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
<button class="w3-bar-item w3-button w3-large"
  onclick="sidebar_close()">Close &times;</button>
  <a href="{{ route('cpu.index') }}" class="w3-bar-item w3-button">CPU</a>
  <a href="{{ route('motherboard.index') }}" class="w3-bar-item w3-button">Motherboard</a>
  <a href="{{ route('ram.index') }}" class="w3-bar-item w3-button">RAM</a>
  <a href="{{ route('casing.index') }}" class="w3-bar-item w3-button">Casing</a>
  <a href="{{ route('psu.index') }}" class="w3-bar-item w3-button">Power Supply</a>
  <a href="{{ route('storage.index') }}" class="w3-bar-item w3-button">Storage</a>
  <a href="{{ route('gpu.index') }}" class="w3-bar-item w3-button">Graphics Card</a>
</div>

<button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="sidebar_open()">&#9776;</button>
<div id="main">
<div class="container">
    @yield('content')
</div>
</div>
<script>
function sidebar_open() {
  document.getElementById("main").style.marginLeft = "15%";
  document.getElementById("mySidebar").style.width = "15%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function sidebar_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
    
</body>
</html>