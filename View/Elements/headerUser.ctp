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

						<!-- BOTON PARA REGISTRARSE -->

						<ul class="nav pull-right">

							<li><a href="#">
								<?php 

								echo $this->Session->read("Auth.User.NOMBRE")." ".$this->Session->read("Auth.User.APELLIDO");	

								?>


							</a></li>	        				        

						</ul>	
			</div>     
    	</div>
 	</div>
</div>
			 