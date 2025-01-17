<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>
<!DOCTYPE html>
<html class="h-100">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Secretar&iacute;a de movilidad: Biciestacionamiento
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['bici']) ?>

    <?= $this->fetch('meta') ?>
    
	<?php echo $this->Html->css('bootstrap.min.css'); ?>
	<?php echo $this->Html->script('jquery-3.3.1.slim.min'); ?>
	<?php echo $this->Html->script('popper.min'); ?>
    <?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->Html->script('bootstrap.bundle'); ?>

</head>
<body class="d-flex flex-column h-100">
	

	<nav class="navbar navbar-expand-lg ">
		<div class="d-flex flex-grow-1">
			<span class="w-100 d-lg-none d-block"></span>
			<a class="navbar-brand d-none d-lg-inline-block px-4" href="#">
				<?php echo $this->Html->image('logo_secretaria_movilidad.png', ['width'=>"150", 'alt'=>"Secretaria de Movilidad"]); ?>
			</a>
			<a class="navbar-brand-two mx-auto d-lg-none d-inline-block px-4" href="#">
				<?php echo $this->Html->image('logo_secretaria_movilidad.png', ['width'=>"150", 'alt'=>"Secretaria de Movilidad"]); ?>
			</a>
			<div class="m-2 w-100 text-right">
				<button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
					<span class="navbar-toggler-icon custom-toggler"></span>
				</button>
			</div>
		</div>

		
		<div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar">
			<ul class="navbar-nav ms-auto flex-nowrap">
				<li class="nav-item">					
					<?php echo $this->Html->link('INICIO', [
						'controller' => 'Pages',
						'action' => 'display'
					], ['class' => 'nav-link nav-active']); ?>

				</li>
				<li class="nav-item dropdown" id="myDropdown">
					
					<?php echo $this->Html->link('PROCESO PARTICIPATIVO', [
						'controller' => 'Pages',
						'action' => 'procesoparticipativo'
					], ['class' => 'nav-link nav-active', 'data-bs-toggle' => 'dropdown']); ?>


					<ul class="dropdown-menu">
						<li>							
							<?php echo $this->Html->link('Resultados (Infografía)', [
								'controller' => 'Pages',
								'action' => 'procesoparticipativo', 1
							], ['class' => 'dropdown-item']); ?>
						</li>
						<li>
							<?php echo $this->Html->link('Desarrollo', [
								'controller' => 'Pages',
								'action' => 'procesoparticipativo', 2
							], ['class' => 'dropdown-item']); ?>
						</li>
						<li>
							<?php echo $this->Html->link('Metodología', [
								'controller' => 'Pages',
								'action' => 'procesoparticipativo', 3
							], ['class' => 'dropdown-item']); ?>
						</li>
						<li>
							<?php echo $this->Html->link('Seguimiento', [
								'controller' => 'Pages',
								'action' => 'procesoparticipativo', 4
							], ['class' => 'dropdown-item']); ?>
						</li>
					</ul>
				</li>

				<li class="nav-item dropdown" id="myDropdown2">
					<a class="nav-link" href="#" data-bs-toggle="dropdown">GOBIERNO ABIERTO</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Mapa interactivo</a></li>
						<li><a class="dropdown-item" href="#">Descarga de informaci&oacute;n</a></li>
					</ul>
				</li>
		
					
				
			
			</ul>
		</div> 


	</nav> 
	

	
    <main class="main flex-shrink-0">
        <div class="container-fluid">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-10 col-lg-10 col-xl-10 col-xxl-10"></div>
			<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2"><?php echo $this->Html->image('logo_semovi.png', ['width'=>"150", 'alt'=>"Secretaria de Movilidad"]); ?></div>
		</div>
    </main>

	<footer class="my-footer align-bottom mt-auto">
		<div class="mt-2">&copy;Copyright 2021 Copyright.mx - Todos los derechos reservados | Aviso de privacidad</div>  
	</footer>

 <script>
 document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth < 992) {

  // close all inner dropdowns when parent is closed
  document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
    everydropdown.addEventListener('hidden.bs.dropdown', function () {
		
      // after dropdown is hidden, then find all submenus
        this.querySelectorAll('.submenu').forEach(function(everysubmenu){
          // hide every submenu as well
          everysubmenu.style.display = 'none';
        });
    })
  });

  document.querySelectorAll('.dropdown-menu a').forEach(function(element){
    element.addEventListener('mouseover', function (e) {
        let nextEl = this.nextElementSibling;
        if(nextEl && nextEl.classList.contains('submenu')) {	
          // prevent opening link if link needs to open dropdown
          e.preventDefault();
          if(nextEl.style.display == 'block'){
            nextEl.style.display = 'none';
          } else {
            nextEl.style.display = 'block';
          }

        }
    });
  })
}
// end if innerWidth
}); 
 </script>
</body>
</html>
