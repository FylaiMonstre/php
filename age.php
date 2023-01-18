<?php
if(isset($_POST['submit']))
{
    $age = intval($_POST['age']); 
    $sexe = $_POST['sexe'];
    if($age >= 50 && $sexe == 'gars')
    {
        echo ' Va à lepad + prostate + ratio';
    }
    else if($age >= 50 && $sexe == 'fille')
    {
        echo ' Va à lepad + prostate + ewww + ratio';
    }
    else if ($age >= 18)
    {
        echo 'très bien vous êtes majeur(e)s';
    }
    else if ($age >= 12)
    {
        echo 'Vous pouvez aller à l\église';
    }
    else
    {
        echo 'Vous êtes trop jeune !!!';
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verif age</title>
</head>
<body>
    <form action="" name="age" method="POST">
        <input type="text" name="age" placeholder="votre age"/>
        <select name="sexe">
            <option value="gars">gars</option>
            <option value="fille">fille</option>
        </select>
        <button type="submit" name="submit">Verifier</button>
    </form>
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $age = intval($_POST['age']); 
    $sexe = $_POST['sexe'];
    if($age >= 50 && $sexe == 'gars')
    {
        echo ' Va à lepad + prostate + ratio';
    }
    else if($age >= 50 && $sexe == 'fille')
    {
        echo ' Va à lepad + prostate + ewww + ratio';
    }
    else if ($age >= 18)
    {
        echo 'très bien vous êtes majeur(e)s';
    }
    else if ($age >= 12)
    {
        echo 'Vous pouvez aller à l\église';
    }
    else
    {
        echo 'Vous êtes trop jeune !!!';
    }
}
?>