<?php include "include/header.php" ?>

    <div id="wrapper">
        
  

        <!-- Navigation -->
 
        <?php include "include/nav.php" ?>
        
        
    

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">

  <h1 class="page-header">
               <b style="font-size:300%;"><i>Welcome Users:</i> </b>
                <small></small>
            </h1>
            
            
<?php

if(isset($_GET['source'])){

$source = $_GET['source'];

} else {

$source = '';

}

switch($source) {
    
    case 'add_user';
    
     include "include/add_user.php";
    
    break; 
    
    
    case 'edit_user';
    
    include "include/edit_user.php";
    break;
    
    case '200';
    echo "NICE 200";
    break;
    
    default:
    
    include "include/view_all_users.php";
    
    break;
    
    
    
    
}








?>

 
            
    
            

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

     
        <!-- /#page-wrapper -->
        
    <?php include "include/footer.php" ?>
