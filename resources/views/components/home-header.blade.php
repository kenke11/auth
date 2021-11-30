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
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 bg-indigo-700">Home</a>
        @else
            <a href="{{ route('login') }}" class="text-sm bg-indigo-600 hover:bg-indigo-700 px-5 py-3 text-white rounded-xl">Log in</a>

            <a href="{{ route('register-show') }}" class="ml-4 text-sm bg-indigo-600 hover:bg-indigo-700 px-5 py-3 text-white rounded-xl">Register</a>
        @endauth
    </div>

</div>
