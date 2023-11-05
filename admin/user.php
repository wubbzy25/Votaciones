
<?php include ('session.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ('side_bar.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Lista de users</h3>
					
                </div>
				
				<button class="btn btn-success" data-toggle="modal" data-target="#add_user">añadir User</button>
				<?php include ('add_user_modal.php');?>
                <!-- /.col-lg-12 -->
			
				
				<hr/>
				
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														Lista de informacion de user
													</div>    
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
										<?php 
										require 'dbcon.php';
										$bool = false;
										$query = $conn->query("SELECT * FROM user ORDER BY user_id DESC");
										while($row = $query->fetch_array()){
										$user_id=$row['user_id'];
										?>
											
											<td><?php echo $row ['username'];?></td>
                                            <td><?php echo $row ['password'];?></td>
                                            <td><?php echo $row ['firstname'];?></td>
                                            <td><?php echo $row ['lastname'];?></td>
                                            <td style="text-align:center">
											
												 <a rel="tooltip"  title="Delete" id="<?php echo $user_id ?>" href="#delete_admin<?php echo $user_id; ?>" data-target="#delete_admin" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Eliminar</a>	
											 <?php include ('delete_user_modal.php'); ?>
												  <a rel="tooltip"  title="Edit" id="<?php echo $row['user_id'] ?>" href="#edit_user<?php echo $row['user_id'] ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pencil"></i> Editar</a>	
												
											</td>
											    <?php include ('edit_user_modal.php');?>
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('script.php');?>

</body>

</html>

