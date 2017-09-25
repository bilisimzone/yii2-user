<?php


namespace coreb2c\user\traits;

use coreb2c\user\Module;

/**
 * Trait ModuleTrait
 * @property-read Module $module
 * @package coreb2c\user\traits
 */
trait ModuleTrait
{
    /**
     * @return Module
     */
    public function getModule()
    {
        return \Yii::$app->getModule('user');
    }
}
