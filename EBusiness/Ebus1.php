<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <meta charset="utf-8">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type="text/javascript" src="cost_calc.js"></script>
       <title>117727539</title>
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
    <li class ="align"><a href="https://is1113117727539.herokuapp.com/">Https://is1113117727539.herokuapp.com</a></li>  
    <li class ="align"><a href="https://github.com/Cherrie2509/1113117727539/graphs/commit-activity">GitHub</a></li>  

    
    <div class="dropdown-content">
      <a href="CVs/cv_page1.html">Salesforce</a>
      <a href="CVs/cv_page2.html">Cloud 9</a>
      <a href="CVs/cv_page3.html">Amazon</a>
      <a href="CVs/cv_page3.html">Gmail</a>

    </div>
    
  </li>

  <li><a href="../EBusiness/Ebus1.php">Products</a></li>

</ul>

            <h4>Select a Product</h4>
            
            <br/>
            
            <form method="post" action="Ebus2.php">
            
            <label for="salesforce">
            <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
            Salesforce @ $100
            </label>
            
            <br/>
            
            <label for="cloud9">
            <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
            Cloud 9 @ $200
            </label>
            
            <br/>
            
            <label for ="aws">
            <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
            Amazon Web Services @ $300
            </label>
            
            <br/>
            
            <label for ="gmail">
            <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
            Gmail @ $400
            </label>
            
            <br/>
            <br/>

            
            <label class="align2" for="subtotal">
                Sub Total
             <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>

             
             <label class="align2" for="discount">
                Discount @ 5%
             <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>     
                   
                
            <br/>
            <br/>

            
              <label class="align2" for="vat">
                VAT @ 10%
             <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br/>
             <br/>

            
            <label class="align2" for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
    
            <br/>
            <br/>
            
            <button type="submit" class="button button1" id="btnproceed" class="addcart" disabled>Add to Shopping Cart</button>
            
            </form>
            
            <br/>
            <button class="buttonsmall button2" onclick="calcSub()">Calculate Cost</button>
            <button class="buttonsmall button3" role="button"><a href="Ebus1.php">Clear Choice</a></button>
            
<div class="footer">
  <p>IS1113 Project 2018 Copyright &copy; Cherrie Ding 117727539</p>
</div>

            </body>
            </html>