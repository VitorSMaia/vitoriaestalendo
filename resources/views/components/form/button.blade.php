@props([
    'label',
])

<div>
        <button type="submit" 
        class="min-w-full
        text-2xl
        font-medium
        text-[rgb(16,30,60)]
        placeholder-gray-400
        bg-gray-50
        hover:outline-none
        border
        border-gray-300
        hover:border-[rgb(16,30,60)]
        p-2
        rounded-xl
        
        hover:ring-2
        hover:ring-[rgb(16,30,60)]
        hover:ring-opacity-30
        transition duration-300 ease-in-out"
        {{ $attributes }} >
        {{ $label }}
    </button>
</div>