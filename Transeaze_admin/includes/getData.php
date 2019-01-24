<?php

if (!Session::exists('id')) {
    Redirect::to('login-log.html');
}

$db = new DB;
$id = session::get('id');

$A = $db->get('users', array('id', '=', $id));

$data = $A->results();

$sql = 'SELECT * FROM transe_transactions INNER JOIN  users on transe_transactions.user_id = users.id WHERE users.privileged= ?';
//$TR= $db->action('SELECT *','transe_transaction',array('user_id','=',$id));
$TR = $db->query($sql, array($id));
$Transactions = $TR->results();

$totaltransaction = $TR->count();
$TU = $db->action('SELECT *', 'users', array('privileged', '=', $id));
$TotalUser = $TU->count();
$sqll = "SELECT SUM(amount) as amount FROM transe_transactions inner join  users on users.id=transe_transactions.user_id WHERE users.PRIVILEGEd = ? AND transe_transactions.status = 'processed' ";
$TI = $db->query($sqll, array($id));
$Totalincome = $TI->results();

//$request=$TR->count();
//print_r($Transactions=$TR->results());
//echo count($Transactions);

?>
