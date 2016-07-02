<?php

header('Content-type: application/x-java-jnlp-file');
$server = '';
for ($i = 0; $i < strlen($_GET['server']); $i+=2) {
    $server .= chr(hexdec($_GET['server'][$i] . $_GET['server'][$i+1]));
}
echo '<?xml version="1.0" encoding="utf-8"?>' . "\n";
?>
<jnlp spec="1.0+" codebase="http://www.nquake.com/online/" href="<?php echo $_GET['type']."/";echo basename($_SERVER['REQUEST_URI']) ?>">
    <information>
        <title>nQuake</title>
        <vendor>nQuake.com</vendor>
        <description>Play QuakeWorld instantly!</description>
        <homepage href="http://nquake.com/" />
        <icon href="nquake.ico" />
    </information>
    <update check="background" />
    <security>
        <all-permissions />
    </security>
    <resources>
        <j2se version="1.6+" />
        <jar href="nquake-launcher.jar" main="true" />
    </resources>
    <application-desc main-class="com.nquake.launcher.Launcher">
        <argument><?php echo $_GET['type'] ?></argument>
        <argument><?php echo $server ?></argument>
    </application-desc>
</jnlp>