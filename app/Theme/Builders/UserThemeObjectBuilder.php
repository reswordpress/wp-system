<?php
/**
 * WP System - UserThemeObjectBuilder - Concrete Class
 *
 * @since       2018.01.12
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

namespace App\Theme\Builders;

use Roots\Sage\Container;

use App\Theme\Interfaces\IEntity as IEntity;
use App\Theme\Interfaces\IThemeObject as IThemeObject;
use App\Theme\Abstracts\AbstractThemeObjectBuilder as AbstractThemeObjectBuilder;
use App\Theme\ThemeObjects\UserThemeObject as UserThemeObject;

/***********************************************/
/********** USER THEME OBJECT BUILDER **********/
/***********************************************/

class UserThemeObjectBuilder extends AbstractThemeObjectBuilder
{
    /*******************************/
    /********** CONSTRUCT **********/
    /*******************************/

    public function __construct()
    {
        parent::__construct();
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /*****************************************/
    /********** CREATE THEME OBJECT **********/
    /*****************************************/

    /**
     * @param IEntity $entity entity object
     * @return IThemeObject
     */

    protected function _createThemeObject(IEntity $entity): IThemeObject
    {
        return $this->_container->makeWith(UserThemeObject::class, ['entity' => $entity]);
    }
}