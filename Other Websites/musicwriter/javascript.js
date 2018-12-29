function click(z)
{
if (w==1)
{w=0;}
else
{w=1;}
}
function move(w,event,c)
{
if (w==1)
{
var x=event.clientX;
var y=event.clientY;
document.getElementById("img"+c).pos.x=x;
document.getElementById("img"+c).pos.y=y;
}}
function buttonPress(a)
{
var second1="<a onclick='buttonPresstwo(1"+a+")'><img src='image1"+a+".jpeg' height='25px'></a>";
var second2="<a onclick='buttonPresstwo(2"+a+")'><img src='image2"+a+".jpeg' height='25px'></a>";
var second3="<a onclick='buttonPresstwo(3"+a+")'><img src='image3"+a+".jpeg' height='25px'></a>";
var second4="<a onclick='buttonPresstwo(4"+a+")'><img src='image4"+a+".jpeg' height='25px'></a>";
var second5="<a onclick='buttonPresstwo(5"+a+")'><img src='image5"+a+".jpeg' height='25px'></a>";
var second6="<a onclick='buttonPresstwo(6"+a+")'><img src='image6"+a+".jpeg' height='25px'></a>";
var second7="<a onclick='buttonPresstwo(7"+a+")'><img src='image7"+a+".jpeg' height='25px'></a>";
var second8="<a onclick='buttonPresstwo(8"+a+")'><img src='image8"+a+".jpeg' height='25px'></a>";
var second9="<a onclick='buttonPresstwo(9"+a+")'><img src='image9"+a+".jpeg' height='25px'></a>";
var second10="<a onclick='buttonPresstwo(10"+a+")'><img src='image10"+a+".jpeg' height='25px'></a>";
var second11="<a onclick='buttonPresstwo(11"+a+")'><img src='image11"+a+".jpeg' height='25px'></a>";
var second12="<a onclick='buttonPresstwo(12"+a+")'><img src='image12"+a+".jpeg' height='25px'></a>";
var second13="<a onclick='buttonPresstwo(13"+a+")'><img src='image13"+a+".jpeg' height='25px'></a>";
var second14="<a onclick='buttonPresstwo(14"+a+")'><img src='image14"+a+".jpeg' height='25px'></a>";
var second15="<a onclick='buttonPresstwo(15"+a+")'><img src='image15"+a+".jpeg' height='25px'></a>";
var second16="<a onclick='buttonPresstwo(16"+a+")'><img src='image16"+a+".jpeg' height='25px'></a>";
var second17="<a onclick='buttonPresstwo(17"+a+")'><img src='image17"+a+".jpeg' height='25px'></a>";
var second18="<a onclick='buttonPresstwo(18"+a+")'><img src='image18"+a+".jpeg' height='25px'></a>";
}}
document.getElementById('sc').innerHTML=second1+second2+second3+second4+second5+second6+second7+second8+second9+second10+second11+second12+second13+second14+second15+second16+second17+second18;
}
function buttonPresstwo(b)
{
document.getElementById('sc2').innerHTML="<a onclick='click("+b+")'><img id='img"+b+"' src='image1"+b+".jpeg' height='150px'></a>";
}