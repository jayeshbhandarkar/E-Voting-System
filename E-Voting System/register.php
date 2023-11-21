<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>Online Voting System</b>
  	</div>
  
  	<div class="login-box-body">
    	<p class="login-box-msg"><b><i>Registration Form</i></b></p>
      
      <style>
        .form-group .require-symbol
        {
          color: red;
          font-size: small;
        }
        .login-box-body
        {
          box-shadow: 7px 7px 7px rgb(172, 172, 172),
                     -7px -7px 7px rgb(204, 204, 204);
        }
      </style>

    	<form action="registration.php" method="POST" enctype="multipart/form-data">
      		<div class="form-group has-feedback">
            <label for="firstname"><span class="require-symbol">*</span> Firstname:</label>
        		<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter Firstname" required>
      		</div>

          <div class="form-group has-feedback">
            <label for="lastname"><span class="require-symbol">*</span> Lastname:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Lastname" required>
          </div>

          <div class="form-group has-feedback">
            <label for="email_id"> Email id:</label>
            <input type="Email" class="form-control" id="email_id" name="email_id" placeholder="Enter Email id" required>
          </div>

          <div class="form-group has-feedback">
            <label for="identity_card"><span class="require-symbol">*</span> Id Proof:</label><br>
            <select name ="id_proof" class="form-control" id="id_proof" onchange="idproof()" required>
                  <option value="">------ Select ------</option>
                  <option value="Aadhar card">Aadhar Card</option>
                  <option value="Pan card">Pan Card</option>
                  <option value="Voting card">Voting Card</option>
                  <option value="Passport">Passport</option>
                  <option value="License">Driving License</option>
            </select>
          </div>

          <div class="form-group has-feedback">
            <label for="photo" id="myid"><span class="require-symbol">*</span> File:</label><br>
            <input type="file" id="photo" name="photo" required>
          </div>

          <div class="form-group has-feedback">
            <label for="birth_date"><span class="require-symbol">*</span> Birth Date:</label>
            <input type="Date" class="form-control" id="birth_date" name="birth_date" required>
          </div>

          <div class="form-group has-feedback">
            <label for="gender"><span class="require-symbol">*</span> Gender:</label><br>
              <input type="radio" id="gender" name="gender" value="Male" required> Male
              <input type="radio" id="gender" name="gender" value="Female" required> Female
          </div>

          <div class="form-group has-feedback">
            <label for="phone_no"><span class="require-symbol">*</span> Phone No:</label>
            <input type="Mobile" class="form-control" id="phone_no" name="phone_no" placeholder="Enter Phone No" required>
          </div>

          <div class="form-group has-feedback">
            <label for="address"> Address:</label>
            <textarea type="address" class="form-control" id="address" name="address" placeholder="Enter Address" required></textarea>
          </div>

          <h5><input type="checkbox" required><b> I agree Terms and Conditions</b></h5>

      		<div class="row">
    			<div class="col-xs-12">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="submit"> Submit</button>
                <p><center>Already Registered ? <a href="index.php">Login here </a></center></p>
        	</div>
      		</div>
    	</form>
  	</div>
    <?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center mt20'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
    ?>
  	
</div>
	
<?php include 'includes/scripts.php' ?>
  <script>
     function idproof()
     {
          document.getElementById("photo").style.display="inline";
          document.getElementById("id_proof").style.display="block"
          var x=document.getElementById("id_proof").value;
          document.getElementById("myid").innerHTML=x+":";
     }
  </script>
</body>
<footer>
</div>
</html>