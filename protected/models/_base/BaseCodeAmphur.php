<?php

/**
 * This is the model base class for the table "code_amphur".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "CodeAmphur".
 *
 * Columns in table "code_amphur" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $name
 * @property integer $code_province_id
 *
 */
abstract class BaseCodeAmphur extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'code_amphur';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'CodeAmphur|CodeAmphurs', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('id, code_province_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('id, name, code_province_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, code_province_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'code_province_id' => Yii::t('app', 'Code Province'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('code_province_id', $this->code_province_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}