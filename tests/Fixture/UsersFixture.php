<?php
namespace Xety\Cake3Sluggable\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class UsersFixture extends TestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = [
		'id' => ['type' => 'integer'],
		'username' => ['type' => 'string', 'length' => 20],
		'slug' => ['type' => 'string', 'length' => 20],
		'_constraints' => [
			'primary' => ['type' => 'primary', 'columns' => ['id']],
			'username' => ['type' => 'unique', 'columns' => ['username']]
		],
		'_options' => [
			'engine' => 'InnoDB', 'collation' => 'utf8_general_ci'
		],
	];

/**
 * Records
 *
 * @var array
 */
	public $records = [
		[
			'username' => 'Mariano',
			'slug' => 'mariano'
		],
		[
			'username' => 'Larry',
			'slug' => 'larry'
		]
	];
}
