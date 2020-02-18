@extends('admin.layout')

@section('content')


<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Announcements</h6>
      </div>
      <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="/admin/announcement/store">
            {{ csrf_field() }}
            <input type="hidden" name="announcement_id" value="{{$announcement->id}}">
            <div class="form-group">
              <label for="message">Message</label>
              <input type="text" name="message" class="form-control" id="message" value="{{$announcement->message}}" autocomplete="off" required>
                            
            </div>           

            
              <div class="form-group">
                  <label>Status</label>
                  <select name="status" class="form-control">
                      
                        <option value="1" <?php if($announcement->status == 1){ echo "selected"; }  ?>>Active</option>
                        <option value="0" <?php if($announcement->status == 0){ echo "selected"; }  ?>>Not Active</option>
                      
                  </select>
                                
               </div>
             
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Update Announcement</button>
              </div>
        </form>
      </div>
    </div>

  </div>
</div>

@endsection