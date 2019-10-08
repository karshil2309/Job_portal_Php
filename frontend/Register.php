<?php

        include_once 'Common/header.php';
        include_once 'Common/logo.php';
?>



<div class="body-content clearfix" >

        <div class="block-section bg-color4">
          <div class="container">
            <div class="panel panel-md">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <!-- buttons top -->
                    <!-- <p><a href="#" class="btn btn-primary btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Register with Facebook</a></p>
                    <p><a href="#" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Register with Google</a></p> -->
                    <!-- end buttons top -->

                    <div class="white-space-10"></div>
                    <!-- <p class="text-center"><span class="span-line">OR</span></p> -->
                    <script type="text/javascript">

                    var divs = new Array();

                    divs[0] = "errFirst";

                    divs[1] = "errLast";

                    divs[2] = "errEmail";

                    divs[3] = "errPassword";

                    divs[4] = "errConfirm";

                    function validate()

                    {

                         var inputs = new Array();

                         inputs[0] = document.getElementById('first').value;

                         inputs[1] = document.getElementById('last').value;

                         inputs[2] = document.getElementById('email').value;

                        // inputs[3] = document.getElementById('uid').value;

                         inputs[3] = document.getElementById('password').value;

                         inputs[4] = document.getElementById('confirm').value;

                          var errors = new Array();

                         errors[0] = "<span style='color:red'>Please enter your first name!</span>";

                         errors[1] = "<span style='color:red'>Please enter your last name!</span>";

                         errors[2] = "<span style='color:red'>Please enter your email!</span>";

                    //      errors[3] = "<span style='color:red'>Please enter your user id!</span>";

                         errors[3] = "<span style='color:red'>Please enter your password!</span>";

                         errors[4] = "<span style='color:red'>Please confirm your password!</span>";

                         for (i in inputs)

                         {

                              var errMessage = errors[i];

                              var div = divs[i];

                     

                              if (inputs[i] == "")

                                  document.getElementById(div).innerHTML = errMessage;

                              else if (i==2)

                              {

                                  var atpos=inputs[i].indexOf("@");

                                  var dotpos=inputs[i].lastIndexOf(".");

                                  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=inputs[i].length)

                                      document.getElementById('errEmail').innerHTML = "<span style='color: red'>Enter a valid email address!</span>";

                                else

                                      document.getElementById(div).innerHTML = "OK!";

                              }

                        else if (i==4)

                              {

                                  var first = document.getElementById('password').value;

                                  var second = document.getElementById('confirm').value;

                                  if (second != first)

                                       document.getElementById('errConfirm').innerHTML = "<span style='color: red'>Your passwords don't match!</span>";

                                  else

                                       document.getElementById(div).innerHTML = "OK!";

                              }

                            else

                                  document.getElementById(div).innerHTML = "OK!";

                         }

                    }

                    function finalValidate()

                    {

                         var count = 0;

                        for(i=0;i<5;i++)

                        {

                          var div = divs[i];

                          if(document.getElementById(div).innerHTML == "OK!")

                               count = count + 1;

                        }

                       if(count == 5)

                         document.getElementById("errFinal").innerHTML = "All the data you entered is correct!!";

                    }

                    </script>

                    </head>
                    <!-- form login -->
                    <form method="post" action="">
                      <div class="form-group">
                        <label>FirstName</label>
                        <input type="text" class="form-control" placeholder="Your FirstName" name="fname" id="first" autofocus>
                        <td><div id="errFist"></div></td>
                      </div>
                      <div class="form-group">
                        <label>LastName</label>
                        <input type="text" class="form-control" placeholder="Your LastName" id="last" name="lname">
                        <td><div id="errLast"></div></td>
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Your Email" name="Email" id="email">
                          <td><div id="errEmail"></div></td>
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" name="pwd" id="password">
                          <td><div id="errPassword"></div></td>
                      </div>
                      <div class="form-group">
                        <label>Re-type Password</label>
                        <input type="password" class="form-control" placeholder="Re-type Your Password" name="confirmpwd" id="confirm">
                          <td><div id="errConfirm"></div></td>
                      </div>
                      <div class="white-space-10"></div>
                      <div class="form-group no-margin">
                        <button class="btn btn-theme btn-lg btn-t-primary btn-block" name="create" id="create">Register</button>
                          <div id="errFinal"></div>
                      </div>
                    </form><!-- form login -->

                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <!--end body-content -->
      <!-- body-content -->


  <!-- <body>
<form name="idform" method="post" action="">
  <table id="table1" align="center">

    <tr>
      <h1 style="text-align:center">GO Pls Register</h1>
    </tr>
  <tr>

  <td>First Name:</td>

  <td><input type="text" id="first" onkeyup="validate();" name="fname" /></td>

  <td><div id="errFirst"></div></td>

  </tr>
  <tr>

  <td>Last Name:</td>

  <td><input type="text" id="last" onkeyup="validate();" name="lname"/></td>

  <td><div id="errLast"></div></td>

  </tr>

  <tr>

  <td>Email:</td>

  <td><input type="text" id="email" onkeyup="validate();" name="Email"/></td>

  <td><div id="errEmail"></div></td>

  </tr>



  <tr>

  <td>Password:</td>

  <td><input type="password" id="password" onkeyup="validate();" name="pwd"/></td>

  <td><div id="errPassword"></div></td>

  </tr>

  <tr>

  <td>Confirm Password:</td>

  <td><input type="password" id="confirm" onkeyup="validate();" name="confirmpwd"/></td>

  <td><div id="errConfirm"></div></td>

  </tr>

  <tr>

  <td><input type="button" id="create" value="Submit" onclick="validate();finalValidate();" name="submit" /></td>



  </tr>

  </table>
</form>
</body> -->
</html>

<?php
      include 'Common/footer.php';
 ?>
 <?php
  include 'dbconnect/projectdatabase.php';
if(!empty($_POST))
{
   //print_r($_POST); die;
   $fullname =$_POST['fname'];
   $lastname=$_POST['lname'];
   $emailid=$_POST['Email'];
   $pwd=$_POST['pwd'];
   $connfirmpwd=$_POST['confirmpwd'];


  if(isset($_POST['create'])){
    //echo("You clicked button one!");
    //and then execute a sql query here
    $sql ="INSERT INTO `users`(`fname`, `lname`, `email`, `password`, `confirmpassword`, `role`,`status`) VALUES ('$fullname','$lastname','$emailid','$pwd','$connfirmpwd','1','1');";
   //echo $sql; die;

   if ($conn->query($sql) === TRUE )
   {
     ?>
     <?php echo "success" ?>
     <!-- <meta http-equiv="refresh" content="1;url=Login.php" /> -->
     <?php
   }
   else
   {
     echo"Failed to Insert";
   }
 }
}

  ?>
