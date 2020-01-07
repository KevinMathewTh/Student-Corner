<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7bc6d5399d.js" crossorigin="anonymous"></script>
    <title>ISA Student Corner</title>
    <style>

     #homePageContainer {
              
              margin-top: 150px;
            
        }
            
            #containerLoggedInPage {
                
                margin-top: 60px;
                
            }
            
            #logInForm {
                
                display:none;
                
            }
            
            .toggleForms {
                
                font-weight: bold;
                
            }
            
      div.disabled {
    overflow-x: hidden; //horizontal
    overflow-y: scroll; //vertical
}
        .jumb{
            position: absolute;
            top: 35%;
             left: 50%;
            transform: translate(-50%, -50%);
            background: none;
            text-align: center;
            width: 100%;
        }
        .about
        {
          position: relative;
          margin-top: 5%;
          text-align: center;
        }

        .feature-heading{
          color: #89cff0;
        }
        .about-heading{
          color:#57a0d3;
        }
        .work-image{
          margin-top: 60px;
        }
        .work-text{
          margin-top: -350px;
          margin-left: 50px;
          color:white;
          line-height: 75px;
          font-size: 100px;
        }
        .work-text-2{
          font-size:75px;
        }
        .start{
          width:70%;
        }
        .card-block
        {
          padding: 15px;
        }
        .electronics-img{
          height:66%;
        }
        .project{
          background-color: lightslategrey;
          width:100%;
          height:300px;
          text-align: center;
          padding-top:25px;
        }
        .project-desc{
          margin-top: 40px;
        }
        
/*
flip card
*/
.card-flip > div {
  backface-visibility: hidden;
  transition: transform 300ms;
  transition-timing-function: linear;
  width: 100%;
  height: 100%;
  margin: 0;
  display: flex;
}
.card-front {
  transform: rotateY(0deg);
}
.card-back {
  transform: rotateY(180deg);
  position: absolute;
  top: 0;
}
.card-flip:hover .card-front {
  transform: rotateY(-180deg);
}
  
.card-flip:hover .card-back {
  transform: rotateY(0deg);
}
.pr1-img{
background-image: url("linefollower.jpg");
background-size: 100%;
}
.pr2-img{
  background-image: url("smartparking.jpg");
background-size: 100%;
}
.pr3-img{
  background-image: url("nodemcu.jpg");
background-size: 100%;
}
.prj-btn{
  margin-top: -7px;
}
.About-ISA{
  background-color:#4c516d;
  color:lightsteelblue;
  text-align: center;
  width:100%;
  height: 650px;
}
.about-ISA-text{
font-size: 100px;
padding: 30px;;
}
.about-card{
  padding-top:12px;
  padding-bottom:0px;
  padding-left: 50px;
  padding-right: 50px;
}
.img-circle{
  border-radius: 50%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.img-circle:hover{
  width:150px;
  height:150px;
  box-shadow: 10px 8px 16px 10px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.about-card:hover{
  color: lightblue;
  
}
.about-card-title{
  padding: 10px;
  font-size: 30px;
}
body, html {
  height: 100%;
}
.parallax { 
  /* The image used */
  background-image: url("sub2.jpg");
  /* Full height */
  height: 70%; 
  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.subscribe{
  text-align: center;
  padding: 30px;
  width: auto;
  background: rgba(255, 255, 255, 0.7);
}
.footer{
  height:300px;
  width:100%;
  background-color: #1D2951;
}
.footer-box{
  width:100%;
  padding-top: 40px;
}
a{
  text-decoration: none;
  color:white;
}
a:visited{
  color:white;
}
.footer{
  color:white;
}
.message
{
  width:100%;
  height: 80px;
}
.email{
  width:82%;
}
@media only screen and (max-width: 600px) {
  .jumb{
      position: relative;
      top:-155px;
        }

  .jumb .display-1{
    font-size: 50px;
  }
  .jumb .text-muted{
    position: relative;
    top:-17px;
    font-size: 15px;
  }
  .jumb .lead{
    position: relative;
    top:-27px;
    font-size: 19px;
    display: none;
  }
  .jumb .text1
  {
    position: absolute;
            top: 180px;
             left: 50%;
            transform: translate(-50%, -50%);
            background: none;
            text-align: center;
            font-size: 15px;
    
  }
  .about{
    top:-60px;
  }
  .work-text{
          margin-top: -150px;
          margin-left: 50px;
          color:white;
          font-size: 40px;
          line-height: 20px;
        }
        .work-text-2{
          font-size:30px;
        }
        .project .display-1{
          font-size: 60px;
        }
        .project .card-title{
          font-size: 20px;
        }
        .project .card-back .card-title{
          display: none;
        }
        .project .card-back .card-text{
          font-size: 10px;
        }
        .project .card-back .prj-btn{
          font-size: 10px;
        }
        .HApos{
          position: relative;
          left:-12px;
        }
        .about-ISA-text{
          font-size: 63px;
        }
        .About-ISA{
      background-color:#4c516d;
      color:lightsteelblue;
      text-align: center;
      width:100%;
      height: 1200px;
      }
      .subscribe{
        width: 450px;
      }
      .footer{
        
      height:500px;
      width:100%;
      background-color: #1D2951;
}
  .footer-box{
    width:100%;
    padding-top: 30px;
    padding-left: 40px;
  }
  .footer-right{
    padding-top:40px;
  }
  
}
        </style>
  </head>
  <body>