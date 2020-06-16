<?PHP
include "../Back-end/entities/livraison.php";
include "../Back-end/core/livraisonC.php";
if (isset($_GET['idlivraison'])){
  $LivraisonC=new LivraisonC();
    $result=$LivraisonC->recupererlivraison($_GET['idlivraison']);

if (isset($_POST['modifier'])){
  $Livraison=new Livraison($_POST['idlivraison'],$_POST['nbr'],$_POST['adressel'],$_POST['numfacture'],$_POST['idlivreur'],$_POST['message']);
  $LivraisonC->modifierlivraison($Livraison,$_POST['idlivraison']);
  header('Location:page-invoice1.php');
  exit;
}
?>
