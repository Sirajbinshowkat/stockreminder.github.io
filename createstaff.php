<?php

    include 'header.php';
?>
<div id="wrapper">

<div class="small-header">
    <div class="hpanel">
        <div class="panel-body">
            <div id="hbreadcrumb" class="pull-right">
                <ol class="hbreadcrumb breadcrumb">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li class="active">
                        <span>Add Product</span>
                    </li>
                </ol>
            </div>
            <h2 class="font-light m-b-xs">
                Create Staff
            </h2>
            <small>Give Your Staff Information.</small>
        </div>
    </div>
</div>

<div class="content">

<div>
    <div class="row">
        <div class="col-md-8">
            <div class="hpanel">
                <div class="panel-heading">
                    Create Staff
                </div>
                <div class="panel-body">
                <form method="post" class="form-horizontal">
                    
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Staff Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtName" required></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtEmail" required></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtPassword" required></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-default" type="submit">Cancel</button>
                            <button class="btn btn-primary" name="addcategory" type="submit">Add New Staff</button>
                        </div>
                    </div>
                    
                    <?php
                    
                        if(isset($_POST['addcategory'])){
                            
                        $Name=$_POST["txtName"];
                        $Email=$_POST["txtEmail"];
                        $Password=$_POST["txtPassword"];
                            
                        $Incsql=mysqli_query($connect, "INSERT INTO `tbl_user`(`username`, `email`, `password`, `type`) VALUES('$Name','$Email','$Password','Staff')");
                            
                            if($Incsql>0){
                                echo "Staff Added Successfully.";
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