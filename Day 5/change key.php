  
<?php
$a = array(
	'Name' => "Janvi MPatel",
	'Usr_Name' => "Janvi@29",
	'Mobile' => 9723062114,
	'Address' => "Patanjali Tenament 2",
	'Task' => "Array Operations",
);
echo "<pre> Before: A ";
print_r($a);
echo "<pre> After: A ";
print_r(array_change_key_case($a,CASE_UPPER));
?>
