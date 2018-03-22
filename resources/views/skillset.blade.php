<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
            padding: 25px 25px;
            font-family: "Helvetica", sans-serif;
        }

        label {
            cursor:pointer;
            color: #666;
        }

        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"] + .label-text:before {
            content: url(https://i.imgur.com/4IloQwv.jpg);

        }

        input[type="checkbox"]:checked + .label-text:before {
            content: url(https://i.imgur.com/UZFU49P.jpg);

        }

        input[type="checkbox"]:disabled + .label-text {
            color: #aaa;
        }

        input[type="checkbox"]:disabled + .label-text:before {
            content: "\f0c8";
            color: #ccc;
        }
</style>
<script>
//function to check boxes 1 t/m 2 in HTML forms
    function onToggle(){
       if (document.querySelector('#html2').checked) {
            document.getElementById("html1").checked = true;
        } else {
            document.getElementById("html1").checked = false;
        } 
    }
//function to check boxes 1 t/m 3 in HTML forms
    function onToggle2(){
       if (document.querySelector('#html3').checked) {
            document.getElementById("html2").checked = true;
            document.getElementById("html1").checked = true;
        } else {
            document.getElementById("html2").checked = false;
            document.getElementById("html1").checked = false;
        } 
    }
//function to check boxes 1 t/m 4 in HTML forms
    function onToggle3(){
       if (document.querySelector('#html4').checked) {
            document.getElementById("html3").checked = true;
            document.getElementById("html2").checked = true;
            document.getElementById("html1").checked = true;
        } else {
            document.getElementById("html3").checked = false;
            document.getElementById("html2").checked = false;
            document.getElementById("html1").checked = false;
        } 
    }  
//function to check boxes 1 t/m 5 in HTML forms
    function onToggle4(){
       if (document.querySelector('#html5').checked) {
            document.getElementById("html4").checked = true;
            document.getElementById("html3").checked = true;
            document.getElementById("html2").checked = true;
            document.getElementById("html1").checked = true;
        } else {
            document.getElementById("html4").checked = false;
            document.getElementById("html3").checked = false;
            document.getElementById("html2").checked = false;
            document.getElementById("html1").checked = false;
        } 
    }        
//function to check boxes 1 t/m 2 in CSS forms
    function onToggle5(){
       if (document.querySelector('#css2').checked) {
            document.getElementById("css1").checked = true;
        } else {
            document.getElementById("css1").checked = false;
        } 
    }
//function to check boxes 1 t/m 3 in CSS forms
    function onToggle6(){
       if (document.querySelector('#css3').checked) {
            document.getElementById("css2").checked = true;
            document.getElementById("css1").checked = true;
        } else {
            document.getElementById("css2").checked = false;
            document.getElementById("css1").checked = false;
        } 
    }   
//function to check boxes 1 t/m 4 in CSS forms
    function onToggle7(){
       if (document.querySelector('#css4').checked) {
            document.getElementById("css3").checked = true;
            document.getElementById("css2").checked = true;
            document.getElementById("css1").checked = true;
        } else {
            document.getElementById("css3").checked = false;
            document.getElementById("css2").checked = false;
            document.getElementById("css1").checked = false;
        } 
    }  
//function to check boxes 1 t/m 5 in CSS forms
    function onToggle8(){
       if (document.querySelector('#css5').checked) {
            document.getElementById("css4").checked = true; 
            document.getElementById("css3").checked = true;
            document.getElementById("css2").checked = true;
            document.getElementById("css1").checked = true;
        } else {
            document.getElementById("css4").checked = false; 
            document.getElementById("css3").checked = false;
            document.getElementById("css2").checked = false;
            document.getElementById("css1").checked = false;
        } 
    }
//function to check boxes 1 t/m 2 in JS forms
    function onToggle9(){   
       if (document.querySelector('#js2').checked) {
            document.getElementById("js1").checked = true;
        } else {
            document.getElementById("js1").checked = false;
        } 
    }
//function to check boxes 1 t/m 3 in JS forms
    function onToggle10(){   
       if (document.querySelector('#js3').checked) {
            document.getElementById("js2").checked = true;
            document.getElementById("js1").checked = true;
        } else {
            document.getElementById("js2").checked = false;
            document.getElementById("js1").checked = false;
        } 
    }
//function to check boxes 1 t/m 4 in JS forms
    function onToggle11(){   
       if (document.querySelector('#js4').checked) {
            document.getElementById("js3").checked = true;
            document.getElementById("js2").checked = true;
            document.getElementById("js1").checked = true;
        } else {
            document.getElementById("js3").checked = false;
            document.getElementById("js2").checked = false;
            document.getElementById("js1").checked = false;
        } 
    }
//function to check boxes 1 t/m 5 in JS forms
    function onToggle12(){   
       if (document.querySelector('#js5').checked) {
            document.getElementById("js4").checked = true;
            document.getElementById("js3").checked = true;
            document.getElementById("js2").checked = true;
            document.getElementById("js1").checked = true;
        } else {
            document.getElementById("js4").checked = false;
            document.getElementById("js3").checked = false;
            document.getElementById("js2").checked = false;
            document.getElementById("js1").checked = false;
        } 
    }
//function to check boxes 1 t/m 2 in TS forms
    function onToggle13(){
       if (document.querySelector('#ts2').checked) {
            document.getElementById("ts1").checked = true;
        } else {
            document.getElementById("ts1").checked = false;
        } 
    } 
//function to check boxes 1 t/m 3 in TS forms
    function onToggle14(){
       if (document.querySelector('#ts3').checked) {
            document.getElementById("ts2").checked = true;
            document.getElementById("ts1").checked = true;
        } else {
            document.getElementById("ts2").checked = false;
            document.getElementById("ts1").checked = false;
        } 
    }  
//function to check boxes 1 t/m 4 in TS forms
    function onToggle15(){
       if (document.querySelector('#ts4').checked) {
            document.getElementById("ts3").checked = true;
            document.getElementById("ts2").checked = true;
            document.getElementById("ts1").checked = true;
        } else {
            document.getElementById("ts3").checked = false;
            document.getElementById("ts2").checked = false;
            document.getElementById("ts1").checked = false;
        } 
    }  
//function to check boxes 1 t/m 5 in TS forms
    function onToggle16(){
       if (document.querySelector('#ts5').checked) {
            document.getElementById("ts4").checked = true;
            document.getElementById("ts3").checked = true;
            document.getElementById("ts2").checked = true;
            document.getElementById("ts1").checked = true;
        } else {
            document.getElementById("ts4").checked = false;
            document.getElementById("ts3").checked = false;
            document.getElementById("ts2").checked = false;
            document.getElementById("ts1").checked = false;
        } 
    }   
//function to check boxes 1 t/m 2 in java forms
    function onToggle17(){
       if (document.querySelector('#java2').checked) {
            document.getElementById("java1").checked = true;
        } else {
            document.getElementById("java1").checked = false;
        } 
    }
//function to check boxes 1 t/m 3 in java forms
    function onToggle18(){
       if (document.querySelector('#java3').checked) {
            document.getElementById("java2").checked = true;
            document.getElementById("java1").checked = true;
        } else {
            document.getElementById("java2").checked = false;
            document.getElementById("java1").checked = false;
        } 
    }
//function to check boxes 1 t/m 4 in java forms
    function onToggle19(){
       if (document.querySelector('#java4').checked) {
            document.getElementById("java3").checked = true;
            document.getElementById("java2").checked = true;
            document.getElementById("java1").checked = true;
        } else {
            document.getElementById("java3").checked = false;
            document.getElementById("java2").checked = false;
            document.getElementById("java1").checked = false;
        } 
    }  
//function to check boxes 1 t/m 5 in java forms
    function onToggle20(){
       if (document.querySelector('#java5').checked) {
            document.getElementById("java4").checked = true;
            document.getElementById("java3").checked = true;
            document.getElementById("java2").checked = true;
            document.getElementById("java1").checked = true;
        } else {
            document.getElementById("java4").checked = false;
            document.getElementById("java3").checked = false;
            document.getElementById("java2").checked = false;
            document.getElementById("java1").checked = false;
        } 
    }   
//function to check boxes 1 t/m 2 in php forms
    function onToggle21(){
       if (document.querySelector('#php2').checked) {
            document.getElementById("php1").checked = true;
        } else {
            document.getElementById("php1").checked = false;
        } 
    }  
//function to check boxes 1 t/m 3 in php forms
    function onToggle22(){
       if (document.querySelector('#php3').checked) {
            document.getElementById("php2").checked = true;
            document.getElementById("php1").checked = true;
        } else {
            document.getElementById("php2").checked = false;
            document.getElementById("php1").checked = false;
        } 
    }  
//function to check boxes 1 t/m 4 in php forms
    function onToggle23(){
       if (document.querySelector('#php4').checked) {
            document.getElementById("php3").checked = true;
            document.getElementById("php2").checked = true;
            document.getElementById("php1").checked = true;
        } else {
            document.getElementById("php3").checked = false;
            document.getElementById("php2").checked = false;
            document.getElementById("php1").checked = false;
        } 
    }
//function to check boxes 1 t/m 5 in php forms
    function onToggle24(){
       if (document.querySelector('#php5').checked) {
            document.getElementById("php4").checked = true;
            document.getElementById("php3").checked = true;
            document.getElementById("php2").checked = true;
            document.getElementById("php1").checked = true;
        } else {
            document.getElementById("php4").checked = false;
            document.getElementById("php3").checked = false;
            document.getElementById("php2").checked = false;
            document.getElementById("php1").checked = false;
        } 
    }                   
</script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit your IT skills!</title>
</head>
<body>
    <!--page header-->
    <h1>Rate your IT skills!</h1>
    <!--page description-->
    <p>Rate your IT skills to whatever level YOU think you are at a certain IT skill.
        Try to rate your skills as fairly as possible since other users can give feedback on your tutoring.
        Ratings from other users won't affect the ratings you put in on this page.
    </p>
    <br /><br /><br />
    <form action="handler.blade.php" method="POST">
    <div style="font-family: sans-serif;">      
    <!--html form-->
        <h3>HTML</h3>
        <label><input type="checkbox" name="html1" value="html1" id="html1"/><span class="label-text"></span></label>
        <label><input onclick="onToggle()" type="checkbox" name="html2" value="html2" id="html2"/><span class="label-text"></span></label>
        <label><input onclick="onToggle2()" type="checkbox" name="html3" value="html3" id="html3"/><span class="label-text"></span></label>
        <label><input onclick="onToggle3()" type="checkbox" name="html4" value="html4" id="html4"/><span class="label-text"></span></label>
        <label><input onclick="onToggle4()" type="checkbox" name="html5" value="html5" id="html5"/><span class="label-text"></span></label>
    <!--css form-->
        <h3>CSS</h3>
        <label><input type="checkbox" name="css1" value="css1" id="css1"/><span class="label-text"></span></label>
        <label><input onclick="onToggle5()" type="checkbox" name="css2" value="css2" id="css2"/><span class="label-text"></span></label>
        <label><input onclick="onToggle6()" type="checkbox" name="css3" value="css3" id="css3"/><span class="label-text"></span></label>
        <label><input onclick="onToggle7()" type="checkbox" name="css4" value="css4" id="css4"/><span class="label-text"></span></label>
        <label><input onclick="onToggle8()" type="checkbox" name="css5" value="css5" id="css5"/><span class="label-text"></span></label>
    <!--javascript form-->
        <h3>JavaScript</h3>
        <label><input type="checkbox" name="js1" value="js1" id="js1"/><span class="label-text"></span></label>
        <label><input onclick="onToggle9()" type="checkbox" name="js2" value="js2" id="js2"/><span class="label-text"></span></label>
        <label><input onclick="onToggle10()" type="checkbox" name="js3" value="js3" id="js3"/><span class="label-text"></span></label>
        <label><input onclick="onToggle11()" type="checkbox" name="js4" value="js4" id="js4"/><span class="label-text"></span></label>
        <label><input onclick="onToggle12()" type="checkbox" name="js5" value="js5" id="js5"/><span class="label-text"></span></label>
    <!--typescript form-->
        <h3>TypeScript</h3>
        <label><input type="checkbox" name="ts1" value="ts1" id="ts1"/><span class="label-text"></span></label>
        <label><input onclick="onToggle13()" type="checkbox" name="ts2" value="ts2" id="ts2"/><span class="label-text"></span></label>
        <label><input onclick="onToggle14()" type="checkbox" name="ts3" value="ts3" id="ts3"/><span class="label-text"></span></label>
        <label><input onclick="onToggle15()" type="checkbox" name="ts4" value="ts4" id="ts4"/><span class="label-text"></span></label>
        <label><input onclick="onToggle16()" type="checkbox" name="ts5" value="ts5" id="ts5"/><span class="label-text"></span></label>
    <!--java form-->
        <h3>Java</h3>
        <label><input type="checkbox" name="java1" value="java1" id="java1"/><span class="label-text"></span></label>
        <label><input onclick="onToggle17()" type="checkbox" name="java2" value="java2" id="java2"/><span class="label-text"></span></label>
        <label><input onclick="onToggle18()" type="checkbox" name="java3" value="java3" id="java3"/><span class="label-text"></span></label>
        <label><input onclick="onToggle19()" type="checkbox" name="java4" value="java4" id="java4"/><span class="label-text"></span></label>
        <label><input onclick="onToggle20()" type="checkbox" name="java5" value="java5" id="java5"/><span class="label-text"></span></label>
    <!--php form-->
        <h4>PHP (test)</h4>
        <label><input type="checkbox" name="php1" value="php1" id="php1"/><span class="label-text"></span></label>
        <label><input onclick="onToggle21()" type="checkbox" name="php2" value="php2" id="php2"/><span class="label-text"></span></label>
        <label><input onclick="onToggle22()" type="checkbox" name="php3" value="php3" id="php3"/><span class="label-text"></span></label>
        <label><input onclick="onToggle23()" type="checkbox" name="php4" value="php4" id="php4"/><span class="label-text"></span></label>
        <label><input onclick="onToggle24()" type="checkbox" name="php5" value="php5" id="php5"/><span class="label-text"></span></label>
    <br />
    <input type="submit" value="Submit">
    </div>
    </form>
</body>
</html>