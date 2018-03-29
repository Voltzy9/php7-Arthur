<?php
class AR
{
    public $name;
    public $damage;
    public $rarete;


}

$ScarOr = new AR();
$ScarOr-> name = "Scar";
$ScarOr-> damage = 35;
$ScarOr-> rarete = "OR";

$M4 = new AR();
$M4-> name = "M4";
$M4-> damage = 33;
$M4-> rarete = "bleu";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Différentes AR</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Differentes AR</h1>
                <pre>
                    <?php
                    echo '</br> tu as trouve une ', $ScarOr->name,' de couleur ',$ScarOr->rarete,' qui fait ',$ScarOr->damage, " de  dégats \n";
                    echo 'tu as trouve une ', $M4->name,' de couleur ',$M4->rarete,' qui fait ',$M4->damage, " de  dégats \n";
                    ?>
                </pre>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Bootstrap 2018</p>
    </footer>
</body>
</html>
