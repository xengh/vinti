<!DOCTYPE html>
<html >
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $title_for_layout; ?>
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="http://code.jquery.com/jquery-latest.js"></script>

	<?php echo $this->Html->script('bootstrap'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->Html->script('bootstrap-dropdown'); ?>
   

	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-responsive');
		echo $this->Html->css('bootstrap-responsive.min');
		echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
</head>



<!—[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]—>

<script>
	$(function() {
  // Setup drop down menu
  $('.dropdown-toggle').dropdown();
 
  // Fix input element click problem
  $('.dropdown input, .dropdown label').click(function(e) {
    e.stopPropagation();
  });
});

	
</script>



<body>
	

	<!-- HEADERS -->

	<div id="header" class="container">
		<?php 

			if($this->Session->read('Auth.User.ROLE') == 'Client'){

				echo $this->element('headerCliente');

			}elseif($this->Session->read('Auth.User.ROLE') == 'User'){

				echo $this->element('headerUser');

			}elseif($this->Session->read('Auth.User.ROLE') == 'Admin'){

				echo $this->element('headerAdmin');
				
			}else{

				echo $this->element('headerInicio');
			}
			

		?>

		

	</div>	

	<!-- CONTENIDO DEL SITIO -->


	<div id="content" class="container">

		<?php echo $this->Session->flash(); ?>
		<br><br><br>
		<?php echo $this->fetch('content'); ?>

	</div>
		
	<!-- FOOTER -->

 	<div class="footer container" style="margin-top: 50%;">
		
		<div class="nav pull-left">
		<?php echo $this->Html->link('Quienes somos', array()); ?> &nbsp;&nbsp;

		<?php echo $this->Html->link('Contactenos',  array()); ?> &nbsp;&nbsp;

		</div> 

		<div class="pull-right">&copy; Vinti 2012</div>

		

	</div> -->



	
	
</body>
</html>
