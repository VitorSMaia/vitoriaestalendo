@props([
    'type' => 'text',
    'label',
    'error' => null
])

<div>
    <label class="block">
        <input  {{ $attributes }} type="{{ $type }}" 
        class="
            min-w-full
            text-sm
            placeholder-gray-400
            bg-gray-50
            focus:outline-none
            border
            border-gray-300
            focus:border-[rgb(16,30,60)]
            p-2
            rounded-full
            
            focus:ring-2
            focus:ring-[rgb(16,30,60)]
            focus:ring-opacity-30
            transition duration-300 ease-in-out
            "
         placeholder="{{ $label }}">
        @error($error)
            <span>{{ $message }}</span>
        @enderror
    </label>
</div>