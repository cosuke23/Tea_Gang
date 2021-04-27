 
<head>
<link href="css3/bootstrap.min.css" rel="stylesheet">
    <link href="css3/price-range.css" rel="stylesheet">
    <link href="css3/animate.css" rel="stylesheet">
    <link href="css3/main.css" rel="stylesheet">
    <link href="css3/responsive.css" rel="stylesheet">
 <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
<script>
$(document).ready(function()
{
    $('#search').keyup(function()
    {
        searchTable($(this).val());
    });
});

function searchTable(inputVal)
{
    var table = $('#tblData');
    
    table.find('tr').each(function(index, row)
    {
        var allCells = $(row).find('td');
        if(allCells.length > 0)
        {
            var found = false;
            allCells.each(function(index, td)
            {
                var regExp = new RegExp(inputVal, 'i');
                if(regExp.test($(td).text()))
                {
                    found = true;
                    return false;
                }
            });
            if(found == true)$(row).show();else $(row).hide();
        }
    });
}
</script>

    <script>
$(document).ready(function()
{
    $('#searchstud').keyup(function()
    {
        searchTables($(this).val());
    });
});

function searchTables(inputVal)
{
    var table = $('#tblDatas');
    table.find('tr').each(function(index, row)
    {
        var allCells = $(row).find('td');
        if(allCells.length > 0)
        {
            var found = false;
            allCells.each(function(index, td)
            {
                var regExp = new RegExp(inputVal, 'i');
                if(regExp.test($(td).text()))
                {
                    found = true;
                    return false;
                }
            });
            if(found == true)$(row).show();else $(row).hide();
        }
    });
}
</script>
    
    
</head>
  <header id="header"><!--header-->
        <div class="header_top" style="background:url('images/flow.jpg')"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> mcj's_flowershop.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
 <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-left" style="background:url('images/bar.jpg') background-attachment:fixed"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-center">
                            <a href="index.php"><img src="images/mcjlogo.jpg" alt=""  /></a>
                        </div>
                        </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#" style="background:none"><i class="fa fa-user" ></i> Account</a></li>
                                <li><a href="checkout.html" style="background:none"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart.php" style="background:none"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="login.php" style="background:none"><i class="fa fa-sign-out"></i> logout</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom" style="background:url('images/ft1.jpg')"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.php" class="">Home</a></li>
                                
                                    <li class="sub-menu"><a href="">Arrangement<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                
                                                                            <li><a href="basket.php">basket</a></li>
                                        <li><a href="box.php">box</a></li>
                                        <li><a href="sunflower.php">boquet</a></li>
                                        <li><a href="sunflower.php">Standing</a></li> 
                                </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Events<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="">Wedding</a></li>
                                        <li><a href="">Debut</a></li>
                                    </ul>
                                </li> 
                                <li><a href="ass1.php">Customize</a></li>
                                <li class="sub-menu"><a href="">Products<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="rose.php">Rose</a></li>
                                        <li><a href="lavander.php">Lavander</a></li> 
                                        <li><a href="carnation.php">Carnation</a></li> 
                                        <li><a href="sunflower.php">Sunflower</a></li>

<li><a href="sunflower.php">Sunflower</a></li> 
                                       
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->