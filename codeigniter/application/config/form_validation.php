<?php

$config = [

			'admin_signin_validation' => 	[


											[

												'field' => 'email',
												'label' =>	'E-mail',
												'rules' => 	'required|trim|valid_email',

											],

											[

												'field' => 'fullname',
												'label' =>	'Full Name',
												'rules' => 'required|trim',

											],

											[

												'field' => 'companyname',
												'label' =>	'Company Name',
												'rules' => 'required|trim',

											],

											[

												'field' => 'username',
												'label' =>	'User Name',
												'rules' => 'required|trim',

											],

											[

												'field' => 'password',
												'label' =>	'Password',
												'rules' => 'required|trim',

											]


										],

			'admin_login_validation'=>[
										[
										'field'=>'log_email',
										'label'=>'E-mail',
										'rules'=>'trim'
										],

										[
										'field'=>'log_password',
										'label'=>'Password',
										'rules'=>'trim'
										]

									]

];