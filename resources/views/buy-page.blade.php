<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('css/buy.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <x-navbar></x-navbar>
    <div>
        <form action="" method="post">
            <ul>
                <li>Tujuan : 
                    <select>
                        <option>Wonogiri</option>
                        <option>Semarang</option>
                        <option>Purbanlingga</option>
                        <option>Blora</option>
                        <option>Cilacap</option>
                        <option>Gunung Kidul</option>
                        <option>Brebes</option>
                        <option>Banjarnegara</option>
                        <option>Karanganyar</option>
                        <option>Sragen</option>
                        <option>Grobogan</option>
                        <option>Tegal</option>
                        <option>Surakarta</option>
                    </select>
                </li>
                <li>Jam Keberangkatan : 
                    <select>
                        <option>10.00</option>
                        <option>13.00</option>
                        <option>16.00</option>
                        <option>19.00</option>
                        <option>21.00</option>
                    </select>
                </li>
                <li>Kelas & Harga: 
                    <select>
                        <option>Ekonomi Rp.150.000</option>
                        <option>Bisnis Rp.250.000</option>
                        <option>VIP Rp.350.000</option>
                        <option>Eksekutif Rp.500.000</option>
                    </select>
                </li>
                <li>Quantity : <input type="text">
                </li>
                <li>Total Price : <input type="text" readonly></li>
                <li>Booking Date : <input type="date"></li>
            </ul>   
        </form>
    </div>
</body>
</html>