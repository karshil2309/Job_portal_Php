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

                    </head>
                    <!-- form login -->
                    <form method="post" action="" enctype="multipart/form-data">

                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" autofocus>
                      </div>

                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                              <td><div id="errConfirm"></div></td>
                            </div>
                      <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" placeholder="Company Name" name="fname" id="first">
                        <td><div id="errFist"></div></td>
                      </div>
                      <div class="form-group">
                        <label>Logo Upload</label>
                        <input type="file" class="form-control" name="picture" >

                                  </div>


                      <!-- //Image Upload -->
                      <div class="form-group"  >
                        <label>Description</label>
                        <textarea rows="4" cols="50" name="description">

                      </textarea>
                      </div>
                      <div class="form-group" >
                        <label>Website</label>
                        <input type="text" class="form-control" name="website" >
                        </div>

                      </div>
                      <div class="white-space-10"></div>
                      <div class="form-group no-margin" >
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


  include 'dbconnect/projectdatabase.php';
if(!empty($_POST))
{
   //print_r($_POST); die;
   $email =$_POST['email'];
   $password=$_POST['password'];
   $description=$_POST['description'];
   $website=$_POST['website'];
   $company=$_POST['fname'];


   if(!empty($_FILES))
   {
     $target_dir = "assets/companylogo";
     $image_name = time();
     $target_file = $target_dir . $_FILES["picture"]["name"];
     //echo $target_file;
     //echo pathinfo($target_file,PATHINFO_EXTENSION); die;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     //echo $image_name; die;
     $target_file = $target_dir . $image_name.'.'.$imageFileType;
     //echo $target_file; die;
     if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file))
     {
           echo "The file ". $_FILES["picture"]["name"]. " has been uploaded.";
           ?>
           <img src="<?php echo $target_file; ?>" height="100" width="100">
           <?php
     }
       else
       {
           echo "Sorry, there was an error uploading your file.";
       }
       if(isset($_POST['create']))
       {
         //echo("You clicked button one!");
         //and then execute a sql query here
         $sql ="INSERT INTO `users`( `email`, `password`,`role`,`status`) VALUES ('$email','$password','2','1');";
        //echo $sql; die;

        if ($conn->query($sql) === TRUE )
        {
          $u_id=$conn->insert_id;
          $sql3 = "INSERT INTO `company_details` ( `u_id`, `company_name`,`logo`,`description`,`url`) VALUES ('$u_id','$company','$target_file','$description','$website');";
          if($conn->query($sql3) === TRUE)
           {

          ?>
          <?php echo "success" ?>
          <!-- <meta http-equiv="refresh" content="1;url=Login.php" /> -->
          <?php
           }
        }
        else
        {
          echo"Failed to Insert";
        }
      }
    }

   }





  ?>
