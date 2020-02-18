@extends('admin.layout')
@section('additional_css')
  <link rel="stylesheet" type="text/css" href="/css/selectize.bootstrap3.min.css">
@endsection
@section('content')


<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Document</h6>
      </div>
      <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="/admin/documents/store">
            {{ csrf_field() }}
            <input type="hidden" name="document_id" value="{{$document->id}}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group">
              <label for="event_name">Document Name</label>
              <input type="text" name="name" value="{{$document->name}}" class="form-control" id="name" autocomplete="off" required>
                            
            </div>
           
            <div class="form-group">
              <label for="event_name">Author</label>
              <select name="author[]" id="author" multiple>
                  <option value=""></option>
                  @foreach($authors as $a)
                  <option value="{{$a->id}}" <?php if(in_array($a->id, $author_ids)) echo "selected"; ?>>{{$a->name}}</option>
                  @endforeach
              </select>
                            
            </div>

            <div class="form-group">
              <label>Date Approved</label>
              <input type="date" name="date_approved" value="{{$document->date_approved}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="category">Document Type</label>
                <select name="document_type" class="form-control">
                  @foreach($types as $type)
                    <option value="{{$type->id}}" <?php if($document->document_type == $type->id) echo "selected"; ?>>{{$type->name}}</option>
                  @endforeach
                     <option value="7">Others</option>
                </select>
                              
             </div>

             <div class="form-group">
                  <label for="category">Municipality</label>
                  <select name="town_id" class="form-control">
                    @foreach($towns as $town)
                      <option value="{{$town->id}}" <?php if($document->town_id == $town->id) echo "selected"; ?>>{{$town->name}}</option>
                    @endforeach
                  </select>
                                
              </div>

            

             <div class="form-group">
                <label for="image">Document (PDF Only)</label><br>
                <input type="file" name="document" id="document" autocomplete="off" accept="application/pdf">
                              
              </div>

              <div class="form-group"  style="margin: 27px 0;">
                
                <input type="checkbox" name="is_private" value="1" <?php if($document->is_private == 1) echo "checked"; ?>>&nbsp;<span>Private Document</span>
                              
              </div>
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Update Document</button>
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