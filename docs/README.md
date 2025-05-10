```shell
sudo docker compose up -d

composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/
composer config -g --unset repos.packagist
composer config -g repos.packagist composer https://mirrors.tencent.com/composer/
composer config -g --unset repos.packagist

composer require dcat/laravel-admin:"2.*" -vvv
composer require dcat/easy-excel
composer require symfony/cache
composer require doctrine/cache
composer require luomor/dcat-nas-media @dev
composer require league/flysystem-aws-s3-v3

composer require "overtrue/wechat:^5.36"

composer require "overtrue/laravel-filesystem-cos" -vvv
composer require catfan/Medoo
composer require laravel/passport
php artisan migrate
php artisan passport:install
php artisan passport:install --uuids
php artisan passport:keys
php artisan passport:client
composer require luomor/openapidoc

composer install
composer update
composer update -vvv
composer update -W

composer clear-cache

php artisan admin:publish
php artisan admin:install

npm -v
npm config set registry https://registry.npm.taobao.org
php artisan admin:minify orange --color fbbd08 --publish

chmod 777 public
chmod 777 storage
chmod 777 storage/app
chmod 777 storage/app/public
chmod 777 storage/framework
chmod 777 storage/framework/cache
chmod 777 storage/framework/cache/data
chmod 777 storage/framework/sessions
chmod 777 storage/framework/testing
chmod 777 storage/framework/views
chmod 777 storage/logs
chmod -R 777 storage/logs/laravel.log
chmod 777 bootstrap/cache/
chmod 777 storage/app/public/image/
chmod 777 storage/app/public/temporary/

mkdir public/uploads
chmod 777 public/uploads
mkdir public/admin
chmod 777 public/admin
chmod 777 .env
chmod 777 config/

create database tfshop default character set utf8mb4 collate utf8mb4_unicode_ci;

php artisan migrate
php artisan generate:sql pure
php artisan storage:link
php artisan key:generate
php artisan passport:install --uuids
php artisan passport:keys
php artisan passport:client --password
php artisan passport:client --password

chmod +x node_modules/.bin/*
cnpm install
npm rebuild node-sass
npm run dev

php artisan app:sync-resource-to-oss

npm 官方原始镜像网址是：https://registry.npmjs.org/
淘宝 NPM 镜像：http://registry.npmmirror.com
阿里云 NPM 镜像：https://npm.aliyun.com
腾讯云 NPM 镜像：https://mirrors.cloud.tencent.com/npm/
华为云 NPM 镜像：https://mirrors.huaweicloud.com/repository/npm/
网易 NPM 镜像：https://mirrors.163.com/npm/
中国科学技术大学开源镜像站：http://mirrors.ustc.edu.cn/
清华大学开源镜像站：https://mirrors.tuna.tsinghua.edu.cn/

npm config set registry https://registry.npmmirror.com
npm config get registry
https://registry.npmjs.org/
```