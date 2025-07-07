<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            {{ __('Modifier une technology') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('admin.technologies.update', $technology->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Nom -->
                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Nom')" />
                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                      :value="old('name', $technology->name)" required />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Description')" />
                        <textarea id="description" name="description" rows="4"
                                  class="mt-1 block w-full dark:bg-gray-800 dark:text-white border-gray-300 rounded-md shadow-sm">
                            {{ old('description', $technology->description) }}
                        </textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <!-- Image -->
                    <div class="mt-4">
                        <x-input-label for="image_url" :value="__('URL de l\'image')" />
                        <x-text-input id="image_url" name="image_url" type="text" class="mt-1 block w-full"
                                      :value="old('image_url', asset($technology->image_url))" />
                        <x-input-error :messages="$errors->get('image_url')" class="mt-2" />
                    </div>

                    <div class="mt-6 flex justify-end">
                        <x-primary-button>
                            {{ __('Enregistrer les modifications') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>