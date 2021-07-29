
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Top 10 Jazz Albums of All Time</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="app">
<header>
    <a href="#">
        <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="">
    </a>
</header>

<main>

<div class="container">
    <div class="row justify-content-evenly">
    
    <div class="card col-2 m-3" v-for="album in albums">
        <img :src="album.poster" class="card-img-top" :alt="album.name">
        <div class="card-body">
            <h5 class="card-title">{{album.name}}</h5>
            <ul class="card-text">
                <li>
                    <strong>Autore: </strong> <span>{{album.author}}</span>
                </li>
                <li>
                    <strong>Anno: </strong> <span>{{album.year}}</span>
                </li>
            </ul>
        </div>
    </div>        

    </div>
</div>

</main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>