<html>
    <head>
        <title>sgpaunite admin</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="container-fluid admin-split">
            <div class="container addsub">
                <div class="add">
                    <label>APPEND COURSE</label>
                    <input list="course_datalist" class="text-inputs" name="course_value" placeholder="Course Name">
                    <datalist>
                    </datalist>
                    <input list="stream_datalist" class="text-inputs" name="stream_value" placeholder="Stream Name">
                    <datalist>
                    </datalist>
                    <div class="halfdiv">
                        <input list="revision_datalist" class="text-inputs basic-items" name="revision_value" placeholder="Revision">
                        <datalist>
                        </datalist>
                        <input list="sem_datalist" class="text-inputs basic-items" name="sem_value" placeholder="Semester">
                        <datalist>
                        </datalist>        
                    </div>
                </div>
            </div>
            <div class="container addsub">
                <div class="sub">
                    <label>DEPRIVE COURSE</label>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </body>
</html>