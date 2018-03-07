<?php
/**
 * WP System - AbstractView - Abstract Class
 *
 * @since       2018.01.12
 * @version     1.0.0.0
 * @author      mlbors
 * @copyright
 */

namespace App\Theme\Abstracts;

use Roots\Sage\Container;

use App\Theme\Interfaces\IView as IView;

/***********************************/
/********** ABSTRACT VIEW **********/
/***********************************/

abstract class AbstractView implements IView
{
    /*******************************/
    /********** ATTRIBUTS **********/
    /*******************************/

    /**
     * @var Mixed $_data view's data
     * @var String $_file file to use
     */

    protected $_data;
    protected $_file;

    /*********************************************************************************/
    /*********************************************************************************/

    /*******************************/
    /********** CONSTRUCT **********/
    /*******************************/

    /**
     * @param String $file file to use
     */

    public function __construct(string $file)
    {
        $this->_setValues($file);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /********************************/
    /********** SET VALUES **********/
    /********************************/

    /**
     * @param String $file file to use
     */

    protected function _setValues(string $file)
    {
        $this->_setFile($file);
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /******************************/
    /********** SET FILE **********/
    /******************************/

    /**
     * @param String $file file to use
     */

    protected function _setFile(string $file)
    {
        $this->_file = $file;
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /******************************/
    /********** SET DATA **********/
    /******************************/

    /**
     * @param Mixed $data view's data
     */

    public function setData($data)
    {
        $this->_data = $data;
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /******************************/
    /********** GET FILE **********/
    /******************************/

    /**
     * @return String
     */

    public function getFile(): string
    {
        return $this->_file;
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /******************************/
    /********** GET DATA **********/
    /******************************/

    /**
     * @return Mixed
     */

    public function getData()
    {
        return $this->_data;
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /*********************************/
    /********** RENDER VIEW **********/
    /*********************************/

    protected function _renderView()
    {
        try {
            ob_start();
            echo \App\template($this->_file, ['data' => $this->_data]);
            return ob_get_clean();
        } catch (\Exception $e) {
            return false;
        }
    }

    /*********************************************************************************/
    /*********************************************************************************/

    /****************************/
    /********** RENDER **********/
    /****************************/

    abstract public function render();
}