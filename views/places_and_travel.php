<script>
$(document).ready(function(){
    $("#categories_list").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
              window.location = optionValue;
            } 
        });
    }).change();
});
</script>


<style>
.free_buy{
  display:none;
}
.show{
  display:none;
}
.show_rigged{
  display:none;
}
.show_animated{
  display:none;
}
.show_pbr{
  display:none;
}
.search-column1{
  width:76%;
}
.tab-mob{
  display:none;
}
@media (max-width:1310px) and (min-width:1210px){
  .buy{
    display:none;
  }
  .free{
    display:none;
  }
  
  .free_buy{
  display:inline-block;
}
}
@media (max-width:1209px) and (min-width:1050px){
  .buy{
    display:none;
  }
  .free{
    display:none;
  }
  .showrestricted{
    display:none
  }
  .show{
  display:inline-block;
}
}
@media (max-width:1050px) and (min-width:900px){
  .buy{
    display:none;
  }
  .free{
    display:none;
  }
  .showrestricted{
    display:none
  }
  .rigged{
    display:none;
  }
  .show_rigged{
  display:inline-block;
}
}
@media (max-width:900px) and (min-width:800px){
  .buy{
    display:none;
  }
  .free{
    display:none;
  }
  .showrestricted{
    display:none
  }
  .rigged{
    display:none;
  }
  .animated{
    display:none;
  }
  .show_animated{
  display:inline-block;
}
}
@media (max-width:800px) and (min-width:700px){
  .buy{
    display:none;
  }
  .free{
    display:none;
  }
  .showrestricted{
    display:none
  }
  .rigged{
    display:none;
  }
  .animated{
    display:none;
  }
  .pbr{
    display:none;
  }
  .others-column{
    display:none;
  }
  .show_pbr{
  display:inline-block;
}
}
@media (max-width:700px) and (min-width:300px){
  .slider-row{
    display:none;
  }
  .box{
    width:100%;
  }
  .boxe{
    grid-template-columns:none;
  }
  .search-column1{
  width:100%;
  }
  .cat-col{
    display:none;
  }
  .sort-col{
    display:none;
  }
  .tab-mob{
    display:inline-block;
  }
  .categories-select{
    width:105px;
  }
  option{
    width:95px;
  }
  .searching-col{
    margin-right:0px;
  }
}
</style>


