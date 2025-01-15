<?php

namespace App\CustomElementsBundle\Controller\FrontendModule;

use Contao\CoreBundle\Controller\FrontendModule\AbstractFrontendModuleController;
use Contao\CoreBundle\Exception\RedirectResponseException;
use Contao\CoreBundle\DependencyInjection\Attribute\AsFrontendModule;
use Contao\ModuleModel;
use Contao\PageModel;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

#[AsFrontendModule(category: 'miscellaneous')]
class BookerModuleController extends AbstractFrontendModuleController
{
    protected function getResponse(Template $template, ModuleModel $model, Request $request): Response
    {
        if ($request->isMethod(Request::METHOD_POST)) {
            if (null !== ($redirectPage = PageModel::findById($model->jumpTo))) {
                throw new RedirectResponseException($redirectPage->getAbsoluteUrl());
            }
        }

        $template->action = $request->getUri();

        return $template->getResponse();
    }
}