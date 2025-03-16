<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\rbac\DbManager;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // Clear existing roles & permissions
        $auth->removeAll();

        // Create Roles
        $admin = $auth->createRole('Administrator');
        $user = $auth->createRole('User');
        $auth->add($admin);
        $auth->add($user);

        // Create Permissions
        $index = $auth->createPermission('modules/index');
        $view = $auth->createPermission('modules/view');
        $create = $auth->createPermission('modules/create');
        $delete = $auth->createPermission('modules/delete');
        
        $auth->add($index);
        $auth->add($view);
        $auth->add($create);
        $auth->add($delete);

        // Assign permissions to roles
        $auth->addChild($admin, $index);
        $auth->addChild($admin, $view);
        $auth->addChild($admin, $create);
        $auth->addChild($admin, $delete);

        $auth->addChild($user, $index);
        $auth->addChild($user, $view);

        // Assign a role to a specific user (e.g., User ID 1)
        $auth->assign($admin, 1);  // Assign Admin role to user with ID 1
        $auth->assign($user, 2);   // Assign User role to user with ID 2

        echo "RBAC roles and permissions have been set up successfully.\n";
    }
} 

?>
