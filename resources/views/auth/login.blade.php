<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('css/auth.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="wrapper">
        <div class="card-switch">
            <div class="flip-card__inner">
              <div class="flip-card__front">
                <div class="title">Log in</div>
                <form class="flip-card__form" action="{{route('login')}}" method="POST">
                    @csrf
                  <input class="flip-card__input" name="email" placeholder="Email" type="email">
                  @error('email')
                      <p class="error-message">{{$message}}</p>
                  @enderror
                  <input class="flip-card__input" name="password" placeholder="Password" type="password">
                  @error('password')
                      <p class="error-message">{{$message}}</p>
                  @enderror
                  <button class="flip-card__btn">Let`s go!</button>
                </form>
              </div>
              {{-- <div class="flip-card__back">
                <div class="title">Sign up</div>
                <form class="flip-card__form" action="">
                  <input class="flip-card__input" placeholder="Name" type="name">
                  <input class="flip-card__input" name="email" placeholder="Email" type="email">
                  <input class="flip-card__input" name="password" placeholder="Password" type="password">
                  <button class="flip-card__btn">Confirm!</button>
                </form>
              </div> --}}
            </div>
        </div>
      </div>
</body>
</html>