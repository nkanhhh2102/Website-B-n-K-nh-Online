<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
            <a href="./index.php?act=addDM" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Thêm loại
                sản phẩm</a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách loại sản phẩm</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên loại sản phẩm</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td>
                                        <?= $row['id'] ?>
                                    </td>
                                    <td>
                                        <?= $row['category_name'] ?>
                                    </td>
                                    <td style="width: 200px;">
                                        <a class="btn btn-warning" href="./index.php?act=updateDM&id=<?= $row['id']; ?>">Sửa</a>
                                        <a class="btn btn-danger" href="./index.php?act=deleteDM&id=<?= $row['id']; ?>" onclick="deleteC(event)">Xóa</a>
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