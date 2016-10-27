<?php
/**
 * File testProcess.php.
 *
 * PHP version 5.3
 *
 * @category  PHP
 * @package   MyTestCodes
 * @author    chenglinz <zhangchenglin@yidai.com>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https:// BSD Licence
 * @link      http://
 */
class testProcess
{

    public function run($n)
    {
        sleep(1);
        echo $n."\n\r";
    }

    public function int()
    {
        $pidArr = array();
        for ($i = 1; $i <= 2; $i++) {
            $pid = pcntl_fork();    //创建子进程
            //父进程和子进程都会执行下面代码
            if ($pid == -1) {
                //错误处理：创建子进程失败时返回-1.
                die('could not fork');
            } elseif ($pid) {
                $pidArr[] = $pid;
            } else {
                //子进程得到的$pid为0, 所以这里是子进程执行的逻辑。
                $this->run($i);
                exit(0) ;
            }
        }

        while (count($pidArr) > 0) {
            foreach ($pidArr as $key => $pid) {
                // 注意这个放外面与放里面的区别,如果是外面就应该比较 $res ==  $pid
                $res = pcntl_waitpid($pid, $status, WNOHANG);
                // If the process has already exited
                if ($res == -1 || $res > 0)
                    unset($pidArr[$key]);
            }

            sleep(1);
        }
        echo "执行完毕\n\r";
    }
}

$a = new testProcess();
$a->int();