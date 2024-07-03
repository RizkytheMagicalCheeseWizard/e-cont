<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('css/landing.css')}}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Lilita+One&family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <x-navbar></x-navbar>
    
    <section class="text-animation-section">
        <div id="about" class="animated-title">
            <div class="text-top">
                <div>
                    <span>We Create Websites to Help</span>
                    <span>People Buy Bus Tickets  Online</span>
                    <span>Book Bus Tickets Anytime, Anywhere</span>
                </div>
            </div>
            <div class="text-bottom">
                <div>Want to Buy Bus Tickets Without Waiting?</div>
                
            </div>
        </div>
    </section>


    <div id="buy" class="card-buy">
        <article class="article-buy">Enjoy the convenience of booking bus tickets from wherever you are. </article>
        <article class="article-buy">It’s quick and simple.</article>
        <img class="img-arrow" src="{{asset('image/arow-down.png')}}">
        <div class="card-buy-form">
            <div class="title-buy">T i c k e t B u s</div>
            <form action="{{route('booking')}}" method="post" class="form-buy">
                @csrf
                <ul>
                    <li class="form-group">
                        <label for="">City :</label> 
                        <select>
                            @foreach ($data_schedule as $schedule)
                                <option value="{{$schedule->id}}">{{$schedule->city}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="form-group">
                        <label for="">Departure Time : </label>
                        <select>
                            @foreach ($data_schedule as $schedule)
                                <option value="{{$schedule->id}}">{{$schedule->jam_keberangkatan}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="form-group">
                        <label for="">Class & Price:</label> 
                        <select>
                            @foreach ($data_type as $type_ticket)
                                <option value="{{$type_ticket->id}}">{{$type_ticket->class}} & Rp.{{number_format($type_ticket->price,2,'.',',')}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="form-group">
                        <label for="">Booking Date:</label> 
                        <input type="date">
                    </li>
                    <li class="form-group">
                        <label for="">Quantity:</label> 
                        <input type="text"></li>
                    <li class="form-group">
                        <label for="">Total Price:</label> 
                        <input type="text" readonly>
                    </li>
                    <li>
                        <button class="button-buy">Buy</button>
                    </li>
                </ul>   
            </form>
        </div>
    </div>

    <footer>
        <div class="left-side">
            <div class="">E-Cont</div>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sunt unde consequatur dolor amet, nostrum, fugit ex, repellat expedita dolores consequuntur necessitatibus ut quia. Cupiditate voluptatem odit tenetur amet at.</div>
        </div>
        <div class="center-side">
            <div class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum cupiditate quam totam, atque quae harum sit suscipit nostrum consequatur dolor, aliquam veniam, provident necessitatibus nesciunt? Nisi modi assumenda ex numquam!</div>
        </div>
        <div class="github-link">
            <div></div>
        </div>
    </footer> 
</body>
</html>
