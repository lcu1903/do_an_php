<?
require "./inc/init.php";
$conn = require('inc/db.php');
$BASE_URL = "http://localhost/CNW/CT06/libraryphp/api/routes/book";

$url = $BASE_URL . "/get_books.php";
$response = file_get_contents($url . "?limit=99&page=1");
$data = json_decode($response, true);
$books = $data['data'];
?>

<?php
if (isset($_POST['offset'])) {
    $offset = $_POST['offset'];
    $new_books = array_slice($books, $offset, 8); // Lấy 8 quyển sách tiếp theo từ offset
    foreach ($new_books as $b) :
?>
        <div class="card" style="width: 16rem;">
            <img src="<?php echo $b['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $b['title'] ?></h5>
                <p class="card-text"><?php echo $b['description'] ?></p>
                <a href="http://localhost/CNW/CT06/libraryphp/do_an_php/book-detail.php?id=<? echo $b['id'] ?>" class="btn btn-primary">Book Detail</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php } ?>