<?php
include 'q&aforumdb.php';
$data=$conn->prepare("select * from fquestion");
$data->execute();
$result=$data->fetchall(PDO::FETCH_OBJ);
 include'header.php'; 
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome to Question Answer Forum
      </h1>
      <ol class="breadcrumb">
        
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <div class="box">
            <div class="box-body">
              <table class="table">
                <thead>
                  All Questions
                  <div class="box-tools pull-right">
                                <a href="ask-question.php" class="btn btn-info">Ask a Question</a>
                            </div>
                </thead>
                <thead>
                  <tr class="info">
                                    <th>Question </th>
                                    
                                   <div class="box-tools pull-right"> <th>Action</th></div>
                                    
                                    
                                </tr>
                </thead>
                <tbody>
                                <?php 
                                foreach($result as $row){?>

                                <tr class="success">
                                    <td> <a href="view-question.php"> <?php echo $row->title_of_question;?></a></td>
                                    
                                    
                                    
                                    <td>
                                        <a href="?id=<?php echo $row->id ?>" class="btn btn-primary">Comment</a>
                                        
                                        <a href="give-answer.php?id=<?php echo $row->id ?>" class="btn btn-success">Give Answer</a>
                                    </td>
                                    
                                </tr>
                                <?php 
                            }
                                ?>
                            </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
            

     

    </section>
    <!-- /.content -->
  </div>
 <?php include'footer.php'; ?>
 
