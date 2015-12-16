@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="mf-upload" mf-upload="upload-picture">
				@include('partials.picture.img_thumb', array('img' => 'no_picture.gif'))
			</div>
		</div>
	</div>
</div>
@endsection