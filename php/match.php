<?php
include 'auth.php';

if(logged_in()===false){
    $error[]='You need to login first!';?>
    <h3><?php echo output_errors($error);
    ?></h3>
    <div align="center"><a href="home.php">Login</a></div>
<?php
}else{   include 'homepage.php';
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>Kidhub</title>
        <style type="text/css">
            .t1{
                height:40%;
            }
            #can-rap{
                position: relative;
            }
            .overlay{
                position: absolute;
                top: 50px;
                left: 200px;
                height: 1000px;
            }
            .overlay1{
                position: absolute;
                top: 50px;
                left: 700px;
                height: 1000px;
            }
        </style>
    </head>
    <body>
    <div id="main" style="padding-left: 150px;background-image: url('/web development/project/img/wall7.jpg');background-size: cover;background-position: center bottom;">
    <div id="can-rap">
    <canvas id="mycanvas" height="500px" width="700px" style="padding-left: 250px;border: 0px groove black;">
    </canvas>
    <div id="div1" class="overlay" >
    <table class="t1">
		<tr> <td id="td1" style="width:70%; font-size: 30px;" align="center"><img src="/web development/project/img/apple.png" style="height:60px;width:80px;" alt="apple"></td></tr>
		<tr> <td id="td2" style="width:70%; font-size: 30px;" align="center"><img src="/web development/project/img/mango.jpg" style="height:60px;width:80px;" alt="mango"></td></tr>
		<tr> <td id="td3" style="width:70%; font-size: 30px;" align="center"><img src="/web development/project/img/orange.jpg" style="height:60px;width:80px;" alt="orange"></td></tr>
		<tr> <td id="td4" style="width:70%; font-size: 30px;" align="center"><img src="/web development/project/img/strawberry.jpg" style="height:60px;width:80px;" alt="strawberry"></td></tr>
		<tr> <td id="td5" style="width:70%; font-size: 30px;" align="center"><img src="/web development/project/img/cherry.jpg" style="height:60px;width:80px;" alt="cherry"></td></tr>
	  </table>
    </div>
    <div id="div2" class="overlay1" >
    <table class="t1">
        <tr> <td id="td6" style="width:70%; font-size: 30px;color: orange;" align="center">strawberry</td></tr>
        <tr> <td id="td7" style="width:70%; font-size: 30px;color: orange;" align="center">apple</td></tr>
        <tr> <td id="td8" style="width:70%; font-size: 30px;color: orange;" align="center">cherry</td></tr>
        <tr> <td id="td9" style="width:70%; font-size: 30px;color: orange;" align="center">mango</td></tr>
        <tr> <td id="td0" style="width:70%; font-size: 30px;color: orange;" align="center">orange</td></tr>
    </table>
    </div>
    <div style="padding-top: 100px;padding-right: 120px; float:right;"><center>
    <button id="abc" style="padding: 8px 14px;background-color:gray;" onclick="validate()">CHECK</button><br><br>
    <button id="xyz" style="padding: 8px 14px;background-color:gray;" onclick="reset()">RESET</button>
      </center>
    </div>
    </div>

    <br style="clear: left">

  </div><br><hr/><br>
    <script type="text/javascript">
        var c= document.getElementById("mycanvas");
        var ctx=c.getContext("2d");
        var div1=document.querySelector("#div1");
        var div2=document.querySelector("#div2");
      var a,b,count=0,p,q,r,s;
      var x=[];
      function choose(event){
            a=event.clientX;
            //console.log(a);
            b=event.clientY;
            count++;
            if(count%2==0){
                draw();
            }
            else{
                setCanvas();
            }
            x[count-1]=this;
            this.removeEventListener("click",choose,false);
      }
      var z1=document.querySelector("#td1");
      var y1=document.querySelector("#td9");
      var z2=document.querySelector("#td2");
      var y2=document.querySelector("#td8");
      var z3=document.querySelector("#td3");
      var y3=document.querySelector("#td7");
      var z4=document.querySelector("#td4");
      var y4=document.querySelector("#td6");
      var z5=document.querySelector("#td5");
      var y5=document.querySelector("#td0");

      z1.addEventListener("click",choose,false);
      y1.addEventListener("click",choose,false);
      z2.addEventListener("click",choose,false);
      y2.addEventListener("click",choose,false);
      z3.addEventListener("click",choose,false);
      y3.addEventListener("click",choose,false);
      z4.addEventListener("click",choose,false);
      y5.addEventListener("click",choose,false);
      z5.addEventListener("click",choose,false);
      y4.addEventListener("click",choose,false);
      function setCanvas(){
            ctx.moveTo(p=a-415,q=b-180);
      }
      function draw(){
            r=a-408;
            if((r-p)>200||(r-p)<-200){
            ctx.lineTo(r,s=b-180);
            ctx.strokeStyle="red";
            ctx.stroke();

          }
      }
      var ans=[[z1,y3],[z2,y1],[z3,y5],[z4,y4],[z5,y2]];
      console.log(ans.length);
      var response=[];
      function validate(){
        var num1,num2;
          for(i=0;i<x.length;i+=2){
            num2=x[i+1];
            num1=x[i];
            response[parseInt(i/2)]=[num1,num2];
          }
          //console.log(response);
          for(i=0;i<response.length;i++){
              for(j=0;j<2;j++){
                if(ans[i][j]==response[i][j]){
                  response[i][1].style.backgroundColor="green";
                }
                else{
                  response[i][1].style.backgroundColor="red";
                }
              }
          }
      }
      function reset(){
        location.reload();
      }
    </script>
    <?php
    }
    include 'footer.php';
    ?>
    </body>
    </html>
