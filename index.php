<!DOCTYPE html>
<style>
body {
    margin: 0;
}

.container {
    display: flex;
    justify-content: space-around;
    max-width: 500px;
    margin: 0 auto;
    background-color: #18244e;
    padding: 30px 0;
    
    
}

.scoreNumContainer {
    background-color: #000000;
    color: red;
    padding: 0 30px;
    text-align:center;
    width: 65px;
}
.scoreConent {
    text-align:center;
}

h3{
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
    font-size: 30px;
    color: #ffffff;
    margin: 0;
    text-align: center;
}

.score{
	margin: 0 auto;
    font-family: 'Open Sans', sans-serif;
    font-size: 60px;
    font-weight: bold;
    
    
}

.points {
	border-color: #727ea6;
    border-style: solid;
    border-width: thin;
    border-radius: 5px;
    width: 21%;
    margin: 20px 4px 4px 4px;
    color: #727ea6;
    padding: 0 5px;
  
}

.points p {
	margin: 7px 2px;
}

.pointsContainer {
	display: flex;
    justify-content: space-around;
}


</style>

<html>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div class="container">
            <div class="scoreConent">
              <h3>HOME</h3>
              <div class="scoreNumContainer">
                <p class="score">0</p>
              </div>
              <div class="pointsContainer">
                <div class="points">
                <p id="home1pt">+1</p>
                </div>
                <div class="points">
                 <p  id="home2pt">+2</p>
                </div>
                <div class="points">
                 <p id="home3pt">+3</p>
                </div>
              </div>
          	</div>
          	<div>
            	<h3>GUEST</h3>
            <div class="scoreNumContainer">
              <p class="score">0</p>
            </div>
            <div class="pointsContainer">
                <div class="points">
                <p id="guest1pt">+1</p>
                </div>
                <div class="points">
                 <p  id="guest2pt">+2</p>
                </div>
                <div class="points">
                 <p id="guest3pt">+3</p>
                </div>
              </div>
        </div>
      </div>
        <script src="index.js"></script>
    </body>
</html>
