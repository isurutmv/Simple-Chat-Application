<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat Application</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <br>
        <h3 align="center">Chat Application</h3>
        <br><br>

        <div class="panel panel-default">
            <div class="panel-heading">Chat Application Login</div>
            <div class="panel-body">
                <form action="post">
                    <div class="form-group">
                        <label for="username">Enter Username</label>
                        <input type="text" name="username" id="username" class="form-control" required />
                    </div>

                    <div class="form-group">
                        <label for="password">Enter Password</label>
                        <input type="password" name="password" id="password" class="form-control" required />
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Login" name="login" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>