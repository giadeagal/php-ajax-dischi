<?php 

include "db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 Jazz Albums of All Time</title>
</head>
<body>

<?php foreach ($albums as $album) {?>
    <img src="<?php echo $album['poster']?>" alt="<?php echo $album['title'] ?>">
<?php } ?>
</body>
</html>