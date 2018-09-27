<?php

/**
 * Field text
 */
class CMSFieldString extends CMSFieldAbstract
{
    protected static $typeDb = 'VARCHAR';
    public static function quote(pgdb $sql,$v){ return $sql->t($v); }
    public static function quoteArray(pgdb $sql,array $a) { return self::_quoteArray($sql,$a,__CLASS__); }

}