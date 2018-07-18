        <!-- Login -->
			<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
    <div class="12u$">
	   <ul class="actions">
	<li><input type="submit" value="Login" class="special" /></li>
    </div>

    <div class="container" style="background-color:#242943">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="#">Forgot Password?</a></span>
    </div>
  </form>
</div>	

<style type="text/css">
::-webkit-scrollbar {
display: none;
}
</style>
<script>
function goBack() {
    window.history.back();
}
</script>