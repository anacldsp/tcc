<?php
 
 session_start();
 include "config.php";
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $select= "SELECT * FROM usuarios where id='$id'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "UPDATE usuarios SET nome='$nome',email='$email',senha='$senha' WHERE id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:sistema.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:perfilEdit.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:perfilEdit.php');
    }
 }
?>