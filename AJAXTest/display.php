<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>(Type a title for your page here)</title>
<link rel="stylesheet" href="style.css" type="text/css">

<script language="javascript" src="ajax.js"></script>

<script language="JavaScript">
function edit_field(id){

var mark_id='mark_'+id; // To read the present mark from div 
var data_mark='data_mark'+ id;  // To assign id value to text box 

var name_id='name_'+id;
var data_name='data_name'+ id;

var class_id='class_'+id;
var data_class='data_class'+ id;

var sex_id='sex_'+id;
var data_sex='data_sex'+ id;

var sid='s'+id;
var mark=document.getElementById(mark_id).innerHTML; // Read the present mark
document.getElementById(mark_id).innerHTML = "<input type=text id='" +data_mark + "' value='"+ mark + "' size=2>"; // Display text input 

var name=document.getElementById(name_id).innerHTML; // Read the present name
document.getElementById(name_id).innerHTML = "<input type=text id='" +data_name+ "' value='"+name+ "'>"; // 

var class1=document.getElementById(class_id).innerHTML; // Read the present class
document.getElementById(class_id).innerHTML = "<input type=text id='" +data_class+ "' value='"+class1+ "' >"; // 

var sex=document.getElementById(sex_id).innerHTML; 
//alert(data_sex);

if(sex=='male'){
document.getElementById(sex_id).innerHTML = "<input type=radio name='"+data_sex+"' value=male  id='" +data_sex+ "M' value='male' checked>Male<input type=radio name='"+data_sex+"'  id='" +data_sex+ "F' value='female' >Female  "; 
}else{
document.getElementById(sex_id).innerHTML = "<input type=radio name='"+data_sex+"' value=male  id='" +data_sex+ "M'  >Male <input type=radio name='"+data_sex+"' value=female  id='" +data_sex+ "F' ' checked>Female "; 
}

document.getElementById(sid).innerHTML = '<input type=button value=Update onclick=ajax(' + id + ');>'; // Add different color to background
} // end of function

</script>
</head>

<body>
<?Php
////////////////////////////////////////////
require "config.php"; // MySQL connection string
echo "<div id=\"msgDsp\" STYLE=\"position: absolute; right: 0px; top: 10px;left:800px;text-align:left; FONT-SIZE: 12px;font-family: Verdana;border-style: solid;border-width: 1px;border-color:white;padding:0px;height:20px;width:250px;top:10px;z-index:1\"> Edit mark </div>";

$count="SELECT name,id,class,mark,sex FROM student LIMIT 10";

$i=1;

echo "<br><br><br><table class='t1' width='1000'><tr><th>Name</th><th>Class</th><th>Sex</th><th>Mark</th><th>Edit</th></tr>";
foreach ($dbo->query($count) as $row) {
$m=$i%2; // To manage row style using css file. 
$mark_id='mark_' . $row['id'];  // Div tag to manage Mark data
$name_id='name_' . $row['id'];
$class_id='class_' . $row['id'];
$sex_id='sex_' . $row['id'];

$sid='s' . $row['id'];
echo "<tr class='r$m' height=50><td><div id=$name_id >$row[name]</div></td><td><div id=$class_id>$row[class]</div></td><td width='200'><div id=$sex_id >$row[sex]</div> </td><td><div id=$mark_id>$row[mark]</div>
</td><td><div id=$sid><input type=button value='Edit' onclick=edit_field($row[id])></div></td></tr>";
//echo "<tr><td><div id=$hid STYLE=\"width:240px;display:none;position: absolute;z-index:1;text-align: center;border-width: 2px;border-color:#ffff00;\"></div></td></tr>";
$i=$i+1;  // To manage row style
}
echo "</table>";
?>
<br><br><br>
<center><a href='http://www.plus2net.com' rel="nofollow">plus2net.com : PHP SQL HTML free tutorials and scripts</a></center> 

</body>
</html>
