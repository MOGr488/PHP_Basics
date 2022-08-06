<?php
// عامل التحقق Null
// isset() no more ! 
// $name = "Salim";
// $email = "Salim@example.com";

$result = $name ?? $email ?? "Empty";

echo $result;


?>