<div class="content" style="padding-top: 45px;background-color:#fff;">
  <form action="#">
    <input type="hidden" id="cat_id" name="cat_id" value="15">
    <div class="row search-row" style="width:100%;display:flex;margin-left: 0px;margin-bottom: 0px;height:80px;">
        <div class="search-column1">
            <form id="demo">
                <input type="search" class="searching-col" placeholder="Search" style="width:1080px;font-size:20px;height:50px;border:1px solid rgb(199, 199, 199);-webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;">
              </form> 

        </div>
        <div class="categories-column2 cat-col" style="width:14%;max-width:none;">
          <div class="w3-bar  w3-card" style="background-color: transparent;">
          <div class="w3-dropdown-hover" style="margin-top: 20px;background-color: transparent;">
              <a title="More" class="categories-visit">CATEGORIES</a>     
              <select name="categories_list" id="categories_list" class="categories-select">
              <option  id="myOption" label="Places & Travel">Places & Travel</option>     
              <option value="<?php echo site_url('welcome/animalsandpets'); ?>">Animals & pets</option>
                  <option value="<?php echo site_url('welcome/Architecture'); ?>">Architecture</option>
                  <option value="<?php echo site_url('welcome/artandabstract'); ?>">Art & Abstract</option>
                  <option value="<?php echo site_url('welcome/carsandvehicles'); ?>">Cars &Vehicles</option>
                  <option value="<?php echo site_url('welcome/charactersandcreatures'); ?>">Characters & Creatures</option>
                  <option value="<?php echo site_url('welcome/culturalheritage'); ?>">Cultural Heritage</option>
                  <option value="<?php echo site_url('welcome/electronicsandgadgets'); ?>">Electronics and Gadgets</option>
                  <option value="<?php echo site_url('welcome/fashionandstyle'); ?>">Fashion & Style</option>
                  <option value="<?php echo site_url('welcome/foodanddrink'); ?>">Food & Drink</option>
                  <option value="<?php echo site_url('welcome/furnitureandhome'); ?>">Home Appliances</option>
                  <option value="<?php echo site_url('welcome/newsandpolitics'); ?>">Jewellery</option>
                  <option value="<?php echo site_url('welcome/people'); ?>">Medical</option>
                  <option value="<?php echo site_url('welcome/music'); ?>">Musical Instruments</option>
                  <option value="<?php echo site_url('welcome/natureandplants'); ?>">Nature & Plants</option>
                  <option value="<?php echo site_url('welcome/scienceandtechnology'); ?>">Science & Technology</option>
                  <option value="<?php echo site_url('welcome/sportsandfitness'); ?>">Sorts & Fitness</option>
                  <option value="<?php echo site_url('welcome/weaponsandmilitary'); ?>">Weapons & Military</option>
              </select>
                </div>
            </div>
        </div>
        <div class="sort-column2 sort-col" style="width:10%;">
          <div class="w3-bar  w3-card" style="background-color: transparent;">
          <div class="w3-dropdown-hover" style="margin-top: 20px;background-color: transparent;">
              <a title="More" class="sort-visit">SORT BY</a>     
              <select class="sort-select">
                <option  id="myOption" label="Relevance">Relevance<i class="fa fa-caret-down"></i></option>     
                  
                    <option >Best selling</option>
                    <option >Rating</option>
                    <option >Newest</option>
                    <option >Oldest</option>
                    <option >Lower Price</option>
                    <option >Higher Price</option>
                    <option >3D Scan</option>
                    
                  
                </select>
                </div>
            </div>
        </div>
    </div>

   
    <div class="row slider-row" style="margin-bottom: 0px;height:80px;">
        <div class="column1 slider-column">
          <div class="wrap-contact100-form-range" style="height: fit-content;width:200px;">

						<div class="contact100-form-range-value" style="padding-left:0px;color:transparent;">
							<span style="float:left;color:#333;">$</span><span id="value-lower" style="float:left;color:#333;"></span> 
              <span id="value-upper" style="float:right;color:#333;;"></span><span style="float:right;color:#333;">$</span>.
							<input type="text" name="from-value" id="from-value">
							<input type="text" name="to-value" id="to-value">
						</div>

						<div class="contact100-form-range-bar">
							<div id="filter-bar"></div>
						</div>
          </div>
          <script src="<?php echo base_url('resources/assets/css/nouislider.min.js');?>"></script>  
          <!-- <div class="range-slider"><span>
                <input type="number" value="0" min="0" max="2000" place-holder="$" style="float:left;-webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;"/>
                <input type="number" value="2000" min="0" max="2000" place-holder="$" style="margin-right:1px;-webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;"/></span>
              <input value="0" min="0" max="2000" step="2" type="range"/>
              <input value="2000" min="0" max="2000" step="2" type="range"/>
              
            </div> -->
        </div>
        <!-- bottom: 117.2px;right:auto;overflow-x: hidden; -->
       
          <div class="row" style="margin-top:15px;margin-bottom: 0px;">
        <div class="column2 format-column">
          <div class="w3-bar  w3-card format-background">
          <div class="w3-dropdown-hover drop" style="margin-top: 10px;background-color: transparent;">
              <a title="More" class="format-text">FORMATS</a>     
              <a href="#">     
                <!-- <span class="multiSel1 format-select" title="More">(<span id="file-format-id">0</span>) Selected <i class="fa fa-caret-down"></i></span>     -->
                <span class="multiSel1 format-select" title="More">&nbsp;<span>Any</span><i class="fa fa-caret-down"></i></span>  

                <!-- <p class="multiSel" style="color:#000;font-size:14px;background-color: transparent;margin-right: 20px;margin-top:10px"></p> -->
              </a>
              <div class="mutliSelect1 w3-dropdown-content w3-bar-block w3-card-4 format-selection" id="extension_select">
                <ul>
                <li class="w3-bar-item ">
                  <label class="container">.fbx (Autodesk FBX)
                    <input type="checkbox" name="extensions" value="fbx">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.3ds (3ds Max)
                    <input type="checkbox" name="extensions" value="3ds">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.max (3ds Max)
                    <input type="checkbox" name="extensions" value="max">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.blend (Blender)
                    <input type="checkbox" name="extensions" value="blend">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.obj (OBJ wavefront)
                    <input type="checkbox" name="extensions" value="obj">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.c4d (Cinema 4D) 
                    <input type="checkbox" name="extensions" value="c4d">
                    <span class="checkmark"></span>
                  </label>
                </li>
              
                <li class="w3-bar-item ">
                  <label class="container">.ma/.mb (Maya) 
                    <input type="checkbox" name="extensions" value="ma">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.dae (Collada) 
                    <input type="checkbox" name="extensions" value="dae">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.stl (Stereolithography) 
                    <input type="checkbox" name="extensions" value="stl">
                    <span class="checkmark"></span>
                  </label>
                </li>
               
                </ul>
              </div>
              </div>
          </div>
      </div>
      <div class="column2 polycount">
        <div class="w3-bar  w3-card" style="background-color: transparent;">
        <div class="w3-dropdown-hover" style="margin-top: 10px;background-color: transparent;">
            <a title="More" class="polycount-text">POLY&nbsp;COUNT&nbsp;&nbsp;&nbsp;&nbsp;</a>     
            <a class="polycount-select" title="More" >Any<i class="fa fa-caret-down"></i></a>     
            <div class="w3-dropdown-content w3-bar-block w3-card-4 polycount-hover">
              <a class="w3-bar-item w3-button ">
                <label class="container">Any
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice" data-fromvalue="1" data-tovalue="100">
                <label class="container">Up to 100
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice1" data-fromvalue="100" data-tovalue="200">
                <label class="container">100 to 200
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice2"  data-fromvalue="200" data-tovalue="300">
                <label class="container">200 to 300
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice3" data-fromvalue="300" data-tovalue="400">
                <label class="container">300 to 400
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice4" data-fromvalue="400" data-tovalue="1000">
                <label class="container">400+
                </label>
              </a>
              
            </div>
            </div>
        </div>
    </div>
    <div class="column2 licenses">
      <div class="w3-bar  w3-card" style="background-color: transparent;">
      <div class="w3-dropdown-hover drop" style="margin-top: 10px;background-color: transparent;">
          <a title="More" class="licenses-text">LICENSES&nbsp;&nbsp;&nbsp;&nbsp;</a>     
          <a href="#">     
            <span class="multiSel" title="More" style="color: #1f7bbcf2;font-size:14px;background-color: #fff;display:block;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Any<i class="fa fa-caret-down"></i></span>    
            <!-- <p class="multiSel" style="color:#000;font-size:14px;background-color: transparent;margin-right: 20px;margin-top:10px"></p> -->
          </a>
          <div class="mutliSelect w3-dropdown-content w3-bar-block w3-card-4 licenses-selection">
            <ul>
              
            <li class="w3-bar-item ">
              <label class="container">Standard
                <input type="checkbox" value="Standard">
                <span class="checkmark"></span>
              </label>
            </li>
            <li class="w3-bar-item ">
              <label class="container">Editorial
                <input type="checkbox" value="Editorial">
                <span class="checkmark"></span>
              </label>
            </li>
            </ul>
          </div>
          </div>
      </div>
  </div>
  <div class="column2 rating-column">
    <div class="w3-bar  w3-card" style="background-color: transparent;">
    <div class="w3-dropdown-hover" style="margin-top: 10px;background-color: transparent;">
        <a title="More" class="ratings">RATINGS&nbsp;&nbsp;&nbsp;</a>     
        <a class="ratings-select" title="More" >Any<i class="fa fa-caret-down"></i></a>     
        <div class="w3-dropdown-content w3-bar-block w3-card-4 ratings-selection">
          <a class="w3-bar-item w3-button">
            <label class="container">Any
            </label>
          </a>
          <a class="w3-bar-item w3-button">
            <label class="container">4+ stars
            </label>
          </a>
          <a class="w3-bar-item w3-button">
            <label class="container">3+ stars
            </label>
          </a>
          <a class="w3-bar-item w3-button">
            <label class="container">2+ stars
            </label>
          </a>
          <a class="w3-bar-item w3-button">
            <label class="container">1+ stars
            </label>
          </a>
        </div>
        </div>
    </div>
