<?php
/**
 * PostFixture
 *
 */
class PostFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'body' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'title' => 'タイトル',
			'body' => 'これは、記事の本文です。',
			'created' => '2014-07-28 20:20:58',
			'modified' => null
		),
		array(
			'id' => '2',
			'title' => 'またタイトル',
			'body' => 'そこに本文が続きます。',
			'created' => '2014-07-28 20:20:58',
			'modified' => null
		),
		array(
			'id' => '3',
			'title' => 'タイトルの逆襲',
			'body' => 'こりゃ本当にわくわくする！うそ。',
			'created' => '2014-07-28 20:20:58',
			'modified' => null
		),
	);

}
