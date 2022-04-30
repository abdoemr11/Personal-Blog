# Laravel from scratch laracast
This is my study notes for the course [larvel from scratch](https://laracasts.com/series/laravel-8-from-scratch).

My main strategy is to watch a whole section and write down questions of the points that I should have master after learning this section, then try to implement it on my own with the help of documentation and [Laravel up and running](https://laravelupandrunning.com/)

## Study notes

- Basic Routing
    
    create post view it is empty
    
    in return of the view we get the file content of one of the article then send it as a parameter to the post view
    
    he unforunately don’t name the variable well and make the differentiation between them at first was hard
    
- Dynamic routing
    
    how we could route to dynamic pages at the current moment the pages just reside in the resource section later on there will be retrived from the database 
    
    we will use Wild card to achive dynamic routing where we will pass one of the url parameter to the view 
    
    look at this 
    
    ```php
    Route::view(”posts/{post}”, function ($slug))
    ```
    
    compate it with the following
    
    ```php
    Route::view(”posts/post”, function ($slug))
    ```
    
- what if they don’t found the article that was passed to the URI
    
    we can do a lot of things
    
    - redirect to the home page
        
        ```php
        return redirect(”/”)
        ```
        
    - use dd or ddd
    - abort(’404’)
- Wild card constraints
    
    it is just a filter with regular expression without it all URI will route to the wild carded view creating internal laravel error instead of 404 error
    
- 11- Real all post dynamicalyy
    
    use File facade 
    
    move all item related to the post to its own class model
    
    using map_array 
    
    <?= ?> <?php ?>
    
- meta data and collection
    
    using meta data yaml front matter parser and its component when creating the user class
    
    use collect()
    
    change Post::find to work with metadata
    
- caching and sorting
    
    service provider they imporve caching and decouble the logic from the model
    
- Blade
    
    From what I think of blade it is template system what does that mean ?
    
    a way to compine html and css ?
    
    a directivites to enable embed php easily within html 
    
    {{}} @foreach | if endif unless endunless
    
    {!!!!} for displaying html ! mean warining you  should know what r u doing
    
    laravel compile blade to include many useful function beside the working code like the loop variable
    
    - **Layout file with blade**
        
        what does that mean it is related to the question that I ask before?
        
        REmeber that old issue of include header and footer they can be easily solved with blade with two way: 
        
        - [ ]  old way with yield and extend (inheritance)
        - [ ]  component
- DataBase
    - env file
        
        confiuration like we are in debug or production mode 
        
        database config
        
    - migrate data base
        
        php artisan migragte
        
    - active record
        
        what does that mean? 
        
        map every row to object so if we have migration called create_users_tables we will have users table in the db and User model elequent where every $user instance of User correspond to a row in the users table
        
    - convert Post to be elequent model
        
        what is the difference? why the new model has all the attribute although it is empty?
        
        actually jeffery were building the Post model in the last secion to revert to how laravel build struct their models with methods like find findorfail all
        
        once we make the migration and the model we will have that nice configration for  free
        
        but how we just the name Post and laravel connect them automatically?
        
    - Html escaping
        
        remember ebrahem hegazy?
        
    - Mass assignmet vulnerablities
        
        what does that mean ? how we can solve them? 
        
        it mean you can directly insert new instance of the model i with attribute that shouldn’t be entered that way i.e. id subscribtion 
        
        there are 3 ways to migiate these vulnerablites
        
        choose what could be included in the mass assignment
        
        choose that must be guarded 
        
        not to use mass assignment at all guard[]
        
        Route model binding
        
    - Route model binding
        
        laravel bind Post model with the wild card by default it bind the id but you can change it to use any property like the slug
        
    - elequent relationship
        
        hasOne, hasMany, belongto, belongtomany
        
        - show all post related to categories
    - n+1 problem
        
        what does that mean 
        
        let’s give an example if you have posts and you want to display author of that post which are in another table here what will happen: 
        
        - get all post from the database
        - for each post perfrom sql query to on the author table to get the author which has the id from author_id forign key
            
            so if we have 10 posts we will end up with 10 + 1 query 
            
        
        instead of that we will tell laravel when you fetch all posts from the db perform anther query to get all categories that has relate to these posts and the later logic will be performed not in the db query but with php 
        
        so will get only 2 query (cuz we accessed two tables)
        
    - Database seeding
        
        in development you will often need to redo the migration which mean you will drop all the table and you will end up with empty table that you will have to manually fill 
        
        we want to automate this process
        
        there is one seeding already done for the user with factory method 
        
        in the next episode we will learn how to assign the factory method to the post and category
        
        do you remeber the factory pattern in the 2nd course in the specialization of the university of alperta it came to work now  
        
- Integrate the design
    
    so now I integrate the design for the posts view and I think that will go also for the post view
    
    Remember that posts view is used for categories or author etc.. 
    
    There is props that you pass to blade compoents and merge class with two method
    
    Post veiw
    
    dropdown menu
    
    I created it with bootstrap
    
    you can check current uri with request method
    
    you can also name the route 
    
    `'excerpt' => collect($this->faker->paragraphs(2))->map(fn($item) => "<p>{$item}</p>")->implode(''),`
    
    just like react
    
- Search
    
    the messy way
    
    Just use where and orWhere
    
    the cleaner way
    
    move it into controller 
    
    query scop
    
- Advanced query constraints
- Pagination
    
    what is pagination 
    
    add pagination links 
    
    how to export pagination component from the vendor to my components so that I can style it as I can 
    
    change from bootstrap and tailwind from the app service provider startup
    
    how to combine pagination and current query
    
- Form and Authentication
    
    validate request
    
    I copied tailwind form 
    
    @error @enderror
    
    don’t reset all the form field when error repopulating form
    
    using unique exist
    
    another method to type validation rule
    
    csrf to prevent crosssite
    
    return redirect with one time session
    
    - [x]  using alpine js to show flash message
        
        x-data to define new variable 
        
        x-init to run code at the beginning
        
        x-show toggle visibilty depend on certain 
        
    - [x]  password hashing mutator
        
        there are 2 methods that I came so far it acts as getter && setter 
        
    
    using auth helper and @auth
    
    authentication as I remeber there was validation exceptoin error
    
    yes it is a validation exception it act like back with message
    
    login form 
    
    middleware for guest and login
    
    @auth @guest
    
    starter kit which is bundeld with all these things out of the box
    
- comment
    
    build the comment form 
    
    I setuped also tailwind and alpine js  and I think to add another feature to the comment to enable the user to vote comment it will be like a test for the application that I will try to implement later
    
    forign key and delete constraints
