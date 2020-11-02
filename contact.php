<?php
   
if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $messagesubject = $_POST['subject'];
   $message = $_POST['message'];

   $to='aisyahaliana77@gmail.com';
   $subject= 'New Form Submission';
   $message= "Name: ".$name."\n".$email."\n". "Leave your comment: "."\n\n".$message;

   if(mail($to, $subject, $message, $headers)){
    echo "<h2> Your message has been sent. Thank You!"." ".$name.";
    }
    else{
        
    echo "Something went wrong!";
}
}

?>

