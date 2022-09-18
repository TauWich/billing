<?php

//test if mysqli presents
if (function_exists('mysqli_connect'))
{
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ( $conn->connect_error != null)
    {
        $error = ["error" => "Could not connect to DB", "statusText" => $conn->connect_error];
        echo json_encode($error);
        return;
    }
    else
    {
        $sql = "SELECT * FROM clients";
        try
        {
            $result = $conn->query($sql);
            if(is_a($result, 'mysqli_result'))
            {
                $results = [];
                while($row = $result->fetch_assoc())
                {
                    $results[] = $row;
                }
                echo json_encode($results);
            }
            else
            {
                $error = ["error" => "No resulst"];
                echo json_encode($error);
            }
        }
        catch(Expection $e)
        {
            $error = ["error" => "Could not get results", "statusText" => $e->getMessage()];
            echo json_encode($error);
        }
    }
    //close connection
    $conn->close();
}
else
{
    $error = ["error" => "No DB driver"];
    echo json_encode($error);
}

