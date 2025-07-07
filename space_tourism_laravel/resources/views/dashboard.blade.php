<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bienvenue sur Space Tourism') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">{{ __("Vous êtes connecté !") }}</p>

                    <div class="flex gap-4">
                        <a href="{{ route('destination') }}" class="btn-std">Destinations</a>
                        <a href="{{ route('crew') }}" class="btn-std">Crew</a>
                        <a href="{{ route('technology') }}" class="btn-std">Technology</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
