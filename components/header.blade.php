<header class="antialiased">
    <nav class="bg-white border-b border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
                
            </div>
            <div class="flex items-center lg:order-2">
                <p class="text-custom-dark-blue text-sm">{{ Auth::user()->name }}</p>
                <button type="button" class="flex mx-3 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-6 h-6" src="{{ asset('icons/user.svg') }}" alt="Profile photo">
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="dropdown">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-gray-900">{{ Auth::user()->name }}</span>
                        <span class="block text-sm text-gray-500 truncate">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-1 text-gray-500" aria-labelledby="dropdown">
                        <li>
                            <a href="{{ route('profile.edit') }}" class="block py-2 px-4 text-sm hover:bg-gray-100">My profile</a>
                        </li>
                    </ul>
                    <ul class="py-1 text-gray-500" aria-labelledby="dropdown">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
  </header>