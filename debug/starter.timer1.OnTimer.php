<?php global $APPLICATION, $SCREEN, $_c, $progDir, $_PARAMS, $argv;global $APPLICATION, $SCREEN, $_c, $progDir, $_PARAMS, $argv;$self=_c(13679584);c("progress1")->position +=1; // �.�. ����� � ��� ����� 1000 �� = 1 �,�� ��������� ������ ������� �� 1 ������ � �������� ���,� �� ��������� � �������� ���� �������� ����� 100.
$time = c("progress1")->position; // ���������� $time - ������� �������� ����
if($time==100){
c("timer1")->enable = false;
c("button1")->enabled = true;
ShowForm(c("Desktop"), SW_SHOWMODAL);
HideForm(c('Starter'), SW_SHOWMODAL);
}
// ���� ������� �������� ���� 100(�.�. �����) ����������� ������ � ���������� ������
// 100 - ������� �������� ����,��� ������� ���������� �������� ��������� ������� ����