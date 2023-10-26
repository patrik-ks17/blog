@props(['name'])

<x-form.field>
	<x-form.label name="{{ $name }}" />

	<input
		class="w-full rounded border border-gray-200 p-2"
		id="{{ $name }}"
		name="{{ $name }}"
		value="{{ old($name) }}"
		required
		{{ $attributes }}
	>

	<x-form.error name="{{ $name }}" />
</x-form.field>