<?php

declare(strict_types=1);

namespace In2code\Extension\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ExtensionController extends ActionController
{
    public function indexAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }
}
