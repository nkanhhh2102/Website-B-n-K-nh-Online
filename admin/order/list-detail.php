<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Chi tiết đơn hàng</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <a style="margin-bottom:15px;" class="btn btn-success" href="./index.php?act=order">Quay về</a>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                $priceF = number_format($row['unit_price'], 0, ',', '.');
                            ?>
                                <tr>
                                    <th><?= $row['order_id'] ?></th>
                                    <td><?= $row['product_name'] ?></td>
                                    <td><img style="width:100px; height:100px; object-fit: cover;" src=".<?= $row['product_image'] ?>" alt=""></td>
                                    <td><?= $priceF ?><sup>đ</sup></td>
                                    <td><?= $row['quantity'] ?></td>
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