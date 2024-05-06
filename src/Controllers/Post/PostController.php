<?php

namespace App\Src\Controllers\Post;

use App\Core\Controller\Controller;
use App\Core\Repository\RepositoryFactory;
use App\Core\View\View;
use App\Src\Services\Post\GetPostService;
use JetBrains\PhpStorm\NoReturn;

class PostController extends Controller
{
    public function index(): void
    {
        $this->view('post/post', 'Статья');
    }

    #[NoReturn] public function getPost(): void
    {
        $post = RepositoryFactory::getRepository('post', $this->db());
        $service = new GetPostService($post, $this->response(), $this->request());
        $service->getPost();
    }
}