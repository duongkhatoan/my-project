$('#registerForm').submit(function(event) {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/register', // Đường dẫn đến route xử lý đăng ký
        data: $(this).serialize(), // Dữ liệu từ form
        success: function(response) {
            // Xử lý phản hồi từ server
            if(response.success) {
                window.location.reload();
            }
        },
        error: function(xhr, status, error) {
            // Xử lý lỗi nếu có
            console.error(error);
        }
    });
});
$('#loginUserForm').submit(function(event) {
    event.preventDefault();

    $.ajax({
        type: 'POST',
        url: '/login', // Đường dẫn đến route xử lý đăng ký
        data: $(this).serialize(), // Dữ liệu từ form
        success: function(response) {
            // Xử lý phản hồi từ server
            if(response.success) {
                window.location.reload();
            }
        },
        error: function(xhr, status, error) {
            // Xử lý lỗi nếu có
            console.error(error);
        }
    });
});
