<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example</title>
    <script type="text/javascript">

    <?php
    function getAdcashLibTag()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://adbpage.com/adblock?v=3&format=js");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($ch);
        curl_close($ch);
        return $content;
    }

    $libTag = getAdcashLibTag();
    echo $libTag;
    ?>
    aclib.runPop({zoneId: '8558094'});

    </script>
</head>
<body>
<h1>Example</h1>
</body>
</html>
