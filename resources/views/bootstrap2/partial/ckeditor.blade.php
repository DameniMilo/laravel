@extends("bootstrap2.default")

@section("title", "CKeditor Sample")

@section("content")
<div class="row-fluid">
	<div class="span12">
		<div class="alert alert-info">
			<h3>TEST</h3>
			<p>BLABLABLABLA</p>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<textarea id="ckeditor" name="ckeditor">BLABLABLA</textarea>
	</div>
</div>
@endsection

@section("script")
	<script src="{{ asset('js/vendor/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
		CKEDITOR.replace('ckeditor');
		$(document).ready(function() {

		});
	</script>
@endsection