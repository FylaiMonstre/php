<?php


session_start();
function genererToken()
{
    $token = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN';
    $longueur = rand(13,20);
    $ch = '';
    for($i=0;$i<$longueur;$i++)
    {
        $ch.= $token[rand(0,strlen($token)-1)];
    }
    return $ch;
}
$_SESSION['token'] = genererToken();

//$login = 'admin';
$login = ['admin','gerald','joseph'];
//$password = 'ratio';
$password = array('admin1','admin2','admin3','admin4');
$tableau_multi = array(
    array('prenom' => 'joseph','nom' => 'Larregain','mensuration' => array('taille' => 186,'poids' => 150)),
    array('prenom' => 'geoffrey','nom' => 'Praud','mensuration' => array('taille' => 176,'poids' => 140))
);

$i=0;
while($i < count($login))
{
    echo $login[$i];
    $i++;
}
for($i=0;$i<count($login);$i++)
{
    echo $login[$i];
}



if(isset($_POST['submit']))
{
    //empty() method qui renvoie un booléen ; ! renvoie l'inverse
    if(!empty($_POST['login'])&& !empty($_POST['password']))
    {
        //verif login et password correspondent
        if((in_array($_POST['login'],$login)) && (in_array($_POST['password'],$password)))
        {
            setcookie('login',$_POST['login'],(time()+3600));
            setcookie('password',$_POST['password'],(time()+3600));
            header('location:membres.php?tok='.$_SESSION['token']);
            //echo 'vous êtes connecté';
        }
        else 
        {
            if(!in_array($_POST['login'],$login))
            {
                echo 'incorrect login';
            }
            if(!in_array($_POST['password'],$password))
            {
                echo 'password incorrect';
            }
        }
    }
    else
    {
        echo 'vous etes ';
    }
}
?>
<html>
    <head>
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
        <form action="" method="post" name="connect">
            <label for="login">Login :</label>
            <input type="text" name="login">
            <br/>
            <label for="password">Mot de passe:</label>
            <input type="text" name="password">
            <br/>
            <button type="submit" name="submit">Se connecter</button>
        </form>
    </body>
</html>