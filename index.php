<!DOCTYPE html>
<!-- Objectives -->
					<!-- 
						1.Javascript Libraries
							1. Use jQuery
								a. On click function
								b. Injections
								c.
							2. Angular JS
							3. React JS
						2. Modals
						3. Bootstrap Popular Classes 
							a. Columns
							b. Accordions
							c. Responsiveness
							d. Images
							e. Navigation
					-->
				<!--/ Objectives  -->
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Tutorials</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css"></link>
	<link rel="stylesheet" href="css/bootstrap-select.min.css"></link>
</head>
<body>
		
		<header>	
			<div>
				<nav class="navbar navbar-fixed-top nav-center">
					
						<ul class="nav">
						<li><a href="#">Bootstrap</a></li>
						<li><a href="#">jQuery</a></li>
						<li><a href="#">Angular JS</a></li>
						<li ><a href="#">React JS </a></li>
						</ul>
				</nav>
			</div>
		</header>	
	
		<div class="container">
				
			<div class="row">
					<div col-md-12>
						<h1 class="page-title">Tutorials</h1>
					</div>
			
				<div class="jumbotron col-md-12">
					<img src="images/me.jpeg" class="img-rounded pull-left" alt="Lehlohonolo Motsoeneng">
					<p>
							<a href="https://getbootstrap.com/">Bootstrap</a> is also a powerful tool for front-end developing, it has alot of benefits to use.
		
							To list Bootstrap's benefits click below.
					</p>
					<p>
						<a href="https://jquery.com/">Javascript</a> is a strong tool to know, many years I ran away from it, but now am facing my demons.
					
							To list Bootstrap's benefits click below.
					</p>
				
					<a class="btn btn-primary" href="javascript:void(0)">Click</a>
				</div> 
				<!-- jumbotron -->
				<div class="col-md-6 pull-left">
					<p>
						This tutorial consist of Javascript and it's Libraries and Frameworks. It also uses components of Bootstrap purely. 
						</p>
						<p>
						<ul>
							<li>1.Javascript Libraries
								<ul>
									<li>1.1 Use jQuery
										<ul>
											<li>a. On click function</li>
											<li>b. Injections</li>
											
										</ul>
									</li>
								<li>1.2. Angular JS</li>
								<li>1.3. React JS</li>
							</ul>
							</li>
								<li>2. Modals</li>
								<li>3. Bootstrap Popular Classes 
									<ul>
										<li>a. Columns</li>
										<li>b. Accordions</li>													<li>c. Responsiveness</li>
										<li>d. Images</li>
										<li>e. Navigation</li>
									
									</ul>
								</li>
					</ul>
					</p>
				</div>
				
				<div id="readmore" class="col-md-6 pull-left">
					
					<p>
						This tutorial consist of Javascript and it's Libraries and Frameworks. It also uses components of Bootstrap purely. 
						</p>
						<p>
						<ul>
							<li>1.Javascript Libraries
								<ul>
									<li>1.1 Use jQuery
										<ul>
											<li>a. On click function</li>
											<li>b. Injections</li>
											
										</ul>
									</li>
								<li>1.2. Angular JS</li>
								<li>1.3. React JS</li>
							</ul>
							</li>
								<li>2. Modals</li>
								<li>3. Bootstrap Popular Classes 
									<ul>
										<li>a. Columns</li>
										<li>b. Accordions</li>													<li>c. Responsiveness</li>
										<li>d. Images</li>
										<li>e. Navigation</li>
									
									</ul>
								</li>
					</ul>
					</p>
				</div>
				<div id="react-container">
						
				</div>
				<div>
				<?php
							$names =array('Hloni', 'Thembi');
							$lastnames = array('Shabalala','Motsoeneng');
						?>

						<table style=" width:300px">
							<thead>
								<tr>
									<th>
										Name
									</th>
									<th>
										Surname
									</th>
								</tr>
							</thead>
							<tbody>
							<?php //foreach($names as $name): ?>
								<tr>
									<?php 
									// echo '<pre>';
									// print_r($names);
									// echo '</pre>';
											//foreach($names as $name): ?>
									<td>
										Loo
										<?php //$name?>
									
									</td>
									<td>
										Loop
										<?php //$name?>
									
									</td>
									
									<?php //endforeach?>
								</tr>
							</tbody>
						</table>
						<hr>
						<?php
							


								$names = array("1A","1B","1C","2A","2B","2C","3A","3B","3C");
									$user_names = array("Jen", "Smith", "Nick", "Rose", "Jason", "Ralph", "Bruce","Linda", "Kate");

									$combine = array_combine($names, $user_names);



									$html = "<table>";
									$html .= "<tr><td>Sl.No</td><td>Name</td><td>Username</td></tr>";
									$i = 1;
									foreach ($combine as $names =>  $user_names):

										$html .= "<tr>";
										$html .= "<td>".$i."</td>";
										$html .= "<td>".$names."</td>";
										$html .= "<td>".$user_names."</td>";
										$html .= "</tr>";

										$i++;
									endforeach;
									$html .= "</table>";

									echo $html;


								$names = array("1A","1B","1C","2A","2B","2C","3A","3B","3C");
								$user_names = array("Jen", "Smith", "Nick", "Rose", "Jason", "Ralph", "Bruce","Linda", "Kate");
								$dob = array("12","13","14","15","16","17","18","19","20");
								$height = array("6","7","8","5","4","7","5","9","5");


								$html = "<table>";
								$html .= "<tr><th>Sl.No</th><th>Name</th><th>Username</th><th>dob</th><th>height</th></tr>";

								foreach ($names as $id => $key):

										$html .= "<tr>";
										$html .= "<td>".($id+1)."</td>";
										$html .= "<td>".$key."</td>";
										$html .= "<td>".$user_names[$id]."</td>";
										$html .= "<td>".$dob[$id]."</td>";
										$html .= "<td>".$height[$id]."</td>";
										$html .= "</tr>";

								endforeach;

								$html .= "</table>";
								echo $html;
						?>
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- container -->
		<footer class=footer>
			
				<p>Copyright &copy; <?= date('Y')?> |<a href="https://github.com/Hlokolozer"> Lehlohonolo Motsoeneng</a> </p>
			
		</footer>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
		<script type="text/javascript" src="js/angular.js"></script>
		<script type="text/javascript" src="js/react.js"></script>
		<script type="text/javascript" src="js/react-dom.js"></script>
		<script src="index.js"></script>
		
		<script type="text/javascript">
		
		(function($)
		{
			
			$('.btn').on('click',function(e){
				//alert('Button Clicked');
				//window.location.href('htttp://www.google.com');
				// $(location).attr('href', 'http://stackoverflow.com');
				$('#readmore').animate({left:'50px'},'slow');
			});
		})(jQuery);

		</script>
		<script type="text/javascript">
			(function($){
				$('#readmore').addClass('well');
				// $('ul li:last-child').append('4. Appending');	
				
				//$('#readmore').css('background-color','grey');
				
			})
			(jQuery);
		</script>

		<script type="text/javascript">
			$(document).ready(function(){
				(function($){
					$('#readmore').animate({left:'400px'},'slow');
				})(jQuery);
			});
		</script>
		
</body>
</html>