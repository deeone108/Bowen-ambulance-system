<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./c.css">
<title>Request</title>
</head>
<body>
    <div class="form_wrapper">
        <div class="form_container">
          <div class="title_container">
            <h2>Responsive Registration Form</h2>
          </div>
          <div class="row clearfix">
            <div class="">
              <form action="insert.php" method="POST">
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                  <input type="text" name="name" placeholder="Name" required />
                </div>
                <!-- <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                  <input type="text" name="sex" placeholder="Sex" required />
                </div> -->
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                  <input type="text" name="location" placeholder="Location" required />
                </div>
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                  <input type="text" name="college" placeholder="College" required />
                </div>
                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                  <input type="text" name="depart"  placeholder="Department" required />
                </div>
                
                      <div class="input_field radio_option">
                    <input type="radio" value="male" name="sex" id="rd1">
                    <label for="rd1">Male</label>
                    <input type="radio" value="female"  name="sex" id="rd2">
                    <label for="rd2">Female</label>
                    </div>
              
                <input class="button" type="submit" name="submit" value="Register" />
              </form>
            </div>
          </div>
        </div>
      </div>
<script src="./register.js"></script>
</body>
</html>