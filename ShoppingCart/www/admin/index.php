<?php
include "lib/config.php";
include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">Login</h4>
        </div>
        <div class="content">
            <form action = verify.php method = post>

            <?php
            if($_GET['err'] == "1")
                print '<div class="alert alert-danger"><span>Incorrect Username / Password.</span></div>';

          if($_GET['err'] == "2")
                print '<div class="alert alert-danger"><span>Please login to access this section.</span></div>';
 
          if($_GET['err'] == "3")
                print '<div class="alert alert-success"><span>Logout Successful.</span></div>';
            ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name = "username" class="form-control"  placeholder="Username" >
                        </div>
                    </div>
                 </div>
                 <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name = "password" class="form-control"  placeholder="Username" >
                        </div>
                    </div>
                </div> 
                <div class="row">
                     <div class="col-md-5">
                        <div class="form-group">
                            <label></label>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Login </button>
                        </div>
                    </div>
                </div>
                    
       
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<!-- End a Form -->     
<?php
include "lib/footer.php";
?>