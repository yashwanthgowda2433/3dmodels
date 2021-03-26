<div class="content" style="padding-top: 45px;">
  <form action="#">
    <div class="row search-row" style="margin-left: 0px;margin-bottom: 0px;height:80px">
        <div class="search-column1" >
            <form id="demo">
                <input type="search" placeholder="Search" style="width:1080px;font-size:20px;height:50px;border:1px solid rgb(199, 199, 199);-webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;">
              </form>       
        </div>
        <div class="categories-column2">
          <div class="w3-bar  w3-card" style="background-color: transparent;">
          <div class="w3-dropdown-hover" style="margin-top: 20px;background-color: transparent;">
              <a title="More" class="categories-visit">CATEGORIES</a>     
              <select class="categories-select">
                <option  id="myOption" label="Animalsand pets">Animals & Pets</option>     
                
                <option >Architecture</option>
                <option >Art & Abstract</option>
                <option >Cars &Vehicles</option>
                <option >Characters & Creatures</option>
                <option >Cultural Heritage & History</option>
                <option >Electronics and Gadgets</option>
                <option >Fashion & Style</option>
                <option>Food & Drink</option>
                <option>Furniture & HOme</option>
                <option>Music</option>
                <option>Nature & Plants</option>
                <option>News & Politics</option>
                <option>People</option>
                <option>Places & Travel</option>
                <option>Science & Technology</option>
                <option>Sorts & Fitness</option>
                <option>Weapons & Military</option>
            
              </select>
                </div>
            </div>
        </div>
        <div class="sort-column2">
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

    <div class="row slider-row" style="margin-bottom: 0px;">
        <div class="column1 slider-column">
          <div class="wrap-contact100-form-range" style="height: fit-content;width:200px;">

						<div class="contact100-form-range-value">
							Rs.<span id="value-lower">610</span> - Rs.<span id="value-upper">980</span>
							<input type="text" name="from-value">
							<input type="text" name="to-value">
						</div>

						<div class="contact100-form-range-bar">
							<div id="filter-bar"></div>
						</div>
          </div>
          <script src="<?php echo base_url('resources/');?>assets/css/nouislider.min.js"></script>  
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
              <a title="More" class="format-text">FORMAT</a>     
              <a href="#">     
                <span class="multiSel1 format-select" title="More">(<span id="file-format-id">0</span>) Selected <i class="fa fa-caret-down"></i></span>    
                <!-- <p class="multiSel" style="color:#000;font-size:14px;background-color: transparent;margin-right: 20px;margin-top:10px"></p> -->
              </a>
              <div class="mutliSelect1 w3-dropdown-content w3-bar-block w3-card-4 format-selection">
                <ul>
                <li class="w3-bar-item ">
                  <label class="container">.fbx(AUtodesk FBX)
                    <input type="checkbox" value=".fbx(Autodesk FBX)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.3ds(3ds Max)
                    <input type="checkbox" value=".3ds(3ds Max)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.max(3ds Max)
                    <input type="checkbox" value=".max(3ds Max)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.blend(Blender)
                    <input type="checkbox" value=".blend(Blender)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.obj(OBJ wavefront)
                    <input type="checkbox" value=".obj(OBJ wavefront)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.c4d(Cinema 4D)
                    <input type="checkbox" value=".c4d(Cinema 4D)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.mb(Maya)
                    <input type="checkbox" value=".mb(Maya)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.Iwo(LightWave)
                    <input type="checkbox" value=".Iwo(LightWave)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.Ixo(Modo)
                    <input type="checkbox" value=".Ixo(Modo)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.skp(SketchUp)
                    <input type="checkbox" value=".skp(SketchUp)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.fbx(AUtodesk FBX)
                    <input type="checkbox" value=".fbx(Autodesk FBX)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.3ds(3ds Max)
                    <input type="checkbox" value=".3ds(3ds Max)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.max(3ds Max)
                    <input type="checkbox" value=".max(3ds Max)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.blend(Blender)
                    <input type="checkbox" value=".blend(Blender)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.obj(OBJ wavefront)
                    <input type="checkbox" value=".obj(OBJ wavefront)">
                    <span class="checkmark"></span>
                  </label>
                </li>
                <li class="w3-bar-item ">
                  <label class="container">.c4d(Cinema 4D)
                    <input type="checkbox" value=".c4d(Cinema 4D)">
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
            <a title="More" class="polycount-text">POLY COUNT</a>     
            <a class="w3-padding-large polycount-select" title="More" >Any<i class="fa fa-caret-down"></i></a>     
            <div class="w3-dropdown-content w3-bar-block w3-card-4 polycount-hover">
              <a class="w3-bar-item w3-button ">
                <label class="container">Any
                </label>
              </a>
              <a class="w3-bar-item w3-button ">
                <label class="container">Up to 10k
                </label>
              </a>
              <a class="w3-bar-item w3-button ">
                <label class="container">10k to 50k
                </label>
              </a>
              <a class="w3-bar-item w3-button ">
                <label class="container">50k to 100k
                </label>
              </a>
              <a class="w3-bar-item w3-button ">
                <label class="container">100k to 250k
                </label>
              </a>
              <a class="w3-bar-item w3-button ">
                <label class="container">250k+
                </label>
              </a>
              
            </div>
            </div>
        </div>
    </div>
    <div class="column2 licenses">
      <div class="w3-bar  w3-card" style="background-color: transparent;">
      <div class="w3-dropdown-hover drop" style="margin-top: 10px;background-color: transparent;">
          <a title="More" class="licenses-text">LICENSES</a>     
          <a href="#">     
            <span class="multiSel " title="More" style="color: rgb(219,10,80);font-size:14px;background-color: #fff;margin-left: 10px;display:block;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">Any<i class="fa fa-caret-down"></i></span>    
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
        <a title="More" class="ratings">RATINGS</a>     
        <a class="w3-padding-large ratings-select" title="More" >Any<i class="fa fa-caret-down"></i></a>     
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
<div class="column2 others-column">
  <div class="w3-bar  w3-card" style="margin-top:10px;background-color: transparent;">
    <a title="More" class="others-text">Others</a>     
      
  <div class="w3-dropdown-hover row" style="margin-top: 0px;background-color: transparent;">
      <a>
        <label class="container" style="color:#555">PBR
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </a>
      <a>
        <label class="container" style="color:#555;margin-left: 15px;">Animated
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </a>
      <a>
        <label class="container" style="color:#555;margin-left: 15px;">Rigged
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </a>
      <a>
        <label class="container" style="color:#555;margin-left: 15px;">Show Restricted
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </a>
      <a>
        <label class="container" style="color:#555;margin-left: 15px;">Free
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </a>
      <a>
        <label class="container" style="color:#555;margin-left: 15px;">Buy
          <input type="checkbox">
          <span class="checkmark"></span>
        </label>
      </a>
    </div>
  </div>
