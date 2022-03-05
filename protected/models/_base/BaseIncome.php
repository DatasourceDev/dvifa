<?php

/**
 * This is the model base class for the table "income".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Income".
 *
 * Columns in table "income" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $income_date
 * @property string $comment
 * @property string $amount
 * @property string $user_id
 * @property string $created
 * @property string $modified
 * @property string $income_type_id
 *
 */
abstract class BaseIncome extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'income';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Income|Incomes', $n);
	}

	public static function representingColumn() {
		return 'amount';
	}

	public function rules() {
		return array(
			array('amount', 'length', 'max'=>18),
			array('user_id, income_type_id', 'length', 'max'=>10),
			array('income_date, comment, created, modified', 'safe'),
			array('income_date, comment, amount, user_id, created, modified, income_type_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, income_date, comment, amount, user_id, created, modified, income_type_id', 'safe', 'on'=>'search'),
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
			'income_date' => Yii::t('app', 'Income Date'),
			'comment' => Yii::t('app', 'Comment'),
			'amount' => Yii::t('app', 'Amount'),
			'user_id' => Yii::t('app', 'User'),
			'created' => Yii::t('app', 'Created'),
			'modified' => Yii::t('app', 'Modified'),
			'income_type_id' => Yii::t('app', 'Income Type'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('income_date', $this->income_date, true);
		$criteria->compare('comment', $this->comment, true);
		$criteria->compare('amount', $this->amount, true);
		$criteria->compare('user_id', $this->user_id, true);
		$criteria->compare('created', $this->created, true);
		$criteria->compare('modified', $this->modified, true);
		$criteria->compare('income_type_id', $this->income_type_id, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}