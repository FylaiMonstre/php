<?php
function calculVolume($rayon,$hauteur)
{
    $volume = $rayon*$rayon*3.14*$hauteur*(1/3);
    return $volume;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcul volume cône</title>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        echo 'le volume du cone est de ';
        echo calculVolume($_POST['rayon'],$_POST['hauteur']);
        echo 'cm<sup>3</sup>' ;
    }
    ?>
    <form action="" method="POST">
        <label for="rayon">rayon :</label>
        <input type="text" name="rayon" value="<?php if(isset($_POST['rayon'])) echo $_POST['rayon']; ?>" />
        <br/>
        <label for="hauteur">hauteur :</label>
        <input type="text" name="hauteur" value="<?php if(isset($_POST['hauteur'])) echo $_POST['hauteur']; ?>"/>
        <br/>
        <button type="submit" name="submit">Calculer</button>
    </form>
</body>
</html>