</div>
<div class="col4 reset-button">
  <a href="#" style="color: blue;margin-top: 60px;">RESET</a>
</div>
</div>
</div>
    
  </form>
</div>

<div class="contents" style="background-color: #f2f2f2; padding:20px;margin-top: 0px;">
    <div class="wrapper">
    <section class="boxes" id="load_data" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));">
        <section class="boxe">
          <div class="square" style="display: inline;padding: 30px;">
            <h2 style="color:black; float:left;margin-left: 0px;font-size: 18px;">Animals & Pets 3D Models</h2>
            <div class="row" style="margin-left: 0px;width: 100%;margin-top: 10px;">
            <p style="margin:7px 0 0; font-size: 14px;color:#555;line-height: 1.5;float:right;width:100%;" ><a>3D models of animal and pets ready to download.
               Suitable for use in any&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3D&nbsp;Project including VR, AR, games, animations, visual effects(VFX), and motion graphics.
            Choices include <span style="color:rgb(105, 195, 224);">low poly</span>,<span style="color:rgb(105, 195, 224);">high poly</span>,
            <span style="color:rgb(105, 195, 224);">rigged</span>, and <span style="color:rgb(105, 195, 224);">animated</span> options.
          File formats include <span style="color:rgb(105, 195, 224);">FBX</span>,<span style="color:rgb(105, 195, 224);">OBJ</span>,
          <span style="color:rgb(105, 195, 224);">MAX</span>,<span style="color:rgb(105, 195, 224);">C4D</span>, <span style="color:rgb(105, 195, 224);">BLEND</span>
           and GLTF.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
          </div>
        </div>
            
          </section>
          <div class="boxe" style="margin:0px;padding:0;background-color: transparent;border:1px solid transparent">
            
                
          </div>
          <!-- 1st image -->
          
      
        
        
          <div id="popup_free" class="overlay" style="height:100%">
            <div class="popup">
              <a class="close" href="#">&times;</a>
              <div class="content" style="height:100%;">
              <div id="display_image">
                <img class="free-download" src="">
                </div>
                <div class="cart2 popup-free-download" >
                 <div class="features-free-download">
                  <h5 class="free-download-h5">SUGGESTED 3D MODELS</h5>
                  <div class="features-list-free-download">
                    <div class="row" style="margin-left: 0px;margin-bottom: 0px;">
                      <div class="column" style="margin-left: 0px;margin-bottom: 0px;padding:0px">
                        <div class="box suggested-model">
                          <a class="button" href="#popup2" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background:url(<?php echo base_url('resources/');?>icons/film.png);background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                        </div>
                      </div>
                      <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                        <a class="suggested-model-name"><span>Pestiline chestopher</span></a>
                        <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                          <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="features-list-free-download">
                    <div class="row" style="margin-left: 0px;margin-bottom: 0px;padding: 0px;">
                      <div class="column" style="margin-left: 0px;margin-bottom: 0px;">
                        <div class="box suggested-model">
                          <a class="button" href="#popup1" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background:url(<?php echo base_url('resources/');?>icons/ima.png);background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                        </div>
                      </div>
                      <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                        <a class="suggested-model-name"><span>Corona Virus</span></a>
                        <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                          <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="features-list-free-download">
                    <div class="row" style="margin-left: 0px;margin-bottom: 0px;">
                      <div class="column" style="margin-left: 0px;margin-bottom: 0px;">
                        <div class="box suggested-model">
                          <a class="button" href="#popup1" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background-color:darkgray;background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                        </div>
                      </div>
                      <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                        <a class="suggested-model-name"><span>model name</span></a>
                        <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                          <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="features-list-free-download">
                    <div class="row" style="margin-left: 0px;margin-bottom: 0px;">
                      <div class="column" style="margin-left: 0px;margin-bottom: 0px;">
                        <div class="box suggested-model">
                          <a class="button" href="#popup1" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background-color:darkgray;background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                        </div>
                      </div>
                      <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                        <a class="suggested-model-name"><span>model name</span></a>
                        <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                          <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="features-list-free-download">
                    <div class="row" style="margin-left: 0px;margin-bottom: 0px;">
                      <div class="column" style="margin-left: 0px;margin-bottom: 0px;">
                        <div class="box suggested-model">
                          <a class="button" href="#popup1" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background-color:darkgray;background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                        </div>
                      </div>
                      <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                        <a class="suggested-model-name"><span>model name</span></a>
                        <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                          <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                          <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                      </div>
                      </div>
                    </div>
                  </div>
                  
                    <div class="load-more">
                      <button class="button" style="margin-left: auto;margin-right: auto;margin-top: 20px;">Load More</button>
                    </div>
                  
                </div>
              </div>
              <div class="additonal-viewer" style="float: left;margin-top:20px;">
                <div class="name" style="margin-left: 0px;">
                <h1 class="model-name-free" itemprop="name">
                  <span class="model-name">
                    <span class="model-name__label" id="display_name">Chameleon -my model</span>
                  </span>
                  <span class="model-page-main__3d-model">3D Model</span>
                </h1>
                
              </div>
              <div class="user-proof" style="width:113%;">
                <div class="user-pic-free">
                  <div class="container" style="width:48px; width:95%;">
                  <div class="image-container__image fa fa-user"  id="user_model_image" style="background-image: url(<?php echo base_url('resources/');?>icons/ima.png);padding: 10px;width:35px;border-radius: 4px;"></div>
                  <div id="user_model_name"></div>
                </div>
                <!-- <a href="#"class="username fa fa-eye" style="float:right;font-size: 18px;padding: 10px;color:#999;">&nbsp;<span class="count">0</span></a>
                  <a href="#"class="username fa fa-thumbs-o-up" style="float:right;font-size: 18px;padding: 10px;color:#999 ">&nbsp;<span>0</span></a>
                   -->
                </div>
                <div class="row model-features" style="margin-left: 0px;margin-top: 20px;width:100%">
                  <div class="column model-features-column" style="margin-left: 0px;">
                    <a href="#popupaddto" class="addto-feature fa fa-plus" style="font-size: 17px;">&nbsp;Add to</a>
                  </div>
                  <div class="column model-features-column1">
                    <a href="#popupdownload" class="fa fa-download download-feature" style="font-size: 14px;">&nbsp;Download&nbsp;3D&nbsp;Model</a>
                  </div>
                  <div class="column model-features-column1">
                    <a href="#popupembed" class="fa fa-code embed-feature" style="font-size: 15px;">&nbsp;Embed 3D Models</a>
                  </div>
                  <div class="column model-features-column" >
                    <a href="#popupshare" class="fa fa-share share-feature" style="font-size: 15px;">&nbsp;Share</a>
                  </div>
                  <div class="column model-features-column1" >
                    
                    <a href="#popupmoreinfo" class="more-info-feature fa fa-plus" style="font-size: 15px;">&nbsp;More information</a>
                  </div>
                  <div class="column model-features-column1" style="float:right;">
                    
                    <a href="report.html" target="_blank" class="report-feature fa fa-flag" style="font-size: 17px;float:right;">&nbsp;Report</a>
                  </div>
                </div>
              </div>
              <div class="row" style="width:100%;margin-left: 0px;">
                
              <div id="comments"></div>
              </div>
              <!-- comments -->
              <div id="comment_text">
              
              </div>

              <!-- comments -->
              <div class="load-more" style="margin-bottom: 60px;margin-top: 0px;">
                <button class="button" style="margin-left: auto;margin-right: auto;margin-top: 20px;">Load More</button>
              </div>
              </div>
              </div>
            </div>
          </div> 


          <!-- 2nd image -->
          <div id="popup_paid" class="overlay popup_paid">
          <div class="popup">
            
            <a class="close" href="#">&times;</a>
            <div class="content" style="width:100%;height: auto;">
            <div id="displays_image">
              
             </div> 
              <div class="cart2 popup-model-cart">
                <div class="payment-cart">
                <h3 class="payment-cart-h3" id="display_price"></h3>
                
             
              
              <div class="payment-methods">
                
                  <a href="#" class="payment-methods1"><i class="fa fa-cc-visa" style="color:#004d99"></i></a>
                  <a href="#" class="payment-methods2"><i class="fa fa-cc-paypal"style="color:#004d99"></i></a>
                  <a href="#" class="payment-methods3"><i class="fa fa-credit-card"></i></a>
                  <a href="#" class="payment-methods4"><i class="fa fa-cc-amex"></i></a>
                </div>
              </div>

              <div class="features-free-download" style="padding-top: 20px;">
                <h5 class="free-download-h5">SUGGESTED 3D MODELS</h5>
                <div class="features-list-free-download">
                  <div class="row" style="margin-left: 0px;margin-bottom: 0px;">
                    <div class="column" style="margin-left: 0px;margin-bottom: 0px;padding:0px">
                      <div class="box suggested-model">
                        <a class="button" href="#popup2" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background:url(<?php echo base_url('resources/icons/film.png');?>);background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                      </div>
                    </div>
                    <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                      <a class="suggested-model-name"><span>Pestiline chestopher</span></a>
                      <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                        <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="features-list-free-download">
                  <div class="row" style="margin-left: 0px;margin-bottom: 0px;padding: 0px;">
                    <div class="column" style="margin-left: 0px;margin-bottom: 0px;">
                      <div class="box suggested-model">
                        <a class="button" href="#popup1" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background:url(<?php echo base_url('resources/');?>icons/ima.png);background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                      </div>
                    </div>
                    <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                      <a class="suggested-model-name"><span>Corona Virus</span></a>
                      <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                        <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="features-list-free-download">
                  <div class="row" style="margin-left: 0px;margin-bottom: 0px;">
                    <div class="column" style="margin-left: 0px;margin-bottom: 0px;">
                      <div class="box suggested-model">
                        <a class="button" href="#popup1" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background-color:darkgray;background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                      </div>
                    </div>
                    <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                      <a class="suggested-model-name"><span>model name</span></a>
                      <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                        <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="features-list-free-download">
                  <div class="row" style="margin-left: 0px;margin-bottom: 0px;">
                    <div class="column" style="margin-left: 0px;margin-bottom: 0px;">
                      <div class="box suggested-model">
                        <a class="button" href="#popup1" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background-color:darkgray;background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                      </div>
                    </div>
                    <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                      <a class="suggested-model-name"><span>model name</span></a>
                      <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                        <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="features-list-free-download">
                  <div class="row" style="margin-left: 0px;margin-bottom: 0px;">
                    <div class="column" style="margin-left: 0px;margin-bottom: 0px;">
                      <div class="box suggested-model">
                        <a class="button" href="#popup1" style="margin:0;border-radius:0px 0px 0px 0px; padding:44px;background-color:darkgray;background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>
                      </div>
                    </div>
                    <div class="column" style="display:flex;padding:8px 10px;flex-direction:column;margin-left: 0px;margin-bottom: 0px;height:90px;">
                      <a class="suggested-model-name"><span>model name</span></a>
                      <div class="row" style="margin-top:10px;margin-left: 0px;margin-bottom: 0px;">
                        <a href="#" class="fa fa-comment" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-eye" style="color: #999;"><span style="padding: 5px;">0</span></a>
                        <a href="#" class="fa fa-thumbs-o-up " style="color: #999;"><span style="padding: 5px;">0</span></a>
                    </div>
                    </div>
                  </div>
                </div>
                
                  <div class="load-more">
                    <button class="button" style="margin-left: auto;margin-right: auto;margin-top: 20px;">Load More</button>
                  </div>
                
              </div>
            </div>
            <div class="additonal-viewer" style="float: left;margin-top:20px;">
                <div class="name" style="margin-left: 0px;">
                <h1 class="model-name-free" itemprop="name">
                  <span class="model-name">
                    <span class="model-name__label" id="display_model_name">Chameleon -my model</span>
                  </span>
                  <span class="model-page-main__3d-model">3D Model</span>
                </h1>
              
              </div>
              <div class="user-proof" style="width:113%;">
                <div class="user-pic-free">
                  <div class="container" style="width:48px; width:95%;">
                  <div class="image-container__image fa fa-user"  id="user_profile_image" style="background-image: url(<?php echo base_url('resources/');?>icons/ima.png);padding: 10px;width:35px;border-radius: 4px;"></div>
                  <div id="user_profile_name"></div>
                      
                  
                  <!-- <a href="#"class="username fa fa-eye" style="float:right;font-size: 18px;padding: 10px;color:#999;">&nbsp;<span class="count">0</span></a>
            <a href="#"class="username fa fa-thumbs-o-up" style="float:right;font-size: 18px;padding: 10px;color:#999 ">&nbsp;<span>0</span></a> -->
                  </div>
                </div>
                <div class="row model-features" style="margin-left: 0px;margin-top: 20px;width:100%">
                  <div class="column model-features-column" style="margin-left: 0px;">
                    <a href="#popupaddto" class="addto-feature fa fa-plus" style="font-size: 17px;">&nbsp;Add to</a>
                  </div>
                  <div class="column model-features-column1">
                    <a href="#popupdownload" class="fa fa-download download-feature" style="font-size: 14px;">&nbsp;Download&nbsp;3D&nbsp;Model</a>
                  </div>
                  <div class="column model-features-column1">
                    <a href="#popupembed" class="fa fa-code embed-feature" style="font-size: 15px;">&nbsp;Embed 3D Models</a>
                  </div>
                  <div class="column model-features-column" >
                    <a href="#popupshare" class="fa fa-share share-feature" style="font-size: 15px;">&nbsp;Share</a>
                  </div>
                  <div class="column model-features-column1" >
                    
                    <a href="#popupmoreinfo" class="more-info-feature fa fa-plus" style="font-size: 15px;">&nbsp;More information</a>
                  </div>
                  <div class="column model-features-column1" style="float:right;">
                    
                    <a href="report.html" target="_blank" class="report-feature fa fa-flag" style="font-size: 17px;float:right;">&nbsp;Report</a>
                  </div>
                </div>
              </div>
              <div class="row" style="width:100%;margin-left: 0px;">
                
                <div id="comment_box"></div>
              </div>
              <!-- comments -->
              <div id="comments_text">
              
              </div>
              <!-- comments -->
              <div class="load-more" style="margin-bottom: 60px;margin-top: 0px;">
                <button class="button" style="margin-left: auto;margin-right: auto;margin-top: 20px;">Load More</button>
              </div>
              </div>
              </div>
            </div>
          </div> 

          </section>
          </div>


          

        <div id="popupmoreinfo" class="overlay">
          <div class="popup" style="width:40%;height:75%;">
            
            <a onclick="goBack()" class="close" href="#">&times;</a>
            <div class="content" style="width:60%;height: 100%;margin-left: auto;margin-right: auto;">
              <div class="features" style="width:100%;right:60px;height:auto;border:1px solid rgb(211, 211, 211)">
                <h3 style="color:#000;text-align: center;">More Information</h3>
                <div class="features-list" style="background-color: rgb(233, 233, 233);border:1px solid rgb(211, 211, 211)">
                  <a style="color:#000;font-size: 20px;font-weight: bold;padding:15px;">License</a>
                  <a style="color:#000;font-size: 20px;font-weight: bold;float:right;margin-right: 10px;">Standard</a>
                  <a style="color:transparent;font-size: 20px;padding:15px;">advddwdwjdghdghjddhjd</a>
                  <a style="color:rgb(76, 63, 253);font-size: 10px;float:right;margin-right: 10px;">Learn more</a>
                </div>
                <div class="features-list" style="background-color: rgb(233, 233, 233);padding:10px;border:1px solid rgb(211, 211, 211)">
                  <a style="color:#000;font-size: 20px;font-weight: bold;padding:15px;">Size</a>
                  <a style="color:#000;font-size: 20px;font-weight: bold;float:right;margin-right: 10px;">2MB</a>
                 
                </div>
                <div class="features-list" style="background-color: rgb(233, 233, 233);border:1px solid rgb(211, 211, 211)">
                  <a style="color:#000;font-size: 20px;font-weight: bold;padding:15px;">License</a>
                  <a style="color:#000;font-size: 20px;font-weight: bold;float:right;margin-right: 10px;">Standard</a>
                  <a style="color:transparent;font-size: 20px;padding:15px;">advddwdwjdghdghjddhjd</a>
                  <a style="color:rgb(76, 63, 253);font-size: 10px;float:right;margin-right: 10px;">Learn more</a>
                </div>
                <div class="features-list" style="background-color: rgb(233, 233, 233);border:1px solid rgb(211, 211, 211)">
                  <a style="color:#000;font-size: 20px;font-weight: bold;padding:15px;">License</a>
                  <a style="color:#000;font-size: 20px;font-weight: bold;float:right;margin-right: 10px;">Standard</a>
                  <a style="color:transparent;font-size: 20px;padding:15px;">advddwdwjdghdghjddhjd</a>
                  <a style="color:rgb(76, 63, 253);font-size: 10px;float:right;margin-right: 10px;">Learn more</a>
                </div>
                
                
              </div>
            </div>
          </div>
        </div>

        <!-- download popup -->
        <div id="popupdownload" class="overlay">
          <div class="popup" style="width:40%;height:55%;">
            
            <a onclick="goBack()" class="close" href="#">&times;</a>
            <div class="content" style="width:100%;height: 100%;margin-left: auto;margin-right: auto;">
              <h3 style="color:#000;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);">Download</h3>
              <div class="download-content">
                <h3><span style="color:#000;font-size: 24px;">Chameleon-3D Models</span></h3>
                <a style="color:#000"> This model is free</a>
                <h4 style="color:#000">-------</h4>
                <h4 style="color:#000">-------</h4>
                <h4 style="color:#000">-------</h4>
                <h4 style="color:#000">-------</h4>
                <button class="button" style="margin-top:70px;float:right;color:#fff">Downlod</button>
              </div>
            </div>
          </div>
        </div>
