@extends('cms.layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">Edit Resort</div>
        <div class="card-body">
            <form method="post" action="{{ route('resorts.update', $resort->id)  }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter here..." value="{{ $resort ->name }}" autocomplete="nope">
                            <br>
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" class="form-control" placeholder="Enter here..." value="{{ $resort ->address }}" autocomplete="nope">
                            <br>
                            @if ($errors->has('address'))
                                <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Phone No</label>
                            <input name="phone_no" type="text" class="form-control" placeholder="Enter here..." value="{{ $resort ->phone_no }}" autocomplete="nope">
                            <br>
                            @if ($errors->has('phone_no'))
                                <div class="alert alert-danger">{{ $errors->first('phone_no') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="text" class="form-control" placeholder="Enter here..." value="{{ $resort ->email }}" autocomplete="nope" >
                            <br>
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                       <!-- <div class="form-group">
                            <label>Mobile</label>
                            <input name="mobile" type="text" class="form-control" placeholder="Enter here..." value="{{ $resort ->mobile }}" autocomplete="nope">
                            <br>
                            @if ($errors->has('mobile'))
                                <div class="alert alert-danger">{{ $errors->first('mobile') }}</div>
                            @endif
                        </div>

                    <div class="form-group">
                        <label>Image</label>
                            <image-uploader current-img="{{ asset('storage/common_media/'.($resort->getImageRelation->url ?? '')) }}" accept="image/*" input-id="image" input-name="resort_image"
                             button-text="Add Image"></image-uploader>
                        <br>
                        @if ($errors->has('resort_image'))
                            <div class="alert alert-danger">{{ $errors->first('resort_image') }}</div>
                        @endif
                    </div>-->
                </div>
            </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-custom">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    //CKEDITOR.replace('content');
    setTimeout(function(){
        CKEDITOR.replace('content');
    },100);
</script>