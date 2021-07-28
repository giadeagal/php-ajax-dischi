<?php 

include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Top 10 Jazz Albums of All Time</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <a href="#">
        <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="">
    </a>
</header>

<main>

<div class="container">
    <div class="row justify-content-evenly">
    <?php foreach ($albums as $album) {?>
    <div class="card col-2 m-3" >
        <img src="<?php echo $album['poster']?>" class="card-img-top" alt="<?php echo $album['title'] ?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $album['title'] ?></h5>
            <ul class="card-text">
                <li>
                    <strong>Autore: </strong> <span><?php echo $album['author'] . ";"?></span>
                </li>
                <li>
                    <strong>Anno: </strong> <span><?php echo $album['year']?></span>
                </li>
            </ul>
        </div>
    </div>        
<?php } ?>
    </div>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>