<!-- popup embed -->
        <div id="popupembed" class="overlay">
          <div class="popup" style="width:40%;height:55%;">
            
            <a onclick="goBack()" class="close" href="#">&times;</a>
            <div class="content" style="width:100%;height: 100%;margin-left: auto;margin-right: auto;">
              <h3 style="color:#000;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);font-size: 24px;">Embed 3D Models</h3>
              <div class="download-content">
                <h3><span style="color:#000;">Embed code</span></h3>
                <div class="row" style="margin-left:0px;margin-right: 0px;">
                  
                    <a style="color:#000;font-weight: bold;float: left;margin-left: 0px;">Format&nbsp;:</a>
                    <a style="background-color:lightgray;">iframe</a>
                  
                </div>
                 <textarea id="html" name="html" class="w3-bar-item" rows="5" cols="78" style="padding-left:0px;background-color: rgb(231, 231, 231);border:1px solid#000">
                    <div class="column" style="margin-left: 10px;width:140px;">
                      <i class="fa fa-plus"></i>
                      <a href="#popupmoreinfo"  style="color:rgb(70, 34, 231);font-size: 13px;">More information</a>
                    </div>
                    <div class="column" style="margin-left: 10px;width:120px;">
                      <i class="fa fa-flag"></i>
                      <a href="report.html" target="_blank" style="color:rgb(7, 7, 7);font-size: 13px;">&nbsp;Report</a>
                    </div>
                    </textarea>
                    <button class="button" onclick="copy_to_clipboard('html');" style="float:left;">Click to Copy</button>
                 
                </div>
              </div>
            </div>
          </div>

          <!-- popup add to -->
          <div id="popupaddto" class="overlay">
            <div class="popup" style="width:25%;height:60%;">
              
              <a onclick="goBack()" class="close" href="#">&times;</a>
              <div class="content" style="width:100%;height: 100%;margin-left: auto;margin-right: auto;margin-top: 0px;">
                <div class="head" style="width:100%;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);">
                <a style="color:#000;font-size: 17px;">Add to Collection</a>
                </div>
                <div class="download-content">
                  <a>Recently</a>
                  <div class="row" style="margin-left:0px;margin-right: 0px;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);">
                    <div class="column" style="width:80px">
                    <img style="width:65px;height:65px;" src="<?php echo base_url('resources/');?>icons/ima.png">
                  </div>
                  <div class="column" style="width:100px">
                    <a><span>Lio model</span></a>
                  </div>
                  <div class="column" style="width:100px">
                    <button class="button" onclick="window.loction.href='user-profile.html?tab=Collections'" style="text-align: center;float:right">Add</button>
                  </div>
                    
                  </div>
                  <a>All Collections</a>
                  <div class="row" style="margin-left:0px;margin-right: 0px;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);">
                    <div class="column" style="width:80px">
                    <img style="width:65px;height:65px;" src="<?php echo base_url('resources/');?>icons/ima.png">
                  </div>
                  <div class="column" style="width:100px">
                    <a><span>Lio model</span></a>
                  </div>
                  <div class="column" style="width:100px">
                    <button class="button" onclick="window.loction.href='user-profile.html?tab=Collections'" style="text-align: center;float:right">Add</button>
                    
                  </div>
                    
                  </div>
                  <div class="row">
                    <input type="button" onclick="window.location.href='#popupaddtocollection'" class="fa fa-plus" value="+ &nbsp;CREATE A NEW COLLECTION" style="padding:10px;color:rgb(91, 186, 245);border:1 px solid rgb(91, 186, 245);">
                  </div>
                  
                   
                  </div>
                </div>
              </div>
            </div>

            <!-- popupaddtocollection -->
            <div id="popupaddtocollection" class="overlay">
              <div class="popup" style="width:30%;height:45%;">
                
                <a onclick="goBack()" class="close" href="#">&times;</a>
                <div class="content" style="width:100%;height: 100%;margin-left: auto;margin-right: auto;margin-top: 0px;">
                  <div class="head" style="width:100%;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);background-color: #fff;">
                  <a style="color:#000;font-size: 17px;">Create a New Collection</a>
                  </div>
                  <div class="download-content">
                    <div class="row" style="margin-left: 0px;margin-bottom: 0px;width:100%;padding:20px;border-bottom-style: solid;border-width:1px;border-color: rgb(184, 181, 181);background-color: #fff;">
                      <input type="text" placeholder="Collection name" style="padding:20px;width:100%">
                    </div>
                    <div class="row" style="margin-left: 0px;margin-bottom: 0px;width:90%;padding:20px;">
                      <button class="button" onclick="window.location.href='#popupaddto'" style="background-color: rgb(79, 38, 228);padding:10px;margin-left:15px;width:80px;float:right">Create</button>
                      <button class="button" onclick="window.location.href='#popupaddto'" style="background-color: lightsteelblue;width:80px;padding:10px;float:right">Cancel</button>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>

