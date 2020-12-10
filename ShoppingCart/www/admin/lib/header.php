<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sweetshop Administrative Section</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   SWEETSHOP ADMIN
                </a>
            </div>

            <ul class="nav">
 
                <li>                   
                        <p>Category Management</p>
                        <ul>
                            <li><a href="add_category.php">Add Category</a></li>
                            <li><a href="manage_category.php">Manage Category</a></li>
                        </ul>                   
                </li>     
                <li>                    
                       <BR> <p>Products Management</p>
                        <ul>
                            <li><a href="add_products.php">Add Products</a></li>
                            <li><a href="manage_products.php">Manage Products</a></li>
                        </ul>                   
                </li>     
                 <li>                    
                       <BR> <p>Order Management</p>
                        <ul>
                            <li><a href="new_orders.php">New Orders</a></li>
                            <li><a href="old_orders.php">Old Orders</a></li>
                        </ul>                   
                </li>     
               <li>                    
                       <BR> <p>Customers Management</p>
                        <ul>
                            <li><a href="new_customers.php">New Customers</a></li>
                            <li><a href="best_customers.php">Best Customers</a></li>
                        </ul>                   
                </li>     
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse">
                   

                    <ul class="nav navbar-nav navbar-right">
                         
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
