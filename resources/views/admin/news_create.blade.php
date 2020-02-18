@extends('admin.layout')
@section('additional_css')
  <link href="/css/quill.snow.css" rel="stylesheet">
@endsection
@section('content')


<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add News</h6>
      </div>
      <div class="card-body">
        <form method="POST" id="form-news" enctype="multipart/form-data" action="/admin/news/store">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <input type="hidden" name="content" id="content2" value="">
            <div class="form-group">
              <label for="event_name">Title</label>
              <input type="text" name="title" class="form-control" id="title" autocomplete="off" required>
                            
            </div>
           
            <div class="form-group">
              <!-- Create the editor container -->
               <div id="toolbar-container">
                <span class="ql-formats">
                  <select class="ql-font"></select>
                  <select class="ql-size"></select>
                </span>
                <span class="ql-formats">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                  <button class="ql-strike"></button>
                </span>
                <span class="ql-formats">
                  <select class="ql-color"></select>
                  <select class="ql-background"></select>
                </span>
                <span class="ql-formats">
                  <button class="ql-script" value="sub"></button>
                  <button class="ql-script" value="super"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-header" value="1"></button>
                  <button class="ql-header" value="2"></button>
                  <button class="ql-blockquote"></button>
                  <button class="ql-code-block"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-list" value="ordered"></button>
                  <button class="ql-list" value="bullet"></button>
                  <button class="ql-indent" value="-1"></button>
                  <button class="ql-indent" value="+1"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-direction" value="rtl"></button>
                  <select class="ql-align"></select>
                </span>
                <span class="ql-formats">
                  <button class="ql-link"></button>
                  <button class="ql-image"></button>
                  <button class="ql-video"></button>
                  <button class="ql-formula"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-clean"></button>
                </span>
              </div>
              <div id="editor" style="height: 400px;">
                
              </div>
                            
            </div>

            <div class="form-group">
                <label for="image">Cover Photo</label><br>
                <input type="file" name="cover_photo" id="cover_photo" accept="image/*" required>
                              
            </div>


              <div class="form-group">
                <button class="btn btn-primary btn-block" type="button" id="btn-news">Add News</button>
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

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    modules: {
      syntax: true,
      toolbar: '#toolbar-container'
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
  });

  $("#btn-news").on("click",function(e){
    e.preventDefault();
    var editor_content = quill.root.innerHTML;
    $("#content2").val(editor_content);
    $("#form-news").submit();
  });
</script>
@endsection
@endsection