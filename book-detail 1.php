<?
require "inc/init.php";
$conn = require("inc/db.php");
?>

<?php
require "./inc/header.php";

$id = $_GET['id'];

$BASE_URL = "http://localhost/CNW/CT06/libraryphp/api/routes/book";
$url = $BASE_URL . "/get_book_by_id.php";
$response = file_get_contents($url . "?id=" . $id);
$data = json_decode($response, true);
$book = $data['data'];


?>


<?php
if ($book) {
    $bookId = $book['id'];
    $title = $book['title'];
    $description = $book['description'];
    $image = $book['image'];
    $category = $book['category_value'];
    $author = $book['author'];
    $available = $book['available'];
} else {
    echo "Không tìm thấy sách";
}
?>

<div class="content">
    <div class="book-detail row mb-5">
        <div class="book-detail_cover col-md-4">
            <div class="book-detail_img row">
                <img src="<? echo $image ?>" alt="">
            </div>
            <div class="book-detail_category row">
                <h4>Category: <? echo $category ?></h4>
            </div>
        </div>
        <div class="book-detail_info col-md-8">
            <div class="book-detail_title row">
                <h2><? echo $title ?></h2>
            </div>
            <hr>
            <div class="book-detail_desc row">
                <h5>Description: <? echo $description ?></h5>
            </div>
            <hr>
            <div class="row">
                <div class="book-detail_btn col">
                    <button class="btn">Update</button>
                    <button class="btn">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <div class="book-suggest_list row">
        <div class="book-suggest_item col-md-3">
            <img src="./uploads/1984.jpg" alt="">
        </div>
        <div class="book-suggest_item col-md-3">
            <img src="./uploads/1984.jpg" alt="">
        </div>
        <div class="book-suggest_item col-md-3">
            <img src="./uploads/1984.jpg" alt="">
        </div>
        <div class="book-suggest_item col-md-3">
            <img src="./uploads/1984.jpg" alt="">
        </div>
    </div>
</div>

<?php
require "./inc/footer.php";
?>