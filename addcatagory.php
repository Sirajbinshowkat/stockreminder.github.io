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
                        <span>Catagory</span>
                    </li>
                    <li class="active">
                        <span>Add Catagory</span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Catagory
            </h2>
            <small>Add Catagory of your Products.</small>
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
                    <div class="form-group"><label class="col-sm-2 control-label">Name of Category</label>
                        <div class="col-sm-10"><input type="text"  name="txtCategory" class="form-control" required></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group"><label class="col-sm-2 control-label">Status</label>

                        <div class="col-sm-10">
                           <select class="form-control" name="cmbStatus" required>
                                <option>Abailable</option>
                                <option>Not Abailable</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-default" type="submit">Cancel</button>
                            <button class="btn btn-primary" name="addcategory" type="submit">Add Catagory</button>
                        </div>
                    </div>
                    
                    <?php
                       if(isset($_POST['addcategory'])){
                        $Category=$_POST["txtCategory"];
                        $Status=$_POST["cmbStatus"];
                    
                        $sql=mysqli_query($connect, "INSERT INTO `tbl_catagory`(`catagory`, `status`) 
                        VALUES('$Category','$Status') ");
                            
                        if($sql>0){
                            
                            echo "Category Added Successfully.";
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
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    