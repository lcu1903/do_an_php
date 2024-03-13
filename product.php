<?
require "./inc/init.php";
$conn = require('inc/db.php');

require "./inc/header.php";
?>

<div class="content">
    <div class="row">
        <div class="filter col-lg-3">
            <div class="filter-title mb-2">
                <h3>Filter by Category</h3>
            </div>

            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active" data-category="all">All</button>
                <button type="button" class="list-group-item list-group-item-action" data-category="fiction">Fiction</button>
                <button type="button" class="list-group-item list-group-item-action" data-category="non-fiction">Non-Fiction</button>
                <button type="button" class="list-group-item list-group-item-action" data-category="sci-fi">Sci-Fi</button>
                <button type="button" class="list-group-item list-group-item-action" data-category="fiction">Fiction</button>
                <button type="button" class="list-group-item list-group-item-action" data-category="non-fiction">Non-Fiction</button>
                <button type="button" class="list-group-item list-group-item-action" data-category="sci-fi">Sci-Fi</button>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="search row mb-3">
                <div class="col">
                    <div class="input-group">
                        <input type="text" class="form-control rounded-3" id="search-input" placeholder="Search by title">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary ms-2" type="button" id="search-button">Search</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Hiển thị sản phẩm theo dạng card -->
            <div class="product-cards">

                <? foreach ($books as $b) : ?>

                    <div class="card product-card-item">
                        <div class="card-img-book">
                            <img src="<? echo $b->image ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><? echo $b->title ?></h5>
                            <p class="card-text"><? echo $b->description ?></p>
                            <a href="#" class="btn">Book Detail</a>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>

        </div>
    </div>
</div>


<? require "./inc/footer.php"; ?>