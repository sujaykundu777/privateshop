<?php
/**
 * Private Shop
 *
 * PHP version 5
 *
 * @category   PHP
 * @package    privateshop
 * @subpackage Core
 * @author     Agriya <info@agriya.com>
 * @copyright  2018 Agriya Infoway Private Ltd
 * @license    http://www.agriya.com/ Agriya Infoway Licence
 * @link       http://www.agriya.com
 */
App::import('Model', 'Attachment');
class ProductFile extends Attachment
{
    public $name = 'ProductFile';
    var $useTable = 'attachments';
    public $actsAs = array(
        'Inheritable' => array(
            'inheritanceField' => 'class',
            'fieldAlias' => 'ProductFile'
        )
    );
}
?>