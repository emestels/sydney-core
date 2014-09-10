<?php
/**
 * File generated by the Sydney_Admin_Generator v2.0
 */

/**
 * Mapping of the Usersgroups table in an object
 * @package Admindb
 * @subpackage ModelGenerated
 */
class Usersgroups extends UsersgroupsOp
{
    protected $_schema = 'sydney';
    protected $_name = 'usersgroups';
    protected $_dependentTables = array(
        'Pagdivs',
        'Pagstructure',
        'Safmodules',
        'Users',
        'Usersgroups'
    );
    protected $_referenceMap = array(
        'Usersgroups' => array(
            'columns'       => 'usersgroups_id',
            'refTableClass' => 'Usersgroups',
            'refColumns'    => 'id'
        ),
    );
    protected $_primary = 'id';

    public $fieldsNames = array(
        'id', // bigint()
        'name', // varchar(50)
        'desc', // varchar(50)
        'parent_id', // bigint()
    );

    protected $_metadata = array(
        'id'        => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "usersgroups",
            'COLUMN_NAME'      => "id",
            'COLUMN_POSITION'  => 1,
            'DATA_TYPE'        => "bigint",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => true,
            'PRIMARY_POSITION' => 1,
            'IDENTITY'         => true,
        ),
        'name'      => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "usersgroups",
            'COLUMN_NAME'      => "name",
            'COLUMN_POSITION'  => 2,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => "50",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'desc'      => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "usersgroups",
            'COLUMN_NAME'      => "desc",
            'COLUMN_POSITION'  => 3,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => "50",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'parent_id' => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "usersgroups",
            'COLUMN_NAME'      => "parent_id",
            'COLUMN_POSITION'  => 4,
            'DATA_TYPE'        => "bigint",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
    );

    public function __construct($id = 0)
    {
        $this->_schema = Sydney_Tools_Sydneyglobals::getConf()->db->params->dbname;
        parent::__construct($id);
    }

}