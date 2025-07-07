<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-stone-800 dark:text-stone-200 leading-tight">
            {{ __('Technologies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-stone-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-stone-500 dark:text-stone-400">
                        <thead
                            class="text-xs text-stone-700 uppercase bg-stone-100 dark:bg-stone-600 dark:text-stone-400">
                        <tr>
                            
                            <th scope="col" class="px-6 py-3">
                                <span
                                    class="text-xs font-medium uppercase leading-4 tracking-wider text-stone-500 dark:text-white ">Nom</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    <span
                                        class="text-xs font-medium uppercase leading-4 tracking-wider text-stone-500 dark:text-white ">Description</span>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                <div class="flex items-center">
                                    <span
                                        class="text-xs font-medium uppercase leading-4 tracking-wider text-stone-500 dark:text-white ">Image</span>
                                </div>
                            </th>
                        </tr>
                        </thead>

                        <tbody class="divide-y divide-stone-200 divide-solid">
                        @foreach($technologies as $technology)
                            <tr class="border-b bg-stone-50 dark:bg-stone-800 dark:border-stone-700">
                                
                                <td class="px-6 py-4 text-sm leading-5 whitespace-nowrap">
                                    {{ $technology->name }}
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    {{ Str::words($technology->description, 20, '...') }}
                                </td>
                                <td class="px-6 py-4 text-sm leading-5 text-center">
                                    <img src="{{ asset($technology->image_url) }}" alt="Image de {{ $technology->name }}" class="w-20 h-20 object-cover rounded-lg">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="px-6 mt-2">{{ $technologies->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>