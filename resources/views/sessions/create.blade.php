<x-layout>
	<section class="px-6 py-8">
		<main class="mx-auto mt-10 max-w-lg rounded-xl border border-gray-400 bg-gray-200 p-6">
			<h1 class="text-center text-xl font-bold">Login!</h1>

			<form method="POST" action="/login" class="mt-10">
				@csrf

				<div class="mb-6">
					<label class="mb-2 block text-xs font-bold uppercase text-gray-700" for="email">
						Email
					</label>

					<input class="w-full border border-gray-400 p-2" type="email" name="email" id="email"
						value="{{ old('email') }}" required>
					@error('email')
						<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-6">
					<label class="mb-2 block text-xs font-bold uppercase text-gray-700" for="password">
						Password
					</label>

					<input class="w-full border border-gray-400 p-2" type="password" name="password" id="password" required>
					@error('password')
						<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
					@enderror
				</div>

				<div class="mb-6">
					<button type="submit" class="rounded bg-blue-400 px-4 py-2 text-white hover:bg-blue-500">
						Log In
					</button>
				</div>

                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-600 text-xs">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
			</form>
		</main>

	</section>

</x-layout>
