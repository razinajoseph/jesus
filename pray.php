<?php
include 'config.php';
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['add'];
    $prayer=$_POST['prayer'];
    $city=$_POST['city'];

    $state=$_POST['state'];

    

   
    $sql="insert into jesusverse(fname,lname,email,phone,address,prayer,city,state) values('$fname','$lname','$email','$phone','$address','$prayer','$city','$state')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('your request is successfully accepted')</script>";

    }
    else{
        echo "error:".mysqli_error($conn);

    }
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<head>
    <title>Jesus-verses</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial scale=1.0">
        <link rel="shortcut icon"   href="images/logo/cross.png"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
    <!--Start header-->
    
   
    <?php include('header.php') ?>
     <!--End header-->
     <br>
     <form method="post" action="">
        <div class="container" >
            <h1>Prayer Request Form</h1><span style="color:blue" align="center">Lets pray for everyone</span>
            <br>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="fname">First name</label>
      <input type="text" class="form-control" id="inputEmail4" name="fname" placeholder="First name">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last name</label>
      <input type="text" class="form-control" id="inputPassword4" name="lname" placeholder="Last name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact</label>
      <input type="tel" class="form-control" id="inputPassword4" name="phone" placeholder="Mobile no.">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="add" placeholder="Your Address">
  </div>
  <div class="form-group">
    <label for="inputAddress2"> Prayer Request</label>
    <input type="text" class="form-control" id="inputAddress2" name="prayer" placeholder="Your Prayer Request">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state"> 
        <option selected disabled>Choose state...</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
      </select>
    </div>
   
  </div>
  
  <input type="submit" name="submit"class="btn btn-primary btn-lg" value="Send"></button>
  </div>
</form>
<br>
<?php include('footer.php');?>
</body>

<br>


</html>