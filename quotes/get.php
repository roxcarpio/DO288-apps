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

    $query = "SELECT count(*) FROM quote";
    $result = $link->query($query);
    if (!$result) {
        http_response_code (500);
        error_log ("SQL error: " . mysqli_error($link) . "\n");
	die();
    }

    $row = mysqli_fetch_array($result);
    mysqli_free_result($result);

    $id = rand(1,$row[0]);

    $query = "SELECT msg FROM quote WHERE id = " . $id;
    $result = $link->query($query);
    if (!$result) {
        http_response_code (500);
        error_log ("SQL error: " . mysqli_error($link) . "\n");
	die();
    }

    $row = mysqli_fetch_array($result);
    mysqli_free_result($result);

    print $row[0] . "\n";
    
    mysqli_close($link);
?>
