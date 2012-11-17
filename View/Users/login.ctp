<h1>Login</h1>

<!-- MENSAJE FLASH -->

		<div id="flashMessage" > 
			<?php echo $this->session->Flash(); ?>
		</div>

<?php 
	echo $this->Session->flash('auth');
	echo $this->Form->create('User', array('action' => 'login'));

	echo $this->Form->input('username', array('label' => 'EMAIL'));
	echo $this->Form->input('password', array('type' => 'password', 'label' => 'CONTRASEÑA'));	

	echo $this->Form->end('Ingresar');

?>