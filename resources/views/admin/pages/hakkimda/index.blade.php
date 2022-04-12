@extends('admin.index')
@section('content')
<div class="card">
  <div class="card-body">
      <div class="card-title">Hakkımda</div>
  <hr>
      <form action="{{route('about.update')}}" method="POST" enctype="multipart/form-data">
          @csrf  
          <div class="row">
              <div class="col-12 col-md-8">
                  <div class="form-group">
                      <label for="input-1">İçerik</label>
                      <textarea type="text" class="form-control" name="content" cols="30" rows="10" placeholder="Hakkımızda içeriği giriniz...">{{$about->content ?? ""}}</textarea>
                  </div>
              </div>
              <div class="col-12 col-md-4">
                  {{-- @if (isset($hakkimizda->img))
                  <img src="{{asset($hakkimizda->img)}}" alt="..." class="img-thumbnail">
                  @else
                  <h5>Resim Eklenmemiş</h5>
                  @endif  --}}
                 <div class="form-group">
                  <label for="input-1">Resim</label>
                  <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input type='file' name="img" id="imageUpload" accept=".png, .jpg, .jpeg"/>
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                        <div id="imagePreview" style="background-image: url({{ asset($about->img) }});"></div>  {{--http://i.pravatar.cc/500?img=7--}}
                    </div>
                  </div>
                 </div> 
                  

              </div>
          </div>
         
          
          <div class="form-group">
              <button type="submit" class="btn btn-light px-5">Ekle</button>
          </div>
      </form>
  </div>
</div> 
@endsection

