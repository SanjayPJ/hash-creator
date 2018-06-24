<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Password - Hash Creator</title>
    <style>
        .form-container{
            width: 85%;
            margin: 0 auto;
        }
    </style>
  </head>
  <body>
      <div class="container">
          <div class="form-container">
              <form method="post" action="index.php">
                <div class="form-group text-center pt-5">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                  <div class="pass-container">
                      <?php
                    
                    if(isset($_POST['submit'])){
                        
                        $password = $_POST['password'];

                        
                        $message = "";
                        
                        $message .= "Standard DES: " . crypt($password, 'rl') . "<br>";
                        
                        $message .= "Extended DES: " . crypt($password, '_J9..rasm') . "<br>";
                        
                        $message .= "MD5:          " . crypt($password, '$1$something$') . "<br>";
                        
                        $message .= "Blowfish:     " . crypt($password, '$2a$10$somethingthatisamazing$') . "<br>";
                        
                        $message .= "SHA-256:      " . crypt($password, '$5$rounds=5000$usesomesillystringforsalt$') . "<br>";
                        
                        $message .= "SHA-512:      " . crypt($password, '$6$rounds=5000$usesomesillystringforsalt$') . "<br>";
                        
                    }
                  ?>
                      
                    <div class="alert alert-primary" role="alert">
                        <small><?php echo $message?></small>
                    </div>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
              </form>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>