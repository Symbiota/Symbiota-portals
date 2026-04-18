<?php
include_once('../../../config/symbini.php');
include_once($SERVER_ROOT.'/classes/RpcOccurrenceEditor.php');
header('Content-Type: application/json; charset='.$CHARSET);

<<<<<<< HEAD
$term = $_POST['term'];

$searchManager = new RpcOccurrenceEditor();
$retArr = $searchManager->getPaleoGtsParents($term);

=======
$term = isset($_POST['term']) ? $_POST['term'] : '';

$retArr = array();
if($term){
	$searchManager = new RpcOccurrenceEditor();
	$retArr = $searchManager->getPaleoGtsParents($term);
}
>>>>>>> origin
echo json_encode($retArr);
?>