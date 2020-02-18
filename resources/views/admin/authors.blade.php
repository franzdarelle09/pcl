@extends('admin.layout')
@section('additional_css')
  <link href="/adm/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')

  <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Author List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Action</th>                      
                    </tr>
                  </thead>                  
                  <tbody>
                    @foreach($authors as $author)
                      
                    <tr id="row{{$author->id}}">
                      <td>{{$author->name}}</td>
                      
                      <td>{{$author->position}}</td>
                      <td>
                        <!-- <button class="btn btn-success edit" author-id="{{$author->id}}" type="button"><i class="fa fa-plus"></i> Update</button> -->
                        <button class="btn btn-danger delete" author-id="{{$author->id}}" type="button"><i class="fa fa-trash"></i> Delete</button>
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
          document_id = $(this).attr('document-id');
          $.ajax({
            type:"POST",
            url:"/admin/authors/delete",
            data:{document_id:document_id},
            success: function(data){
              $("#row"+document_id).remove();
            }
          }); 
      });

      $(".edit").on("click",function(){
          document_id = $(this).attr('document-id');
          window.location = "/admin/authors/edit/"+document_id;
      });
    });
  </script>
@endsection