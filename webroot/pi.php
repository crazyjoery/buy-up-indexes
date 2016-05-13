<?php define('indexes', TRUE);
include '../input_pi_raw.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="Lone Star Buyback Calculator" name="description">
    <meta content="index,follow" name="robots">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Buy Up Indexes | Lone Star Warriors</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/eve-link.css" rel="stylesheet">
<<<<<<< HEAD
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
=======
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style type="text/css">
    body{
    background-image:url(images/bgs/pi_bg_blur.jpg);
    background-repeat:no-repeat;
    background-attachment: fixed;
    }
<<<<<<< HEAD
    .affix {
        top: 60px;
    }
    .affix-bottom {
        position: absolute;
    }
    </style>
    <script>
        $(function() {
            var $affix = $("#invoice-panel"),
                $parent = $affix.parent(),
                resize = function() { $affix.width($parent.width()); };
            $(window).resize(resize);
            resize();
        });
    </script>
</head>
<body>
=======
    </style>
</head>
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
<!--Navigation-->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="images/logo-wide.png" style="margin-top: -7px;"></a>
    </div>
    <div class="collapse navbar-collapse pull-right">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="../../index.html">Mainpage</a></li>
            <li><a href="../../eve.html">Eve Page</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img
                        src="images/settings.png"><b class="caret"></b></a>
                <ul class="dropdown-menu pull-right">
                    <li class="dropdown-header">Applications</li>
                    <li><a href="#">EvE Online Applications</a></li>
                    <li><a href="#" onclick="clearCookies();location.reload();">Clear all cookies</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--Navigation-->

<div class="central-header">
    <h1>Buying to make your lives easier.</h1>
    <h4 class="text-danger">These pages are still undergoing heavy development. Report any issues on our public
        forums!</h4>
</div>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading" align="center">
            <h3 class="panel-title"><span style="font-family: Arial; color: #FF2A2A;"><strong>Instruction Sheet</strong></span><br></h3>
        </div>
        <div class="panel-body" align="center">
        - In the Calculator below you can enter the amounts for each Raw PI material that you want to sell.<br>
        - Once done you can see the total value of each item and the final price in the <strong>Invoice</strong>
        panel.<br>
        - All you have to do now is click on the <strong>Contract Value</strong> price that is given<br>
        - This will open a "Copy to clipboard" window with a easy to copy number to use in the EVE Contract window.<br>
<<<<<<< HEAD
            <span style="font-family: Arial; color: #FF2A2A;"><strong>- Contract between 200-300 mil ISK at a time, this to allow for faster processing of the contracts.</strong></span>
=======
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
        <span style="font-family: Arial; color: #8FEF2F;"><strong>Database was last updated
                on: <?php echo $string = implode("", $update[0]); ?></strong></span>
    </div>
</div>
    </div>

<div class="clearfix"></div>

<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Contract Type</th>
            <th class="text-right">Availability</th>
            <th class="text-right">I will receive</th>
            <th class="text-right">Expire</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Item Exchange</td>
            <td class="text-right">My Corporation or <strong><span class="eve-link" onmouseover="popCorp($(this), 98259161, 'Lone Star Warriors');">Lone Star Warriors</span></strong>
            </td>
            <td class="text-right">Value from Invoice below</td>
            <td class="text-right">2 Weeks</td>
        </tr>
        </tbody>
    </table>
</div>

<!-- Calculate -->

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Calculator</strong></h3>
                </div>
                <div class="panel-body">
                    <p>
                        <label>Aqueous Liquids <?php echo $aqueous; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="aqueous" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Aqueous Liquids"
<<<<<<< HEAD
                               id="calc-input-aqueous_units-value">
=======
                               id="calc-input-aqueous-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Ionic Solutions <?php echo $ionic; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="ionic" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Ionic Solutions"
<<<<<<< HEAD
                               id="calc-input-ionic_units-value">
=======
                               id="calc-input-ionic-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Base Metals <?php echo $base; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="base" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Base Metals"
<<<<<<< HEAD
                               id="calc-input-base_units-value">
=======
                               id="calc-input-base-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Heavy Metals <?php echo $heavy; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="heavy" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Heavy Metals"
<<<<<<< HEAD
                               id="calc-input-heavy_units-value">
=======
                               id="calc-input-heavy-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Noble Metals <?php echo $noble; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="noble" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Noble Metals"
<<<<<<< HEAD
                               id="calc-input-noble_units-value">
=======
                               id="calc-input-noble-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Carbon Compounds <?php echo $carbon; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="carbon" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Carbon Compounds"
<<<<<<< HEAD
                               id="calc-input-carbon_units-value">
=======
                               id="calc-input-carbon-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Micro Organisms <?php echo $micro; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="micro" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Micro Organisms"
<<<<<<< HEAD
                               id="calc-input-micro_units-value">
=======
                               id="calc-input-micro-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Complex Organisms <?php echo $complex; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="complex" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Complex Organisms"
