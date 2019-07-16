<?php
    include 'header.php';
?>

<!-- Main Wrapper -->
<div id="wrapper">

    <div class="content">
        <div class="row">
            <div class="col-lg-12 text-center welcome-message">
                <h2>
                    Welcome to Sarker Lather
                </h2>

                <p>
                    Special <strong>Lather Collection</strong> for all classes of People.
                </p>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12 text-center welcome-message">
                <div class="counter">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="employees">
                                <p class="counter-count">879</p>
                                <p class="employee-p">Sale Today</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="customer">
                                <p class="counter-count">954</p>
                                <p class="customer-p">This Week</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="design">
                                <p class="counter-count">1050</p>
                                <p class="design-p">This Month</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="order">
                                <p class="counter-count">652</p>
                                <p class="order-p">Product In Stock</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">
                    <div class="panel-heading">
                        <h3>List of Transactions.</h3>
                    </div>
                    <div class="panel-body">

                        <table id="example2" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Product Code</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Sale By</th>
                            </tr>
                        </thead>
                        <tbody>
                             <?php
                                //$name=$_SESSION["name"];
                                $sql= mysqli_query($connect,"SELECT `id`, `productcode`, `quantity`, `price`, `date`,saleby FROM `tbl_sale`");   
                                while($row=mysqli_fetch_assoc($sql))
                                {
                            ?>
                            <tr>
                                <td><?php echo $row["productcode"] ?></td>
                                <td><?php echo $row["quantity"] ?></td>
                                <td><?php echo $row["price"] ?></td>
                                <td><?php echo $row["date"] ?></td> 
                                <td><?php echo $row["saleby"]?></td>
                                <!--<td>
                                    <a href="updateproduct.php?id=<?php echo $row["id"]?>" class="btn btn-info">Add New Item</a>
                                    <a href="sale.php?id=<?php echo $row["productcode"]?>" class="btn btn-danger">Sale Item</a>
                                </td>-->
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php
        include 'footer.php';
    ?>