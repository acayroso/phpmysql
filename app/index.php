<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>PHP and MySQL</title>
    </head>
    <body>
        <h1>PHP and MySQL</h1>
        
        <h3>CRUD</h3>
            <section>
                <p>How to implement CRUD in PHP and MySQL</p>
                    <ul>
                        <li>Database: employee</li>
                        <li>Credentials: db_admin, db_password</li>
                    </ul>
                <p>PHP and MySQL connection process/p>
                    <ul>
                        <li>Create a database connection</li>
                        <li>Select a database</li>
                        <li>Run query</li>
                        <li>Retrieve data</li>
                        <li>Close connection</li>
                        <li><strong>NOTE: </strong>mysql_connect is deprecated, use mysqli_connect</li>
                    </ul>
                    <?php
                        
                        // Create constants for db connection
                            DEFINE('DB_USERNAME','db_admin');
                            DEFINE('DB_PASSWORD','db_password');
                            DEFINE('DB_SERVER','localhost');
                            DEFINE('DB_NAME','phpmysql');
                        
                        // Create database connection
                            $db_connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                            
                            if(!$db_connection){
                                die("Database connection failed: " . mysqli_error($db_connection));
                            }
                            
                        //  Run Query
                            $query = 'SELECT * FROM employee';
                            
                            $select_query = mysqli_query($db_connection, $query);
                            
                            if(!$select_query){
                                die("Database query failed: " . mysqli_error($db_connection));
                            }
                            
                            var_dump($select_query);
                            
                        // Display selected data
                            
                            while($row = mysqli_fetch_array($select_query)){
                                echo $row['id'] . " " . $row['name'] . " " . $row['email'] . " " . 
                                     $row['emp_number'] . " " . $row['active'] . "<br/>";
                            }
                            
                        // Close Connection   
                            mysqli_close($db_connection);
                    ?>
            </section>

    </body>
</html>