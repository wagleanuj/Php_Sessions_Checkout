
<?php
/*Student no:201511763
This program gets the items that were selected in the previous page from the session array. 
calculates the total amount and displays it in the page.
*/
session_start();
//display the html page
echo "<html><head><title>Check Out</title></head><body>";
echo'<h2 align="center">Checking Out</h2>';
echo'<table border="1" align="center"><th>Item</th><th>Quantity</th><th>Price</th><th>Amount</th>';
//if the webcount field in the session array is set, collect the value and calculate the total amount
if(isset($_SESSION["WebAppCount"])){
echo'<tr><td>Web Applications</td>';
echo'<td>'.$_SESSION["WebAppCount"];
echo'<td>$95</td>';
$total=95*$_SESSION["WebAppCount"];
echo'<td>'.$total;
echo'</td>';
echo'</tr>';
}
//if the JSCount field in the session array is set, collect the value and calculate the total amount

if(isset($_SESSION["JSCount"])){
echo'<tr><td>Javascript</td>';
echo'<td>'.$_SESSION["JSCount"];
echo'<td>$135</td>';
$total=135*$_SESSION["JSCount"];
echo'<td>'.$total;
echo'</td>';
echo'</tr>';
}
echo '</table>';


?>
