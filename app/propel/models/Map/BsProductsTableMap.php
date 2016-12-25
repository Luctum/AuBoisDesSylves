<?php

namespace AuBoisDesSylves\Propel\Models\Map;

use AuBoisDesSylves\Propel\Models\BsProducts;
use AuBoisDesSylves\Propel\Models\BsProductsQuery;
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
 * This class defines the structure of the 'bs_products' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 */
class BsProductsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'AuBoisDesSylves.Propel.Models.AuBoisDesSylves.Propel.Models.Map.BsProductsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'bs_products';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\AuBoisDesSylves\\Propel\\Models\\BsProducts';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'AuBoisDesSylves.Propel.Models.AuBoisDesSylves.Propel.Models.BsProducts';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id field
     */
    const COL_ID = 'bs_products.id';

    /**
     * the column name for the name field
     */
    const COL_NAME = 'bs_products.name';

    /**
     * the column name for the description field
     */
    const COL_DESCRIPTION = 'bs_products.description';

    /**
     * the column name for the id_category field
     */
    const COL_ID_CATEGORY = 'bs_products.id_category';

    /**
     * the column name for the price field
     */
    const COL_PRICE = 'bs_products.price';

    /**
     * the column name for the availability field
     */
    const COL_AVAILABILITY = 'bs_products.availability';

    /**
     * the column name for the icon field
     */
    const COL_ICON = 'bs_products.icon';

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
        self::TYPE_PHPNAME       => array('Id', 'Name', 'Description', 'IdCategory', 'Price', 'Availability', 'Icon', ),
        self::TYPE_CAMELNAME     => array('id', 'name', 'description', 'idCategory', 'price', 'availability', 'icon', ),
        self::TYPE_COLNAME       => array(BsProductsTableMap::COL_ID, BsProductsTableMap::COL_NAME, BsProductsTableMap::COL_DESCRIPTION, BsProductsTableMap::COL_ID_CATEGORY, BsProductsTableMap::COL_PRICE, BsProductsTableMap::COL_AVAILABILITY, BsProductsTableMap::COL_ICON, ),
        self::TYPE_FIELDNAME     => array('id', 'name', 'description', 'id_category', 'price', 'availability', 'icon', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Name' => 1, 'Description' => 2, 'IdCategory' => 3, 'Price' => 4, 'Availability' => 5, 'Icon' => 6, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'name' => 1, 'description' => 2, 'idCategory' => 3, 'price' => 4, 'availability' => 5, 'icon' => 6, ),
        self::TYPE_COLNAME       => array(BsProductsTableMap::COL_ID => 0, BsProductsTableMap::COL_NAME => 1, BsProductsTableMap::COL_DESCRIPTION => 2, BsProductsTableMap::COL_ID_CATEGORY => 3, BsProductsTableMap::COL_PRICE => 4, BsProductsTableMap::COL_AVAILABILITY => 5, BsProductsTableMap::COL_ICON => 6, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'name' => 1, 'description' => 2, 'id_category' => 3, 'price' => 4, 'availability' => 5, 'icon' => 6, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, )
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
        $this->setName('bs_products');
        $this->setPhpName('BsProducts');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\AuBoisDesSylves\\Propel\\Models\\BsProducts');
        $this->setPackage('AuBoisDesSylves.Propel.Models.AuBoisDesSylves.Propel.Models');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 255, null);
        $this->addForeignKey('id_category', 'IdCategory', 'INTEGER', 'bs_categories', 'id', true, null, null);
        $this->addColumn('price', 'Price', 'DOUBLE', true, null, null);
        $this->addColumn('availability', 'Availability', 'TINYINT', true, null, null);
        $this->addColumn('icon', 'Icon', 'VARCHAR', false, 255, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('BsCategories', '\\AuBoisDesSylves\\Propel\\Models\\BsCategories', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':id_category',
    1 => ':id',
  ),
), null, null, null, false);
        $this->addRelation('BsContents', '\\AuBoisDesSylves\\Propel\\Models\\BsContents', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':id_product',
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
        return $withPrefix ? BsProductsTableMap::CLASS_DEFAULT : BsProductsTableMap::OM_CLASS;
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
     * @return array           (BsProducts object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = BsProductsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = BsProductsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + BsProductsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BsProductsTableMap::OM_CLASS;
            /** @var BsProducts $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            BsProductsTableMap::addInstanceToPool($obj, $key);
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
            $key = BsProductsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = BsProductsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var BsProducts $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BsProductsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(BsProductsTableMap::COL_ID);
            $criteria->addSelectColumn(BsProductsTableMap::COL_NAME);
            $criteria->addSelectColumn(BsProductsTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(BsProductsTableMap::COL_ID_CATEGORY);
            $criteria->addSelectColumn(BsProductsTableMap::COL_PRICE);
            $criteria->addSelectColumn(BsProductsTableMap::COL_AVAILABILITY);
            $criteria->addSelectColumn(BsProductsTableMap::COL_ICON);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.id_category');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.availability');
            $criteria->addSelectColumn($alias . '.icon');
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
        return Propel::getServiceContainer()->getDatabaseMap(BsProductsTableMap::DATABASE_NAME)->getTable(BsProductsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(BsProductsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(BsProductsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new BsProductsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a BsProducts or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or BsProducts object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(BsProductsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \AuBoisDesSylves\Propel\Models\BsProducts) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BsProductsTableMap::DATABASE_NAME);
            $criteria->add(BsProductsTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = BsProductsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            BsProductsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                BsProductsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the bs_products table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return BsProductsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a BsProducts or Criteria object.
     *
     * @param mixed               $criteria Criteria or BsProducts object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BsProductsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from BsProducts object
        }

        if ($criteria->containsKey(BsProductsTableMap::COL_ID) && $criteria->keyContainsValue(BsProductsTableMap::COL_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.BsProductsTableMap::COL_ID.')');
        }


        // Set the correct dbName
        $query = BsProductsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // BsProductsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BsProductsTableMap::buildTableMap();
