<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('css/about.css') }}" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Lilita+One&family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
            color: black;
            transition: .5s;
        }
        a:hover{
            color: blue
        }
    </style>
</head>

<body>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="flex-to-center">
            <div class="wrapper-gradient-border-radius">
                <div><img class="img" src="{{ asset('image/pan.jpg') }}"></div>
                <div class="name">Pandu Adi</div>
                <div class="social-transition">
                    <div><a href="https://www.instagram.com/panduakw_/"><img>@panduakw_</a></div>
                    <div><a href="https://github.com/PappaIkan"><img>PappaIkan</a></div>
                </div>
            </div>
            <div class="wrapper-gradient-border-radius">
                <div><img class="img" src="{{ asset('image/rizk.jpg') }}"></div>
                <div class="name">Rizky Maulana</div>
                <div class="social-transition">
                    <div><a href="https://www.instagram.com/rzky._mauln/"><img>@rzky._mauln</a></div>
                    <div><a href="https://github.com/RizkytheMagicalCheeseWizard"><img>RizkyTheMagicalCheeseWizard</a>
                    </div>
                </div>
            </div>
            <div class="wrapper-gradient-border-radius">
                <div><img class="img" src="{{ asset('image/shul.jpg') }}"></div>
                <div class="name">Sulthon Kaffah</div>
                <div class="social-transition">
                    <div><a href="https://www.instagram.com/sulthonkaf/"><img>@sulthonkaf</a></div>
                    <div><a href="https://github.com/MenDev17"><img>MenDev17</a></div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
