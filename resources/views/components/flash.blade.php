@if (session()->has('success'))
	<div x-data="{ show: true }" x-init="setTimeOut(() => show = false, 4000)" x-show="show"
		class="fixed bottom-3 right-3 rounded bg-blue-500 px-4 py-2 text-white">
		<p>{{ session('success') }}</p>
	</div>
@endif
