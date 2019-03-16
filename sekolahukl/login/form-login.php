<!DOCTYPE html>
<html>
<style media="screen">
html{
  margin: o auto;
  background-image: url("../bg/i.png");
  background-repeat: no-repeat;
  background-size:100% 100%;
  color:#6495ED;
}

body{
  font-family:fantasy;
  height: 100vh;
  color: #191970;
  font-size: 50px;
}
form{
  width: 500px;
  height: 450px;
  text-align: center;
  margin: 0 auto;
  background-color: rgb(0,0,0,0.5);
  margin: 0 auto;
  margin-top: 90px;
  font-size: 30px;
  font-family:monospace;
  border-radius: 50px;
  transform: scale3d();
  box-shadow: 5px 5px 6px black;
}
form:hover{
  box-shadow: 5px 5px 6px black;
  transform: scale(1.1);
  border-radius: 50px;
}
.login{
  border: 0;
  border: 2px solid grey;
  padding-left: 10px;
  border-radius: 10px;
  font-size: 17px;
  height: 45px;
  width: 200px;
  transition: width 0.5s;
  box-sizing: border-box;
  color:#191970 ;
  text-align: center;
}
.login:focus{
  border: 2px solid grey;
  background-color:;
  color: black;
  box-shadow: 1px 1px 1px 1px cyan;
  width: 50%;
  border-radius: 10px;

}

button{
      background-color: #6495ED;
      padding: 15px;
      color: black;
      font-size: 20px;
      letter-spacing: 0.1em;
      border-radius: 5px;
      border: 2px solid grey;
      box-shadow: 1px 3px 5px rgba(0,0,0,0.5);
      width: 300px;
      margin-left: 10px;
      transition: all 0.75s;
  }
  button:hover{
  background-color: #2C3E50;
  color: white;
}
img{
padding: 3px 1px;
width: 100px;
height: auto;

}

</style>
<body>
  <marquee direction="left" scrollamount="20"> Welcome To Our School</marquee>
  <form class="form" action="login.php" method="post">
    <img src="../bg/team.png">
    <div class="wrapper">
      <div class="container">
      <br>
      <input type="text" name="username" value="" class="login" placeholder="username">
      <br>
      <br>
      <input type="password" name="password" value="" class="login" placeholder="password">
      <br>
      <br>
      <br>
      <button type="submit" name="btnSimpan"> login </button>
      <br>
    </div>
  </form>
</body>
</html>
