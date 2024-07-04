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
    <script src="{{asset('js/landing.js')}}"></script>
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
                        <label for="schedule_city">City & Time:</label> 
                        <select required name="jadwal_id">
                                <option value="" disabled selected>Select City & Departure Time</option>
                            @foreach ($data_schedule as $schedule)
                                <option value="{{$schedule->id}}">{{$schedule->city}} & {{$schedule->jam_keberangkatan}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="form-group">
                        <label for="type_class&price">Class & Price:</label> 
                        <select required name="type_ticket_id">
                                <option value="" disabled selected>Select Class & Price</option>
                            @foreach ($data_type as $type_ticket)
                                <option value="{{$type_ticket->id}}" data-price = "{{$type_ticket->price}}">{{$type_ticket->class}} & Rp.{{number_format($type_ticket->price,2,'.',',')}}</option>
                            @endforeach
                        </select>
                    </li>
                    <li class="form-group">
                        <label for="booking_date">Booking Date:</label> 
                        <input type="date" required name="booking_date" min="{{\Carbon\Carbon::tomorrow()->toDateString()}}">
                    </li>
                    <li class="form-group">
                        <label for="quantity">Quantity:</label> 
                        <input type="text" required name="quantity"></li>
                    <li>
                        <button type="submit" class="button-buy">Buy</button>
                    </li>
                </ul>   
            </form>
        </div>
    </div>
    <div class="card-table">
        <div class="title-table-booking">B o o k i ng L i s t</div>
        <table class="table-booking">
            <tr>
                <td>ID</td>
                <td>City & Departure Time</td>
                <td>Class & Price</td>
                <td>Account</td>
                <td>Quantity</td>
                <td>Total Price</td>
                <td>Booking Date</td>
                <td>Action</td>
            </tr>
                @foreach ($data_booking as $booking)
            <tr>
                    <td>{{$booking->id}}</td>
                    <td>{{$booking->schedule->city}} & {{$booking->schedule->jam_keberangkatan}}</td>
                    <td>{{$booking->typeticket->class}} & Rp.{{number_format($booking->typeticket->price)}}</td>
                    <td>{{$booking->user->email}}</td>
                    <td>{{$booking->quantity}}</td>
                    <td>Rp.{{number_format($booking->total_price)}}</td>
                    <td>{{$booking->booking_date}}</td>
                    <td>
                        <a class="button-reschedule" href="{{route('reschedule',$booking->id)}}">Reschedule</a>
                    </td>
            </tr>
                @endforeach
            
        </table>
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
