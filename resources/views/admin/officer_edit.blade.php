@extends('admin.layout')
@section('additional_css')
  <link href="/css/quill.snow.css" rel="stylesheet">
@endsection
@section('content')


<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Officer</h6>
      </div>
      <div class="card-body">
        <form method="POST" id="form-officers" enctype="multipart/form-data" action="/admin/officers/store">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="officer_id" value="{{$officer->id}}">
             <div class="form-group">
              <label for="position">Area</label>
              <select name="town" class="form-control">
                <option value="National">National</option>
                <option value="Laguna" selected>Laguna</option>
                @foreach($towns as $town)
                <option value="{{$town->name}}">{{$town->name}}</option>
                @endforeach
              </select>
                            
            </div>
            <div class="form-group">
              <label for="position">Position</label>
              <input type="text" name="position" class="form-control" value="{{$officer->position}}" id="position" autocomplete="off" required>
                            
            </div>

            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" name="fname" class="form-control" id="fname" value="{{$officer->fname}}" autocomplete="off" required>
                            
            </div>
           
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" name="lname" class="form-control" id="lname" value="{{$officer->lname}}" autocomplete="off" required>
                            
            </div> 

            <div class="form-group">
              <label for="lname">Accomplishments</label>
              <br>
              <textarea name="achievements" style="width: 100%; height: 250px;">{{$officer->achievements}}</textarea>
                            
            </div> 


            <img src="">
            <div class="form-group">
                <label for="image">Photo</label><br>
                <input type="file" name="photo" id="photo" accept="image/*">
                              
            </div>


              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" id="btn-news">Edit Officer</button>
              </div>
        </form>
      </div>
    </div>

  </div>
</div>
@section('additional_js')
  <!-- Include the Quill library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="/js/quill.js"></script>


@endsection
@endsection