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
    <div id="about" class="card-about">
      <div  class="title-about">About Us</div>
      <article class="article-about">We Create Websites to Help People Buy Bus Tickets Online.</article>
      <img class="img-arrow" src="{{asset('image/arow-down.png')}}"> 
      <div><a class="to-about" href={{route('about')}}>ABOUT</a></div>
    </div>
    <div id="buy" class="card-buy">
      <div  class="title-buy">Buy</div>
      <article class="article-buy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis incidunt alias vitae reprehenderit asperiores quibusdam consequuntur, eveniet dolorum, quas nihil illo repudiandae ipsum aliquid corporis voluptatum iusto excepturi voluptate ab?</article>
      <img class="img-arrow" src="{{asset('image/arow-down.png')}}">
      <div class="car-buy-form">
        <form action="" method="post">
            <ul>
                <li>Tujuan : 
                    <select>

                    </select>
                </li>
                <li>Jam Keberangkatan : 
                    <select>
                        
                    </select>
                </li>
                <li>Kelas & Harga: 
                    <select>
                        
                    </select>
                </li>
                <li>Booking Date : <input type="date"></li>
                <li>Quantity : <input type="text"></li>
                <li>Total Price : <input type="text" readonly></li>
            </ul>   
        </form>
    </div>
    <table>
      <tr>
        <td></td>
      </tr>
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