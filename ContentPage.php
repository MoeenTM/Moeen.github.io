<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>My Proj</title>
        <link rel="stylesheet" href="Css/MainCss.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />
        <!--<script src="JS/Push.js"></script>-->
    </head>

    <body>
    
        <div>
            <ul class="Header">
                <li class="HeaderItem"><a href="#">Home</a></li>
                <li class="HeaderItem"><a href="#">Projects</a></li>
                <li class="HeaderItem"><a href="#">Downloads</a></li>
                <li class="HeaderItem"><a href="#">About</a></li>
                <li class="HeaderItem" style="float: right;" onclick="OpenBox(SignUpBox)"><a>SignUp</a></li>
            </ul>
        </div>


        <div id="SignUpBox" class="PopUp-Back">
            <form action="SignUp.php" method="post" class="PopUp FadeIn">

                <div class="NoName">
                    <span class="CloseX" onclick="CloseBox(SignUpBox);" style="cursor: pointer;">&times;</span>
                    <img src="Imgs/user.png" alt="Avatar" style="width: 20%;">
                </div>

                <div class="EntryContainer">

                    <label for="Us">Username</label>
                    <input type="text" id="Us" name="UserNameIn" class="TextEntry" required>

                    <label for="Pw">Password</label>
                    <input type="password" id="Pw" name="PassWordIn" class="TextEntry" required>

                    <label for="CPw">Confirm Password</label>
                    <input type="password" id="CPw" name="ConfPassWordIn" class="TextEntry" required>

                    <label for="Email">Email</label>
                    <input type="email" id="Email" name="EmailIn" class="TextEntry" required>

                    <label for="Info">Info</label>
                    <textarea type="" id="Info" name="InfoIn" class="TextEntry" style="resize: none;"></textarea>

                    <input type="checkbox" name="Check" required> I Accept  <a href="script:alert('There Is Nothing')">Rules</a>

                    <button class="Button">SignUp</button>
                </div>

                <div class="EntryContainer" style="background: #f1f1f1;">
                    <button class="CancelBtn" onclick="CloseBox(SignUpBox);">Cancel</button>
                    <span style="float: right; line-height: 55px;"><a href="#">Problem With SignUp? </a></span>
                </div>

            </form>
        </div>

        <script>
            var SignUpBox = document.getElementById("SignUpBox");
            window.onclick = (function (event ) {
                if(event.target === SignUpBox)
                    CloseBox(SignUpBox);
            });
            function  OpenBox(Box){
                Box.classList.remove("FadeOut");
                Box.classList.add("FadeIn");
                Box.style.display = 'block';
            }
            function  CloseBox(Box){
                Box.classList.remove("FadeIn");
                Box.classList.add("FadeOut");
                Box.style.display = 'none';
            }
        </script>

    </body>
</html>