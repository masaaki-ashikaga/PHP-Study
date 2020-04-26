<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

//抽象クラス//設定するメソッド関数を強制する。
interface ProductInterface{
    //変数 関数
    // public function echoProduct(){
    //     echo '親クラスです。';
    // }
    //オーバーライド（上書き）
    public function getProduct();
}

interface NewsInterface{
    //変数 関数
    // public function echoProduct(){
    //     echo '親クラスです。';
    // }
    //オーバーライド（上書き）
    public function getNews();
}

//具象クラス
class BaseProduct{
    //変数 関数
    public function echoProduct(){
        echo '親クラスです。';
    }
    //オーバーライド（上書き）
    public function getProduct(){
        echo '親の関数です。';
    }
}

//子クラス
class Product implements ProductInterface, NewsInterface{

    //変数
    private $product =  [];

    //関数
    //初回
    function __construct($product)
    {
        $this->product = $product;
    }

    
    public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .= $item;
    }

    public function getNews(){
        echo 'ニュースです。';
    }

    public static function getStaticProduct($str){
        echo $str;
    }
}

$instance = new Product('テスト');

var_dump($instance);

$instance->getProduct();
echo '<br>';

//親クラスと継承
// $instance->echoProduct();

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

$instance->getNews();
echo '<br>';

Product::getStaticProduct('静的');
echo '<br>';