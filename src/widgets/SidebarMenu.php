<?php

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
