<?php

/**
 * This is the model base class for the table "exam_type".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ExamType".
 *
 * Columns in table "exam_type" available as properties of the model,
 * followed by relations of table "exam_type" available as properties of the model.
 *
 * @property string $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property string $default_register_fee
 * @property string $badge_color
 * @property integer $is_active
 * @property string $html_page
 * @property integer $is_special_info
 * @property string $special_info
 * @property string $income_type_id
 *
 * @property AccountType[] $accountTypes
 * @property ExamDefaultGrade[] $examDefaultGrades
 * @property ExamPrerequisite[] $examPrerequisites
 * @property ExamPrerequisite[] $examPrerequisites1
 * @property ExamSchedule[] $examSchedules
 * @property ExamSet[] $examSets
 * @property ExamSubject[] $examSubjects
 */
abstract class BaseExamType extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'exam_type';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ExamType|ExamTypes', $n);
	}

	public static function representingColumn() {
		return 'default_register_fee';
	}

	public function rules() {
		return array(
			array('id', 'required'),
			array('is_active, is_special_info', 'numerical', 'integerOnly'=>true),
			array('id, default_register_fee, income_type_id', 'length', 'max'=>10),
			array('code', 'length', 'max'=>2),
			array('name', 'length', 'max'=>60),
			array('badge_color', 'length', 'max'=>7),
			array('description, html_page, special_info', 'safe'),
			array('code, name, description, default_register_fee, badge_color, is_active, html_page, is_special_info, special_info, income_type_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, code, name, description, default_register_fee, badge_color, is_active, html_page, is_special_info, special_info, income_type_id', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'accountTypes' => array(self::MANY_MANY, 'AccountType', 'exam_type_account(exam_type_id, account_type_id)'),
			'examDefaultGrades' => array(self::HAS_MANY, 'ExamDefaultGrade', 'exam_type_id'),
			'examPrerequisites' => array(self::HAS_MANY, 'ExamPrerequisite', 'exam_type_id'),
			'examPrerequisites1' => array(self::HAS_MANY, 'ExamPrerequisite', 'exam_type_require_id'),
			'examSchedules' => array(self::HAS_MANY, 'ExamSchedule', 'exam_type_id'),
			'examSets' => array(self::HAS_MANY, 'ExamSet', 'exam_type_id'),
			'examSubjects' => array(self::HAS_MANY, 'ExamSubject', 'exam_type_id'),
		);
	}

	public function pivotModels() {
		return array(
			'accountTypes' => 'ExamTypeAccount',
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'code' => Yii::t('app', 'Code'),
			'name' => Yii::t('app', 'Name'),
			'description' => Yii::t('app', 'Description'),
			'default_register_fee' => Yii::t('app', 'Default Register Fee'),
			'badge_color' => Yii::t('app', 'Badge Color'),
			'is_active' => Yii::t('app', 'Is Active'),
			'html_page' => Yii::t('app', 'Html Page'),
			'is_special_info' => Yii::t('app', 'Is Special Info'),
			'special_info' => Yii::t('app', 'Special Info'),
			'income_type_id' => Yii::t('app', 'Income Type'),
			'accountTypes' => null,
			'examDefaultGrades' => null,
			'examPrerequisites' => null,
			'examPrerequisites1' => null,
			'examSchedules' => null,
			'examSets' => null,
			'examSubjects' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('code', $this->code, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('default_register_fee', $this->default_register_fee, true);
		$criteria->compare('badge_color', $this->badge_color, true);
		$criteria->compare('is_active', $this->is_active);
		$criteria->compare('html_page', $this->html_page, true);
		$criteria->compare('is_special_info', $this->is_special_info);
		$criteria->compare('special_info', $this->special_info, true);
		$criteria->compare('income_type_id', $this->income_type_id, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}