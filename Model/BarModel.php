<?php

namespace MauticPlugin\FooBundle\Model;

use Mautic\CoreBundle\Model\FormModel;
use MauticPlugin\FooBundle\Entity\Bar;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class BarModel extends FormModel
{
    /**
     * {@inheritdoc}
     *
     * @return \MauticPlugin\FooBundle\Entity\BarRepository
     */
    public function getRepository()
    {
        return $this->em->getRepository('FooBundle:Bar');
    }

    /**
     * {@inheritdoc}
     *
     * @param       $entity
     * @param       $formFactory
     * @param null  $action
     * @param array $options
     *
     * @return mixed
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function createForm($entity, $formFactory, $action = null, $options = [])
    {
        if (!$entity instanceof Bar) {
            throw new MethodNotAllowedHttpException(['Bar']);
        }

        if (!empty($action)) {
            $options['action'] = $action;
        }

        return $formFactory->create('bar', $entity, $options);
    }

    /**
     * Get a specific entity or generate a new one if id is empty.
     *
     * @param $id
     *
     * @return null|Bar
     */
    public function getEntity($id = null)
    {
        if ($id === null) {
            return new Bar();
        }

        $entity = parent::getEntity($id);

        return $entity;
    }

    /**
     * @param object $entity
     */
    public function deleteEntity($entity)
    {
        parent::deleteEntity($entity);
    }
}