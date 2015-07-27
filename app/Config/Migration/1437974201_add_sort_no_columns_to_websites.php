<?php
class AddSortNoColumnsToWebsites extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'add_sort_no_columns_to_websites';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
            'create_field' => array(
                'websites' => array(
                    'sort_no' => array(
                        'type'    => 'integer',
                        'default' => '0',
                        'after'   => 'descrption'
                    )
                )
            )
		),
		'down' => array(
            'drop_field' => array(
                'websites' => array(
                    'sort_no'
                )
            )
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
		return true;
	}
}
