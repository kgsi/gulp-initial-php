# gulp-initial-php

##About
GulpベースのPHPの使用を想定したWEBアプリ・サイト向けテンプレートプロジェクトです。

##Directory

    dist  //Dist directory
     └ assets
        └ sass   
        └ app      // program file 
        └ include  // common parts
        └ js
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

### Install

    $ bower install
    $ sudo npm install

### Setup
ローカル環境にApache,PHPが動作する環境を用意することが必須です。
MAMPの使用を想定しており、初期Proxyは**localhost:8888**にセットしています。

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
