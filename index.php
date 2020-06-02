<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
<?php
include_once 'klases.php';

//Sukuriu ojektus pagal klase
$straipsnis[1] = new Straipsnis ($info[1]['pav'], $info[1]['ant'], $info[1]['img'], $info[1]['txt']);
$straipsnis[2] = new Straipsnis ($info[2]['pav'], $info[2]['ant'], $info[2]['img'], $info[2]['txt']);
$straipsnis[3] = new Straipsnis ($info[3]['pav'], $info[3]['ant'], $info[3]['img'], $info[3]['txt']);

$straipsnis[1] = new Rubrika ($info[1]['pav'], $info[1]['ant'], $info[1]['img'], $info[1]['txt'], $info[1]['rub'], $info[1]['id']);
$straipsnis[2] = new Rubrika ($info[2]['pav'], $info[2]['ant'], $info[2]['img'], $info[2]['txt'], $info[2]['rub'], $info[2]['id']);
$straipsnis[3] = new Rubrika ($info[3]['pav'], $info[3]['ant'], $info[3]['img'], $info[3]['txt'], $info[3]['rub'], $info[3]['id']);

//Sukurtiems objektams pritaikau metodus

    if (isset($_GET["straipsnis"]))
    {
        foreach ($straipsnis as $str)
        {
            if ($_GET["straipsnis"]==$str->id)
            {
                $str->sugeneruoti();
            }
        }
    
    } else {
            foreach($straipsnis as $str)
            {
           $str->sugeneruotiTrumpa();
            }
    }
?>
        </body>
        <footer><h2>© 2020 Aušra Lidikevičiūtė</h2></footer>
</html>