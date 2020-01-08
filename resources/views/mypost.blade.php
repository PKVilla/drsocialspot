@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="col-lg-2">
				<img class="img-fluid rounded-circle w-50" src="/images/avatar.png" alt="">
				<h1>{{ '@'.Auth::user()->name }}</h1>
			</div>
		</div>
		@forelse($posts as $post)
		<p>{{ $post->post }}</p>
		@empty
		<nopost></nopost>
		@endforelse

	</div>
</div>
@endsection