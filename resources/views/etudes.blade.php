<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Etudes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="relative overflow-x-auto">

                        @if (session('message'))
                            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                                role="alert">
                                <span class="font-medium"> {{ session('message') }}
                            </div>
                        @endif


                        @admin
                            <!-- Ajouter une Direction -->
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button">
                                Ajouter
                            </button>

                            <!-- Main modal -->
                            <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full p-4">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Formulaire Direction
                                            </h3>
                                            <button type="button"
                                                class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                                                data-modal-hide="static-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 space-y-4 md:p-5">
                                            <form action="{{ route('etudes.ajouter') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div>
                                                    <x-input-label for="nom" :value="__('Nom')" />
                                                    <x-text-input id="nom" class="block w-full mt-1" type="text"
                                                        name="nom" :value="old('nom')" required autofocus />
                                                    <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                                                </div>
                                                <div>
                                                    <x-input-label for="responsable" :value="__('Responsable')" />
                                                    <x-text-input id="responsable" class="block w-full mt-1" type="text"
                                                        name="responsable" :value="old('responsable')" required autofocus />
                                                    <x-input-error :messages="$errors->get('responsable')" class="mt-2" />
                                                </div>
                                        </div>
                                        <!-- Modal footer -->

                                        <div
                                            class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
                                            <x-primary-button class="ms-3">
                                                {{ __('Sauvegarder') }}
                                            </x-primary-button>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endadmin


                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nom
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        Responsable
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($etudes)

                                    @foreach ($etudes as $d)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $d->nom }}
                                            </th>

                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $d->responsable }}
                                            </th>
                                            <td class="px-6 py-4">
                                                Edit
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
