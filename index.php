<?php
/**
 * Sanket C
 */
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
  <title>
    BUG TRACKING SYSTEM
  </title>
  <head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		 <style>
			body{
		  margin:0;
		  color:#6a6f8c;
		  background:#c8c8c8;
		  font:600 16px/18px 'Open Sans',sans-serif;
		}
		*,:after,:before{box-sizing:border-box}
		.clearfix:after,.clearfix:before{content:'';display:table}
		.clearfix:after{clear:both;display:block}
		a{color:inherit;text-decoration:none}
		.login-wrap{
		  width:100%;
		  margin:auto;
		  margin-top: 30px;
		  max-width:525px;
		  min-height:570px;
		  position:relative;
		  //background:url(http://codinginfinite.com/demo/images/bg.jpg) no-repeat center;
		  box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
		}
		.login-html{
		  width:100%;
		  height:100%;
		  position:absolute;
		  padding:90px 70px 50px 70px;
		  background:rgba(40,57,101,.9);
		}
		.login-html .sign-in-htm,
		.login-html .sign-up-htm{
		  top:0;
		  left:0;
		  right:0;
		  bottom:0;
		  position:absolute;
		 
		}
		.login-html .sign-in,
		.login-html .sign-up,
		.login-form .group .check{
		  display:none;
		}
		.login-html .tab,
		.login-form .group .label,
		.login-form .group .button{
		  text-transform:uppercase;
		}
		.login-html .tab{
		  font-size:22px;
		  margin-right:15px;
		  padding-bottom:5px;
		  margin:0 15px 10px 0;
		  display:inline-block;
		  border-bottom:2px solid transparent;
		}
		.login-html .sign-in:checked + .tab,
		.login-html .sign-up:checked + .tab{
		  color:#fff;
		  border-color:#1161ee;
		}
		.login-form{
		  min-height:345px;
		  position:relative;
		  
		}
		.login-form .group{
		  margin-bottom:15px;
		}
		.login-form .group .label,
		.login-form .group .input,
		.login-form .group .button{
		  width:100%;
		  color:#fff;
		  display:block;
		}
		.login-form .group .input,
		.login-form .group .button{
		  border:none;
		  padding:15px 20px;
		  border-radius:25px;
		  background:rgba(255,255,255,.1);
		}
		.login-form .group input[data-type="password"]{
		  text-security:circle;
		  -webkit-text-security:circle;
		}
		.login-form .group .label{
		  color:#aaa;
		  font-size:12px;
		}
		.login-form .group .button{
		  background:#1161ee;
		}
		.login-form .group label .icon{
		  width:15px;
		  height:15px;
		  border-radius:2px;
		  position:relative;
		  display:inline-block;
		  background:rgba(255,255,255,.1);
		}
		.login-form .group label .icon:before,
		.login-form .group label .icon:after{
		  content:'';
		  width:10px;
		  height:2px;
		  background:#fff;
		  position:absolute;
		  transition:all .2s ease-in-out 0s;
		}
		
		.login-form .group .check:checked + label{
		  color:#fff;
		}
		.login-form .group .check:checked + label .icon{
		  background:#1161ee;
		}
		
		.hr{
  height:2px;
  margin:20px 0 20px 0;
  background:rgba(255,255,255,.2);
}
  

  </style>
	</head>

</head>
<body>

  <?php require_once("config.php"); ?>


<div class="login-wrap">
	<div class="login-html">
		<label><input id="rdb1" type="radio" name="toggler" value="1" checked/>Sign-in</label>
		<label><input id="rdb2" type="radio" name="toggler" value="2" />Sign-up</label>
		<div class="hr"></div>
		<div class="login-form">
			<div id="blk-1" class="toHide" style="display:block">
			<form class="sign-in-htm" action="login.php" method="POST">
				<div class="group">
				  <label for="user" class="label">Username</label>
				  <input id="username" name="username" type="text" class="input">
				</div>
				<div class="group">
				  <label for="pass" class="label">Password</label>
				  <input id="password" name="password" type="password" class="input" data-type="password">
				</div>
				<!--<div class="group">
				  <input id="check" type="checkbox" class="check" checked>
				  <label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>-->
				<div class="group">
				  <input type="submit" class="button" value="Sign In">
				</div>
				
			  </form>
		</div>
		<div id="blk-2" class="toHide" style="display:none">
			<form class="sign-up-htm" action="createNewUser.php" method="POST">
                <div class="group">
                    <label for="fname" class="label">First Name</label>
                    <input id="fname" name="fname" type="text" class="input">
                </div>
                <div class="group">
                    <label for="lname" class="label">Last Name</label>
                    <input id="lname" name="lname" type="text" class="input">
                </div>
                <div class="group">
				  <label for="user" class="label">Username</label>
				  <input id="username" name="username" type="text" class="input">
				</div>
				<div class="group">
				  <label for="pass" class="label">Password</label>
				  <input id="password" name="password" type="password" class="input" data-type="password">
				</div>
<!--				<div class="group">-->
<!--				  <label for="pass" class="label">Confirm Password</label>-->
<!--				  <input id="pass" type="password" class="input" data-type="password">-->
<!--				</div>-->
				<div class="group">
				  <input type="submit" class="button" value="Sign Up">
				</div>
				
			  </form>
		</div>
		</div>
		

	</div>
</div>



<script>
			$(function() {
				$("[name=toggler]").click(function(){
						$('.toHide').hide();
						$("#blk-"+$(this).val()).show();
				});
		 });
		</script>
	</body>
</html>