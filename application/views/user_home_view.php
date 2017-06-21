 <!DOCTYPE html>
	<?php foreach($results as $row){
		if (array_key_exists('username', $row)) {
			$username = $row->username;
			$user_id = $row->user_id;
		}
		else {
			$username = $row->email;
		}
	}?>
<html>
 <body> 
 	<div class="container">

		<div  id="body_cont">
			<h1>Welcome <?php echo $username; ?>!</h1>
			
			<div  id="secondary_nav">
				<a href="<?php echo site_url()?>/Site/newTask/<?php echo $user_id?>" class="btn btn-info" role="button">New Task</a>
				<a href="<?php echo site_url().'/Site/newProject';?>" class="btn btn-info" role="button">New Project</a>
			</div>
		</div>
	
			
	<div class="container-fluid">
  		<div class="row">
			<div class="col-6 col-md-2">
  				<asideTop>
					<h4><a href="completeTasks">Completed Tasks</a></h4>
				</asideTop>
				<asideBottom>
					<h4><a href="projects">Projects</a></h4>
				</asideBottom>		
		</div>
  			<div class="col-6 col-md-8">
  				<sectionTop>
					<h4>In Progress</h4>
					<?php foreach ($tasks as $row1):?>
					<?php if($row1->task_status == "2"):?>
					<taskTickets>
  							<div class="btn-group" role="group">
    								<a href="<?php echo site_url()?>/Task/manage_task/<?php echo $row1->task_id?>" type="button" class="btn btn-default"><?php echo $row1->task_name?></a>
							</div>
					</taskTickets>
					<?php endif;?>
					<?php endforeach;?>
				</sectionTop>
				<sectionBottom>
					<h4>Not Started</h4>
					<?php foreach ($tasks as $row2):?>
					<?php if($row2->task_status == "1"):?>
					<taskTickets>
  							<div class="btn-group" role="group">
    								<a href="<?php echo site_url()?>/Task/manage_task/<?php echo $row2->task_id?>" type="button" class="btn btn-default"><?php echo $row2->task_name?></a>
							</div>
					</taskTickets>
					<?php endif;?>
					<?php endforeach;?>	
				</sectionBottom>	
			</div>
  		</div>
	</div>
	</div>
</body>