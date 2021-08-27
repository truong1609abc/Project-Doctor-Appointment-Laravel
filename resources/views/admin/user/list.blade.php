@extends('admin.master.masteradmin')

@section('css')
  @parent
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
<div class="card-body table-responsive p-0">
                <table id="table-doctor" class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên</th>
                      <th>Ngày sinh</th>
                      <th>Email</th>
                      <th>Trạng thái</th>
                      <th>Địa chỉ</th>
                      <th>Số điện thoại</th>
                      <th >Active</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>11</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td>abc@gmail.com</td>
                      <td>Nam</td>
                      <td>Hà Nội</td>
                      <td>012345678</td>
                      
                      <td>
                      <a style="float: left;" href=""><i class="fas fa-cog"></i></a>
                      
                      <a style="float: right;" href=""><i class="fas fa-trash"></i></a>
                      </td>
                      
                    </tr>
                    
                  </tbody>
                </table>
              </div>
@endsection

@section('scripts')
  @parent
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script>
  $(function () {
    $("#table-doctor").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#table-doctor_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


@endsection