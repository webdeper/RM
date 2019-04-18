<title>CLINICAL ENQUIRY | Research Mentor </title>
<?php 
include 'header.php';
?>
    
    
    
    <div class="jumbotron" id="jumbointro">
    	<div class="container">
    		<div class="col-md-6">
    			<h1 class="display-4">Clinical Enquiry</h1>
    		</div>
    		<div class="col-md-6" style="font-family: mr">
    		<a href="index.html" style="color: white; ">Research Mentor </a>/ Clinical Enquiry
    		</div>
    		
    	</div>
    </div>
    
   
  
 


    <div class="jumbotron contact" id="main-info">
    	<div class="container">
    	<center>
    		<img src="img/Group%201.jpg" width="900px" alt="">
    	</center>
    	<br>
			<p class="lead">
				Research Mentor's Clinical CRO department will help you to achieve optimal results in terms of cost, time and quality as your new drug / health functional food development partner.
			</p>
    	<div class="row">
    		<div class="col-md-2"></div>
    	<div class="col-md-10">
    	<h3>Enquiry about Clinical Issue</h3>
    	<br>
    	<form class="form" action="#" name="form" method="post" >
    		<div class="form-row">
    <div class="col">
      <input type="text" class="form-control required" placeholder="Name"   name="name">
    </div>
    <div class="col">
      <input type="number" class="form-control required" placeholder="Phone " name="phone">
    </div>
    <div class="col">
      <input type="email" class="form-control required" placeholder="Email"   name="email">
    </div>
  </div>
   	<br>
   		<div class="form-row">
    <div class="col">
      <input type="text" class="form-control required" placeholder="Company"   name="company">
    </div>
    <div class="col">
      <input type="text" class="form-control required" placeholder="Divisions"   name="division">
    </div>
    <div class="col">
      <input type="text" class="form-control " placeholder="Position"  name="position">
    </div>
  </div>
<br>
  	<select class="custom-select " id="inlineFormCustomSelectPref" name="dropdown">
    <option selected>Services</option>
   <option value="For bio medical research">For bio medical research</option>
    <option value="For social science">For social science</option>
    <option value=" For big"> For big </option>
    <option value="For business ">For business 
</option>
  </select>
   	<br>
   	<br>
   	 <textarea class="form-control required" rows="4" name="message"  id="validationTextarea" placeholder="Explain here" required></textarea>
   
   	 <br>
   	 <input class="btn btn-danger" name="send" type="submit" value="submit" >
   	 <p><?php include 'secure_contact_form.php';  ?></p>
    	</form>
    	</div>
    	</div>
		</div>
</div>












<?php include 'footer.php';  ?>