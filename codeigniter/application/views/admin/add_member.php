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
	  			  		<!-- <div class="col s12">
	  			  			<div class="card">
						    	<div class="card-content">
						    		<p class="card-title center-align">Add New GYM Member</p>
						    	</div>
					    	</div>
	  			  		</div> -->

					    <div class="col s12">
					      <ul class="tabs z-depth-1">
					        <li class="tab col s3"><a href="#test1" class="active" onclick="Materialize.showStaggeredList('#staggered-test')">Details</a></li>
					        <li class="tab col s3"><a href="#test2">GYM Info</a></li>
					        <li class="tab col s3"><a href="#test3">Membership</a></li>
					        <li class="tab col s3"><a href="#test4">Accounts</a></li>
					      </ul>
					    </div>
					    
					    <div id="test1" class="col s12">
					    	<div class="card">
						    	<div id="staggered-test" class="card-content">
						    		<?php echo form_open_multipart('dashboard/add_user_detail') ?>
						    		<div>
					    				<h5>Details</h5>
							    		<div class="divider"></div>
							    		<ul>
							    			<li>
							    				<div class="row">
							    					<div class="card col l6 offset-l6">

							    						<div class="file-field input-field">
													      <div class="btn">
													        <span>Add</span>
													        <input name="dt_img" type="file" multiple>
													      </div>
													      <div class="file-path-wrapper">
													        <a href="#!user"><img class="circle" src="/assets/img/m_o_01.png"></a>
													      </div>
													    </div>	
							    					</div>
							    					
							    				</div>
							    			</li>

									        <li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="dt_first_name" type="text" class="validate">
											          <label>First Name</label>
											        </div>
											        <!-- div class="input-field col s12 l6">
											          <input name="dt_last_name" type="text" class="validate">
											          <label>Last Name</label>
											        </div> -->
											      </div>
										    </li>
									      
										    <li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											        	<label class="active" for="birthdate">Birthdate</label>
											          <input name="dt_birthdate" type="date" class="datepicker">
											        </div>
											        <div class="input-field col s12 l6">
											        	Gender:
											        		<input type="radio" name="dt_gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male

														  <input type="radio" name="dt_gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
														  Female
														  
											        </div>
											      </div>
										    </li>

									      	<li>
									          	<div class="row">
											        <div class="input-field col s12 l4">
											          <input name="dt_age" type="text" class="validate">
											          <label>Age</label>
											        </div>
											        <div class="input-field col s12 l4">
											          <input name="dt_weight" type="text" class="validate">
											          <label>Weight</label>
											        </div>
											        <div class="input-field col s12 l4">
											          <input name="dt_blood_group" type="text" class="validate">
											          <label>Blood Group</label>
											        </div>
											      </div>
									      	</li>

									      	<li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="dt_nationality" type="text" class="validate">
											          <label>Nationality</label>
											        </div>
											        <div class="input-field col s12 l6">
											          <input name="dt_relagion" type="text" class="validate">
											          <label>Relagion</label>
											        </div>
											    </div>
										    </li>
									      
										    <li>
										      	<div class="row">
											        <div class="input-field col s12 l12">
											          <input name="dt_passport" type="text" class="validate">
											          <label>Passport NO.</label>
											        </div>
										        </div>
										    </li>

										    <li>
										      	<div class="row">
											        <div class="input-field col s12 l12">
											          <input name="dt_nid" type="text" class="validate">
											          <label>NID NO.</label>
											        </div>
										        </div>
										    </li>

								        </ul>
									        	
						    			
						    		</div>
						    		
					    			<div>
					    				<h5>Contact</h5>
							    		<div class="divider"></div>
								        <ul>
								        	<li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="ct_email" type="text" class="validate">
											          <label>Email</label>
											        </div>
											        <div class="input-field col s12 l6">
											          <input name="ct_phone" type="text" class="validate">
											          <label>Phone</label>
											        </div>
											    </div>
										    </li>

										    <li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="ct_p_address" type="text" class="validate">
											          <label>Present Address</label>
											        </div>
											        <div class="input-field col s12 l6">
											          <input name="ct_address_detail" type="text" class="validate">
											          <label>Block, Road, House</label>
											        </div>
											    </div>
										    </li>
								        </ul>	
					    			</div>
							        

					    			<div>
					    				<h5>Emergency Contact</h5>
							    		<div class="divider"></div>
								        <ul>
								        	<li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="ec_name" type="text" class="validate">
											          <label>Name</label>
											        </div>
											        <div class="input-field col s12 l6">
											          <input name="ec_relation" type="text" class="validate">
											          <label>Relation</label>
											        </div>
											    </div>
										    </li>

										    <li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="ec_p_address" type="text" class="validate">
											          <label>Present Address</label>
											        </div>
											        <div class="input-field col s12 l6">
											          <input name="ec_address_detail" type="text" class="validate">
											          <label>Block, Road, House</label>
											        </div>
											    </div>
										    </li>

										    <li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="ec_mobile" type="text" class="validate">
											          <label>Mobile</label>
											        </div>
											        <div class="input-field col s12 l6">
											          <input name="ec_telephone" type="text" class="validate">
											          <label>Telephone</label>
											        </div>
											    </div>
										    </li>

								        </ul>
					    			</div>
							        

					    			<div>
					    				<h5>Profetion Info</h5>
							    		<div class="divider"></div>
								        <ul>
								        	<li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="pi_ocupation" type="text" class="validate">
											          <label>Ocupation</label>
											        </div>
											        <div class="input-field col s12 l6">
											          <input name="pi_company_name" type="text" class="validate">
											          <label>Company Name</label>
											        </div>
											    </div>
										    </li>

										    <li>
									          	<div class="row">
											        <div class="input-field col s12 l6">
											          <input name="pi_address" type="text" class="validate">
											          <label>Address</label>
											        </div>
											        <div class="input-field col s12 l6">
											          <input name="pi_phone" type="text" class="validate">
											          <label>Phone</label>
											        </div>
											    </div>
										    </li>
								        </ul>
					    			</div>
							        <?php echo form_submit(['name'=>'submit', 'value'=>'Submit', 'class' =>'btn'])?>
					    			<?php echo form_close() ?>
						    	</div>
						    </div>
					    	
					    </div>
					    <div id="test2" class="col s12">
					    	<div class="card">
						    	<div id="staggered-test" class="card-content">
						    		<h5>GYM Info</h5>
						    		<div class="divider"></div>
						    		<ul>
							          	<li>
								          	<div class="row">
										        <div class="input-field col s12 l6">
										          <input id="first_name" type="text" class="validate">
										          <label for="first_name">Club Name</label>
										        </div>
										        <div class="input-field col s12 l6">
										          <input id="last_name" type="text" class="validate">
										          <label for="last_name">Trainer Name</label>
										        </div>
										      </div>
								      	</li>
								      	
								      	<li>
								          	<div class="row">
										        <div class="input-field col s12 l6">
										          <input id="first_name" type="text" class="validate">
										          <label for="first_name">Starting Date</label>
										        </div>
										        <div class="input-field col s12 l6">
										          <input id="last_name" type="text" class="validate">
										          <label for="last_name">Reffaranced</label>
										        </div>
										      </div>
								      	</li>

								      	<li>
								          	<div class="row">
										        <div class="input-field col s12 l6">
										          <input id="first_name" type="text" class="validate">
										          <label for="first_name">Age</label>
										        </div>
										        <div class="input-field col s12 l6">
										          <input id="last_name" type="text" class="validate">
										          <label for="last_name">Height</label>
										        </div>
										    </div>
								      	</li>

								      	<li>
								          	<div class="row">
										        <div class="input-field col s12 l6">
										          <input id="first_name" type="text" class="validate">
										          <label for="first_name">Health Condition</label>
										        </div>
										        <div class="input-field col s12 l6">
										          <input id="last_name" type="text" class="validate">
										          <label for="last_name">Reson</label>
										        </div>
										    </div> 
								      	</li>
								      
							        </ul>
						    	</div>
						    </div>
					    </div>
					    <div id="test3" class="col s12">
					    	<div class="card">
					    		<div class="card-content">
					    			<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add Membership</a>

						    	  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add Hold</a>

						    	  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add Gifted Item</a>
					    		</div>
					    	</div>
				    	  	
				    	  	<div class="card">
				    	  		<div class="card-content"> 
				    	  			<table>
				    	  				<thead>
				    	  					<tr>
				    	  						<td>Membership Type</td>
				    	  						<td>Price</td>
				    	  						<td>Start Date</td>
				    	  						<td>End Date</td>
				    	  						<td>Status</td>
				    	  						<td>Visit</td>
				    	  						<td>Action</td>
				    	  					</tr>
				    	  				</thead>
				    	  			</table>
				    	  		</div>	
				    	  	</div>


							  <!-- Modal Structure -->
							  <div id="modal1" class="modal">
							    <div class="modal-content">
							      <h4>Modal Header</h4>
							      <p>A bunch of text</p>
							    </div>
							    <div class="modal-footer">
							      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
							    </div>
							  </div>
					    </div>
					    <div id="test4" class="col s12">
					    	<div class="card">
					    		<div class="card-content">
					    			<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add Payment</a>

						    	  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Make Adjustment</a>

						    	  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Prepaid</a>
					    		</div>
					    	</div>
				    	  	
				    	  	<div class="card">
				    	  		<div class="card-content"> 
				    	  			<table>
				    	  				<thead>
				    	  					<tr>
				    	  						<td>Date</td>
				    	  						<td>Description</td>
				    	  						<td>Charged</td>
				    	  						<td>Paid</td>
				    	  						<td>Paid on</td>
				    	  						<td>Payment Note</td>
				    	  						<td>Running Balance</td>
				    	  					</tr>
				    	  				</thead>
				    	  			</table>
				    	  		</div>	
				    	  	</div>


							  <!-- Modal Structure -->
							  <div id="modal1" class="modal">
							    <div class="modal-content">
							      <h4>Modal Header</h4>
							      <p>A bunch of text</p>
							    </div>
							    <div class="modal-footer">
							      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
							    </div>
							  </div>
					    </div>
					</div>

				</div>
			</div>
		</div>
	</div>


<?php include_once('application/views/common/common_footer.php') ?>