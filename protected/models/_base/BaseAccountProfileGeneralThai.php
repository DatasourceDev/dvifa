<?php

/**
 * This is the model base class for the table "account_profile_general_thai".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "AccountProfileGeneralThai".
 *
 * Columns in table "account_profile_general_thai" available as properties of the model,
 * followed by relations of table "account_profile_general_thai" available as properties of the model.
 *
 * @property string $account_id
 * @property string $gender
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
 * @property string $birth_date
 * @property string $birth_province
 * @property integer $religion_id
 * @property string $nationality_id
 * @property string $educate_degree
 * @property string $educate_degree_other
 * @property string $educate_subject
 * @property string $educate_university
 * @property string $educate_country
 * @property integer $work_office_id
 * @property string $work_office_other
 * @property string $work_department
 * @property string $work_position
 * @property string $work_level
 * @property string $work_level_other
 * @property string $emp_card
 * @property string $emp_card_issue_date
 * @property string $emp_card_expire_date
 * @property string $work_address_homeno
 * @property string $work_address_building
 * @property string $work_address_floor
 * @property string $work_address_soi
 * @property string $work_address_street
 * @property integer $work_address_province_id
 * @property integer $work_address_amphur_id
 * @property integer $work_address_tumbon_id
 * @property string $work_address_postcode
 * @property string $reply_address_homeno
 * @property string $reply_address_building
 * @property string $reply_address_floor
 * @property string $reply_address_soi
 * @property string $reply_address_street
 * @property integer $reply_address_province_id
 * @property integer $reply_address_amphur_id
 * @property integer $reply_address_tumbon_id
 * @property string $reply_address_postcode
 * @property string $contact_phone_country
 * @property string $contact_phone
 * @property string $contact_phone_ext
 * @property string $contact_fax_country
 * @property string $contact_fax
 * @property string $contact_mobile_country
 * @property string $contact_mobile
 * @property string $contact_email
 * @property string $emergency_name
 * @property string $emergency_phone
 * @property integer $admin_office_id
 * @property string $admin_office_name
 * @property integer $is_same_address
 * @property string $passport_no
 * @property string $passport_issue_country
 * @property string $passport_issue_date
 * @property string $passport_expire_date
 * @property string $religion_other
 * @property integer $work_office_type
 * @property integer $emp_type
 * @property integer $work_year
 * @property string $work_office_other_th
 * @property string $work_department_th
 * @property string $emp_pic_file
 * @property string $work_unit
 * @property string $work_unit_th
 * @property string $work_address_name
 * @property string $reply_address_name
 *
 * @property Account $account
 */
