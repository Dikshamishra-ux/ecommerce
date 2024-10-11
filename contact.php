<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- add font awesome css cdn link for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="link.css">

    <title>Regestration form</title>
</head>
<body>
    <div class="container">
   <div class="form-box">
      <h2>Create Your Account</h2>
      <form name="project">
      <div class="input-field">
         <label for="">Username</label>
         <input type="text"  name="username" id="username" placeholder="username" onclick="run();">
         <i class="fa " aria-hidden="true"></i>
         <span></span>
      </div>
      <div class="input-field">
         <label for="">Email</label>
         <input type="text"  name="email" id="email" placeholder="email address" onclick="fun();">
         <i class="fa " aria-hidden="true"></i>
         <span></span>
      </div>
      <div class="input-field">
         <label for="">Password</label>
         <input type="text" name="pword" id="pass1" placeholder="password" onclick="ten();">
         <i class="fa " aria-hidden="true"></i>
         <span></span>
      </div>
      <div class="input-field">
         <label for="">Confirm Password</label>
         <input type="text" name="pword2" id="pass2" placeholder="confirm password" onclick="ren();">
         <i class="fa " aria-hidden="true"></i>
         <span></span>
      </div>
      <input type="submit" id="submit" value="Submit">
   </form>
   </div>
</div>

<script src="script.js"></script>

<script>
   function run(){


     if (project.username.value) {

   alert('Thank you for saving this username');

  }else{
   alert('Please fill this username');
  }
}

function fun(){


     if (project.email.value) {

   alert('Thank you for saving this email');

  }else{
   alert('Please fill this email');
  }

}

function ten(){


     if (project.pword.value) {

   alert('Thank you for saving this  password');

  }else{
   alert('Please fill this unique your password');
  }

}

function ren(){


   if (project.pword2.value == project.pword.value) {
      alert('Thank you for saving this password and your data has submitted✅ and you can join an ecommerce online shop');
     
       }else if(project.pword2.value !== project.pword.value) {
         alert('please confirm your password, because your password does not match❌');
          
       }
     else{
   alert('Please fill this confirm password');
  }

}  


</script>

</body>
</html>