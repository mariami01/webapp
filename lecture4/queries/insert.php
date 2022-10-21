<?php 
    if(!isset($_POST["insert"])){
?>
<form method ="post" style="padding: 20px">
    Name: <input type="text" name="firstname">
    <br>
    <br>
    Lastname: <input type="text" name="lastname">
    <br>
    <br>
    Mobile: <input type="text" name="mobile">
    <br>
    <br>
    <button name="insert">INSERT</button>
</form>


<?php
    }else{
    // prepare sql and bind parameters

        $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, mobile) VALUES (:firstname, :lastname, :mobile)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':mobile', $mobile);


        // insert a row
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $mobile = $_POST["mobile"];
        $stmt->execute();
        echo "new record created";
        }
    
?>