<button id="popup_href" onclick="window.location.href='#popup_paid'"></button>
 <button id="popup_hrefs" onclick="window.location.href='#popup_free'"></button>

<!-- script -->
<script>
   
  $(document).ready(function(){

    var limit = 15;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit)
    {
      var output = '';
      for(var count=0; count<limit; count++)
      {
        output += '<div class="post_data" id="but_ton" >';
        output += '<a class="button" style="margin:0;border-radius:0px 0px 0px 0px; padding:80px;background:url();background-position:center center; background-size:cover; background-repeat:no-repeat;"></a>';
        output += '<div class="our-models">';
        output += '<a class="model_name" style="color:#555; float:left;"></a>';
        output += '<a class="model_price" style="float:right;color:#555;"><span style="color: rgb(241, 57, 88);">&nbsp;/span></a>';
        output += '</div>';
        output += '</div>';
      }
      $('#load_data_message').html(output);
      
    }

    lazzy_loader(limit);

    function load_data(limit, start)
    {
      $.ajax({
        url:"<?php echo base_url(); ?>welcome/fetching_all_models",
        method:"POST",
        data:{limit:limit, start:start},
        cache: false,
        success:function(data)
        {
          if(data == '')
          {
            $('#load_data_message').html('<h3>No More Result Found</h3>');
            action = 'active';
          }
          else
          {
            $('#load_data').append(data);
            $('#load_data_message').html("");
           //$('.post_data').click(function(){
              //$('#popup_href').trigger("click");
              //$('#display_model').replaceWith();
            //});
            
            action = 'inactive';
          }
        }
      });
     
    }


    


    if(action == 'inactive')
    {
      action = 'active';
      load_data(limit, start);
    }

    // $('#loadbtn').click( function(){
    //   if(action == 'inactive')
    //   {
    //     lazzy_loader(limit);
    //     action = 'active';
    //     start = start + limit;
    //     setTimeout(function(){
    //       load_data(limit, start);
    //     }, 1000);
    //   }
    // });

  });

  
