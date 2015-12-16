@extends('app')

@section('content')
<div id="upload-list" class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            {!! Form::open(array('action' => 'PicturesController@create')) !!}
                <div class="list-upload col-xs-12" data-masonry-options='{ "itemSelector": ".grid-item" }' >
                    <div class="parent-item col-xs-6 col-sm-4 col-lg-3" data-index="0">
                        <div class="item">
                            <div class="mf-upload" data-type="create-new" mf-upload="upload-picture">
                                @include('partials.picture.img_thumb', array('img' => 'picture-add-psd-png.jpg', 'picture' => 'picture[0][image]'))
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-upload col-xs-12">
                    <button type="button" class="btn btn-danger btn-save-upload">Upload</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    var noImage = "{{ asset(config('path.image') . 'picture-add-psd-png.jpg') }}";
</script>
@endsection