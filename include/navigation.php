<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="clan">
                <a class="navbar-brand" href="index.php"><b style="color:red;font-size:250%;font-family:Georgia;">MovieDare</b></a></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
               <?php
                 $query = "SELECT * FROM categories";
                $select_all_categories_query = mysqli_query($connection,$query);
                
                while($row = mysqli_fetch_assoc($select_all_categories_query)){
                  $cat_title=  $row['cat_title'];
                    echo "<li>
                        <a href='#'>{$cat_title}</a>
                    </li>";
                    
                }
                
                ?>
                
                <li>  <a href="admin"> ADMIN </a></li>
               
               
               
                
                    
                    
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