</script>

<script>
function show_model_popup(user_model_id)
  {
   
       $('#popup_href').trigger("click");
      //  alert(user_model_id);
       $.post("<?php echo base_url('index.php/welcome/popupfetch')?>",
       {user_model_id:user_model_id}, function(data){
           $("#displays_image").html(data);

       });
       $.post("<?php echo base_url('index.php/welcome/get_price')?>",
       {user_model_id:user_model_id}, function(data){
           $("#display_price").html(data);
       });

       $.post("<?php echo base_url('index.php/welcome/get_name')?>",
       {user_model_id:user_model_id}, function(data){
           $("#display_model_name").html(data);

       });
       $.post("<?php echo base_url('index.php/welcome/user_model_image')?>",
       {user_model_id:user_model_id}, function(data){
           $("#user_profile_image").html(data);

       });

       $.post("<?php echo base_url('index.php/welcome/user_model_name')?>",
       {user_model_id:user_model_id}, function(data){
            $("#user_profile_name").html(data);
        });

        $.post("<?php echo base_url('index.php/welcome/get_comments')?>",
       {user_model_id:user_model_id}, function(data){
            $("#comments_text").html(data);
        }); 
        $.post("<?php echo base_url('index.php/welcome/comments')?>",
       {user_model_id:user_model_id}, function(data){
            $("#comment_box").html(data);
        });
  }  
