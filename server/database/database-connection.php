<?php 
    //creating Mysql DBMS connection variables
    $server_uri= "127.0.0.1";
    $database_user_name = "root";
    $database_user_password = "123456789";
    $database_to_use = "";

    //creating Mysql DBMS connection
    $connection = new mysqli($server_uri, $database_user_name, $database_user_password); 

    //checking if Mysql DBMS is connected
    if(!$connection) {
        die("Database connection failed: " .$connection->connect_error);
    }
    echo "Database Connected Succefful";

    //creating a database from connection
    $create_database_sql = "create database if not exist social_blog";//database creation sql
    $query = $connection->query($create_database_sql);//database creation query

    //checking if database creation  was a success
    if($query === true) {
        echo "Database creation is a success";
    } 
    else {
        echo "databse creation failed".$connection->error;
    } 

    include("./create_tables.php"); 

    for($i = 0; $i<count($create_tables_sql); $i++) {
        $query = $create_tables_sql[$i];
        $table_creation = $connection->query($query);

        //checking if table is created
        if($table_creation === true) {
            echo "table creation is successful";
        }else {
            echo "table creation failed".$connection->error;
        }
    }

    $connection->close();
?>