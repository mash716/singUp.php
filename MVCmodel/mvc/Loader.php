<?php
class Loader{
    //オートロード対象のディレクトリを保持するプロパティ
    protected $_directories = array();

    public function regDirectiry($dir){
        $this->_directories[ ] = $dir;
    }

    //クラスを読み込むメソッドをコールバックとして登録
    public function register(){
        spl_sutoload_register(array($this,'requireClsFile'));
    }

    //register()によってオートロードに登録されたコールバック
    public function requireClsFile($class){
        //オートロードが実行されるとパラメータ$classにオートロード対象のクラス名が渡される
        foreach ($this->_directories as $dir){

            $file = $dir . '/' .$class .'.php';

            if(is_readable($file)){
                require $file;
                return;
            }
        }
    }
}
?>