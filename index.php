<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload your files</title>

</head>

<script src="script/jquery-3.3.1.js"></script>
<script src="script/bootstrap.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/calc.css">

<style>
    body
    {
        background: url("img/back2.jpg");
    }

    #DataToSend
    {
        resize: none;
    }

    #ChatData
    {
        resize: none;
    }


    .btn {
        height:45px;
    }


    #calcContent
    {
        padding: 10px;
        text-align: center;

        margin-bottom: 100px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

</style>

<body>


<!-- Top navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div style="color: #FFFFFF" class="navbar-header">
            &emsp; <img width="50" height="50" src="img/logo.png">
        </div>
        <ul class="nav navbar-nav">
            <li>&emsp;&emsp;</li>
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Follow
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Google+</a></li>
                </ul>
            </li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#" class="about">About</a></li>
        </ul>
    </div>
</nav>


<!-- Container -->
        <div id="calcContent" >
            <div class="panel panel-primary">
                <div style="font-size: 15px" class="panel-heading">Select file to upload:</div>
                <div class="panel-body">
                    <form id="uploadFile" action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <br>
                        <div id="loading"></div>
                    <input class="btn btn-primary" type="submit" value="Upload Image" name="submit">

                    </form>
                    <br>
                    <div style="float: left" id="msg"></div>
                </div>
            </div>

        </div>


<!-- Footer -->
<nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#" class="about">About</a></li>
        </ul>
    </div>
</nav>

</body>
</html>
<script>
$(document).ready(function(){
$.getScript("script/send.js");
});
</script>