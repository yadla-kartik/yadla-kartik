<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>About</title>
</head>

<body background="pexels-karol-wiśniewski-878297.jpg">
    <div class="container">
        <div class="contact_box">
            <div class="contact_left">
                <h3>Send the request</h3>
	    <form method="POST" action="process.php"enctype="multipart/form-data">
                    <div class="input_row">
                        <div class="input_group">
                            <label>Name</label>
                            <input type="text" name="Name">
                        </div>
                        <div class="input_group">
                            <label>Phone</label>
                            <input type="text" name="Phone">
                        </div>
                    </div>
                    <div class="input_row">
                        <div class="input_group">
                            <label>Email</label>
                            <input type="email"name="Email">
                        </div>
                        <div class="input_group">
                            <label>Subject</label>
                            <input type="text"name="Subject">
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea rows="5" placeholder="your message"name="Message"></textarea>
                    <button type="submit" name="send">Send</button>
                </form>
            </div>
            <div class="contact_right">
                
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
                    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
                    crossorigin="anonymous">

                <div>
                    <ul id="icons">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f icon"></i> </a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter icon"></i></a>
                        </li>
                        <br>
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in icon"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g icon"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</body>
</html>

