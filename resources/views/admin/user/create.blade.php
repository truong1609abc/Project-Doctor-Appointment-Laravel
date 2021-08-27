@extends('admin.master.masteradmin')

@section('content')
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-9 col-12">
                <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới doctor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ngày sinh</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Nhập ngày sinh">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nhập trạng thái">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Số điện thoại</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nhập Số điện thoại">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>

          <!-- <div class="col-lg-3 col-12"> 
                Ảnh
          </div> -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

@endsection