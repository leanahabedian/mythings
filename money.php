<? 

require "include.php";

(!empty($_POST['Last'])) ? $last = $_POST['Last'] : $last = "";
(!empty($_POST['Earn'])) ? $earn = $_POST['Earn'] : $earn = "";
(!empty($_POST['Spend'])) ? $spend = $_POST['Spend'] : $spend = "";
(!empty($_POST['Type'])) ? $type = $_POST['Type'] : $type = "";

if ($earn and $type){
	$Ahorros->earn_money($type, $earn);
	$log = "\$$earn was inserted in $type table";
} else if ($spend and $type) {
	$Ahorros->spend_money($type, $spend);
	$log = "-\$$spend was inserted in $type table";
} else {
	$log = "Nothing was inserted";
}

if ($last){
	$from = strtotime("-$last days");
} else {
	$from = 0;
}

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
	<? require "header.php"?>
	<form name="input" method="get">
	  <table>
		<tr>
			<td>Show last:</td>
	 		<td><input type="text" name="Last" value=<?= $last?> > days </td>
			<td><a href="/earn_money.php">Earn Money</a></td>
			<td style="color:red"><a href="/spend_money.php">Spend Money</a></td>
		</tr>
		<tr>
			<td>Log:</td>
			<?
			if ($spend and $type){
				echo "<td style='color:red'>$log</td>";
			} elseif ($earn and $type){
				echo "<td style='color:blue'>$log</td>";
			} else {
				echo "<td>$log</td>";
			}
			?>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td style="float:right"><input type="submit" value="Submit" action="/index.php" style="font-size:large;"></td>
		</tr>

	</table>
        </form>
    </div>

    <div id="left">
	<p><strong>Historial de Gastos</strong></p>
	<table class="history" style="float:left">
		<tr>
			<th colspan="3">Cajita Feliz</th>
		</tr>
		<tr>
			<td>Date</td>
			<td>In</td>
			<td>Out</td>
		</tr>
		<?$Ahorros->show_last("CajitaFeliz", $from)?>
	</table>
	<table class="history" style="float:right">
		<tr>
			<th colspan="3">Billetera</th>
		</tr>
		<tr>
			<td>Date</td>
			<td>In</td>
			<td>Out</td>
		</tr>

		<?$Ahorros->show_last("Billetera", $from)?>
	</table>
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
<? require "footer.php"?>
