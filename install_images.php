<?php

include('mysql.php');
// Open directory containing all the images 
if ($handle = opendir('images')) {

	/* This is the correct way to loop over the directory. */
	while (false !== ($file = readdir($handle))) {
		if($file!='.' && $file!='..') {
			$images[] = "('".$file."')";
		}
	}

	closedir($handle);
}
// Insert all the images to the image table
$query = "INSERT INTO images (filename) VALUES ".implode(',', $images)." ";

// Check the mysql response for a query error 
if (!mysql_query($query)) {
	print mysql_error();
}
else {
	print "finished installing your images!";
}


?>
