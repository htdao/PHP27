<!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="public/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="public/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="public/images/favicon.ico" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="public/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="public/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Tìm kiếm">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile">
              <a class="dropdown-item" href="index.php?mod=logout&act=logout&admin=auth">
                <i class="mdi mdi-logout mr-2 text-primary"></i> Đăng xuất </a>
              </li>
              <li class="nav-item d-none d-lg-block full-screen-link">
                <a class="nav-link">
                  <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                  <div class="nav-profile-image">
                    <img src="public/images/userImg/<?= $_SESSION['auth']['avatar'] ?>" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                  </div>
                  <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2"><?= $_SESSION['auth']['name'] ?></span>
                  </div>
                  <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?mod=home&act=admin&admin=admin">
                  <span class="menu-title">Trang chủ</span>
                  <i class="mdi mdi-home menu-icon"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?mod=client&act=profile&admin=client">
                <span class="menu-title">Profile</span>
                  <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                </a>
              </li>
            </ul>
          </nav>

             
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h2 class="page-title"> Sửa Bài Viết </h2>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Add new category</h4> -->
                    <form enctype="multipart/form-data" class="forms-sample" action='index.php?mod=client&act=update&admin=client' method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $id ?>" >
                        </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Tiêu đề</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" value="<?= $post['title'] ?>">
                      </div>
                      <div class="form-group">
                        <label>Ảnh</label>
                        <input type="file" class="form-control file-upload-info" name="thumbnail" id="ANH_SP">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Mô tả</label>
                        <input type="text" class="form-control" name="description" value="<?= $post['description'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Nội dung</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="content" value="<?= $post['content'] ?>">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2">Cập nhật</button>
                      <button class="btn btn-light">Hủy</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <?php 
          require_once('views/admin/footer.php');
           ?>