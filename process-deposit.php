
<?php 
include('connection.php');

    $dep_account = $_POST['dep-account'];

    if(isset($_POST['btn-deposit'])){
        $sql = "SELECT * FROM accounts WHERE account_name='$dep_account'";
        
        $result = $db_conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "Account is ".$row['account_name'];
            }
        }
        else{
            echo "Please choose an Account in the Account field!";
        }
    }
?>