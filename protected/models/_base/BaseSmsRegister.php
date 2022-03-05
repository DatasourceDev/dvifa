<?php

/**
 * This is the model base class for the table "sms_register".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "SmsRegister".
 *
 * Columns in table "sms_register" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $msisdn
 * @property string $created
 * @property string $transid
 *
 */
abstract class BaseSmsRegister extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'sms_register';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'SmsRegister|SmsRegisters', $n);
	}

	public static function representingColumn() {
		return 'msisdn';
	}

	public function rules() {
		return array(
			array('msisdn', 'required'),
			array('msisdn', 'length', 'max'=>20),
			array('transid', 'length', 'max'=>60),
			array('created', 'safe'),
			array('created, transid', 'default', 'setOnEmpty' => true, 'value' => null),
			array('msisdn, created, transid', 'safe', 'on'=>'search'),
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
			'msisdn' => Yii::t('app', 'Msisdn'),
			'created' => Yii::t('app', 'Created'),
			'transid' => Yii::t('app', 'Transid'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('msisdn', $this->msisdn, true);
		$criteria->compare('created', $this->created, true);
		$criteria->compare('transid', $this->transid, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}