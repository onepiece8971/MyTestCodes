//中文标点转为英文标点,全角转半角
function DBC2SBC(str) {
    var result = '';
    for (i = 0; i < str.length; i++) {
        code = str.charCodeAt(i); //获取当前字符的unicode编码
        if (code >= 65281 && code <= 65373)//在这个unicode编码范围中的是所有的英文字母已及各种字符
        {
            result += String.fromCharCode(code - 65248); //把全角字符的unicode编码转换为对应半角字符的unicode码
        } else if (code == 9) {
            result += String.fromCharCode(32);
        } else if (code == 12288) {
            result += String.fromCharCode(32);
        } else if (code == 12290) {
            result += String.fromCharCode(46);
        } else if (code == 8212) {
            result += String.fromCharCode(45);
        } else if (code == 8216) {
            result += String.fromCharCode(39);
        } else if (code == 8217) {
            result += String.fromCharCode(39);
        } else if (code == 8220){
            result += String.fromCharCode(34);
        } else if (code == 8221) {
            result += String.fromCharCode(34);
        } else if (code == 65533) { //非utf-8的全角逗号,可能是gbk
            result += String.fromCharCode(44);
        } else {
            result += str.charAt(i);
        }
    }
    return result;
}