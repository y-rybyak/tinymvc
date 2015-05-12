<?php

abstract class BaseModel
{

    public static $tableName = '';
    public static $primaryKey = '';

    public function __construct($data = [])
    {
        if (!empty($data)) {
            foreach ($this as $field => $trash) {
                if (isset($data[$field])) {
                    $this->$field = $data[$field];
                }
            }
        }
    }

    /**
     * @return static[]
     */
    public static function all()
    {
        $db = Db::getInstance();
        $req = $db->query(sprintf('SELECT * FROM %s', static::$tableName))->fetchAll(PDO::FETCH_ASSOC);

        $result = [];

        foreach ($req as $row){
            $result[] = new static($row);
        }

        return $result;
    }

    /**
     * @param $id
     * @return static
     */
    public static function find($id)
    {
        $db = Db::getInstance();
        // we make sure $id is an integer
        $id = (int)$id;
        $req = $db->prepare(sprintf('SELECT * FROM posts WHERE %s = :id', static::$primaryKey));
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(['id' => $id]);
        $post = $req->fetch(PDO::FETCH_ASSOC);

        return new static($post);
    }

    /**
     * $params = [
     *  'field1' => 'val1',
     *  'field2' => 'val2',
     *  ...
     * ]
     *
     * @param array $searchArray
     * @param bool $one
     * @return PDOStatement
     * @throws Exception
     */
    private static function searchMech(array $searchArray, $one = true)
    {
        $obj = new static($searchArray);

        $where = [];
        $params = [];
        foreach ($obj as $field => $value)
        {
            if (!empty($value))
            {
                $where[] = sprintf('%s = :%s', $field, $field);
                $params[':'.$field] = $value;
            }
        }

        if (empty($where))
        {
            throw new Exception('Bad search! Look args');
        }

        if ($one){
            $limit = "LIMIT 1";
        }else{
            $limit = '';
        }

        $db = Db::getInstance();
        $statement = $db->prepare(
            sprintf('SELECT * FROM %s WHERE %s %s',
                static::$tableName,
                implode(' AND ', $where),
                $limit)
        );
        $statement->execute($params);

        return $statement;
    }

    /**
     * @param array $searchArray
     * @return static
     * @throws Exception
     */
    public static function search(array $searchArray){
        $db = self::searchMech($searchArray);

        $result = $db->fetch(PDO::FETCH_ASSOC);

        return new static($result);
    }

    /**
     * @param array $searchArray
     * @return static[]
     * @throws Exception
     */
    public static function searchAll(array $searchArray){
        $db = self::searchMech($searchArray, false);

        $req = $db->fetchAll(PDO::FETCH_ASSOC);

        $result = [];

        foreach ($req as $row){
            $result[] = new static($row);
        }

        return $result;
    }

}