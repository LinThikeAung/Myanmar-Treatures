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

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
              <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                      <i class="fa fa-list"></i> Treature Post
                  </div>
                <div class="card-body">
                <br><br>
                <p id="success1"></p>
                <form action="" method="POST" id="formbox1"  enctype="multipart/form-data" class="zawgyi unicode">
                <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                 <?php

                                 $online=$_SESSION['name'];
                                 $mailer="SELECT * FROM user WHERE name='$online'";
                                 $mail_sql=mysqli_query($object->connection,$mailer);
                                 while($rowwww=mysqli_fetch_assoc($mail_sql)):
                                 
                                 ?>
                                        <label class="bmd-label-floating ">From:</label>
                                        <input type="email" class="form-control" id="fromemail" name="fromemail" value="<?php echo $rowwww['email'] ?>"  required autocomplete="fromemail" autofocus>
                                      <input type="hidden" id="fromname" name="fromname" value="<?php echo $rowwww['name'] ?>">
                                        <input type="hidden" id="frompass" name="frompass" value="<?php echo $rowwww['password'] ?>">
                                         
                                        <?php endwhile ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php

                                            $id=$_GET['user_id'];
                                            $mailer="SELECT * FROM user WHERE id=$id";
                                            $mail_sql=mysqli_query($object->connection,$mailer);
                                            while($rowwww=mysqli_fetch_assoc($mail_sql)):

                                            ?>
                                        <label class="bmd-label-floating ">To:</label>
                                        <input type="email" class="form-control" id="toemail" name="toemail" value="<?php echo $rowwww['email'] ?>"  required autocomplete="toemail" autofocus >
                                         <input type="hidden" id="toname" name="toname" value="<?php echo $rowwww['name'] ?>">
                                        <?php endwhile ?>
                                </div>
                            </div>
                 </div>
                  <div class="row">
                         
                            <div class="col-md-12">
                                <div class="form-group">
                                        <label class="bmd-label-floating ">Subject</label>
                                        <input type="text" name="subject" class="form-control" id="subject">
                                </div>
                            </div>
                 </div>
                 <!-- <div class="row">
                      <div class="col-md-8">
                        <div class="form-group">
                            <div class="fileinput fileinput-new text-left" data-provides="fileinput">

                                        <span class="btn btn-raised btn-round btn-default btn-file">
                                            <span class="fileinput-new">Select </span>
                                            <span class="fileinput-exists">File</span>
                                            <input type="file" name="file" id="file" />
                                        </span>
                               
                            </div>
                        </div>
                      </div>
                    </div> -->
                  <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <label class="bmd-label-floating">Compose Email</label>
                                  <textarea id="compose" name="compose" class="form-control"  cols="30" rows="10"></textarea>                               
                             </div>
                            </div>
                 </div>
                 <div class="form-group">
                        <input type="button" class="btn btn-info pull-left" onclick="sendEmail();" name="send_mail"   value="Send">
                        <div class="clearfix"></div>
                </div>
                </form>
               </div>
              </div>
            </div>
            </div>
            </div>
            </div>
            </div>

            <?php  include_once "include_admin/footer.php" ?>
  </div>
 </div>
 <script type="text/javascript">

function sendEmail(){

 
  var from=$('#fromemail');
 var to=$('#toemail');
 var fromname=$('#fromname');
 var frompass=$('#frompass');
 var toname=$('#toname');
 var subject=$('#subject');
 var file=$('#file');
 var compose=$('#compose');
 
//alert(file.val());


        $.ajax({

        url: "include_admin/sent_email1.php",
        method: "POST",
        dataType: 'json',
        data:{
          fromemail: from.val(),
          toemail: to.val(),
          toname: toname.val(),
          fromname: fromname.val(),
          frompass: frompass.val(),
        
          subject: subject.val(),
          compose: compose.val()
        },
        success:function (response){
            //  console.log(response);
            if(response.status == "success"){
              alert("Email sent successfully");
            }
            else{
              alert ("Something is being wrong");
            }
        }
       
        });
      
    

		
        }

        </script>
              