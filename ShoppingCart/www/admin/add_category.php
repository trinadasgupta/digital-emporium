<?php
include "lib/config.php";
include "lib/login_check.php";

if($_POST['cname'])
{
    $sql = "INSERT INTO `category` (`cid`, `cname`, `parent_id`) VALUES (null, '$_POST[cname]', '$_POST[parent_id]')";
    $db->query($sql);
    $msg =  '<div class="alert alert-success"><span>Insert Successful.</span></div>';
}

include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">Add Category</h4>
        </div>
        <div class="content">
            <form action = add_category.php method = post>
                <?=$msg?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name = "cname" class="form-control"  placeholder="Category Name" >
                        </div>
                    </div>
                 </div>
                 <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                            <label>Category Parent</label>
                            <SELECT name = "parent_id" class="form-control">
                            <OPTION VALUE = 0>Top Level - No Parent</OPTION>
                            <?php
                            $sql = "SELECT * FROM `category` WHERE `parent_id` = '0'";
                            $res = $db->query($sql);
                            while($row = $res->fetch_array())
                            {
                              print "<OPTION VALUE = $row[cid]>$row[cname]</OPTION>";
                            }
                            ?>
                            </SELECT>
                        </div>
                    </div>
                </div> 
                <div class="row">
                     <div class="col-md-5">
                        <div class="form-group">
                            <label></label>
                            <input type="submit" value = "Add Category" class="btn btn-info btn-fill pull-right"> 
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