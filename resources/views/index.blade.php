<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
</head>
<body>
    <header>
        <div class="hero">
            <nav>
                <h2 class="logo">DISKOPINDAG MALANG</h2>
                <ul>
                <a href="login"><button type="button">Masuk</button></a>
                    <li><a href="">Tentang Kami</a></li>
                    <li><a href="">Bantuan</a></li>
                </ul>
            </nav>
            <div class="landing page">
               <div>
                   <div class="teks1">
                        <p>DAFTAR USAHA CUKUP</p>
                        <p>DENGAN SATU KLIK SAJA</p>
                    </div>
                    <br>
                    <br>
                    <div class="teks2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ante interdum nam tincidunt suspendisse tincidunt.</p>
                    </div>
                    <br>
                    <br>
                    <button type="button">DAFTAR</button>
               </div>
               <div>
                    <img src="{{ ('images/Group 1507.svg') }}" width="800px">
               </div>
            </div>
    </header>
    <footer>
        <img src="{{ ('images/Group 1506.svg') }}">
    </footer>
</body>
</html>