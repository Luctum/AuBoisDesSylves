<?php

namespace AuBoisDesSylves\Propel\Models\Base;

use \Exception;
use \PDO;
use AuBoisDesSylves\Propel\Models\BsProducts as ChildBsProducts;
use AuBoisDesSylves\Propel\Models\BsProductsQuery as ChildBsProductsQuery;
use AuBoisDesSylves\Propel\Models\Map\BsProductsTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'bs_products' table.
 *
 * 
 *
 * @method     ChildBsProductsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildBsProductsQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildBsProductsQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildBsProductsQuery orderByIdCategory($order = Criteria::ASC) Order by the id_category column
 * @method     ChildBsProductsQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     ChildBsProductsQuery orderByAvailability($order = Criteria::ASC) Order by the availability column
 * @method     ChildBsProductsQuery orderByIcon($order = Criteria::ASC) Order by the icon column
 *
 * @method     ChildBsProductsQuery groupById() Group by the id column
 * @method     ChildBsProductsQuery groupByName() Group by the name column
 * @method     ChildBsProductsQuery groupByDescription() Group by the description column
 * @method     ChildBsProductsQuery groupByIdCategory() Group by the id_category column
 * @method     ChildBsProductsQuery groupByPrice() Group by the price column
 * @method     ChildBsProductsQuery groupByAvailability() Group by the availability column
 * @method     ChildBsProductsQuery groupByIcon() Group by the icon column
 *
 * @method     ChildBsProductsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBsProductsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBsProductsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBsProductsQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBsProductsQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBsProductsQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBsProductsQuery leftJoinBsCategories($relationAlias = null) Adds a LEFT JOIN clause to the query using the BsCategories relation
 * @method     ChildBsProductsQuery rightJoinBsCategories($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BsCategories relation
 * @method     ChildBsProductsQuery innerJoinBsCategories($relationAlias = null) Adds a INNER JOIN clause to the query using the BsCategories relation
 *
 * @method     ChildBsProductsQuery joinWithBsCategories($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BsCategories relation
 *
 * @method     ChildBsProductsQuery leftJoinWithBsCategories() Adds a LEFT JOIN clause and with to the query using the BsCategories relation
 * @method     ChildBsProductsQuery rightJoinWithBsCategories() Adds a RIGHT JOIN clause and with to the query using the BsCategories relation
 * @method     ChildBsProductsQuery innerJoinWithBsCategories() Adds a INNER JOIN clause and with to the query using the BsCategories relation
 *
 * @method     ChildBsProductsQuery leftJoinBsContents($relationAlias = null) Adds a LEFT JOIN clause to the query using the BsContents relation
 * @method     ChildBsProductsQuery rightJoinBsContents($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BsContents relation
 * @method     ChildBsProductsQuery innerJoinBsContents($relationAlias = null) Adds a INNER JOIN clause to the query using the BsContents relation
 *
 * @method     ChildBsProductsQuery joinWithBsContents($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BsContents relation
 *
 * @method     ChildBsProductsQuery leftJoinWithBsContents() Adds a LEFT JOIN clause and with to the query using the BsContents relation
 * @method     ChildBsProductsQuery rightJoinWithBsContents() Adds a RIGHT JOIN clause and with to the query using the BsContents relation
 * @method     ChildBsProductsQuery innerJoinWithBsContents() Adds a INNER JOIN clause and with to the query using the BsContents relation
 *
 * @method     \AuBoisDesSylves\Propel\Models\BsCategoriesQuery|\AuBoisDesSylves\Propel\Models\BsContentsQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBsProducts findOne(ConnectionInterface $con = null) Return the first ChildBsProducts matching the query
 * @method     ChildBsProducts findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBsProducts matching the query, or a new ChildBsProducts object populated from the query conditions when no match is found
 *
 * @method     ChildBsProducts findOneById(int $id) Return the first ChildBsProducts filtered by the id column
 * @method     ChildBsProducts findOneByName(string $name) Return the first ChildBsProducts filtered by the name column
 * @method     ChildBsProducts findOneByDescription(string $description) Return the first ChildBsProducts filtered by the description column
 * @method     ChildBsProducts findOneByIdCategory(int $id_category) Return the first ChildBsProducts filtered by the id_category column
 * @method     ChildBsProducts findOneByPrice(int $price) Return the first ChildBsProducts filtered by the price column
 * @method     ChildBsProducts findOneByAvailability(int $availability) Return the first ChildBsProducts filtered by the availability column
 * @method     ChildBsProducts findOneByIcon(string $icon) Return the first ChildBsProducts filtered by the icon column *

 * @method     ChildBsProducts requirePk($key, ConnectionInterface $con = null) Return the ChildBsProducts by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsProducts requireOne(ConnectionInterface $con = null) Return the first ChildBsProducts matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBsProducts requireOneById(int $id) Return the first ChildBsProducts filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsProducts requireOneByName(string $name) Return the first ChildBsProducts filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsProducts requireOneByDescription(string $description) Return the first ChildBsProducts filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsProducts requireOneByIdCategory(int $id_category) Return the first ChildBsProducts filtered by the id_category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsProducts requireOneByPrice(int $price) Return the first ChildBsProducts filtered by the price column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsProducts requireOneByAvailability(int $availability) Return the first ChildBsProducts filtered by the availability column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsProducts requireOneByIcon(string $icon) Return the first ChildBsProducts filtered by the icon column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBsProducts[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBsProducts objects based on current ModelCriteria
 * @method     ChildBsProducts[]|ObjectCollection findById(int $id) Return ChildBsProducts objects filtered by the id column
 * @method     ChildBsProducts[]|ObjectCollection findByName(string $name) Return ChildBsProducts objects filtered by the name column
 * @method     ChildBsProducts[]|ObjectCollection findByDescription(string $description) Return ChildBsProducts objects filtered by the description column
 * @method     ChildBsProducts[]|ObjectCollection findByIdCategory(int $id_category) Return ChildBsProducts objects filtered by the id_category column
 * @method     ChildBsProducts[]|ObjectCollection findByPrice(int $price) Return ChildBsProducts objects filtered by the price column
 * @method     ChildBsProducts[]|ObjectCollection findByAvailability(int $availability) Return ChildBsProducts objects filtered by the availability column
 * @method     ChildBsProducts[]|ObjectCollection findByIcon(string $icon) Return ChildBsProducts objects filtered by the icon column
 * @method     ChildBsProducts[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BsProductsQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \AuBoisDesSylves\Propel\Models\Base\BsProductsQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\AuBoisDesSylves\\Propel\\Models\\BsProducts', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBsProductsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBsProductsQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBsProductsQuery) {
            return $criteria;
        }
        $query = new ChildBsProductsQuery();
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
     * @return ChildBsProducts|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BsProductsTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BsProductsTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildBsProducts A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, name, description, id_category, price, availability, icon FROM bs_products WHERE id = :p0';
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
            /** @var ChildBsProducts $obj */
            $obj = new ChildBsProducts();
            $obj->hydrate($row);
            BsProductsTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildBsProducts|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BsProductsTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BsProductsTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(BsProductsTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(BsProductsTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsProductsTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsProductsTableMap::COL_NAME, $name, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsProductsTableMap::COL_DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the id_category column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCategory(1234); // WHERE id_category = 1234
     * $query->filterByIdCategory(array(12, 34)); // WHERE id_category IN (12, 34)
     * $query->filterByIdCategory(array('min' => 12)); // WHERE id_category > 12
     * </code>
     *
     * @see       filterByBsCategories()
     *
     * @param     mixed $idCategory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByIdCategory($idCategory = null, $comparison = null)
    {
        if (is_array($idCategory)) {
            $useMinMax = false;
            if (isset($idCategory['min'])) {
                $this->addUsingAlias(BsProductsTableMap::COL_ID_CATEGORY, $idCategory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCategory['max'])) {
                $this->addUsingAlias(BsProductsTableMap::COL_ID_CATEGORY, $idCategory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsProductsTableMap::COL_ID_CATEGORY, $idCategory, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice(1234); // WHERE price = 1234
     * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
     * $query->filterByPrice(array('min' => 12)); // WHERE price > 12
     * </code>
     *
     * @param     mixed $price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(BsProductsTableMap::COL_PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(BsProductsTableMap::COL_PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsProductsTableMap::COL_PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the availability column
     *
     * Example usage:
     * <code>
     * $query->filterByAvailability(1234); // WHERE availability = 1234
     * $query->filterByAvailability(array(12, 34)); // WHERE availability IN (12, 34)
     * $query->filterByAvailability(array('min' => 12)); // WHERE availability > 12
     * </code>
     *
     * @param     mixed $availability The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByAvailability($availability = null, $comparison = null)
    {
        if (is_array($availability)) {
            $useMinMax = false;
            if (isset($availability['min'])) {
                $this->addUsingAlias(BsProductsTableMap::COL_AVAILABILITY, $availability['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($availability['max'])) {
                $this->addUsingAlias(BsProductsTableMap::COL_AVAILABILITY, $availability['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsProductsTableMap::COL_AVAILABILITY, $availability, $comparison);
    }

    /**
     * Filter the query on the icon column
     *
     * Example usage:
     * <code>
     * $query->filterByIcon('fooValue');   // WHERE icon = 'fooValue'
     * $query->filterByIcon('%fooValue%', Criteria::LIKE); // WHERE icon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icon The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByIcon($icon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icon)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsProductsTableMap::COL_ICON, $icon, $comparison);
    }

    /**
     * Filter the query by a related \AuBoisDesSylves\Propel\Models\BsCategories object
     *
     * @param \AuBoisDesSylves\Propel\Models\BsCategories|ObjectCollection $bsCategories The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByBsCategories($bsCategories, $comparison = null)
    {
        if ($bsCategories instanceof \AuBoisDesSylves\Propel\Models\BsCategories) {
            return $this
                ->addUsingAlias(BsProductsTableMap::COL_ID_CATEGORY, $bsCategories->getId(), $comparison);
        } elseif ($bsCategories instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BsProductsTableMap::COL_ID_CATEGORY, $bsCategories->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByBsCategories() only accepts arguments of type \AuBoisDesSylves\Propel\Models\BsCategories or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BsCategories relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function joinBsCategories($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BsCategories');

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
            $this->addJoinObject($join, 'BsCategories');
        }

        return $this;
    }

    /**
     * Use the BsCategories relation BsCategories object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \AuBoisDesSylves\Propel\Models\BsCategoriesQuery A secondary query class using the current class as primary query
     */
    public function useBsCategoriesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBsCategories($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BsCategories', '\AuBoisDesSylves\Propel\Models\BsCategoriesQuery');
    }

    /**
     * Filter the query by a related \AuBoisDesSylves\Propel\Models\BsContents object
     *
     * @param \AuBoisDesSylves\Propel\Models\BsContents|ObjectCollection $bsContents the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildBsProductsQuery The current query, for fluid interface
     */
    public function filterByBsContents($bsContents, $comparison = null)
    {
        if ($bsContents instanceof \AuBoisDesSylves\Propel\Models\BsContents) {
            return $this
                ->addUsingAlias(BsProductsTableMap::COL_ID, $bsContents->getIdProduct(), $comparison);
        } elseif ($bsContents instanceof ObjectCollection) {
            return $this
                ->useBsContentsQuery()
                ->filterByPrimaryKeys($bsContents->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByBsContents() only accepts arguments of type \AuBoisDesSylves\Propel\Models\BsContents or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BsContents relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function joinBsContents($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BsContents');

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
            $this->addJoinObject($join, 'BsContents');
        }

        return $this;
    }

    /**
     * Use the BsContents relation BsContents object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \AuBoisDesSylves\Propel\Models\BsContentsQuery A secondary query class using the current class as primary query
     */
    public function useBsContentsQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBsContents($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BsContents', '\AuBoisDesSylves\Propel\Models\BsContentsQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ChildBsProducts $bsProducts Object to remove from the list of results
     *
     * @return $this|ChildBsProductsQuery The current query, for fluid interface
     */
    public function prune($bsProducts = null)
    {
        if ($bsProducts) {
            $this->addUsingAlias(BsProductsTableMap::COL_ID, $bsProducts->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the bs_products table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BsProductsTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BsProductsTableMap::clearInstancePool();
            BsProductsTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BsProductsTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BsProductsTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            BsProductsTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            BsProductsTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BsProductsQuery
