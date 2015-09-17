@extends("bootstrap2.default")

@section("title", "CKeditor Sample")

@section("content")
<div class="row-fluid">
	<div class="span6">
		<form action="{{ url('/bootstrap2/ckeditor') }}" method="POST">
			{!! csrf_field() !!}
			<div class="control-group">
				<div class="controls">
					<textarea id="ckeditor" name="ckeditor"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary pull-right" onclick="submitCKEditor()">
						Submit
					</button>
				</div>
			</div>
		</form>
	</div>
	<div class="span6">
		<div id="ckeditorResult">
			@if (session('ckeditorContent'))
				{!! session('ckeditorContent') !!}
			@endif
		</div>
	</div>
</div>
@endsection

@section("script")
	<script src="{{ asset('js/vendor/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
		CKEDITOR.replace('ckeditor');
		$(document).ready(function() {

		});

		function submitCKEditor() {
			var data = CKEDITOR.instances.ckeditor.getData();
			$.post('{{ url('/bootstrap2/ckeditor') }}', { content: data }, function () {
				window.location.reload()
			});
		}
	</script>
@endsection