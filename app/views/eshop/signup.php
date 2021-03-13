
	<?php $this->view("header",$data); ?>
<section id="form" style="margin-top:5px;"><!--form-->
    <div class="container">
        <div class="row" style="text-align:center;">

            <span style="font-size:18px; color:red;"><?php check_error() ?></span>

            <div class="col-sm-4" style="float:none; display:inline-block;">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form  method="post">
                        <input type="text" name="name" value="<?= isset($_POST['name']) ? $_POST['name']: '';?>" placeholder="Name"/>
                        <input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email']: '';?>" placeholder="Email Address"/>
                        <input type="password" name="password"  placeholder="Password"/>
                        <input type="password" name="password2" placeholder="Retype Password"/>
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<?php $this->view("footer",$data); ?>



