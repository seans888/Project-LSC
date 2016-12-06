<?php
namespace tests\overrides;

use dosamigos\datepicker\DateRangePicker;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\View;

class TestDateRangePicker extends DateRangePicker
{
    /**
     * Registers required script for the plugin to work as a DateTimePicker
     */
    public function registerClientScript()
    {

        $view = $this->getView();

        if($this->language !== null) {
            $this->clientOptions['language'] = $this->language;
            TestDatePickerLanguageAsset::register($view)->js[] = 'bootstrap-datepicker.' . $this->language . '.min.js';
        } else {
            TestDateRangePickerAsset::register($view);
        }

        $id = $this->options['id'];
        $selector = ";jQuery('#$id').parent()";
        if($this->form && $this->hasModel()) {
            $selector .= '.parent()';
            $class = "field-" . Html::getInputId($this->model, $this->attribute);
            $js[] = "$selector.closest('.$class').removeClass('$class');";
        }

        $options = !empty($this->clientOptions) ? Json::encode($this->clientOptions) : '';

        $js[] = "$selector.datepicker($options);";

        if (!empty($this->clientEvents)) {
            foreach ($this->clientEvents as $event => $handler) {
                $js[] = "$selector.on('$event', $handler);";
            }
        }
        $view->registerJs(implode("\n", $js), View::POS_READY, 'test-daterangepicker-js');
    }
}
