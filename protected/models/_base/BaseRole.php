<?php

/**
 * This is the model base class for the table "role".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Role".
 *
 * Columns in table "role" available as properties of the model,
 * followed by relations of table "role" available as properties of the model.
 *
 * @property integer $id
 * @property string $name
 *
 * @property Permission[] $permissions
 * @property User[] $users
 */
abstract class BaseRole extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'role';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Role|Roles', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('name', 'length', 'max'=>60),
			array('name', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'permissions' => array(self::MANY_MANY, 'Permission', 'role_permission(role_id, permission_id)'),
			'users' => array(self::HAS_MANY, 'User', 'role_id'),
		);
	}

	public function pivotModels() {
		return array(
			'permissions' => 'RolePermission',
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'permissions' => null,
			'users' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}