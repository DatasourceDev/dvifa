<?php

/**
 * This is the model base class for the table "exam_application_speaking_data".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ExamApplicationSpeakingData".
 *
 * Columns in table "exam_application_speaking_data" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $exam_application_id
 * @property integer $exam_speaking_id
 * @property string $exam_data
 *
 */
abstract class BaseExamApplicationSpeakingData extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'exam_application_speaking_data';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ExamApplicationSpeakingData|ExamApplicationSpeakingDatas', $n);
	}

	public static function representingColumn() {
		return 'exam_data';
	}

	public function rules() {
		return array(
			array('exam_application_id, exam_speaking_id', 'required'),
			array('exam_application_id, exam_speaking_id', 'numerical', 'integerOnly'=>true),
			array('exam_data', 'length', 'max'=>50),
			array('exam_data', 'default', 'setOnEmpty' => true, 'value' => null),
			array('exam_application_id, exam_speaking_id, exam_data', 'safe', 'on'=>'search'),
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
			'exam_application_id' => Yii::t('app', 'Exam Application'),
			'exam_speaking_id' => Yii::t('app', 'Exam Speaking'),
			'exam_data' => Yii::t('app', 'Exam Data'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('exam_application_id', $this->exam_application_id);
		$criteria->compare('exam_speaking_id', $this->exam_speaking_id);
		$criteria->compare('exam_data', $this->exam_data, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}