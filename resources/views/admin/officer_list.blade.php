@extends('admin.layout')
@section('additional_css')
  <link href="/adm/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')

  <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Officer List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Position</th>
                      <th>Photo</th>
                      <th>Name</th>
                      <th>Achievement</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($officers as $o)
                      
                    <tr id="row{{$o->id}}">
                      <td>{{$o->position}}</td>                      
                      <td><img src="/storage/officers/{{$o->photo}}" style="height: 30%" /></td>
                      <td>{{$o->fname}} {{$o->lname}}</td>
                      <td>{{$o->achievements}}</td>
                      <td>
                        <button class="btn btn-success edit" officer-id="{{$o->id}}" type="button"><i class="fa fa-plus"></i> Update</button>
                        <button class="btn btn-danger delete" officer-id="{{$o->id}}" type="button"><i class="fa fa-trash"></i> Delete</button>
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
          officer_id = $(this).attr('officer-id');
          $.ajax({
            type:"POST",
            url:"/admin/officers/delete",
            data:{officer_id:officer_id},
            success: function(data){
              $("#row"+officer_id).remove();
            }
          }); 
      });

      $(".edit").on("click",function(){
          officer_id = $(this).attr('officer-id');
          window.location = "/admin/officers/edit/"+officer_id;
      });
    });
  </script>
@endsection