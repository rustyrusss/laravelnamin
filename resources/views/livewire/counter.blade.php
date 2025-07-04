<div class="flex flex-col items-center justify-center h-screen space-y-6">
    <!-- Display Count with Larger Text -->
    <h1 class="text-6xl font-bold">{{ $count }}</h1> 

    <div class="space-x-6">
        <button wire:click="increment" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-3xl px-10 py-5 text-center">
            +
        </button>

    
        <button wire:click="decrement" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-3xl px-10 py-5 text-center">
            -
        </button>
    </div>
</div>
