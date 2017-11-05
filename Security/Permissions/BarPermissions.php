<?php
namespace MauticPlugin\FooBundle\Security\Permissions;

use Symfony\Component\Form\FormBuilderInterface;
use Mautic\CoreBundle\Security\Permissions\AbstractPermissions;

/**
 * Class BarPermissions.
 */
class BarPermissions extends AbstractPermissions
{
    /**
     * {@inheritdoc}
     */
    public function __construct($params)
    {
        parent::__construct($params);
        $this->addStandardPermissions('foo');

    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'foo';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface &$builder, array $options, array $data)
    {
        $this->addStandardFormFields('foo', 'bar', $builder, $data);

    }
}