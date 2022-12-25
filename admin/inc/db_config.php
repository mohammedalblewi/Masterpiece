<?php 

    $hostname ='localhost';
    $username ='root';
    $pass = 'root';
    $db = 'master';


    $con = mysqli_connect($hostname,$username,$pass,$db);

    if(!$con){
        die("Cannot Connect To Database".mysqli_connect_error());
    }

    function filteration($data){
        foreach($data as $key => $value){
            $data[$key] = trim($value);
            $data[$key] = stripslashes($value);
            $data[$key] = htmlspecialchars($value);
            $data[$key] = strip_tags($value);
        }
        return $data;
    }

    function selectAll($table){
        $con = $GLOBALS['con'];
        $res = mysqli_query($con,"SELECT * FROM $table");
        return $res;
    }

    function select($sql ,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
           if(mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
           }
           else{
            mysqli_stmt_close($stmt);
            die("Query Cannot be executed - Select");
           }
        }

        else{
            die("Query Cannot be prepared - Select");
        }
    }


    function update($sql ,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
           if(mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
           }
           else{
            mysqli_stmt_close($stmt);
            die("Query Cannot be executed - Update");
           }
        }

        else{
            die("Query Cannot be prepared - Update");
        }
    }

    function insert($sql ,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
           if(mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
           }
           else{
            mysqli_stmt_close($stmt);
            die("Query Cannot be executed - Insert");
           }
        }

        else{
            die("Query Cannot be prepared - Insert");
        }
    }

    
    function delete($sql ,$values,$datatypes){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con,$sql))
        {
            mysqli_stmt_bind_param($stmt,$datatypes,...$values);
           if(mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
           }
           else{
            mysqli_stmt_close($stmt);
            die("Query Cannot be executed - Delete");
           }
        }

        else{
            die("Query Cannot be prepared - Delete");
        }
    }

?>