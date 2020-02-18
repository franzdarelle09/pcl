@extends('admin.layout')
@section('additional_css')
  <link rel="stylesheet" type="text/css" href="/css/selectize.bootstrap3.min.css">
@endsection
@section('content')


<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add User</h6>
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="/admin/signup">
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="event_name">Name</label>
              <input type="text" name="name" class="form-control" id="fname" autocomplete="off" required>
                            
            </div>

            <div class="form-group">
              <label for="event_name">Email</label>
              <input type="email" name="email" class="form-control" id="email" autocomplete="off" required>
                            
            </div>            

            <div class="form-group">
              <label for="event_name">Password</label>
              <input type="password" name="password" class="form-control" id="password" autocomplete="off" required>
                            
            </div>

            <div class="form-group">
              <label for="event_name">Confirm Password</label>
              <input type="password" name="password2" class="form-control" id="password" autocomplete="off" required>
                            
            </div>


           
            

            

            <div class="form-group">
                <label for="category">Municipality</label>
                <select name="town_id" class="form-control">
                  @foreach($towns as $town)
                    <option value="{{$town->id}}">{{$town->name}}</option>
                  @endforeach
                     
                </select>
                              
             </div>

             

              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Add User</button>
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