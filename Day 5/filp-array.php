<?php
$a = array(
	'Name' => "Janvi M Patel",
	'Usr_Name' => "Janvi@29",
	'Mobile' => 9723062114,
	'Address' => "Patanjali tenament ",
	'Task' => "flip details",
);
echo "<pre>";
print_r($a);
echo "<pre> Flipped ";
print_r(array_flip($a));
?>
