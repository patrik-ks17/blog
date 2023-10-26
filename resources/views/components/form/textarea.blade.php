@props(['name'])

<x-form.field>
	<x-form.label name="{{ $name }}" />

	<textarea class="w-full border border-gray-200 p-2 rounded" name="{{ $name }}" id="{{ $name }}" required>{{ old($name) }}</textarea>

	<x-form.error name="{{ $name }}" />
</x-form.field>
