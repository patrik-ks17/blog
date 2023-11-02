@props(['name'])

<x-form.field>
	<x-form.label name="{{ $name }}" />

	<textarea class="w-full rounded border border-gray-200 p-2"
	 id="{{ $name }}"
	 name="{{ $name }}"
	 required>{{ $slot ?? old($name) }}</textarea>

	<x-form.error name="{{ $name }}" />
</x-form.field>
