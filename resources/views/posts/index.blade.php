<x-layout>

	@include('posts._header')

	<main class="mx-auto mt-6 max-w-6xl space-y-6 lg:mt-20">
		@if ($posts->count())
			<x-posts-grid :posts="$posts" />
            {{ $posts->links() }}
		@else
			<p class="text-center">No posts yet. Please check back later!</p>
		@endif
	</main>

</x-layout>

{{-- <x-layout>
	@foreach ($posts as $post)
    <article  class={{ $loop->even ? "mb-6" : "" }}>
			<h1>
				<a href="posts/{{ $post->slug }}">
					{{ $post->title }}
				</a>
			</h1>

            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

			<div>
				{!! $post->excerpt !!}
			</div>
		</article>
	@endforeach
</x-layout> --}}

{{-- @extends('layout')

@section('banner')
	<h1>My Blog</h1>
@endsection

@section('content')
	@foreach ($posts as $post)
		<article>
			<h1>
				<a href="posts/{{ $post->slug }}">
					{{ $post->title }}
				</a>
			</h1>

			<div>
				{{ $post->excerpt }}
			</div>
		</article>
	@endforeach
@endsection  --}}
