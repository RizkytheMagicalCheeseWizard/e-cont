<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('css/landing.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <x-navbar></x-navbar>
    
    <section class="text-animation-section">
        <div id="about" class="animated-title">
            <div class="text-top">
                <div>
                    <span>We Create Websites to Help</span>
                    <span>People Buy Bus Tickets Online</span>
                </div>
            </div>
            <div class="text-bottom">
                <div>About US</div>
            </div>
        </div>
        <section class="about-to-section">
            <img class="img-arrow" src="{{asset('image/arow-down.png')}}"> 
            <div><a class="to-about" href="{{route('about')}}">ABOUT</a></div>
        </section>
    </section>


    <div id="buy" class="card-buy">
        <div class="title-buy">Buy</div>
        <article class="article-buy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis incidunt alias vitae reprehenderit asperiores quibusdam consequuntur, eveniet dolorum, quas nihil illo repudiandae ipsum aliquid corporis voluptatum iusto excepturi voluptate ab?</article>
        <img class="img-arrow" src="{{asset('image/arow-down.png')}}">
        <div class="car-buy-form">
            <form action="" method="post">
                <ul>
                    <li>Tujuan : 
                        <select>
                            @foreach ($data_schedule as $schedule)
                                <option value="{{$schedule->id}}">{{$schedule->city}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li>Jam Keberangkatan : 
                        <select>
                            @foreach ($data_schedule as $schedule)
                                <option value="{{$schedule->id}}">{{$schedule->jam_keberangkatan}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li>Kelas & Harga: 
                        <select>
                            @foreach ($data_type as $type_ticket)
                                <option value="{{$type_ticket->id}}">{{$type_ticket->class}} & Rp.{{number_format($type_ticket->price,2,'.',',')}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li>Booking Date : <input type="date"></li>
                    <li>Quantity : <input type="text"></li>
                    <li>Total Price : <input type="text" readonly></li>
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
