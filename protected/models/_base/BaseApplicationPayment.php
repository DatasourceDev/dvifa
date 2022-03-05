<?php

/**
 * This is the model base class for the table "application_payment".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ApplicationPayment".
 *
 * Columns in table "application_payment" available as properties of the model,
 * followed by relations of table "application_payment" available as properties of the model.
 *
 * @property string $id
 * @property string $exam_application_id
 * @property string $amount
 * @property string $ref1
 * @property string $ref2
 * @property string $ref3
 * @property string $ref4
 * @property string $channel
 * @property string $com_code
 * @property string $bank_ref
 * @property string $bank_code
 * @property string $payment_date
 * @property integer $is_test
 * @property string $test_expect_result
 * @property string $created
 * @property string $modified
 * @property string $issue_date
 * @property string $due_date
 * @property string $payment_log
 * @property string $payment_status
 * @property string $payment_amount
 *
 * @property ExamApplication $examApplication
 */
abstract class BaseApplicationPayment extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'application_payment';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ApplicationPayment|ApplicationPayments', $n);
	}

	public static function representingColumn() {
		return 'amount';
	}

	public function rules() {
		return array(
			array('is_test', 'numerical', 'integerOnly'=>true),
			array('exam_application_id, amount', 'length', 'max'=>10),
			array('ref1, ref2, ref3, ref4, channel, com_code, bank_ref', 'length', 'max'=>20),
			array('bank_code', 'length', 'max'=>3),
			array('test_expect_result, payment_status', 'length', 'max'=>60),
			array('payment_amount', 'length', 'max'=>16),
			array('payment_date, created, modified, issue_date, due_date, payment_log', 'safe'),
			array('exam_application_id, amount, ref1, ref2, ref3, ref4, channel, com_code, bank_ref, bank_code, payment_date, is_test, test_expect_result, created, modified, issue_date, due_date, payment_log, payment_status, payment_amount', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, exam_application_id, amount, ref1, ref2, ref3, ref4, channel, com_code, bank_ref, bank_code, payment_date, is_test, test_expect_result, created, modified, issue_date, due_date, payment_log, payment_status, payment_amount', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'examApplication' => array(self::BELONGS_TO, 'ExamApplication', 'exam_application_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'exam_application_id' => null,
			'amount' => Yii::t('app', 'Amount'),
			'ref1' => Yii::t('app', 'Ref1'),
			'ref2' => Yii::t('app', 'Ref2'),
			'ref3' => Yii::t('app', 'Ref3'),
			'ref4' => Yii::t('app', 'Ref4'),
			'channel' => Yii::t('app', 'Channel'),
			'com_code' => Yii::t('app', 'Com Code'),
			'bank_ref' => Yii::t('app', 'Bank Ref'),
			'bank_code' => Yii::t('app', 'Bank Code'),
			'payment_date' => Yii::t('app', 'Payment Date'),
			'is_test' => Yii::t('app', 'Is Test'),
			'test_expect_result' => Yii::t('app', 'Test Expect Result'),
			'created' => Yii::t('app', 'Created'),
			'modified' => Yii::t('app', 'Modified'),
			'issue_date' => Yii::t('app', 'Issue Date'),
			'due_date' => Yii::t('app', 'Due Date'),
			'payment_log' => Yii::t('app', 'Payment Log'),
			'payment_status' => Yii::t('app', 'Payment Status'),
			'payment_amount' => Yii::t('app', 'Payment Amount'),
			'examApplication' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('exam_application_id', $this->exam_application_id);
		$criteria->compare('amount', $this->amount, true);
		$criteria->compare('ref1', $this->ref1, true);
		$criteria->compare('ref2', $this->ref2, true);
		$criteria->compare('ref3', $this->ref3, true);
		$criteria->compare('ref4', $this->ref4, true);
		$criteria->compare('channel', $this->channel, true);
		$criteria->compare('com_code', $this->com_code, true);
		$criteria->compare('bank_ref', $this->bank_ref, true);
		$criteria->compare('bank_code', $this->bank_code, true);
		$criteria->compare('payment_date', $this->payment_date, true);
		$criteria->compare('is_test', $this->is_test);
		$criteria->compare('test_expect_result', $this->test_expect_result, true);
		$criteria->compare('created', $this->created, true);
		$criteria->compare('modified', $this->modified, true);
		$criteria->compare('issue_date', $this->issue_date, true);
		$criteria->compare('due_date', $this->due_date, true);
		$criteria->compare('payment_log', $this->payment_log, true);
		$criteria->compare('payment_status', $this->payment_status, true);
		$criteria->compare('payment_amount', $this->payment_amount, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}