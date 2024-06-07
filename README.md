![CleanShot 2024-06-06 at 23 55 15@2x](https://github.com/1weiho/laravel-example-202406/assets/75478661/7c800ef8-3381-43d8-8c20-c416ed918285)

## Laravel

[Laravel 官方文件](https://laravel.com/docs/11.x)

資料庫加密及去識別化，基本 CRUD 與 Authenticate 範例。

## 初次開發

1. 將原始碼 clone 至本地

```
git clone https://github.com/1weiho/laravel-example-202406.git
```

2. 進入該資料夾

```sh
cd laravel-example-202406
```

3. 安裝相依套件

```sh
composer install
```

4. 複製環境變數 (也可直接複製 `.env.example` 檔案並更名為 `.env`)

```sh
cp .env.example .env
```

5. 產生應用程式私鑰

```sh
php artisan key:generate
```

6. 同步資料庫

```sh
php artisan migrate
```

7. 編輯資料庫連線資訊 (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`)

8. 啟動應用程式

```sh
php artisan serve
```

9. 再開啟一個終端機於此目錄

10. 安裝前端套件

```sh
npm i
```

11. 啟動前端開發環境

```sh
npm run dev
```

12. 訪問網頁

```
http://localhost:8000/
```

## 未來開發

1. 啟動應用程式

```sh
php artisan serve
```

2. 再開啟一個終端機於此目錄

3. 啟動前端開發環境

```sh
npm run dev
```

4. 訪問網頁即可

```
http://localhost:8000/
```

## 常見指令

1. 創建專案

```sh
composer create-project laravel/laravel example-app
```

2. 將新定義於 `migrations` 的表同步至資料庫

```sh
php artisan migrate
```

3. 創建 model

```sh
php artisan make:model User
```

4. 創建 controller

```sh
php artisan make:controller UserController
```
