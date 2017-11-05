<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set('headerTitle', $bar->getName());

$view['slots']->set(
    'actions',
    $view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'item'            => $bar,
            'templateButtons' => [
                'edit'   => $permissions['foo:bar:edit'],
                'clone'  => $permissions['foo:bar:create'],
                'delete' => $permissions['foo:bar:delete'],
                'close'  => $permissions['foo:bar:view'],
            ],
            'routeBase' => 'foo.bar',
        ]
    )
);

$view['slots']->set(
    'publishStatus',
    $view->render('MauticCoreBundle:Helper:publishstatus_badge.html.php', ['entity' => $bar])
);
?>

<!-- start: box layout -->
<div class="box-layout">
    <!-- left section -->
    <div class="col-md-12 bg-white height-auto">
        <div class="bg-auto">
            <!-- bar detail header -->
            <div class="pr-md pl-md pt-lg pb-lg">
                <div class="box-layout">
                    <div class="col-xs-6 va-m">
                        <div class="text-white dark-sm mb-0"><?php echo $bar->getDescription(); ?></div>
                    </div>
                </div>
            </div>
            <!--/ bar detail header -->

            <!-- bar detail collapseable -->
            <div class="collapse" id="bar-details">
                <div class="pr-md pl-md pb-md">
                    <div class="panel shd-none mb-0">
                        <table class="table table-bordered table-striped mb-0">
                            <tbody>
                            <?php echo $view->render(
                                'MauticCoreBundle:Helper:details.html.php',
                                ['entity' => $bar]
                            ); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ bar detail collapseable -->
        </div>

        <div class="bg-auto bg-dark-xs">
            <!-- bar detail collapseable toggler -->
            <div class="hr-expand nm">
                <span data-toggle="tooltip" title="Detail">
                    <a href="javascript:void(0)" class="arrow text-muted collapsed" data-toggle="collapse"
                       data-target="#bar-details"><span
                            class="caret"></span> <?php echo $view['translator']->trans('mautic.core.details'); ?></a>
                </span>
            </div>
            <!--/ bar detail collapseable toggler -->
        </div>
    </div>
    <!--/ left section -->
</div>
<!--/ end: box layout -->
