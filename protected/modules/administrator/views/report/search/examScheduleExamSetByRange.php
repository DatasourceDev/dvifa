<?php
$model->search['exam_schedule_date_start'] = CHtml::value($model, 'search.exam_schedule_date_start', date('Y-m-d', strtotime('first day of this month')));
$model->search['exam_schedule_date_end'] = CHtml::value($model, 'search.exam_schedule_date_end', date('Y-m-d', strtotime('last day of this month')));
$criteria = new CDbCriteria();
$criteria->addBetweenCondition('DATE(db_date)', $model->search['exam_schedule_date_start'], $model->search['exam_schedule_date_end']);
$this->beginWidget('booster.widgets.TbPanel', array(
    'title' => 'ค้นหาตามเงื่อนไข',
));
?>
<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'frm-export',
    'type' => 'horizontal',
    'method' => 'get',
    'action' => array('index'),
        ));
?>
<?php
echo $form->datePickerGroup($model, 'search[exam_schedule_date_start]', array(
    'widgetOptions' => array(
        'htmlOptions' => array(
            'id' => 'exam_schedule_date_start',
            'placeholder' => '',
            'class' => 'date-update',
            'data-target' => '#exam_schedule_id',
        ),
    ),
    'labelOptions' => array(
        'label' => 'ตั้งแต่วันที่',
    ),
));
?>
<?php
echo $form->datePickerGroup($model, 'search[exam_schedule_date_end]', array(
    'widgetOptions' => array(
        'htmlOptions' => array(
            'id' => 'exam_schedule_date_end',
            'placeholder' => '',
            'class' => 'date-update',
            'data-target' => '#exam_schedule_id',
        ),
    ),
    'labelOptions' => array(
        'label' => 'ถึงวันที่',
    ),
));
?>
<?php $this->endWidget(); ?>
<?php
$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
    'id' => 'frm-export',
    'type' => 'horizontal',
    'method' => 'get',
    'action' => array('print'),
    'htmlOptions' => array(
        'target' => '_blank',
    ),
        ));
?>
<?php
echo $form->dropDownListGroup($model, 'exam_schedule_id', array(
    'widgetOptions' => array(
        'htmlOptions' => array(
            'id' => 'exam_schedule_id',
        ),
        'data' => CHtml::listData(ExamSchedule::model()->sortBy('exam_code DESC')->findAll($criteria), 'id', 'textExamCode'),
    ),
    'labelOptions' => array(
        'label' => 'รอบสอบ',
    ),
));
?>
<div class="form-group">
    <div class="col-sm-9 col-sm-offset-3">
        <?php
        $this->widget('booster.widgets.TbButton', array(
            'label' => 'พิมพ์รายงาน',
            'icon' => 'print',
            'buttonType' => 'submit',
            'htmlOptions' => array(
                'name' => 'mode',
                'value' => 'pdf',
            ),
            'context' => 'info',
        ));
        ?>
        <?php
        $this->widget('booster.widgets.TbButton', array(
            'label' => 'ส่งออกไฟล์ XLS',
            'icon' => 'export',
            'buttonType' => 'submit',
            'htmlOptions' => array(
                'name' => 'mode',
                'value' => 'xls',
            ),
            'context' => 'success',
        ));
        ?>
    </div>
</div>
<?php $this->endWidget(); ?>
<?php $this->endWidget(); ?>

<script type="text/javascript">
    $(document).ready(function () {

    });
</script>