<?php
include 'header.php';
include 'q&aforumdb.php';
$data=$conn->prepare("select * from comment");
$data->execute();
$result=$data->fetchall(PDO::FETCH_OBJ);
?>
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-12">
                    <div class="box">
                    <div class="box-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> All comments</th>
                                    <div class="box-tools pull-right">
                    <a href="main-forum.php" class="btn btn-success">Go Back</a>
                  </div>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($result as $row){?>

                                <tr>
                                    <td><?php echo $row->your_comment;?></td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        
                                        
                       

                                        
                                        
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




