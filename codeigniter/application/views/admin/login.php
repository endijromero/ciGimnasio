<?php include_once('application/views/common/common_header.php') ?>

<div class="gs-login">
	<header>
		  <div class="navbar-fixed">
		      <nav class="gs-login-header">
			    <div class="nav-wrapper container">
			      <a href="#!" class="brand-logo">GR Gimnasio</a>
			      	<?= form_open('admin/login') ?>
			      		 <ul id="mobile-demo" class="right hide-on-med-and-down">
					        <li>
					        	<div class="row">
							        <div class="input-field col s12">
							        	<div><?php echo form_error('log_email') ?></div>
							        	<?= form_input(['name'=>'log_email', 'placeholder'=>'email', 'class'=>'validate'])?>
							        </div>
					      		</div>
					        </li>
					        <li>
					        	<div class="row">
							        <div class="input-field col s12">
							        	<div><?php echo form_error('log_password') ?></div>
							        	<?= form_password(['name'=>'log_password', 'placeholder'=>'password', 'class'=>'validate']); ?>
							        </div>
						      	</div>
					        </li>
					        <li>
					        	<?= form_submit(['name'=>'login', 'value'=>'Login', 'class'=>'waves-effect waves-light btn']); ?>
					        </li>
					    </ul>
				    <?= form_close()?>
			    </div>
			  </nav>
		  </div>
	</header>

	<div class="container-fluid gs-login-container">
		<div class="row gs-lc-inner">
			<div class="col s12 l4 offset-l4">
		      	
				<div class="row">
					<div class="col s12">
						  <div class="card">
						    <div class="card-content">
						    	<h5 class="center">GR Gimnasio</h5>
						    	<h6 class="center">Login or Signin and manage your Gym</h6>
						    	<br />
						    	<h6>Don't Have an account? Please Signin</h6>
							    <div class="gn-signin">
								  <div class="row">
								  	<?php echo form_open('admin/signin', ['class'=> 'col s12']) ?>

							    		<div class="row">
									        <div class="input-field col s12">
									        	<?php echo form_input(['name'=>'email', 'class'=>'validate',  'type'=>'email', 'value'=>set_value('email')]);?>

									          <label for="email">Email</label>

									          <div><?php echo form_error('email') ?></div>
									        </div>
								      	</div>
									    
								      	<div class="row">
									        <div class="input-field col s12">
									        	<?php echo form_input(['name'=>'fullname', 'class'=>'validate',  'type'=>'text', 'value'=>set_value('fullname')]);?>
									          
									          <label for="last_name">Full Name</label>
									          <div><?php echo form_error('fullname') ?></div>
									        </div>
								      	</div>

								      	<div class="row">
									        <div class="input-field col s12">
									        	<?php echo form_input(['name'=>'companyname', 'class'=>'validate',  'type'=>'text', 'value'=>set_value('companyname')]);?>
									          <label for="last_name">Company Name</label>
									          <div><?php echo form_error('companyname') ?></div>
									        </div>
								      	</div>

								      	<div class="row">
									        <div class="input-field col s12">
									          <?php echo form_input(['name'=>'username', 'class'=>'validate',  'type'=>'text', 'value'=>set_value('username')]);?>
									          <label for="last_name">User Name</label>
									          <div><?php echo form_error('username') ?></div>
									    	</div>
								      	</div>

								      	<div class="row">
									        <div class="input-field col s12">
									        	<?php echo form_password(['name'=>'password', 'class'=>'validate',  'type'=>'password']);?>
									          <label for="password">Password</label>
									          <div><?php echo form_error('password') ?></div>
									        </div>
								      	</div>

								      	<div class="row">
								      		<?php 
								      			echo form_reset(['name'=>'submit', 'class'=> 'waves-effect waves-light btn', 'value'=> 'Reset']),
								      				form_submit(['name'=> 'submit', 'class'=>'btn waves-effect waves-light', 'value'=> 'Signin']);
								      		?>
								      	
									  	</div>
								      
								    <?php echo form_close() ?>
								  </div>     
							    </div>
							      
						      </h6>
						    </div>
						    
					  	</div>
					</div>
					<!-- <div class="col s6">
						  <div class="card">
						    <div class="card-content">
						    	<h5 class="center">GR Gimnasio</h5>
						    	<h6 class="center">Login or Signin and manage your Gym</h6>
						    	<br />
						    	<h6>Have an account? Login</h6>
							    <div class="gn-login">
								  <div class="row">
								    <form class="col s12">

								      <div class="row">
								        <div class="input-field col s12">
								          <input id="last_name" type="text" class="validate">
								          <label for="last_name">User Name</label>
								        </div>
								      </div>
								      <div class="row">
								        <div class="input-field col s12">
								          <input id="password" type="password" class="validate">
								          <label for="password">Password</label>
								        </div>
								      </div>
								      
								    </form>
								  </div>     
							    </div>
						    </div>
						    
						  </div>
					</div> -->

				</div>
				
				<div class="row">
			        <div class="col s12">
			          <div class="card darken-1">
			            <div class="card-content">
			              <p>Membership Software provided by</p>
			              <span class="card-title">GeoRanus</span>
			            </div>
			          </div>
			        </div>
		      	</div>
			</div>
		</div>
	</div>
</div>


<?php include_once('application/views/common/common_footer.php') ?>