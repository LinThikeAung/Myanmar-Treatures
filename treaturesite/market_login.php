
<?php include_once "function1.php" ?>
<?php session_start(); ?>
<?php ob_start(); ?>
<?php




if(isset($_POST['market_login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		
       
	
		$users=$object1->Select_Market_User("market_login",$email);
	
	if(COUNT($users) > 0){
					foreach($users as $market){
						$db_password=$market['password'];
						$db_username=$market['name'];

					}

					if (password_verify($password,$db_password)){
						$_SESSION['name']=$db_username;                
						header('Location: ../market.php?success=OK Success');
					
					}
					else{ header("Location: ../market.php?pass=Incorrect Password"); }

		  }
		else{
			header("Location: ../market_register.php?msg=Register Here!");
		}
		  

    

}
?>