<?php
//$user=$_POST['shu'];
include_once 'bx.html';
$rows = 5+1; //��
$cols = 7; //��

$tab_str = "<table>\n";

for ($i = 0; $i < $rows; $i++)
{
    $tab_str.="<tr>\n";
    for ($k = 0; $k < $cols; $k++)
    {
        $j = $i * $cols + $k; //��Ԫ������
		if($i==0)
		{
			if($k==0){$tab_str.= "<td >�γ�����</td>\n";}
			if($k==1){$tab_str.= "<td >����ѧԺ</td>\n";}
			if($k==2){$tab_str.= "<td >�ڿν�ʦ</td>\n";}
			if($k==3){$tab_str.= "<td >ѧʱ</td>\n";}
			if($k==4){$tab_str.= "<td >ѧ��</td>\n";}
			if($k==5){$tab_str.= "<td >��ѡ����</td>\n";}
			if($k==6){$tab_str.= "<td >ѡ��</td>\n";}
		}
		else{$tab_str.= "<td > </td>\n";}
	
    }
    $tab_str.="</tr>\n";
}
$tab_str.="</table>\n";

print $tab_str;
?>