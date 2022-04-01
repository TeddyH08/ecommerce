
<style>
.cadre{
    width: 800px;
    height: 800px;
    border : 2px solid red;
    margin-left: 100px;
    margin-top: 100px;
    cursor: none;
    background-image:url("assets/img/fond.jpg");
    background-size: 1200px auto;
    overflow: hidden;
}

.cadre img{
    width: 100%;
    height: 100%;
}

.loupe{
    width: 100px;
    height: 100px;
    border : 1px solid black;
    border-radius: 50px;
    box-shadow: 0 0 10px rgba(0,0,0,0.6);
    position: absolute;
    background-image:url("assets/img/fond.jpg");
    filter:brightness(0.8)
    }


</style>



<div class="cadre" id="cadre">
<div class="loupe" id="loupe"></div>



</div>

<script>

zoom=2;

document.getElementById("cadre").onmousemove=function(){
    loupe=document.getElementById("loupe");
    loupe.style.left=event.clientX+"px";
    loupe.style.top=event.clientY+"px";
    loupe.style.backgroundSize=(1300*zoom)+"px";
    loupe.style.backgroundPosition=(-loupe.offsetLeft*zoom-50)+"px "
    +(-loupe.offsetTop*zoom-50)+"px"; // on met 50 car c'est la moitié de la loupe

}

</script>