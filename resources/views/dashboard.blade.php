<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buy Products') }}
        </h2>
    </x-slot>

    <div class="py-8">
       <div class="w-full overflow-hidden">
            <div class="grid grid-cols-3 gap-4">
			  <div>1</div>
			  <!-- ... -->
			  <div>9</div>
			</div>
        </div>
    </div>
</x-app-layout>
