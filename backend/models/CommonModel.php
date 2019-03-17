<?php
namespace backend\models;
use backend\modules\admin\models\User;
use yii\db\ActiveRecord;

/**
 * Created by PhpStorm.
 * User: GCLion
 * Date: 2019/1/27
 * Time: 11:59
 */
class CommonModel extends ActiveRecord
{

    public $username;
    public $password;
    private static $pri_key = 'KINGANDQUEENISALL';

    # 验证密码
    public static function validatePassword($username,$password)
    {
        # 查询用户名
        $userModel = new User();
        $result = User::find()->select('id,password')->where(['username'=>$username])->asArray()->one();
        if(!empty($result)){
            if(self::encryptPassword($username,$password) === $result['password']) return $result['id'];
            else return false;
        }else{
            return false;
        }

    }

    # 密码加密
    public static function encryptPassword($username,$password)
    {
        $pri_key = self::$pri_key;

        return md5(md5($username.$password).$pri_key);
    }

    # 生成token
    public static function createToken($username,$password)
    {
        $last_login_times = User::find()->select('last_login_times')->where(['username'=>$username])->asArray()->scalar();

        return md5(md5($username.$password.$last_login_times).self::$pri_key);

    }

}