<?php global $APPLICATION, $SCREEN, $_c, $progDir, $_PARAMS, $argv;global $APPLICATION, $SCREEN, $_c, $progDir, $_PARAMS, $argv;$self=_c(13679584);c("progress1")->position +=1; // т.к. время у нас стоит 1000 мс = 1 с,то добавляет каждую секунду по 1 штучке в прогресс бар,а по стандарту в прогресс баре максимум стоит 100.
$time = c("progress1")->position; // переменная $time - позиция прогресс бара
if($time==100){
c("timer1")->enable = false;
c("button1")->enabled = true;
ShowForm(c("Desktop"), SW_SHOWMODAL);
HideForm(c('Starter'), SW_SHOWMODAL);
}
// если позиция прогресс бара 100(т.е. конец) выключается таймер и включается кнопка
// 100 - позиция прогресс бара,при которой происходят действия описанные строкой выше