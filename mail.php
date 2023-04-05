 <?php
    if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=="POST")
    {
    $name=$_POST['name'];
    $message=$_POST['message'];
    $email=$_POST['mail'];
    $to="pk1265485@gmail.com";
    $txt="Name:-".$name."\n"."Mail:-".$email."\n"."Message:- ".$message;
    if(mail($to,"National Institute of Digital Media Marketing",$txt,"From:$email")) {
    echo "<script>alert('Successfully Message sent')</script>";
    echo '<script>window.location.href="https://kashyap5426.github.io/Prince-portfolio";</script>';
    }else{
    echo "<script>alert('Query Failed')</script>";
    }
}
?>       