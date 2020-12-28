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

    $sql = "INSERT INTO quote (id, msg) VALUES ('1', 'hola caracola')";

    if ($link->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $clink->error;
    }

    $sql = "INSERT INTO quote (id, msg) VALUES ('2', 'hola mundo')";

    if ($link->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $clink->error;
    }

    $sql = "INSERT INTO quote (id, msg) VALUES ('3', 'adios caracola')";

    if ($link->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $clink->error;
    }

    $sql = "INSERT INTO quote (id, msg) VALUES ('4', 'adios mundo')";

    if ($link->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $clink->error;
    }
 
    mysqli_close($link);
?>
