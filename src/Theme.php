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
 * Class Theme
 *
 * @property $skin string;
 */
class Theme extends \yii\base\Theme
{
    /**
     * @var string
     */
    public $root = '@app';

    /**
     * @var array
     */
    public $topMenuItems = [];

    /**
     * @var array
     */
    public $mainMenuItems = [];

    /**
     *  Set the basePath of the theme, the
     */
    public function init()
    {
        $this->basePath = __DIR__;

        if (!$this->pathMap) {
            $this->createPathMap();
        }
    }

    /**
     * @throws \yii\base\InvalidConfigException
     */
    protected function createPathMap()
    {
        $this->pathMap = [
            $this->root.'/views' => [
                $this->root.'/views',
                $this->getPath('views'),
            ],
        ];
    }
}
