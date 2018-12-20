<?php
declare(strict_types=1);

namespace MyApp\Contents;

use Selami\Interfaces\Controller;
use Selami\ControllerResponse;

class Redirect extends ContentsController implements Controller
{
    public function __invoke() : ControllerResponse
    {
        return ControllerResponse::REDIRECT(302, '/redirected');
    }
}