</script>

<script>

function show_models_popup(user_model_id)
  {
   
       $('#popup_hrefs').trigger("click");
       //alert(user_model_id);
       $.post("<?php echo base_url('index.php/welcome/popupfetch')?>",
       {user_model_id:user_model_id}, function(data){
           $("#display_image").html(data);

       });
       $.post("<?php echo base_url('index.php/welcome/get_price')?>",
       {user_model_id:user_model_id}, function(data){
           $("#display_price").html(data);

       });  
       $.post("<?php echo base_url('index.php/welcome/get_name')?>",
       {user_model_id:user_model_id}, function(data){
           $("#display_name").html(data);

       });
       $.post("<?php echo base_url('index.php/welcome/user_model_image')?>",
       {user_model_id:user_model_id}, function(data){
           $("#user_model_image").html(data);

       });

       $.post("<?php echo base_url('index.php/welcome/user_model_name')?>",
       {user_model_id:user_model_id}, function(data){
            $("#user_model_name").html(data);
        }); 
        $.post("<?php echo base_url('index.php/welcome/get_comments')?>",
       {user_model_id:user_model_id}, function(data){
            $("#comment_text").html(data);
        }); 
        $.post("<?php echo base_url('index.php/welcome/comments')?>",
       {user_model_id:user_model_id}, function(data){
            $("#comments").html(data);
        });
        
  }


