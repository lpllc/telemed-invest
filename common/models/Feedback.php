<?php

namespace common\models;
use Yii;

class Feedback extends \yii\db\ActiveRecord {

    public $reCaptcha;

    public static function tableName()
    {
        return 'feedback';
    }


    public function rules()
    {
        return [
            [[  "id",
                'name',
                'contacts',
                'theme',
                'text',
            ], 'safe'],
         [['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6Lf2gDsUAAAAAGlBwj0gPFceC0MEm2DDOKbY9D-H','skipOnEmpty' => false, 'uncheckedMessage' => 'Please confirm that you are not a bot.']
        ];

    }



}