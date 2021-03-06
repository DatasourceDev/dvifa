<?php

/**
 * This is the model base class for the table "exam_type_account".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ExamTypeAccount".
 *
 * Columns in table "exam_type_account" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $exam_type_id
 * @property string $account_type_id
 *
 */
abstract class BaseExamTypeAccount extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'exam_type_account';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ExamTypeAccount|ExamTypeAccounts', $n);
	}

	public static function representingColumn() {
		return array(
			'exam_type_id',
			'account_type_id',
		);
	}

	public function rules() {
		return array(
			array('exam_type_id, account_type_id', 'required'),
			array('exam_type_id, account_type_id', 'length', 'max'=>10),
			array('exam_type_id, account_type_id', 'safe', 'on'=>'search'),
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
			'exam_type_id' => null,
			'account_type_id' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('exam_type_id', $this->exam_type_id);
		$criteria->compare('account_type_id', $this->account_type_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}