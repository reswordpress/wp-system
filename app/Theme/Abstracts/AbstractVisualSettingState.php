<?php
/**
 * WP System - AbstractVisualSettingState - Abstract Class
 *
 * @since       2018.01.12
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

namespace App\Theme\Abstracts;

use Roots\Sage\Container;

use App\Theme\Interfaces\IEntity as IEntity;
use App\Theme\Interfaces\IState as IState;

/***************************************************/
/********** ABSTRACT VISUAL SETTING STATE **********/
/***************************************************/

abstract class AbstractVisualSettingState implements IState
{
    /*******************************/
    /********** ATTRIBUTS **********/
    /*******************************/

    /**
     * @var IEntity $_entity entity object
     */

    protected $_entity;

    /*********************************************************************************/
    /*********************************************************************************/

    /*******************************/
    /********** CONSTRUCT **********/
    /*******************************/

    /**
     * @param IEntity $entity entity object
     */

    public function __construct(IEntity $entity)
    {
        $this->_setValues($entity);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /********************************/
    /********** SET VALUES **********/
    /********************************/

    /**
     * @param IEntity $entity entity object
     */

    protected function _setValues(IEntity $entity)
    {
        $this->_setEntity($entity);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /********************************/
    /********** SET ENTITY **********/
    /********************************/

    /**
     * @param IEntity $entity entity object
     */

    protected function _setEntity(IEntity $entity)
    {
        $this->_entity = $entity;
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /********************************/
    /********** GET ENTITY **********/
    /********************************/

    public function getEntity(): IEntity
    {
        return $this->_entity;
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /*****************************/
    /********** EXECUTE **********/
    /*****************************/

    abstract public function execute();
}