<div class="topic"><?php echo Yii::t('app', 'Forgot Username'); ?></div>
<?php
$form = $this->beginWidget('CodeskActiveForm', array(
    'type' => 'horizontal',
    'action' => array('saveForgotUsername'),
    'htmlOptions' => array(
        'id' => 'frm-forgot',
        'enctype' => 'multipart/form-data',
    ),
    ));
?>
<?php
echo $form->textFieldGroup($model, 'title', array(
));
?>
<?php
echo $form->textFieldGroup($model, 'firstname', array(
));
?>
<?php
echo $form->textFieldGroup($model, 'midname', array(
));
?>
<?php
echo $form->textFieldGroup($model, 'lastname', array(
));
?>
<?php
echo $form->textFieldGroup($model, 'topic', array(
    'widgetOptions' => array(
        'htmlOptions' => array(
            'value' => 'I forgot my username.',
            'readonly' => true,
        ),
    ),
));
?>
<?php
echo $form->emailFieldGroup($model, 'email', array(
    'prepend' => Helper::glyphicon('envelope'),
));
?>
<?php
echo $form->textFieldGroup($model, 'place_of_birth', array(
));
?>
<?php
echo $form->fileFieldGroup($model, 'attachment_file', array(
    'hint' => 'Please attach copy version of your passport book.',
    'labelOptions' => array(
        'required' => true,
    ),
));
?>
<?php if (CCaptcha::checkRequirements()): ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'verifyCode', array('class' => 'control-label col-sm-3')); ?>
        <div class="col-sm-9">
            <div class="g-recaptcha" data-sitekey="<?php echo CHtml::value(Yii::app()->params, 'reCaptcha.siteKey'); ?>"></div>
            <?php echo $form->error($model, 'verifyCode'); ?>
            <div class="help-block error" id="recaptcha-error" style="display:none"></div>
        </div>
    </div>
        
<?php endif; ?>
<div class="form-group">
    <div class="col-md-9 col-md-offset-3">
        <?php
    $this->widget('booster.widgets.TbButton', array(
        'label' => Helper::t('Submit', 'Submit'),
        'buttonType' => 'submit',
        'context' => 'primary',
        'htmlOptions' => array(
            'onclick' => 'return confirm("Do you want to submit the form?")',
        ),
    ));
    ?>
    </div>
</div>
<?php $this->endWidget(); ?>
<script type="text/javascript">
    function get_action() {
        var v = grecaptcha.getResponse();
        console.log("Resp" + v);
        if (v == '') {
            $('#recaptcha-error').show();
            document.getElementById('recaptcha-error').innerHTML = "กรุณายืนยันรหัสป้องกัน";
            return false;
        }
        else {
            $('#recaptcha-error').hide();
            return true;
        }
    }
    $(document).ready(function () {
        $('#frm-forgot').on('submit', function(e){
            e.preventDefault();
            //var action = get_action();
            //if(action == true){
                this.submit();
            //}
        });
    });
</script>