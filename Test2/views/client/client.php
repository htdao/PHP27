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
                <a class="nav-link" href="index.php?mod=client&act=client&admin=client">
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
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-home"></i>
                  </span> Trang chủ
                </h3>
              </div>
              <div class="row">
                <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                      <img src="public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Số Bài Viết <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5"><?= $sumPost ?></h2>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                      <img src="public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Tổng Lượt Xem <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5"><?=$sumView?></h2>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-md-4 stretch-card grid-margin">
                  <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                      <img src="public/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                      <h4 class="font-weight-normal mb-3">Số Người Dùng <i class="mdi mdi-diamond mdi-24px float-right"></i>
                      </h4>
                      <h2 class="mb-5"><?= $sumUser ?></h2>
                    </div>
                  </div>
                </div> -->
              </div>

              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Bài Viết</h4>
                  </p>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Lượt xem</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($userPost as $value) { ?>
                      <tr>
                        <td> <?= $value['id'] ?> </td>
                        <td> <?= $value['title'] ?> </td>
                        <td> <?= $value['view_count'] ?> </td>
                        <td>
                          <a href="" class="btn btn-gradient-primary viewModal" data-id ='<?= $value['id'] ?>'>Xem</a>
                          <a href="?mod=client&act=edit&admin=client&id=<?= $value['id'] ?>" class="btn btn-gradient-success">Sửa</a>
                          <a href="?mod=client&act=destroy&admin=client&id=<?= $value['id'] ?>" class="btn btn-gradient-danger">Xóa</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal" tabindex="-1" id='modalViewCategory' role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width: 800px">
                      <div class="modal-header">
                        <h3 class="modal-title">Xem chi tiết</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>ID: <span id = 'idPost'></span></p>
                        <p>Người viết: <span id = 'user'></span></p>
                        <p>Danh mục: <span id = 'cate'></span></p>
                        <p>Tiêu Đề: <span id = 'titlePost'></span></p>
                        <p>Mô Tả: <span id = 'descriptionPost'></span></p>
                        <p>Slug: <span id = 'slugPost'></span></p>
                        <p>Nội dung: <span id = 'contentPost'></span></p>
                        <p>Lượt xem: <span id = 'view_countPost'></span></p>
                        <p>Ngày tạo: <span id = 'created_atPost'></span></p>
                        <p>Ảnh:</p>
                        <img style="height: 300px;width: 400px;" src="" id="thumbnailPost">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                      </div>
                    </div>
                  </div>
              </div>
              <script type="text/javascript">
              $(document).ready(function(){
                  $('.table').on('click','.viewModal',function(e){
                      e.preventDefault()
                      let id = $(this).attr('data-id');
                      console.log('fghj')

                      $.ajax({
                          url: '/php27.zent/Test2/models/processPost.php?id='+id,
                          type:'get',
                          success: (response)=>{
                              var response = JSON.parse(response);
                              console.log(response)
                              $('#idPost').text(response.id);
                              $('#user').text(response.user_id);
                              $('#cate').text(response.category_id);
                              $('#titlePost').text(response.title);
                              $('#descriptionPost').text(response.description);
                              $('#thumbnailPost').attr('src','public/images/postImg/'+response.thumbnail);
                              $('#contentPost').text(response.content);
                              $('#view_countPost').text(response.view_count);
                              $('#slugPost').text(response.slug);
                              $('#created_atPost').text(response.created_at);
                              $('#modalViewCategory').modal('show');
                          }
                      })
                  })
              })
          </script>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Thêm bài viết</h4>
                  <form enctype="multipart/form-data" class="forms-sample" action='index.php?mod=client&act=store&admin=client' method="post">
                    <div class="form-group">
                        <label for="exampleInputName1">Tiêu đề</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="title" required="">
                      </div>
                      <div class="form-group">
                        <label>Ảnh</label>
                        <input type="file" class="form-control file-upload-info" name="thumbnail" id="ANH_SP" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Mô tả</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="description" required="">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">User</label>
                        <input type="" readonly="" class="form-control" id="exampleInputPassword4" name="user_id" value="<?= $_SESSION['auth']['id'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Lượt xem</label>
                        <input type="" readonly="" class="form-control" id="exampleInputPassword4" name="view_count" value="0">
                      </div>
                      <div class="form-group">
                          <label for="exampleSelectGender">Danh mục cha</label>
                          <select class="form-control" name="category_id" id="category">
                          <option value="NULL">Danh mục cha</option>
                          <?php foreach ($cate_id as $cate) { ?>
                              <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                          <?php } 
                          ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Nội dung</label>
                        <textarea type="text" style="height: 200px;" class="form-control" id="exampleInputPassword4" name="content" required=""></textarea>
                      </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Thêm</button>
                    <button class="btn btn-light">Hủy</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php 
          include_once('views/admin/footer.php');
          ?>