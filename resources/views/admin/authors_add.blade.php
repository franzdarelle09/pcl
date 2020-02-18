@extends('admin.layout')
@section('additional_css')
  <link rel="stylesheet" type="text/css" href="/css/selectize.bootstrap3.min.css">
@endsection
@section('content')


<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Document</h6>
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="/admin/authors/store">
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="event_name">First Name</label>
              <input type="text" name="fname" class="form-control" id="name" autocomplete="off" required>
                            
            </div>

            <div class="form-group">
              <label for="event_name">Last Name</label>
              <input type="text" name="lname" class="form-control" id="name" autocomplete="off" required>
                            
            </div>
           
            

            

            <div class="form-group">
                <label for="category">Position</label>
                <select name="position" class="form-control">
                  @foreach($positions as $position)
                    <option value="{{$position}}">{{$position}}</option>
                  @endforeach
                     
                </select>
                              
             </div>

             <div class="form-group">
                <label for="image">Image</label><br>
                <input type="file" name="image" id="image" accept="image/*">
                              
              </div>

              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Add Document</button>
              </div>
        </form>
      </div>
    </div>

  </div>
</div>
@section('additional_js')
  <script src="/js/selectize.min.js"></script>
  <script type="text/javascript">
    $('#author').selectize({
        maxItems: 5
    });
  </script>
@endsection
@endsection