<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="{{ url('/bootstrap2') }}">Bootstrap 2</a>
			<div class="nav-collapse collapse pull-right">
				<ul class="nav">
					<li class="{{ Active::pattern("bootstrap2") }}"><a href="{{ url('/bootstrap2') }}">Home</a></li>
					<li class="{{ Active::pattern("bootstrap2/ckeditor") }}"><a href="{{ url('/bootstrap2/ckeditor') }}">CKEditor</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>