<?php
    $link = mysqli_connect($_ENV["DATABASE_SERVICE_NAME"],$_ENV["DATABASE_USER"],$_ENV["DATABASE_PASSWORD"],$_ENV["DATABASE_NAME"]);
    if (!$link) {
        http_response_code (500);
        error_log ("Error: unable to connect to database\n");
	die();
    }

    // sql to create table
    $sql = "CREATE TABLE quote (
    id int,
    msg varchar(255)
    )";

    if ($link->query($sql) === TRUE) {
      echo "Table quote created successfully";
    } else {
      echo "Error creating table: " . $link->error;
    }
    
    mysqli_close($link);
?>
