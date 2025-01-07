<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="./index.php?act=addSP" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Thêm sản phẩm</a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá gốc</th>
                                <th>Giảm giá</th>
                                <th>Giá mới</th>
                                <th>Ảnh</th>
                                <th>Danh mục</th>
                                <th>Lượt xem</th>
                                <th>Ngày thêm</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                $priceOldF = number_format($row['price'], 0, ',', '.');
                                $priceNew = $row['price'] - ($row['price'] * $row['discount'] / 100);
                                $priceNewF = number_format($priceNew, 0, ',', '.');
                            ?>
                                <tr>
                                    <th><?= $row['product_id'] ?></th>
                                    <td><?= $row['product_name'] ?></td>
                                    <td><?= $priceOldF ?><sup>đ</sup></td>
                                    <td><?= $row['discount'] ?>%</td>
                                    <td><?= $priceNewF ?><sup>đ</sup></td>
                                    <td><img style="width:100px; height:100px; object-fit: cover;" src=".<?= $row['product_image'] ?>" alt=""></td>
                                    <td><?= $row['category_name'] ?></td>
                                    <td><?= $row['view'] ?></td>
                                    <td style="width: 120px;"><?= $row['create_date'] ?></td>
                                    <td style="width: 180px;">
                                        <a class="btn btn-warning" href="./index.php?act=updateSP&id=<?= $row['product_id']; ?>">Sửa</a>
                                        <a class="btn btn-danger" href="./index.php?act=deleteSP&id=<?= $row['product_id']; ?>" onclick="deleteC(event)">Xóa</a>
                                    </td>
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