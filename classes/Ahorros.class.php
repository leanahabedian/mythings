<?

class Ahorros {

	private $money;
	private $historyBilletera;
	private $historyCajitaFeliz;

	public function __construct(){	}

	public function get_money($type){
		assert($type == "Billetera" or $type == "CajitaFeliz");
		$sqlquery = "SELECT * FROM $type WHERE Id = (SELECT MAX(Id) FROM $type)";
		$row = mysql_fetch_array(mysql_query($sqlquery));
		return $row['Total'];
	}
		
	public function earn_money($type, $amount){
		assert($type == "Billetera" or $type == "CajitaFeliz");
		$actual = $this->get_money($type);
		$total = (int)$amount + (int)$actual;
		$total = (string)$total;
		$sqlquery = "INSERT INTO `$type`(`Date`, `In`, `Total`) VALUES (" . strtotime('now') . ", $amount, $total)";
		$result = mysql_query($sqlquery);
		if(!$result){
			die("invalid query: " . mysql_error());
		}
	}
	
	public function spend_money($type, $amount){
		assert($type == "Billetera" or $type == "CajitaFeliz");
		$actual = $this->get_money($type);
		$total = (int)$actual - (int)$amount;
		$total = (string)$actual;
		$sqlquery = "INSERT INTO `$type`(`Date`,`Out`, `Total`) VALUES (" . strtotime('now') . ", $amount, $total)";
		$result = mysql_query($sqlquery);
		if(!$result){
			die("Invalid query: " . mysql_error());
		}
	}
	
	public function show_last($type, $timestamp){
		//TODO
		$query= "SELECT * FROM `$type` WHERE `Date`>$timestamp";
		$result= mysql_query($query);
		echo (!$result) ? mysql_error() : "";
		while ($row = mysql_fetch_assoc($result)){
			extract($row);
			$Date = date("d/m/Y H:i:s", $Date);
			echo "<tr>";
			echo "<td>$Date</td><td>$In</td><td>$Out</td>";
			echo "</tr>";

		}
	
	}
	
}

/* EOF */
