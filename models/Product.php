<?php

namespace kouosl\product\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property int $count
 * @property string $trademark
 * @property int $barcodeno
 * @property int $price
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'count'], 'required'],
            [['count', 'barcodeno', 'price'], 'integer'],
            [['name', 'trademark'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'count' => 'Count',
            'trademark' => 'Trademark',
            'barcodeno' => 'Barcodeno',
            'price' => 'Price',
        ];
    }
}
