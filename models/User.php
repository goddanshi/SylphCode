<?php
namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user'; // название таблицы в базе
    }

    public function rules()
    {
        return [
            [['username', 'email', 'password_hash', 'auth_key'], 'required'],
            [['username', 'email'], 'unique'],
            ['email', 'email'],
            ['username', 'string', 'max' => 255],
            ['password_hash', 'string', 'max' => 255],
            ['auth_key', 'string', 'max' => 32],
            ['role', 'in', 'range' => ['admin', 'user']],
            ['role', 'default', 'value' => 'user'],
        ];
    }
  public function isAdmin()
{
    return $this->role === 'admin';
}
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    // Реализация методов IdentityInterface:
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null; // реализуйте если нужно
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    // Поиск пользователя по имени или email для логина
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }
}
