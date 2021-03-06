<?php

/**
 * This is the model base class for the table "exam_schedule_account".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ExamScheduleAccount".
 *
 * Columns in table "exam_schedule_account" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $exam_schedule_id
 * @property string $account_id
 * @property integer $max_quota
 * @property string $expire_date
 * @property integer $is_confirm
 * @property string $office_address
 * @property string $office_co_user
 * @property string $office_phone
 * @property string $office_doc_no
 * @property string $office_doc_date
 * @property integer $office_department_id
 * @property string $office_department_name
 * @property string $office_office
 * @property integer $is_save_office
 * @property integer $office_department_type_id
 * @property integer $office_objective_id
 * @property string $office_tax
 * @property string $confirm_date
 * @property string $due_date
 * @property string $office_suffix
 * @property integer $preserved_quota
 * @property string $payment_tax
 * @property string $payment_suffix
 * @property integer $is_paid
 * @property string $payment_date
 * @property string $office_objective
 *
 */
abstract class BaseExamScheduleAccount extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'exam_schedule_account';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ExamScheduleAccount|ExamScheduleAccounts', $n);
	}

	public static function representingColumn() {
		return array(
			'exam_schedule_id',
			'account_id',
		);
	}

	public function rules() {
		return array(
			array('exam_schedule_id, account_id', 'required'),
			array('max_quota, is_confirm, office_department_id, is_save_office, office_department_type_id, office_objective_id, preserved_quota, is_paid', 'numerical', 'integerOnly'=>true),
			array('exam_schedule_id, account_id', 'length', 'max'=>10),
			array('office_co_user, office_department_name, office_office', 'length', 'max'=>160),
			array('office_phone, office_doc_no', 'length', 'max'=>60),
			array('office_tax, payment_tax', 'length', 'max'=>13),
			array('office_suffix, payment_suffix', 'length', 'max'=>2),
			array('expire_date, office_address, office_doc_date, confirm_date, due_date, payment_date, office_objective', 'safe'),
			array('max_quota, expire_date, is_confirm, office_address, office_co_user, office_phone, office_doc_no, office_doc_date, office_department_id, office_department_name, office_office, is_save_office, office_department_type_id, office_objective_id, office_tax, confirm_date, due_date, office_suffix, preserved_quota, payment_tax, payment_suffix, is_paid, payment_date, office_objective', 'default', 'setOnEmpty' => true, 'value' => null),
			array('exam_schedule_id, account_id, max_quota, expire_date, is_confirm, office_address, office_co_user, office_phone, office_doc_no, office_doc_date, office_department_id, office_department_name, office_office, is_save_office, office_department_type_id, office_objective_id, office_tax, confirm_date, due_date, office_suffix, preserved_quota, payment_tax, payment_suffix, is_paid, payment_date, office_objective', 'safe', 'on'=>'search'),
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
			'exam_schedule_id' => null,
			'account_id' => null,
			'max_quota' => Yii::t('app', 'Max Quota'),
			'expire_date' => Yii::t('app', 'Expire Date'),
			'is_confirm' => Yii::t('app', 'Is Confirm'),
			'office_address' => Yii::t('app', 'Office Address'),
			'office_co_user' => Yii::t('app', 'Office Co User'),
			'office_phone' => Yii::t('app', 'Office Phone'),
			'office_doc_no' => Yii::t('app', 'Office Doc No'),
			'office_doc_date' => Yii::t('app', 'Office Doc Date'),
			'office_department_id' => Yii::t('app', 'Office Department'),
			'office_department_name' => Yii::t('app', 'Office Department Name'),
			'office_office' => Yii::t('app', 'Office Office'),
			'is_save_office' => Yii::t('app', 'Is Save Office'),
			'office_department_type_id' => Yii::t('app', 'Office Department Type'),
			'office_objective_id' => Yii::t('app', 'Office Objective'),
			'office_tax' => Yii::t('app', 'Office Tax'),
			'confirm_date' => Yii::t('app', 'Confirm Date'),
			'due_date' => Yii::t('app', 'Due Date'),
			'office_suffix' => Yii::t('app', 'Office Suffix'),
			'preserved_quota' => Yii::t('app', 'Preserved Quota'),
			'payment_tax' => Yii::t('app', 'Payment Tax'),
			'payment_suffix' => Yii::t('app', 'Payment Suffix'),
			'is_paid' => Yii::t('app', 'Is Paid'),
			'payment_date' => Yii::t('app', 'Payment Date'),
			'office_objective' => Yii::t('app', 'Office Objective'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('exam_schedule_id', $this->exam_schedule_id);
		$criteria->compare('account_id', $this->account_id);
		$criteria->compare('max_quota', $this->max_quota);
		$criteria->compare('expire_date', $this->expire_date, true);
		$criteria->compare('is_confirm', $this->is_confirm);
		$criteria->compare('office_address', $this->office_address, true);
		$criteria->compare('office_co_user', $this->office_co_user, true);
		$criteria->compare('office_phone', $this->office_phone, true);
		$criteria->compare('office_doc_no', $this->office_doc_no, true);
		$criteria->compare('office_doc_date', $this->office_doc_date, true);
		$criteria->compare('office_department_id', $this->office_department_id);
		$criteria->compare('office_department_name', $this->office_department_name, true);
		$criteria->compare('office_office', $this->office_office, true);
		$criteria->compare('is_save_office', $this->is_save_office);
		$criteria->compare('office_department_type_id', $this->office_department_type_id);
		$criteria->compare('office_objective_id', $this->office_objective_id);
		$criteria->compare('office_tax', $this->office_tax, true);
		$criteria->compare('confirm_date', $this->confirm_date, true);
		$criteria->compare('due_date', $this->due_date, true);
		$criteria->compare('office_suffix', $this->office_suffix, true);
		$criteria->compare('preserved_quota', $this->preserved_quota);
		$criteria->compare('payment_tax', $this->payment_tax, true);
		$criteria->compare('payment_suffix', $this->payment_suffix, true);
		$criteria->compare('is_paid', $this->is_paid);
		$criteria->compare('payment_date', $this->payment_date, true);
		$criteria->compare('office_objective', $this->office_objective, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}