<<<<<<< HEAD
                               id="calc-input-complex_units-value">
=======
                               id="calc-input-complex-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Planktic Colonies <?php echo $planktic; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="planktic" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Planktic Colonies"
<<<<<<< HEAD
                               id="calc-input-planktic_units-value">
=======
                               id="calc-input-planktic-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Noble Gas <?php echo $noble_gas; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="noble_gas" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Noble Gas"
<<<<<<< HEAD
                               id="calc-input-noble_gas_units-value">
=======
                               id="calc-input-noble_gas-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Reactive Gas <?php echo $reactive; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="reactive" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Reactive Gas"
<<<<<<< HEAD
                               id="calc-input-reactive_units-value">
=======
                               id="calc-input-reactive-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Felsic Magma <?php echo $felsic; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="felsic" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Felsic Magma"
<<<<<<< HEAD
                               id="calc-input-felsic_units-value">
=======
                               id="calc-input-felsic-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Non-CS Crystals <?php echo $non_cs; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="non_cs" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Non-CS Crystals"
<<<<<<< HEAD
                               id="calc-input-non_cs_units-value">
=======
                               id="calc-input-non_cs-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Suspended Plasma <?php echo $suspended; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="suspended" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Suspended Plasma"
<<<<<<< HEAD
                               id="calc-input-suspended_units-value">
=======
                               id="calc-input-suspended-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                    <p>
                        <label>Autotrophs <?php echo $autotrophs; ?> ISK/Unit</label>

                    <div class="input-group form-control" id="autotrophs" style="padding: 0; border: none;">
                        <input type="number" class="form-control text-right typeahead" placeholder="Autotrophs"
<<<<<<< HEAD
                               id="calc-input-autotrophs_units-value">
=======
                               id="calc-input-autotrophs-value">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
<<<<<<< HEAD
            <div class="panel panel-default" data-spy="affix" data-offset-top="450" data-offset-bottom="370" id="invoice-panel">
=======
            <div class="panel panel-default">
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Invoice</strong>
                        <label data-html="true" data-original-title="<b>Fees</b>" class="popover-reward text-info"
                               data-toggle="popover" data-content="
                    <span>
			<p>In this invoice window you can see how the price is build up for each individual mineral</p>
			<p>The <strong>Contract Value</strong> price is the total of the material values.</p>
			<hr>
                        <p>The <b>Contract Value</b> is what you have to use as <i>'I will receive'</i> in the contract.</p>
                    </span>">[?]</label>
                    </h3>
                </div>
                <div class="panel-body">
<<<<<<< HEAD
                    <p id="calc-output-row">Total Aqueous Liquids value <span class="pull-right"><span id="calc-output-aqueous-value"></span></p>
                    <p id="calc-output-row">Total Ionic Solutions value <span class="pull-right"><span id="calc-output-ionic-value"></span></p>
                    <p id="calc-output-row">Total Base Metals value <span class="pull-right"><span id="calc-output-base-value"></span></p>
                    <p id="calc-output-row">Total Heavy Metals value <span class="pull-right"><span id="calc-output-heavy-value"></span></p>
                    <p id="calc-output-row">Total Noble Metals value <span class="pull-right"><span id="calc-output-noble-value"></span></p>
                    <p id="calc-output-row">Total Carbon Compounds value <span class="pull-right"><span id="calc-output-carbon-value"></span></p>
                    <p id="calc-output-row">Total Micro Organisms value <span class="pull-right"><span id="calc-output-micro-value"></span></p>
                    <p id="calc-output-row">Total Complex Organisms value <span class="pull-right"><span id="calc-output-complex-value"></span></p>
                    <p id="calc-output-row">Total Planktic Colonies value <span class="pull-right"><span id="calc-output-planktic-value"></span></p>
                    <p id="calc-output-row">Total Noble Gas value <span class="pull-right"><span id="calc-output-noble_gas-value"></span></p>
                    <p id="calc-output-row">Total Reactive Gas value <span class="pull-right"><span id="calc-output-reactive-value"></span></p>
                    <p id="calc-output-row">Total Felsic Magma value <span class="pull-right"><span id="calc-output-felsic-value"></span></p>
                    <p id="calc-output-row">Total Non-CS Crystals value <span class="pull-right"><span id="calc-output-non_cs-value"></span></p>
                    <p id="calc-output-row">Total Suspended Plasma value <span class="pull-right"><span id="calc-output-suspended-value"></span></p>
                    <p id="calc-output-row">Total Autotrophs value <span class="pull-right"><span id="calc-output-autotrophs-value"></span></p>
