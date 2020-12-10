<?php
include "lib/config.php";
include "lib/login_check.php";

if ($_POST['name']) {

    $sql = "INSERT INTO `products` (`id`, `name`, `price`, `image`, `details`, `cid`) VALUES
            (null, '$_POST[name]', '$_POST[price]', '', '$_POST[details]', '$_POST[cid]')";
    $db->query($sql);
    $pid = $db->insert_id;
    $msg = "Product Added. ";

    if ($_FILES['image']['name']) {
        $value= explode (".", $_FILES['image']['name']);
        $ext = strtolower  (  end   ( $value ) );
        if ( $ext == "jpg" || $ext == "jpeg" ||  $ext == "png" || $ext == "gif" ) {

            if ( $_FILES['image']['size'] < 10*1024*1024  ) {                

                $pic = "products/".$pid."_". strtolower(str_replace(" ", "_",$_FILES['image']['name']));
                //copy($_FILES['image']['tmp_name'], "../".$pic);
                move_uploaded_file($_FILES['image']['tmp_name'], "../".$pic);
                $sql = "UPDATE `products` SET  `image` = '$pic' WHERE `id` = '$pid' ";
                $db->query($sql);
            }
            else
                $msg .= "Image ignored. Image file too Large!";
        }    //    FLOWER red yellow.jpg          7_flower_red_yellow.jpg
        else
            $msg .= "Image ignored. Invalid file format. Please upload an image only.";
    }

     $msg =  '<div class="alert alert-success"><span>'.$msg.'</span></div>';
}

include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">Add Products</h4>
        </div>
        <div class="content">
            <form action = add_products.php method = post ENCTYPE = "multipart/form-data">
                <?=$msg?>
                
                 <div class="row">
                     <div class="col-md-8">
                        <div class="form-group">
                            <label>Product Category </label>
                            <SELECT name = "cid" class="form-control">
                            <?php
                            $sql = "SELECT * FROM `category` WHERE `parent_id` = '0'";
                            $res = $db->query($sql);
                            while($row = $res->fetch_array())
                            {
                              print "<OPTION VALUE = $row[cid]>$row[cname]</OPTION>";

                                $sql2 = "SELECT * FROM `category` WHERE `parent_id` = '$row[cid]'";
                                $res2 = $db->query($sql2);
                                while($row2 = $res2->fetch_array())
                                {
                                  print "<OPTION VALUE = $row2[cid]> &nbsp; &nbsp; &nbsp; &raquo; $row2[cname]</OPTION>";
                                }
                            }
                            ?>
                            </SELECT>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name = "name" class="form-control"  placeholder="Product Name" >
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" name = "price" class="form-control"  placeholder="Product Price" >
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Product Details</label>
                            <textarea name = "details" class="form-control"  ></textarea>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" name = "image" class="form-control" >
                        </div>
                    </div>
                 </div>
                <div class="row">
                     <div class="col-md-5">
                        <div class="form-group">
                            <label></label>
                            <input type="submit" value = "Add Product" class="btn btn-info btn-fill pull-right"> 
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