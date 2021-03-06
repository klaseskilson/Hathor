<main id="main">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<div id="signuparea">
					<h2 id="signuptitle"></h2>
					<h3>Sign up!</h3>
					<p>
						To use Mote.fm in all it's glory, you'll first need to create an account. Your account is only
						a couple of seconds away.
					</p>
					<p>
						Sign up by entering the fields below. You'll need to confirm your email within three days.
					</p>
					<form action="<?php echo base_url(); ?>user/signup/" method="post" id="signupform">
						<p>
							<input type="text" name="name" id="name" class="form-control input-lg square-bottom" placeholder="Full name" required>
							<input type="email" name="email" id="email" class="form-control input-lg square-bottom square-top" placeholder="Email" required>
							<input type="password" name="password" id="password" class="form-control input-lg square-top" placeholder="Password" required>
						</p>
						<p>
							<input type="submit" name="submit" id="submit" value="Go!" class="btn btn-default btn-lg btn-block">
						</p>
						<p>
							By creating a account you accept our <a href="#">terms of service</a>. We never share your information with anybody.
						</p>
						<p>
							<a href="#" data-toggle="signupsignin">Sign in instead!</a>
						</p>
					</form>
				</div><!-- /#signuparea -->
				<div id="signinarea" style="display:none;">
					<h3>Sign in!</h3>
					<p>
						To access all awesome features that Mote.fm offers, sign in!
					</p>
					<form action="<?php echo (isset($redir) && $redir) ? '?redir='.$redir : ''; ?>" method="post" class="login">
						<?php
						if(isset($email))
						{
							?>
							<div class="alert alert-danger">
								<strong>Uh-oh!</strong>
								We could not log you in with those credentials. Make sure you
								entered the correct email and password combination and try again.
							</div>
							<?php
						}
						?>
						<p>
							<input type="email" name="email" id="login_email" class="form-control input-lg square-bottom"
								   placeholder="Email" <?php echo isset($email) ? ' value="'.$email.'"' : ''; ?>required autofocus>
							<input type="password" name="password" id="login_password" class="form-control input-lg square-top" placeholder="Password" required>
						</p>
						<p>
							<input type="submit" name="submit" id="login_submit" value="Go!" class="btn btn-default btn-lg btn-block">
						</p>
						<p>
							<a href="<?php echo base_url().'user/reset';?>" data-toggle="reset">Forgot your password?</a>
							<a href="#" data-toggle="signupsignin" class="pull-right">I want to sign up!</a>
						</p>
					</form>
				</div><!-- /#signinarea -->
			</div>
		</div>
	</div>
</main><!-- end #main -->
