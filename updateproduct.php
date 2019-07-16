<?php

    include 'header.php';

    $productId=$_GET["id"];
?>
<div id="wrapper">

<div class="small-header">
    <div class="hpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="index.html">Dashboard</a></li>
                    <li>
                        <span>Product</span>
                    </li>
                    <li class="active">
                        <span>Add Product</span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Product
            </h2>
            <small>Add details of your Products.</small>
        </div>
    </div>
</div>

<div class="content">

<div>
    <div class="row">
        <div class="col-md-8">
            <div class="hpanel">
                <div class="panel-heading">
                    Basic elements
                </div>
                <div class="panel-body">
                <form method="post" class="form-horizontal">
                    <?php
                                        
                        $Catsql=mysqli_query($connect,"SELECT `id`, `catagory`, `brand`, `productname`, `productcode`, `price`, `quantity`, `status`, `date` FROM `tbl_product` WHERE status='Abailable' AND id='$productId' ");   
                        while($Catrow=mysqli_fetch_assoc($Catsql)){
                    ?>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Category</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtproductName" readonly value="<?php echo $Catrow["catagory"];?>">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Category</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="txtproductName" readonly value="<?php echo $Catrow["brand"];?>">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Product Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" readonly value="<?php echo $Catrow["productname"];?>" name="txtproductName"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Product Code</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" readonly value="<?php echo $Catrow["productcode"];?>" name="txtproductCode"></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Product Amount</label>
                        <div class="col-sm-10">  
                        <input type="Number" class="form-control" name="txtAmount" required></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-default" type="submit">Cancel</button>
                            <button class="btn btn-primary" name="updateproduct" type="submit">Add More Product</button>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
                   
                </form>
                     <?php
                    
                        if(isset($_POST['updateproduct'])){
                            
                        $Amount=$_POST["txtAmount"];
                            
                            if($Amount>0){
                                $sql = mysqli_query($connect,"UPDATE `tbl_product` SET quantity=quantity+'$Amount' 
                            WHERE id='$productId' ") or die(mysqli_error($con));

                            if($sql>0){
                                echo "Product Updated Successfully.";
                                echo "<meta http-equiv=refresh content='0; url=dashboard.php'>";
                            }else{
                                echo "Not Added.";
                            }
                            }else{
                                echo "Inter Valid Product Amount.";
                            }
                            
                        }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>