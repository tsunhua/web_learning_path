<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" ng-app>
<head>
    <script src="http://code.angularjs.org/angular-1.0.1.min.js"></script>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Movies</title>
</head>
<body ng-controller="PhoneListCtrl">
<!--Hello {{'World'}}!-->
Your name: <input type="text" ng-model="yourname" placeholder="World">
<hr>
Hello {{yourname || 'World'}}!
<br/>
<p>1 + 2 = {{ 1 + 2 }}</p>

<ul>
    <li>
        <span>Nexus S</span>
        <p>
            Fast just got faster with Nexus S.
        </p>
    </li>
    <li>
        <span>MOtorola XOOM with Wi-Fi</span>
        <p>
            The Next, Next Generation tablet.
        </p>
    </li>
</ul>
<p>Total number of phones: 2</p>

<ul>
    <li ng-repeat="phone in phones">
        {{phone.name}}
        <p>{{phone.snippet}}</p>
    </li>
</ul>

<?php
foreach($data as $item){ echo "<iframe frameborder='no' border='0' marginwidth='0' marginheight='0' width=330 height=86
              src='//music.163.com/outchain/player?type=2&id=".$item['url']."&auto=0&height=66';></iframe><br/>"; } ?>

</body>
</html>