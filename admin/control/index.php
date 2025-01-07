<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between my-4">
        <h1 class="h3 mb-0 text-gray-800">Bảng điều khiển</h1>
    </div>

    <div class="row">
        <!-- Monthly Revenue Chart -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2" style="height: 300px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Biểu đồ doanh thu theo tháng</div>
                        <div class="col mr-2">
                            <canvas id="monthlyRevenueChart" style="height: 250px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var ctx = document.getElementById('monthlyRevenueChart').getContext('2d');
                                    var monthlyRevenueChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: [
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result5)) {
                                                    echo "'Tháng " . $row['month'] . "',";
                                                }
                                                ?>
                                            ],
                                            datasets: [{
                                                label: 'Doanh thu theo tháng',
                                                data: [
                                                    <?php
                                                    mysqli_data_seek($result5, 0);
                                                    while ($row = mysqli_fetch_assoc($result5)) {
                                                        echo $row['total_amount'] . ",";
                                                    }
                                                    ?>
                                                ],
                                                borderColor: 'rgba(78, 115, 223, 1)',
                                                backgroundColor: 'rgba(78, 115, 223, 0.5)',
                                                borderWidth: 1,
                                                borderStyle: 'dashed'
                                            }]
                                        },
                                        options: {
                                            maintainAspectRatio: false,
                                            legend: {
                                                display: false
                                            },
                                            scales: {
                                                xAxes: [{
                                                    time: {
                                                        unit: 'month'
                                                    },
                                                    gridLines: {
                                                        display: false
                                                    },
                                                }],
                                                yAxes: [{
                                                    ticks: {
                                                        callback: function(value) {
                                                            return new Intl.NumberFormat().format(value) + 'đ';
                                                        }
                                                    },
                                                    gridLines: {
                                                        color: 'rgb(234, 236, 244)',
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Monthly Order & Product Chart -->
        <div class="col-xl-8 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2" style="height: 300px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Biểu đồ số đơn hàng & số lượng sản phẩm bán ra theo tháng</div>
                        <div class="col mr-2">
                            <canvas id="monthlyOrderAndProductChart" style="height: 250px;"></canvas>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var ctx = document.getElementById('monthlyOrderAndProductChart').getContext('2d');
                                    var monthlyOrderAndProductChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: [
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result6)) {
                                                    echo "'Tháng " . $row['month'] . "',";
                                                }
                                                ?>
                                            ],
                                            datasets: [{
                                                label: 'Số đơn đặt hàng theo tháng',
                                                data: [
                                                    <?php
                                                    mysqli_data_seek($result6, 0);
                                                    while ($row = mysqli_fetch_assoc($result6)) {
                                                        echo $row['total_order'] . ",";
                                                    }
                                                    ?>
                                                ],
                                                borderColor: 'rgba(28, 200, 138, 1)',
                                                backgroundColor: 'rgba(28, 200, 138, 0.5)',
                                                borderWidth: 1,
                                                borderStyle: 'dashed',
                                            }, {
                                                label: 'Số lượng sản phẩm theo tháng',
                                                data: [
                                                    <?php
                                                    mysqli_data_seek($result7, 0);
                                                    while ($row = mysqli_fetch_assoc($result7)) {
                                                        echo $row['total_product'] . ",";
                                                    }
                                                    ?>
                                                ],
                                                borderColor: 'rgba(75, 192, 192, 1)',
                                                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                                                borderWidth: 1,
                                                borderStyle: 'dashed',
                                            }]
                                        },
                                        options: {
                                            maintainAspectRatio: false,
                                            scales: {
                                                xAxes: [{
                                                    time: {
                                                        unit: 'month'
                                                    },
                                                    gridLines: {
                                                        display: false
                                                    },
                                                }],
                                                yAxes: [{
                                                    ticks: {
                                                        callback: function(value) {
                                                            return new Intl.NumberFormat().format(value);
                                                        }
                                                    },
                                                    gridLines: {
                                                        color: 'rgb(234, 236, 244)',
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Revenue, Orders, Products Info -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Doanh thu</div>
                            <?php
                            while ($row = mysqli_fetch_assoc($result1)) {
                            ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($row['total_amount'], 0, ',', '.') ?><sup>đ</sup></div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-wave fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-md-12 mb-4 d-flex">
            <div class="card border-left-success shadow h-100 py-2 w-50" style="margin-right: 10px;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng số đơn hàng</div>
                            <?php
                            $sql2 = "SELECT COUNT(id) as total_order FROM orders";
                            $result2 = mysqli_query($conn, $sql2);
                            while ($row = mysqli_fetch_assoc($result2)) {
                            ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $row['total_order'] ?></div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-invoice fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card border-left-info shadow h-100 py-2  w-50">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tổng số sản phẩm bán ra</div>
                            <?php
                            $sql3 = "SELECT SUM(quantity) as total_product FROM order_detail";
                            $result3 = mysqli_query($conn, $sql3);
                            while ($row = mysqli_fetch_assoc($result3)) {
                            ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $row['total_product'] ?></div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Top 5 Selling Products -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách top 5 sản phẩm bán chạy</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh</th>
                                    <th>Giá gốc</th>
                                    <th>Giảm giá</th>
                                    <th>Giá mới</th>
                                    <th>Số lượng bán ra</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result4)) {
                                    $priceOldF = number_format($row['price'], 0, ',', '.');
                                    $priceNew = $row['price'] - ($row['price'] * $row['discount'] / 100);
                                    $priceNewF = number_format($priceNew, 0, ',', '.');
                                ?>
                                    <tr>
                                        <th><?= $row['id'] ?></th>
                                        <td><?= $row['product_name'] ?></td>
                                        <td><img style="width:100px; height:100px; object-fit: cover;" src=".<?= $row['product_image'] ?>" alt=""></td>
                                        <td><?= $priceOldF ?><sup>đ</sup></td>
                                        <td><?= $row['discount'] ?>%</td>
                                        <td><?= $priceNewF ?><sup>đ</sup></td>
                                        <td><?= $row['total_unit'] ?></td>
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
</div>