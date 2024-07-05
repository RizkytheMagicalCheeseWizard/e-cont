<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <link href="{{ asset('css/about.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <x-navbar></x-navbar>
    <div class="container">
        <div class="flex-to-center">
            <div class="wrapper-gradient-border-radius">
                <div><img class="img" src="{{ asset('image/pan.jpg') }}"></div>
                <div class="name">Pandu Adi</div>
                <div class="social-transition">
                    <div><a href="https://www.instagram.com/panduakw_/"><img>@Pandu</a></div>
                    <div><a href="https://github.com/PappaIkan"><img>PappaIkan</a></div>
                </div>
            </div>
            <div class="wrapper-gradient-border-radius">
                <div><img class="img" src="{{ asset('image/rizk.jpg') }}"></div>
                <div class="name">Rizky Maulana</div>
                <div class="social-transition">
                    <div><a href="https://www.instagram.com/rzky._mauln/"><img>@Rizky</a></div>
                    <div><a href="https://github.com/RizkytheMagicalCheeseWizard"><img>RizkyTheMagicalCheeseWizard</a>
                    </div>
                </div>
            </div>
            <div class="wrapper-gradient-border-radius">
                <div><img class="img" src="{{ asset('image/shul.jpg') }}"></div>
                <div class="name">Sulthon Kaffah</div>
                <div class="social-transition">
                    <div><a href="https://www.instagram.com/sulthonkaf/"><img>@Sulthon</a></div>
                    <div><a href="https://github.com/MenDev17"><img>Sulthon</a></div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
