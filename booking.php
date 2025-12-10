<div class="col-lg-6">

<div class="card">
  <div class="card-body">
  <?php
      include './database/connection.php';

      if(isset($_POST['btn_submit'])){
        $name=$_POST["fullname"];
        $email=$_POST["email"];
        $contact_no=$_POST["contact_no"];
        $address=$_POST["address"];
        $date=$_POST["date"];
        
        $sql = ("INSERT INTO `booking_form`(`fullname`, `email`, `contact_no`, `address`, `date`) VALUES ('$name','$email','$contact_no','$address','$date')");

      if($con->query($sql)===TRUE ){
       echo"<script>alert('Booked')</script>";
      }
      else{
        echo"Failed";
      }
       }


    ?>
    <h5 class="card-title">Booking Form</h5>

    
    <form class="row g-3" method="post">
      <div class="col-12">
        <label for="inputName" class="form-label">Full Name</label>
        <input type="text" name = "fullname" class="form-control" id="inputName">
      </div>
      <div class="col-12">
        <label for="inputEmai" class="form-label">Email</label>
        <input type="email" name = "email" class="form-control" id="inputEmail">
      </div>
      <div class="col-12">
        <label for="inputContactNo" class="form-label">Contact Number</label>
        <input type="text" name = "contact_no"  class="form-control" id="inputContactNo">
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input type="text" name = "address" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="col-12">
        <label for="inputDate" class="form-label">Date</label>
        <input type="date" name = "date" class="form-control" id="inputDate">
      </div>
      <div class="text-center">
        <button type="submit" name = "btn_submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form>

  </div>
</div>