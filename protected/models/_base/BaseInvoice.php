<?php

/**
 * This is the model base class for the table "invoice".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Invoice".
 *
 * Columns in table "invoice" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $exam_application
 * @property string $exam_schedule_id
 *
 */
abstract class BaseInvoice extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'invoice';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Invoice|Invoices', $n);
	}

	public static function representingColumn() {
		return 'id';
	}

	public function rules() {
		return array(
			array('exam_application, exam_schedule_id', 'length', 'max'=>10),
			array('exam_application, exam_schedule_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, exam_application, exam_schedule_id', 'safe', 'on'=>'search'),
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
			'exam_application' => Yii::t('app', 'Exam Application'),
			'exam_schedule_id' => Yii::t('app', 'Exam Schedule'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('exam_application', $this->exam_application, true);
		$criteria->compare('exam_schedule_id', $this->exam_schedule_id, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}