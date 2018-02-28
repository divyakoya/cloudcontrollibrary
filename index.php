<html>

<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
.container{
	
	height:650px;
	width:80%;
	background-color:#f5f5f5;
	margin-top:15px
	
}
.custom-select{
	width:50%;
}


</style>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
  </head>
     
<body>
 <div class="container">
        <div  style="padding-top:40px;color:#254970">
         <h4 align="center"><strong>Cloud Control Library</strong></h4>
         </div>
     <div class="row" style="margin-left:75px;padding-top:50px">
	 <div class="col-lg-3">
	 	<div style="padding-left:15px">
         <p style="color:#2196F3"><b>Switch1</b></p>
         <label class="switch">
              <input type="checkbox" checked id="cb">
              <span class="slider"></span>
         </label><br>
		 </div>
		 <div class="form-group" style="padding-top:10px">
    <select class="custom-select">
      <option selected="">Input</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
     </div>
	 <div class="col-lg-3">
	   	 	<div style="padding-left:15px">

         <p style="color:#2196F3"><b>Switch2</b></p>
		 	 <label class="switch">
             <input type="checkbox" checked>
              <span class="slider"></span>
             </label><br>
            </div>
		 <div class="form-group" style="padding-top:10px">
    <select class="custom-select">
      <option selected="">Input</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>
     </div>
	 <div class="col-lg-3">
	   	 	<div style="padding-left:15px">

         <p style="color:#2196F3"><b>Switch3</b></p>
	 <label class="switch">
  <input type="checkbox" checked>
  <span class="slider"></span>
</label><br>
  </div>
		 <div class="form-group" style="padding-top:10px">
    <select class="custom-select">
      <option selected="">Input</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>     </div>
	 <div class="col-lg-3">
	 	 	<div style="padding-left:15px">

         <p style="color:#2196F3"><b>Switch4</b></p>
	 <label class="switch">
  <input type="checkbox" checked>
  <span class="slider"></span>
</label><br>
</div>
		 <div class="form-group" style="padding-top:10px">
    <select class="custom-select">
      <option selected="">Input</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    </select>
  </div>     </div>
    </div>
	
</body>
</html>