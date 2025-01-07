<!-- Footer -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<script>
    function deleteC(event) {
        event.preventDefault();

        const deleteLink = event.currentTarget; // sử dụng this để lấy phần tử được kích hoạt
        const path = deleteLink.getAttribute('href');

        Swal.fire({
            title: "Bạn có chắc muốn xóa?",
            text: "Bạn sẽ không thể khôi phục điều này!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            cancelButtonText: "Hủy bỏ",
            confirmButtonText: "Xóa"
        }).then((result) => {
            if (result.value) {
                document.location.href = path;
            }
        });
    }


    $('#description').summernote({
        placeholder: 'Mô tả sản phẩm',
        tabsize: 2,
        height: 150
    });

    function validateDiscount(input) {
        if (input.value < 0) {
            input.value = 0;
        }

        if (input.value > 100) {
            input.value = 100;
        }
    }

    function validatePrice(input) {
        if (input.value < 0) {
            input.value = 0;
        }
    }
</script>

<script src="vendor/jquery/jquery.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>