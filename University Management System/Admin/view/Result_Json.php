<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Convert Data from Mysql to JSON Format using PHP</title>  
      </head>  
      <body>  
           <?php   
           $connect = mysqli_connect("localhost", "root", "", "admin");  
           $sql = "SELECT * FROM results WHERE cgpa>3";  
           $result = mysqli_query($connect, $sql);  
           $json_array = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[] = $row;  
           }  
           /*echo '<pre>';  
           print_r(json_encode($json_array));  
           echo '</pre>'; */ 

           

              echo json_encode($json_array);
            /* $data=json_encode($json_array);
          /*echo json_encode($json_array);*/
         


           ?>  
      </body>  
 </html>  