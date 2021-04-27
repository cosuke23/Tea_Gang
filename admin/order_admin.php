<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to Toki Milk tea </title>

     <style type="text/css">
/* Style the links inside the sidenav */
#mySidenav a {
  position: absolute; /* Position them relative to the browser window */
  left: -80px; /* Position them outside of the screen */
  transition: 0.3s; /* Add transition on hover */
  padding: 15px; /* 15px padding */
  width: 100px; /* Set a specific width */
  text-decoration: none; /* Remove underline */
  font-size: 20px; /* Increase font size */
  color: white; /* White text color */
  border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
}

#mySidenav a:hover {
  left: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#about {
  top: 20px;
  background-color: #4CAF50;
}

#blog {
  top: 80px;
  background-color: #2196F3; /* Blue */
}

#projects {
  top: 140px;
  background-color: #f44336; /* Red */
}

#contact {
  top: 200px;
  background-color: #555 /* Light Black */
}

</style>
</head>
<script type="text/javascript">
    function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>

    <body style="background:white; ">
        
        <!-- Top menu -->
	 <div id="mySidenav" class="sidenav">
                     
                        
  <a href="#" id="about">About</a>
  <a href="#" id="blog">Blog</a>
  <a href="#" id="projects">Projects</a>
  <a href="#" id="contact">Contact</a>
</div> 
        <br>
        <br>
  

        <!-- Slider -->
		<div class="container">
  <div class="heading">
    <h1>
      <span class="shopper">Toki</span> Order Form
    </h1>
    
    <a href="#" class="visibility-cart transition is-open">X</a>    
  </div>
  
  <div class="cart transition is-open">
    
    <a href="#" class="btn btn-update">Update cart</a>
    
    
    <div class="table">
      
      <div class="layout-inline row th">
        <div class="col col-pro">Product</div>
        <div class="col col-price align-center "> 
          Price
        </div>
        <div class="col col-qty align-center">QTY</div>
        <div class="col">VAT</div>
        <div class="col">Total</div>
      </div>
        <form name="5">

   <?php
      include('../db.php');
      include('../db1.php');
     

  
  
        //fetch results set as object and output HTML
      $count="0";
         $query=$mysqli->query("SELECT * from milk_tea  ");
                                    while($row=mysqli_fetch_array($query)) {
          $name=$row['name'];
          $price=$row['price'];
            $count++;
           ?>
        
      <div class="layout-inline row">
        
        <div class="col col-pro layout-inline">
          
          <p><?php echo $name; ?></p>
        </div>
        
        <div >
          <input type="number" name="one<?php echo $count ?>" value="<?php echo $price ?>" id="one<?php echo $count ?>" OnChange="av(this)" readonly>
        </div>

        <div class="col col-qty layout-inline">
      
          <input  id="two<?php echo $count ?>" style="width:50px;" name="two<?php echo $count ?>" OnChange="av(this)">
        
        </div>
        
        <div class="col col-vat col-numeric">
          <input class="input focused" style="width:50px;" name="vat" type="number">
        </div>
        <div class="col col-total col-numeric">              
         <input type="number" id="avvy" value="" placeholder="total">
        </div>
      </div>
     </form>
      <?php
    }
  
    ?>
    <script type="text/javascript">
     function av(avSelect)
{
//var one=avSelect.form.one.value;
//var two=avSelect.form.two.value;
var one = parseFloat(avSelect.form.one1.value);
var two = parseFloat(avSelect.form.two1.value)
var avvy=one*two;
avSelect.form.avvy.value=avvy;
//var avvy=parseInt(one)+parseInt(two);
}
    </script>
    
       <div class="tf">
         <div class="row layout-inline">
           <div class="col">
             <p>VAT</p>
           </div>
           <div class="col"></div>
         </div>
         <div class="row layout-inline">
           <div class="col">
             <p>Shipping</p>
           </div>
           <div class="col"></div>
         </div>
          <div class="row layout-inline">
           <div class="col">
             <p>Total</p>
           </div>
           <div class="col"></div>
         </div>
       </div>         
  </div>
    
    <a href="#" class="btn btn-update">Update cart</a>
  
</div>
                
    </body>

</html>
<style type="text/css">
    html {
  background: #bbc3c6;
  font: 62.5%/1.5em "Trebuchet Ms", helvetica;
}

* {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
}

@font-face {
    font-family: 'Shopper';
    src: url('http://www.shopperfont.com/font/Shopper-Std.ttf');
}

.shopper {
  text-transform: lowercase;
  font: 2em 'Shopper', sans-serif;
  line-height: 0.5em;
  display: inline-block;
}



h1 {
  text-transform: uppercase;
  font-weight: bold;
  font-size: 2.5em;
}

p {
  font-size: 1.5em;
  color: #8a8a8a;
}