</div>
<div class="column2 others-column" style="flex:1;max-width:auto;height:auto;">
  <div style="margin-top:10px;background-color: transparent;">
    <a title="More" class="others-text">Others</a>     
      
  <div style="margin-top: 0px;background-color: transparent;position:unset;">
      <a class="pbr">
        <label class="container" style="color:#555">PBR
          <input type="checkbox" name="others" value="pbr">
          <span class="checkmark"></span>
        </label>
      </a>
      <a class="animated">
        <label class="container" style="color:#555;margin-left: 15px;">Animated
          <input type="checkbox" name="others" value="animated">
          <span class="checkmark"></span>
        </label>
      </a>
      <a class="rigged">
        <label class="container" style="color:#555;margin-left: 15px;">Rigged
          <input type="checkbox" name="others" value="rigged">
          <span class="checkmark"></span>
        </label>
      </a>
      <a class="showrestricted">
        <label class="container" style="color:#555;margin-left: 15px;">Show Restricted
          <input type="checkbox" name="others" value="show-restricted">
          <span class="checkmark"></span>
        </label>
      </a>
      <a class="free">
        <label class="container" style="color:#555;margin-left: 15px;">Free
          <input type="checkbox" name="free">
          <span class="checkmark"></span>
        </label>
      </a>
      <a class="buy">
        <label class="container" style="color:#555;margin-left: 15px;">Store
          <input type="checkbox" name="buy">
          <span class="checkmark"></span>
        </label>
      </a>


      
      
  </div>
    </div>
  </div>
  
  <div class="free_buy">
  <div class="column2 licenses">
      <div class="w3-bar  w3-card" style="background-color: transparent;">
      <div class="w3-dropdown-hover drop" style="margin-top: 27px;background-color: transparent;">
          <!-- <a title="More" class="licenses-text">LICENSES</a>      -->
          <a href="#">     
            <span class="" title="More" style="color: #1f7bbcf2;font-size:14px;background-color: #fff;margin-left: 20px;display:block;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">More<i class="fa fa-caret-down"></i></span>    
            <!-- <p class="multiSel" style="color:#000;font-size:14px;background-color: transparent;margin-right: 20px;margin-top:10px"></p> -->
          </a>
          <div class="w3-dropdown-content w3-bar-block w3-card-4 licenses-selection" style="margin-top:-10px;">
            <ul>
            <li class="w3-bar-item drop-free">
                 <label class="container" style="color:#555;margin-left: 15px;">Free
                    <input type="checkbox" name="free">
                    <span class="checkmark"></span>
                  </label>
            </li>
            <li class="w3-bar-item drop-buy">
                 <label class="container" style="color:#555;margin-left: 15px;">Store
                   <input type="checkbox" name="buy">
                   <span class="checkmark"></span>
                </label>
            </li>
            </ul>
          </div>
          </div>
      </div>
  </div>
