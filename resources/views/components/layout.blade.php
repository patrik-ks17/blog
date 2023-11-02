<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
	rel="stylesheet">
<link href="https://fonts.gstatic.com"
	rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
	rel="stylesheet">
<script defer
	src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
	html {
		scroll-behavior: smooth;
	}
</style>

<body style="font-family: Open Sans, sans-serif">
	<section class="px-6 py-8">
		<nav class="md:flex md:items-center md:justify-between">
			<div>
				<a href="/">
					<img src="/images/logo.svg"
						alt="Laracasts Logo"
						width="165"
						height="16">
				</a>
			</div>

			<div class="mt-8 flex items-center md:mt-0">
				@guest
					<a class="text-xs font-bold uppercase"
						href="/register">Register</a>
					<a class="ml-3 text-xs font-bold uppercase"
						href="/login">Log In</a>
				@else
					<x-dropdown>
						<x-slot name="trigger">
							<button class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}!</button>
						</x-slot>
						@admin
							<x-dropdown-item href="/admin/posts"
								:active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
							<x-dropdown-item href="/admin/posts/create"
								:active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
						@endadmin

						<x-dropdown-item href="#"
							x-data="{}"
							@click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

						<form class="hidden"
							id="logout-form"
							method="POST"
							action="/logout">
							@csrf
						</form>
					</x-dropdown>

				@endguest

				<a class="ml-3 rounded-full bg-blue-500 px-5 py-3 text-xs font-semibold uppercase text-white"
					href="#newsletter">
					Subscribe for Updates
				</a>
			</div>
		</nav>

		{{ $slot }}

		<footer class="mt-16 rounded-xl border border-black border-opacity-5 bg-gray-100 px-10 py-16 text-center"
			id="newsletter">
			<img class="mx-auto -mb-6"
				src="/images/lary-newsletter-icon.svg"
				alt=""
				style="width: 145px;">
			<h5 class="text-3xl">Stay in touch with the latest posts</h5>
			<p class="mt-3 text-sm">Promise to keep the inbox clean. No bugs.</p>

			<div class="mt-10">
				<div class="relative mx-auto inline-block rounded-full lg:bg-gray-200">

					<form class="text-sm lg:flex"
						method="POST"
						action="#">
						<div class="flex items-center lg:px-5 lg:py-3">
							<label class="hidden lg:inline-block"
								for="email">
								<img src="/images/mailbox-icon.svg"
									alt="mailbox letter">
							</label>

							<input class="py-2 pl-4 focus-within:outline-none lg:bg-transparent lg:py-0"
								id="email"
								type="text"
								placeholder="Your email address">
						</div>

						<button
							class="mt-4 rounded-full bg-blue-500 px-8 py-3 text-xs font-semibold uppercase text-white transition-colors duration-300 hover:bg-blue-600 lg:ml-3 lg:mt-0"
							type="submit">
							Subscribe
						</button>
					</form>
				</div>
			</div>
		</footer>
	</section>

	<x-flash />
</body>
