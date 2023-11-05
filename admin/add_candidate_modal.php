<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Añadir candidato</center>
						</div>    
					</div>
				</h4>
			</div>
										
										
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
					<div class="form-group">
						<label>Posicion</label>
						<select class = "form-control" name = "position">
								<option>Personero</option>
								<option>Contralor</option>
								
							</select>
					</div>

										
					<div class="form-group">
						<label>Nombre</label>
							<input class="form-control" type ="text" name = "firstname" placeholder="Please enter firstname" required="true">
					</div>
					<div class="form-group">
						<label>Apellido</label>
							<input class="form-control"  type = "text" name = "lastname" placeholder="Please enter lastname" required="true">
					</div>
											
					<div class="form-group">
						<label>Grado</label>
							<select class = "form-control" name = "year_level">
								<option>Sexto</option>
								<option>Septimo</option>
								<option>Octavo</option>
								<option>Noveno</option>
								<option>Decimo</option>
								<option>Undecimo</option>
							</select>
					</div>
															
					<div class="form-group">
						<label>Genero</label>
							<select class = "form-control" name = "gender">
								<option>Hombre</option>
								<option>Mujer</option>
							</select>
					</div>
											
											
					<div class="form-group">
                        <label>Imagen</label>
						<input type="file" name="image"required> 
                    </div>
						<button name = "save" type="submit" class="btn btn-primary">Guardar Datos </button>
				</form>  
			</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
										
										
										
										
			<?php 
				require_once 'dbcon.php';
				
				if (isset ($_POST ['save'])){
					$position=$_POST['position'];
					$firstname=$_POST['firstname'];
					$lastname=$_POST['lastname'];
					$year_level=$_POST['year_level'];
					$gender=$_POST['gender'];
					$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
					$image_name= addslashes($_FILES['image']['name']);
					$image_size= getimagesize($_FILES['image']['tmp_name']);
		
					move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
					$location="upload/" . $_FILES["image"]["name"];
					
					
					$conn->query("INSERT INTO candidate(position,firstname,lastname,year_level,gender,img)values('$position','$firstname','$lastname','$year_level','$gender','$location')")or die(mysql_error());
				}						
			?>					
        </div>
                                   
<!-- /.modal-content -->
                                
	</div>
                               
<!-- /.modal-dialog -->
								
</div>