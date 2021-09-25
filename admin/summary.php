 
 <?php include_once "include_admin/header.php" ?>
  <div class="wrapper ">
    <div class="sidebar" data-color="orange" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href class="simple-text logo-normal">
        <?php echo $_SESSION['name'] ?>
        </a>
      </div>
         <?php include_once "include_admin/dashboard.php" ?>
    </div>
    <div class="main-panel">
              <?php include_once "include_admin/nav.php" ?>
              <br><br>
              <?php
              if(isset($_GET['source'])){
                    $source=$_GET['source'];
              }
              else{
                      $source="";
                    }
                    switch ($source) {

                      case 'important':
                          include_once "include_admin/important.php";
                        break;

                        case 'nine':
                        include_once "include_admin/nine.php";
                      break;

                        case 'updatetitle':
                          include_once "include_admin/updatetitle.php";
                        break;

                        case 'updatetrend':
                          include_once "include_admin/update_trend.php";
                        break;
                      
                      default:
                          include_once "include_admin/viewsummary.php";
                        break;
                    }
  
              ?>
   
      <?php  include_once "include_admin/footer.php" ?>