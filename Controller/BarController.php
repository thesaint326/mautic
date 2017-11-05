<?php

namespace MauticPlugin\FooBundle\Controller;

use Mautic\CoreBundle\Controller\AbstractStandardFormController;


/**
 * Class BarController.
 */
class BarController extends AbstractStandardFormController
{
    /**
     * Deletes the entity.
     *
     * @param   $objectId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction($objectId)
    {
        return $this->deleteStandard($objectId);
    }

    /**
     * @param      $objectId
     * @param bool $ignorePost
     *
     * @return JsonResponse|\Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function editAction($objectId, $ignorePost = false)
    {
        return $this->editStandard($objectId, $ignorePost);
    }

    /**
     * @param int $page
     *
     * @return JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function indexAction($page = null)
    {
        return $this->indexStandard($page);
    }

    /**
     * Generates new form and processes post data.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction()
    {
        return $this->newStandard();
    }

    /**
     * View a specific campaign.
     *
     * @param $objectId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function viewAction($objectId)
    {
        return $this->viewStandard($objectId, $this->getModelName(), null, null, 'bar');
    }

    /**
     * Get this controller's model name.
     */
    protected function getModelName()
    {
        return 'foo.bar';
    }

    protected function getPermissionBase()
    {
        return 'foo:bar';
    }

    /**
     * @return string
     */
    protected function getControllerBase()
    {
        return 'FooBundle:Bar';
    }

    protected function getTemplateBase()
    {
        return 'FooBundle:Bar';
    }

    protected function getTemplateName($file)
    {
        return $this->getTemplateBase() . ':' . $file;
    }
}
