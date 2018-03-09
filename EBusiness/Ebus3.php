<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>117727539</title>
        <link rel="stylesheet" href="../mystylesheet.css" type="text/css" />
        <title>RECEIPT</title>
    </head>
    
      </header>
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
      <a href="salesforce.html">Salesforce</a>
      <a href="cloud9.html">Cloud 9</a>
      <a href="amazon.html">Amazon</a>
      <a href="gmail.html">Gmail</a>

    </div>
    
  </li>

  <li><a href="../EBusiness/Ebus1.php">Products</a></li>
  <li class ="align"><a href="https://is1113117727539.herokuapp.com/">Https://is1113117727539.herokuapp.com</a></li>  
  <li class ="align"><a href="https://github.com/Cherrie2509/1113117727539/graphs/commit-activity">GitHub</a></li>  


</ul>
        
        <h4>RECEIPT</h4>
                
<?php
// Echo session variables that were set on previous page
echo "Name: " . $_POST["name"] . ".<br/>";
echo "Email: " . $_POST["email"] . ".<br/>";
echo "Total is: " . $_SESSION["total"] . ".<br/>";

?>
 
    </body>
</html>