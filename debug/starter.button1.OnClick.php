<?php global $APPLICATION, $SCREEN, $_c, $progDir, $_PARAMS, $argv;global $APPLICATION, $SCREEN, $_c, $progDir, $_PARAMS, $argv;$self=_c(13149248);c("timer1")->enable = true; // включает наш таймер,с которым мы разберёмся чуть ниже
c("timer1")->repeat = true; // включает повторение
c("button1")->enabled = false; // кнопку нажать нельзя
c("progress1")->position=0;