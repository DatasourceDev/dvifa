<div class="topic">Member Register <small>(ประเภท บุคคลทั่วไป)</small></div>
<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'type' => 'horizontal',
    'htmlOptions' => array(
        'id' => 'frm-register',
        'enctype' => 'multipart/form-data',
    ),
        ));
?>
<?php if ($model->isNewRecord): ?>
    <h4 class="fancy"><?php echo Yii::t('register', 'Account Information'); ?></h4>
    <div class="row">
        <div class="col-md-6">
            <div id="entry_pane">
                <?php
                echo $form->textFieldGroup($model, 'entry_code', array(
                    'widgetOptions' => array(
                        'htmlOptions' => array(
                            'id' => 'Account_entry_code',
                            'class' => 'input-update',
                            'data-target' => '#entry_pane',
                            'placeholder' => '',
                        ),
                    ),
                ));
                ?>
            </div>
            <?php
            echo $form->passwordFieldGroup($model, 'password_input', array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'id' => 'Account_password_input',
                        'placeholder' => '',
                    ),
                ),
                'labelOptions' => array(
                    'label' => Yii::t('register', 'Password'),
                ),
            ));
            ?>
            <?php
            echo $form->passwordFieldGroup($model, 'password_confirm', array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'id' => 'Account_password_confirm',
                        'placeholder' => '',
                    ),
                ),
                'labelOptions' => array(
                    'label' => Yii::t('register', 'Confirm Again'),
                ),
            ));
            ?>
        </div>
        <div class="col-md-6">
        </div>
    </div>
