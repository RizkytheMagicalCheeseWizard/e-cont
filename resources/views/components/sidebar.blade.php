<link href="{{asset('css/sidebar.css')}}" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Lilita+One&family=Quicksand:wght@500&display=swap" rel="stylesheet">

<div id="mySidebar" class="sidebar">
    <a href="{{route('admin')}}" class="text-bar">Dashboard</a>
    <a href="{{route('admin.schedule')}}" class="text-bar">Schedule</a>
    <a href="{{route('admin.ticket')}}" class="text-bar">Type Ticket</a>
    <a href="{{route('admin.client')}}" class="text-bar">Client</a>
    <form action={{route('logout')}} method="POST">
        @csrf
        <button class="btn_logout">Log Out</button>
    </form>
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
