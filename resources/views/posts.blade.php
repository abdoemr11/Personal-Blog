<x-layout>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article>

                <h1> <a href =  {{"/posts/".$post->slug}}>{{$post->title}}</a></h1>
{{--                @dd ($post -> excerpt)--}}
                <div> {{$post -> excerpt}}</div>
            </article>
        @endforeach;
    </x-slot>

</x-layout>
