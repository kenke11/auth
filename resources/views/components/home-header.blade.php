<div class="flex top-0 right-0 px-6 py-4 justify-between items-center md:px-28 bg-gray-50">
    <div class="logo">
        <a href="/">
            <img
                src="{{asset('img/fosaa.jpg')}}"
                alt="logo"
                class="h-14 rounded-xl"
            >
        </a>
    </div>

    <div>
        @auth
            <div
                x-data="{isOpen: false}"
                class="relative"
            >
                <button
                    @click="isOpen = !isOpen"
                    class="h-14 w-14 rounded-full"
                >
                    <svg class="h-14 w-14 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                    </svg>
                </button>

                <ul
                    x-show.transition.origin.top.duration.500ms="isOpen"
                    @keydown.escape.window="isOpen = false"
                    class="absolute bg-gray-200 text-gray-800 text-md rounded w-32 right-1 border border-gray-300"
                >
                    <li class="hover:bg-gray-300 px-3 py-1 rounded text-center"><a href="{{ route('profile') }}">Profile</a></li>

                    <li class="hover:bg-red-100 px-3 py-1 mt-3 border-t border-red-50 rounded text-center"><a href="{{ route('logout') }}">Log out</a></li>
                </ul>
            </div>
        @else
            <a href="{{ route('login.index') }}" class="text-sm bg-indigo-600 hover:bg-indigo-700 px-5 py-3 text-white rounded-xl">Log in</a>

            <a href="{{ route('register-show') }}" class="ml-4 text-sm bg-indigo-600 hover:bg-indigo-700 px-5 py-3 text-white rounded-xl">Register</a>
        @endauth
    </div>

</div>
