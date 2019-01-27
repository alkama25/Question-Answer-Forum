<?php

 include'q&aforumdb.php';
 if(isset($_POST['submit'])){
  $title_of_question=$_POST['title_of_question'];
  $description=$_POST['description'];
  
  //echo"insert into fquestion(title_of_question,description) values ('$title_of_question','$description')";exit;
  $conn->exec("insert into fquestion(title_of_question,description) values ('$title_of_question','$description')");
  header("location:main-forum.php");
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
                
               <h3 class="box-title">Ask a Question</h3>
               <div class="box-tools pull-right">
                    <a href="main-forum.php" class="btn btn-success">Go Back</a>
                  </div>
            </div>
        <div class="box-body">
        
        <form action="#" class="form-horizontal" method="post">      
          <div class="row form-group">
            <div class="col-sm-12">
            <label> Title of Question</label>
              <input type="text" name="title_of_question" class="form-control">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-12">
            <label> Description</label>
              <input type="textarea" name="description" class="form-control">
          </div>
        </div>
        
        <div class="row form-group">
          <div class="col-sm-6">
            <button name="submit" class="btn btn-success"> Post Your Question </button>
          </div>
        </div>
          </form>
    
    </section>
    <!-- /.content -->
  </div>
 <?php include'footer.php'; ?>

