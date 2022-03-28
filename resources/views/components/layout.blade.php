
    <!doctype html>

<title>Laravel From Scratch Blog</title>
{{--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
{{--<script src="https://cdn.tailwindcss.com"></script>--}}

<link rel="preconnect" href="https://fonts.gstatic.com">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body style="npm font-family: Open Sans, sans-serif">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
            </a>
        </div>

        <div class="mt-8 md:mt-0">
            <a href="/" class="text-xs font-bold uppercase">Home Page</a>

            <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
        </div>
    </nav>

{{$content}}

<footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
    <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
    <h5 class="text-3xl">Stay in touch with the latest posts</h5>
    <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

    <div class="mt-10">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

            <form method="POST" action="#" class="lg:flex text-sm">
                <div class="lg:py-3 lg:px-5 flex items-center">
                    <label for="email" class="hidden lg:inline-block">
                        <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                    </label>

                    <input id="email" type="text" placeholder="Your email address"
                           class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                </div>

                <button type="submit"
                        class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                >
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</footer>

</section>
@if(session()->has('success'))

    <div class = "bg-blue-500 border bottom-0 fixed p-2 right-0 rounded-xl text-white fixed "
         x-data = "{show: true}"
         x-show="show"
         x-init = "setTimeout( ()=>show = false, 4000)"
    >
        <p>
            {{session('success')}}
        </p>
    </div>
@endif
{{--Bootstrap--}}
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
