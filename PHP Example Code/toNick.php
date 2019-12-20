<?php
	//	For Local server
	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPass = 'root';
	$dbDatabase = 'EZ-Music';

	$db = new PDO('mysql:host=' . $dbHost . '; dbname=' . $dbDatabase, $dbUser, $dbPass);

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	///	Insert   Look at the key value pairs to insert into the database Title is column and $track is the variable
	try {
		$stmt = $db->prepare("INSERT INTO Music (Title, Album, Artist, ID) VALUES (:Title, :Album, :Artist, :ID)");
		$stmt->execute(array("Title" => $track, "Album" => $album, "Artist" => $artist, "ID" => $tracks->{"items"}[$y]->{"id"}));
		
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}



	//	SELECT Multiple Rows
	$stmt = $db->prepare("SELECT * FROM Restore_Movement_Data WHERE MemberID=?");
	$stmt->execute([$userID]);
	$returnArray = array();
	for ($i=0; $row=$stmt->fetch(); $i++) {
		array_push($returnArray, array(
			"RowID" => $row['RowID'],
			"Title" => $row['Title'],
			"Notes" => $row['Notes'],
			"Status" => $row['Status']
		));
	}

	//	Select Single Row
	$stmt = $db->prepare("SELECT COUNT(*) FROM Restore_Movement_Data WHERE MemberID=? AND Title=?");
	$stmt->execute([$userID, $title]);
	if ($stmt->fetchColumn() > 0) {
		return true;
	} else {
		return false;
	}

	
	//	Update Row
	$sql = "UPDATE Bio_Screen_Results SET Section" . $sectionNumber . "=? WHERE RowID=?";
	$q = $db->prepare($sql);
	$q->execute(array($score, $testId));	
?>