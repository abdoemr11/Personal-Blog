<div class="col-sm dropdown">
{{--    @dd($categories->firstWhere('slug', request('category')))--}}
{{--    @dd($current_category)--}}
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ request()->routeIs('home') ? 'Categories' : ucwords($current_category->name)}}
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach($categories as $cat)
            <a class="dropdown-item {{request()->is('*' . $cat->slug) ? 'active': ''}}"
               {{--                                    <a class="dropdown-item"--}}
               href="?category={{$cat->slug ."&". http_build_query(request()->except('category'))}}">
                {{$cat->name}}
            </a>
        @endforeach
    </div>
</div>
