<? 
    require "./inc/init.php";
    $conn = require('inc/db.php');
    require "./inc/header.php";
    
?>

<div class="content">
    <div class="row"> 
        <div class="col-lg-3">
            <div class="user-infomation">
                <h5 class="text-center mt-3">Thông tin người dùng</h5>
                <div class="mx-3 mb-3">
                    <p>Tên: Nguyễn Văn A</p>
                    <p>Email: nguyenvana@gmail.com</p>
                    <p>SĐT: 0123456789</p>
                    <p>Ngày sinh: 01/01/2001</p>
                    <p>Địa chỉ: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, quam consequatur voluptate earum ipsa rem quis</p>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <table class="table">
                <thead  align="center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên sách</th>
                        <th scope="col">Ảnh thu nhỏ</th>
                        <th scope="col">Ngày mượn</th>
                        <th scope="col">Ngày trả</th>
                    </tr>
                </thead>
                <tbody style="vertical-align: middle;">
                    <tr>
                        <td>1</td>
                        <td>To Kill a Mockingbird - Harper Lee</td>
                        <td>
                            <img src="./uploads/1984.jpg" alt="" style="width:auto; height:90px;">
                        </td>
                        <td>01/01/2024</td>
                        <td>02/02/2024</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>To Kill a Mockingbird - Harper Lee</td>
                        <td>
                            <img src="./uploads/1984.jpg" alt="" style="width:auto; height:90px;">
                        </td>
                        <td>01/01/2024</td>
                        <td>02/02/2024</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>To Kill a Mockingbird - Harper Lee</td>
                        <td>
                            <img src="./uploads/1984.jpg" alt="" style="width:auto; height:90px;">
                        </td>
                        <td>01/01/2024</td>
                        <td>02/02/2024</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<? require "./inc/footer.php";?>