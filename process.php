<html> 

<head> </head> 
<body> 
<h1> Results </h1>

<?php 
$days = $_POST["campingdays"]; 
$people = $_POST["numberofpeople"]; 

$vegetables = $days*$people*4; 
$cereal = $days*$people*8; 
echo $days;
echo $people;
echo $vegetables;
?>

<h2> Perishable Foods </h2>
<table>
	<tr> <th>catagory </th> <th>servings needed</th> </tr>
	<tr> <td>Vegetables</td> <td> <?php echo $vegetables ?> </td> </tr>
</table> <br>

<h2> Non-Perishable Foods </h2>
<table>
	<tr> <th>catagory </th> <th>servings needed</th> </tr>
	<tr> <td>Cereal</td> <td>  <?php echo $cereal ?> </td> </tr>
</table>

</body> 

</html>