=======
                    <p id="calc-output-aqueous-row">Total Aqueous Liquids value <span class="pull-right"><span id="calc-output-aqueous-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Ionic Solutions value <span class="pull-right"><span id="calc-output-ionic-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Base Metals value <span class="pull-right"><span id="calc-output-base-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Heavy Metals value <span class="pull-right"><span id="calc-output-heavy-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Noble Metals value <span class="pull-right"><span id="calc-output-noble-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Carbon Compounds value <span class="pull-right"><span id="calc-output-carbon-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Micro Organisms value <span class="pull-right"><span id="calc-output-micro-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Complex Organisms value <span class="pull-right"><span id="calc-output-complex-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Planktic Colonies value <span class="pull-right"><span id="calc-output-planktic-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Noble Gas value <span class="pull-right"><span id="calc-output-noble_gas-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Reactive Gas value <span class="pull-right"><span id="calc-output-reactive-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Felsic Magma value <span class="pull-right"><span id="calc-output-felsic-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Non-CS Crystals value <span class="pull-right"><span id="calc-output-non-cs-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Suspended Plasma value <span class="pull-right"><span id="calc-output-suspended-value"></span></p>
                    <p id="calc-output-aqueous-row">Total Autotrophs value <span class="pull-right"><span id="calc-output-autotrophs-value"></span></p>
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
                    <hr>
                    <p id="calc-output-reward-row">
                        <b>Contract Value</b> <a href="#" class="pull-right" onclick="$('#clipboard').modal('show');$('#clipboard-content').val(calcNow()).select();">
                            <strong id="calc-output-reward-value"></strong>
                        </a>
                    </p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Calculate -->

<!-- Footer -->
<div class="clearfix"></div>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading" align="center">
            <h3 class="panel-title"><strong>Buy Up Indexes brought to you by <span class="eve-link" onmouseover="popCorp($(this), 98259161, 'Lone Star Warriors');">Lone Star Warriors</span></strong></h3>
        </div>
        <div class="panel-body" align="center">
        <ul class="social">
            <li>
                <a href=
                   "https://www.facebook.com/lonestarwarriorsgaming"><i class="fa">
                    </i></a>
            </li>

            <li>
                <a href="https://twitter.com/lone_warriors"><i class=
                                                               "fb"></i></a>
            </li>

            <li>
                <a href=
                   "https://plus.google.com/+lonestarwarriorsgaming"><i class="fc">
                    </i></a>
            </li>
        </ul>

        <p>
            2015 Design by <a href="#">Joery Pigmans</a>. All rights
            reserved.
        </p>

        <p>
            EVE Online and the EVE logo are the registered trademarks
            of CCP hf. All rights are reserved worldwide. All other
            trademarks are the property of their respective owners. EVE
            Online, the EVE logo, EVE and all associated logos and
            designs are the intellectual property of CCP hf. All
            artwork, screenshots, characters, vehicles, storylines,
            world facts or other recognizable features of the
            intellectual property relating to these trademarks are
            likewise the intellectual property of CCP hf. CCP hf. has
            granted permission to Joery Pigmans to use EVE Online and
            all associated logos and designs for promotional and
            information purposes on its website but does not endorse,
            and is not in any way affiliated with, Joery Pigmans. CCP
            is in no way responsible for the content on or functioning
            of this website, nor can it be liable for any damage
            arising from the use of this website.
        </p>
    </div>
</div>
<!-- Footer -->

<!-- Popups -->
<div class="hide" id="popcorp" style="background:white;">
    <table style='border: 1px solid;'>
        <thead>
        <tr style='border-bottom: 1px solid;'>
            <th colspan='3' style='padding-left:2px;' id="popcorp-name">&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td width='64' height='64' style='padding:2px; background-repeat:no-repeat; background-position:center;' id="popcorp-image">&nbsp;</td>
            <td style='padding-left:5px; padding-right:5px; padding-top:3px; vertical-align:top;' id="popcorp-content-1">&nbsp;</td>
            <td style='padding-left:5px; padding-right:5px; padding-top:3px; vertical-align:top;' id="popcorp-content-2">&nbsp;</td>
        </tr>
        </tbody>
    </table>
</div>
<!-- Popups -->

<!-- Clipboard -->
<div class="modal" id="clipboard" tabindex="-1" role="dialog" aria-labelledby="clipboardLabel" aria-hidden="true" onkeydown="if (event.keyCode == 13) $('#clipboard').modal('hide');">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="clipboardLabel">Copy to clipboard: CTRL-C, Enter</h4>
            </div>
            <div class="modal-body">
                <input type="text" class="form-control text-right" id="clipboard-content">
            </div>
        </div>
    </div>
</div>
<!-- Clipboard -->

<script src="js/jquery.cookie.js"></script>
<script src="js/freight.js"></script>
<script src="js/typeahead.bundle.js"></script>
<script src="js/handlebars-v1.3.0.js"></script>
<script src="js/rawpi_cal.js"></script>
<<<<<<< HEAD
<!--<script src="js/fixed_div.js"></script>-->

</body>
</html>
=======

</body>
</html>
>>>>>>> ccffdfdeebfc515e0fb12d0405c5f6842859013c
