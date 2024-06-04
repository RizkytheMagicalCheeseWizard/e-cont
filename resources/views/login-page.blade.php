<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{asset('css/login.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="login-wrapper">
  <div class="login-card-switch">
    <label class="login-switch">
      <input type="checkbox" class="login-toggle">
      <span class="login-slider"></span>
      <span class="login-card-side"></span>
      <div class="login-flip-card__inner">
        <div class="login-flip-card__front">
          <div class="login-title">Log in</div>
          <form class="login-flip-card__form" action="" method="post">
            <input class="login-flip-card__input" name="Email" placeholder="Email" type="email" required>
            <input class="login-flip-card__input" name="password" placeholder="Password" type="password" required>
            <button class="login-flip-card__btn">Let`s go!</button>
          </form>
        </div>
        <div class="login-flip-card__back">
          <div class="login-title">Sign up</div>
          <form class="login-flip-card__form" action="" method="post">
            <input class="login-flip-card__input" name="email" placeholder="Email" type="email" required>
            <input class="login-flip-card__input" name="name" placeholder="Name" type="text" required>
            <input class="login-flip-card__input" name="password" placeholder="Password" type="password" required>
            <input class="login-flip-card__input" name="confirm_password" placeholder="Confirm Password" type="password" required>
            <button class="login-flip-card__btn">Confirm!</button>
          </form>
        </div>
      </div>
    </label>
  </div>
</div>
</body>
</html>