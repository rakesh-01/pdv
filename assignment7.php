<html>
    <head>
        <title>18MIS7073</title>
        <link rel="stylesheet" href="assignment7.css">
        <style>
            .lbl {
                display: inline-block;
                width: 100px;
                margin-top:10px;
            }
            input,textarea
            {
                margin-top:10px;
            }
            span{
                margin:3px;
                color:red;
                }
        </style>
    </head>
    
    <body>
        <div class="main">
            <div class="header">
                <h1>Name : B Rakesh</h1>
                <h3>RegNo:18MIS7073</h3>
                <ul>
                    <li><a href="../index.html">HOME</a></li>
                </ul>
            </div>
            <br>
        
        
        <br>
        <div class="layout">
            <form action="validate.php" method="POST">
                <label class="lbl">Name</label>
                <input type="text" name = "name"><span>*</span><br>
                <label class="lbl">Email</label>
                <input type="text" name = "email"><span>*</span><br>
                <label class="lbl">Password</label>
                <input type="text" name = "pwd"><span>*</span><br>
                <label class="lbl">C Password</label>
                <input type="text" name = "cpwd"><span>*</span><br>
                <label class="lbl">Gender</label>
                <input type="radio" name = "gender" value="Male">Male</input>
                <input type="radio" name = "gender" value="female">Female</input><span>*</span>
                <br>
                <label class="lbl">Contact No</label>
                <input type="text" name = "cno"><span>*</span><br>
                <label class="lbl">Message</label>
                <textarea type="text" name = "msg"> </textarea><br>
        
                <button class="submit" >Submit</button>
                <button class="reset">Reset</button>
            </form>
        </div>
    </div>







        
        <footer>
            <p>Disclaimer: I have not used any unfair means for completing the assignments</p>
        </footer>
    </div>


    </body>


</html>