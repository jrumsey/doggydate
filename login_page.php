<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Social network for dog-owners">
        <meta name="keywords" content="dog, dog-owners, network, social network, match">
        <meta name="author" content="Jeremy Rumsey">
    
        <link rel="stylesheet" href="themes/plugins/bootstrap-4.1.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="login_page.css">
    
    </head>
    <body>
        
        <div class="container" id="login-container">
            <div class="row">
                <div class="login-box col-xl-3">
                    <form action="actions/login.php" method="post">
                        <div class="form-group">
                            <h4>Log In</h4>
                            <label for="eml">Email:</label>
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                            <input type="submit" value="Log in" />
                    </form>
                </div>

                <div class="create-user-box col-xl-3">
                    <form action="actions/create_user.php" method="post">
                    <div class="form-group">
                        <h4>Create New Profile</h4>
                        <label for="nm">Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required> 
                    </div>
                    <div class="form-group">
                        <label for="pwd">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" id="new-pwd" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="gndr">Gender:</label><br>
                        <label style="margin-right:15%"><input type="radio" name="gender" value="Male" required>Male</label>
                        <label><input type="radio" name="gender" value="Female">Female</label>
                    </div> 
<!--
                    <div class="form-group">
                        <label for="bth">Date of Birth</label><br>
                        
                    </div>
-->
                        <input type="submit" value="Create Profile" />
                    </form>
                </div>
            </div>
        </div>



        
    </body>
</html>