</div>
<div class="show">
  <div class="column2 licenses">
      <div class="w3-bar  w3-card" style="background-color: transparent;">
      <div class="w3-dropdown-hover drop" style="margin-top: 27px;background-color: transparent;">
          <!-- <a title="More" class="licenses-text">LICENSES</a>      -->
          <a href="#">     
            <span class="" title="More" style="color: #1f7bbcf2;font-size:14px;background-color: #fff;margin-left: 20px;display:block;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">More<i class="fa fa-caret-down"></i></span>    
            <!-- <p class="multiSel" style="color:#000;font-size:14px;background-color: transparent;margin-right: 20px;margin-top:10px"></p> -->
          </a>
          <div class="w3-dropdown-content w3-bar-block w3-card-4 licenses-selection" style="margin-top:-10px;">
            <ul>
            
            <li class="w3-bar-item drop-show">
              <label class="container" style="color:#555;margin-left: 15px;">Show Restricted
               <input type="checkbox" name="others" value="show-restricted">
                <span class="checkmark"></span>
              </label>
            </li>
            <li class="w3-bar-item drop-free">
                 <label class="container" style="color:#555;margin-left: 15px;">Free
                    <input type="checkbox" name="free">
                    <span class="checkmark"></span>
                  </label>
            </li>
            <li class="w3-bar-item drop-buy">
                 <label class="container" style="color:#555;margin-left: 15px;">Store
                   <input type="checkbox" name="buy">
                   <span class="checkmark"></span>
                </label>
            </li>
            </ul>
          </div>
          </div>
      </div>
  </div>
</div>

