
<?php

$joueur = [
     'jeux' => 'Fornite',
    'name' => 'Voltzy_',
    'kda' => 2,
    'score' => true,

 ];

if($joueur['score'] === true)
{
 print 'Le joueur '.$joueur['name'];
 print "  a fait Top 1 avec ". $joueur['kda'] . " de kda.\n";
 print 'Sur : "' . $joueur['jeux'] . "\"\n";
}
?>
