<link href="{{asset('css/navbar.css')}}" rel="stylesheet" type="text/css">    
    <nav>
        <div><a href="/" class="landing-title">E-CONT</a></div>
        <ul>
            <li><a href="/#about">About</a></li>
            <li><a href="/#buy">Buy</a></li>
            <li><a href="/#contact">Contact</a></li>
            <li>
                <form action={{route('logout')}} method="POST">
                    @csrf
                    <button class="btn_logout">Log Out</button>
                </form>
            </li>
        </ul>
    </nav>