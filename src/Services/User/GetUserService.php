<?php

namespace App\Src\Services\User;

use App\Core\Http\Response\ResponseInterface;
use App\Core\Repository\RepositoryInterface;
use App\Core\Session\SessionInterface;
use App\Src\Services\User\traits\SetTable;
use JetBrains\PhpStorm\NoReturn;

class GetUserService
{
    public function __construct(
        private readonly RepositoryInterface $userRepository,
        private readonly ResponseInterface   $response,
        private readonly SessionInterface    $session,
    )
    {
        $this->setTable();
    }

    use SetTable;

    #[NoReturn] public function getUser(): void
    {
        $id = $this->session->get('user')['id'];
        $user = $this->userRepository->getById([
            'table' => $this->table(),
            'where' => ['id' => $id]
        ]);
        $this->response->json(['status' => 'success', 'result' => $user])->send();
    }
}