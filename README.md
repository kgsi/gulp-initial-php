# gulp-initial-php

##About
GulpベースのPHPの使用を想定したWEBアプリ・サイト向けテンプレートプロジェクトです。

##Directory

    dist  // Dist directory
     └ assets
        └ sass   
        └ app      // Root Directory
        └ include  // Common parts
        └ js
          └ src
          └ vendor
        └ images
    package.json
    gulpfile.js
    bower.json
    gulp
     └ tasks       
	    config.js

## Spec
 * SASS
 * Minify & Concat JS,CSS 
 * Autoprefix(pleeease)
 * Image minify(pngquant, jpegtran)
 * BrowserSync
 * ~~Crtitical CSS~~
 * ~~StyleGuide(Styledocco)~~
 
## bower
bowerに登録済みかつダウンロード済みのファイルは、watchコマンドを実行した際自動的に**assets/js/vendor/libs.js**に出力されます。

### Default library
 * jQuery
 * Tween Max

## Usage

### Download
リポジトリをダウンロードして指定のディレクトリに移動します。
もしくはcloneコマンドでデータをコピー

    $ git clone git://github.com/kgsi/gulp-initial-php.git

### Install

#### Bower(登録されているlibraryのダウンロード)
    $ bower install 

#### Install npm
    $ sudo npm install

### Setup
ローカル環境にApache,PHPが動作する環境を用意することが必須です。
MAMPの使用を想定しており、初期Proxyは**localhost:8888**にセットしています。

[MAMP](https://www.mamp.info/de/)を使用している場合はMAMPを起動後、/appディレクトリを
ルートディレクトリとして設定、起動してください。

### Command

#### Watch

    $ gulp

#### dist

    $ gulp dist

<!--#### critical css

    $ gulp critical

#### styleguide css

    $ gulp styleguide
-->
## Author

### kgsi

* [Personal site](http://aircolor.org)
* [twitter](https://twitter.com/kgsi)
* [Facebook](https://www.facebook.com/shinichi.kogiso)
