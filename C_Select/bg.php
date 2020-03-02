<?php
//$user=$_POST['shu'];
include_once 'bx.html';
$rows = 5+1; //行
$cols = 7; //列

$tab_str = "<table>\n";

for ($i = 0; $i < $rows; $i++)
{
    $tab_str.="<tr>\n";
    for ($k = 0; $k < $cols; $k++)
    {
        $j = $i * $cols + $k; //单元格序列
		if($i==0)
		{
			if($k==0){$tab_str.= "<td >课程名称</td>\n";}
			if($k==1){$tab_str.= "<td >开设学院</td>\n";}
			if($k==2){$tab_str.= "<td >授课教师</td>\n";}
			if($k==3){$tab_str.= "<td >学时</td>\n";}
			if($k==4){$tab_str.= "<td >学分</td>\n";}
			if($k==5){$tab_str.= "<td >已选人数</td>\n";}
			if($k==6){$tab_str.= "<td >选课</td>\n";}
		}
		else{$tab_str.= "<td > </td>\n";}
	
    }
    $tab_str.="</tr>\n";
}
$tab_str.="</table>\n";

print $tab_str;
?>