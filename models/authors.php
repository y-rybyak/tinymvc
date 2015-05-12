<?php

/**
 * Class Post
 */
class Authors extends BaseModel
{
    public static $tableName = 'authors';
    public static $primaryKey = 'id';

    public $id;
    public $author;
    public $content;

}