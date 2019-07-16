<?php

    include 'header.php';
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
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Category</label>

                        <div class="col-sm-10">
                            <select class="form-control" name="cbmCategory" required> 
                                <option>Select Category</option>
                                <?php
                                        
                                    $Catsql=mysqli_query($connect,"SELECT `id`, `catagory`, `status` FROM `tbl_catagory` WHERE status='Abailable' ");
                                        
                                    while($Catrow=mysqli_fetch_assoc($Catsql)){
                                        
                                
                                ?>
                                <option class="form-control"><?php echo $Catrow["catagory"];?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Brand</label>

                        <div class="col-sm-10">
                            <select class="form-control" name="cmbBrand" required>
                                <option>Select Brand</option>
                                <?php
                                        
                                    $Catsql=mysqli_query($connect,"SELECT `id`, `brand`, `status` FROM `tbl_brand` WHERE status='Abailable' ");
                                        
                                    while($Catrow=mysqli_fetch_assoc($Catsql)){
                                        
                                
                                ?>
                                <option class="form-control"><?php echo $Catrow["brand"];?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Product Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtproductName" required></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Product Code</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtproductCode" required></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Product Price</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtPrice" required></div>
                    </div>
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
                            <button class="btn btn-primary" name="addcategory" type="submit">Add Product</button>
                        </div>
                    </div>
                    
                    <?php
                    
                        if(isset($_POST['addcategory'])){
                            
                        $Category=$_POST["cbmCategory"];
                        $Brand=$_POST["cmbBrand"];
                        $Pname=$_POST["txtproductName"];
                        $Pprice=$_POST["txtPrice"];
                        $Amount=$_POST["txtAmount"];
                        $Code=$_POST["txtproductCode"]; 
                            
                        $Incsql=mysqli_query($connect, "INSERT INTO `tbl_product`(`catagory`, `brand`, `productname`, `productcode`, `price`, `quantity`, `status`)
                        VALUES('$Category','$Brand','$Pname','$Code','$Pprice','$Amount','Abailable')");
                            
                            if($Incsql>0){
                                echo "Product Added Successfully.";
                            }else{
                                echo "Not Added.";
                            }
                        }
                    ?>
                </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>