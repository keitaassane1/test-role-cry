<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ "Bonjour ". auth()->user()->name }}





                    <section class="py-20">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                          <div
                            class="rounded-2xl py-10 px-10 xl:py-16 xl:px-20 bg-gray-50 flex items-center justify-between flex-col gap-16 lg:flex-row">
   
                            <div class="w-full lg:w-4/5">
                              <div
                                class="flex flex-col flex-1 gap-10 lg:gap-0 lg:flex-row lg:justify-between"
                              >
                                @admin
                                <div class="block">
                                  <div
                                    class="font-manrope font-bold text-4xl text-indigo-600 mb-3 text-center lg:text-left"
                                  >
                                    {{ \App\Models\User::count() }}
                                  </div>
                                  <span class="text-gray-900 text-center block lg:text-left"
                                    >
                                    <a href="{{ route('users.index') }}">Users</a>
                                  </span>
                                </div>
                                @endadmin

                                <div class="block">
                                  <div
                                    class="font-manrope font-bold text-4xl text-indigo-600 mb-3 text-center lg:text-left"
                                  >
                                    975+
                                  </div>
                                  <span class="text-gray-900 text-center block lg:text-left"
                                    >Active Clients
                                  </span>
                                </div>
                                <div class="block">
                                  <div
                                    class="font-manrope font-bold text-4xl text-indigo-600 mb-3 text-center lg:text-left"
                                  >
                                    724+
                                  </div>
                                  <span class="text-gray-900 text-center block lg:text-left"
                                    >Projects Delivered</span
                                  >
                                </div>
                                <div class="block">
                                  <div
                                    class="font-manrope font-bold text-4xl text-indigo-600 mb-3 text-center lg:text-left"
                                  >
                                    89+
                                  </div>
                                  <span class="text-gray-900 text-center block lg:text-left"
                                    >Orders in Queue</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </section>
                                                            
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
