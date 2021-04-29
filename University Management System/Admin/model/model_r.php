<?php 


require_once 'db_connect2.php';


function getUser($username){
        $query = "SELECT username FROM student WHERE username='$username'";
        $result = get($query);
        if(count($result)>0) return true;
        return false;
    }

function loginSearch($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `register` WHERE Uname = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function showAllTeachers(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `teacher` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showTeacher($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `teacher` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function updateTeacher($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE teacher set Name = ?,Gender = ?, Username = ?,Course = ?,Section = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'],$data['gender'],$data['username'],$data['course'],$data['section'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function addRegistration($data){
    
    

    //Realcode
     $conn = db_conn();
    $selectQuery = "INSERT into register (Name,Email, Uname,Gender,Pass)
VALUES (:name,:email,:uname,:gender, :pass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':uname' => $data['uname'],
            ':gender' => $data['gender'],
            ':pass' => $data['pass']
        
            ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;

}
function addTeacher($data){
    
    

    //Realcode
     $conn = db_conn();
    $selectQuery = "INSERT into teacher (Name,Gender, Username,Course,Section)
VALUES (:name,:gender,:uname,:course, :section)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':gender' => $data['gender'],
            ':uname' => $data['uname'],
            ':course' => $data['course'],
            ':section' => $data['section']
        
            ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;

}
function addStudent($data){
    
    

    //Realcode
     $conn = db_conn();
    $selectQuery = "INSERT into student (Name,Gender, Username,Course,Section)
VALUES (:name,:gender,:uname,:course, :section)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':gender' => $data['gender'],
            ':uname' => $data['uname'],
            ':course' => $data['course'],
            ':section' => $data['section']
        
            ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;

}
function deleteTeacher($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `teacher` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


?>