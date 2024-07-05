<link href="{{asset('css/navbar.css')}}" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Lilita+One&family=Quicksand:wght@500&display=swap" rel="stylesheet">    
    <nav>
        <div><a href="/" class="landing-title">E-CONT</a></div>
        <ul>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="/#buy">Buy</a></li>
            <li><a href="https://github.com/RizkytheMagicalCheeseWizard/e-cont">Source</a></li>
            <li>
                <form action={{route('logout')}} method="POST">
                    @csrf
                    <button class="btn_logout">Log Out</button>
                </form>
            </li>
        </ul>
    </nav>