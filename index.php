
<?php
/*Student no:201511763
This program displays the list of items available to buy. 
Stores the selected items in session array so that the data can be used in checkout page
*/
session_start();
//if the array post exists
if(($_POST)){
//if theere is a value for wnumber field in post array
//store it in the session array
if(isset( $_POST["Wnumber"])){
  $_SESSION["WebAppCount"] = $_POST["Wnumber"];
}
//if theere is a value for jnumber field in post array
//store it in the session array
if( isset($_POST["Jnumber"])){
  $_SESSION["JSCount"]=$_POST["Jnumber"];
  }
}
//displat the html page
echo ' <html>
<head>
    <title>My first webpage</title>
</head>
<body>
  <div align="center" >
  <h1 align="center">A Small Shopping site</h1>
  <form method="post" name="webApp" action="index.php" >
    <table align=center >
      <tr>
        <td>
        <h4>  Web Applications</h3>
        </td>
        <td >
        <input type="hidden" name="idOfForm" value="1" />
          <input type="number"style="width: 7em" name="Wnumber" min="1" max="5">
        </td>
        <td>
        <input type="submit" name="submit" value="Add to cart"/>
        </td>

      </tr>
    <tr>
<td >

   This book provides an in-depth examination of the basic concepts and general principles associated with Web applicatin developemtn. The price is $95.

      </td>
    </tr>
</form>
<tr>
<td colspan="3">
</br><P>

</td>

</P>
</tr>
<form method="post" name="jsApp" action="index.php">
    <tr>
      <td>
        <h4>Javascript</h3>
      </td>
      <td>
      <input type="hidden" name="idOfForm" value="2" />
<input type="hidden" name="price" value=95/>
        <input type="number"style="width: 7em" name="Jnumber" min="1" max="5">
      </td>
      <td>
      <input type="submit" name="submit" value="Add to cart"/>
      </td>

    </tr>
  <tr>
<td >

This is both an example-driven programmers guide and a keep-on-our-desk reference, with new chapters that explain everything you need to know to get the most out of Javascript. The price is $130.
    </td>
  </tr>

</form>
</table>
</br>
</br>';
echo '<a href="checkout.php">Check Out</a>';
echo'  </div>
</body>
</html>';
?>
