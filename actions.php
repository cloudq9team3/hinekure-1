<?php
$m = new MongoClient('mongodb://localhost:11111');
$cursor = $m->tem->users->find(array('name' => 'hinekure'));
$result = $cursor->getNext();
echo json_encode($result);
?>
