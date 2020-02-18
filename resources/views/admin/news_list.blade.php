@extends('admin.layout')
@section('additional_css')
  <link href="/adm/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection
@section('content')

  <!-- Page Heading -->
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">News List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Action</th>                      
                    </tr>
                  </thead>
                  
                  <tbody>
                    @foreach($news as $n)
                      
                    <tr id="row{{$n->id}}">
                      <td>{{$n->title}}</td>
                      
                      <td><a href="/storage/news/{{$n->cover_photo}}" target="_blank">View</a></td>
                      <td>
                        <button class="btn btn-success edit" news-id="{{$n->id}}" type="button"><i class="fa fa-plus"></i> Update</button>
                        <button class="btn btn-danger delete" news-id="{{$n->id}}" type="button"><i class="fa fa-trash"></i> Delete</button>
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
          news_id = $(this).attr('news-id');
          $.ajax({
            type:"POST",
            url:"/admin/news/delete",
            data:{news_id:news_id},
            success: function(data){
              $("#row"+news_id).remove();
            }
          }); 
      });

      $(".edit").on("click",function(){
          news_id = $(this).attr('news-id');
          window.location = "/admin/news/edit/"+news_id;
      });
    });
  </script>
@endsection