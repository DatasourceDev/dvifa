<?php

/**
 * This is the model base class for the table "profile_change_name".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "ProfileChangeName".
 *
 * Columns in table "profile_change_name" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property integer $account_id
 * @property string $title_id_th
 * @property string $title_th
 * @property string $firstname_th
 * @property string $midname_th
 * @property string $lastname_th
 * @property string $title_id_en
 * @property string $title_en
 * @property string $firstname_en
 * @property string $midname_en
 * @property string $lastname_en
 * @property string $title_id_th_original
 * @property string $title_th_original
 * @property string $firstname_th_original
 * @property string $midname_th_original
 * @property string $lastname_th_original
 * @property string $title_id_en_original
 * @property string $title_en_original
 * @property string $firstname_en_original
 * @property string $midname_en_original
 * @property string $lastname_en_original
 * @property string $created
 * @property string $modified
 * @property string $file_url
 *
 */
abstract class BaseProfileChangeName extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'profile_change_name';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'ProfileChangeName|ProfileChangeNames', $n);
	}

	public static function representingColumn() {
		return 'title_id_th';
	}

	public function rules() {
		return array(
			array('account_id', 'numerical', 'integerOnly'=>true),
			array('title_id_th, title_id_en, title_id_th_original, title_id_en_original', 'length', 'max'=>1),
			array('title_th, midname_th, title_en, midname_en, title_th_original, midname_th_original, title_en_original, midname_en_original', 'length', 'max'=>60),
			array('firstname_th, lastname_th, firstname_en, lastname_en, firstname_th_original, lastname_th_original, firstname_en_original, lastname_en_original', 'length', 'max'=>100),
			array('created, modified, file_url', 'safe'),
			array('account_id, title_id_th, title_th, firstname_th, midname_th, lastname_th, title_id_en, title_en, firstname_en, midname_en, lastname_en, title_id_th_original, title_th_original, firstname_th_original, midname_th_original, lastname_th_original, title_id_en_original, title_en_original, firstname_en_original, midname_en_original, lastname_en_original, created, modified, file_url', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, account_id, title_id_th, title_th, firstname_th, midname_th, lastname_th, title_id_en, title_en, firstname_en, midname_en, lastname_en, title_id_th_original, title_th_original, firstname_th_original, midname_th_original, lastname_th_original, title_id_en_original, title_en_original, firstname_en_original, midname_en_original, lastname_en_original, created, modified, file_url', 'safe', 'on'=>'search'),
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
			'account_id' => Yii::t('app', 'Account'),
			'title_id_th' => Yii::t('app', 'Title Id Th'),
			'title_th' => Yii::t('app', 'Title Th'),
			'firstname_th' => Yii::t('app', 'Firstname Th'),
			'midname_th' => Yii::t('app', 'Midname Th'),
			'lastname_th' => Yii::t('app', 'Lastname Th'),
			'title_id_en' => Yii::t('app', 'Title Id En'),
			'title_en' => Yii::t('app', 'Title En'),
			'firstname_en' => Yii::t('app', 'Firstname En'),
			'midname_en' => Yii::t('app', 'Midname En'),
			'lastname_en' => Yii::t('app', 'Lastname En'),
			'title_id_th_original' => Yii::t('app', 'Title Id Th Original'),
			'title_th_original' => Yii::t('app', 'Title Th Original'),
			'firstname_th_original' => Yii::t('app', 'Firstname Th Original'),
			'midname_th_original' => Yii::t('app', 'Midname Th Original'),
			'lastname_th_original' => Yii::t('app', 'Lastname Th Original'),
			'title_id_en_original' => Yii::t('app', 'Title Id En Original'),
			'title_en_original' => Yii::t('app', 'Title En Original'),
			'firstname_en_original' => Yii::t('app', 'Firstname En Original'),
			'midname_en_original' => Yii::t('app', 'Midname En Original'),
			'lastname_en_original' => Yii::t('app', 'Lastname En Original'),
			'created' => Yii::t('app', 'Created'),
			'modified' => Yii::t('app', 'Modified'),
			'file_url' => Yii::t('app', 'File Url'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('account_id', $this->account_id);
		$criteria->compare('title_id_th', $this->title_id_th, true);
		$criteria->compare('title_th', $this->title_th, true);
		$criteria->compare('firstname_th', $this->firstname_th, true);
		$criteria->compare('midname_th', $this->midname_th, true);
		$criteria->compare('lastname_th', $this->lastname_th, true);
		$criteria->compare('title_id_en', $this->title_id_en, true);
		$criteria->compare('title_en', $this->title_en, true);
		$criteria->compare('firstname_en', $this->firstname_en, true);
		$criteria->compare('midname_en', $this->midname_en, true);
		$criteria->compare('lastname_en', $this->lastname_en, true);
		$criteria->compare('title_id_th_original', $this->title_id_th_original, true);
		$criteria->compare('title_th_original', $this->title_th_original, true);
		$criteria->compare('firstname_th_original', $this->firstname_th_original, true);
		$criteria->compare('midname_th_original', $this->midname_th_original, true);
		$criteria->compare('lastname_th_original', $this->lastname_th_original, true);
		$criteria->compare('title_id_en_original', $this->title_id_en_original, true);
		$criteria->compare('title_en_original', $this->title_en_original, true);
		$criteria->compare('firstname_en_original', $this->firstname_en_original, true);
		$criteria->compare('midname_en_original', $this->midname_en_original, true);
		$criteria->compare('lastname_en_original', $this->lastname_en_original, true);
		$criteria->compare('created', $this->created, true);
		$criteria->compare('modified', $this->modified, true);
		$criteria->compare('file_url', $this->file_url, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}