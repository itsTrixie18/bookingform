<div class="col-lg-6">

          <div class="card">
            <div class="card-body">
            <?php
                include './database/connection.php';

                if(isset($_POST['btn_submit'])){
                    $firstname=$_POST["firstname"];
                    $lastname=$_POST["lastname"];
                    $email=$_POST["email"];
                    $password=$_POST["password"];
                   
                    
                    $sql = "INSERT INTO `register`(`first_name`, `last_name`, `r_email`, `r_password`) VALUES ('$firstname', '$lastname', '$email', '$password')";
                if($con->query($sql)===TRUE ){
                echo"<script>alert('Registered')</script>";
                }
                else{
                    echo"Regestration Failed";
                }
                }
 

    ?>

              <h5 class="card-title">Registration Form</h5>
 
              <form class="row g-3" method="post">
                <div class="col-12">
                  <label for="inputfirstname" class="form-label">First Name</label>
                  <input type="text" name = "firstname" class="form-control" id="inputfirstname">
                </div>
                <div class="col-12">
                  <label for="inputlastname" class="form-label">Last Name</label>
                  <input type="text" name = "lastname" class="form-control" id="inputlastname">
                </div>
                <div class="col-12">
                  <label for="inputEmai" class="form-label">Email</label>
                  <input type="email" name = "email" class="form-control" id="inputEmai">
                </div>
                <div class="col-12">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" name = "password"  class="form-control" id="inputPassword">
                </div>
                <div class="text-center">
                  <button type="submit" name = "btn_submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>

            </div>
          </div>