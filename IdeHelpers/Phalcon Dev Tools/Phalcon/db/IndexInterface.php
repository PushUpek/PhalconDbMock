<?php

namespace Phalcon\Db;

/**
 * Phalcon\Db\IndexInterface
 * Interface for Phalcon\Db\Index
 */
interface IndexInterface {

    /**
     * Phalcon\Db\Index constructor
     *
     * @param string $indexName
     * @param array $columns
     * @param string $type
     */
    public function __construct($indexName, $columns, $type = null);

    /**
     * Gets the index name
     *
     * @return string
     */
    public function getName();

    /**
     * Gets the columns that comprends the index
     *
     * @return array
     */
    public function getColumns();

    /**
     * Gets the index type
     *
     * @return string
     */
    public function getType();

    /**
     * Restore a Phalcon\Db\Index object from export
     *
     * @param array $data
     * @return IndexInterface
     */
    public static function __set_state($data);

}
