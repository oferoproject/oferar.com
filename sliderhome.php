       <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            
            <div class="item" style="height: 360px; background-image: url(<? echo mysql_result(mysql_query("SELECT * FROM imagen", $link), 2, 'foto') ?>);">
              <div class="container-fluid">
                 <div class="caption bg-color vertical-center text-left">                  
               	 </div>
              </div> 
            </div>

            
            <div class="item" style="height: 360px; background-image: url(<? echo mysql_result(mysql_query("SELECT * FROM imagen", $link), 3, 'foto') ?>);">
              <div class="container-fluid">
                 <div class="caption bg-color vertical-center text-left">                  
               	 </div>
              </div> 
            </div>

            
            <div class="item" style="height: 360px; background-image: url(<? echo mysql_result(mysql_query("SELECT * FROM imagen", $link), 4, 'foto') ?>);">
              <div class="container-fluid">
                 <div class="caption bg-color vertical-center text-left">                  
               	 </div>
              </div> 
            </div>
         
         



            
             
          </div>
          <!-- /.owl-carousel --> 
        </div>
        