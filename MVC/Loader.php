<?php
class Loader{
    //配列にて格納場所をクラス内のみの定義で作成する
    protected $_directorise = array();
    //***regDirectiry() メソッド省略***
    //***regDirectiry() メソッド省略***

    //register()によってオートロードに登録されたコールバック
    public function requireClsFile($class){

        foreach ($this->_directorise as $dir){

            $file = $dir . '/' . $class . '.php';
            if(is_readable($file)){
                require $file;
                return;
            }
        }
    }
}
?>