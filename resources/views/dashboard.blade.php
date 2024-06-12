<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <main class="flex flex-col md:flex-row sm:justify-around items-center pt-4 sm:pt-0 bg-gray-100">

        <section class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('See your Profil') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Here you can see all information of your Profil') }}
                </p>
            </header>
            <button class="inline-flex items-center my-4 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                <a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
            </button>
        </section>

        <section class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <header>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Log out') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    {{ __('here you can close the session') }}
                </p>
            </header>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button 
                    onclick="event.preventDefault();
                        this.closest('form').submit();"
                    href="{{ route('logout') }}" 
                    class="inline-flex items-center my-4 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    {{ __('Log Out') }}
                </button>
            </form>
            
        </section>
    </main>
</x-app-layout>
