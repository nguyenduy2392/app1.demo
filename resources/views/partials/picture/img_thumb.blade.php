<div class="img-thumb">
	<div class="img-background" style="background-image:url({{ asset(config('path.image') . ($img !='' ? $img : 'no_picture.gif')) }})"></div>
	<img class="picture-upload" src="{{ asset(config('path.image') . ($img !='' ? $img : 'no_picture.gif')) }}">
</div>