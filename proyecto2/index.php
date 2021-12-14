<?php

require __DIR__ . '/vendor/autoload.php';

use App\Author;
use App\Category;
use App\Post;
use App\Comment;

$post = new Post;

$post->addComment(new Comment("text",new Author("J. Alen","ABC123"),new Category("PHP")));
$post->addComment(new Comment("text",new Author("X. Perry","OPQ789"),new Category("Vue")));
$post->addComment(new Comment("text",new Author("P. Jhons","XYZ654"),new Category("Javascript")));

echo "Cantidad comentarios: {$post->countComments()}";