	<!-- header 
   ================================================== -->
   <header>   	

	<!-- Status pesan sukses -->
	<?php print_r($this->session->flashdata('success')); ?>
   
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.php">Menu</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>	
						<li><a class="smoothscroll"  href="#blog" title="">Blog</a></li>	
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->