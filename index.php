<?php
require_once('Connections/localhost.php');
require_once('Connections/session.php');
?>
<?php
mysqli_select_db($localhost, $database_localhost);
$query_total = "SELECT COUNT(*) FROM `public`";
$total = mysqli_query($GLOBALS['localhost'], $query_total)
  or die(mysqli_error($GLOBALS['localhost']));
$row_total = mysqli_fetch_assoc($total);
$totalRows_total = mysqli_num_rows($total);

mysqli_select_db($localhost, $database_localhost);
$query_Males = "SELECT COUNT(*) FROM `public` WHERE Gender ='Male'";
$Males = mysqli_query($GLOBALS['localhost'], $query_Males)
  or die(mysqli_error($GLOBALS['localhost']));
$row_Males = mysqli_fetch_assoc($Males);
$totalRows_Males = mysqli_num_rows($Males);

mysqli_select_db($localhost, $database_localhost);
$query_Females = "SELECT COUNT(*) FROM `public`WHERE Gender = 'Female'";
$Females = mysqli_query($GLOBALS['localhost'], $query_Females)
  or die(mysqli_error($GLOBALS['localhost']));
$row_Females = mysqli_fetch_assoc($Females);
$totalRows_Females = mysqli_num_rows($Females);

mysqli_select_db($localhost, $database_localhost);
$query_Youth = "SELECT COUNT(*) FROM `public` WHERE Age >=18 AND Age <= 35";
$Youth = mysqli_query($GLOBALS['localhost'], $query_Youth)
  or die(mysqli_error($GLOBALS['localhost']));
$row_Youth = mysqli_fetch_assoc($Youth);
$totalRows_Youth = mysqli_num_rows($Youth);

mysqli_select_db($localhost, $database_localhost);
$query_Children = "SELECT COUNT(*) FROM `public` WHERE Age < 18";
$Children = mysqli_query($GLOBALS['localhost'], $query_Children)
  or die(mysqli_error($GLOBALS['localhost']));
$row_Children = mysqli_fetch_assoc($Children);
$totalRows_Children = mysqli_num_rows($Children);
?>
<!DOCTYPE html>
<html class="html" lang="en-US">

<head>

  <script type="text/javascript">
    if (typeof Muse == "undefined") window.Muse = {};
    window.Muse.assets = {
      "required": ["jquery-1.8.3.min.js", "museutils.js", "jquery.watch.js", "jquery.musemenu.js", "index.css"],
      "outOfDate": []
    };
  </script>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <meta name="generator" content="2015.0.0.309" />
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4052507572" />
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?25589149" />
  <link rel="stylesheet" type="text/css" href="css/index.css?306580753" id="pagesheet" />
  <!-- Other scripts -->
  <script type="text/javascript">
    document.documentElement.className += ' js';
  </script>
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?4241844378" type="text/javascript"></script>
  <![endif]-->
</head>

<body>

  <div class="clearfix" id="page"><!-- column -->
    <div class="position_content" id="page_position_content">
      <div class="clearfix colelem" id="pu159-3"><!-- group -->
        <div class="browser_width grpelem" id="u159-3-bw">
          <div class="shadow clearfix" id="u159-3"><!-- content -->
            <p>&nbsp;</p>
          </div>
        </div>
        <nav class="MenuBar clearfix grpelem" id="menuu129"><!-- horizontal box -->
          <div class="MenuItemContainer clearfix grpelem" id="u130"><!-- vertical box -->
            <a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix colelem" id="u133" href="index.php"><!-- horizontal box -->
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
            <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u146" href="reports.php"><!-- horizontal box -->
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
        <a class="nonblock nontext MuseLinkActive clip_frame grpelem" id="u166" href="index.html"><!-- image --><img class="block" id="u166_img" src="images/img-20161124-wa0001.jpg" alt="" width="130" height="104" /></a>
        <div class="clearfix grpelem" id="u172-4"><!-- content -->
          <p><?php echo "Hello " .  $_SESSION['Username']; ?></p>
        </div>
      </div>
      <div class="clearfix colelem" id="ppu106"><!-- group -->
        <div class="clearfix grpelem" id="pu106"><!-- column -->
          <div class="clearfix colelem" id="u106"><!-- group -->
            <div class="rounded-corners clearfix grpelem" id="u94"><!-- group -->
              <div class="clearfix grpelem" id="u100-4"><!-- content -->
                <p><?php echo $row_total['COUNT(*)']; ?></p>
              </div>
            </div>
          </div>
          <div class="clearfix colelem" id="u113-4"><!-- content -->
            <p>Total Nigerians</p>
          </div>
        </div>
        <div class="clearfix grpelem" id="ppu111"><!-- column -->
          <div class="colelem" id="pu111"><!-- inclusion -->
            <div id="u111"><!-- simple frame --></div>
            <div class="clearfix" id="pu105-4"><!-- column -->
              <div class="clearfix colelem" id="u105-4"><!-- content -->
                <p>Welcome</p>
              </div>
              <div class="clearfix colelem" id="u110-4"><!-- content -->
                <p>Welcome to National Population Commission (NPC) information system. The circles below shows the overview of the population of Nigeria so far based on categories which includes: total population of the country, gender, youths and infants. Note that this system is a real-time system.</p>
              </div>
            </div>
          </div>
          <div class="clearfix colelem" id="pu107"><!-- group -->
            <div class="clearfix grpelem" id="u107"><!-- group -->
              <div class="rounded-corners clearfix grpelem" id="u95"><!-- group -->
                <div class="clearfix grpelem" id="u101-4"><!-- content -->
                  <p><?php echo $row_Males['COUNT(*)']; ?></p>
                </div>
              </div>
            </div>
            <div class="clearfix grpelem" id="u108"><!-- group -->
              <div class="rounded-corners clearfix grpelem" id="u97"><!-- group -->
                <div class="clearfix grpelem" id="u102-4"><!-- content -->
                  <p><?php echo $row_Females['COUNT(*)']; ?></p>
                </div>
              </div>
            </div>
            <div class="clearfix grpelem" id="u109"><!-- group -->
              <div class="rounded-corners clearfix grpelem" id="u98"><!-- group -->
                <div class="clearfix grpelem" id="u103-4"><!-- content -->
                  <p><?php echo $row_Youth['COUNT(*)']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix grpelem" id="pu99"><!-- column -->
          <div class="rounded-corners clearfix colelem" id="u99"><!-- group -->
            <div class="clearfix grpelem" id="u104-4"><!-- content -->
              <p><?php echo $row_Children['COUNT(*)']; ?></p>
            </div>
          </div>
          <div class="clearfix colelem" id="u117-4"><!-- content -->
            <p>Children & Infants</p>
          </div>
        </div>
      </div>
      <div class="clearfix colelem" id="pu114-4"><!-- group -->
        <div class="clearfix grpelem" id="u114-4"><!-- content -->
          <p>&nbsp;Males</p>
        </div>
        <div class="clearfix grpelem" id="u115-4"><!-- content -->
          <p>Females</p>
        </div>
        <div class="clearfix grpelem" id="u116-4"><!-- content -->
          <p>Youths</p>
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
  </script>
</body>

</html>