abstract class BaseAccountProfileGeneralThai extends ActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'account_profile_general_thai';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'AccountProfileGeneralThai|AccountProfileGeneralThais', $n);
	}

	public static function representingColumn() {
		return 'gender';
	}

	public function rules() {
		return array(
			array('account_id', 'required'),
			array('religion_id, work_office_id, work_address_province_id, work_address_amphur_id, work_address_tumbon_id, reply_address_province_id, reply_address_amphur_id, reply_address_tumbon_id, admin_office_id, is_same_address, work_office_type, emp_type, work_year', 'numerical', 'integerOnly'=>true),
			array('account_id', 'length', 'max'=>10),
			array('gender, title_id_th, title_id_en', 'length', 'max'=>1),
			array('title_th, firstname_th, midname_th, lastname_th, title_en, firstname_en, midname_en, lastname_en, birth_province, educate_degree, educate_degree_other, educate_country, work_position, work_level, work_level_other, emp_card, work_address_homeno, work_address_building, work_address_floor, work_address_soi, work_address_street, reply_address_homeno, reply_address_building, reply_address_floor, reply_address_soi, reply_address_street, contact_phone_country, contact_phone, contact_phone_ext, contact_fax_country, contact_fax, contact_mobile_country, contact_mobile, contact_email, emergency_name, emergency_phone, passport_no, passport_expire_date, religion_other', 'length', 'max'=>60),
			array('nationality_id, passport_issue_country', 'length', 'max'=>3),
			array('educate_subject, educate_university, work_office_other, work_department, admin_office_name, work_office_other_th, work_department_th, work_unit, work_unit_th, work_address_name, reply_address_name', 'length', 'max'=>250),
			array('work_address_postcode, reply_address_postcode', 'length', 'max'=>5),
			array('emp_pic_file', 'length', 'max'=>100),
			array('birth_date, emp_card_issue_date, emp_card_expire_date, passport_issue_date', 'safe'),
			array('gender, title_id_th, title_th, firstname_th, midname_th, lastname_th, title_id_en, title_en, firstname_en, midname_en, lastname_en, birth_date, birth_province, religion_id, nationality_id, educate_degree, educate_degree_other, educate_subject, educate_university, educate_country, work_office_id, work_office_other, work_department, work_position, work_level, work_level_other, emp_card, emp_card_issue_date, emp_card_expire_date, work_address_homeno, work_address_building, work_address_floor, work_address_soi, work_address_street, work_address_province_id, work_address_amphur_id, work_address_tumbon_id, work_address_postcode, reply_address_homeno, reply_address_building, reply_address_floor, reply_address_soi, reply_address_street, reply_address_province_id, reply_address_amphur_id, reply_address_tumbon_id, reply_address_postcode, contact_phone_country, contact_phone, contact_phone_ext, contact_fax_country, contact_fax, contact_mobile_country, contact_mobile, contact_email, emergency_name, emergency_phone, admin_office_id, admin_office_name, is_same_address, passport_no, passport_issue_country, passport_issue_date, passport_expire_date, religion_other, work_office_type, emp_type, work_year, work_office_other_th, work_department_th, emp_pic_file, work_unit, work_unit_th, work_address_name, reply_address_name', 'default', 'setOnEmpty' => true, 'value' => null),
			array('account_id, gender, title_id_th, title_th, firstname_th, midname_th, lastname_th, title_id_en, title_en, firstname_en, midname_en, lastname_en, birth_date, birth_province, religion_id, nationality_id, educate_degree, educate_degree_other, educate_subject, educate_university, educate_country, work_office_id, work_office_other, work_department, work_position, work_level, work_level_other, emp_card, emp_card_issue_date, emp_card_expire_date, work_address_homeno, work_address_building, work_address_floor, work_address_soi, work_address_street, work_address_province_id, work_address_amphur_id, work_address_tumbon_id, work_address_postcode, reply_address_homeno, reply_address_building, reply_address_floor, reply_address_soi, reply_address_street, reply_address_province_id, reply_address_amphur_id, reply_address_tumbon_id, reply_address_postcode, contact_phone_country, contact_phone, contact_phone_ext, contact_fax_country, contact_fax, contact_mobile_country, contact_mobile, contact_email, emergency_name, emergency_phone, admin_office_id, admin_office_name, is_same_address, passport_no, passport_issue_country, passport_issue_date, passport_expire_date, religion_other, work_office_type, emp_type, work_year, work_office_other_th, work_department_th, emp_pic_file, work_unit, work_unit_th, work_address_name, reply_address_name', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'account' => array(self::BELONGS_TO, 'Account', 'account_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'account_id' => null,
			'gender' => Yii::t('app', 'Gender'),
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
			'birth_date' => Yii::t('app', 'Birth Date'),
			'birth_province' => Yii::t('app', 'Birth Province'),
			'religion_id' => Yii::t('app', 'Religion'),
			'nationality_id' => Yii::t('app', 'Nationality'),
			'educate_degree' => Yii::t('app', 'Educate Degree'),
			'educate_degree_other' => Yii::t('app', 'Educate Degree Other'),
			'educate_subject' => Yii::t('app', 'Educate Subject'),
			'educate_university' => Yii::t('app', 'Educate University'),
			'educate_country' => Yii::t('app', 'Educate Country'),
			'work_office_id' => Yii::t('app', 'Work Office'),
			'work_office_other' => Yii::t('app', 'Work Office Other'),
			'work_department' => Yii::t('app', 'Work Department'),
			'work_position' => Yii::t('app', 'Work Position'),
			'work_level' => Yii::t('app', 'Work Level'),
			'work_level_other' => Yii::t('app', 'Work Level Other'),
			'emp_card' => Yii::t('app', 'Emp Card'),
			'emp_card_issue_date' => Yii::t('app', 'Emp Card Issue Date'),
			'emp_card_expire_date' => Yii::t('app', 'Emp Card Expire Date'),
			'work_address_homeno' => Yii::t('app', 'Work Address Homeno'),
			'work_address_building' => Yii::t('app', 'Work Address Building'),
			'work_address_floor' => Yii::t('app', 'Work Address Floor'),
			'work_address_soi' => Yii::t('app', 'Work Address Soi'),
			'work_address_street' => Yii::t('app', 'Work Address Street'),
			'work_address_province_id' => Yii::t('app', 'Work Address Province'),
			'work_address_amphur_id' => Yii::t('app', 'Work Address Amphur'),
			'work_address_tumbon_id' => Yii::t('app', 'Work Address Tumbon'),
			'work_address_postcode' => Yii::t('app', 'Work Address Postcode'),
			'reply_address_homeno' => Yii::t('app', 'Reply Address Homeno'),
			'reply_address_building' => Yii::t('app', 'Reply Address Building'),
			'reply_address_floor' => Yii::t('app', 'Reply Address Floor'),
			'reply_address_soi' => Yii::t('app', 'Reply Address Soi'),
			'reply_address_street' => Yii::t('app', 'Reply Address Street'),
			'reply_address_province_id' => Yii::t('app', 'Reply Address Province'),
			'reply_address_amphur_id' => Yii::t('app', 'Reply Address Amphur'),
			'reply_address_tumbon_id' => Yii::t('app', 'Reply Address Tumbon'),
			'reply_address_postcode' => Yii::t('app', 'Reply Address Postcode'),
			'contact_phone_country' => Yii::t('app', 'Contact Phone Country'),
			'contact_phone' => Yii::t('app', 'Contact Phone'),
			'contact_phone_ext' => Yii::t('app', 'Contact Phone Ext'),
			'contact_fax_country' => Yii::t('app', 'Contact Fax Country'),
			'contact_fax' => Yii::t('app', 'Contact Fax'),
			'contact_mobile_country' => Yii::t('app', 'Contact Mobile Country'),
			'contact_mobile' => Yii::t('app', 'Contact Mobile'),
			'contact_email' => Yii::t('app', 'Contact Email'),
			'emergency_name' => Yii::t('app', 'Emergency Name'),
			'emergency_phone' => Yii::t('app', 'Emergency Phone'),
			'admin_office_id' => Yii::t('app', 'Admin Office'),
			'admin_office_name' => Yii::t('app', 'Admin Office Name'),
			'is_same_address' => Yii::t('app', 'Is Same Address'),
			'passport_no' => Yii::t('app', 'Passport No'),
			'passport_issue_country' => Yii::t('app', 'Passport Issue Country'),
			'passport_issue_date' => Yii::t('app', 'Passport Issue Date'),
			'passport_expire_date' => Yii::t('app', 'Passport Expire Date'),
			'religion_other' => Yii::t('app', 'Religion Other'),
			'work_office_type' => Yii::t('app', 'Work Office Type'),
			'emp_type' => Yii::t('app', 'Emp Type'),
			'work_year' => Yii::t('app', 'Work Year'),
			'work_office_other_th' => Yii::t('app', 'Work Office Other Th'),
			'work_department_th' => Yii::t('app', 'Work Department Th'),
			'emp_pic_file' => Yii::t('app', 'Emp Pic File'),
			'work_unit' => Yii::t('app', 'Work Unit'),
			'work_unit_th' => Yii::t('app', 'Work Unit Th'),
			'work_address_name' => Yii::t('app', 'Work Address Name'),
			'reply_address_name' => Yii::t('app', 'Reply Address Name'),
			'account' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('account_id', $this->account_id);
		$criteria->compare('gender', $this->gender, true);
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
		$criteria->compare('birth_date', $this->birth_date, true);
		$criteria->compare('birth_province', $this->birth_province, true);
		$criteria->compare('religion_id', $this->religion_id);
		$criteria->compare('nationality_id', $this->nationality_id, true);
		$criteria->compare('educate_degree', $this->educate_degree, true);
		$criteria->compare('educate_degree_other', $this->educate_degree_other, true);
		$criteria->compare('educate_subject', $this->educate_subject, true);
		$criteria->compare('educate_university', $this->educate_university, true);
		$criteria->compare('educate_country', $this->educate_country, true);
		$criteria->compare('work_office_id', $this->work_office_id);
		$criteria->compare('work_office_other', $this->work_office_other, true);
		$criteria->compare('work_department', $this->work_department, true);
		$criteria->compare('work_position', $this->work_position, true);
		$criteria->compare('work_level', $this->work_level, true);
		$criteria->compare('work_level_other', $this->work_level_other, true);
		$criteria->compare('emp_card', $this->emp_card, true);
		$criteria->compare('emp_card_issue_date', $this->emp_card_issue_date, true);
		$criteria->compare('emp_card_expire_date', $this->emp_card_expire_date, true);
		$criteria->compare('work_address_homeno', $this->work_address_homeno, true);
		$criteria->compare('work_address_building', $this->work_address_building, true);
		$criteria->compare('work_address_floor', $this->work_address_floor, true);
		$criteria->compare('work_address_soi', $this->work_address_soi, true);
		$criteria->compare('work_address_street', $this->work_address_street, true);
		$criteria->compare('work_address_province_id', $this->work_address_province_id);
		$criteria->compare('work_address_amphur_id', $this->work_address_amphur_id);
		$criteria->compare('work_address_tumbon_id', $this->work_address_tumbon_id);
		$criteria->compare('work_address_postcode', $this->work_address_postcode, true);
		$criteria->compare('reply_address_homeno', $this->reply_address_homeno, true);
		$criteria->compare('reply_address_building', $this->reply_address_building, true);
		$criteria->compare('reply_address_floor', $this->reply_address_floor, true);
		$criteria->compare('reply_address_soi', $this->reply_address_soi, true);
		$criteria->compare('reply_address_street', $this->reply_address_street, true);
		$criteria->compare('reply_address_province_id', $this->reply_address_province_id);
		$criteria->compare('reply_address_amphur_id', $this->reply_address_amphur_id);
		$criteria->compare('reply_address_tumbon_id', $this->reply_address_tumbon_id);
		$criteria->compare('reply_address_postcode', $this->reply_address_postcode, true);
		$criteria->compare('contact_phone_country', $this->contact_phone_country, true);
		$criteria->compare('contact_phone', $this->contact_phone, true);
		$criteria->compare('contact_phone_ext', $this->contact_phone_ext, true);
		$criteria->compare('contact_fax_country', $this->contact_fax_country, true);
		$criteria->compare('contact_fax', $this->contact_fax, true);
		$criteria->compare('contact_mobile_country', $this->contact_mobile_country, true);
		$criteria->compare('contact_mobile', $this->contact_mobile, true);
		$criteria->compare('contact_email', $this->contact_email, true);
		$criteria->compare('emergency_name', $this->emergency_name, true);
		$criteria->compare('emergency_phone', $this->emergency_phone, true);
		$criteria->compare('admin_office_id', $this->admin_office_id);
		$criteria->compare('admin_office_name', $this->admin_office_name, true);
		$criteria->compare('is_same_address', $this->is_same_address);
		$criteria->compare('passport_no', $this->passport_no, true);
		$criteria->compare('passport_issue_country', $this->passport_issue_country, true);
		$criteria->compare('passport_issue_date', $this->passport_issue_date, true);
		$criteria->compare('passport_expire_date', $this->passport_expire_date, true);
		$criteria->compare('religion_other', $this->religion_other, true);
		$criteria->compare('work_office_type', $this->work_office_type);
		$criteria->compare('emp_type', $this->emp_type);
		$criteria->compare('work_year', $this->work_year);
		$criteria->compare('work_office_other_th', $this->work_office_other_th, true);
		$criteria->compare('work_department_th', $this->work_department_th, true);
		$criteria->compare('emp_pic_file', $this->emp_pic_file, true);
		$criteria->compare('work_unit', $this->work_unit, true);
		$criteria->compare('work_unit_th', $this->work_unit_th, true);
		$criteria->compare('work_address_name', $this->work_address_name, true);
		$criteria->compare('reply_address_name', $this->reply_address_name, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}