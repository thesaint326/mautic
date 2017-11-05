<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\FooBundle\Form\Type;

use Mautic\CoreBundle\Form\Type\AbstractFormStandardType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class BarType extends AbstractFormStandardType
{
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'MauticPlugin\FooBundle\Entity\Bar',
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bar';
    }
}
