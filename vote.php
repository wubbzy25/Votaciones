<?php include ('head.php');?>
<?php include("sess.php")?>
<body>
    <div id="wrapper">
        <?php include ('side_bar.php');?>
    </div>
	<form method = "POST" action = "vote_result.php">
	<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
                            Personero</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Personero'") or die(mysqli_errno());
							while($fetch = $query->fetch_array())
						{
						?>
                           <div id = "position">
							<center><img src = "admin/<?php echo $fetch['img']?>" style ="border-radius:6px;" height = "150px" width = "150px" class = "img"></center>
							
							<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
							<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "pres_id" class = "president"></center>
							</div>
	
						<?php
							}
						?>

						</div>
                       
                    </div>
     </div>
				
				
				<div class="col-lg-6">
	
                    <div class="panel panel-primary">
                        <div class="panel-heading"><center>
							Contralor</center>
                        </div>
                        <div class="panel-body" style = "background-color:;">
						<?php
							$query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'Contralor'") or die(mysqli_errno());
							while($fetch = $query->fetch_array()){
						?>
		<div id = "position">
			<center><img class = "image-rounded" src = "admin/<?php echo $fetch['img']?>"style ="border-radius:6px;" height = "150px" width = "150px"></center>
		<center><button type="button" class="btn btn-primary btn-xs" style = "border-radius:60px;margin-top:4px;"><?php echo $fetch['firstname']." ".$fetch['lastname']?></button></center>
			<center><input type = "checkbox" value = "<?php echo $fetch['candidate_id'] ?>" name = "vpinternal_id" class = "vpinternal"></center>
		</div>
						<?php
							}
						?>

						</div>
                       
                    </div>
                </div>	
		<center><a href= "submit_vote.php" class = "btn btn-success ballot" type = "submit" name = "submit">Votar</a></center>
		</form>
</body>
<?php include ('script.php')?>
  
  <script type = "text/javascript">
		$(document).ready(function(){
			$(".president").on("change", function(){
				if($(".president:checked").length == 1)
					{
						$(".president").attr("disabled", "disabled");
						$(".president:checked").removeAttr("disabled");
					}
				else
					{
						$(".president").removeAttr("disabled");
					}
			});
			
			$(".vpinternal").on("change", function(){
				if($(".vpinternal:checked").length == 1)
					{
						$(".vpinternal").attr("disabled", "disabled");
						$(".vpinternal:checked").removeAttr("disabled");
					}
				else
					{
						$(".vpinternal").removeAttr("disabled");
					}
			});
			

		});	
	</script>
</html>

