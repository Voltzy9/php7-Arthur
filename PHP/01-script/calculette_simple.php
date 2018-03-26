<?php
if (count($argv)==4){
  $cara1 = $argv[1];
  $cara2 = $argv[2];
  $cara3 = $argv[3];
  if (is_numeric($cara1) && is_numeric($cara3)){
    switch($cara2){
      case '+':
          print 'Vous voulez additioner ' .$cara1. ' et '.$cara3  . "\"\n";
          $result = $cara1 + $cara3 ;
          print "Le résultat de l'addition est ".$result;
          break;
      case '-':
          print 'Vous voulez soustraire'.$cara1. ' et '.$cara3  . "\"\n";
          $result = $cara1 - $cara3 ;
          print 'Le resultats de la soustraction est '.$result;
          break;
      case'*':
          print 'Vous voulez multiplier'.$cara1. ' et '.$cara3  . "\"\n";
          $result = $cara1 * $cara3 ;
          print 'Le resultats de la multiplication est '.$result;
          break;
      case'/':
          if($cara1 != 0  &&   $cara3 != 0){
            print 'Vous voulez diviser'.$cara1. ' et '.$cara3  . "\"\n";
            $result = $cara1 / $cara3 ;
            print 'Le resultats de la division est '.$result;
            break;
          }
          elseif($cara1 == 0 ||   $cara3 == 0){
            echo "Impossible de diviser par 0";
            break;
          }
      default:
          print'Veuillez recommencer !!';
          break;
      }
    }
    else{
        print 'Argument non valide';
    }
  }
  else{
    print 'Trop de caractères';
  }
?>
