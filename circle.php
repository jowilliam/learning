<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="content/bootsrap.min.css" rel="stylesheet" />
<style>
#come img:hover { 
  -webkit-transform: scale( 1.5 ); /*Webkit: increase size to 1.5x*/
  /*-moz-transform: scale( 1.5 ); /*Mozilla: scaling*/
  -o-transform: scale( 1.5 ); /*Opera: scaling*/
  box-shadow: 0px 0px 25px white; /*CSS3 shadows: 25px fuzzy shadow around the entire image*/
 -webkit-box-shadow: 0px 0px 25px gray; /*Webkit: shadows*/
  /*-moz-box-shadow: 0px 0px 25px gray; /*Mozilla: shadows*/
  opacity: 1; /*default opacity*/
 z-index: 10; /*place hover image in front the non-hover images*/
}
.smy{
		max-width:100%;
		max-height:100%;
		background-color:#999;
		opacity:15px;
		}     
	#thumbs
	{
	width:360px;
   	height:250px;
	opacity:20px;
	position: absolute;
	float:left;
	    
	}
	
	  .one{
		  position:relative;
         z-index: 1;
		 opacity: 2;
      }
      .two{
          
          z-index: 2;
      }
      .three{
         
          z-index: 3;
      }
	  .four{
		 
		  z-index:4;
	  }
	  .five{
		  
		  z-index:5;
	  }
	  .six{
		 
		  z-index:6;
	  }
	  .seven{
		 
		  z-index:7;
	  }
	  .eight{
		  
		  z-index:8;
	  }
	  .nine{
		 
		  z-index:9;
	  }
	  .ten{
		  
		  
		  z-index:10;
	  }
	  .eleven{
		  		  z-index:11;
	  }
	  
</style>
</head>
<body>


	<div id="come">
		<div class="thumbs one">
	        <a href="#">
				<img class="smy" src="pic/1.jpg" alt="a"/>
        <div class="thumbs two">
	        <a href="#">
                <img class="smy" src="pic/12.jpg" alt=""/>
				<img class="smy" src="pic/3.jpg" alt=""/>
				<img class="smy" src="pic/4.jpg" alt=""/>
				<img class="smy" src="pic/5.jpg" alt=""/>
				<img class="smy" src="pic/9.jpg" alt=""/>
				<img class="smy" src="pic/8.jpg" alt=""/>
				<img class="smy" src="pic/6.jpg" alt=""/>
				<img class="smy" src="pic/7.jpg" alt=""/>
				<img class="smy" src="pic/10.jpg" alt=""/>
				<img class="smy" src="pic/11.jpg" alt=""/>
            </a>
            </div>
    </div>
    </div>
   
</body>
</html>