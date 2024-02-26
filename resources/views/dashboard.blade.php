<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-wrap text-gray-900 dark:text-gray-100">
                    <!-- Hamburger Menu Button -->
                    <div class="w-full px-4 lg:hidden py-3">
                        <button id="toggleSidebar" onclick="toggleSidebar()"
                            class="block text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Sidebar Menu -->
                    <div id="sidebar" class="w-full max-w-24 px-4 mb-4 lg:mb-0 hidden lg:block py-4 bg-slate-700">
                        <a href="{{ route('about.index') }}">
                            <h1 class="cursor-pointer mb-2">About</h1>
                        </a>
                        <a href="{{ route('service.index') }}">
                            <h1 class="cursor-pointer mb-2">Services</h1>
                        </a>
                        <a href="{{ route('team.index') }}">
                            <h1 class="cursor-pointer mb-2">Team</h1>
                        </a>
                        <a href="{{ route('protfolio.index') }}">
                            <h1 class="cursor-pointer mb-2">Portfolio</h1>
                        </a>
                        <a href="{{ route('contact.index') }}">
                            <h1 class="cursor-pointer">Contact</h1>
                        </a>
                        <a href="{{ route('message.index') }}">
                            <h1 class="cursor-pointer">Message</h1>
                        </a>
                    </div>
                    <!-- Content -->
                    <div id="content" class="w-full max-w-96 px-4 py-4">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden');
        }
    </script>


</x-app-layout>
