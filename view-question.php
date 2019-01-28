<?php
include 'header.php';
include 'q&aforumdb.php';
$data=$conn->prepare("select * from fquestion");
$data->execute();
$result=$data->fetchall(PDO::FETCH_OBJ);
?>
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      
    </section>

    <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                    <div class="box">
                    <div class="box-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title of Question</th>
                                    <th>Description</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($result as $row){?>

                                <tr>
                                    <td><?php echo $row->title_of_question;?></td>
                                    <td><?php echo $row->description;?></td>
                                
                                
                                    <td>
                                        <a href="view-answer.php?id=<?php echo $row->id ?>" class="btn btn-primary">View All answers</a>
                                        
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




