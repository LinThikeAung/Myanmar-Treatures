
<?php include_once "function1.php" ?>
<?php session_start(); ?>
<?php ob_start(); ?>
<?php




if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
	//	$password1=$_POST['password'];
		
       
	
		$users=$object1->Select_User("user",$email);
	
	if(COUNT($users) > 0){
					foreach($users as $admin){
						$db_password=$admin['password'];
						$db_username=$admin['name'];

					}

					if (password_verify($password,$db_password)){
						$_SESSION['name']=$db_username;
					//	$_SESSION['password']=$password;                
						header('Location: ../admin/index.php');
					
					}
					else{ header("Location: ../guest.php?pass=Incorrect Password"); }

		  }
		else{
			header("Location: ../guest.php?msg=You have no account");
		}
		  

    

}
?>