<? 

require "include.php";

?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>My Money</title>
  </head> 
  <body> 
    <div id="all">
    <h1>My Money</h1> 
	<div id="menu">
	<form method="post" action="money.php">
	  <table>
		<tr>
			<td>You Spend:</td>
	  		<td>$<input type="text" name="Spend" value=""></td>
			<td><select name="Type">
				<option value=""> - - - - - </option>
				<option value="Billetera">Billetera</option>
				<option value="CajitaFeliz">CajitaFeliz</option>
			    </select>
			</td>
		</tr>	
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td style="float:right"><input type="submit" value="Submit" style="font-size:large;"></td>
		</tr>

	</table>
        </form>
    </div>

	<div id="right">
	   <p><strong>Actual Money</strong></p>
	  <table id="balance">
		<tr>
			<th>Cajita Feliz</th>
			<th>Billetera</th>
		</tr>
		<tr>
			<td><?= number_format($Ahorros->get_money("CajitaFeliz"),0,',','.');?></td>
			<td><?= number_format($Ahorros->get_money("Billetera"),0,',','.');?></td>
		</tr>
	</table>
	</div>
</div>
 </body>
 </html
