<?php echo Helper::htmlTopic('รายชื่อติดหน้าห้องสอบ'); ?>
<div class="btn-toolbar">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'label' => 'พิมพ์รายงาน',
        'icon' => 'print',
        'context' => 'primary',
        'buttonType' => 'link',
        'url' => array('print'),
        'htmlOptions' => array(
            'target' => '_blank',
        ),
    ));
    ?>
</div>
<?php
$this->renderPartial('//shared/docExamScheduleHeader', array(
    'title' => 'รายชื่อผู้เข้ารับการทดสอบวัดระดับความรู้ภาษาอังกฤษ',
    'examSchedule' => $this->examSchedule,
))
?>
<br/>
<table border="1" style="border-collapse: collapse;" width="100%">
    <thead>
        <tr>
            <th class="text-center">เลขที่</th>
            <th class="text-center">ชื่อ-นามสกุล</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->examSchedule->examApplications as $application): ?>
            <tr>
                <td class="text-center"><?php echo str_pad(CHtml::value($application, 'desk_no'), 3, '0', STR_PAD_LEFT); ?></td>
                <td><?php echo CHtml::value($application, 'account.profile.fullname'); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody> 
</table>