<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Request extends ActiveRecord
{
    const STATUS_NEW = 0;
    const STATUS_IN_PROGRESS = 1;
    const STATUS_CLOSED = 2;

    public static function tableName()
    {
        return 'requests';
    }

    public function rules()
    {
        return [
            ['phone', 'required'],
            ['phone', 'string', 'max' => 20],
            ['status', 'integer'],
            ['description', 'string'],
        ];
    }
    public function getUser()
{
    return $this->hasOne(User::class, ['id' => 'user_id']);
}


    public function getStatusLabel()
    {
        $labels = [
            self::STATUS_NEW => 'Новая',
            self::STATUS_IN_PROGRESS => 'В работе',
            self::STATUS_CLOSED => 'Закрыта',
        ];

        return $labels[$this->status] ?? 'Неизвестно';
    }

    public function beforeSave($insert)
    {
        if ($insert && $this->status === null) {
            $this->status = self::STATUS_NEW;
        }
        return parent::beforeSave($insert);
    }
}
