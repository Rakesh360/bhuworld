<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="enrollment.css">
	

		<title>enrollment form</title>
	</head>
	<body>


<div class="row">
  <div class="col-75">
    <div class="container">
        
        <div><h1><center>Bhu World Registration Form</center></h1>
        <hr>
        </div>
      <form action="pay.php" method="POST" accept-charset="utf-8">

        <div class="row">
          <div class="col-50">
            <label for="Course"><i class="fa fa-user"></i>Select Your Course</label>
               <select name="course_name" id="fname" >
                <option value="basocial">Ba Social/Arts</option>
                <option value="bscmath">Bsc Math</option>
                <option value="bscbio">Bsc Bio</option>
                <option value="bscag">Bsc Agriculture</option>
                </select>
            <h3>students Informations</h3>
            <label for="sname"> Student's Name</label>
            <input type="text" id="fname" name="student_name" placeholder="enter your name">
            <label for="fname"><i class="fa fa-user"></i> Father's Name</label>
            <input type="text" id="fname" name="father_name" placeholder="enter your name">
            <label for="email"><i class="fa fa-envelope"></i> Email Id</label>
            <input type="email" id="email" name="email" placeholder="email ">
            <label for="mobile"><i class="fa fa-address-card-o"></i>Mobile Number</label>
            <input type="number" id="adr" name="m_number" placeholder=" for important notification " value="+91">
            <label for="wnumber"><i class="fa fa-institution"></i> Whatsapp Number</label>
            <input type="text" id="city" name="w_number" placeholder=" for videos link" value="+91">

           
          </div>

          <div class="col-50">
              <label for="fname"><i class="fa fa-user"></i>Price</label>
               <input type="text" name="price" value="2500" readonly>
              
            <h3>Student Adress</h3>
            <label for="fname">Vill/Town</label>
            <input type="text" id="villtown" name="vill_city" placeholder="enter Your Adress">
            <label for="cname">District</label>
            <input type="text" id="dist" name="dist" placeholder="John More Doe">
            <label for="ccnum">State</label>
            <input type="text" id="state" name="state" placeholder="your state">
            <label for="expmonth">Country</label>
            <input type="text" id="country" name="country" placeholder="your country">

            <div class="row">
              <div class="col-50">
                <label for="pincode">Pin(Zip) code</label>
                <input type="text" id="expyear" name="pin_code" placeholder="000000">
              </div>
              
            </div>
          </div>

        </div>
        
        <input type="submit" value="Continue to Payment" class="btn btn-primary">
      </form>
    </div>
  </div>

  
</div>

</body>
</html>
