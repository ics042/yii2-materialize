<?php

/**
 *
 * @license http://opensource.org/licenses/MIT
 * @link https://github.com/ics042/yii2-materialize
 * @package ics042/yii2-materialize
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ics042\Materialize;

/**
 * Description of MaterializeAsset
 *
 * @author Ben
 */
class MaterializeAsset extends \yii\web\AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/bower-asset/materialize/dist';

    /**
     * @var array
     */
    public $css = [
        'css/materialize.min.css',
        'css/style.min.css'
        ];

    /**
     * @var array
     */
    public $js = ['js/materialize.min.js'];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}