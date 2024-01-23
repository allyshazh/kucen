<?php
$custID = filter_input(INPUT_POST, 'custID');
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$password1 = filter_input(INPUT_POST, 'password1');
$password2 = filter_input(INPUT_POST, 'password2');
if (!empty($custID=uniqid()))
{
	if (!empty($firstname))
	{
		if (!empty($lastname))
		{
			if (!empty($email))
			{
				if (!empty($phone))
				{
					if (!empty($password1))
					{
						if (!empty($password2))
						{
							if (($password1) != ($password2))
							{
								echo "Password does not match";
								die();
							}
							else
							{
								$host = "localhost";
								$dbusername = "root";
								$dbpassword = "";
								$dbname = "kucen";
								// Create connection
								$connect = new mysqli ($host, $dbusername, $dbpassword, $dbname);
								if (mysqli_connect_error())
								{
									die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_());
								}
								else
								{
									$sql = "INSERT INTO registration(custID, firstname, lastname, email, phone, password1, password2)
											values ('$custID', '$firstname', '$lastname', '$email', '$phone', '$password1', '$password2');
											";
									if ($connect->query($sql))
									{
										header("location:LogIn.html");
									}	
									else
									{
										echo "Error";
										die();
									}
									$connect->close();
								}
							}
						}
						else
						{
							$host = "localhost";
							$dbusername = "root";
							$dbpassword = "";
							$dbname = "kucen";
							// Create connection
							$connect = new mysqli ($host, $dbusername, $dbpassword, $dbname);
							if (mysqli_connect_error())
							{
								die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_());
							}
							else
							{
								$sql = "INSERT INTO registration(custID, firstname, lastname, email, phone, password1, password2)
										values ('$custID', '$firstname', '$lastname', '$email', '$phone', '$password1', '$password2');
										";
								if ($connect->query($sql))
								{
									header("location:LogIn.html");
								}
								else
								{
									echo "Error";
									die();
								}
								$connect->close();
							}
						}
					}
					else
					{
						echo "Password should not be empty";
						die();
					}
				}
				else
				{
					echo "Phone should not be empty";
					die();
				}
			}
			else
			{
				echo "Email should not be empty";
				die();
			}
		}
		else
		{
			echo "Lastname should not be empty";
			die();
		}
	}
	else
	{
		echo "Firstname should not be empty";
		die();
	}
}
else
{
	echo "Firstname should not be empty";
	die();
}

?>