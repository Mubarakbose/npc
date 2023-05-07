<?php
require_once('Connections/localhost.php');
require_once('Connections/session.php');
?>
<?php
mysqli_select_db($localhost, $database_localhost);
$query_bystate = "SELECT DISTINCT (State) AS STATES, COUNT(*) FROM public GROUP BY State";
$bystate = mysqli_query($localhost, $query_bystate);
$row_bystate = mysqli_fetch_assoc($bystate);
$totalRows_bystate = mysqli_num_rows($bystate);

mysqli_select_db($localhost, $database_localhost);
$query_total = "SELECT COUNT(*) FROM `public`";
$total = mysqli_query($localhost, $query_total);
$row_total = mysqli_fetch_assoc($total);
$totalRows_total = mysqli_num_rows($total);

mysqli_select_db($localhost, $database_localhost);
$query_ByJobs = "SELECT DISTINCT (Occupation) AS OCCUPATION, COUNT(*) FROM public GROUP BY Occupation";
$ByJobs = mysqli_query($localhost, $query_ByJobs);
$row_ByJobs = mysqli_fetch_assoc($ByJobs);
$totalRows_ByJobs = mysqli_num_rows($ByJobs);

mysqli_select_db($localhost, $database_localhost,);
$query_ByGender = "SELECT DISTINCT (Gender) AS GENDER, COUNT(*) FROM public GROUP BY Gender";
$ByGender = mysqli_query($localhost, $query_ByGender);
$row_ByGender = mysqli_fetch_assoc($ByGender);
$totalRows_ByGender = mysqli_num_rows($ByGender);

mysqli_select_db($localhost, $database_localhost);
$query_ByLGA = "SELECT DISTINCT (LGA) AS LGA, COUNT(*) FROM public GROUP BY LGA";
$ByLGA = mysqli_query($localhost, $query_ByLGA);
$row_ByLGA = mysqli_fetch_assoc($ByLGA);
$totalRows_ByLGA = mysqli_num_rows($ByLGA);

?>
<!DOCTYPE html>
<html class="html" lang="en-US">

