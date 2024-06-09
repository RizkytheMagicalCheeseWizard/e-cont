<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{env('APP_NAME')}}</title>
  <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="wrapper">
  <div class="card-switch">
    <label class="switch">
      <input type="checkbox" class="toggle">
      <span class="slider"></span>
      <span class="card-side"></span>
      <div class="flip-card__inner">
        <div class="flip-card__front">
          <div class="title">Log in</div>
          <form class="flip-card__form" action="{{route('login')}}" method="POST">
            @csrf
            <input class="flip-card__input" name="email" placeholder="Email" type="email">
            <input class="flip-card__input" name="password" placeholder="Password" type="password">
            <button class="flip-card__btn">Let`s go!</button>
          </form>
        </div>
        <div class="flip-card__back">
          <div class="title">Sign up</div>
          <form class="flip-card__form" action="" method="POST">
            <input class="flip-card__input" placeholder="Name" type="name">
            <input class="flip-card__input" name="email" placeholder="Email" type="email">
            <input class="flip-card__input" name="password" placeholder="Password" type="password">
            <input class="flip-card__input" name="confirm_password" placeholder="Confirm Password" type="password">
            <button class="flip-card__btn">Confirm!</button>
          </form>
        </div>
      </div>
    </label>
  </div>
</div>
</body>
</html>