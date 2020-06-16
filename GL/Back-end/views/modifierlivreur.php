<?PHP
include "../Back-end/entities/livreur.php";
include "../Back-end/core/livreurC.php";
if (isset($_GET['idlivreur'])){
	$LivreurC=new LivreurC();
    $result=$LivreurC->recupererlivreur($_GET['idlivreur']);
	
	
	if (isset($_POST['modifier'])){
	$Livr=new Livr($_POST['idlivreur'],$_POST['nom'],$_POST['prenom'],$_POST['disp'],$_POST['remarque']);
	$LivreurC->modifierlivreur($Livr,$_POST['idlivreur']);
	echo $_POST['idlivreur'];	
	header('Location: afficherlivreur.php');
		exit;
}
?> 
