<?php

/**
 * This is the model base class for the table "exam_topic".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ExamTopic".
 *
 * Columns in table "exam_topic" available as properties of the model,
 * followed by relations of table "exam_topic" available as properties of the model.
 *
 * @property string $id
 * @property string $exam_subject_id
 * @property string $name
 *
 * @property ApplicationOmr[] $applicationOmrs
 * @property ApplicationScore[] $applicationScores
 * @property ExamSubject $examSubject
 */
abstract class BaseExamTopic extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'exam_topic';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ExamTopic|ExamTopics', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('exam_subject_id', 'required'),
			array('exam_subject_id', 'length', 'max'=>10),
			array('name', 'length', 'max'=>60),
			array('name', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, exam_subject_id, name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'applicationOmrs' => array(self::HAS_MANY, 'ApplicationOmr', 'exam_topic_id'),
			'applicationScores' => array(self::HAS_MANY, 'ApplicationScore', 'exam_topic_id'),
			'examSubject' => array(self::BELONGS_TO, 'ExamSubject', 'exam_subject_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'exam_subject_id' => null,
			'name' => Yii::t('app', 'Name'),
			'applicationOmrs' => null,
			'applicationScores' => null,
			'examSubject' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('exam_subject_id', $this->exam_subject_id);
		$criteria->compare('name', $this->name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}