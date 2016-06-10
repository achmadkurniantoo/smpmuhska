<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif" >
    <title>Gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
     <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->


    

    
</head>
<style>
.col-md-3:nth-child(4n+1) 
{ clear: left;

 }


.mybox{
    
    min-height: 150px;
    max-width: 250px;    
    margin: 0 12px 5px 0; 
    padding-left: 50px;
    margin-top: 60px;

    
    
}

.mybox .desc{
    margin-bottom: 60px;
}


.desc{
    padding-left: 5px;
    text-align: left;

}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
} 

/*Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
    font-size: 14px;
}

/*Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

 /*The Close Button */
.close {
    position: absolute;
    top: 80px;
    left: 1250px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;

}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/*100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
} 



</style>

<body>


    <!-- Navigation -->
<?php
include ("navbar.php");

?>


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/bg.jpg')">
        <div class="container-about">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <big>Gallery <?php echo $title." ".$city?></big>
                        <hr class="small">
                        <span class="subheading">Kumpulan foto kegiatan <?php echo $title." ".$city?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

  <div id="container">

   <div id="body">
      <?php if($images->num_rows() > 0) : ?>
         
        <?php $imgnum = 0; ?>
         <hr />   
         <div class="row">
            <?php foreach($images->result() as $img) : ?>
            <div class="col-xs-6 col-md-3">
                <div class="mybox">
                
               <div class="thumbnails" >
                  <?=img(['src'=>$img->file, 'height'=>'180px', 'width'=>'200px', 'id'=>$imgnum, 'alt'=>$img->description])?>

                   
                 <div class="desc">
                     <h3><?=$img->title?></h3>
                     <h7><?=$img->date?></h7>
                     <p><?=substr($img->description, 0,100)?>...</p>
        </div>
        </div>
<div id="myModal" class="modal">
<span class="close">×</span>
<img class="modal-content" id="img01">
<div id="caption"></div>
</div>
                   </div>
             
            </div>
            <?php $imgnum++; 
            endforeach; ?>
            
         </div>
      
      <?php endif; ?>
   </div>
    <hr>

    <?php
    include ("footer.php");
    ?>
    <script>
//Get the modal
var modal = document.getElementById('myModal');


//Get the image and insert it inside the modal - use its "alt" text as a caption

var jml = document.getElementsByClassName("thumbnails");

for (var i=0; i<jml.length;  i++){

var img = document.getElementById(i);
console.log(i);
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}
}
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var description = document.getElementById("description");


//Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
} 
</script>
    
    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/js/clean-blog.min.js"></script>

</body>

</html>