</script>

<script>
    function comment(model_id)
    {
       var comment_text = document.getElementById("myComment").value;
       $.post("<?php echo base_url('index.php/welcome/send_comments')?>",
       {model_id:model_id, comment_text:comment_text}, function(data){
            
        }); 

        


    }


</script>

<script>
function myPhoto(User_id) 
{
  // $.post("<?php echo base_url('index.php/welcome/get_user_photo')?>",
  //      {user_id:user_id}, function(data){
  //          $("#profile_photo").replaceWith(data);
  //      });   

      //  $.post("<?php echo base_url('index.php/welcome/user_model_image')?>",
      //  {User_id:User_id}, function(data){
      //      $("#user_model_image").html(data);
      //  }); 
      //  $.post("<?php echo base_url('index.php/welcome/user_model_name')?>",
      //  {User_id:User_id}, function(data){
      //      $("#user_model_name").html(data);
      //  }); 
}

</script>


<script>
function add_to_cart(all_models_id)
{
  //alert(all_models_id);
  $.post("<?php echo base_url('index.php/welcome/send_to_cart')?>",
    {all_models_id:all_models_id}, function(data){
      $("#addtocart").html(data);
  });
}
</script>
    
    
    <div class="addcopilot">
      <button class="button banner-joinfree" style="margin-left:auto; margin-right:auto; display:block; margin-top:30px;padding:10px;">Load More</button>
    </div>
  </div>

  <script>
$(document).on('click','#likes_count' ,function()
{
  var model_id = $(this).attr('data');
  $.post("<?php echo base_url('index.php/welcome/likes')?>",
       {model_id:model_id}, function(data){
         $("#" + model_id).html(data);
        
       });
  
});

  </script>

<script>
$(document).on('click','#likes_counts' ,function()
{
  var model_id = $(this).attr('data');
  $.post("<?php echo base_url('index.php/welcome/likes')?>",
       {model_id:model_id}, function(data){
         $("." + model_id).html(data);
        
       });
  
});

  </script>
  