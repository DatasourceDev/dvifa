<?php

class ConfigurationForm extends CFormModel {

    public $sys_noreply_email = 'noreply@difa-tes.mfa.go.th';
    public $sys_admin_email = 'noreply@difa-tes.mfa.go.th';
    public $grid_display_row = 20;
    public $exam_retry_month = 6;
    public $certificate_expire_month = 24;
    public $barcode_x = 200;
    public $barcode_y = 50;
    public $barcode_height = 60;
    public $barcode_text_height = 40;
    public $barcode_text_width = 40;
    public $barcode_amount = 4;
    public $payment_username = 'ktb';
    public $payment_password = 'ktb@1234';
    public $payment_tax;
    public $payment_suffix;
    public $payment_compcode;
    public $payment_due_time = '22:00:00';
    public $register_presubmit_day = 52;
    public $register_before_day = 7;
    public $web_register_index;
    public $web_register_term_en;
    public $web_register_term_th;
    public $web_exam_term_en;
    public $web_exam_term_th;
    public $web_office_index;
    public $sms_api_url = 'http://ws.n-content.com/N-Subscriptionrequest/broadcastReqServlet';
    public $sms_ivr = '*480633407';
    public $sms_ivr_username = 'cdg07';
    public $sms_ivr_password = 'cdg@sms';
    public $sms_response_username = 's-one';
    public $sms_response_password = 's-one@response';
    public $sms_template_confirmation_th;
    public $sms_template_payment_th;
    public $sms_template_alert_schedule_th;
    public $sms_template_alert_result_th;
    public $sms_template_alert_issue_th;
    public $sms_template_confirmation_en;
    public $sms_template_payment_en;
    public $sms_template_alert_schedule_en;
    public $sms_template_alert_result_en;
    public $sms_template_alert_issue_en;
    public $email_signature;
    public $email_template_confirmation_th;
    public $email_template_confirmation_en;
    public $email_account_info_th;
    public $email_account_info_en;
    public $email_template_payment_th;
    public $email_template_payment_en;
    public $email_template_alert_schedule_th;
    public $email_template_alert_schedule_en;
    public $email_template_alert_issue_th;
    public $email_template_alert_result_th;
    public $email_template_alert_result_en;
    public $email_template_alert_issue_en;

    public function init() {
        parent::init();
        foreach ($this->attributeLabels() as $name => $key) {
            $this->{$name} = Configuration::getKey($name, $this->{$name});
        }
    }

    public function rules() {
        return array(
            array('payment_username, payment_password', 'required', 'on' => 'index'),
            array('sys_admin_email, sys_noreply_email', 'required', 'on' => 'mail'),
            array('grid_display_row', 'required', 'on' => 'index'),
            array('grid_display_row', 'numerical', 'integerOnly' => true, 'on' => 'index'),
            array('exam_retry_month, certificate_expire_month, register_presubmit_day, register_before_day', 'required', 'on' => 'index'),
            array('exam_retry_month, certificate_expire_month, register_presubmit_day, register_before_day', 'numerical', 'integerOnly' => true, 'min' => 0, 'on' => 'index'),
            array('barcode_x, barcode_y, barcode_amount, barcode_height, barcode_text_height, barcode_text_width', 'required', 'on' => 'index'),
            array('barcode_x, barcode_y, barcode_amount, barcode_height, barcode_text_height, barcode_text_width', 'numerical', 'on' => 'index'),
            array('payment_tax, payment_suffix, payment_compcode, payment_due_time', 'required', 'on' => 'index'),
            array('web_register_index, web_register_term_en, web_register_term_th,web_exam_term_en,web_exam_term_th, web_office_index', 'safe', 'on' => 'index'),
            array('sms_api_url, sms_ivr, sms_ivr_username, sms_ivr_password, sms_response_username, sms_response_password', 'required', 'on' => 'sms'),
            array('sms_ivr, sms_template_confirmation_th, sms_template_payment_th, sms_template_alert_schedule_th, sms_template_alert_result_th, sms_template_alert_issue_th', 'safe', 'on' => 'sms'),
            array('sms_api_url, sms_template_confirmation_en, sms_template_payment_en, sms_template_alert_schedule_en, sms_template_alert_result_en, sms_template_alert_issue_en', 'safe', 'on' => 'sms'),
            array('email_signature', 'safe', 'on' => 'mail'),
            array('email_account_info_th, email_template_confirmation_th, email_template_payment_th, email_template_alert_schedule_th, email_template_alert_result_th, email_template_alert_issue_th', 'safe', 'on' => 'mail'),
            array('email_account_info_en, email_template_confirmation_en, email_template_payment_en, email_template_alert_schedule_en, email_template_alert_result_en, email_template_alert_issue_en', 'safe', 'on' => 'mail'),
            array('payment_suffix', 'length', 'min' => 2, 'max' => 2, 'on' => 'index'),
        );
    }

