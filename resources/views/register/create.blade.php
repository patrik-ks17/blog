<x-layout>
	<section class="px-6 py-8">
		<main class="mx-auto mt-10 max-w-lg rounded-xl border border-gray-400 bg-gray-200 p-6">
			<h1 class="text-center text-xl font-bold">Register!</h1>

			<form
				class="mt-10"
				method="POST"
				action="/register"
			>
				@csrf

				<x-form.input name="name" />

				<x-form.input name="username" />

				<x-form.input
					name="email"
					type="email"
				/>

				<x-form.input
					name="password"
					type="password"
				/>

				<x-form.button>Submit</x-form.button>

				{{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-600 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}
			</form>
		</main>

	</section>

</x-layout>