input {
  border: 0.3em solid #bbc3c6;
  padding: 0.5em 0.3em; 
  font-size: 1.4em;
  color: #8a8a8a;
  text-align: center;
}

img {
  max-width: 9em;
  width: 100%;
  overflow: hidden; 
  margin-right: 1em;
}

a {
  text-decoration: none;
}

.container {
  max-width: 75em;
  width: 95%;
  margin: 40px auto;  
  overflow: hidden;
  position: relative;
  
  border-radius: 0.6em;
  background: #ecf0f1;
  box-shadow: 0 0.5em 0 rgba(138, 148, 152, 0.2);
}

.heading {
  padding: 1em;
  position: relative;
  z-index: 1;
  color: #f7f7f7;
  background: #f34d35;
}

.cart {
  margin: 2.5em;
  overflow: hidden;
}

.cart.is-closed {
  height: 0;
  margin-top: -2.5em;
}

.table {
  background: #ffffff;
  border-radius: 0.6em;
  overflow: hidden;
  clear: both;
  margin-bottom: 1.8em;
}


.layout-inline > * {
  display: inline-block;
}

.align-center {
  text-align: center;
}

.th {
  background: #f34d35;
  color: #fff;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 1.5em;
}

.tf {
  background: #f34d35;
  text-transform: uppercase;
  text-align: right;
  font-size: 1.2em;  
}

.tf p {
  color: #fff;
  font-weight: bold;
}

.col {
  padding: 1em;
  width: 12%;
}

.col-pro {
  width: 44%;
}

.col-pro > * {
  vertical-align: middle;
}

.col-qty {
  text-align: center;
  width: 17%;
}

.col-numeric p {
  font: bold 1.8em helvetica;
}

.col-total p {
  color: #12c8b1;
}

.tf .col {
  width: 20%;
}

.row > div {
  vertical-align: middle;
}

.row-bg2 {
  background: #f7f7f7;
}

.visibility-cart {
  position: absolute;
  color: #fff;
  top: 0.5em;
  right: 0.5em;
  font:  bold 2em arial;
  border: 0.16em solid #fff;
  border-radius: 2.5em;
  padding: 0 0.22em 0 0.25em ;
}

.col-qty > * {
  vertical-align: middle; 
}

.col-qty > input {
  max-width: 2.6em;
}


a.qty {
  width: 1em;
  line-height: 1em;
  border-radius: 2em;
  font-size: 2.5em;
  font-weight: bold;
  text-align: center;
  background: #43ace3;  
  color: #fff;
}

a.qty:hover {
  background: #3b9ac6;
}

.btn {
  padding: 10px 30px;
  border-radius: 0.3em;
  font-size: 1.4em;
  font-weight: bold;
  background: #43ace3;
  color: #fff;
  box-shadow: 0 3px 0 rgba(59,154,198, 1)
}

.btn:hover {
  box-shadow: 0 3px 0 rgba(59,154,198, 0)
}

.btn-update {
  float: right;
  margin: 0 0 1.5em 0;
}

.transition {
  transition: all 0.3s ease-in-out;
}

@media screen and ( max-width: 755px) {
  .container {
    width: 98%;
  }
  
  .col-pro {
    width: 35%;
  }
  
  .col-qty {
    width: 22%;
  }
  
  img {
    max-width: 100%;
    margin-bottom: 1em;
  }
}

@media screen and ( max-width: 591px) {
  
}
</style>
<script type="text/javascript">
    $('.visibility-cart').on('click',function(){
       
  var $btn =  $(this);
  var $cart = $('.cart');
  console.log($btn);
  
  if ($btn.hasClass('is-open')) {
     $btn.removeClass('is-open');
     $btn.text('O')
     $cart.removeClass('is-open');     
     $cart.addClass('is-closed');
     $btn.addClass('is-closed');
  } else {
     $btn.addClass('is-open');
     $btn.text('X')
     $cart.addClass('is-open');     
     $cart.removeClass('is-closed');
     $btn.removeClass('is-closed');
  }

                  
});

  // SHOPPING CART PLUS OR MINUS
  $('a.qty-minus').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());
    
    if (value > 1) {
      value = value - 1;
    } else {
      value = 0;
    }
    
    $input.val(value);
        
  });

  $('a.qty-plus').on('click', function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest('div').find('input');
    var value = parseInt($input.val());

    if (value < 100) {
    value = value + 1;
    } else {
      value =100;
    }

    $input.val(value);
  });

// RESTRICT INPUTS TO NUMBERS ONLY WITH A MIN OF 0 AND A MAX 100
$('input').on('blur', function(){

  var input = $(this);
  var value = parseInt($(this).val());

    if (value < 0 || isNaN(value)) {
      input.val(0);
    } else if
      (value > 100) {
      input.val(100);
    }
});
</script>