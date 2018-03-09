<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Enter Details</title>
        
        <!--jQuery-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type="text/javascript" src="Ebus2_validator.js"></script>
       <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />


    </head>
    
    
    
    <body>
        
    <header id="main-header">
        
      <div>
        <h1 class="mainheading2">117727539 - IS1113 Project</h1>
      </div>
      
      </header>
      
<ul>
  
  <li><a href="../homepage.html">Back to Home</a></li>
  <li class="dropdown">
    
    <a href="javascript:void(0)" class="dropbtn">About Cloud</a>
    
    <div class="dropdown-content">
      <a href="CVs/cv_page1.html">Salesforce</a>
      <a href="CVs/cv_page2.html">Cloud 9</a>
      <a href="CVs/cv_page3.html">Amazon</a>
      <a href="CVs/cv_page3.html">Gmail</a>

    </div>
    
  </li>

  <li><a href="../EBusiness/Ebus1.php">Products</a></li>
  <li class ="align"><a href="https://is1113117727539.herokuapp.com/">Https://is1113117727539.herokuapp.com</a></li>  
  <li class ="align"><a href="https://github.com/Cherrie2509/1113117727539/graphs/commit-activity">GitHub</a></li>  


</ul>

        <h4>Please enter your payment details</h4>
        
        
        <form action="Ebus3.php" method="POST">
            
            
            <label for="user pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
            <br/>
            <br/>
            
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            
            <br/>
            <br/>
            
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            
            <br/>
            <br/>


        </form>
        
        
        <br/>
        <button onClick="validateDetails()">Validate</button>
        

<?php
// Set session variables
$_SESSION["total"] = $_POST["total"];
?>
            
<div class="footer">
  <p>IS1113 Project 2018 Copyright &copy; Cherrie Ding 117727539</p>
</div>
            
    </body>
    
</html>