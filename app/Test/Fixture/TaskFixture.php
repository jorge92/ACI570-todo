<?php
/**
 * TaskFixture
 *
 */
class TaskFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'task_list_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'task_list_id' => array('column' => 'task_list_id', 'unique' => 0),
			'person_id' => array('column' => 'person_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'task_list_id' => 1,
			'person_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'created' => '2013-11-14 20:00:25',
			'modified' => '2013-11-14 20:00:25'
		),
	);

}
