<?php
   include('../../session.php');
?>

<script type="text/javascript">
    function getRandomSize(min, max) {
  return Math.round(Math.random() * (max - min) + min);
}

var allImages = "";

for (var i = 0; i < 25; i++) {
  var width = getRandomSize(200, 400);
  var height =  getRandomSize(200, 400);
 
}

$('#photos').append(allImages);
</script>
<style type="text/css">





















.work {
    padding: 10px;
    cursor: pointer;
}

.work img {
    display: block;
}

.work-thumb {
    position: relative;
    overflow: hidden;
}

.work-thumb:hover {
    -webkit-filter: grayscale(1);
    filter: grayscale(1);
}

.work-thumb:before {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    opacity: 0;
    content: '';
    -webkit-transition: opacity 0.4s;
    -moz-transition: opacity 0.4s;
    -ms-transition: opacity 0.4s;
    -o-transition: opacity 0.4s;
    transition: opacity 0.4s;
}

.work-thumb:hover:before {
    opacity: 0.2;
}

.thumb-links {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    margin-top: -20px;
    height: 40px;
    text-align: center;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: opacity 0.4s, visibility 0s linear 0.4s;
    -moz-transition: opacity 0.4s, visibility 0s linear 0.4s;
    -ms-transition: opacity 0.4s, visibility 0s linear 0.4s;
    -o-transition: opacity 0.4s, visibility 0s linear 0.4s;
    transition: opacity 0.4s, visibility 0s linear 0.4s;
}

.work-thumb a {
    display: inline-block;
    margin-left: 16px;
    width: 50px;
    height: 40px;
    line-height: 40px;
    color: #ffffff;
    background-color: #161616;
    text-align: center;
    border-radius: 2px;
}

.work-thumb a:first-child {
    margin: 0;
}

.work-thumb a:hover {
    background-color: #000000;
}

.work-thumb:hover .thumb-links {
    visibility: visible;
    opacity: 1;
    -webkit-transition: opacity 0.4s;
    -moz-transition: opacity 0.4s;
    -ms-transition: opacity 0.4s;
    -o-transition: opacity 0.4s;
    transition: opacity 0.4s;
}

.work-thumb a:before {
    font-family: 'Fontawesome';
}

.zoom {
    margin-left: -60px;
}

.zoom:before {
    content: 'Delete';
}

.info-link {
    margin-left: 20px;
}

.info-link:before {
    content: '\f141';
}

.opened .info-link:before {
    content: '\f00d';
}

.info-work {
    position: relative;
    display: none;
    opacity: 0;
    padding: 40px;
    border: 1px solid #eeeeee;
    font-size: 13px;
    overflow: hidden;
    transition: opacity 0.4s linear 0.4s;
}

.opened .info-work {
    opacity: 1;
}

.info-work .name {
    color: #161616;
    font-size: 13px;
    font-weight: bold;
}

.info-work .name small {
    font-weight: normal;
}

.info-work.testimonial:before {
    display: block;
    margin-bottom: 10px;
    color: #BDC3C7;
    font-family: 'FontAwesome';
    content: '\f10d';
}






























#photos {
   /* Prevent vertical gaps */
   line-height: 0;
   
   -webkit-column-count: 3;
   -webkit-column-gap:   0px;
   -moz-column-count:    3;
   -moz-column-gap:      0px;
   column-count:         3;
   column-gap:           7px;
}

#photos img {
  /* Just in case there are inline attributes */
  width: 100% !important;
  height: auto !important;
  margin: 5px;
}

#photos img:hover {
  /* Just in case there are inline attributes */
  width: 100% !important;
  height: auto !important;
  margin: 5px;
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 3.5+ */
  filter: gray; /* IE6-9 */
  -webkit-filter: grayscale(100%);
   /* Chrome 19+ & Safari 6+ */

}

@media (max-width: 1200px) {
  #photos {
  -moz-column-count:    3;
  -webkit-column-count: 3;
  column-count:         3;
  }
}
@media (max-width: 1000px) {
  #photos {
  -moz-column-count:    3;
  -webkit-column-count: 3;
  column-count:         3;
  }
}
@media (max-width: 800px) {
  #photos {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width: 400px) {
  #photos {
  -moz-column-count:    1;
  -webkit-column-count: 1;
  column-count:         1;
  }
}

.show_image{
    margin-bottom: 20px; 
    background-color: black;


}

.text{

}



</style>


<div class="jumbotron text-center">



    <h3>My Work </h3>
    
<br>

  

       

<div class="row">
  <div class="col-sm-11">
            <select ng-model="category" 
   ng-options="department.text as department.value for department in categories" class="form-control" >
   <option value="" selected disabled>Please Select Category</option>

</select>
  </div>
  <div class="col-sm-1">
    <button class="btn btn-default" type="submit" ng-click = "submit()">Go</button>
  </div>
</div>

    <br>
    <br>

 <div class="container-fluid">

 <section id = "photos">



<div class="containera" ng-repeat="object in images">
   <div class="work-thumb" >
                      <img src="http://localhost:8000/artist/server/uploads/{{object.image.url}}" alt="Work 01" width="200" class = "image"">
                    <div class="thumb-links">
                        <a ng-click = "delete(object.image.id)" class="zoom"></a>
                    </div>
                </div>

</div>

</section>





          

               
        

</div>