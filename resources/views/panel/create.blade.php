@extends('panel.layouts.index')
@section('css')
<style>
    .inputBtnSection{
        display:inline-block;
        vertical-align:top;
        font-size:0;
        font-family:verdana;
    }
    .disableInputField{
        display:inline-block;
        vertical-align:top;
        height: 27px;
        margin: 0;
        font-size:14px;
        padding:0 3px;
    }

    .fileUpload {
        position: relative;
        overflow: hidden;
        border:solid 1px gray;
        display:inline-block;
        vertical-align:top;
    }
    .uploadBtn{
        display:inline-block;
        vertical-align:top;
        background:rgba(0,0,0,0.5);
        font-size:14px;
        padding:0 10px;
        height:25px;
        line-height:22px;
        color:#fff;
    }

    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
</style>
<link rel="stylesheet" type="text/css" href="{{ url('tag-it/css/jquery.tagsinput.css') }}">
@stop
@section('content')
<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
           <h2>Admin Dashboard</h2>   
           <h5>Welcome Jhon Deo , Love to see you back. </h5>
       </div>
   </div>              
   <!-- /. ROW  -->
   <hr />
   <div class="row">
    <form action="{{ route('posted') }}" method="post" runat="server" enctype="multipart/form-data">
        {{ csrf_field() }}
      <div class="col-md-12">
        <div class="form-group">

            <title>judul</title>
            
            <input type="text" placeholder="Judul" class="form-control" name="judul">
            </div>
        </div>
         <div class="col-md-12">  
        <div class="form-group">
            <title>konten</title>
           
            <textarea class="ckeditor" name="editor"></textarea>                 
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
            <label class="fileUpload">
                <input id="uploadBtn" type="file" class="upload" name="file" accept="image/*" />
                <span class="uploadBtn">Browse picture</span>
            </label>
            <img id="blah" src="#" alt="your image" width="200px" height="200px" />

        </div>
        </div>

        <div class="form-group">
            <div class="col-md-12">

            <select name="kategori" class="form-control">
                @foreach($kategori as $data)
                    <option  value="{{ $data->id }}">{{ $data->nama }}</option>
                @endforeach
            </select>
            </div>
        </div>
        
            <div class="form-group">
            <div class="col-md-12">
               <input name="tags" id="tags" style="width: auto; min-height: 100px;" >
             </div>
        </div>


        <div class="form-group">
            <div class="col-md-12">
            <br>
            <br>
            <br>
                <button type="submit" class="btn btn-primary btn-block"> POST</button>
            </div>
        </div>
    </form>

</div>


</div>
<!-- /. PAGE INNER  -->
@stop
@section('js')
<script src="{{url('ck/ckeditor.js')}}"></script>
<script src="{{url('tag-it/js/jquery.tagsinput.js')}}"></script>
<script type="text/javascript">
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#uploadBtn").change(function(){
        readURL(this);
    });

</script>
<script type="text/javascript">
  $('#tags').tagsInput();
</script>

@stop