<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

    	<div class="container">
     
			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</a>
     
			<!-- Be sure to leave the brand out there if you want it shown -->
			<a class="brand" href="/vinti">Maxicuesco</a>

			
     

			<!-- Everything you want hidden at 940px or less, place within here -->

			<div class="nav-collapse">
				<!-- <A>uí va todo lo que contiene la barra de navegacion con colapse para el responsive -->		

				<!-- CATEGORIAS DE LA BARRA DE NAVEGACION -->	

					<ul class="nav">

				    <li><a href="#categorias">Categoria de productos</a></li>  

					</ul>

			 	

				<!-- BARRA DE BÚSQUEDA -->

					<ul class="nav pull-right">
						<form class="navbar-search">
		  					<input type="text" class="search-query" placeholder="Buscar">
						</form>
					</ul>

				
				<!-- INICIAR SESION -->
						
					<ul class="nav pull-right">	 
						<li class="dropdown" id="menu1">
										
							<a class="dropdown-toggle" data-toggle="dropdown" data-target="#fat" href="#menu1">
							    Ingresar
						    	<b class="caret"></b>
							</a>
					
							<ul class="dropdown-menu role="menu" aria-labelledby="dLabel"">
								<!-- <form class="nav-form pull-left" id="UserLoginForm" action="/vinti/users/login"> -->

									<?php echo $this->Form->create('User', array('action' => 'login', 'class' => 'nav-form pull-left')) ?>									

									<?php 
										echo $this->Session->flash('auth');
										echo $this->Form->create('User', array('action' => 'login'));

										?><li><a tabindex="-1"><?php echo $this->Form->input('username', array('label' => '', 'placeholder' => 'email')); ?></li></a> <?php
										?><li><a tabindex="-1"><?php echo $this->Form->input('password', array('type' => 'password', 'label' => '', 'placeholder' => 'contraseña'));?></li></a> 

										<li><a tabindex="-1"><?php	echo $this->Form->end('Ingresar');	?></a></li>

								</form>
							</ul>

						</li> 	

					</ul>

					<!-- BOTON PARA REGISTRARSE -->

					<ul class="nav pull-right">

						<li><a href="/vinti/users/add">Regístrate</a></li>					        				        
						<li class="divider-vertical"></li>	

					</ul>


			</div>
     
    	</div>
 	</div>
</div>
			 