<div class="show_rigged">
  <div class="column2 licenses">
      <div class="w3-bar  w3-card" style="background-color: transparent;">
      <div class="w3-dropdown-hover drop" style="margin-top: 27px;background-color: transparent;">
          <!-- <a title="More" class="licenses-text">LICENSES</a>      -->
          <a href="#">     
            <span class="" title="More" style="color: #1f7bbcf2;font-size:14px;background-color: #fff;margin-left: 20px;display:block;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">More<i class="fa fa-caret-down"></i></span>    
            <!-- <p class="multiSel" style="color:#000;font-size:14px;background-color: transparent;margin-right: 20px;margin-top:10px"></p> -->
          </a>
          <div class="w3-dropdown-content w3-bar-block w3-card-4 licenses-selection" style="margin-top:-10px;">
            <ul>
            
            <li class="w3-bar-item drop-rigged">
            <label class="container" style="color:#555;margin-left: 15px;">Rigged
                <input type="checkbox" name="others" value="rigged">
               <span class="checkmark"></span>
            </label>
            </li>
            <li class="w3-bar-item drop-show">
              <label class="container" style="color:#555;margin-left: 15px;">Show Restricted
               <input type="checkbox" name="others" value="show-restricted">
                <span class="checkmark"></span>
              </label>
            </li>
            <li class="w3-bar-item drop-free">
                 <label class="container" style="color:#555;margin-left: 15px;">Free
                    <input type="checkbox" name="free">
                    <span class="checkmark"></span>
                  </label>
            </li>
            <li class="w3-bar-item drop-buy">
                 <label class="container" style="color:#555;margin-left: 15px;">Store
                   <input type="checkbox" name="buy">
                   <span class="checkmark"></span>
                </label>
            </li>
            </ul>
          </div>
          </div>
      </div>
  </div>
</div>

<div class="show_animated">
  <div class="column2 licenses">
      <div class="w3-bar  w3-card" style="background-color: transparent;">
      <div class="w3-dropdown-hover drop" style="margin-top: 27px;background-color: transparent;">
          <!-- <a title="More" class="licenses-text">LICENSES</a>      -->
          <a href="#">     
            <span class="" title="More" style="color: #1f7bbcf2;font-size:14px;background-color: #fff;margin-left: 20px;display:block;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">More<i class="fa fa-caret-down"></i></span>    
            <!-- <p class="multiSel" style="color:#000;font-size:14px;background-color: transparent;margin-right: 20px;margin-top:10px"></p> -->
          </a>
          <div class="w3-dropdown-content w3-bar-block w3-card-4 licenses-selection" style="margin-top:-10px;">
            <ul>
            <li class="w3-bar-item drop-animated">
            <label class="container" style="color:#555;margin-left: 15px;">Animated
               <input type="checkbox" name="others" value="animated">
               <span class="checkmark"></span>
            </label>
            </li>
            <li class="w3-bar-item drop-rigged">
            <label class="container" style="color:#555;margin-left: 15px;">Rigged
                <input type="checkbox" name="others" value="rigged">
               <span class="checkmark"></span>
            </label>
            </li>
            <li class="w3-bar-item drop-show">
              <label class="container" style="color:#555;margin-left: 15px;">Show Restricted
               <input type="checkbox" name="others" value="show-restricted">
                <span class="checkmark"></span>
              </label>
            </li>
            <li class="w3-bar-item drop-free">
                 <label class="container" style="color:#555;margin-left: 15px;">Free
                    <input type="checkbox" name="free">
                    <span class="checkmark"></span>
                  </label>
            </li>
            <li class="w3-bar-item drop-buy">
                 <label class="container" style="color:#555;margin-left: 15px;">Store
                   <input type="checkbox" name="buy">
                   <span class="checkmark"></span>
                </label>
            </li>
            </ul>
          </div>
          </div>
      </div>
  </div>
</div>

<div class="show_pbr">
  <div class="column2 licenses">
      <div class="w3-bar  w3-card" style="background-color: transparent;">
      <div class="w3-dropdown-hover drop" style="margin-top: 27px;background-color: transparent;">
          <!-- <a title="More" class="licenses-text">LICENSES</a>      -->
          <a href="#" >     
            <span class="" title="More" style="color: #1f7bbcf2;font-size:14px;background-color: #fff;margin-left: 20px;display:block;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">More<i class="fa fa-caret-down"></i></span>    
            <!-- <p class="multiSel" style="color:#000;font-size:14px;background-color: transparent;margin-right: 20px;margin-top:10px"></p> -->
          </a>
          <div class="w3-dropdown-content w3-bar-block w3-card-4 licenses-selection" style="margin-top:-10px;">
            <ul>
            <li class="w3-bar-item drop-pbr">
              <label class="container" style="color:#555;margin-left:17px;">PBR
                <input type="checkbox" name="others" value="pbr">
                <span class="checkmark"></span>
              </label>
            </li>
            <li class="w3-bar-item drop-animated">
            <label class="container" style="color:#555;margin-left: 15px;">Animated
               <input type="checkbox" name="others" value="animated">
               <span class="checkmark"></span>
            </label>
            </li>
            <li class="w3-bar-item drop-rigged">
            <label class="container" style="color:#555;margin-left: 15px;">Rigged
                <input type="checkbox" name="others" value="rigged">
               <span class="checkmark"></span>
            </label>
            </li>
            <li class="w3-bar-item drop-show">
              <label class="container" style="color:#555;margin-left: 15px;">Show Restricted
               <input type="checkbox" name="others" value="show-restricted">
                <span class="checkmark"></span>
              </label>
            </li>
            <li class="w3-bar-item drop-free">
                 <label class="container" style="color:#555;margin-left: 15px;">Free
                    <input type="checkbox" name="free">
                    <span class="checkmark"></span>
                  </label>
            </li>
            <li class="w3-bar-item drop-buy">
                 <label class="container" style="color:#555;margin-left: 15px;">Store
                   <input type="checkbox" name="buy">
                   <span class="checkmark"></span>
                </label>
            </li>
            </ul>
          </div>
          </div>
      </div>
  </div>
