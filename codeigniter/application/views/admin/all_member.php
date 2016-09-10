<?php include_once('application/views/common/common_header.php') ?>
	<div class="gs-dashboard">
		<header>
			  <?php include_once('application/views/common/admin_nav_header.php') ?>
		</header>
		
		<div class="container-fluid">
			<div class="row">
				<?php include_once('application/views/common/admin_nav_side.php') ?>

				<div class="col l10">
					 
	  			  	<div class="row container">
	  			  		<?php foreach($allmembers as $allmember): ?>
	  			  		<div class="col l4 card">
	  			  			<div class="card-content">
	  			  				<ul>
	  			  					<li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="dt_first_name" type="text" class="validate">
											          <label><?= $allmember->dt_first_name ?></label>
											        </div>
											        <!-- div class="input-field col s12 l6">
											          <input name="dt_last_name" type="text" class="validate">
											          <label>Last Name</label>
											        </div> -->
											      </div>
										    </li>
									      
										    <li>
									          	<div class="row">
											        <!-- div class="input-field col s12 l6">
											        	<label class="active" for="birthdate">Birthdate</label>
											          <input name="dt_birthdate" type="date" class="datepicker">
											        </div> -->
											        <div class="input-field col s12 l6">
											        	Gender:
											        	<br />

											        	<?php
											        	// $gender = 'male'; 
											        	$g_value = $allmember->dt_gender;
											        	?>

											        	<?php echo $g_value ?>
											        		<input type="radio" name="dt_gender" <?php if ( $g_value==="male") echo "checked";?> value="male">Male
											        		<br />

														  <input type="radio" name="dt_gender" <?php if ( $g_value==="female") echo "checked";?> value="female">
														  Female
														  
											        </div>
											      </div>
										    </li>
	  			  				</ul>
	  			  			</div>
	  			  		</div>
	  			  		<?php endforeach ?>
	  			  	</div>
			  	</div>
		  	</div>
	  	</div>
  	</div>
