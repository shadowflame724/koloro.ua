<?php

use App\Models\Permission;
use App\Models\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        $superadmin = Role::create([
            'name' => 'superadmin',
            'display_name' => 'superadmin',
            'description' => 'superadmin',
        ]);

        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'admin',
            'description' => 'admin',
        ]);

        $author = Role::create([
            'name' => 'author',
            'display_name' => 'author',
            'description' => 'author',
        ]);

        $user->attachRole($superadmin);

        $permission = [
            //blog permissions
            [
                'name' => 'blog-create',
                'display_name' => 'Создавать Статью',
            ],
            [
                'name' => 'blog-edit',
                'display_name' => 'Изменять Статью',
            ],
            [
                'name' => 'blog-index',
                'display_name' => 'Видеть Статьи',
            ],
            [
                'name' => 'blog-delete',
                'display_name' => 'Удалять Статью',
            ],
            //end blog permissions

            //blogcategory
            [
                'name' => 'blogcategory-create',
                'display_name' => 'Создавать Категорию Блога',
            ],
            [
                'name' => 'blogcategory-edit',
                'display_name' => 'Изменять Категорию Блога',
            ],
            [
                'name' => 'blogcategory-index',
                'display_name' => 'Видеть Категории Блога',
            ],
            [
                'name' => 'blogcategory-delete',
                'display_name' => 'Удалять Категорию Блога',
            ],
            //end blogcategory

            //callback
            [
                'name' => 'callback',
                'display_name' => 'Обратный звонок',
            ],
            //end callback

            //form
            [
                'name' => 'form',
                'display_name' => 'Удалять Форму',
            ],
            //endform

            //subscription
            [
                'name' => 'subscription',
                'display_name' => 'Удалять Подписку',
            ],
            //endsubscription

            //meta
            [
                'name' => 'meta',
                'display_name' => 'Edit Meta',
            ],
            //end meta

            //roles
            [
                'name' => 'role-create',
                'display_name' => 'Создавать Роль',
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Изменять Роль',
            ],
            [
                'name' => 'role-index',
                'display_name' => 'Видеть Роли',
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Удалять Роль',
            ],
            //end roles

            //service
            [
                'name' => 'service-index',
                'display_name' => 'Видеть Услуги',
            ],
            [
                'name' => 'service-create',
                'display_name' => 'Создавать Услугу',
            ],
            [
                'name' => 'service-edit',
                'display_name' => 'Изменять Услугу',
            ],
            [
                'name' => 'service-delete',
                'display_name' => 'Удалять Услугу',
            ],
            //end service

            //servicecategory
            [
                'name' => 'servicecategory-create',
                'display_name' => 'Создавать Категорию Услуг',
            ],
            [
                'name' => 'servicecategory-edit',
                'display_name' => 'Изменять Категорию Услуг',
            ],
            [
                'name' => 'servicecategory-index',
                'display_name' => 'Видеть Категории Услуг',
            ],
            [
                'name' => 'servicecategory-delete',
                'display_name' => 'Удалять Категорию Услуг',
            ],
            //end servicecategory

            //users
            [
                'name' => 'user-create',
                'display_name' => 'Создавать Пользователя',
            ],
            [
                'name' => 'user-edit',
                'display_name' => 'Изменять Пользователя',
            ],
            [
                'name' => 'user-index',
                'display_name' => 'Видеть Пользователя',
            ],
            [
                'name' => 'user-delete',
                'display_name' => 'Удалять Пользователя',
            ],
            //end users
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value)->roles()->attach($superadmin->id);
        }
    }
}
