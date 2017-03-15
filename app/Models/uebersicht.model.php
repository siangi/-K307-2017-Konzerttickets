<?php
	function FindNonPaidSales() {
		$result = FindBySql('SELECT * FROM sales WHERE NOT paid');
		return $result;
	}
	
	function FindReductionsByID($id)
	{
		$result = FindBySql('SELECT pricereduction, timereduction FROM loyaltybonus WHERE ID = '.$id);
		return $result;
	}
	
	function FindBySql($sql)
	{
		$dbh = connectToDatabase();
		$statement = $dbh->prepare($sql);
		$result = $statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function FindConcertByID($id)
	{
		$result = FindBySql('SELECT artist, id FROM concerts WHERE ID = '.$id);
		return $result;
	}
?>