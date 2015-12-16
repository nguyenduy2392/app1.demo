<div class="img-thumb">
	<div class="img-background" style="background-image:url({{ asset(config('path.image') . ($img !='' ? $img : 'picture-add-psd-png.jpg')) }})"></div>
	<input name="{{ $picture }}" class="picture-upload" type="hidden" value="{{ $img }}">
</div>