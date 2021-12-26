<?php
	
	function dbRowInsert($table_name, $form_data)
	{
    // retrieve the keys of the array (column titles)
	    $fields = array_keys($form_data);
	    // build the query
	    $sql = "INSERT INTO ".$table_name."
	    (".implode(',', $fields).")
	    VALUES('".implode("','", $form_data)."')";
	    // run and return the query result resource
		
		return ($sql);
	}
	
?> 