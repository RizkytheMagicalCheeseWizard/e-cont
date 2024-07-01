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
    <div class="card-about">
      <div id="about">About Us</div>
      <article class="article-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci illum nulla rem debitis doloremque distinctio perspiciatis totam cupiditate molestiae, dolorum quibusdam tenetur quo impedit odio suscipit delectus placeat! Itaque, debitis.</article>
      <img class="img-arrow" src="{{asset('image/arow-down.png')}}"> 
      <div><a class="to-about" href={{route('about')}}>ABOUT</a></div>
    </div>
    <div class="card-buy">
      <div id="buy">Buy</div>
      <article class="article-buy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis incidunt alias vitae reprehenderit asperiores quibusdam consequuntur, eveniet dolorum, quas nihil illo repudiandae ipsum aliquid corporis voluptatum iusto excepturi voluptate ab?</article>
      <img class="img-arrow" src="{{asset('image/arow-down.png')}}">
      <div><a class="buy-btn" href={{route('buy')}}><img class="bus-icon" src="{{asset('image/bus.png')}}"></a></div>  
    </div>
    <footer>
      <div class="left-side">
        <div class="">E-Cont</div>
        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sunt unde consequatur dolor amet, nostrum, fugit ex, repellat expedita dolores consequuntur necessitatibus ut quia. Cupiditate voluptatem odit tenetur amet at.</div>
      </div>
      <div class="right-side">
        <div class=""></div>
      </div>
      
      
    </footer> 
</body>
</html>