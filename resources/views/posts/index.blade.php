<x-app-layout>
    <x-slot name="header">
        <!-- modal div -->
        <div class="mt-6" x-data="{ open: false }">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Posts') }}
                <!-- Button (blue), duh! -->
                <button class="px-4 py-2 text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline float-right" @click="open = true">Create Post</button>
            </h2>
            @livewire('post-create')
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           @livewire('post-lists')
        </div>
    </div>
</x-app-layout>
