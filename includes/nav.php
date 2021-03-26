<?php
session_start();
$_SESSION['session'] = 0;
?>
<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2">
					<div id="gtco-logo"><a href="index.php">SportBud.</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="progress.php">Progress</a></li>
						<!-- <li><a href="about.html">Services</a></li> -->
						<li class="has-dropdown">
							<a>Blog</a>
							<ul class="dropdown">
								<li><a href="./../Jonas.php">Jonas</a></li>
								<li><a href="./../jordi.php">Jordi</a></li>
								<li><a href="./../laurence.php">Laurence</a></li>
								<li><a href="./../louis.php">Louis</a></li>
							</ul>
						</li>
                        <li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
			
		</div>
</nav>