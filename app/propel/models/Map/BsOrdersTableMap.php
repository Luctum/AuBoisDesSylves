<?php

namespace AuBoisDesSylves\Propel\Models\Map;

use AuBoisDesSylves\Propel\Models\BsOrders;
use AuBoisDesSylves\Propel\Models\BsOrdersQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'bs_orders' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class BsOrdersTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'AuBoisDesSylves.Propel.Models.AuBoisDesSylves.Propel.Models.Map.BsOrdersTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'bs_orders';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\AuBoisDesSylves\\Propel\\Models\\BsOrders';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'AuBoisDesSylves.Propel.Models.AuBoisDesSylves.Propel.Models.BsOrders';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the id field
     */
    const COL_ID = 'bs_orders.id';

    /**
     * the column name for the id_user field
     */
    const COL_ID_USER = 'bs_orders.id_user';

    /**
     * the column name for the date_created field
     */
    const COL_DATE_CREATED = 'bs_orders.date_created';

    /**
     * the column name for the date_edited field
     */
    const COL_DATE_EDITED = 'bs_orders.date_edited';

    /**
     * the column name for the date_cancelled field
     */
    const COL_DATE_CANCELLED = 'bs_orders.date_cancelled';

    /**
     * the column name for the id_state field
     */
    const COL_ID_STATE = 'bs_orders.id_state';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'IdUser', 'DateCreated', 'DateEdited', 'DateCancelled', 'IdState', ),
        self::TYPE_CAMELNAME     => array('id', 'idUser', 'dateCreated', 'dateEdited', 'dateCancelled', 'idState', ),
        self::TYPE_COLNAME       => array(BsOrdersTableMap::COL_ID, BsOrdersTableMap::COL_ID_USER, BsOrdersTableMap::COL_DATE_CREATED, BsOrdersTableMap::COL_DATE_EDITED, BsOrdersTableMap::COL_DATE_CANCELLED, BsOrdersTableMap::COL_ID_STATE, ),
        self::TYPE_FIELDNAME     => array('id', 'id_user', 'date_created', 'date_edited', 'date_cancelled', 'id_state', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'IdUser' => 1, 'DateCreated' => 2, 'DateEdited' => 3, 'DateCancelled' => 4, 'IdState' => 5, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'idUser' => 1, 'dateCreated' => 2, 'dateEdited' => 3, 'dateCancelled' => 4, 'idState' => 5, ),
        self::TYPE_COLNAME       => array(BsOrdersTableMap::COL_ID => 0, BsOrdersTableMap::COL_ID_USER => 1, BsOrdersTableMap::COL_DATE_CREATED => 2, BsOrdersTableMap::COL_DATE_EDITED => 3, BsOrdersTableMap::COL_DATE_CANCELLED => 4, BsOrdersTableMap::COL_ID_STATE => 5, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'id_user' => 1, 'date_created' => 2, 'date_edited' => 3, 'date_cancelled' => 4, 'id_state' => 5, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('bs_orders');
        $this->setPhpName('BsOrders');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\AuBoisDesSylves\\Propel\\Models\\BsOrders');
        $this->setPackage('AuBoisDesSylves.Propel.Models.AuBoisDesSylves.Propel.Models');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('id_user', 'IdUser', 'INTEGER', 'bs_users', 'id', true, null, null);
        $this->addColumn('date_created', 'DateCreated', 'TIMESTAMP', true, null, 'CURRENT_TIMESTAMP');
        $this->addColumn('date_edited', 'DateEdited', 'TIMESTAMP', false, null, null);
        $this->addColumn('date_cancelled', 'DateCancelled', 'TIMESTAMP', false, null, null);
        $this->addForeignKey('id_state', 'IdState', 'INTEGER', 'bs_states', 'id', true, null, 1);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('BsStates', '\\AuBoisDesSylves\\Propel\\Models\\BsStates', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':id_state',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('BsUsers', '\\AuBoisDesSylves\\Propel\\Models\\BsUsers', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':id_user',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('BsContents', '\\AuBoisDesSylves\\Propel\\Models\\BsContents', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':id_order',
    1 => ':id',
  ),
), null, null, 'BsContentss', false);
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }
    
    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? BsOrdersTableMap::CLASS_DEFAULT : BsOrdersTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (BsOrders object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = BsOrdersTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BsOrdersTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BsOrdersTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BsOrdersTableMap::OM_CLASS;
            /** @var BsOrders $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BsOrdersTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = BsOrdersTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BsOrdersTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var BsOrders $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BsOrdersTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(BsOrdersTableMap::COL_ID);
            $criteria->addSelectColumn(BsOrdersTableMap::COL_ID_USER);
            $criteria->addSelectColumn(BsOrdersTableMap::COL_DATE_CREATED);
            $criteria->addSelectColumn(BsOrdersTableMap::COL_DATE_EDITED);
            $criteria->addSelectColumn(BsOrdersTableMap::COL_DATE_CANCELLED);
            $criteria->addSelectColumn(BsOrdersTableMap::COL_ID_STATE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_user');
            $criteria->addSelectColumn($alias . '.date_created');
            $criteria->addSelectColumn($alias . '.date_edited');
            $criteria->addSelectColumn($alias . '.date_cancelled');
            $criteria->addSelectColumn($alias . '.id_state');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(BsOrdersTableMap::DATABASE_NAME)->getTable(BsOrdersTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(BsOrdersTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(BsOrdersTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new BsOrdersTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a BsOrders or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or BsOrders object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BsOrdersTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \AuBoisDesSylves\Propel\Models\BsOrders) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BsOrdersTableMap::DATABASE_NAME);
            $criteria->add(BsOrdersTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = BsOrdersQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BsOrdersTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BsOrdersTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the bs_orders table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return BsOrdersQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a BsOrders or Criteria object.
     *
     * @param mixed               $criteria Criteria or BsOrders object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BsOrdersTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from BsOrders object
        }

        if ($criteria->containsKey(BsOrdersTableMap::COL_ID) && $criteria->keyContainsValue(BsOrdersTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.BsOrdersTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = BsOrdersQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // BsOrdersTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BsOrdersTableMap::buildTableMap();
