<?php
namespace Application\Model;

class Post
{
    public $id;
    public $content;
    public $title;
    public $post_image;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->content = !empty($data['content']) ? $data['content'] : null;
        $this->title  = !empty($data['title']) ? $data['title'] : null;
        $this->post_image  = !empty($data['post_image']) ? $data['post_image'] : null;
    }
}