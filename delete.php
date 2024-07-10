<?php 
    $title = "Delete Records";
    require_once './includes/header.php';
    require_once './db/conn.php';

    $id=$_POST['id'];
    $sql = "DELETE FROM client_info WHERE client_info.client_id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Record Deleted Succesfully!";
    }
    else{                           
        echo "Error executing query: " . mysqli_error($conn);
    } 

?>

<?php 
    require_once './includes/footer.php';
 ?>