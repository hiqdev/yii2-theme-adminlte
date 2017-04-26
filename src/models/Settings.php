<?php
/**
 * AdminLte Theme for hiqdev/yii2-thememanager
 *
 * @link      https://github.com/hiqdev/yii2-theme-adminlte
 * @package   yii2-theme-adminlte
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\themes\adminlte\models;

use Yii;

class Settings extends \hiqdev\thememanager\models\Settings
{
    protected $_defaults = [
        'skin' => 'skin-blue',
    ];

    /**
     * Can have values: fixed, layout-boxed.
     *
     * @var string
     */
    public $layout;

    /**
     * Can have values: skin-blue, skin-yellow, skin-purple, skin-green, skin-red, skin-black, skin-ebony.
     *
     * @var string
     */
    public $skin;

    /**
     * Can have value: table-condensed, blank.
     *
     * @var bool
     */
    public $table_condensed;

    /**
     * @var bool
     */
    public $collapsed_sidebar;

    /**
     * @var string
     */
    public $filterOrientation;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['layout', 'skin', 'table_condensed', 'collapsed_sidebar'], 'safe'],
            [['filterOrientation'], 'in', 'range' => [self::ORIENTATION_VERTICAL, self::ORIENTATION_HORIZONTAL]],
        ];
    }

    /**
     * @return array
     */
    public function orientationOptions()
    {
        return [
            self::ORIENTATION_HORIZONTAL => Yii::t('adminlte', '"Advanced search" on the left'),
            self::ORIENTATION_VERTICAL   => Yii::t('adminlte', '"Advanced Search" on top'),
        ];
    }

    /**
     * @return array
     */
    public function formLayoutData()
    {
        return [
            'none'         => Yii::t('adminlte', 'Default layout'),
            'fixed'        => Yii::t('adminlte', 'Fixed layout'),
            // working incorectly temporary disabled
            // 'layout-boxed' => Yii::t('adminlte', 'Boxed layout'),
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'verifyCode'        => 'Verification Code',
            'table_condensed'   => Yii::t('adminlte', 'Table Condensed'),
            'collapsed_sidebar' => Yii::t('adminlte', 'Collapsed Sidebar'),
            'filterOrientation' => Yii::t('adminlte', 'Search position'),
        ];
    }

    /**
     * @return array
     */
    public function skinSampleArray()
    {
        return [
            [
                'attribute' => 'skin-red',
                'label'     => Yii::t('adminlte', 'Red'),
                'color'     => '#dd4b39',
                'bg'        => 'bg-red',
            ],
            [
                'attribute' => 'skin-green',
                'label'     => Yii::t('adminlte', 'Green'),
                'color'     => '#00a65a',
                'bg'        => 'bg-green',
            ],
            [
                'attribute' => 'skin-blue',
                'label'     => Yii::t('adminlte', 'Blue'),
                'color'     => '#3c8dbc',
                'bg'        => 'bg-light-blue',
            ],
            [
                'attribute' => 'skin-purple',
                'label'     => Yii::t('adminlte', 'Purple'),
                'color'     => '#605ca8',
                'bg'        => 'bg-purple',
            ],
            [
                'attribute' => 'skin-yellow',
                'label'     => Yii::t('adminlte', 'Yellow'),
                'color'     => '#f39c12',
                'bg'        => 'bg-yellow',
            ],
            /*[
                'attribute' => 'skin-black',
                'label'     => Yii::t('adminlte', 'Black'),
                'color'     => '#fff',
                'bg'        => 'bg-black',
            ],
            [
                'attribute' => 'skin-ebony',
                'label'     => Yii::t('adminlte', 'Ebony'),
                'color'     => '#fff',
                'bg'        => 'bg-black',
            ],*/
        ];
    }

    /**
     * Provides css class by given attribute name and value.
     *
     * @param $name  string         attribute name
     * @param $value boolean|string attribute value
     *
     * @return string css class
     */
    public static function cssClassProvider($name, $value)
    {
        switch ($name) {
            case 'table_condensed':
                return $value ? 'table-condensed' : '';
                break;
            case 'collapsed_sidebar':
                return $value ? 'sidebar-collapse' : '';
                break;
            default:
                return parent::cssClassProvider($name, $value);
        }
    }

    public function getBodyClasses()
    {
        return $this->getCssClasses(['layout', 'skin', 'table_condensed', 'collapsed_sidebar']);
    }
}
