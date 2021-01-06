
<html>
    <body onscroll="down()" id="back1">
        <head>
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <head>
            
            <style type="text/css">
            
                #menu{
                    width: auto;
                    height: 120px;
                    background-color: transparent;
                    position: fixed;
                    top: 0;
                    left: 0;
                    right: 0;
                    border-bottom: solid 1px white;
                    transition: all 0.3s ease-out;
                    
                    
                }
                
                
                
                #menu ul{
                    margin-left: 350px;
                }
                
                #menu ul li{
                    float: left;
                    margin-left: 80px;
                    margin-top: 35px;
                    color: white;
                    font-family: Bahnschrift;
                    font-size: 15;
                    transition: all 0.3s ease-out;
                    filter: blur(0.2px);
                    
                }
                
               
            
                #menu ul li:hover{
                    cursor: pointer;
                    border-bottom: solid medium gold;
                    height: 40px;
                }
                
                #menu p{
                    position: absolute;
                    color: white;
                    font-size: 20;
                    right: 0;
                    top: -5;
                    width: 170px;
                    height: 30px;
                    background-color: transparent;
                    
                    
                }
                
                /*magazine link*/
                
                #Emag{
                    
                    width: 145px;
                    height: 35px;
                    background-color: gold;
                    position: absolute;
                    right: 30;
                    top: 74;
                    border: solid thin grey;
                    border-radius: 17px;
                    box-shadow: 0 0 3px grey;
                    transition: all 0.3s linear;
                    font-family: Bahnschrift;
                    font-weight: bold;
                }
                
                #Emag:hover{
                    cursor: pointer;
                }
                
                
                #logo{
                    width: 100px;
                    height: 100px;
                    position: absolute;
                    border: solid medium white;
                    border-radius: 50%;
                    margin-left: 10;
                    margin-top: 10;
                    transition: all 0.2s ease-out;
                    
                }
                #ltext{
                    position: absolute;
                    left: 130;
                    top: 80;
                    font-size: 35;
                    font-family: Bahnschrift condensed;
                    font-weight: bolder;
                    list-style-type: none;
                    color: white;
                }
                
            
                #content{
                    width: auto;
                    height: 1500px;
                    background-color: lightgray;
                    position: absolute;
                    top: 0;
                    right: 0;
                    left: 0;
                    z-index: -2;
                }
                
                #content img{
                    
                }
                
                
                #scroller{
                    width: 50px;
                    height: 50px;
                    background-color: gold;
                    position: absolute;
                    z-index: 3;
                    top: 580;
                    left: 670;
                    border: solid thin grey;
                    border-radius: 3px;
                    box-shadow: 0 02px 10px grey;
                    
                    display: none;
                    
                    
                }
              
                #scroller:hover{
                    
                    cursor: pointer;
                }
                
                #scroller div{
                    width: 25px;
                    height: 25px;
                    background-color: transparent;
                    border: solid medium black;
                    transform: rotate(45deg);
                    margin-left: 11;
                    margin-top: 8;
                    border-left: 0;
                    border-top: 0;
                    
                }
                
                
                #img1{
                    
                    width: 1650px;
                    height: 500px;
                    position:absolute;
                    z-index: inherit;
                       transition: all 1s linear;
                    left: 0;
                    right: 0;
                    animation: slider1 15s infinite;
                    
                    
                    
                    
                }
                #img2{
                     width: 1650px;
                    height: 500px;
                    position:absolute;
                    z-index: inherit;
                    transition: all 1s linear;
                    left: 0;
                    right: 0;
                    animation: slider2 15s infinite;
                }
                
                #img3{
                     width: 1650px;
                    height: 500px;
                    position:absolute;
                    z-index: inherit;
                    transition: all 1s linear;
                    left: 0;
                    right: 0;
                    animation: slider3 15s infinite;
                    
                }
                #img4{
                    width: 1650px;
                    height: 500px;
                    position:absolute;
                    z-index: inherit;
                    transition: all 1s linear;
                    left: 0;
                    right: 0;
                    animation: slider4 15s infinite;
                }
                
               
                
                
                #welcometext{
                    position: absolute;
                    font-size: 50;
                    color: white;
                    margin-top: 200;
                    font-family: Impact;
                    margin-left: 250;
                    z-index: 1;
                    transform: rotateX(90deg);
                    transition: all 1s linear;
                    opacity: 0;
                    
                }
                
                #HOD{
                    width: 700px;
                    height: 400px;
                    background-color: orange;
                    position: absolute;
                    margin-top: 500;
                }
                
                #faculty{
                    width: 700px;
                    height: 400px;
                    margin-top: -15;
                }
                
                #faculty:hover{
                    box-shadow: 0 0 25px grey;
                }
                
                #notice{
                    width: 650px;
                    height: 400px;
                    background-color:darkseagreen;
                    margin-left: 700px;
                    margin-top: -400px;
                    overflow-y: hidden;
                    border: solid thin grey;
                    opacity: 1;
                }
                
                #m1{
                    font-size: 22;
                    font-family: Arial Rounded MT;
                    margin-left: 20;
                    margin-top: 50;
                    position: relative;
                    animation: notice 10s infinite;
                    
                }
                
                #noticestrip{
                    width: 650px;
                    height: 35px;
                    background-color: crimson;
                    position: absolute;
                    z-index: 2;
                }
                #noticestrip p{
                    font-size: 20;
                    font-family: Arial;
                    font-weight: bold;
                    margin-left: 290;
                    margin-top: 8;
                    
                }
                
                #slidedisplay{
                   width: 180px;
                    height: 40px;
                    background-color: white;
                    position: absolute;
                    margin-left: 600;
                    margin-top: 440;
                    border: solid thin white;
                    border-radius: 20px;
                    box-shadow: 0 0 6px grey;
                    display: none;
                    
                }
                #slidedisplay:hover{
                    
                }
                
                #slidedisplay div{
                    width: 4px;
                    height: 4px;
                    background-color: crimson;
                    border: solid thin crimson;
                    border-radius: 50%;
                    float: left;
                    margin-left: 25;
                    margin-top: 18;
                    position: absolute;
                    
                }
                
                #slidedisplay div:nth-child(1){
                    margin-left: 25;
                    
                }
                
                #slidedisplay div:nth-child(2){
                    margin-left: 25;
                    animation: slidepoint1 15s infinite;
                    width: 12px;
                    height: 12px;
                    background-color: transparent;
                    margin-left: 21;
                    margin-top: 14;
                    opacity: 0;
                }
                #slidedisplay div:nth-child(3){
                    margin-left: 55;
                }
                 #slidedisplay div:nth-child(4){
                    margin-left: 55;
                    margin-left: 25;
                    animation: slidepoint2 15s infinite;
                    width: 12px;
                    height: 12px;
                    background-color: transparent;
                    margin-left: 51;
                    margin-top: 14;
                     opacity: 0;
                }
                 #slidedisplay div:nth-child(5){
                    margin-left: 85;
                }
                 #slidedisplay div:nth-child(6){
                    margin-left: 85;
                    width: 12px;
                    height: 12px;
                    animation: slidepoint3 15s infinite;
                    background-color: transparent;
                    margin-left: 81;
                    margin-top: 14;
                     opacity: 0;
                }
               
                #slidedisplay div:nth-child(7){
                    margin-left: 115;
                }
                #slidedisplay div:nth-child(8){
                    margin-left: 115;
                    width: 12px;
                    height: 12px;
                    animation: slidepoint4 15s infinite;
                    background-color: transparent;
                    margin-left: 111;
                    margin-top: 14;
                    opacity: 0;
                    
                }
                
                
                #slidedisplay div:hover{
                    width: 12px;
                    height: 12px;
                    background-color: transparent;
                    border: solid thin crimson;
                    margin-top: 14;
                    transition: all 0.2s linear;
                  
                    
                }
                
                #slidedisplay div:nth-child(2):hover{
                    
                    margin-left: 21;
                }
              
                
                #slidedisplay div:nth-child(4):hover{
                    margin-left: 51;
                }
                
                #slidedisplay div:nth-child(6):hover{
                    margin-left: 81;
                }
                #slidedisplay div:nth-child(8):hover{
                    margin-left: 111;
                }
                
                
                
                #pause{
                    width: 28px;
                    height: 28px;
                    background-color: transparent;
                    margin-left: 740;
                    margin-top: 447;
                    position: absolute;
                    
                }
                #pause:hover{
                    background-color: lightgray;
                    cursor: pointer;
                    transition: all 0.4s linear;
                }
                #pause:focus{
                    opacity: 0;
                }
                
                #pause div{
                    width: 3px;
                    height: 11px;
                    background-color: red;
                    float: left;
                    margin-left: 4;
                    margin-top: 9;
                    
                }
                #pause div:nth-child(1){
                    margin-left: 9;
                }
                
                #play{
                    width: 0px;
                    height: 0px;
                    background-color: transparent;
                    border: solid 9px grey;
                    border-bottom-color: transparent;
                    border-left-color: red;
                    border-right-color: yellow;
                    border-top-color: aqua;
                    margin-top: 456;
                    margin-left: 747;
                    position: absolute;
                    border-top: 0;
                    border-right: 0;
                    transform: rotate(135deg);
                    display: none;
                  
                }
                
                #play:hover{
                    cursor: pointer;
                }
                
                
                
                
                
                #trending{
                    width: auto;
                    height: 600px;
                    background-color: white;
                    margin-top: 900px;
                    
                    
                
                }
                
                
            
                
               
                
                
                #p2{
                    font-size: 55;
                    font-family: Arial;
                    font-weight: bold;
                }
                
                #underline{
                    
                    width: 180px;
                    height: 3px;
                    background-color: yellowgreen;
                    margin-top: -60;
                    margin-left: 10;
                    animation: motion 13s infinite;
                    
                }
                
                #ipoint{
                    width: 8px;
                    height: 8px;
                    border: solid thin grey;
                    background-color: yellow;
                    position: absolute;
                    margin-left: 154;
                    margin-top: -111;
                    border-radius: 50%;
                }
                
                #irod{
                    width: 7px;
                    height: 29px;
                    background-color: yellow;
                    position: absolute;
                    margin-top: -97;
                    margin-left: 154;
                    
                }
                
                
                
                #p3{
                    font-size: 35;
                    font-family: Arial;
                    font-weight: bolder;
                    margin-left: 10;
                }
                
                #topic{
                    width: 300px;
                
                    height: 80px;
                    background-color: transparent;
                    margin-top: -100;
                    margin-left: 150;
                    overflow-y: hidden;
                }
                
                #topic p{
                    font-size: 35;
                    font-weight: bold;
                    font-family: Arial Rounded MT;
                    animation: tech 26s infinite;
                    margin-top: 5;
                    position: relative;
                    
                    
                }
                
                #topic p:hover{
                    animation-play-state: running;
                }
                
                #topic p:hover{
                    cursor: pointer;
                }
                
                
                
                #qc{
                    animation: topic1 26s infinite;
                }
                #sc{
                     animation: topic2 26s infinite;
                }
                
                #ar{
                     animation: topic3 26s infinite;
                }
                
                #ai{
                     animation: topic4 26s infinite;
                }
                
                #iot{
                     animation: topic5 26s infinite;
                }
                
                
                
                
                #student{
                    width: auto;
                    height: 400px;
                    background-color: gainsboro;
                }
                
                #student img{
                    width: 120px;
                    height: 120px;
                    border: solid medium white;
                    border-radius: 50%;
                    position: absolute;
                    margin-top: 150;
                    margin-left: 600;
                    
                }
                
                #student p{
                    position: absolute;
                    margin-left: 80;
                    margin-top: 300;
                    font-size: 22;
                    font-family: Arial;
                }
                
                #statement1{
                    animation: students1 26s infinite;
                }
                #statement2{
                    animation: students2 26s infinite;
                }
                #statement3{
                    animation: students3 26s infinite;
                }
                #statement4{
                    animation: students4 26s infinite;
                }
                #statement5{
                    animation: students5 26s infinite;
                }
                #statement6{
                    animation: students6 26s infinite;
                }
                
                
                #student1{
                    animation: students1 26s infinite;
                }
                #student2{
                    animation: students2 26s infinite;
                }
                #student3{
                    animation: students3 26s infinite;
                }
                #student4{
                    animation: students4 26s infinite;
                }
                #student5{
                    animation: students5 26s infinite;
                }
                #student6{
                    animation: students6 26s infinite;
                }
                
                
                
                #division1{
                    width: 750px;
                    height: 550px;
                    background-color: gold;
                    position: absolute;
                    margin-top: -160;
                    margin-left: 600;
                    opacity: 0.9;
                    transform: skewX(0deg);
                    z-index: 2;
                    
                }
                
                #memberform{
                    width: 160px;
                    height: 30px;
                    background-color: crimson;
                    font-size:20;
                    color: white;
                    position: absolute;
                    z-index: 3;
                    right: 100;
                    margin-top: -55;
                    padding-top: 7;
                    border: solid thin grey;
                    border-radius: 23px;
                    text-align-last: center;
                    font-family: Bahnschrift;
                    align-self:stretch;
                    box-shadow: 0 0 2px grey;
                    
                }
                
                
                #memberform:hover{
                    cursor: pointer;
                }
                
                #response{
                    width: 400px;
                    height: 250px;
                    background-color: whitesmoke;
                    margin-left: 260;
                    margin-top: 60;
                    border: solid thin black;
                    border-radius: 3px;
                    box-shadow: 0 2px 12px grey;
                    display: none;
                    
                }
                #response:after{
                    
                    width: 20px;
                    height: 20px;
                    background-color: whitesmoke;
                    content: "";
                    display: block;
                    transform: rotate(45deg);
                    position: absolute;
                    top: 270;
                    left: 250;
                    border: solid thin black;
                    border-right: 0;
                    border-top: 0;
                    
                }
               
                
                #response input{
                    width: 190px;
                    height: 30px;
                    margin-left: 15;
                    margin-top: -10;
                    border: solid thin black;
                    border-radius: 3px;
                    font-family: Bahnschrift;
                    color: green;
                    
                }
                #responsetext1{
                    font-family: Bahnschrift;
                    font-size: 20;
                    font-weight: bold;
                    color: darkolivegreen;
                    margin-left: 15;
                    
                }
                #responsetext2{
                    font-family: Bahnschrift;
                    font-size: 20;
                    font-weight: bold;
                    color: darkolivegreen;
                    margin-left: 15;
                }
                
                #subscribeCLICK{
                    width: 110px;
                    height: 34px;
                    padding-top: 10px;
                    padding-left: 16px;
                    background-color: cadetblue;
                    font-size: 20;
                    font-family: Bahnschrift;
                    margin-left: 77;
                    border: solid thin grey;
                    border-radius: 4px;
                    box-shadow: 0 0 3px grey;
                    
                    
                }
                #subscribeCLICK:hover{
                    cursor: pointer;
                    box-shadow: 0 0 5px grey;
                }
               
                #subscribeOK{
                    width: 0px;
                    height: 0px;
                    background-color: white;
                    margin-top: -200;
                    margin-left: 260;
                    align-content: center;
                    opacity: 0;
                    border: solid thin green;
                    border-radius: 50%;
                    filter: blur(0.4px);
                    display: block;
                    transition: all 0.4s linear;
                    
                }
                
                #subscribeOk div{
                    width: 0px;
                    height: 0px;
                    background-color: transparent;
                    position: absolute;
                    border: solid thick green;
                    transform: rotateZ(-45deg);
                    margin-top: 18;
                    margin-left: 10;
                    border-right: 0;
                    border-top: 0;
                    display: block;
                    transition: all 0.4s linear;
                    opacity: 0;
                    
                }
                
                
                
                
                #division1text1{
                    font-size: 45;
                    font-family: Impact;
                    margin-left: 200;
                    
                }
                #division1 button{
                    width: 180px;
                    height: 65px;
                    border: solid thin crimson;
                    border-radius: 32px;
                    background-color: crimson;
                    margin-left: 50;
                    margin-top: 100;
                    font-size: 25;
                    position: absolute;
                    display: block;
                    box-shadow: 0 0 2px grey;
                    
                }
                
                #division2{
                    width: 550px;
                    height: 350px;
                    background-color: greenyellow;
                    position: absolute;
                    margin-left: 10;
                    opacity: 0.8;
                    z-index: 2;
                }
                
                #div2sub{
                    width: 400px;
                    height: 300px;
                    background-color: transparent;
                    border: solid thin black;
                    margin-left: 125;
                    margin-top: 25;
                    transform: rotateX(180deg);
                    border-bottom: 0;
                    border-right: 0;
                    position: absolute;
                    
                }
                
                #div2sub div{
                    width: 30px;
                    height: 200px;
                    background-color: darkmagenta;
                    margin-left: 30;
                    margin-top: 0;
                    float: left;
                    transition: all 2s linear;
                    
                }
                
                #div2sub div:nth-child(1){
                    height: 0px;
                    background-color: red;
                    
                }
                #div2sub div:nth-child(2){
                    background-color: gray;
                    height: 0px;
                }
                #div2sub div:nth-child(3){
                    background-color: gold;
                    height: 0px;
                    
                }
                #div2sub div:nth-child(4){
                    background-color: darkcyan;
                    height: 0px;
                }
                #div2sub div:nth-child(5){
                    background-color: green;
                    height: 0px;
                }
                #div2sub div:nth-child(6){
                    background-color: darkblue;
                    height: 0px;
                }
                
                
                
                /*binary motion*/
                
                #binary1{
                    font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square1 3s alternate infinite;
                    
                    
                }
                #binary2{
                    margin-left: 200;
                      font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square2 6s alternate infinite;
                    
                }
                #binary3{
                    margin-left: 300;
                      font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square3 6s alternate infinite;
                    
                }
                #binary4{
                    margin-left: 400;
                      font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square4 6s alternate infinite;
                    
                }
                #binary5{
                    margin-left: 200;
                      font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square5 6s alternate infinite;
                    
                }
                #binary6{
                    margin-left: 600;
                      font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square6 6s alternate infinite;
                    
                }
                #binary7{
                    margin-left: 230;
                      font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square7 6s alternate infinite;
                    color: white;
                    
                }
                #binary8{
                    margin-left: 200;
                      font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square8 6s alternate infinite;
                    
                }
                #binary9{
                    margin-left: 200;
                      font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square9 6s alternate infinite;
                    color: white;
                    
                }
                #binary10{
                    margin-left: 200;
                      font-size: 50;
                    font-weight: bold;
                    font-family: Arial;
                    position: absolute;
                    animation: square10 6s alternate infinite;
                    
                }
                
                
                @keyframes square1{
                    
                    
                   
                    0%{
                        transform:translate3d(50px,500px,20px);
                    }
                    
                    50%{
                        transform:translate3d(60px,250px,50px);
                    }
                    
                    100%{
                        transform:translate3d(510px,90px,200px);
                    }
                    
                }
                
                @keyframes square2{
                    
                    
                   
                    0%{
                        transform:translate3d(50px,500px,20px);
                    }
                    
                    50%{
                        transform:translate3d(60px,250px,50px);
                    }
                    
                    100%{
                        transform:translate3d(510px,90px,200px);
                    }
                    
                }
                @keyframes square3{
                    
                    
                   
                    0%{
                        transform:translate3d(501px,50px,20px);
                    }
                    
                    50%{
                        transform:translate3d(64px,560px,50px);
                    }
                    
                    100%{
                        transform:translate3d(510px,90px,200px);
                    }
                    
                }
                @keyframes square4{
                    
                    
                   
                    0%{
                        transform:translate3d(50px,500px,20px);
                    }
                    
                    50%{
                        transform:translate3d(60px,250px,50px);
                    }
                    
                    100%{
                        transform:translate3d(50px,60px,200px);
                    }
                    
                }
                @keyframes square5{
                    
                    
                   
                    0%{
                        transform:translate3d(50px,500px,20px);
                    }
                    
                    50%{
                        transform:translate3d(8px,350px,50px);
                    }
                    
                    100%{
                        transform:translate3d(510px,90px,200px);
                    }
                    
                }
                @keyframes square6{
                    
                    
                   
                    0%{
                        transform:translate3d(50px,500px,20px);
                    }
                    
                    50%{
                        transform:translate3d(60px,250px,50px);
                    }
                    
                    100%{
                        transform:translate3d(510px,90px,200px);
                    }
                    
                }
                @keyframes square7{
                    
                    
                   
                    0%{
                        transform:translate3d(50px,500px,20px);
                    }
                    
                    50%{
                        transform:translate3d(60px,250px,50px);
                    }
                    
                    100%{
                        transform:translate3d(510px,90px,200px);
                    }
                    
                }
                
                @keyframes square8{
                    
                    
                   
                    0%{
                        transform:translate3d(50px,500px,20px);
                    }
                    
                    50%{
                        transform:translate3d(60px,250px,50px);
                    }
                    
                    100%{
                        transform:translate3d(510px,90px,200px);
                    }
                    
                }
                
                @keyframes square9{
                    
                    
                   
                    0%{
                        transform:translate3d(50px,500px,20px);
                    }
                    
                    50%{
                        transform:translate3d(60px,250px,50px);
                    }
                    
                    100%{
                        transform:translate3d(510px,90px,200px);
                    }
                    
                }
                
                
               

                
                
                
                
                
                
                /*footer*/
                
                #footer{
                    width: auto;
                    height: 200px;
                    background-color: crimson;
                    
                    
                }
                
                #social{
                    width: 400px;
                    height: 50px;
                    background-color: transparent;
                    margin-left: 940;
                    position: absolute;
                    margin-top: 0;
                }
                
                
                
                #social a{
                    padding: 10px;
                    font-size: 28px;
                    width: 10px;
                    text-align: center;
                    text-decoration: none;
                    margin: 15px 8px;
                    border: solid thin transparent;
                    border-radius: 50%;
                    color: black;
                    
                }
                
                #social a:nth-child(1):hover{
                    color: royalblue;
                }
                #social a:nth-child(2):hover{
                    color: deepskyblue;
                }
                #social a:nth-child(3):hover{
                    color:red;
                }
                #social a:nth-child(4):hover{
                    color:mediumslateblue;
                }
                #social a:nth-child(5):hover{
                    color:red;
                }
                #social a:nth-child(6):hover{
                    color:brown;
                }
                
                
                
                #address{
                    width: 130px;
                    height: 110px;
                    background-color: transparent;
                    margin-left: 970;
                    margin-top: 80;
                    position: absolute;
                }
                
                #address p{
                    margin-top: -5;
                    font-family: Arial;
                    font-size: 15;
                }
                
                #poweredby{
                    width: 40px;
                    height: 40px;
                    border: solid thin transparent;
                    border-radius: 50%;
                    margin-left: 350;
                    margin-top: 150;
                    
                }
                
                #itms{
                     margin-left: -150;
                    margin-top: 160;
                    position: absolute;
                }
                
                
                
                #background1{
                    width: 1350px;
                    height: 500px;
                    background-color: darkslategray;
                    position: absolute;
                    top: 1070;
                    left: 0;
                    z-index: 0;
                    
                }
                
                #imageback{
                    width: 1350px;
                    height: 645px;
                    
                    
                }
                
                #data1{
                    font-size: 75;
                    color: white;
                    position: absolute;
                    margin-top: -140;
                    right: 60;
                    font-family: Bahnschrift;
                    
                }
                
                #data1A{
                     font-size: 28;
                    color: white;
                    position: absolute;
                    margin-top: -60;
                    right: 85;
                    font-family: Bahnschrift;
                }
                
                #data2{
                    font-size: 75;
                    color: white;
                    position: absolute;
                    margin-top: -140;
                    right: 360;
                    font-family: Bahnschrift;
                    
                }
                
                #data2A{
                    font-size: 28;
                    color: white;
                    position: absolute;
                    margin-top: -60;
                    right: 370;
                    font-family: Bahnschrift;
                }
                
                
                
                
                
                
                /*animation*/
                
                @keyframes notice{
                    0%{
                        transform: translateY(0px);
                        
                    }
                    10%{
                        transform: translateY(80px);
                         
                    }
                    20%{
                        transform: translateY(160px);
                    }
                    30%{
                        transform: translateY(240px);
                    }
                    40%{
                        transform: translateY(320px);
                    }
                    50%{
                        transform: translateY(400px);
                    }
                    60%{
                        transform: translateY(-320px);
                        transform: rotateX(360deg);
                    }
                    70%{
                        transform: translateY(-240px);
                        
                    }
                    80%{
                        transform: translateY(-160px);
                    }
                    90%{
                        transform: translateY(-80px);
                    }
                
                    
                    100%{
                        transform: translateY(0px);
                        
                        
                    }
                }
                
                
                @keyframes tech{
                    0%{
                        transform: translateY(0px);
                        color: red;
                        
                    }
                    10%{
                        transform: translateY(-120px);
                        color: green;
                        
                    }
                    20%{
                        transform: translateY(-230px);
                        color: darkblue;
                    }
                    30%{
                        transform: translateY(-350px);
                        color: brown;
                    }
                    40%{
                        transform: translateY(-470px);
                        color: gold;
                    }
                    50%{
                        transform: translateY(-350px);
                        color: brown;
                    }
                    60%{
                        transform: translateY(-230px);
                        color: darkblue;
                    }
                    70%{
                        transform: translateY(-120px);
                        color: green;
                    }
                    80%{
                        transform: translateY(0px);
                        color: red;
                    }
                    
                 
                   
                    
                }
                
                
                @keyframes slider1{
                    0%{
                        opacity: 0;
                        
                    }
                    25%{
                        opacity: 1;
                        
                    }
                    50%{
                        opacity: 0;
                    }
                    75%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 0;
                    }
                    
                    
                }
                
                @keyframes slider2{
                    0%{
                        opacity: 0;
                    }
                    25%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 1;
                    }
                    75%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 0;
                    }
                    
                    
                }
                
                @keyframes slider3{
                    0%{
                        opacity: 0;
                    }
                    25%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 0;
                    }
                    75%{
                        opacity: 1;
                    }
                    100%{
                        opacity: 0;
                    }
                   
                    
                }
                
                
                @keyframes slider4{
                    0%{
                        opacity: 0;
                    }
                    25%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 0;
                    }
                    75%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 1;
                    }
                   
                    
                }
                
                
                /*slidepoint display*/
                
                
                @keyframes slidepoint1{
                    0%{
                        opacity: 0;
                        
                    }
                    25%{
                        opacity: 1;
                    }
                    50%{
                        opacity: 0;
                    }
                    75%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 0;
                    }
                   
                    
                }
                
                @keyframes slidepoint2{
                    0%{
                        opacity: 0;
                        
                    }
                    25%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 1;
                    }
                    75%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 0;
                    }
                   
                    
                }
                
                @keyframes slidepoint3{
                    0%{
                        opacity: 0;
                        
                    }
                    25%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 0;
                    }
                    75%{
                        opacity: 1;
                    }
                    100%{
                        opacity: 0;
                    }
                   
                    
                }
                
                @keyframes slidepoint4{
                    0%{
                        opacity: 0;
                        
                    }
                    25%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 0;
                    }
                    75%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 1;
                        
                    }
                   
                    
                }
                
                
                /*students opinion*/
                
                @keyframes students1{
                    0%{
                        opacity: 1;
                    }
                    20%{
                        opacity: 0;
                    }
                    40%{
                        opacity: 0;
                    }
                    60%{
                        opacity: 0;
                    }
                    80%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 0;
                    }
                    
                    
                }
                
                @keyframes students2{
                    0%{
                        opacity: 0;
                    }
                    20%{
                        opacity: 1;
                    }
                    40%{
                        opacity: 0;
                    }
                    60%{
                        opacity: 0;
                    }
                    80%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 0;
                    }
                    
                    
                }
                
                @keyframes students3{
                    0%{
                        opacity: 0;
                    }
                    20%{
                        opacity: 0;
                    }
                    40%{
                        opacity: 1;
                    }
                    60%{
                        opacity: 0;
                    }
                    80%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 0;
                    }
                    
                    
                }
                
                @keyframes students4{
                    0%{
                        opacity: 0;
                    }
                    20%{
                        opacity: 0;
                    }
                    40%{
                        opacity: 0;
                    }
                    60%{
                        opacity: 1;
                    }
                    80%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 0;
                    }
                    
                    
                }
                
                @keyframes students5{
                    0%{
                        opacity: 0;
                    }
                    20%{
                        opacity: 0;
                    }
                    40%{
                        opacity: 0;
                    }
                    60%{
                        opacity: 0;
                    }
                    80%{
                        opacity: 1;
                    }
                    100%{
                        opacity: 0;
                    }
                    
                    
                }
                
                @keyframes students6{
                    0%{
                        opacity: 0;
                    }
                    20%{
                        opacity: 0;
                    }
                    40%{
                        opacity: 0;
                    }
                    60%{
                        opacity: 0;
                    }
                    80%{
                        opacity: 0;
                    }
                    100%{
                        opacity: 1;
                    }
                    
                    
                }
                
                
                /*trending topic description*/
                
                @keyframes topic1{
                    0%{
                        opacity: 1;
                    }
                    10%{
                        opacity: 0;
                    }
                    20%{
                        opacity: 0;
                    }
                    30%{
                        opacity: 0;
                    }
                    40%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 0;
                    }
                    60%{
                        opacity: 0;
                    }
                    70%{
                        opacity: 0;
                    }
                    80%{
                        opacity: 0;
                    }
                    
                }
                
                @keyframes topic2{
                    0%{
                        opacity: 0;
                    }
                    10%{
                        opacity: 1;
                    }
                    20%{
                        opacity: 0;
                    }
                    30%{
                        opacity: 0;
                    }
                    40%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 0;
                    }
                    60%{
                         opacity: 0;
                    }
                    70%{
                         opacity: 0;
                    }
                    80%{
                         opacity: 0;
                    }
                    
                }
                
                @keyframes topic3{
                    0%{
                        opacity: 0;
                    }
                    10%{
                        opacity: 0;
                    }
                    20%{
                        opacity: 1;
                    }
                    30%{
                        opacity: 0;
                    }
                    40%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 0;
                    }
                    60%{
                         opacity: 0;
                    }
                    70%{
                         opacity: 0;
                    }
                    80%{
                         opacity: 0;
                    }
                    
                }
                
                @keyframes topic4{
                    0%{
                        opacity: 0;
                    }
                    10%{
                        opacity: 0;
                    }
                    20%{
                        opacity: 0;
                    }
                    30%{
                        opacity: 1;
                    }
                    40%{
                        opacity: 0;
                    }
                    50%{
                        opacity: 0;
                    }
                    60%{
                         opacity: 0;
                    }
                    70%{
                         opacity: 0;
                    }
                    80%{
                         opacity: 0;
                    }
                    
                }
                
                @keyframes topic5{
                    0%{
                        opacity: 0;
                    }
                    10%{
                        opacity: 0;
                    }
                    20%{
                        opacity: 0;
                    }
                    30%{
                        opacity: 0;
                    }
                    40%{
                        opacity: 1;
                    }
                    50%{
                        opacity: 0;
                    }
                    60%{
                         opacity: 0;
                    }
                    70%{
                         opacity: 0;
                    }
                    80%{
                         opacity: 0;
                    }
                    
                }
                
                
                
                /*trending animations*/
                
                @keyframes motion{
                    
                    0%{
                        width: 0px;
                        
                    }
                    20%{
                        width: 45px;
                    }
                    40%{
                        width: 90px;
                    }
                    60%{
                        width: 135px;
                    }
                    80%{
                        width: 180px;
                    }
                    
                    
                }
                
                
                
                
               
                    
                              
                
                
                
            
            
            </style>
        
            
            <script type="text/javascript">
            
                function down(){
                    
                
                    var prevscrollpos=window.pageYOffset;
                    
                    
                    window.onscroll = function(){
                        
                        var currentscrollpos=window.pageYOffset;
                        
                        if(prevscrollpos>currentscrollpos){
                            document.getElementById('menu').style.marginTop="0px";
                            document.getElementById('list1').style.marginTop="35px";
                            document.getElementById('list2').style.marginTop="35px";
                            document.getElementById('list3').style.marginTop="35px";
                            document.getElementById('list4').style.marginTop="35px";
                            document.getElementById('list5').style.marginTop="35px";
                            
                            
                            
                            document.getElementById('list1').style.color="white";
                            document.getElementById('list2').style.color="white";
                            document.getElementById('list3').style.color="white";
                            document.getElementById('list4').style.color="white";
                            document.getElementById('list5').style.color="white";
                            
                            
                            document.getElementById('ltext').style.marginLeft="10px";
                            document.getElementById('ltext').style.color="white";
                             document.getElementById('ltext').style.fontSize="35";   
                            document.getElementById('logo').style.width="100px";
                            document.getElementById('logo').style.height="100px";
                            document.getElementById('logo').style.marginTop="10px";
                            
                            document.getElementById('menu').style.backgroundColor="transparent";
                            document.getElementById('menu').style.opacity="1";
                            
                            document.getElementById('Emag').style.backgroundColor="gold";
                            document.getElementById('Emag').style.color="black";
                            
                        }
                        else{
                            document.getElementById('menu').style.marginTop="-60px";
                            document.getElementById('list1').style.marginTop="65px";
                            document.getElementById('list2').style.marginTop="65px";
                            document.getElementById('list3').style.marginTop="65px";
                            document.getElementById('list4').style.marginTop="65px";
                            document.getElementById('list5').style.marginTop="65px";
                            
                            
                            
                            document.getElementById('list1').style.color="crimson";
                             document.getElementById('list2').style.color="crimson";
                             document.getElementById('list3').style.color="crimson";
                             document.getElementById('list4').style.color="crimson";
                             document.getElementById('list5').style.color="crimson";
                            
                            
                            document.getElementById('logo').style.width="50px";
                            document.getElementById('logo').style.height="50px";
                            document.getElementById('menu').style.backgroundColor="white";
                            document.getElementById('menu').style.opacity="0.9";
                            document.getElementById('logo').style.marginTop="60px";
                             document.getElementById('logo').style.marginLeft="10px";
                            document.getElementById('ltext').style.display="block";
                            document.getElementById('ltext').style.fontSize="22";
                            document.getElementById('ltext').style.color="crimson";
                              document.getElementById('ltext').style.marginLeft="-20px";
                            document.getElementById('menu').style.zIndex=3;
                            
                            
                            document.getElementById('Emag').style.backgroundColor="crimson";
                            document.getElementById('Emag').style.color="white";
                        }
                        
                       
                            
                                document.getElementById('dk1').style.height="30px";
                                document.getElementById('dk2').style.height="110px";
                                document.getElementById('dk3').style.height="90px";
                                document.getElementById('dk4').style.height="180px";
                                document.getElementById('dk5').style.height="80px";
                                document.getElementById('dk6').style.height="150px";
                        
                           
                           
                        
                        
                    }
                    
                
                    
                 
                        //    
                         //    
                         //   document.getElementById('menu').style.height="80px";
                         // /  document.getElementById('list1').style.marginTop="10px";
                        
                 
                    
                    
                    
                }
                
                window.onload=function(){
                    
                    document.getElementById('welcometext').style.transform="rotateX(0deg)";
                    document.getElementById('welcometext').style.opacity="1";
                    
                    
                    
                }
                
                
                
                
                
                
                
                
                
                function plays(){
                    
                    var a = document.getElementById('play').style.display;
                    var b = document.getElementById('pause').style.display;
                    
                  
                    
                    if(a=="none"){
                              document.getElementById('play').style.display="block";
                             document.getElementById('pause1').style.display="none";
                             document.getElementById('pause2').style.display="none";
                        
                           
                       }
                    else{
                            document.getElementById('play').style.display="none";
                            
                             document.getElementById('pause1').style.display="block";
                             document.getElementById('pause2').style.display="block";
                        
                            document.getElementById('s1').style.animation="none";  
                            document.getElementById('s2').style.animation="none"; 
                            document.getElementById('s3').style.animation="none"; 
                            document.getElementById('s4').style.animation="none"; 
                        
                    }
                    
                   
                }
                
                
                
                function movedown(){
                    
                    document.getElementById('back1').style.scrollTop="500px";
                    
                }
                
                
               //subscribeOK//
                
                function subscribeOK1(){
                    
                    var bl1=document.getElementById('responsetext1');
                    var bl2=document.getElementById('responsetext2');
                    
                    document.getElementById('subscribeOK').style.display="block";
                    document.getElementById('subscribeOK').style.width="80px";
                    document.getElementById('subscribeOK').style.height="80px";
                      document.getElementById('subscribeOKsub').style.opacity="1";
                        document.getElementById('subscribeOK').style.opacity="1";
                    document.getElementById('subscribeOKsub').style.display="block";
                       document.getElementById('subscribeOKsub').style.width="50px";
                        document.getElementById('subscribeOKsub').style.height="30px";
                  
                }
                  
                        
                function newsletter(){
                    document.getElementById('response').style.display="block";
                    
                }  
                   

                      
                    
                   
                    
                       
                    
                    
                    
                   
                    
                    
                    
              
                
                
                
              
            
            
            
            
            
            </script>
        
        
            </head>
        
        
        <div id="menu">
            
            <img id="logo" src="scse.jpg">
            <li id="ltext">Society Of CSE</li>
            
            <p><a href="mailto:mdaamirsohail21@gmail.com">ITM University</a></p>
            
            <ul>
                <li id="list1">HOME</li>
                <li id="list2">PROJECTS</li>
                <li id="list3" ><a href="faculty.htm" style="text-decoration: none; color: inherit">FACULTY</a></li>
                <li id="list4"><a href="gallery.htm" style="text-decoration: none; color: inherit">GALLERY</a></li>
                <li id="list5">RESEARCH</li>
            
            </ul>
            
            <button id="Emag">E-MAGAZINE</button>
        
        </div>
        
            <div id="slidedisplay">
                <div></div>
                <div id="s1"></div>
                <div></div>
                <div id="s2"></div>
                <div></div>
                <div id="s3"></div>
                <div></div>
                <div id="s4"></div>
            </div>
        
            <div id="pause" onclick="plays()">
                <div id="pause1"></div>
                <div id="pause2"></div>
            </div>
            <div id="play" onclick="plays()"></div>
        
            
        
        
        <div id="content">
            
            
            
            <div id="scroller" onclick="movedown()">
            
                <div></div>
            
            </div>
            
            
          
            
            <img id="img1" src="slideimage1.jpg">
            <img id="img2" src="slideimage5.jpg">
            <img id="img3" src="slideimage3.jpg">
            <img id="img4" src="machinelearning2.jpg">
            
        
            <p id="welcometext">WELCOME TO SOCIETY OF CSE, ITM RAIPUR</p>
            
           
            
            <div id="HOD">
                <p id="messege"></p>
                <img id="faculty" src="exampledewangan.jpg">
                
                <div id="notice">
                    
                    
                    
                    <div id="noticestrip">
                        <p>NOTICE</p>
                    </div>
                   
                    
                    <p id="m1">> Department of CSE, ITM Raipur has launched his new website</p>
                    <p id="m1">> Department of CSE, ITM Raipur has launched his new website</p>
                    <p id="m1">> Department of CSE, ITM Raipur has launched his new website</p>
                    <p id="m1">> Department of CSE, ITM Raipur has launched his new website</p>
                    
                </div>
                
            </div>
            
              <div id="trending">
                  
                  
                 
                  
                <p id="p2">Trend ng Technology!</p>
                <div id="ipoint"></div>
                <div id="irod"></div>
                <div id="underline"></div>
                
                <p id="p3">What is <div id="topic">
                            
                        <p>QUANTUM COMPUTING</p>
                        <p>SOFT COMPUTING</p>
                        <p>AUGMENTED REALITY</p>
                        <p>ARTIFICIAL INTELLIGENCE</p>
                        <p>INTERNET OF THINGS</p>
                                    </div>
                  </p>
            
                <p id="qc"></p>
                <p id="sc"></p>
                <p id="ar"></p>
                <p id="ai"></p>
                <p id="iot"></p>
            
            
                <p id="binary1">*</p>
                <p id="binary2">*</p>
                <p id="binary3">*</p>
                <p id="binary4">*</p>
                <p id="binary5">*</p>
                <p id="binary6">*</p>
                <p id="binary7">*</p>
                <p id="binary8">*</p>
                <p id="binary9">*</p>
                <p id="binary10">*</p>
            
            
                <div id="division1">
                    <p id="division1text1">Become a MEMBER!</p>
                    <button id="button1" onclick="newsletter()">Newsletter!</button>
                    
                    
                    <div id="response">
                        <form action="#" method="post">
                        
                            <p id="responsetext1">Enter Your Name...</p>
                            <input type="text" row="5" column="10" multiple="true">
                            <p id="responsetext2">Your Email</p>
                            <input type="text">
                        
                            <p id="subscribeCLICK" onclick="subscribeOK1()">Subscribe!</p>
                            <div id="subscribeOK">
                            <div id="subscribeOKsub"></div>
                        
                            </div>
                        
                        </form>
                    </div>
                    
                    
                </div>
            
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfGOV4IQFXrgLJvTiLLv-E1s8hNYMzZqRXXSZS_QAzeUAOghQ/viewform?vc=0&c=0&w=1"><p id="memberform">CLICK HERE!</p></a>
            
                
            
                <div id="division2">
                    
                    <div id="div2sub">
                    
                        <div id="dk1"></div>
                        <div id="dk2"></div>
                        <div id="dk3"></div>
                        <div id="dk4"></div>
                        <div id="dk5"></div>
                        <div id="dk6"></div>
                        
                    </div>
            
            
                </div>
            
            
            </div>
            
            
            <div id="background1">
                <img id="imageback" src="3.jpg">
                
                <p id="data1">200+</p>
                <p id="data2">150+</p>
                
                <p id="data1A">MEMBERS</p>
                <p id="data2A">PROJECTS</p>
                
            </div>
        
            
            <div id="student">
                
                <img id="student1" src="row2.jpg"><p id="statement1">" Computer Science Engineering under ITM Raipur provides a plateform of complete industrial and corporate environment. "</p>
                <img id="student2" src="3.jpg"><p id="statement2">" This is a fortune to have ITM"</p>
                <img id="student3" src="32875662742_ecb73f8a33_h.jpg"><p id="statement3">" Our faculty is highly involved in research and development "</p>
                <img id="student4" src="52525_og_1.jpg"><p id="statement4">" Apart from study our department conducts project activities every saturday. "</p>
                <img id="student5" src="4-7%20Chushan%20to%20Alishan.JPG"><p id="statement5">" ITM university brings a lot for students employability "</p>
                <img id="student6" src="row2.jpg"><p id="statement6">" Computer Science Engineering under ITM Raipur provides a plateform of complete industrial and corporate environment. "</p>
        
            </div>
            
            <div id="footer">
                <div id="social">
                
                <a href="https://www.facebook.com/Computer-Science-Engineers-of-ITM-Raipur-1848937011851111/?ti=as" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
                    
                </div>
                
                <div id="address">
                
                    <p id="address1">ITM University</p>
                    <p id="address2">Uparwara</p>
                    <p id="address3">Atal Nagar</p>
                    <p id="address4">492002</p>
                
                </div>
                
                <img id="poweredby" src="itmmmm2.jpg"><pi id="itms">powered by </p>
                
            </div>
            
          
            
    
    </body>
        

        
        
        
    
    
</html>

    


