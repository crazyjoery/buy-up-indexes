<!-- Connect to DB -->
<?php
    
    if(!defined('indexes')) {
        die('Direct access not permitted');
    }

    
    function db_connect() {
        static $connection;
        
        if (!isset($connection)) {
            $config = parse_ini_file('../config.ini');
            $connection = mysqli_connect($config['host'], $config['username'], $config['password'], $config['dbname']);
        }

        
        if ($connection === false) {
            return mysqli_connect_error();
        }

        return $connection;
    }

    
    function db_error() {
        $connection = db_connect();
        return mysqli_error($connection);
    }

    
    function db_query($query) {
        $connection = db_connect();
        $result = mysqli_query($connection,$query);
        return $result;
    }

    
    function db_select($query) {
        $rows = array();
        $result = db_query($query);
        
        if($result === false) {
            return false;
        }

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

	//Update timestamp
	$update = db_select("SELECT `update_time` FROM `item_prices` WHERE itemid=34");
	
    //Ores
	//Veldspar
    $veld = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1230");
    
    if($veld === false) {
        $error = db_error();
    }

    //Scordite
    $scor = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1228");
    
    if($scor === false) {
        $error = db_error();
    }

    //Pyroxeres
    $pyro = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1224");
    
    if($pyro === false) {
        $error = db_error();
    }

    //Plagioclase
    $plag = db_select("SELECT `price` FROM `item_prices` WHERE itemid=18");
    
    if($plag === false) {
        $error = db_error();
    }

    //Omber
    $omber = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1227");
    
    if($omber === false) {
        $error = db_error();
    }

    //Kernite
    $kern = db_select("SELECT `price` FROM `item_prices` WHERE itemid=20");
    
    if($kern === false) {
        $error = db_error();
    }

    //Jaspet
    $jasp = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1226");
    
    if($jasp === false) {
        $error = db_error();
    }

    //Hemorphite
    $hemo = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1231");
    
    if($hemo === false) {
        $error = db_error();
    }

    //Hedbergite
    $hedb = db_select("SELECT `price` FROM `item_prices` WHERE itemid=21");
    
    if($hedb === false) {
        $error = db_error();
    }

    //Gneiss
    $gneiss = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1229");
    
    if($gneiss === false) {
        $error = db_error();
    }

    //Dark Ochre
    $dark = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1232");
    
    if($dark === false) {
        $error = db_error();
    }

    //Spodumain
    $spod = db_select("SELECT `price` FROM `item_prices` WHERE itemid=19");
    
    if($spod === false) {
        $error = db_error();
    }

    //Crokite
    $crok = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1225");
    
    if($crok === false) {
        $error = db_error();
    }

    //Bistot
    $bis = db_select("SELECT `price` FROM `item_prices` WHERE itemid=1223");
    
    if($bis === false) {
        $error = db_error();
    }

    //Arkonor
    $ark = db_select("SELECT `price` FROM `item_prices` WHERE itemid=22");
    
    if($ark === false) {
        $error = db_error();
    }

    //Mercoxit
    $merc = db_select("SELECT `price` FROM `item_prices` WHERE itemid=11396");
    
    if($merc === false) {
        $error = db_error();
    }

    ?>