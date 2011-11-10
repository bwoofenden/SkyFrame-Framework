<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SkyFrame Framework</title>
        <?=$data['css']?>
    </head>
    <body>
        <div id="wrap">
            <div id="header"><a href="/"><h1>Skyframe Framework</h1></a></div>
            <div id="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about/">About</a></li>
                    <li><a href="/download/">Download</a></li>
                    <li><a href="https://github.com/bwoofenden/SkyFrame-Framework">GitHub</a></li>
                </ul>
            </div>
            <div id="content">
                <h3><?=$data['title']?></h3>
                <p><?=$data['content']?></p>
            </div>
            <div id="footer">Copyright (c) Brandon Woofenden 2011</div>
        </div>
    </body>
</html>