<head>

  <script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
  <script type="text/javascript">
    if (typeof Muse == "undefined") window.Muse = {};
    window.Muse.assets = {
      "required": ["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "jquery.musemenu.js", "reports.css"],
      "outOfDate": []
    };
  </script>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <meta name="generator" content="2015.0.0.309" />
  <title>Reports</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572" />
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?25589149" />
  <link rel="stylesheet" type="text/css" href="css/reports.css?388654551" id="pagesheet" />
  <link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
  <!-- Other scripts -->
  <script type="text/javascript">
    document.documentElement.className += ' js';
  </script>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->

  <style>
    t1 {
      border-collapse: collapse;
      border: 1px solid black;
      height: auto;
      max-width: 650;
      background-color: #FFF;
    }

    th {
      text-align: left;
    }

    td {
      height: 20px;
      vertical-align: bottom;
    }

    td,
    th {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {
      background-color: #fff;
    }

    tr:nth-child(even) {
      background-color: #E5E5E5;
    }

    tr:nth-child(odd) {
      background-color: #EEE;
    }

    th {
      background-color: #4caf50;
      color: #fff;
    }
  </style>
</head>

<body>

  <div class="clearfix" id="page"><!-- column -->
    <div class="position_content" id="page_position_content">
      <div class="clearfix colelem" id="pu159-3"><!-- group -->
        <div class="browser_width grpelem" id="u159-3-bw">
          <div class="clearfix" id="u159-3"><!-- content -->
            <p>&nbsp;</p>
          </div>
        </div>
        <nav class="MenuBar clearfix grpelem" id="menuu129"><!-- horizontal box -->
          <div class="MenuItemContainer clearfix grpelem" id="u130"><!-- vertical box -->
            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u133" href="index.php"><!-- horizontal box -->
              <div class="MenuItemLabel NoWrap clearfix grpelem" id="u135-4"><!-- content -->
                <p>Home</p>
              </div>
            </a>
          </div>
          <div class="MenuItemContainer clearfix grpelem" id="u137"><!-- vertical box -->
            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u138" href="add-citizen.php"><!-- horizontal box -->
              <div class="MenuItemLabel NoWrap clearfix grpelem" id="u140-4"><!-- content -->
                <p>Register</p>
              </div>
            </a>
          </div>
          <div class="MenuItemContainer clearfix grpelem" id="u145"><!-- vertical box -->
            <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u146" href="reports.php"><!-- horizontal box -->
              <div class="MenuItemLabel NoWrap clearfix grpelem" id="u148-4"><!-- content -->
                <p>Reports</p>
              </div>
            </a>
          </div>
          <div class="MenuItemContainer clearfix grpelem" id="u152"><!-- vertical box -->
            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u153" href="Connections/logout.php"><!-- horizontal box -->
              <div class="MenuItemLabel NoWrap clearfix grpelem" id="u156-4"><!-- content -->
                <p>Logout</p>
              </div>
            </a>
          </div>
        </nav>
        <a class="nonblock nontext clip_frame grpelem" id="u166" href="index.html"><!-- image --><img class="block" id="u166_img" src="images/img-20161124-wa0001.jpg" alt="" width="130" height="104" /></a>
        <div class="clearfix grpelem" id="u172-4"><!-- content -->
          <p><?php echo "Hello " . $_SESSION['Username'];  ?></p>
        </div>
      </div>
      <div class="shadow rounded-corners colelem" id="u164" style="padding:30px;"><!-- simple frame -->

        <div id="TabbedPanels1" class="TabbedPanels">
          <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0">Population By State</li>
            <li class="TabbedPanelsTab" tabindex="0">Population By Occupation</li>
            <li class="TabbedPanelsTab" tabindex="0">Population By Gender</li>
            <li class="TabbedPanelsTab" tabindex="0">By Local Government Areas</li>
          </ul>
          <div class="TabbedPanelsContentGroup">
            <div class="TabbedPanelsContent">

              <table align="center" cellpadding="4" cellspacing="4" class="t1">
                <tr>
                  <td align="center" style="font:'Arial Black', Gadget, sans-serif; font-size:26px;">
                    <h1><strong>Population By States</strong></h1>
                  </td>
                </tr>
              </table>
              <br />
              <table border="0" align="center" cellpadding="4" cellspacing="4" class="t1">
                <tr>
                  <th width="566" height="37"><strong>STATES</strong>
                    </td>
                  <th width="340"><strong>&nbsp;POPULALATION</strong>
                    </td>
                </tr>
                <?php do { ?>
                  <tr>
                    <td><?php echo $row_bystate['STATES']; ?></td>
                    <td>&nbsp;&nbsp;<?php echo $row_bystate['COUNT(*)']; ?></td>
                  </tr>
                <?php } while ($row_bystate = mysqli_fetch_assoc($bystate)); ?>
                <tr>
                  <td><strong style="color:red;">Total</strong></td>
                  <td><strong style="color:red;">&nbsp;&nbsp;<?php echo $row_total['COUNT(*)']; ?></strong></td>
                </tr>

              </table>
              <p>&nbsp;</p>
              <td width="224"></td>
              </tr>
              </table>


            </div>
            <div class="TabbedPanelsContent">
              <table align="center" cellpadding="4" cellspacing="4" class="t1">
                <tr>
                  <td align="center" style="font:'Arial Black', Gadget, sans-serif; font-size:26px;">
                    <h1><strong>Population By Occupation</strong></h1>
                  </td>
                </tr>
              </table>
              <br />
              <table border="0" align="center" cellpadding="4" cellspacing="4" class="t1">
                <tr>
                  <th width="566" height="37"><strong>OCCUPATION</strong>
                  <th width="340"><strong>&nbsp;POPULALATION</strong>
                </tr>
                <?php do { ?>
                  <tr>
                    <td><?php echo $row_ByJobs['OCCUPATION']; ?></td>
                    <td>&nbsp;&nbsp;<?php echo $row_ByJobs['COUNT(*)']; ?></td>
                  </tr>
                <?php } while ($row_ByJobs = mysqli_fetch_assoc($ByJobs)); ?>
                <tr>
                  <td><strong style="color:red;">Total</strong></td>
                  <td><strong style="color:red;">&nbsp;&nbsp;<?php echo $row_total['COUNT(*)']; ?></strong></td>
                </tr>
              </table>
              <p>&nbsp;</p>
            </div>
            <div class="TabbedPanelsContent">
              <table align="center" cellpadding="4" cellspacing="4" class="t1">
                <tr>
                  <td align="center" style="font:'Arial Black', Gadget, sans-serif; font-size:26px;">
                    <h1><strong>Population By Gender</strong></h1>
                  </td>
                </tr>
              </table>
              <br />
              <table border="0" align="center" cellpadding="4" cellspacing="4" class="t1">
                <tr>
                  <th width="566" height="37"><strong>GENDER</strong>
                  <th width="340"><strong>&nbsp;POPULALATION</strong>
                </tr>
                <?php do { ?>
                  <tr>
                    <td><?php echo $row_ByGender['GENDER']; ?></td>
                    <td>&nbsp;&nbsp;<?php echo $row_ByGender['COUNT(*)']; ?></td>
                  </tr>
                <?php } while ($row_ByGender = mysqli_fetch_assoc($ByGender)); ?>
                <tr>
                  <td><strong style="color:red;">Total</strong></td>
                  <td><strong style="color:red;">&nbsp;&nbsp;<?php echo $row_total['COUNT(*)']; ?></strong></td>
                </tr>
              </table>
            </div>
            <div class="TabbedPanelsContent">

              <table align="center" cellpadding="4" cellspacing="4" class="t1">
                <tr>
                  <td align="center" style="font:'Arial Black', Gadget, sans-serif; font-size:26px;">
                    <h1><strong>Population By Local Government Areas</strong></h1>
                  </td>
                </tr>
              </table>
              <br />
              <table border="0" align="center" cellpadding="4" cellspacing="4" class="t1">
                <tr>
                  <th width="566" height="37"><strong>LOCAL GOVERNMENT </strong>
                  <th width="340"><strong>&nbsp;POPULALATION</strong>
                </tr>
                <?php do { ?>
                  <tr>
                    <td><?php echo $row_ByLGA['LGA']; ?></td>
                    <td>&nbsp;&nbsp;<?php echo $row_ByLGA['COUNT(*)']; ?></td>
                  </tr>
                <?php } while ($row_ByLGA = mysqli_fetch_assoc($ByLGA)); ?>
                <tr>
                  <td><strong style="color:red;">Total</strong></td>
                  <td><strong style="color:red;">&nbsp;&nbsp;<?php echo $row_total['COUNT(*)']; ?></strong></td>
                </tr>
              </table>

            </div>
          </div>
        </div>
      </div>
      <div class="verticalspacer"></div>
      <div class="browser_width colelem" id="u77-bw">
        <div id="u77"><!-- group -->
          <div class="clearfix" id="u77_align_to_page">
            <div class="clearfix grpelem" id="u118-4"><!-- content -->
              <p>Copyright © 2016 National Population Commision (NPC) Nigeria</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
    if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
  </script>
  <script type="text/javascript">
    window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
  </script>
  <script src="scripts/museutils.js?183364071" type="text/javascript"></script>
  <script src="scripts/jquery.watch.js?71412426" type="text/javascript"></script>
  <script src="scripts/jquery.musemenu.js?3957776250" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
    $(document).ready(function() {
      try {
        (function() {
          var a = {},
            b = function(a) {
              if (a.match(/^rgb/)) return a = a.replace(/\s+/g, "").match(/([\d\,]+)/gi)[0].split(","), (parseInt(a[0]) << 16) + (parseInt(a[1]) << 8) + parseInt(a[2]);
              if (a.match(/^\#/)) return parseInt(a.substr(1), 16);
              return 0
            };
          (function() {
            $('link[type="text/css"]').each(function() {
              var b = ($(this).attr("href") || "").match(/\/?css\/([\w\-]+\.css)\?(\d+)/);
              b && b[1] && b[2] && (a[b[1]] = b[2])
            })
          })();
          (function() {
            $("body").append('<div class="version" style="display:none; width:1px; height:1px;"></div>');
            for (var c = $(".version"), d = 0; d < Muse.assets.required.length;) {
              var f = Muse.assets.required[d],
                g = f.match(/([\w\-\.]+)\.(\w+)$/),
                k = g && g[1] ? g[1] : null,
                g = g && g[2] ? g[2] : null;
              switch (g.toLowerCase()) {
                case "css":
                  k = k.replace(/\W/gi, "_").replace(/^([^a-z])/gi, "_$1");
                  c.addClass(k);
                  var g = b(c.css("color")),
                    h = b(c.css("background-color"));
                  g != 0 || h != 0 ? (Muse.assets.required.splice(d, 1), "undefined" != typeof a[f] && (g != a[f] >>> 24 || h != (a[f] & 16777215)) && Muse.assets.outOfDate.push(f)) : d++;
                  c.removeClass(k);
                  break;
                case "js":
                  k.match(/^jquery-[\d\.]+/gi) &&
                    typeof $ != "undefined" ? Muse.assets.required.splice(d, 1) : d++;
                  break;
                default:
                  throw Error("Unsupported file type: " + g);
              }
            }
            c.remove();
            if (Muse.assets.outOfDate.length || Muse.assets.required.length) c = "Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.", (d = location && location.search && location.search.match && location.search.match(/muse_debug/gi)) && Muse.assets.outOfDate.length && (c += "\nOut of date: " + Muse.assets.outOfDate.join(",")), d && Muse.assets.required.length && (c += "\nMissing: " + Muse.assets.required.join(",")), alert(c)
          })()
        })();
        /* body */
        Muse.Utils.transformMarkupToFixBrowserProblemsPreInit(); /* body */
        Muse.Utils.prepHyperlinks(true); /* body */
        Muse.Utils.resizeHeight() /* resize height */
        Muse.Utils.initWidget('.MenuBar', function(elem) {
          return $(elem).museMenu();
        }); /* unifiedNavBar */
        Muse.Utils.fullPage('#page'); /* 100% height page */
        Muse.Utils.showWidgetsWhenReady(); /* body */
        Muse.Utils.transformMarkupToFixBrowserProblems(); /* body */
      } catch (e) {
        if (e && 'function' == typeof e.notify) e.notify();
        else Muse.Assert.fail('Error calling selector function:' + e);
      }
    });
    var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
  </script>
</body>

</html>