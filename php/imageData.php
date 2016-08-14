<?php
class imgdata{
    public $imgsrc;
    public $imgdata;
    public $imgform;
    public function getdir($source){
        $this->imgsrc  = $source;
    }
    public function img2data(){
        $this->_imgfrom($this->imgsrc);
//        return $this->imgdata=fread(fopen($this->imgsrc,'rb'),filesize($this->imgsrc));
//        return $this->imgdata=fread(fopen($this->imgsrc,'rb'),14);
        return $this->imgdata = file_get_contents($this->imgsrc);
    }
    public function data2img(){
        header("content-type:$this->imgform");
        $a = bin2hex($this->imgdata);
//        $a = substr_replace($a, '89504E47', 0, 6);
        echo $this->hex2bin($a);
//        echo $this->imgdata;
//        echo $this->imgform;
        //imagecreatefromstring($this->imgdata);
//        $strInfo = @unpack("C2chars", $this->imgdata);
//        var_dump($strInfo);
    }
    public function _imgfrom($imgsrc){
        $info=getimagesize($imgsrc);
//        var_dump($info);die();
        return $this->imgform = $info['mime'];
    }

    public function hex2bin($h)
    {
        if (!is_string($h)) return null;
        $r='';
        for ($a=0; $a<strlen($h); $a+=2) {
            $r.=chr(hexdec($h[$a].$h[$a+1]));
        }
        return $r;
    }
}
$n = new imgdata;
$n -> getdir("/Users/chenglinz/Pictures/190203_WQ0U_2359467.jpg");
$n -> img2data();
$n -> data2img();