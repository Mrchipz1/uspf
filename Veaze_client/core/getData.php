<?php
if(!Session::exists('id')){

 Redirect::to('login.html');
}

$db = new DB;
$id=session::get('id');
$A = $db->get('veaze_users',array('id','=',$id));

$data=$A->results();

//print_r($data);
//Select *  from transactions where bvn_id=4
 $TR= $db->action('SELECT *','transaction',array('user_id','=',$id));
 $request=$TR->count();
 $Transactions=$TR->results();
//echo count($Transactions);
