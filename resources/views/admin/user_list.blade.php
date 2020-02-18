@extends('admin.layout')
@section('additional_css')
  <link href="/adm/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')

  <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">User List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Town</th>
                      <th>Action</th>                      
                    </tr>
                  </thead>                  
                  <tbody>
                    @foreach($users as $u)
                      
                    <tr id="row{{$u->id}}">
                      <td>{{$u->name}}</td>
                      
                      <td>{{$u->email}}</td>
                      <td>{{$u->town->name}}</td>
                      <td>
                        <button class="btn btn-success edit" user-id="{{$u->id}}" type="button"><i class="fa fa-plus"></i> Update</button>
                        <button class="btn btn-danger delete" user-id="{{$u->id}}" type="button"><i class="fa fa-trash"></i> Delete</button>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

@endsection
@section('additional_js')
    <!-- Page level plugins -->
  <script src="/adm/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/adm/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
      $('#dataTable').DataTable();
      $(".delete").on("click",function(e){
          user_id = $(this).attr('user-id');
          $.ajax({
            type:"POST",
            url:"/admin/users/delete",
            data:{user_id:user_id},
            success: function(data){
              $("#row"+user_id).remove();
            }
          }); 
      });

      $(".edit").on("click",function(){
          user_id = $(this).attr('user-id');
          window.location = "/admin/users/edit/"+user_id;
      });
    });
  </script>
@endsection