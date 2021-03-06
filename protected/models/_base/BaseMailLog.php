<?php

/**
 * This is the model base class for the table "mail_log".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "MailLog".
 *
 * Columns in table "mail_log" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $title
 * @property string $content
 * @property string $mail_header
 * @property string $mail_to
 * @property string $mail_from
 * @property string $created
 * @property string $modified
 * @property integer $is_sent
 *
 */
abstract class BaseMailLog extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'mail_log';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'MailLog|MailLogs', $n);
	}

	public static function representingColumn() {
		return 'title';
	}

	public function rules() {
		return array(
			array('is_sent', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>200),
			array('mail_to', 'length', 'max'=>100),
			array('mail_from', 'length', 'max'=>60),
			array('content, mail_header, created, modified', 'safe'),
			array('title, content, mail_header, mail_to, mail_from, created, modified, is_sent', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, title, content, mail_header, mail_to, mail_from, created, modified, is_sent', 'safe', 'on'=>'search'),
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
			'title' => Yii::t('app', 'Title'),
			'content' => Yii::t('app', 'Content'),
			'mail_header' => Yii::t('app', 'Mail Header'),
			'mail_to' => Yii::t('app', 'Mail To'),
			'mail_from' => Yii::t('app', 'Mail From'),
			'created' => Yii::t('app', 'Created'),
			'modified' => Yii::t('app', 'Modified'),
			'is_sent' => Yii::t('app', 'Is Sent'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('title', $this->title, true);
		$criteria->compare('content', $this->content, true);
		$criteria->compare('mail_header', $this->mail_header, true);
		$criteria->compare('mail_to', $this->mail_to, true);
		$criteria->compare('mail_from', $this->mail_from, true);
		$criteria->compare('created', $this->created, true);
		$criteria->compare('modified', $this->modified, true);
		$criteria->compare('is_sent', $this->is_sent);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}