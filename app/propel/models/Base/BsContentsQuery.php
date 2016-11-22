<?php

namespace AuBoisDesSylves\Propel\Models\Base;

use \Exception;
use \PDO;
use AuBoisDesSylves\Propel\Models\BsContents as ChildBsContents;
use AuBoisDesSylves\Propel\Models\BsContentsQuery as ChildBsContentsQuery;
use AuBoisDesSylves\Propel\Models\Map\BsContentsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'bs_contents' table.
 *
 * 
 *
 * @method     ChildBsContentsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildBsContentsQuery orderByIdProduct($order = Criteria::ASC) Order by the id_product column
 * @method     ChildBsContentsQuery orderByIdOrder($order = Criteria::ASC) Order by the id_order column
 * @method     ChildBsContentsQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 *
 * @method     ChildBsContentsQuery groupById() Group by the id column
 * @method     ChildBsContentsQuery groupByIdProduct() Group by the id_product column
 * @method     ChildBsContentsQuery groupByIdOrder() Group by the id_order column
 * @method     ChildBsContentsQuery groupByQuantity() Group by the quantity column
 *
 * @method     ChildBsContentsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBsContentsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBsContentsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBsContentsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBsContentsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBsContentsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBsContentsQuery leftJoinBsProducts($relationAlias = null) Adds a LEFT JOIN clause to the query using the BsProducts relation
 * @method     ChildBsContentsQuery rightJoinBsProducts($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BsProducts relation
 * @method     ChildBsContentsQuery innerJoinBsProducts($relationAlias = null) Adds a INNER JOIN clause to the query using the BsProducts relation
 *
 * @method     ChildBsContentsQuery joinWithBsProducts($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BsProducts relation
 *
 * @method     ChildBsContentsQuery leftJoinWithBsProducts() Adds a LEFT JOIN clause and with to the query using the BsProducts relation
 * @method     ChildBsContentsQuery rightJoinWithBsProducts() Adds a RIGHT JOIN clause and with to the query using the BsProducts relation
 * @method     ChildBsContentsQuery innerJoinWithBsProducts() Adds a INNER JOIN clause and with to the query using the BsProducts relation
 *
 * @method     ChildBsContentsQuery leftJoinBsOrders($relationAlias = null) Adds a LEFT JOIN clause to the query using the BsOrders relation
 * @method     ChildBsContentsQuery rightJoinBsOrders($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BsOrders relation
 * @method     ChildBsContentsQuery innerJoinBsOrders($relationAlias = null) Adds a INNER JOIN clause to the query using the BsOrders relation
 *
 * @method     ChildBsContentsQuery joinWithBsOrders($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BsOrders relation
 *
 * @method     ChildBsContentsQuery leftJoinWithBsOrders() Adds a LEFT JOIN clause and with to the query using the BsOrders relation
 * @method     ChildBsContentsQuery rightJoinWithBsOrders() Adds a RIGHT JOIN clause and with to the query using the BsOrders relation
 * @method     ChildBsContentsQuery innerJoinWithBsOrders() Adds a INNER JOIN clause and with to the query using the BsOrders relation
 *
 * @method     \AuBoisDesSylves\Propel\Models\BsProductsQuery|\AuBoisDesSylves\Propel\Models\BsOrdersQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBsContents findOne(ConnectionInterface $con = null) Return the first ChildBsContents matching the query
 * @method     ChildBsContents findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBsContents matching the query, or a new ChildBsContents object populated from the query conditions when no match is found
 *
 * @method     ChildBsContents findOneById(int $id) Return the first ChildBsContents filtered by the id column
 * @method     ChildBsContents findOneByIdProduct(int $id_product) Return the first ChildBsContents filtered by the id_product column
 * @method     ChildBsContents findOneByIdOrder(int $id_order) Return the first ChildBsContents filtered by the id_order column
 * @method     ChildBsContents findOneByQuantity(int $quantity) Return the first ChildBsContents filtered by the quantity column *

 * @method     ChildBsContents requirePk($key, ConnectionInterface $con = null) Return the ChildBsContents by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsContents requireOne(ConnectionInterface $con = null) Return the first ChildBsContents matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBsContents requireOneById(int $id) Return the first ChildBsContents filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsContents requireOneByIdProduct(int $id_product) Return the first ChildBsContents filtered by the id_product column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsContents requireOneByIdOrder(int $id_order) Return the first ChildBsContents filtered by the id_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsContents requireOneByQuantity(int $quantity) Return the first ChildBsContents filtered by the quantity column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBsContents[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBsContents objects based on current ModelCriteria
 * @method     ChildBsContents[]|ObjectCollection findById(int $id) Return ChildBsContents objects filtered by the id column
 * @method     ChildBsContents[]|ObjectCollection findByIdProduct(int $id_product) Return ChildBsContents objects filtered by the id_product column
 * @method     ChildBsContents[]|ObjectCollection findByIdOrder(int $id_order) Return ChildBsContents objects filtered by the id_order column
 * @method     ChildBsContents[]|ObjectCollection findByQuantity(int $quantity) Return ChildBsContents objects filtered by the quantity column
 * @method     ChildBsContents[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BsContentsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \AuBoisDesSylves\Propel\Models\Base\BsContentsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\AuBoisDesSylves\\Propel\\Models\\BsContents', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBsContentsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBsContentsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBsContentsQuery) {
            return $criteria;
        }
        $query = new ChildBsContentsQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildBsContents|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BsContentsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BsContentsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBsContents A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, id_product, id_order, quantity FROM bs_contents WHERE id = :p0';
        try {
            $stmt = $con->prepare($sql);            
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildBsContents $obj */
            $obj = new ChildBsContents();
            $obj->hydrate($row);
            BsContentsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     ConnectionInterface $con A connection object
     *
     * @return ChildBsContents|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildBsContentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BsContentsTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBsContentsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BsContentsTableMap::COL_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsContentsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(BsContentsTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(BsContentsTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsContentsTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_product column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProduct(1234); // WHERE id_product = 1234
     * $query->filterByIdProduct(array(12, 34)); // WHERE id_product IN (12, 34)
     * $query->filterByIdProduct(array('min' => 12)); // WHERE id_product > 12
     * </code>
     *
     * @see       filterByBsProducts()
     *
     * @param     mixed $idProduct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsContentsQuery The current query, for fluid interface
     */
    public function filterByIdProduct($idProduct = null, $comparison = null)
    {
        if (is_array($idProduct)) {
            $useMinMax = false;
            if (isset($idProduct['min'])) {
                $this->addUsingAlias(BsContentsTableMap::COL_ID_PRODUCT, $idProduct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProduct['max'])) {
                $this->addUsingAlias(BsContentsTableMap::COL_ID_PRODUCT, $idProduct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsContentsTableMap::COL_ID_PRODUCT, $idProduct, $comparison);
    }

    /**
     * Filter the query on the id_order column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrder(1234); // WHERE id_order = 1234
     * $query->filterByIdOrder(array(12, 34)); // WHERE id_order IN (12, 34)
     * $query->filterByIdOrder(array('min' => 12)); // WHERE id_order > 12
     * </code>
     *
     * @see       filterByBsOrders()
     *
     * @param     mixed $idOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsContentsQuery The current query, for fluid interface
     */
    public function filterByIdOrder($idOrder = null, $comparison = null)
    {
        if (is_array($idOrder)) {
            $useMinMax = false;
            if (isset($idOrder['min'])) {
                $this->addUsingAlias(BsContentsTableMap::COL_ID_ORDER, $idOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrder['max'])) {
                $this->addUsingAlias(BsContentsTableMap::COL_ID_ORDER, $idOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsContentsTableMap::COL_ID_ORDER, $idOrder, $comparison);
    }

    /**
     * Filter the query on the quantity column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantity(1234); // WHERE quantity = 1234
     * $query->filterByQuantity(array(12, 34)); // WHERE quantity IN (12, 34)
     * $query->filterByQuantity(array('min' => 12)); // WHERE quantity > 12
     * </code>
     *
     * @param     mixed $quantity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsContentsQuery The current query, for fluid interface
     */
    public function filterByQuantity($quantity = null, $comparison = null)
    {
        if (is_array($quantity)) {
            $useMinMax = false;
            if (isset($quantity['min'])) {
                $this->addUsingAlias(BsContentsTableMap::COL_QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantity['max'])) {
                $this->addUsingAlias(BsContentsTableMap::COL_QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsContentsTableMap::COL_QUANTITY, $quantity, $comparison);
    }

    /**
     * Filter the query by a related \AuBoisDesSylves\Propel\Models\BsProducts object
     *
     * @param \AuBoisDesSylves\Propel\Models\BsProducts|ObjectCollection $bsProducts The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBsContentsQuery The current query, for fluid interface
     */
    public function filterByBsProducts($bsProducts, $comparison = null)
    {
        if ($bsProducts instanceof \AuBoisDesSylves\Propel\Models\BsProducts) {
            return $this
                ->addUsingAlias(BsContentsTableMap::COL_ID_PRODUCT, $bsProducts->getId(), $comparison);
        } elseif ($bsProducts instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BsContentsTableMap::COL_ID_PRODUCT, $bsProducts->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByBsProducts() only accepts arguments of type \AuBoisDesSylves\Propel\Models\BsProducts or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BsProducts relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBsContentsQuery The current query, for fluid interface
     */
    public function joinBsProducts($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BsProducts');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'BsProducts');
        }

        return $this;
    }

    /**
     * Use the BsProducts relation BsProducts object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \AuBoisDesSylves\Propel\Models\BsProductsQuery A secondary query class using the current class as primary query
     */
    public function useBsProductsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBsProducts($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BsProducts', '\AuBoisDesSylves\Propel\Models\BsProductsQuery');
    }

    /**
     * Filter the query by a related \AuBoisDesSylves\Propel\Models\BsOrders object
     *
     * @param \AuBoisDesSylves\Propel\Models\BsOrders|ObjectCollection $bsOrders The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBsContentsQuery The current query, for fluid interface
     */
    public function filterByBsOrders($bsOrders, $comparison = null)
    {
        if ($bsOrders instanceof \AuBoisDesSylves\Propel\Models\BsOrders) {
            return $this
                ->addUsingAlias(BsContentsTableMap::COL_ID_ORDER, $bsOrders->getId(), $comparison);
        } elseif ($bsOrders instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BsContentsTableMap::COL_ID_ORDER, $bsOrders->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByBsOrders() only accepts arguments of type \AuBoisDesSylves\Propel\Models\BsOrders or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BsOrders relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBsContentsQuery The current query, for fluid interface
     */
    public function joinBsOrders($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BsOrders');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'BsOrders');
        }

        return $this;
    }

    /**
     * Use the BsOrders relation BsOrders object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \AuBoisDesSylves\Propel\Models\BsOrdersQuery A secondary query class using the current class as primary query
     */
    public function useBsOrdersQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBsOrders($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BsOrders', '\AuBoisDesSylves\Propel\Models\BsOrdersQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBsContents $bsContents Object to remove from the list of results
     *
     * @return $this|ChildBsContentsQuery The current query, for fluid interface
     */
    public function prune($bsContents = null)
    {
        if ($bsContents) {
            $this->addUsingAlias(BsContentsTableMap::COL_ID, $bsContents->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the bs_contents table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BsContentsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BsContentsTableMap::clearInstancePool();
            BsContentsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BsContentsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BsContentsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            BsContentsTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            BsContentsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BsContentsQuery
