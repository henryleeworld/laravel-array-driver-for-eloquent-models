# Laravel 11 Eloquent 模型陣列驅動

引入 calebporzio 的 sushi 套件來擴增 Eloquent 模型陣列驅動，允許從資料庫以外的資料來源建立 Eloquent 模型來查詢提供的已寫死陣列資料。

## 使用方式
- 打開 php.ini 檔案，啟用 PHP 擴充模組 sqlite3，並重啟服務器。
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/users/{姓名}` 來進行使用者查詢。

----

## 畫面截圖
![](https://i.imgur.com/jIscePU.png)
> 可以從已寫死陣列中取得資料
