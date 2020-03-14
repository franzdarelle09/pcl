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
        <form method="POST" enctype="multipart/form-data" action="/admin/documents/store">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

            @if(is_null(Auth::user()->town_id))
              <div class="form-group">
                  <label for="category">Municipality</label>
                  <select name="town_id" class="form-control">
                    @foreach($towns as $town)
                      <option value="{{$town->id}}">{{$town->name}}</option>
                    @endforeach
                  </select>
                                
               </div>
             @else
              <input type="hidden" name="town_id" value="{{Auth::user()->town_id}}">

             @endif

            <div class="form-group">
              <label for="event_name">Resolution / Ordinance Number</label>
              <input type="text" name="name" class="form-control" id="name" autocomplete="off" required>
                            
            </div>

            <div class="form-group">
              <label for="event_name">Resolution / Ordinance Title</label>
              <!-- <input type="text" name="name" class="form-control" id="name" autocomplete="off" required> -->
              <textarea style="width: 100%; height: 250px;" name="description" id="description"></textarea>
                            
            </div>

            <div class="form-group">
              <label for="event_name">Tags</label>
              <input type="text" name="tags" class="form-control" id="tags" autocomplete="off" required>
                            
            </div>
           
            <div class="form-group">
              <label for="event_name">Author</label>
              <select name="author[]" id="author">
                  <option value=""></option>
                  @foreach($authors as $a)
                  <option value="{{$a->id}}">{{$a->name}}</option>
                  @endforeach
              </select>
                            
            </div>

            <div class="form-group">
              <label for="event_name">Co Author</label>
              <select name="coauthor[]" id="coauthor">
                  <option value=""></option>
                  @foreach($authors as $a)
                  <option value="{{$a->id}}">{{$a->name}}</option>
                  @endforeach
              </select>
                            
            </div>

            <div class="form-group">
              <label>Date Approved</label>
              <input type="date" name="date_approved" class="form-control">
            </div>

            <div class="form-group">
                <label for="category">Document Type</label>
                <select name="document_type" class="form-control">
                  @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                  @endforeach
                </select>
                              
             </div>

            

             <div class="form-group">
                <label for="image">Document (PDF Only)</label><br>
                <input type="file" name="document" id="document" autocomplete="off" accept="application/pdf" required>
                              
              </div>

              <div class="form-group"  style="margin: 27px 0;">
                
                <input type="checkbox" name="is_private" value="1">&nbsp;<span>Private Document</span>
                              
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
        maxItems: 10
    });

    $('#coauthor').selectize({
        maxItems: 10
    });
  </script>
@endsection
@endsection