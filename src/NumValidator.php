<?php

namespace matteo\validators;

class NumValidator extends \yii\validators\Validator
{
    public function validateAttribute($model, $attribute)
    {
        if (!ctype_digit($model->$attribute)) {
            $this->addError($model, $attribute, 'Only decimal digits');
        }

    }
}