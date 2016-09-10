// view
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


// container////////////////////////////////////////////
public function signin()
	{
		$this->form_validation->set_error_delimiters('<p class="red-text">', '</p>');

		if($this->form_validation->run('admin_signin_validation')){
			$this->load->library(array('session', 'form_validation', 'email'));
			$this->load->database();

			$this->load->model('signinmodel', 'signin');

			$data = $this->input->post();
			unset($data['submit']);
			$this->signin->admin_signin($data);

			return redirect('admin');
		}else{
			$this->load->view('admin/login');
			// echo "signin not";
			// echo validation_errors();
		}
	}

	public function login()
	{
		$this->form_validation->set_error_delimiters('<p class="red-text">', '</p>');
		
		if($this->form_validation->run('admin_login_validation')){

			$email    = $this->input->post('log_email');
			$password = $this->input->post('log_password');

			$this->load->model('loginmodel');

			$login_id = $this->loginmodel->login_valid($email, $password);
			if($login_id){

				$this->session->set_userdata('user_id', $login_id);
				return redirect('dashboard');
			}else{

				$this->load->view('admin/login');
			}

			
		}else{
			$this->load->view('admin/login');
		}
	}


// model

class Signinmodel extends CI_Model{
	
	public function admin_signin($data)
	{
		// print_r($data); exit;
		return $this->db->insert('user_signin', $data);
	}
}

class Loginmodel extends CI_Model
{
	public function login_valid( $email, $password )
	{
		$q = $this->db->where(['email'=>$email, 'password'=>$password])
							->get('user_signin');

		if($q->num_rows()){

			return $q->row()->id;

		}else{

			return FALSE;
		}
	}
	
}