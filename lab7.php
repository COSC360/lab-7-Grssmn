<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Lab 6</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/lab7.css" rel="stylesheet">

</head>

<body>

    <?php
        include "lab7-data.php";


        function error($string){
            if(empty($string)){
                return "has-error";
            }else{
                return "";
            }
        }
    ?>

<div class="container">
   <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
         <div id="login">
            <div class="page-header">
               <h2>Login</h2>
            </div>
            <form role="form">
              <div class="form-group <?php echo error($email); ?>">
                <label for="exampleInputEmail1">Email address</label>
                <?php 
                    echo "<input type=\"email\" class=\"form-control\" name=\"email\" value=\"".$email."\">";
                ?>
                <p class="help-block">Enter an email</p>
              </div>
              <div class="form-group <?php echo error($password); ?>">
                <label for="exampleInputPassword1">Password</label>
                <?php 
                    echo "<input type=\"password\" class=\"form-control\" name=\"password\" value=\"".$password."\">";
                ?>
                <p class="help-block">Email and password not found</p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Server</label>
                <select name="server" class="form-control">
                  <!--Replace the following elements with PHP-->
                  <?php
                    for($count=1; $count < 6; $count+=1){
                        echo "<option>Server ".$count."</option>";
                    }
                  ?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
      <div class="col-md-3">
      </div>
   </div>
</div>  <!-- end container -->

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
</body>
</html>
