<?php

    $db_username="root";
    $servername="localhost";
    $db_password="";
    $db_name="admin";
    
    function execute($query){
        global $db_username,$servername,$db_password,$db_name;
        $conn = mysqli_connect($servername,$db_username,$db_password,$db_name);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_query($conn,$query);
    }
    function get($query){
        global $db_username,$servername,$db_password,$db_name;
        $conn = mysqli_connect($servername,$db_username,$db_password,$db_name);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $result = mysqli_query($conn,$query);
        $data=array();
        if( $result && mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
        }
        return $data;   
    }

    function getArray($query){
        global $username,$servername,$password,$db_name;
        $conn = mysqli_connect($servername,$username,$password,$db_name);
        $result = mysqli_query($conn,$query);
        $data = array();
        while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }
    
    
?>