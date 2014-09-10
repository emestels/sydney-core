<?php
/**
 * File generated by the Sydney_Admin_Generator v2.0
 */

/**
 * Mapping of the Pagstructure table in an object
 * @package Admindb
 * @subpackage ModelGenerated
 */
class Pagstructure extends PagstructureOp
{
    protected $_schema = 'sydney';
    protected $_name = 'pagstructure';
    protected $_dependentTables = array(
        'Pagstats',
        'Pagstructure',
        'PagstructurePagdivs',
        'PagstructurePagmenus'
    );
    protected $_referenceMap = array(
        'Pagstructure' => array(
            'columns'       => 'pagstructure_id',
            'refTableClass' => 'Pagstructure',
            'refColumns'    => 'id'
        ),
        'Safinstances' => array(
            'columns'       => 'safinstances_id',
            'refTableClass' => 'Safinstances',
            'refColumns'    => 'id'
        ),
        'Usersgroups'  => array(
            'columns'       => 'usersgroups_id',
            'refTableClass' => 'Usersgroups',
            'refColumns'    => 'id'
        ),
    );
    protected $_primary = 'id';

    public $fieldsNames = array(
        'id', // bigint()
        'label', // varchar(255)
        'htmltitle', // varchar(255)
        'url', // varchar(200)
        'metadesc', // varchar(255)
        'metakeywords', // varchar(255)
        'parent_id', // bigint()
        'safinstances_id', // bigint()
        'ishome', // tinyint()
        'status', // enum('draft','revised','published','restored')()
        'pagorder', // int()
        'datecreated', // timestamp()
        'datemodified', // timestamp()
        'date_lastupdate_content', // datetime()
        'who_modified', // varchar(100)
        'who_lastupdate_content', // varchar(100)
        'iscachable', // tinyint()
        'cachetime', // int()
        'hits', // bigint()
        'redirecttoid', // bigint()
        'usersgroups_id', // bigint()
        'isDeleted', // smallint()
        'shortdesc', // varchar(255)
        'colorcode', // varchar(45)
        'layout', // varchar(60)
    );

    protected $_metadata = array(
        'id'                      => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
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
        'label'                   => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "label",
            'COLUMN_POSITION'  => 2,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => true,
            'LENGTH'           => "255",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'htmltitle'               => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "htmltitle",
            'COLUMN_POSITION'  => 3,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => true,
            'LENGTH'           => "255",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'url'                     => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "url",
            'COLUMN_POSITION'  => 4,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => true,
            'LENGTH'           => "200",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'metadesc'                => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "metadesc",
            'COLUMN_POSITION'  => 5,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => true,
            'LENGTH'           => "255",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'metakeywords'            => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "metakeywords",
            'COLUMN_POSITION'  => 6,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => true,
            'LENGTH'           => "255",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'parent_id'               => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "parent_id",
            'COLUMN_POSITION'  => 7,
            'DATA_TYPE'        => "bigint",
            'DEFAULT'          => "0",
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'safinstances_id'         => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "safinstances_id",
            'COLUMN_POSITION'  => 8,
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
        'ishome'                  => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "ishome",
            'COLUMN_POSITION'  => 9,
            'DATA_TYPE'        => "tinyint",
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
        'status'                  => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "status",
            'COLUMN_POSITION'  => 10,
            'DATA_TYPE'        => "enum('draft','revised','published','restored')",
            'DEFAULT'          => "draft",
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'pagorder'                => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "pagorder",
            'COLUMN_POSITION'  => 11,
            'DATA_TYPE'        => "int",
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
        'datecreated'             => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "datecreated",
            'COLUMN_POSITION'  => 12,
            'DATA_TYPE'        => "timestamp",
            'DEFAULT'          => null,
            'NULLABLE'         => true,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'datemodified'            => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "datemodified",
            'COLUMN_POSITION'  => 13,
            'DATA_TYPE'        => "timestamp",
            'DEFAULT'          => "CURRENT_TIMESTAMP",
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'date_lastupdate_content' => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "date_lastupdate_content",
            'COLUMN_POSITION'  => 14,
            'DATA_TYPE'        => "datetime",
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
        'who_modified'            => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "who_modified",
            'COLUMN_POSITION'  => 15,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => "100",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'who_lastupdate_content'  => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "who_lastupdate_content",
            'COLUMN_POSITION'  => 16,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => false,
            'LENGTH'           => "100",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'iscachable'              => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "iscachable",
            'COLUMN_POSITION'  => 17,
            'DATA_TYPE'        => "tinyint",
            'DEFAULT'          => "0",
            'NULLABLE'         => true,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'cachetime'               => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "cachetime",
            'COLUMN_POSITION'  => 18,
            'DATA_TYPE'        => "int",
            'DEFAULT'          => "3600",
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'hits'                    => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "hits",
            'COLUMN_POSITION'  => 19,
            'DATA_TYPE'        => "bigint",
            'DEFAULT'          => "0",
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'redirecttoid'            => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "redirecttoid",
            'COLUMN_POSITION'  => 20,
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
        'usersgroups_id'          => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "usersgroups_id",
            'COLUMN_POSITION'  => 21,
            'DATA_TYPE'        => "bigint",
            'DEFAULT'          => "1",
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'isDeleted'               => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "isDeleted",
            'COLUMN_POSITION'  => 22,
            'DATA_TYPE'        => "smallint",
            'DEFAULT'          => "0",
            'NULLABLE'         => false,
            'LENGTH'           => null,
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'shortdesc'               => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "shortdesc",
            'COLUMN_POSITION'  => 23,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => true,
            'LENGTH'           => "255",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'colorcode'               => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "colorcode",
            'COLUMN_POSITION'  => 24,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => null,
            'NULLABLE'         => true,
            'LENGTH'           => "45",
            'SCALE'            => null,
            'PRECISION'        => null,
            'UNSIGNED'         => null,
            'PRIMARY'          => false,
            'PRIMARY_POSITION' => null,
            'IDENTITY'         => false,
        ),
        'layout'                  => array(
            'SCHEMA_NAME'      => null,
            'TABLE_NAME'       => "pagstructure",
            'COLUMN_NAME'      => "layout",
            'COLUMN_POSITION'  => 25,
            'DATA_TYPE'        => "varchar",
            'DEFAULT'          => "",
            'NULLABLE'         => true,
            'LENGTH'           => "60",
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