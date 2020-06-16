	<?PHP
include "../Back-end/core/LivreurC.php";
session_start();
if(!isset($_SESSION["id"]))
{
	header("Location:login.php");
}
$Livreur1C=new LivreurC();
$listelivreur=$Livreur1C->afficherlivreur();
 
?>