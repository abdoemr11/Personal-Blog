<x-layout>
    <x-slot name="content">
        <div class="bg-grey-lighter min-h-screen flex flex-col">
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Login</h1>
                    <form method="POST" action="/login">
                        @csrf
                        <input
                            type="email"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('title') is-invalid @enderror"
                            name="email"
                            value="{{request()->old("email")}}"
                            placeholder="Email"
                            required
                        />
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input
                            type="password"
                            class="block border border-grey-light w-full p-3 rounded mb-4 @error('title') is-invalid @enderror"
                            name="password"
                            placeholder="Password"
                            required
                        />
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input
                            type="submit"
                            value="Log in"
                            class="block border border-grey-light w-full p-3 rounded mb-4"
                        />
                    </form>
                </div>

                <div class="text-grey-dark mt-6">
                    Already have an account?
                    <a class="no-underline border-b border-blue text-blue" href="/login">
                        Log in
                    </a>.
                </div>
            </div>
        </div>
    </x-slot>

</x-layout>
