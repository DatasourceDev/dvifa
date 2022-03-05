<?php

/**
 * This is the model base class for the table "receipt_approver".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ReceiptApprover".
 *
 * Columns in table "receipt_approver" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $name
 * @property string $position
 * @property integer $is_default
 *
 */
abstract class BaseReceiptApprover extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'receipt_approver';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ReceiptApprover|ReceiptApprovers', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('is_default', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>80),
			array('position', 'length', 'max'=>160),
			array('name, position, is_default', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, position, is_default', 'safe', 'on'=>'search'),
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
			'position' => Yii::t('app', 'Position'),
			'is_default' => Yii::t('app', 'Is Default'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('position', $this->position, true);
		$criteria->compare('is_default', $this->is_default);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}