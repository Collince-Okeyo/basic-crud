<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $stud_id
 * @property string $stud_name
 * @property string $stud_class
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stud_id', 'stud_name', 'stud_class'], 'required'],
            [['stud_id'], 'integer'],
            [['stud_name', 'stud_class'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stud_id' => 'Stud ID',
            'stud_name' => 'Stud Name',
            'stud_class' => 'Stud Class',
        ];
    }
}
