@extends('admin.master.masteradmin')

@section('css')
  @parent
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
<<<<<<< HEAD
          <div class="col-lg-9 col-12">
                <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới doctor</h3>
=======
          <div class="col-lg-12 col-12">
                <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm mới chuyên môn</h3>
>>>>>>> 83e0c695002e1949d6ffc75ec94c0467db85e1fc
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  

                <div class="form-group">
<<<<<<< HEAD
                    <label for="exampleInputEmail1">Bằng cấp</label>
                    <input type="number" class="form-control" name="id_chuyenmon" id="id_chuyenmon" placeholder="Nhập ID">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bằng cấp</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nhập bằng cấp">
=======
                    <label for="exampleInputEmail1">ID</label>
                    <input type="number" class="form-control @error('id_chuyenmon') is-invalid @enderror" name="id_chuyenmon" id="id_chuyenmon" placeholder="Nhập ID">
                    @error('id_chuyenmon')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Chuyên môn</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Nhập bằng cấp">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
>>>>>>> 83e0c695002e1949d6ffc75ec94c0467db85e1fc
                  </div>

                  
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