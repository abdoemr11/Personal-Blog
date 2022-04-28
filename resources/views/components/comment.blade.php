@props(['comment'])
<div class="lg:flex flex-wrap mt-4 border border-gray-800 sm:flex-row flex-col  rounded-xl bg-gray-100 p-4 text-center sm:text-left sm:ml-0">
{{--                                author name and avatar--}}
    <img src="https://i.pravatar.cc/90" class=" mx:auto md:mx-0 fa" />
    <h4 class="ml-1">{{ucfirst($comment->author->name)}}</h4>
{{--                                comment text--}}
    <p class="w-full mt-1 "> {{$comment->comment_body}}</p>
{{--                                comment vote--}}
{{--    @auth--}}
        <section class=" ml-auto" x-data="{count: {{$comment->voter()->where('upvoted', 1)->count()}}}">
{{--            <form action="#"></form>--}}
            <x-vote-button type="1" :comment_id="$comment->id"/>
            <span x-text="count"></span>
            <x-vote-button type="0" :comment_id="$comment->id"/>

        </section>
{{--    @endauth--}}
</div>
