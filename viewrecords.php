<?php 
    $title = "View Records";
    require_once './includes/header.php';
    require_once './db/conn.php';  
    
    $sql = "SELECT * FROM client_info WHERE 1";
    $result = mysqli_query($conn, $sql);

    if($result){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row["client_id"] . " ";
                echo $row["email"] . " ";
                echo $row["address"] . " ";
                echo $row["city"] . " ";
                echo $row["province"] . " ";
                echo $row["area_code"] . "<br>";
            }
        }
        else{
            echo "No records found";
        }
    }
    else{                           
        echo "Error executing query: " . mysqli_error($conn);
    } 


?>
<?php 
    require_once './includes/footer.php';
 ?>