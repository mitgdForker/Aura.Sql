<?php
namespace Aura\Sql\Connection;

/**
 * Test class for Mysql.
 * Generated by PHPUnit on 2011-06-21 at 16:49:57.
 */
class SqliteTest extends AbstractConnectionTest
{
    protected $extension = 'pdo_sqlite';
    
    protected $connection_type = 'sqlite';    
    
    protected $expect_quote_scalar = "'\"foo\" bar ''baz'''";
    
    protected $expect_quote_array = "'\"foo\"', 'bar', '''baz'''";
    
    protected $expect_quote_into = "foo = '''bar'''";
    
    protected $expect_quote_into_many = "foo = '''bar''' AND zim = '''baz'''";
    
    protected $expect_quote_multi = "id = 1 AND foo = 'bar' AND zim IN('dib', 'gir', 'baz')";
    
    protected $expect_quote_name_table_as_alias = '"table" AS "alias"';
    
    protected $expect_quote_name_table_col_as_alias = '"table"."col" AS "alias"';
    
    protected $expect_quote_name_table_alias = '"table" "alias"';
    
    protected $expect_quote_name_table_col_alias = '"table"."col" "alias"';
    
    protected $expect_quote_name_plain = '"table"';
    
    protected $expect_quote_names_in = "*, *.*, \"foo\".\"bar\", CONCAT('foo.bar', \"baz.dib\") AS \"zim\"";
}
