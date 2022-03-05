<?php

/**
 * This is the model base class for the table "exam_schedule_import".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ExamScheduleImport".
 *
 * Columns in table "exam_schedule_import" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $exam_schedule_id
 * @property string $exam_schedule_objective_id
 * @property string $user_id
 * @property string $created
 * @property string $modified
 * @property string $course_name
 * @property string $course_date
 * @property string $import_type
 *
 */
abstract class BaseExamScheduleImport extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'exam_schedule_import';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ExamScheduleImport|ExamScheduleImports', $n);
	}

	public static function representingColumn() {
		return 'created';
	}

	public function rules() {
		return array(
			array('exam_schedule_id', 'required'),
			array('exam_schedule_id, exam_schedule_objective_id, user_id, import_type', 'length', 'max'=>10),
			array('course_name', 'length', 'max'=>160),
			array('created, modified, course_date', 'safe'),
			array('exam_schedule_objective_id, user_id, created, modified, course_name, course_date, import_type', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, exam_schedule_id, exam_schedule_objective_id, user_id, created, modified, course_name, course_date, import_type', 'safe', 'on'=>'search'),
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
			'exam_schedule_id' => Yii::t('app', 'Exam Schedule'),
			'exam_schedule_objective_id' => Yii::t('app', 'Exam Schedule Objective'),
			'user_id' => Yii::t('app', 'User'),
			'created' => Yii::t('app', 'Created'),
			'modified' => Yii::t('app', 'Modified'),
			'course_name' => Yii::t('app', 'Course Name'),
			'course_date' => Yii::t('app', 'Course Date'),
			'import_type' => Yii::t('app', 'Import Type'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('exam_schedule_id', $this->exam_schedule_id, true);
		$criteria->compare('exam_schedule_objective_id', $this->exam_schedule_objective_id, true);
		$criteria->compare('user_id', $this->user_id, true);
		$criteria->compare('created', $this->created, true);
		$criteria->compare('modified', $this->modified, true);
		$criteria->compare('course_name', $this->course_name, true);
		$criteria->compare('course_date', $this->course_date, true);
		$criteria->compare('import_type', $this->import_type, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}