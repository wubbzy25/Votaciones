<div class="modal fade" id="edit_voters<?php  echo $voters_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
											<h4 class="modal-title" id="myModalLabel">         
												<div class="panel panel-primary">
													<div class="panel-heading">
														<center>Editar detalles de estudiantes</center>
													</div>    
												</div>
											</h4>
										</div>
										
										
                                        <div class="modal-body">
	
		
										
					
											<form action="update_votes.php?voter_id=<?php echo $voters_id; ?>" method = "post" >	
											  <input type="hidden" name="voters_id" value="<?php echo $row1['voters_id'] ?>">
											<div class="form-group">
												<label>Numero ID</label>
												<input type = "text" class = "form-control" name = "id_number" value="<?php echo $row1 ['id_number']?>"	>												
											</div>
											
											<div class="form-group">
	
												<label>Password</label>
													<input class="form-control" type ="text" name = "password" id = "pass" required="true" value = "<?php echo $row1 ['password']?>">
											</div>
										
											<div class="form-group">
												<label>Nombre</label>
													<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row1 ['firstname']?>">
											</div>
											<div class="form-group">
												<label>Apellido</label>
													<input class="form-control"  type = "text" name = "lastname" value = "<?php echo $row1 ['lastname']?>" required="true">
											</div>
											
											<div class="form-group">
												<label>Grado</label>
													<select class = "form-control" name = "year_level" required="true">
														<option><?php echo $row1 ['year_level']?></option>
														<option>Sexto</option>
								                        <option>Septimo</option>
								                        <option>Octavo</option>
								                        <option>Noveno</option>
								                        <option>Decimo</option>
								                        <option>Undecimo</option>
													</select>
											</div>
											
											
											<div class="form-group">
												<label>Account</label>
													<select class = "form-control" name = "account">
														<option><?php echo $row1 ['account']?></option>
														<option></option>
														<option>Active</option>											
													</select>
											</div>
																					
											 
												 <button name = "done" type="submit" class="btn btn-primary">Guardar datos</button>
												 <button name = "cancel" type="reset" class="btn btn-success">Cancelar</button>




										 
										 </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                           
                                        </div>										
										</form>
				
									</div>
									
								</div>
									</div>
                                    <!-- /.modal-content -->
                                
