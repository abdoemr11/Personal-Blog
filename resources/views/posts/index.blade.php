<x-layout>

    <x-slot name="content">
        @include("posts._header")
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-featured-post-card :post="$posts->first()" />

            <div class="lg:grid lg:grid-cols-2">
                @foreach($posts->slice(1)->take(2) as $post)
                    <x-normal-post-card :post="$post"/>
                @endforeach
            </div>
            <div class="lg:grid lg:grid-cols-3">
                @foreach($posts->slice(3) as $post)
                    <x-normal-post-card :post="$post"/>
                @endforeach
            </div>

        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
            {{$posts->links()}}

        </main>

{{--            <article>--}}
{{--                <h1> <a href =  {{"/posts/".$post->slug}}>{{$post->title}}</a></h1>--}}
{{--                <p>by <a href="author/{{$post->author}}">{{$post->author}}</a></p>--}}

{{--                <div><a href="categories/{{$post->category->slug}}">{{$post->category->name}}</a></div>--}}
{{--                <div> {{$post -> excerpt}}</div>--}}
{{--            </article>--}}

    </x-slot>

</x-layout>
