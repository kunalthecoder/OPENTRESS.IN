<html>
<body>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/googleapis/0.0.4/googleapis.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/jsapi"></script>
<script type="text/javascript">
  google.load("identitytoolkit", "1", {packages: ["ac"], language:"en"});
</script>
<script type="text/javascript">
  $(function() {
    window.google.identitytoolkit.setConfig({
        developerKey: "AIzaSyCMZe4X39dNVuKqNQOJ-9LvUFZCHkuJNWo",
        companyName: "OpenTrees",
        callbackUrl: "http://localhost/OPENTRESS.IN/home.php",
        realm: "",
        userStatusUrl: "http://localhost/ipaddress/user.php",
        loginUrl: "http://localhost/ipaddress/login.php",
        signupUrl: "http://localhost/ipaddress/register.php",
        homeUrl: "http://localhost/ipaddress/index.php",
        logoutUrl: "http://localhost/ipaddress/logout.php",
        idps: ["Gmail", "GoogleApps", "Yahoo", "AOL"],
        tryFederatedFirst: true,
        useCachedUserStatus: false,
        useContextParam: true
    });
    $("#navbar").accountChooser();
  });
</script>




<!-- Insert the navbar element somewhere in the HTML page -->
<div id="navbar"></div>
</body>
</html>
