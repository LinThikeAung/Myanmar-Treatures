<?php include_once "include_admin/header.php" ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="" class="simple-text logo-normal">
           <?php echo $_SESSION['name'] ?>
        </a>
      </div>
         <?php include_once "include_admin/dashboard.php" ?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include_once "include_admin/nav.php" ?>

    <?php
    if(isset($_GET['user'])){
      $user=$_GET['user'];
    }
    else{
      $user="";
    }

    switch ($user) {
      case 'update_user':
            include_once "include_admin/update_user.php";
        break;
        case 'insertuser':
        include_once "include_admin/insert_user.php";
    break;
  
      
      default:
    
         include_once "include_admin/viewuser.php";
        break;
    }
    
    
    
    ?>


      <?php  include_once "include_admin/footer.php" ?>
  </div>
 </div>
 <script type="text/javascript">

function sendEmail(){

 
//  var from=$('#fromemail');
//  var to=$('#toemail');
//  var fromname=$('$fromname');
//  var frompass=$('$frompass');
//  var toname=$('$toname');
//  var subject=$('#subject');
//  var compose=$('#compose');
 
        // $.ajax({

        // url: "sent_email1.php",
        // method: "POST",
        // dataType: 'json',
        // data:{
        //   fromemail: from.val(),
        //   toemail: to.val(),
        //   toname: toname.val(),
        //   fromname: fromname.val(),
        //   frompass: frompass.val(),
        //   subject: subject.val(),
        //   compose: compose.val()
        // },
        // success:function (response){
        //     console.log(response);
        // }

        // });


        $.ajax({
				type:'POST',
				url:'sent_mail1.php',
				data:$('#formbox1').serialize(),

				success: function (response){
             $('#success1').html(response);
				}
			});
			var form=document.getElementById('formbox1').reset();
      return false;
      

        }

        </script>
              