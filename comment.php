<?php

 include'q&aforumdb.php';
 if(isset($_POST['submit'])){
  $your_comment=$_POST['your_comment'];
  
  
 
  $conn->exec("insert into comment(your_comment) values ('$your_comment')");
  header("location:view-comment.php");
  }
   include'header.php'; 
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome to Question Answer Forum
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
     
          <div class="box">
            <div class="box-header with-border">
                
               <h3 class="box-title">Add a comment</h3>
               <div class="box-tools pull-right">
                    <a href="main-forum.php" class="btn btn-success">Go Back</a>
                  </div>
            </div>
        <div class="box-body">
        
        <form action="#" class="form-horizontal" method="post">      
          <div class="row form-group">
            <div class="col-sm-12">
            <label> Your comment</label>
              <input type="text" name="your_comment" class="form-control">
          </div>
        </div>
        
        
        <div class="row form-group">
          <div class="col-sm-6">
            <button name="submit" class="btn btn-success"> Post Comment </button>
          </div>
        </div>
          </form>
    
    </section>
    <!-- /.content -->
  </div>
 <?php include'footer.php'; ?>

