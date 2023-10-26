<x-layout>
	<section class="px-6 py-8">
		<main class="mx-auto mt-10 max-w-lg">
			<x-panel>
				<h1 class="text-center text-xl font-bold">Login!</h1>

				<form
					class="mt-10"
					method="POST"
					action="/login"
				>
					@csrf

					<x-form.input
						name="email"
						type="email"
                        autocomplete="username"
					/>

					<x-form.input
						name="password"
						type="password"
                        autocomplete="new-password"
					/>

					<x-form.button>Log In</x-form.button>

					{{-- @if ($errors->any())
					<ul>
						@foreach ($errors->all() as $error)
							<li class="text-xs text-red-600">{{ $error }}</li>
						@endforeach
					</ul>
				@endif --}}
				</form>
			</x-panel>
		</main>

	</section>

</x-layout>
