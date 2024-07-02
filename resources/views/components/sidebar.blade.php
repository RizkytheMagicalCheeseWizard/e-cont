<link href="{{asset('css/sidebar.css')}}" rel="stylesheet" type="text/css">

<div id="mySidebar" class="sidebar">
    <a href="/admin" class="text-bar">Dashboard</a>
    <a href="/schedule" class="text-bar">Schedule</a>
    <a href="/client" class="text-bar">Client</a>
    <a href="#" class="text-bar">Log Out</a>
</div>
<div id="main">
    <button class="button_sidebar" id="toggleButton" style="font-size:20px" onclick="toggleNav()">☰</button>
</div>
<script>
    function toggleNav() {
        var sidebar = document.getElementById("mySidebar");
        var main = document.getElementById("main");
        var toggleButton = document.getElementById("toggleButton");
        if (sidebar.style.width === "180px") {
            sidebar.style.width = "0";
            sidebar.style.visibility = "hidden";
            main.style.marginLeft = "0";
            toggleButton.innerHTML = "☰";
        } else {
            sidebar.style.width = "180px";
            sidebar.style.visibility = "visible";
            main.style.marginLeft = "180px";
            toggleButton.innerHTML = "×";
        }
    }
    // Initialize sidebar to hidden state on page load
    document.addEventListener("DOMContentLoaded", function() {
        var sidebar = document.getElementById("mySidebar");
        var main = document.getElementById("main");
        var toggleButton = document.getElementById("toggleButton");
        sidebar.style.width = "0";
        sidebar.style.visibility = "hidden";
        main.style.marginLeft = "0";
        toggleButton.innerHTML = "☰";
    });
</script>
