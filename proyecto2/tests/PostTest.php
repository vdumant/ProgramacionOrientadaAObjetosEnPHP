<?php

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;
use App\Author;
use App\Category;

class PostTest extends TestCase
{
    public function test_add_comment_to_post()
    {
        $post = new Post();
        $comment = new Comment("text",new Author("J. Alen","ABC123"),new Category("PHP"));

        $post->addComment($comment);

        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComments()[0]);
    }
}
