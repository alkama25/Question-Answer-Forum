<?php
include 'header.php';
include 'q&aforumdb.php';
$data=$conn->prepare("select * from fanswer");
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
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
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
                                <tr>
                                    <th> All answers</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($result as $row){?>

                                <tr>
                                    <td><?php echo $row->your_answer;?></td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <a href="?id=<?php echo $row->id ?>" class="btn btn-primary">Comment</a>
                                        
                                        
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




