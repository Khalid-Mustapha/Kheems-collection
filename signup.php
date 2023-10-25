<?php 
    session_start();

  $servername="localhost";
  $dbusername="root";
  $dbpassword="";
  $dbname="test"; 
  // Error reporting
    error_reporting(E_ALL);

  // Connect database
    $db = mysqli_connect("localhost", "root","", "kheem");	
    
    // Check connection
    if (!$db) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }

  $method = $_SERVER['REQUEST_METHOD'];
  if($method == 'POST'){
        $name=strip_tags(trim($_POST['name']));
        $email=strip_tags(trim($_POST['email']));
        $phone=strip_tags(trim($_POST['phone']));
        $phone = str_replace(' ', '', $phone);
        $dob = strip_tags($_POST["dob"]);
        $gender = strip_tags($_POST["gender"]);
        $start= "+234";
        $valid_number=[];
        $invalid_number=[];
        $password=strip_tags(trim($_POST['password']));
        $hashed=password_hash($password,PASSWORD_DEFAULT);
        $errors = [];
        $email = filter_var($email,FILTER_VALIDATE_EMAIL);
        if(empty($email)){
          $errors['email'] = 'The email field is required.';
        }elseif(strlen(trim($email)) > 255){
          $errors['email'] = 'The email cannot exceed 255 characters.';
        }

        // to check for number validity
        if(str_starts_with($phone,'0')&&strlen($phone)!==11)
        {
          $errors['phone'] = 'Check number length';
        }
        elseif(str_starts_with($phone,$start)&&strlen($phone)==14)
        {
          $phone = str_replace('+234', '0', $phone);
        }
        elseif(str_starts_with($phone,$start)&&strlen($phone)!==14)
        {
          $errors['phone'] = 'Check number length';
        }
        if(strlen($password)<8)
        {
          $errors['password']='Password must consist of at least 8 characters';
        }
        elseif(empty($password))
        {
          $errors['password']='Please Enter password';
        }      
        // addition to file
        $_SESSION['user_id']=false; 
        if(count($errors)<1)
        {         
          // To upload the images
          $sql = "INSERT INTO users (`name`, `email`, `phone`, `dob`, `gender`, `password`) VALUES ('$name', '$email', '$phone', '$dob', '$gender', '$hashed')"; 
          $_SESSION['user_id']=true;  
          
        }
        elseif ($_SESSION['user_id']==true)
        {
          echo "Sign up successful";
          
           exit();
        }
        else
        {
          echo "There was an error with your sign-up/login";
        }

        // Error message
      if (mysqli_multi_query($db, $sql))
        {
          echo "Form data successfully stored in database!"."\n"; 
        } 
      else 
        {       
           echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }    
     
        mysqli_close($db); 
}

?>
