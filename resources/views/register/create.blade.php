<x-layout>
<x-slot name="content">
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Sign up</h1>
        <form method="POST" action="/register">
            @csrf
            <input
                type="text"
                class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') is-invalid @enderror"
                name="name"
                value="{{request()->old("name")}}"
                placeholder="Full Name"
                required
            />
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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
                value="Create Account"
                class="block border border-grey-light w-full p-3 rounded mb-4"

            />
        </form>

                <div class="text-center text-sm text-grey-dark mt-4">
                    By signing up, you agree to the
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Terms of Service
                    </a> and
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Privacy Policy
                    </a>
                </div>
            </div>

            <div class="text-grey-dark mt-6">
                Already have an account?
                <a class="no-underline border-b border-blue text-blue" href="../login/">
                    Log in
                </a>.
            </div>
        </div>
    </div>
</x-slot>

</x-layout>
