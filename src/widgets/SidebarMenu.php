<?php
/**
 * AdminLte Theme for Yii2 projects
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\adminlte\widgets;

/**
 * Sidebar Menu.
 * Themed menu widget.
 */
class SidebarMenu extends \hiqdev\yii2\menus\widgets\Menu
{
    /**
     * {@inheritdoc}
     */
    public $linkTemplate = '<a href="{url}">{icon} <span>{label}</span> {arrow}</a>';

    /**
     * {@inheritdoc}
     */
    public $submenuTemplate = "\n<ul class='treeview-menu'>\n{items}\n</ul>\n";

    /**
     * @var string Class that will be added for parents "li"
     */
    public $treeClass = 'treeview';

    /**
     * {@inheritdoc}
     */
    public $activateParents = true;

    public $defaultIcon = 'fa-angle-double-right';
}