</div>

<div class="col4 reset-button" onclick="reset()">
  <a class="refresh-button" style="color: blue;margin-top: 60px;margin-right: 20px;cursor:pointer;">RESET</a>
</div>
</div>
</div>
    
  </form>
</div>
<div class="row tab-mob" style="width:100%;margin:0px;padding:0px;">
<div class="column" style="width:31%;margin:0px;padding:0px;border:1px solid #ccc;">
<div class="" style="margin-top: 20px;background-color: transparent;">
              <a title="More" class="categories-visit">CATEGORIES</a>     
              <select name="categories_list" id="categories_list1" class="categories-select">
              <option  id="myOption" label="Places & Travel">Places & Travel</option>     
              <option value="<?php echo site_url('welcome/animalsandpets'); ?>">Animals & pets</option>
                  <option value="<?php echo site_url('welcome/Architecture'); ?>">Architecture</option>
                  <option value="<?php echo site_url('welcome/artandabstract'); ?>">Art & Abstract</option>
                  <option value="<?php echo site_url('welcome/carsandvehicles'); ?>">Cars &Vehicles</option>
                  <option value="<?php echo site_url('welcome/charactersandcreatures'); ?>">Characters & Creatures</option>
                  <option value="<?php echo site_url('welcome/culturalheritage'); ?>">Cultural Heritage</option>
                  <option value="<?php echo site_url('welcome/electronicsandgadgets'); ?>">Electronics and Gadgets</option>
                  <option value="<?php echo site_url('welcome/fashionandstyle'); ?>">Fashion & Style</option>
                  <option value="<?php echo site_url('welcome/foodanddrink'); ?>">Food & Drink</option>
                  <option value="<?php echo site_url('welcome/furnitureandhome'); ?>">Home Appliances</option>
                  <option value="<?php echo site_url('welcome/newsandpolitics'); ?>">Jewellery</option>
                  <option value="<?php echo site_url('welcome/people'); ?>">Medical</option>
                  <option value="<?php echo site_url('welcome/music'); ?>">Musical Instruments</option>
                  <option value="<?php echo site_url('welcome/natureandplants'); ?>">Nature & Plants</option>
                  <option value="<?php echo site_url('welcome/scienceandtechnology'); ?>">Science & Technology</option>
                  <option value="<?php echo site_url('welcome/sportsandfitness'); ?>">Sorts & Fitness</option>
                  <option value="<?php echo site_url('welcome/weaponsandmilitary'); ?>">Weapons & Military</option>
              </select>
                </div>
</div>
<script>
$(document).ready(function(){
    $("#categories_list1").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
              window.location = optionValue;
            } 
        });
    }).change();
});
</script>
<div class="column" style="width:38%;margin:0px;padding:0px;border:1px solid #ccc;">

              <a title="More" class="w3-button format-text toggle" href="javascript:void(0)" onclick="myNavdemo()" style="text-align:center;margin-left:0px;font-size:16px;height:45px;margin-top:28px;width:100%;">Filters &nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>     
           


</div>
<div class="column" style="width:31%;margin:0px;padding:0px;border:1px solid #ccc;">
<div class="" style="margin-top: 20px;background-color: transparent;">
              <a title="More" class="sort-visit">SORT BY</a>     
              <select class="sort-select">
                <option  id="myOption" label="Relevance">Relevance<i class="fa fa-caret-down"></i></option>     
                  
                    <option >Best selling</option>
                    <option >Rating</option>
                    <option >Newest</option>
                    <option >Oldest</option>
                    <option >Lower Price</option>
                    <option >Higher Price</option>
                    <option >3D Scan</option>
                    
                  
                </select>
                </div>
</div>
</div>

<?php

$output1 = '';
$output2 = '';

