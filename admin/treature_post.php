 
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
    if(isset($_GET['treature_post'])){
      $post=$_GET['treature_post'];
    }
    else{
      $post="";
    }

    switch ($post) {
      case 'update_treature_post':
            include_once "include_admin/update_treature_post.php";
        break;
        case 'new_post_treature':
        include_once "include_admin/new_post_treature.php";
    break;

    case 'view_detail_treature':
    include_once "include_admin/view_detail_treature.php";
break;
      
      default:
         include_once "include_admin/view_treature_posts.php";
        break;
    }
    
    
    
    ?>
 
  </div>
  <?php  include_once "include_admin/footer.php" ?>

  <?php include_once "include_admin/function.php" ?>

   
      
     