<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Java Script</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">



</head>

<body>



    <div class="container" id="container">
        <!-- <div class="container container-dark" id="container"> -->

        <h1 id="form">Form</h1>
        <div class="row">
            <div class="col" style="padding-top: 20px;">
                <button class="btn btn-primary" onclick=btnadddata() id="btnadddata">Add Data</button>
            </div>
            <div class="col" style="padding-top: 20px;">
                <button class="btn btn-primary float-end" onclick=btnshowdata() id="btnshowdata">Show Data</button>
            </div>
        </div>

        <hr>

        <!-- Add Data  -->
        <div class="containerform hide" id="adddata">
            <div class="containerform" id="containerform">
                <h5 id="form">Add Data Form</h5>
                <form id="formadddata">
                    <div class="row">
                        <div class="col">
                            <label> Number</label>
                            <input type="text" name="num" id="num">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label> Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label> Price</label>
                            <input type="text" name="price" id="price">
                        </div>
                    </div>


                    <div class="row">

                        <div class="col" style="padding-top: 20px;">
                            <button type="submit" class="btn btn-primary" onclick=btnclick() id="adddatasubmit">Add Data</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <!-- Add Data  -->
        <div class="containerform hide" id="showdata">
            <div class="containerform" id="containerform">
                <h5 id="form">Show Data Form</h5>


                <div class="row">
                    <div class="col">
                        <div id="lbl">

                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col" style="padding-top: 20px;">
                        <button class="btn btn-primary" onclick=btnclick() id="refresh">Refresh</button>
                    </div>

                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="script.js"></script>
</body>

</html>