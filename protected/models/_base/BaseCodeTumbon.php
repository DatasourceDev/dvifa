<?php

/**
 * This is the model base class for the table "code_tumbon".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "CodeTumbon".
 *
 * Columns in table "code_tumbon" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $name
 * @property integer $code_amphur_id
 * @property integer $code_province_id
 *
 */
abstract class BaseCodeTumbon extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'code_tumbon';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'CodeTumbon|CodeTumbons', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('id, code_amphur_id, code_province_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('id, name, code_amphur_id, code_province_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, code_amphur_id, code_province_id', 'safe', 'on'=>'search'),
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
			'code_amphur_id' => Yii::t('app', 'Code Amphur'),
			'code_province_id' => Yii::t('app', 'Code Province'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('code_amphur_id', $this->code_amphur_id);
		$criteria->compare('code_province_id', $this->code_province_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}