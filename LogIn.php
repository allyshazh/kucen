<?php   
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$password2 = filter_input(INPUT_POST, 'password2');
      
if (!empty($email))
{
    if (!empty($password2))
    {
        /*$email = filter_input(INPUT_POST, 'email');
        $password2 = filter_input(INPUT_POST, 'password2');*/
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "kucen";  
      
        $connect = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) 
        {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        else
        {
            //to prevent from mysqli injection  
            $email = stripcslashes($email);  
            $phone = stripcslashes($phone);
            $password2 = stripcslashes($password2);  
            $email = mysqli_real_escape_string($connect, $email);  
            $phone = mysqli_real_escape_string($connect, $phone);
            $password2 = mysqli_real_escape_string($connect, $password2);  
      
            $sql = "SELECT email, password2 from registration where email='$email' AND password2='$password2'";  
            $result = mysqli_query($connect, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
          
            if($count == 1)
            {  
                header("location:homePage.html");
            }  
            else
            {  
                echo "Login failed. Invalid username or password.";  
            } 
    }    }    
    else
    {
        echo "Confirm password should not be empty";
        die();
    }
}
else
{
    echo "Email should not be empty";
    die();
}
?>  