    public function attributeLabels() {
        return array(
            'payment_username' => '????????????????????????????????????????????? KTB',
            'payment_password' => '?????????????????????????????????????????? KTB',
            'payment_due_time' => '??????????????????????????????????????????????????????',
            'sys_admin_email' => '?????????????????????????????????????????????????????????????????????',
            'sys_noreply_email' => '????????????????????????????????????????????????????????????????????????????????????',
            'grid_display_row' => '??????????????????????????????????????????????????????????????????',
            'exam_retry_month' => '??????????????????????????????????????????????????????????????????????????????',
            'certificate_expire_month' => '????????????????????????????????????',
            'barcode_x' => '??????????????????????????????????????????',
            'barcode_y' => '????????????????????????????????????',
            'barcode_amount' => '???????????????????????????????????????',
            'barcode_height' => '??????????????????????????????????????????????????????????????????',
            'barcode_text_height' => '??????????????????????????????????????????????????????????????????',
            'barcode_text_width' => '????????????????????????????????????????????????????????????????????????',
            'payment_tax' => '??????????????????????????????????????????????????????????????????',
            'payment_suffix' => '????????? Suffix (2????????????)',
            'payment_compcode' => 'Company Code',
            'register_presubmit_day' => '???????????????????????????????????????????????????????????????',
            'register_before_day' => '????????????????????????????????????????????????????????????????????????',
            'web_register_index' => '?????????????????????????????????????????????',
            'web_register_term_en' => '????????????????????????/????????????????????????????????????????????? (en)',
            'web_register_term_th' => '????????????????????????/????????????????????????????????????????????? (th)',
            'web_exam_term_en' => '????????????????????????/??????????????????????????????????????? (en)',
            'web_exam_term_th' => '????????????????????????/??????????????????????????????????????? (th)',
            'web_office_index' => '????????????????????????????????????????????????????????????????????????????????????',
            'sms_ivr' => '????????????????????? IVR ????????????????????????????????? SMS',
            'sms_ivr_username' => '??????????????????????????????????????? (????????????????????????????????????????????????)',
            'sms_ivr_password' => '???????????????????????? (????????????????????????????????????????????????)',
            'sms_response_username' => '??????????????????????????????????????? (?????????????????????????????????)',
            'sms_response_password' => '???????????????????????? (?????????????????????????????????)',
            'sms_template_confirmation_th' => '?????????????????????????????????????????? SMS',
            'sms_template_payment_th' => '????????????????????????????????????????????????????????????',
            'sms_template_alert_schedule_th' => '?????????????????????????????????????????????????????? 1 ?????????',
            'sms_template_alert_result_th' => '??????????????????????????????????????????????????????',
            'sms_template_alert_issue_th' => '??????????????????????????????????????????????????????????????????',
            'sms_template_confirmation_en' => '?????????????????????????????????????????? SMS',
            'sms_template_payment_en' => '????????????????????????????????????????????????????????????',
            'sms_template_alert_schedule_en' => '?????????????????????????????????????????????????????? 1 ?????????',
            'sms_template_alert_result_en' => '??????????????????????????????????????????????????????',
            'sms_template_alert_issue_en' => '??????????????????????????????????????????????????????????????????',
            'email_signature' => '???????????????????????????????????????????????????',
            'email_account_info_th' => '?????????????????????????????????????????????????????????????????????',
            'email_account_info_en' => '?????????????????????????????????????????????????????????????????????',
            'email_template_confirmation_th' => '????????????????????????????????????????????????????????????',
            'email_template_payment_th' => '????????????????????????????????????????????????????????????',
            'email_template_alert_schedule_th' => '?????????????????????????????????????????????????????? 1 ?????????',
            'email_template_alert_result_th' => '??????????????????????????????????????????????????????',
            'email_template_alert_issue_th' => '??????????????????????????????????????????????????????????????????',
            'email_template_confirmation_en' => '????????????????????????????????????????????????????????????',
            'email_template_payment_en' => '????????????????????????????????????????????????????????????',
            'email_template_alert_schedule_en' => '?????????????????????????????????????????????????????? 1 ?????????',
            'email_template_alert_result_en' => '??????????????????????????????????????????????????????',
            'email_template_alert_issue_en' => '??????????????????????????????????????????????????????????????????',
            'sms_api_url' => 'API URL',
        );
    }

    public function save() {
        if ($this->validate()) {
            foreach ($this->attributeLabels() as $name => $key) {
                Configuration::setKey($name, $this->{$name});
            }
            return true;
        }
    }

}
