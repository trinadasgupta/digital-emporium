<?php
include "lib/config.php";
include "lib/login_check.php";

if($_POST['update_id'])
{
    $sql = "UPDATE `category` SET `cname` = '$_POST[cname]', `parent_id` = '$_POST[parent_id]' WHERE `cid` = '$_POST[update_id]'";
    $db->query($sql);
    $msg =  '<div class="alert alert-success"><span>Update Successful.</span></div>';
}

$sql = "SELECT * FROM `category` WHERE `cid` = '$_GET[edit_id]'";
$res = $db->query($sql);
$selectedRow = $res->fetch_array();

include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">Edit Category</h4>
        </div>
        <div class="content">
            <form action = edit_category.php method = post>
            <input type="hidden" name = "update_id" value = "<?=$_GET['edit_id']?>">
                <?=$msg?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" name = "cname" class="form-control"  placeholder="Category Name" VALUE = "<?=$selectedRow['cname']?>">
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
                                if($selectedRow['parent_id'] == $row['cid'])
                                    print "<OPTION SELECTED VALUE = $row[cid]>$row[cname]</OPTION>";
                                else
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
                            <input type="submit" value = "Edit Category" class="btn btn-info btn-fill pull-right"> 
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