$model_id = 15;
$query = $this->cart->modelsandcategories($model_id);





$output1 .= '
<section class="boxe" style="height:240px;">
<div class="square box" style="display: inline;border:none;border-radius:6px;">
 <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">'.$query->Categories_name.' '.$query->model_name.'</h2>
 <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
 <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;text-align:left;" >'.$query->model_name.' of '.$query->Categories_name.' ready to download. 
 Suitable for use in any 3D Project including VR, AR, Games, Animations, visual effects(VFX), and motion graphics. 
 Choices include <span style="color:rgb(105, 195, 224);">low poly</span>, <span style="color:rgb(105, 195, 224);">high poly</span>,
 <span style="color:rgb(105, 195, 224);">rigged</span>, and <span style="color:rgb(105, 195, 224);">animated</span> options.
<br>File formats include <span style="color:rgb(105, 195, 224);">FBX</span>, <span style="color:rgb(105, 195, 224);">OBJ</span>, 
<span style="color:rgb(105, 195, 224);">MAX</span>, <span style="color:rgb(105, 195, 224);">C4D</span>, <span style="color:rgb(105, 195, 224);">BLEND</span>
and GLTF.</p>
</div>
</div>
 
</section>
<div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
 
   
</div>
';

?>

<div class="contents" style="background-color: #f2f2f2; padding:20px 10px;margin-top: 0px;">
    <div class="wrapper" style="min-height:400px;">
    <section class="boxes" id="load_data" style="grid-template-columns: repeat(auto-fit, minmax(341px, 1fr));">
    <?php echo $output1; ?>
    
    
          </div>
  </div>

          <!-- 1st image -->
          <div id="but_nav" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top nav-top" style="margin-top:190px;">

          
          <div class="w3-dropdown-hover" style="margin-top: 10px;background-color: #fff;">
              <button title="More" class="format-text" style="font-size:16px;padding:10px;">FORMAT <i class="fa fa-caret-down"></i></button>     
              
              <div class="w3-dropdown-content w3-bar-block w3-card-4 format-selection" id="extension_select" style="background:#f1f1f1;box-shadow:none;">
                <ul>
                <li class="w3-bar-item ">
                  <label class="container">.fbx (Autodesk FBX)
                    <input type="checkbox" name="extensions" value="fbx">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.3ds (3ds Max)
                    <input type="checkbox" name="extensions" value="3ds">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.max (3ds Max)
                    <input type="checkbox" name="extensions" value="max">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.blend (Blender)
                    <input type="checkbox" name="extensions" value="blend">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.obj (OBJ wavefront)
                    <input type="checkbox" name="extensions" value="obj">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.c4d (Cinema 4D) 
                    <input type="checkbox" name="extensions" value="c4d">
                    <span class="checkmark"></span>
                  </label>
                </li>
              
                <li class="w3-bar-item ">
                  <label class="container">.ma/.mb (Maya) 
                    <input type="checkbox" name="extensions" value="ma">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.dae (Collada) 
                    <input type="checkbox" name="extensions" value="dae">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.stl (Stereolithography) 
                    <input type="checkbox" name="extensions" value="stl">
                    <span class="checkmark"></span>
                  </label>
                </li>
                </ul>
                </div>
             
          </div>

          <div class="w3-dropdown-hover" style="background-color: #fff;">
              <button title="More" class="format-text" style="font-size:16px;padding:10px;">POLY COUNT<i class="fa fa-caret-down"></i></button>     
              
              <div class="w3-dropdown-content w3-bar-block w3-card-4 format-selection" id="extension_select" style="background:#f1f1f1;box-shadow:none;">
              <a class="w3-bar-item w3-button ">
                <label class="container">Any
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice01" data-fromvalue="1" data-tovalue="100">
                <label class="container">Up to 100
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice11" data-fromvalue="100" data-tovalue="200">
                <label class="container">100 to 200
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice21"  data-fromvalue="200" data-tovalue="300">
                <label class="container">200 to 300
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice31" data-fromvalue="300" data-tovalue="400">
                <label class="container">300 to 400
                </label>
              </a>
              <a class="w3-bar-item w3-button" id="onprice41" data-fromvalue="400" data-tovalue="1000">
                <label class="container">400+
                </label>
              </a>
                </div>
             
          </div>

          <div class="w3-dropdown-hover" style="background-color: #fff;">
              <button title="More" class="format-text" style="font-size:16px;padding:10px;">LICENSES<i class="fa fa-caret-down"></i></button>     
              
              <div class="w3-dropdown-content w3-bar-block w3-card-4 format-selection" id="extension_select" style="background:#f1f1f1;box-shadow:none;">
              <ul>
              
            <li class="w3-bar-item ">
              <label class="container">Standard
                <input type="checkbox" value="Standard">
                <span class="checkmark"></span>
              </label>
            </li>
            <li class="w3-bar-item ">
              <label class="container">Editorial
                <input type="checkbox" value="Editorial">
                <span class="checkmark"></span>
              </label>
            </li>
            </ul>
                </div>
             
          </div>

          <div class="w3-dropdown-hover" style="background-color: #fff;">
              <button title="More" class="format-text" style="font-size:16px;padding:10px;">RATINGS<i class="fa fa-caret-down"></i></button>     
              
              <div class="w3-dropdown-content w3-bar-block w3-card-4 format-selection" id="extension_select" style="background:#f1f1f1;box-shadow:none;">
              <a class="w3-bar-item w3-button">
            <label class="container">Any
            </label>
          </a>
          <a class="w3-bar-item w3-button">
            <label class="container">4+ stars
            </label>
          </a>
          <a class="w3-bar-item w3-button">
            <label class="container">3+ stars
            </label>
          </a>
          <a class="w3-bar-item w3-button">
            <label class="container">2+ stars
            </label>
          </a>
          <a class="w3-bar-item w3-button">
            <label class="container">1+ stars
            </label>
          </a>
                </div>
             
          </div>

          <div class="w3-dropdown-hover" style="background-color: #fff;">
              <button title="More" class="format-text" style="font-size:16px;padding:10px;">OTHERS<i class="fa fa-caret-down"></i></button>     
              
              <div class="w3-dropdown-content w3-bar-block w3-card-4 format-selection" id="extension_select" style="background:#f1f1f1;box-shadow:none;">
              <ul>
            <li class="w3-bar-item drop-pbr">
              <label class="container" style="color:#555;margin-left:17px;">PBR
                <input type="checkbox" name="others" value="pbr">
                <span class="checkmark"></span>
              </label>
            </li>
            <li class="w3-bar-item drop-animated">
            <label class="container" style="color:#555;margin-left: 15px;">Animated
               <input type="checkbox" name="others" value="animated">
               <span class="checkmark"></span>
            </label>
            </li>
            <li class="w3-bar-item drop-rigged">
            <label class="container" style="color:#555;margin-left: 15px;">Rigged
                <input type="checkbox" name="others" value="rigged">
               <span class="checkmark"></span>
            </label>
            </li>
            <li class="w3-bar-item drop-show">
              <label class="container" style="color:#555;margin-left: 15px;">Show Restricted
               <input type="checkbox" name="others" value="show-restricted">
                <span class="checkmark"></span>
              </label>
            </li>
            <li class="w3-bar-item drop-free">
                 <label class="container" style="color:#555;margin-left: 15px;">Free
                    <input type="checkbox" name="free">
                    <span class="checkmark"></span>
                  </label>
            </li>
            <li class="w3-bar-item drop-buy">
                 <label class="container" style="color:#555;margin-left: 15px;">Store
                   <input type="checkbox" name="buy">
                   <span class="checkmark"></span>
                </label>
            </li>
            </ul>
                </div>
             
          </div>

          <div class="w3-dropdown-hover" style="background-color: #fff;">
           <button title="More" class="format-text" onclick="reset()" style="font-size:16px;padding:10px;">
             <a class="refresh-button1" style="color: blue;margin-top: 60px;margin-right: 20px;cursor:pointer;">RESET</a>
            </button>     
          </div>

          </div>
          
          <script>

  const refreshButton = document.querySelector('.refresh-button1');

const refreshPage = () => {
  location.reload();
}

refreshButton.addEventListener('click', refreshPage)

</script>


  <button id="popup_href" onclick="window.location.href='#popup_paid'"></button>
 <button id="popup_hrefs" onclick="window.location.href='#popup_free'"></button>
 <button id="popup_addto" onclick="window.location.href='#popupaddto'"></button>
 <button id="popup_download" onclick="window.location.href='#popupdownload'"></button>


 
 <div class="addcopilot">
      <button class="button1 btn-primary btn-large" id="loadbtn" style="font-size:13px;margin-left:auto; margin-right:auto; display:block;">Load More</button>
    </div>
  </div>

 
<script>
function myNavdemo() {
      var x = document.getElementById("but_nav");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else { 
        x.className = x.className.replace(" w3-show", "");
      }
    }
</script>