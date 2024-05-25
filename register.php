<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <header>
       <div class="col-1">
          <img id="img-1" src="images/logo.png">
      </div>
      <div class="col-2">
          <h1>Freespee Autism Check (FAC)</h1>
          <h5>Take control of your autism journey</h5>
      </div>
      <div class="col-3">
         <a target="_blank" href="file:///E:\xampp\htdocs\Final_Lab\register.php">
            <button>Registration</button> </a>
            <button>About us</button> 
            <button>Contact us</button></div>
  </header>
  <nav>
   <div class="navbar">
      <a href="index.php">Autism</a>
      <a href="#Men">Quiz</a>
      <a href="#Women">Symptoms</a>
      <a href="#Kids">Causes</a>
      <a  href="file:///E:/html-css-course/layout/size.html">News</a>
      <a href="login.php">Log in</a>
  </div>
</nav>

<main>
   <div class="container">
      <div class="title"><strong>Registration</strong></div>
      <form action="#">
         <div class="user-details">
            <div class="input-box">
               <span class="details">Full Name</span>
               <input type="text" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
               <span class="details">Username</span>
               <input type="text" placeholder="Enter your username" required>
            </div>
            <div class="input-box">
               <span class="details">Email</span>
               <input type="text" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
               <span class="details">Phone Number</span>
               <input type="text" placeholder="Enter your number" required>
            </div>
            <div class="input-box">
               <span class="details">Password</span>
               <input type="text" placeholder="Enter your password" required>
            </div>
            <div class="input-box">
               <span class="details">Confirm Password</span>
               <input type="text" placeholder="Confirm your password" required>
            </div>
         </div>

         <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
            <input type="radio" name="gender" id="dot-3">
            <span class="gender-title">Gender</span>
            <div class="category">
             <label for="dot-1">
               <span class="dot one"></span>
               <span class="gender">Male</span>
             </label>
             <label for="dot-2">
               <span class="dot two"></span>
               <span class="gender">Female</span>     
             </label>
             <label for="dot-3">
               <span class="dot three"></span>
               <span class="gender">Not prefered</span>
             </label>
            </div>
         </div>
            <button class = "button"><strong>Submit</strong></button>
      </form>
   </div>
</main>

<footer class="footer">
   <div class="footer-row">
      <h3 class="follow">follow us</h3>
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
</div>
<div class="row"><p>&copy; 2024 FAC. All rights reserved.</p></div>
</footer>

</body>
</html>