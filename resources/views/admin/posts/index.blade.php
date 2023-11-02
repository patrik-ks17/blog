<x-layout>
	<x-setting heading="Manage Posts">
		<!-- component -->
		<div class="m-5 overflow-hidden rounded-lg border border-gray-200 shadow-md">
			<table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
				<tbody class="divide-y divide-gray-100 border-t border-gray-100">
					@foreach ($posts as $post)
						<tr class="hover:bg-gray-50">
							<td class="whitespace-nowrap px-2 py-4">
								<div class="flex items-center">
									<div class="text-sm font-medium text-gray-900">
										<a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
									</div>
								</div>
							</td>
							<td class="whitespace-nowrap px-6 py-4">
								<div class="flex">
									<a href="/admin/posts/{{ $post->id }}/edit"
										class="text-blue-500 hover:text-blue-600">
										Edit
									</a>
								</div>
							</td>
							<td class="whitespace-nowrap px-6 py-4">
								<div class="flex">
									<form method="POST" action="/admin/posts/{{ $post->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button class="text-xs text-gray-500">Delete</button>
                                    </form>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</x-setting>
</x-layout>
