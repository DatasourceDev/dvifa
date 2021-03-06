<?php

class AdministratorModule extends CWebModule {

    public $title = 'DVIFA Control Panel';
    public $layout = 'administrator.views.layouts.main';
    public $defaultController = 'home';
    private $_assetUrl;

    public function init() {
        parent::init();
        Yii::app()->language = 'th';
        Yii::import('administrator.components.*');
        Yii::import('administrator.models.*');
        Yii::app()->setComponents(array(
            'errorHandler' => array(
                'class' => 'CErrorHandler',
                'errorAction' => '/administrator/home/error',
            ),
            'user' => array(
                'class' => 'AdministratorWebUser',
                'allowAutoLogin' => true,
                'loginUrl' => Yii::app()->createUrl('administrator/home/login'),
            ),
            'widgetFactory' => array(
                'class' => 'CWidgetFactory',
                'widgets' => array(
                    'TbRedactorJs' => array(
                        'editorOptions' => array(
                            'plugins' => array(
                                'fontcolor',
                                'fontsize',
                            ),
                        ),
                    ),
                    'TbEditableField' => array(
                        'options' => array(
                            'error' => 'js:function(response, newValue){
                                return response.responseText;
                            }',
                        ),
                    ),
                    'TbGridView' => array(
                        'template' => '{items}{summary}{pager}',
                        'summaryText' => 'แสดงรายการที่ {start} ถึง {end} จากทั้งหมด {count} รายการ',
                        'type' => array('bordered', 'condensed'),
                    ),
                    'TbDatePicker' => array(
                        'options' => array(
                            'autoclose' => true,
                            'format' => 'yyyy-mm-dd',
                        ),
                    ),
                    'TbTimePicker' => array(
                        'options' => array(
                            'showMeridian' => false,
                            'defaultTime' => false,
                        ),
                    ),
                ),
            ),
                ), false);
    }

    public function getAssetUrl() {
        if (!isset($this->_assetUrl)) {
            $this->_assetUrl = Yii::app()->assetManager->publish(dirname(__FILE__) . '/assets', false, -1, YII_DEBUG);
        }
        return $this->_assetUrl;
    }

    public function getHomeUrl() {
        return Yii::app()->createUrl('/administrator');
    }

    public function getImageUrl($name, $ext = 'png') {
        return $this->assetUrl . '/images/' . $name . '.' . $ext;
    }

    public function getImage($name, $options = array(), $ext = 'png') {
        return CHtml::image($this->getImageUrl($name, $ext), '', $options);
    }

    public function getMenuIcon($name) {
        return CHtml::image($this->getImageUrl($name), '', array(
                    'class' => 'nav-menu-icon',
        ));
    }

}
