

   <!-- contact
   ================================================== -->
   <section id="contact">

<div class="row section-intro">
   <div class="col-twelve">

	   <h5>Contact</h5>
	   <h1>I'd Love To Hear From You</h1>

	   <p class="lead"></p>

   </div> 
</div> <!-- /section-intro -->

<div class="row contact-form">

   <div class="col-twelve">

	<!-- form -->

	<form method="post" action="<?php echo base_url('save_message')?>">
		  <fieldset>

		  <div class="form-field">
					<input name="nama" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="" maxlength="33">
		  </div>
		  <div class="form-field">
				 <input name="mail" type="email" id="contactEmail" placeholder="Email" value="" required=""  maxlength="33">
		   </div>
		  <div class="form-field">
					<input name="subject" type="text" id="contactSubject" placeholder="Subject" value=""  maxlength="33">
		   </div>                       
		  <div class="form-field">
				 <textarea name="isi_pesan" id="contactMessage" placeholder="message" rows="10" cols="50" required=""  maxlength="140"></textarea>
		   </div>                      
		   <div class="form-field"><br>
		   <div class="g-recaptcha" data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>

		   </div>
		 <div class="form-field">
			 <button type='submit' class="submitform">SEND</button>
			 <div id="submit-loader">
				<div class="text-loader">Sending...</div>                             
					 <div class="s-loader">
							  <div class="bounce1"></div>
							  <div class="bounce2"></div>
							  <div class="bounce3"></div>
						</div>
					</div>
		  </div>

		  </fieldset>
	  </form> <!-- Form End -->

	<!-- contact-warning -->
	<div id="message-warning">            	
	</div>            
	<!-- contact-success -->
	  <div id="message-success">
	   <i class="fa fa-check"></i>Your message was sent, thank you!<br>
	  </div>

 </div> <!-- /col-twelve -->
   
</div> <!-- /contact-form -->
	
	<!-- end contact -->
   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
			   Pondok Gede Street<br>Bekasi City<br>17443
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>adefathudin76@gmail.com			   				     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Telegram: <a href="https://t.me/adefathudin76" target="_blank">adefathudin76</a>
			   </p>

   		</div>
		 
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->