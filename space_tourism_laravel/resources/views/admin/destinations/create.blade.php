<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-stone-800 dark:text-stone-200 leading-tight">
            {{ __("Creation d'une nouvelle destination") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('admin.destinations.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="p-6 text-stone-900 dark:text-stone-100">
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                          :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Description -->
                        <div class="block mt-4">
                            <x-input-label for="description" value="Description" />
                            <textarea name="description" id="description"
                                      class="block mt-1 w-full border-stone-300 dark:border-stone-700 dark:bg-stone-900 dark:text-stone-300 focus:border-orange-500 dark:focus:border-orange-600 focus:ring-orange-500 dark:focus:ring-orange-600 rounded-md shadow-sm"
                                      rows="4">{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Distance -->
                        <div class="block mt-4">
                            <x-input-label for="distance" value="Distance (en km)" />
                            <x-text-input id="distance" class="block mt-1 w-full" type="number" name="distance"
                                          :value="old('distance')" required />
                            <x-input-error :messages="$errors->get('distance')" class="mt-2" />
                        </div>

                        <!-- Travel Time -->
                        <div class="block mt-4">
                            <x-input-label for="travel_time" value="Travel Time (en jours)" />
                            <x-text-input id="travel_time" class="block mt-1 w-full" type="number" name="travel_time"
                                          :value="old('travel_time')" required />
                            <x-input-error :messages="$errors->get('travel_time')" class="mt-2" />
                        </div>

                        <!-- Image URL -->
                        <div class="block mt-4">
                            <x-input-label for="image_url" value="Image" />
                            <x-text-input id="image_url" class="block mt-1 w-full" type="file" name="image_url" />
                            <x-input-error :messages="$errors->get('image_url')" class="mt-2" />
                        </div>

                        <!-- Submit -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                Create
                            </x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
