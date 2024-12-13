<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">




<div class="relative overflow-x-auto">

    @if(session('message'))
       <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" user="alert">
            <span class="font-medium"> {{ session('message') }}
        </div>
    @endif


    @admin

    <!-- Ajouter un role -->
    <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
      Ajouter
    </button>

    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full p-4">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Formulaire Utilisateur
                    </h3>
                    <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 space-y-4 md:p-5">
                    <form action="{{ route('users.ajouter') }}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus  />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('E-mail')" />
                            <x-text-input id="email" class="block w-full mt-1" type="text" name="email" :value="old('email')" required autofocus  />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block w-full mt-1" type="password" name="password" :value="old('password')" required autofocus  />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="role_id" :value="__('Role')" />
                            <select class="block w-full mt-1" id="role_id"  name="role_id" required autofocus >
                                @foreach (\App\Models\Role::all()->except(3) as $r)
                                        <option value="{{  $r->id }}" > {{  $r->name }}</option>
                                 @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('role_id')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="direction_id" :value="__('Direction')" />
                            <select class="block w-full mt-1" id="direction_id"  name="direction_id" required autofocus >
                                <option value=""> Choisir Direction </option>
                                @foreach (\App\Models\Direction::all() as $d)
                                        <option value="{{  $d->id }}" > {{  $d->nom }}</option>
                                 @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('direction_id')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="statut" :value="__('STATUT')" />
                            <select class="block w-full mt-1" id="statut"  name="statut" required autofocus >
                                    <option value="0" > Desactiver </option>
                                    <option value="1" > Activer </option>
                            </select>
                            <x-input-error :messages="$errors->get('statut')" class="mt-2" />
                        </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 border-t border-gray-200 rounded-b md:p-5 dark:border-gray-600">
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
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                  Name
                </th>

                <th scope="col" class="px-6 py-3">
                  E-mail
                </th>

                <th scope="col" class="px-6 py-3">
                  Role
                </th>

                <th scope="col" class="px-6 py-3">
                  Direction
                </th>

                <th scope="col" class="px-6 py-3">
                  Statut
                </th>

                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($users)

                @foreach ($users as $u )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $u->name}}
                        </th>

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $u->email}}
                        </th>

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $u->role->role }}
                        </th>

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $u->direction->nom}}
                        </th>

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            @if ($u->statut == 0)
                                désactiver
                            @else
                                activer
                            @endif

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
