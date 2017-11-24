<?php

namespace common\models;

class Feedback extends \yii\db\ActiveRecord {

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
                'text'
            ], 'safe'],
        ];

    }

}