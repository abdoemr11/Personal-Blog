<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{

    function __construct(   public $title,
                        public $date,
                        public $body,
                        public $excrept,
                        public $slug){

    }
    static function all(): \Illuminate\Support\Collection
    {
        return collect(File::files(resource_path("posts/")))
            ->map(fn($file)=>YamlFrontMatter::parseFile($file))
            ->map(fn($document)=> new Post(
                $document->title,
                $document->date,
                $document->body(),
                $document->excrept,
                $document->slug
            ));


    }
    static function find($slug) {

        $post = (static::all()->firstWhere('slug', $slug)) ;
        if(!$post) {
            throw new ModelNotFoundException();
        }
        return $post;
    }

}
