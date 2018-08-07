	<form name="contactForm" id="contactForm" novalidate>
	    <div class="row">
	        <div class="col-xs-12">
	            <div class="form-group controls">
	               <label for="#">First Name*</label>
	                <input type="text" class="form-control" id="firstname" placeholder="First Name *" required title="Please enter your First name.">
	                <p class="help-block text-danger"></p>
	            </div>
	            <div class="form-group controls">
	            	<label for="#">Last Name*</label>
	                <input type="text" class="form-control" id="lastname"  placeholder="Last Name *" required title="Please enter your Last Name.">
	                <p class="help-block text-danger"></p>
	            </div>
	            <div class="form-group">
	            				<label for="#">Your Email*</label>
	                <input type="email" class="form-control" id="email"  placeholder="Your Email *" required title="Please enter your email address.">
	                <p class="help-block text-danger"></p>
	            </div>
	            <div class="form-group">
	            				<label for="#">Your Phone*</label>
	                <input type="tel" class="form-control" id="phone"  placeholder="Your Phone *" required title="Please enter your phone number." required="">
	                <p class="help-block text-danger"></p>
	            </div>
	            <div class="form-group">
	            				<label for="#">Your Message*</label>
	                <textarea class="form-control" id="message"  placeholder="Your Message *" required title="Please enter a message."></textarea>
	                <p class="help-block text-danger"></p>
	            </div>
	        <div class="clearfix"></div>
	         <div class="col-xs-12">
	             <div id="success-contact"></div>
	             <button type="submit" id="submitBtn" class="btn btn-success btn-xl contact">SEND</button>
	         </div>
	    </div>
	</form>
