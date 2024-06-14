<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('css/about.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <x-navbar></x-navbar>
    <div class="flex-to-center">
        <div class="wrapper-gradient-border-radius">
            <div class="img"><img></div>
            <div class="name">Pandu Adi</div>
            <div class="social-transition">
                <div><a href=""><img>@Pandu</a></div>
                <div><a href=""><img>PappaIkan</a></div>
            </div>
        </div>
        <div class="wrapper-gradient-border-radius">
            <div class="img"><img></div>
            <div class="name">Rizky Maulana</div>
            <div class="social-transition">
                <div><a href=""><img>@Rizky</a></div>
                <div><a href=""><img>RizkyTheMagicalCheeseWizard</a></div>
            </div>
        </div>
        <div class="wrapper-gradient-border-radius">
            <div class="img"><img></div>
            <div class="name">Sulthon Kaffah</div>
            <div class="social-transition">
                <div><a href=""><img>@Sulthon</a></div>
                <div><a href=""><img src="" alt="">Sulthon</a></div>
            </div>
        </div>
    </div>
</body>
</html>