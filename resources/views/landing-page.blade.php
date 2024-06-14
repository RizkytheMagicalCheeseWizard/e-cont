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
    <div id="about">About Us</div>
    <article>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci illum nulla rem debitis doloremque distinctio perspiciatis totam cupiditate molestiae, dolorum quibusdam tenetur quo impedit odio suscipit delectus placeat! Itaque, debitis.</article>
    <a href={{route('about')}}>ABOUT</a>
    <div id="buy">Buy</div>
    <article>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis incidunt alias vitae reprehenderit asperiores quibusdam consequuntur, eveniet dolorum, quas nihil illo repudiandae ipsum aliquid corporis voluptatum iusto excepturi voluptate ab?</article>
    <a href={{route('buy')}}>BUY</a>
    <footer>
      <div id="contact">Contact</div>
        <section>
          <ul role="list" class="divide-y divide-gray-100">
            <li class="user-item">
              <div class="user-info">
                <img src="image/p.png" class="user-avatar">
                <div class="user-details">
                  <p class="user-name">Pandu</p>
                  <p class="user-email">pandu@gmail.com</p>
                </div>
              </div>
              <div class="user-status">
                <p class="user-title">MIAW</p>
              </div>
            </li>
          </ul>
          <ul role="list" class="divide-y divide-gray-100">
            <li class="user-item">
              <div class="user-info">
                <img src="image/r.png" class="user-avatar">
                <div class="user-details">
                  <p class="user-name">Rizky</p>
                  <p class="user-email">rizky@gmail.com</p>
                </div>
              </div>
              <div class="user-status">
                <p class="user-title">MIAW</p>
              </div>
            </li>
          </ul>
          <ul role="list" class="divide-y divide-gray-100">
            <li class="user-item">
              <div class="user-info">
                <img src="image/s.png" class="user-avatar">
                <div class="user-details">
                  <p class="user-name">Sulthon</p>
                  <p class="user-email">sulthon@gmail.com</p>
                </div>
              </div>
              <div class="user-status">
                <p class="user-title">MIAW</p>
              </div>
            </li>
          </ul>
        </section>
    </footer>
</body>
</html>