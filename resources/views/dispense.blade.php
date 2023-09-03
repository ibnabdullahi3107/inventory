<x-app-layout>
    {{-- <x-sidebar></x-sidebar> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12" style="margin-top: 100px;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <form class="row g-3">
                        <div class="col-auto">
                          <label for="staticEmail2" class="visually-hidden">Email</label>
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                        </div>
                        <div class="col-auto">
                          <label for="inputPassword2" class="visually-hidden">Password</label>
                          <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                        </div>
                        <div class="col-auto">
                          <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
