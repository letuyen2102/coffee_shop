
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang quản lý Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/assets_admin/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets_admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('/assets_admin/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('/assets_admin/images/favicon.png') }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Đăng Nhập</h3>
                <form>
                  <div class="form-group">
                    <label>Tên đăng nhập hoặc Email *</label>
                    <input type="text" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Mật Khẩu *</label>
                    <input type="text" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        {{-- <input type="checkbox" class="form-check-input"> Lưu mật khẩu </label> --}}
                    </div>
                    <a href="#" class="forgot-pass">Quên mật khẩu</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Đăng Nhập</button>
                  </div>
                  {{-- <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p> --}}
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('/assets_admin/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('/assets_admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('/assets_admin/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('/assets_admin/misc.js') }}"></script>
    <script src="{{ asset('/assets_admin/settings.js') }}"></script>
    <script src="{{ asset('/assets_admin/todolist.js') }}"></script>
    <!-- endinject -->
  </body>
</html>