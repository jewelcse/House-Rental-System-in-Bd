<style>

.index-header {
    width: 70%;
    background-color: ;
    height: 150px;
    padding: 5px;
    margin: 5px;

    /* animation-delay: 2s; */
}

/*body {
  background: #222;
  background-size: cover;
  overflow: hidden;

}*/

.social {
  /*position: absolute;*/
  width: 50%;
  height: 100px;
  
  background-color: ;
  text-align: center;
  transform: translateY(-50%);
}

.social .link {
  display: inline-block;
  vertical-align: middle;
  position: relative;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 2px dashed white;
  background-clip: content-box;
  padding: 10px;
  transition: .5s;
  color: #D7D0BE;
  margin-left: 15px;
  margin-right: 15px;
  font-size: 50px;
}

.social .link span {
  display: block;
  position: absolute;
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.social .link:hover {
  padding: 20px;
  color: white;
  margin-left: -5px;
  transform: translateX(10px) rotate(360deg);
}

.social .link.google-plus {
  background-color: tomato;
  color: white;
}

.social .link.twitter {
  background-color: #00ACEE;
  color: white;
}

.social .link.facebook {
  background-color: #3B5998;
  color: white;
}




</style>

<div class="index-header">
	<div class="index-header-img">
		<img src="images/house.gif" alt="">
	</div>
</div>
<div class="social">
  <a href="https://facebook.com/aminulcsebu" class="link facebook" target="_parent"><span class="fa fa-facebook-square"></span></a>
  <a href="https://twitter.com/" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
  <a href="https://plus.google.com/" class="link google-plus" target="_parent"><span class="fa fa-google-plus-square"></span></a>
</div>