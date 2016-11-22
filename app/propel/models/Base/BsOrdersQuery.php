<?php

namespace AuBoisDesSylves\Propel\Models\Base;

use \Exception;
use \PDO;
use AuBoisDesSylves\Propel\Models\BsOrders as ChildBsOrders;
use AuBoisDesSylves\Propel\Models\BsOrdersQuery as ChildBsOrdersQuery;
use AuBoisDesSylves\Propel\Models\Map\BsOrdersTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'bs_orders' table.
 *
 * 
 *
 * @method     ChildBsOrdersQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ChildBsOrdersQuery orderByIdUser($order = Criteria::ASC) Order by the id_user column
 * @method     ChildBsOrdersQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     ChildBsOrdersQuery orderByDateEdited($order = Criteria::ASC) Order by the date_edited column
 * @method     ChildBsOrdersQuery orderByDateCancelled($order = Criteria::ASC) Order by the date_cancelled column
 * @method     ChildBsOrdersQuery orderByIdState($order = Criteria::ASC) Order by the id_state column
 *
 * @method     ChildBsOrdersQuery groupById() Group by the id column
 * @method     ChildBsOrdersQuery groupByIdUser() Group by the id_user column
 * @method     ChildBsOrdersQuery groupByDateCreated() Group by the date_created column
 * @method     ChildBsOrdersQuery groupByDateEdited() Group by the date_edited column
 * @method     ChildBsOrdersQuery groupByDateCancelled() Group by the date_cancelled column
 * @method     ChildBsOrdersQuery groupByIdState() Group by the id_state column
 *
 * @method     ChildBsOrdersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildBsOrdersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildBsOrdersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildBsOrdersQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildBsOrdersQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildBsOrdersQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildBsOrdersQuery leftJoinBsStates($relationAlias = null) Adds a LEFT JOIN clause to the query using the BsStates relation
 * @method     ChildBsOrdersQuery rightJoinBsStates($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BsStates relation
 * @method     ChildBsOrdersQuery innerJoinBsStates($relationAlias = null) Adds a INNER JOIN clause to the query using the BsStates relation
 *
 * @method     ChildBsOrdersQuery joinWithBsStates($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BsStates relation
 *
 * @method     ChildBsOrdersQuery leftJoinWithBsStates() Adds a LEFT JOIN clause and with to the query using the BsStates relation
 * @method     ChildBsOrdersQuery rightJoinWithBsStates() Adds a RIGHT JOIN clause and with to the query using the BsStates relation
 * @method     ChildBsOrdersQuery innerJoinWithBsStates() Adds a INNER JOIN clause and with to the query using the BsStates relation
 *
 * @method     ChildBsOrdersQuery leftJoinBsUsers($relationAlias = null) Adds a LEFT JOIN clause to the query using the BsUsers relation
 * @method     ChildBsOrdersQuery rightJoinBsUsers($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BsUsers relation
 * @method     ChildBsOrdersQuery innerJoinBsUsers($relationAlias = null) Adds a INNER JOIN clause to the query using the BsUsers relation
 *
 * @method     ChildBsOrdersQuery joinWithBsUsers($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BsUsers relation
 *
 * @method     ChildBsOrdersQuery leftJoinWithBsUsers() Adds a LEFT JOIN clause and with to the query using the BsUsers relation
 * @method     ChildBsOrdersQuery rightJoinWithBsUsers() Adds a RIGHT JOIN clause and with to the query using the BsUsers relation
 * @method     ChildBsOrdersQuery innerJoinWithBsUsers() Adds a INNER JOIN clause and with to the query using the BsUsers relation
 *
 * @method     ChildBsOrdersQuery leftJoinBsContents($relationAlias = null) Adds a LEFT JOIN clause to the query using the BsContents relation
 * @method     ChildBsOrdersQuery rightJoinBsContents($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BsContents relation
 * @method     ChildBsOrdersQuery innerJoinBsContents($relationAlias = null) Adds a INNER JOIN clause to the query using the BsContents relation
 *
 * @method     ChildBsOrdersQuery joinWithBsContents($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the BsContents relation
 *
 * @method     ChildBsOrdersQuery leftJoinWithBsContents() Adds a LEFT JOIN clause and with to the query using the BsContents relation
 * @method     ChildBsOrdersQuery rightJoinWithBsContents() Adds a RIGHT JOIN clause and with to the query using the BsContents relation
 * @method     ChildBsOrdersQuery innerJoinWithBsContents() Adds a INNER JOIN clause and with to the query using the BsContents relation
 *
 * @method     \AuBoisDesSylves\Propel\Models\BsStatesQuery|\AuBoisDesSylves\Propel\Models\BsUsersQuery|\AuBoisDesSylves\Propel\Models\BsContentsQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildBsOrders findOne(ConnectionInterface $con = null) Return the first ChildBsOrders matching the query
 * @method     ChildBsOrders findOneOrCreate(ConnectionInterface $con = null) Return the first ChildBsOrders matching the query, or a new ChildBsOrders object populated from the query conditions when no match is found
 *
 * @method     ChildBsOrders findOneById(int $id) Return the first ChildBsOrders filtered by the id column
 * @method     ChildBsOrders findOneByIdUser(int $id_user) Return the first ChildBsOrders filtered by the id_user column
 * @method     ChildBsOrders findOneByDateCreated(string $date_created) Return the first ChildBsOrders filtered by the date_created column
 * @method     ChildBsOrders findOneByDateEdited(string $date_edited) Return the first ChildBsOrders filtered by the date_edited column
 * @method     ChildBsOrders findOneByDateCancelled(string $date_cancelled) Return the first ChildBsOrders filtered by the date_cancelled column
 * @method     ChildBsOrders findOneByIdState(int $id_state) Return the first ChildBsOrders filtered by the id_state column *

 * @method     ChildBsOrders requirePk($key, ConnectionInterface $con = null) Return the ChildBsOrders by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsOrders requireOne(ConnectionInterface $con = null) Return the first ChildBsOrders matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBsOrders requireOneById(int $id) Return the first ChildBsOrders filtered by the id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsOrders requireOneByIdUser(int $id_user) Return the first ChildBsOrders filtered by the id_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsOrders requireOneByDateCreated(string $date_created) Return the first ChildBsOrders filtered by the date_created column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsOrders requireOneByDateEdited(string $date_edited) Return the first ChildBsOrders filtered by the date_edited column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsOrders requireOneByDateCancelled(string $date_cancelled) Return the first ChildBsOrders filtered by the date_cancelled column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildBsOrders requireOneByIdState(int $id_state) Return the first ChildBsOrders filtered by the id_state column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildBsOrders[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildBsOrders objects based on current ModelCriteria
 * @method     ChildBsOrders[]|ObjectCollection findById(int $id) Return ChildBsOrders objects filtered by the id column
 * @method     ChildBsOrders[]|ObjectCollection findByIdUser(int $id_user) Return ChildBsOrders objects filtered by the id_user column
 * @method     ChildBsOrders[]|ObjectCollection findByDateCreated(string $date_created) Return ChildBsOrders objects filtered by the date_created column
 * @method     ChildBsOrders[]|ObjectCollection findByDateEdited(string $date_edited) Return ChildBsOrders objects filtered by the date_edited column
 * @method     ChildBsOrders[]|ObjectCollection findByDateCancelled(string $date_cancelled) Return ChildBsOrders objects filtered by the date_cancelled column
 * @method     ChildBsOrders[]|ObjectCollection findByIdState(int $id_state) Return ChildBsOrders objects filtered by the id_state column
 * @method     ChildBsOrders[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class BsOrdersQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \AuBoisDesSylves\Propel\Models\Base\BsOrdersQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\AuBoisDesSylves\\Propel\\Models\\BsOrders', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildBsOrdersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildBsOrdersQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildBsOrdersQuery) {
            return $criteria;
        }
        $query = new ChildBsOrdersQuery();
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
     * @return ChildBsOrders|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(BsOrdersTableMap::DATABASE_NAME);
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = BsOrdersTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildBsOrders A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id, id_user, date_created, date_edited, date_cancelled, id_state FROM bs_orders WHERE id = :p0';
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
            /** @var ChildBsOrders $obj */
            $obj = new ChildBsOrders();
            $obj->hydrate($row);
            BsOrdersTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildBsOrders|array|mixed the result, formatted by the current formatter
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
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BsOrdersTableMap::COL_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BsOrdersTableMap::COL_ID, $keys, Criteria::IN);
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
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsOrdersTableMap::COL_ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_user column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUser(1234); // WHERE id_user = 1234
     * $query->filterByIdUser(array(12, 34)); // WHERE id_user IN (12, 34)
     * $query->filterByIdUser(array('min' => 12)); // WHERE id_user > 12
     * </code>
     *
     * @see       filterByBsUsers()
     *
     * @param     mixed $idUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByIdUser($idUser = null, $comparison = null)
    {
        if (is_array($idUser)) {
            $useMinMax = false;
            if (isset($idUser['min'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_ID_USER, $idUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUser['max'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_ID_USER, $idUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsOrdersTableMap::COL_ID_USER, $idUser, $comparison);
    }

    /**
     * Filter the query on the date_created column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreated('2011-03-14'); // WHERE date_created = '2011-03-14'
     * $query->filterByDateCreated('now'); // WHERE date_created = '2011-03-14'
     * $query->filterByDateCreated(array('max' => 'yesterday')); // WHERE date_created > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreated The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByDateCreated($dateCreated = null, $comparison = null)
    {
        if (is_array($dateCreated)) {
            $useMinMax = false;
            if (isset($dateCreated['min'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreated['max'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsOrdersTableMap::COL_DATE_CREATED, $dateCreated, $comparison);
    }

    /**
     * Filter the query on the date_edited column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEdited('2011-03-14'); // WHERE date_edited = '2011-03-14'
     * $query->filterByDateEdited('now'); // WHERE date_edited = '2011-03-14'
     * $query->filterByDateEdited(array('max' => 'yesterday')); // WHERE date_edited > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEdited The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByDateEdited($dateEdited = null, $comparison = null)
    {
        if (is_array($dateEdited)) {
            $useMinMax = false;
            if (isset($dateEdited['min'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_DATE_EDITED, $dateEdited['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEdited['max'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_DATE_EDITED, $dateEdited['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsOrdersTableMap::COL_DATE_EDITED, $dateEdited, $comparison);
    }

    /**
     * Filter the query on the date_cancelled column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCancelled('2011-03-14'); // WHERE date_cancelled = '2011-03-14'
     * $query->filterByDateCancelled('now'); // WHERE date_cancelled = '2011-03-14'
     * $query->filterByDateCancelled(array('max' => 'yesterday')); // WHERE date_cancelled > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCancelled The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByDateCancelled($dateCancelled = null, $comparison = null)
    {
        if (is_array($dateCancelled)) {
            $useMinMax = false;
            if (isset($dateCancelled['min'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_DATE_CANCELLED, $dateCancelled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCancelled['max'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_DATE_CANCELLED, $dateCancelled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsOrdersTableMap::COL_DATE_CANCELLED, $dateCancelled, $comparison);
    }

    /**
     * Filter the query on the id_state column
     *
     * Example usage:
     * <code>
     * $query->filterByIdState(1234); // WHERE id_state = 1234
     * $query->filterByIdState(array(12, 34)); // WHERE id_state IN (12, 34)
     * $query->filterByIdState(array('min' => 12)); // WHERE id_state > 12
     * </code>
     *
     * @see       filterByBsStates()
     *
     * @param     mixed $idState The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByIdState($idState = null, $comparison = null)
    {
        if (is_array($idState)) {
            $useMinMax = false;
            if (isset($idState['min'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_ID_STATE, $idState['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idState['max'])) {
                $this->addUsingAlias(BsOrdersTableMap::COL_ID_STATE, $idState['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BsOrdersTableMap::COL_ID_STATE, $idState, $comparison);
    }

    /**
     * Filter the query by a related \AuBoisDesSylves\Propel\Models\BsStates object
     *
     * @param \AuBoisDesSylves\Propel\Models\BsStates|ObjectCollection $bsStates The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByBsStates($bsStates, $comparison = null)
    {
        if ($bsStates instanceof \AuBoisDesSylves\Propel\Models\BsStates) {
            return $this
                ->addUsingAlias(BsOrdersTableMap::COL_ID_STATE, $bsStates->getId(), $comparison);
        } elseif ($bsStates instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BsOrdersTableMap::COL_ID_STATE, $bsStates->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByBsStates() only accepts arguments of type \AuBoisDesSylves\Propel\Models\BsStates or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BsStates relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function joinBsStates($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BsStates');

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
            $this->addJoinObject($join, 'BsStates');
        }

        return $this;
    }

    /**
     * Use the BsStates relation BsStates object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \AuBoisDesSylves\Propel\Models\BsStatesQuery A secondary query class using the current class as primary query
     */
    public function useBsStatesQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBsStates($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BsStates', '\AuBoisDesSylves\Propel\Models\BsStatesQuery');
    }

    /**
     * Filter the query by a related \AuBoisDesSylves\Propel\Models\BsUsers object
     *
     * @param \AuBoisDesSylves\Propel\Models\BsUsers|ObjectCollection $bsUsers The related object(s) to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByBsUsers($bsUsers, $comparison = null)
    {
        if ($bsUsers instanceof \AuBoisDesSylves\Propel\Models\BsUsers) {
            return $this
                ->addUsingAlias(BsOrdersTableMap::COL_ID_USER, $bsUsers->getId(), $comparison);
        } elseif ($bsUsers instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(BsOrdersTableMap::COL_ID_USER, $bsUsers->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByBsUsers() only accepts arguments of type \AuBoisDesSylves\Propel\Models\BsUsers or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the BsUsers relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function joinBsUsers($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('BsUsers');

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
            $this->addJoinObject($join, 'BsUsers');
        }

        return $this;
    }

    /**
     * Use the BsUsers relation BsUsers object
     *
     * @see useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \AuBoisDesSylves\Propel\Models\BsUsersQuery A secondary query class using the current class as primary query
     */
    public function useBsUsersQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinBsUsers($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'BsUsers', '\AuBoisDesSylves\Propel\Models\BsUsersQuery');
    }

    /**
     * Filter the query by a related \AuBoisDesSylves\Propel\Models\BsContents object
     *
     * @param \AuBoisDesSylves\Propel\Models\BsContents|ObjectCollection $bsContents the related object to use as filter
     * @param string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChildBsOrdersQuery The current query, for fluid interface
     */
    public function filterByBsContents($bsContents, $comparison = null)
    {
        if ($bsContents instanceof \AuBoisDesSylves\Propel\Models\BsContents) {
            return $this
                ->addUsingAlias(BsOrdersTableMap::COL_ID, $bsContents->getIdOrder(), $comparison);
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
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
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
     * @param   ChildBsOrders $bsOrders Object to remove from the list of results
     *
     * @return $this|ChildBsOrdersQuery The current query, for fluid interface
     */
    public function prune($bsOrders = null)
    {
        if ($bsOrders) {
            $this->addUsingAlias(BsOrdersTableMap::COL_ID, $bsOrders->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the bs_orders table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(BsOrdersTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BsOrdersTableMap::clearInstancePool();
            BsOrdersTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(BsOrdersTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(BsOrdersTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            
            BsOrdersTableMap::removeInstanceFromPool($criteria);
        
            $affectedRows += ModelCriteria::delete($con);
            BsOrdersTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // BsOrdersQuery
