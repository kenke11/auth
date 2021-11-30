<x-layouts.app>
    <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-32 w-auto rounded-xl" src="{{asset('img/fosaa.jpg')}}" alt="fosa">
            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                Sign up
            </h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="{{route('register.store')}}" method="POST">
                    @csrf

                    <div>
                        <x-form.form-label for="name" data="Name" />
                        <div class="mt-1">
                            <x-form.form-input id="name" name="name" type="text"  />
                        </div>
                        <x-form.form-input-error name="name"/>
                    </div>

                    <div>
                        <x-form.form-label for="email" data="Email address" />
                        <div class="mt-1">
                            <x-form.form-input id="email" name="email" type="email"  />
                        </div>
                        <x-form.form-input-error name="email"/>
                    </div>

                    <div>
                        <x-form.form-label for="password" data="Password" />
                        <div class="mt-1">
                            <x-form.form-input id="password" name="password" type="password"  />
                        </div>
                        <x-form.form-input-error name="password"/>
                    </div>

                    <div>
                        <x-form.form-label for="password_confirmation" data="Password Confirmation" />
                        <div class="mt-1">
                            <x-form.form-input id="password_confirmation" name="password_confirmation" type="password"  />
                        </div>
                        <x-form.form-input-error name="password_confirmation"/>
                    </div>

                    <div>
                        <x-form.form-button data="Sign up" />

                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">
                              Or continue with
                            </span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-2">
                        <div>
                            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Sign in with Facebook</span>
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>

                        <div>
                            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Sign in with Google</span>
                                <svg class="w-5 h-5 text-gray-600"
                                     viewBox="0 0 30 30"
                                >
                                    <path d="M 15.003906 3 C 8.3749062 3 3 8.373 3 15 C 3 21.627 8.3749062 27 15.003906 27 C 25.013906 27 27.269078 17.707 26.330078 13 L 25 13 L 22.732422 13 L 15 13 L 15 17 L 22.738281 17 C 21.848702 20.448251 18.725955 23 15 23 C 10.582 23 7 19.418 7 15 C 7 10.582 10.582 7 15 7 C 17.009 7 18.839141 7.74575 20.244141 8.96875 L 23.085938 6.1289062 C 20.951937 4.1849063 18.116906 3 15.003906 3 z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