<?php endif; ?>
<h4 class="fancy"><?php echo Yii::t('register', 'General'); ?></h4>
<div class="row">
    <div class="col-md-6">
        <?php
        echo $form->radioButtonListGroup($profile, 'gender', array(
            'widgetOptions' => array(
                'data' => $profile->getGenderOptions(),
            ),
        ));
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?php
        echo $form->dropDownListGroup($profile, 'title_id_th', array(
            'widgetOptions' => array(
                'data' => CodeTitle::getThaiOptions(),
                'htmlOptions' => array(
                    'id' => 'Profile_title_id_th',
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'title_th', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'id' => 'Profile_title_th',
                    'placeholder' => '',
                ),
            ),
            'prepend' => Helper::image('lang_th'),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'firstname_th', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
            'prepend' => Helper::image('lang_th'),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'lastname_th', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
            'prepend' => Helper::image('lang_th'),
        ));
        ?>
        <?php
        echo $form->datePickerGroup($profile, 'birth_date', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'id' => 'Profile_birth_date',
                    'placeholder' => '',
                ),
            ),
            'append' => Helper::glyphicon('calendar'),
        ));
        ?>
        <?php
        echo $form->dropDownListGroup($profile, 'religion_id', array(
            'widgetOptions' => array(
                'data' => CHtml::listData(CodeReligion::model()->findAll(), 'id', 'name_th'),
                'htmlOptions' => array(
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->dropDownListGroup($profile, 'nationality_id', array(
            'widgetOptions' => array(
                'data' => CHtml::listData(CodeCountry::model()->sortBy('name_th')->findAll(), 'id', 'name_th'),
                'htmlOptions' => array(
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
    </div>
    <div class="col-md-6">
        <?php
        echo $form->dropDownListGroup($profile, 'title_id_en', array(
            'widgetOptions' => array(
                'data' => CodeTitle::getEnglishOptions(),
                'htmlOptions' => array(
                    'id' => 'Profile_title_id_en',
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'title_en', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'id' => 'Profile_title_en',
                    'placeholder' => '',
                ),
            ),
            'prepend' => Helper::image('lang_en'),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'firstname_en', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
            'prepend' => Helper::image('lang_en'),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'lastname_en', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
            'prepend' => Helper::image('lang_en'),
        ));
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h4 class="fancy">ข้อมูลหน่วยงาน/สังกัด</h4>
        <?php
        echo $form->dropDownListGroup($profile, 'work_office_id', array(
            'widgetOptions' => array(
                'data' => CHtml::listData(CodeDepartment::model()->findAll(), 'id', 'name_th'),
                'htmlOptions' => array(
                    'id' => 'Profile_work_office_id',
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'work_office_other', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'id' => 'Profile_work_office_other',
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'work_department', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'work_position', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->dropDownListGroup($profile, 'work_level', array(
            'widgetOptions' => array(
                'data' => $profile->getWorkLevelOptions(),
                'htmlOptions' => array(
                    'id' => 'Profile_work_level',
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'work_level_other', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'id' => 'Profile_work_level_other',
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'emp_card', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php if (!$model->isNewRecord && $profile->empCardFile->getFileUrl('thumbnail')): ?>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <?php echo CHtml::image($profile->empCardFile->getFileUrl('thumbnail') . '?t=' . time()); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php
        echo $form->fileFieldGroup($profile, 'emp_card_file', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->datePickerGroup($profile, 'emp_card_issue_date', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
            'append' => Helper::glyphicon('calendar'),
        ));
        ?>
        <?php
        echo $form->datePickerGroup($profile, 'emp_card_expire_date', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
            'append' => Helper::glyphicon('calendar'),
        ));
        ?>
    </div>
    <div class="col-md-6">
        <h4 class="fancy">ข้อมูลการศึกษา</h4>
        <?php
        echo $form->dropDownListGroup($profile, 'educate_degree', array(
            'widgetOptions' => array(
                'data' => $profile->getEducationDegreeOptions(),
                'htmlOptions' => array(
                    'id' => 'Profile_educate_degree',
                    'prompt' => '(กรุณาเลือก)',
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'educate_degree_other', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'id' => 'Profile_educate_degree_other',
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'educate_subject', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'educate_university', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->dropDownListGroup($profile, 'educate_country', array(
            'widgetOptions' => array(
                'data' => CHtml::listData(CodeCountry::model()->sortBy('name_th')->findAll(), 'name_th', 'name_th'),
                'htmlOptions' => array(
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h4 class="fancy">ข้อมูลที่อยู่ที่ทำงาน</h4>
        <?php
        echo $form->textFieldGroup($profile, 'work_address_homeno', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'work_address_building', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'work_address_floor', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'work_address_soi', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'work_address_street', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->dropDownListGroup($profile, 'work_address_province_id', array(
            'widgetOptions' => array(
                'data' => CHtml::listData(CodeProvince::model()->sortBy('name')->findAll(), 'id', 'name'),
                'htmlOptions' => array(
                    'id' => 'Profile_work_address_province_id',
                    'class' => 'input-update',
                    'data-target' => '#Profile_work_address_amphur_id, #Profile_work_address_tumbon_id',
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->dropDownListGroup($profile, 'work_address_amphur_id', array(
            'widgetOptions' => array(
                'data' => CHtml::listData(CodeAmphur::model()->sortBy('name')->findAllByAttributes(array(
                            'code_province_id' => $profile->work_address_province_id,
                        )), 'id', 'name'),
                'htmlOptions' => array(
                    'id' => 'Profile_work_address_amphur_id',
                    'class' => 'input-update',
                    'data-target' => '#Profile_work_address_tumbon_id',
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->dropDownListGroup($profile, 'work_address_tumbon_id', array(
            'widgetOptions' => array(
                'data' => CHtml::listData(CodeTumbon::model()->sortBy('name')->findAllByAttributes(array(
                            'code_province_id' => $profile->work_address_province_id,
                            'code_amphur_id' => $profile->work_address_amphur_id,
                        )), 'id', 'name'),
                'htmlOptions' => array(
                    'id' => 'Profile_work_address_tumbon_id',
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'work_address_postcode', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
    </div>
    <div class="col-md-6">
        <h4 class="fancy">
            ที่อยู่สำหรับส่งผลสอบ
            <div class="pull-right">
                <small>
                    <?php
                    echo $form->checkBox($profile, 'is_same_address', array(
                        'id' => 'Profile_is_same_address',
                        'class' => 'input-update',
                        'data-target' => '#reply_address_pane',
                        'data-callback' => 'updateAddress',
                    ));
                    ?> ใช้ที่อยู่เดียวกันกับที่ทำงาน
                </small>
            </div>
        </h4>
        <div id="reply_address_pane">
            <?php
            echo $form->textFieldGroup($profile, 'reply_address_homeno', array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'placeholder' => '',
                        'disabled' => $profile->is_same_address === ActiveRecord::YES,
                    ),
                ),
            ));
            ?>
            <?php
            echo $form->textFieldGroup($profile, 'reply_address_building', array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'placeholder' => '',
                        'disabled' => $profile->is_same_address === ActiveRecord::YES,
                    ),
                ),
            ));
            ?>
            <?php
            echo $form->textFieldGroup($profile, 'reply_address_floor', array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'placeholder' => '',
                        'disabled' => $profile->is_same_address === ActiveRecord::YES,
                    ),
                ),
            ));
            ?>
            <?php
            echo $form->textFieldGroup($profile, 'reply_address_soi', array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'placeholder' => '',
                        'disabled' => $profile->is_same_address === ActiveRecord::YES,
                    ),
                ),
            ));
            ?>
            <?php
            echo $form->textFieldGroup($profile, 'reply_address_street', array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'placeholder' => '',
                        'disabled' => $profile->is_same_address === ActiveRecord::YES,
                    ),
                ),
            ));
            ?>
            <?php
            echo $form->dropDownListGroup($profile, 'reply_address_province_id', array(
                'widgetOptions' => array(
                    'data' => CHtml::listData(CodeProvince::model()->sortBy('name')->findAll(), 'id', 'name'),
                    'htmlOptions' => array(
                        'id' => 'Profile_reply_address_province_id',
                        'class' => 'input-update',
                        'data-target' => '#Profile_reply_address_amphur_id, #Profile_reply_address_tumbon_id',
                        'prompt' => '(กรุณาเลือก)',
                        'disabled' => $profile->is_same_address === ActiveRecord::YES,
                    ),
                ),
            ));
            ?>
            <?php
            echo $form->dropDownListGroup($profile, 'reply_address_amphur_id', array(
                'widgetOptions' => array(
                    'data' => CHtml::listData(CodeAmphur::model()->sortBy('name')->findAllByAttributes(array(
                                'code_province_id' => $profile->reply_address_province_id,
                            )), 'id', 'name'),
                    'htmlOptions' => array(
                        'id' => 'Profile_reply_address_amphur_id',
                        'class' => 'input-update',
                        'data-target' => '#Profile_reply_address_tumbon_id',
                        'prompt' => '(กรุณาเลือก)',
                        'disabled' => $profile->is_same_address === ActiveRecord::YES,
                    ),
                ),
            ));
            ?>
            <?php
            echo $form->dropDownListGroup($profile, 'reply_address_tumbon_id', array(
                'widgetOptions' => array(
                    'data' => CHtml::listData(CodeTumbon::model()->sortBy('name')->findAllByAttributes(array(
                                'code_province_id' => $profile->reply_address_province_id,
                                'code_amphur_id' => $profile->reply_address_amphur_id,
                            )), 'id', 'name'),
                    'htmlOptions' => array(
                        'id' => 'Profile_reply_address_tumbon_id',
                        'prompt' => '(กรุณาเลือก)',
                        'disabled' => $profile->is_same_address === ActiveRecord::YES,
                    ),
                ),
            ));
            ?>
            <?php
            echo $form->textFieldGroup($profile, 'reply_address_postcode', array(
                'widgetOptions' => array(
                    'htmlOptions' => array(
                        'placeholder' => '',
                        'disabled' => $profile->is_same_address === ActiveRecord::YES,
                    ),
                ),
            ));
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h4 class="fancy">ข้อมูลการติดต่อ</h4>
        <div class="form-group">
            <?php echo $form->labelEx($profile, 'contact_phone', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <div class="form-inline">
                    <div class="form-group"><?php echo $form->textField($profile, 'contact_phone_country', array('class' => 'form-control', 'style' => 'width:60px;', 'placeholder' => '66')); ?></div>
                    <div class="form-group"><?php echo $form->textField($profile, 'contact_phone', array('class' => 'form-control', 'style' => 'width:150px;', 'placeholder' => '999-999-9999')); ?></div>
                    <div class="form-group"><?php echo $form->textField($profile, 'contact_phone_ext', array('class' => 'form-control', 'style' => 'width:80px;', 'placeholder' => 'ext')); ?></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($profile, 'contact_fax', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <div class="form-inline">
                    <div class="form-group"><?php echo $form->textField($profile, 'contact_fax_country', array('class' => 'form-control', 'style' => 'width:60px;', 'placeholder' => '66')); ?></div>
                    <div class="form-group"><?php echo $form->textField($profile, 'contact_fax', array('class' => 'form-control', 'style' => 'width:150px;', 'placeholder' => '999-999-9999')); ?></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($profile, 'contact_mobile', array('class' => 'control-label col-sm-3')); ?>
            <div class="col-sm-9">
                <div class="form-inline">
                    <div class="form-group"><?php echo $form->textField($profile, 'contact_mobile_country', array('class' => 'form-control', 'style' => 'width:60px;', 'placeholder' => '66')); ?></div>
                    <div class="form-group"><?php echo $form->textField($profile, 'contact_mobile', array('class' => 'form-control', 'style' => 'width:150px;', 'placeholder' => '999-999-9999')); ?></div>
                </div>
            </div>
        </div>
        <?php
        echo $form->emailFieldGroup($profile, 'contact_email', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
            'prepend' => Helper::glyphicon('envelope'),
        ));
        ?>
    </div>
    <div class="col-md-6">
        <h4 class="fancy">บุคคลที่สามารถติดต่อในกรณีฉุกเฉิน</h4>
        <?php
        echo $form->textFieldGroup($profile, 'emergency_name', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($profile, 'emergency_phone', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <div class="form-group">
            <label class="col-sm-4"></label>
            <div class="col-sm-8">
                <span class="required">ผู้สมัครสอบได้รับความยินยอมจากเจ้าของข้อมูลให้ใช้ในการอ้างอิงสำหรับกรณีนี้เป็นที่เรียบร้อยแล้ว</h5>
            </div>
        </div>
    </div>
</div>
<h4 class="fancy">คำถามสำหรับความปลอดภัย</h4>
<div class="row">
    <div class="col-md-6">
        <?php
        echo $form->dropDownListGroup($model, 'secure_question_1', array(
            'widgetOptions' => array(
                'data' => $model->getSecureQuestionOptions($model->secure_question_2),
                'htmlOptions' => array(
                    'id' => 'Account_secure_question_1',
                    'class' => 'input-update',
                    'data-target' => '#Account_secure_question_2',
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($model, 'secure_answer_1', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->dropDownListGroup($model, 'secure_question_2', array(
            'widgetOptions' => array(
                'data' => $model->getSecureQuestionOptions($model->secure_question_1),
                'htmlOptions' => array(
                    'id' => 'Account_secure_question_2',
                    'prompt' => '(กรุณาเลือก)',
                ),
            ),
        ));
        ?>
        <?php
        echo $form->textFieldGroup($model, 'secure_answer_2', array(
            'widgetOptions' => array(
                'htmlOptions' => array(
                    'placeholder' => '',
                ),
            ),
        ));
        ?>
    </div>
</div>
<?php if ($model->isNewRecord): ?>
    <?php if (CCaptcha::checkRequirements()): ?>
        <h4 class="fancy">รหัสป้องกัน Spam</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'verifyCode', array('class' => 'control-label col-sm-3')); ?>
                    <div class="col-sm-9">
                        <?php $this->widget('CCaptcha', array('captchaAction' => 'register/captcha')); ?>
                        <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control')); ?>
                        <div class="hint">Please enter the letters as they are shown in the image above.
                            <br/>Letters are not case-sensitive.</div>
                        <?php echo $form->error($model, 'verifyCode'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <h4 class="fancy">Term of Service / Policy</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dui purus, imperdiet in lectus nec, aliquet aliquam magna. Mauris malesuada lacus dapibus malesuada posuere. Cras vel lorem non justo vulputate molestie vitae at turpis. Quisque ac dui consectetur, rhoncus justo at, ullamcorper massa. Praesent consectetur, leo eget pellentesque luctus, urna purus ultricies velit, a venenatis tortor justo et justo. Donec fringilla nisl ac ante malesuada, ac rhoncus leo hendrerit. In et nulla ultricies, suscipit libero venenatis, aliquet eros. Nullam ut erat dictum, volutpat elit ac, varius dolor.</p>
    <p>Nunc a orci mollis orci dignissim posuere et a neque. Cras vitae feugiat urna, ac tincidunt eros. Duis tempor, nulla eget pharetra convallis, quam mauris porta nisl, in condimentum odio mi eget eros. Curabitur pretium ut dui ultricies malesuada. Cras eu nunc ullamcorper metus molestie condimentum a in leo. Aenean ac condimentum neque. Cras et efficitur lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vitae luctus urna. Pellentesque elementum elit nec volutpat congue. Duis tempor cursus risus, sed viverra diam tempor et.</p>
    <?php
    echo $form->checkBoxGroup($model, 'is_agree', array(
        'widgetOptions' => array(
            'htmlOptions' => array(
                'uncheckValue' => null,
            ),
        ),
    ));
    ?>
<?php endif; ?>
<div class="btn-toolbar well">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'label' => 'Cancel',
        'buttonType' => 'link',
        'url' => CHtml::value($model, 'accountType.accountManagerLink'),
    ));
    ?>
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'label' => 'Submit',
        'buttonType' => 'submit',
        'context' => 'primary',
        'htmlOptions' => array(
            'class' => 'pull-right',
            'onclick' => 'return confirm("ยืนยันการบันทึกข้อมูล")',
        ),
    ));
    ?>
</div>
<?php $this->endWidget(); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#frm-register').change(function () {
            if ($('#Account_entry_code').val() && $('#Account_password_input').val() && $('#Account_password_confirm').val() && $('#Profile_birth_date').val()) {
                $.get('<?php echo $this->createUrl('checkExistingAccount'); ?>', {
                    data: {
                        entry_code: $('#Account_entry_code').val(),
                        password_input: $('#Account_password_input').val(),
                        password_confirm: $('#Account_password_confirm').val(),
                        birth_date: $('#Profile_birth_date').val()
                    }
                }, function (data) {
                    if (data !== 'OK') {
                        $('#base-modal .modal-content').html(data);
                        $('#base-modal').modal('show');
                    }
                });
            }
            initForm();
        });
        initForm();
    });

    function updateAddress() {
        if ($('#Profile_is_same_address').prop('checked')) {
            $('#reply_address_pane input, #reply_address_pane select').prop('disabled', true);
        } else {
            $('#reply_address_pane input, #reply_address_pane select').prop('disabled', false);
        }
    }

    function initForm() {
        $('#Profile_title_id_en').val($('#Profile_title_id_th').val());

        if ($('#Profile_title_id_th').val() === 'O') {
            $('#Profile_title_th').closest('.form-group').show();
        } else {
            $('#Profile_title_th').val($('#Profile_title_id_th').find(":selected").text());
            $('#Profile_title_th').closest('.form-group').hide();
        }

        if ($('#Profile_title_id_en').val() === 'O') {
            $('#Profile_title_en').closest('.form-group').show();
        } else {
            $('#Profile_title_en').val($('#Profile_title_id_en').find(":selected").text());
            $('#Profile_title_en').closest('.form-group').hide();
        }

        if ($('#Profile_work_office_id').val() === '9999') {
            $('#Profile_work_office_other').closest('.form-group').show();
        } else {
            $('#Profile_work_office_other').val($('#Profile_work_office_id').find(":selected").text());
            $('#Profile_work_office_other').closest('.form-group').hide();
        }

        if ($('#Profile_work_level').val() === '99') {
            $('#Profile_work_level_other').closest('.form-group').show();
        } else {
            $('#Profile_work_level_other').val($('#Profile_work_level').find(":selected").text());
            $('#Profile_work_level_other').closest('.form-group').hide();
        }

        if ($('#Profile_educate_degree').val() === 'O') {
            $('#Profile_educate_degree_other').closest('.form-group').show();
        } else {
            $('#Profile_educate_degree_other').val($('#Profile_educate_degree').find(":selected").text());
            $('#Profile_educate_degree_other').closest('.form-group').hide();
        }
    }
</script>