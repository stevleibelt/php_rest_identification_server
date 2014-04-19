<?php

namespace Database\DBMS\map;

use \RelationMap;
use \TableMap;


/**
 * This class defines the structure of the 'net_bazzline_identification_service_users' table.
 *
 *
 * This class was autogenerated by Propel 1.7.1 on:
 *
 * Sun Apr 20 00:15:00 2014
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator..map
 */
class UserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.map.UserTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('net_bazzline_identification_service_users');
        $this->setPhpName('User');
        $this->setClassname('Database\\DBMS\\User');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'CHAR', true, 36, null);
        $this->addColumn('firstName', 'Firstname', 'VARCHAR', true, 40, null);
        $this->addColumn('lastName', 'Lastname', 'VARCHAR', true, 40, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 80, null);
        $this->addColumn('is_active', 'IsActive', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Identity', 'Database\\DBMS\\Identity', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), null, null, 'Identitys');
    } // buildRelations()

} // UserTableMap
