<!DOCTYPE html>
<html>
<?php
  include ('adminpartials/session.php');
  include ('adminpartials/head.php');
  ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php
  include ('adminpartials/header.php');
  ?>
        <!-- Left side column. contains the logo and sidebar -->
        <?php
  include ('adminpartials/adminaside.php');
  ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">

                        <?php
                    include('../partials/connection.php');
                    $product = "SELECT * from AMANSHRESTHA.products";
                    $result = oci_parse($conn, $product);
                    oci_execute($result);
                    ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">PRICE</th>
                                    <th scope="col">DISCOUNT</th>
                                    <th scope="col">ALLERGY INFO</th>
                                    <th scope="col">DESCRIPTION</th>
                                    <th scope="col">STOCK</th>
                                    <th scope="col">UPDATE</th>
                                    <th scope="col">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                    while($final = oci_fetch_assoc($result))
                    {
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $final['PRODUCT_ID']?></th>
                                    <td><a href="adminproductdetail.php?pro_id=<?php echo $final['PRODUCT_ID']?>">
                                            <?php echo $final['PRODUCT_NAME']?>
                                        </a></td>
                                    <td>
                                        <?php echo $final['PRODUCT_PRICE']?>
                                    </td>
                                    <td>
                                        <?php echo $final['DISCOUNT']?>
                                    </td>
                                    <td>
                                        <?php echo $final['ALLERGY']?>
                                    </td>
                                    <td>
                                        <?php echo $final['PRODUCT_DESCRIPTION']?>
                                    </td>
                                    <td>
                                        <?php echo $final['PRODUCT_STOCK']?>
                                    </td>
                                    <td><a href="adminproductupdate.php?up_id=<?php echo $final['PRODUCT_ID']?>">
                                            <button class="btn btn-primary">Update</button>
                                        </a></td>
                                    <td><a href="admindeleteproduct.php?del_id=<?php echo $final['PRODUCT_ID']?>">
                                            <button class="btn btn-danger">Delete</button>
                                        </a></td>
                                </tr>
                                <?php
                    }
                    ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php
  include ('adminpartials/footer.php');
  ?>
</body>

</html>