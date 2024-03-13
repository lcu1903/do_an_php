<?

function logOut()
{
  $access_token = "";
  $refresh_token = "";

  if (isset($_COOKIE['access_token'])) {
    $access_token = $_COOKIE['access_token'];
  }
  if (isset($_COOKIE['refresh_token'])) {
    $refresh_token = $_COOKIE['refresh_token'];
  }
  $BASE_URL = "http://localhost/CNW/CT06/libraryphp/api/routes/auth";
  // Cấu hình URL và thông tin yêu cầu
  $url = $BASE_URL . '/logout.php'; // Thay thế bằng URL thực tế của bạn

  // Tạo dữ liệu yêu cầu
  $data = array(
    'refresh_token' => 'Bearer ' . $refresh_token
  );

  // Tạo header yêu cầu
  $headers = array(
    "Content-Type: application/x-www-form-urlencoded",
    "Authorization: Bearer " . $access_token // Thay thế bằng token thực tế của bạn
  );

  // Khởi tạo cURL
  $ch = curl_init($url);

  // Cấu hình cURL
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  // Gửi yêu cầu và nhận phản hồi
  $response = curl_exec($ch);

  // Kiểm tra mã phản hồi HTTP
  $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

  // Đóng kết nối cURL
  curl_close($ch);

  if ($httpCode === 200) {
    // Xử lý phản hồi thành công
    $object = json_decode($response);
    setcookie('access_token', '', 0, '/');
    setcookie('refresh_token', '', 0, '/');
    header("Location: index.php");
  } else {
    // Xử lý lỗi
    $object = json_decode($response);
    echo $object->errors;
  }
}
if (isset($_GET['log_out'])) {
  logOut();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books Store</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <header class="header">
    <nav class="header__nav">
      <div class="header__logo">
        <img class="header__logo-img" src="./assets/img/logo-book.png" alt="logo">
        <a href="index.php" data-aos="fade-down">my library</a>
        <div class="header__logo-overlay"></div>
      </div>

      <ul class="header__menu" data-aos="fade-down">
        <li><a href="index.php">Home</a></li>
        <li><a href="product.php">Product</a></li>
        <li><a href="index.php">Services</a></li>
        <li><a href="index.php">Contact</a></li>
        <? if (isset($_COOKIE['access_token'])) : ?>
          <li><a href="add_user.php">Add User</a></li>
          <li><a href="add_book.php">Add Book</a></li>
          <li><a href="./?log_out=true">Logout</a></li>
        <? else : ?>
          <li><a href="login.php">Login</a></li>
        <? endif; ?>
      </ul>

      <div class="header__menu-mobile" data-aos="fade-down">
        <img src="./assets/img/menu.svg" alt="menu" class="menu-icon">
        <div class="mobile-menu">
          <ul class="mobile__menu-list">
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="index.php">Services</a></li>
            <li><a href="index.php">Contact</a></li>
            <? if (isset($_COOKIE['access_token'])) : ?>
              <li><a href="add_user.php">Add User</a></li>
              <li><a href="add_book.php">Add Book</a></li>
              <li><a href="./?log_out=true">Logout</a></li>
            <? else : ?>
              <li><a href="login.php">Login</a></li>
            <? endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="banner">
    <div class="cover"></div>
    <img class="banner_img" src="./assets/img/banner-header.png" alt="banner">
  </div>
</body>

</html>