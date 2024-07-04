<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-CONT</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <footer>
    <div><a href="/" class="landing-title">E-CONT</a></div>
    <ul>
      <li><a href="{{route('about')}}">About</a></li>
      <li><a href="/#buy">Buy</a></li>
      <li><a href="/#contact">Contact</a></li>
      <li>
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button class="btn_logout">Log Out</button>
        </form>
      </li>
    </ul>
  </footer>
</body>
</html>
