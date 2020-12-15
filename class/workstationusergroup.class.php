<?php

class WorkstationUserGroup extends SeedObject
{
	/** @var string $table_element Table name in SQL */
	public $table_element = 'workstation_workstation_usergroup';

	/** @var string $element Name of the element (tip for better integration in Dolibarr: this value should be the reflection of the class name with ucfirst() function) */
	public $element = 'workstationusergroup';

	public $fields = array(
		'fk_workstation' => array ('type' => 'integer'),
		'fk_usergroup' => array ('type' => 'integer')
	);

	/**
	 * WorkstationUserGroup constructor.
	 * @param DoliDB    $db    Database connector
	 */
	public function __construct($db)
	{
		$this->db = $db;

		$this->init();
	}

	public function getNomUrl($getnomurlparam = '')
	{
		return $this->label;
	}
}
