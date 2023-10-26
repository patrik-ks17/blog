@auth()
	<x-panel>
		<form method="POST" action="/posts/{{ $post->slug }}/comments">
			@csrf

			<header class="flex items-center">
				<img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="avatar" width="40" height="40"
					class="rounded-full">
				<h2 class="ml-3">Want to participate?</h2>
			</header>

			<div class="mt-10">
				<textarea name="body" id="" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Quick, think of something to say!"></textarea>

				@error('body')
					<span class="text-xs text-red-500">{{ $message }}</span>
				@enderror
			</div>

			<div class="mt-6 flex justify-end border-t border-gray-200 pt-6">
				<x-form.button>Post</x-form.button>
			</div>
		</form>
	</x-panel>
@else
	<p class="font-semibold">
		<a href="/register" class="italic hover:underline">Register</a> or <a href="/login" class="italic hover:underline">Log
			In</a> to leave a comment
	</p>
@endauth
