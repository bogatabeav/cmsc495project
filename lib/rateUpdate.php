<?php



$url ="http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.xchange%20where%20pair%20in%20(%22USDAED%22%2C%22USDAFN%22%2C%22USDALL%22%2C%22USDAMD%22%2C%22USDANG%22%2C%22USDAOA%22%2C%22USDARS%22%2C%22USDAUD%22%2C%22USDAWG%22%2C%22USDAZN%22%2C%22USDBAM%22%2C%22USDBBD%22%2C%22USDBDT%22%2C%22USDBGN%22%2C%22USDBHD%22%2C%22USDBIF%22%2C%22USDBMD%22%2C%22USDBND%22%2C%22USDBOB%22%2C%22USDBOV%22%2C%22USDBRL%22%2C%22USDBSD%22%2C%22USDBTN%22%2C%22USDBWP%22%2C%22USDBYR%22%2C%22USDBZD%22%2C%22USDCAD%22%2C%22USDCDF%22%2C%22USDCHE%22%2C%22USDCHF%22%2C%22USDCHW%22%2C%22USDCLF%22%2C%22USDCLP%22%2C%22USDCNY%22%2C%22USDCOP%22%2C%22USDCOU%22%2C%22USDCRC%22%2C%22USDCUP%22%2C%22USDCVE%22%2C%22USDCYP%22%2C%22USDCZK%22%2C%22USDDJF%22%2C%22USDDKK%22%2C%22USDDOP%22%2C%22USDDZD%22%2C%22USDEEK%22%2C%22USDEGP%22%2C%22USDERN%22%2C%22USDETB%22%2C%22USDEUR%22%2C%22USDFJD%22%2C%22USDFKP%22%2C%22USDGBP%22%2C%22USDGEL%22%2C%22USDGHS%22%2C%22USDGIP%22%2C%22USDGMD%22%2C%22USDGNF%22%2C%22USDGTQ%22%2C%22USDGYD%22%2C%22USDHKD%22%2C%22USDHNL%22%2C%22USDHRK%22%2C%22USDHTG%22%2C%22USDHUF%22%2C%22USDIDR%22%2C%22USDILS%22%2C%22USDINR%22%2C%22USDIQD%22%2C%22USDIRR%22%2C%22USDISK%22%2C%22USDJMD%22%2C%22USDJOD%22%2C%22USDJPY%22%2C%22USDKES%22%2C%22USDKGS%22%2C%22USDKHR%22%2C%22USDKMF%22%2C%22USDKPW%22%2C%22USDKRW%22%2C%22USDKWD%22%2C%22USDKYD%22%2C%22USDKZT%22%2C%22USDLAK%22%2C%22USDLBP%22%2C%22USDLKR%22%2C%22USDLRD%22%2C%22USDLSL%22%2C%22USDLTL%22%2C%22USDLVL%22%2C%22USDLYD%22%2C%22USDMAD%22%2C%22USDMDL%22%2C%22USDMGA%22%2C%22USDMKD%22%2C%22USDMMK%22%2C%22USDMNT%22%2C%22USDMOP%22%2C%22USDMRO%22%2C%22USDMTL%22%2C%22USDMUR%22%2C%22USDMVR%22%2C%22USDMWK%22%2C%22USDMXN%22%2C%22USDMXV%22%2C%22USDMYR%22%2C%22USDMZN%22%2C%22USDNAD%22%2C%22USDNGN%22%2C%22USDNIO%22%2C%22USDNOK%22%2C%22USDNPR%22%2C%22USDNZD%22%2C%22USDOMR%22%2C%22USDPAB%22%2C%22USDPEN%22%2C%22USDPGK%22%2C%22USDPHP%22%2C%22USDPKR%22%2C%22USDPLN%22%2C%22USDPYG%22%2C%22USDQAR%22%2C%22USDRON%22%2C%22USDRSD%22%2C%22USDRUB%22%2C%22USDRWF%22%2C%22USDSAR%22%2C%22USDSBD%22%2C%22USDSCR%22%2C%22USDSDG%22%2C%22USDSEK%22%2C%22USDSGD%22%2C%22USDSHP%22%2C%22USDSKK%22%2C%22USDSLL%22%2C%22USDSOS%22%2C%22USDSRD%22%2C%22USDSTD%22%2C%22USDSYP%22%2C%22USDSZL%22%2C%22USDTHB%22%2C%22USDTJS%22%2C%22USDTMM%22%2C%22USDTND%22%2C%22USDTOP%22%2C%22USDTRY%22%2C%22USDTTD%22%2C%22USDTWD%22%2C%22USDTZS%22%2C%22USDUAH%22%2C%22USDUGX%22%2C%22USDUSD%22%2C%22USDUYU%22%2C%22USDUZS%22%2C%22USDVEB%22%2C%22USDVND%22%2C%22USDVUV%22%2C%22USDWST%22%2C%22USDXAF%22%2C%22USDXCD%22%2C%22USDXDR%22%2C%22USDXFO%22%2C%22USDXFU%22%2C%22USDXOF%22%2C%22USDXPF%22%2C%22USDYER%22%2C%22USDZAR%22%2C%22USDZMK%22%2C%22USDZWD%22)&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";

$xml = simplexml_load_file($url);

print_r($xml);
?>
