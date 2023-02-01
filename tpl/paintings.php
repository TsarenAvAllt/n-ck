<!DOCTYPE html>
<html>
<head>
    <title>Näcks Hall Paintings</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./styles/huset/paintings.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include '../inc/db.inc.php';

    $sql = "SELECT * FROM paintings WHERE samling = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id[] = $row["id"];
            $namn[] = $row["name"];
            $beskrivning[] = $row["besk"];
            $bild[] = $row["img"];
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>
    <main id="cContainer">
        <img id="bckI" class="bck" src="./images/huset/hall/paintings.jpg" alt="">
        <div id="dim1">
            <h3 onclick="exit();">X</h3>
            <div class="gifs"></div>
            <img id="big-note" src="./images/huset/hall/notes-v1/note_empty.jpg" loading="eager">
            <div id="beskText1">
                <h2> <?php echo $namn[0]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[0]; ?></p>
            </div>
            <div id="beskText2">
                <h2> <?php echo $namn[1]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[1]; ?></p>
            </div>
            <div id="beskText3">
                <h2> <?php echo $namn[2]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[2]; ?></p>
            </div>
            <div id="beskText4">
                <h2> <?php echo $namn[3]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[3]; ?></p>
            </div>
            <div id="beskText5">
                <h2> <?php echo $namn[4]; ?></h2>
                <p class="descP"> <?php echo $beskrivning[4]; ?></p>
            </div>
        </div>
        <div id="dim2">
            <h3 onclick="exit();">X</h3>
            <div class="gifs"></div>
            <div id="painting1">
                <div class="paintingInfo">
                    <h2> <?php echo $namn[0]; ?></h2>
                    <img class="imgZ" src="<?php echo $bild[0]; ?>" alt="">
                    <p class="paintP"> <?php echo $beskrivning[0]; ?></p>
                    <script data-seller="10111" data-artnr="ubat-painting" src="https://client.kwikk.se/kwikk-client.js"></script>
                </div>
            </div>
            <div id="painting2">
                <div class="paintingInfo">
                    <h2> <?php echo $namn[1]; ?></h2>
                    <img class="imgZ" src="<?php echo $bild[1]; ?>" alt="">
                    <p class="paintP"> <?php echo $beskrivning[1]; ?></p>
                    <script data-seller="10111" data-artnr="pluto-painting" src="https://client.kwikk.se/kwikk-client.js"></script>
                </div>
            </div>
            <div id="painting3">
                <div class="paintingInfo">
                    <h2> <?php echo $namn[2]; ?></h2>
                    <img class="imgZ" src="<?php echo $bild[2]; ?>" alt="">
                    <p class="paintP"> <?php echo $beskrivning[2]; ?></p>
                    <script data-seller="10111" data-artnr="bucket-hat" src="https://client.kwikk.se/kwikk-client.js"></script>
                </div>
            </div>
            <div id="painting4">
                <div class="paintingInfo">
                    <h2> <?php echo $namn[3]; ?></h2>
                    <img class="imgZ" src="<?php echo $bild[3]; ?>" alt="">
                    <p class="paintP"> <?php echo $beskrivning[3]; ?></p>
                    <script data-seller="10111" data-artnr="hunk-painting" src="https://client.kwikk.se/kwikk-client.js"></script>
                </div>
            </div>
            <div id="painting5">
                <div class="paintingInfo">
                    <h2> <?php echo $namn[4]; ?></h2>
                    <img class="imgZ" src="<?php echo $bild[4]; ?>" alt="">
                    <p class="paintP"> <?php echo $beskrivning[4]; ?></p>
                    <script data-seller="10111" data-artnr="rikki-painting" src="https://client.kwikk.se/kwikk-client.js"></script>
                </div>
            </div>
        </div>
        <div id="vernisage-container">
            <h1 id="vernisage-title"></h1>
        </div>
        <div id="painting-container">
            <div class="both">
                <img onclick="bild = '1';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[0]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '1';window.sessionStorage.setItem('text',text);beskrivning();" src="./images/huset/hall/notes-v1/note_empty.jpg" loading="eager">
            </div>
            <div class="both">
                <img onclick="bild = '2';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[1]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '2';window.sessionStorage.setItem('text',text);beskrivning();" src="./images/huset/hall/notes-v1/note_empty.jpg" loading="eager">
            </div>
            <div class="both">
                <img onclick="bild = '3';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[2]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '3';window.sessionStorage.setItem('text',text);beskrivning();" src="./images/huset/hall/notes-v1/note_empty.jpg" loading="eager">
            </div>
            <div class="both">
                <img onclick="bild = '4';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[3]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '4';window.sessionStorage.setItem('text',text);beskrivning();" src="./images/huset/hall/notes-v1/note_empty.jpg" loading="eager">
            </div>
            <div class="both">
                <img onclick="bild = '5';window.sessionStorage.setItem('bild',bild);painting();" class="painting shadow" src="<?php echo $bild[4]; ?>" alt="">
                <img class="note-general shadow2" onclick="text = '5';window.sessionStorage.setItem('text',text);beskrivning();" src="./images/huset/hall/notes-v1/note_empty.jpg" loading="eager">
            </div>
        </div>
        <a id="arrow" href="./hall.php"></a>
    </main>
    <script type="text/javascript" src="./scripts/huset/paintings.js" async></script>
</body>
</html>