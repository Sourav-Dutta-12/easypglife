

<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_detail.css" rel="stylesheet" />
    <link href="css/common1.css" rel="stylesheet">
  </head>

  <body>

    <?php
      
      include "includes/header.php";


    ?>

    <div class="breadcrumb-container" >
        <nav aria-label="breadcrumb " >
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a class="breadcrumb-link" href="index.php">Home</a></li>
                <li class="breadcrumb-item "><a class="breadcrumb-link" href="#">Mumbai</a></li>
            </ul>
        </nav>
    </div>


<div class="page-container">
    <div class="filter-bar row justify-content-space-around"> 
        <div class="col-4"  data-toggle="modal" data-target="#filter-modal">
            <img src="img/filter.png" class="filter-img" height="30px" width="30px">
            <label for="filter" >filter</label> 
        </div>

        <div class="col-4 " data-toggle="modal" data-taget="#filter-modal">
            <img src="img/desc.png" class="filter" height="30px" width="30px">
            <label for="filter" >Highest rent first</label> 
        </div>

        <div class="col-4" data-toggle="modal" data-taget="#filter-modal">
            <img src="img/asc.png" class="filter" alt="sort-asc">
            <label for="filter" >Lowest rent first</label> 
        </div>
        
    </div>

    

    <div class="property-card row ">

        <div class="image-container col-md-4">
            <img src="img/properties/1/1d4f0757fdb86d5f.jpg" />
        </div>

        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="4.5">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="interested-container">
                    <i class="far fa-heart"></i>
                    <div class="interested-text">3 interested</div>
                </div>

            </div>

            <div class="detail-container">
                <div class="detail-text">
                    <h4>Navkar Paying Guest</h3>
                    <p>44, Juhu Scheme, Juhu, Mumbai, Maharashtra 400058</p>
                    <div class="gender">
                        <img src="img/male.png" width="45px">
                    </div>
                </div>

            </div>

            <div clas=" rent-details row no-gutters">
                <div class="rent-container col-auto justify-content-between">
                    <div class="rent">Rs 9,500/-</div>
                    <div class="rent-unit">per month</div>
                    <div class="button-container col-6">
                        <a class="btn btn-primary" href="#">view</a>
    
                    </div> 

                </div>
                

                
            </div>

        </div>

      

    </div>


    
    <div class="property-card row ">

        <div class="image-container col-md-4">
            <img src="img/properties/1/1d4f0757fdb86d5f.jpg" />
        </div>

        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="4.5">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="interested-container">
                    <i class="far fa-heart"></i>
                    <div class="interested-text">3 interested</div>
                </div>

            </div>

            <div class="detail-container">
                <div class="detail-text">
                    <h4>Ganpati Paying Guest</h3>
                    <p>Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar, Borivali East, Mumbai - 400066</p>
                    <div class="gender">
                        <img src="img/male.png" width="45px">
                    </div>
                </div>

            </div>

            <div clas=" rent-details row no-gutters">
                <div class="rent-container col-auto justify-content-between">
                    <div class="rent">Rs 9,500/-</div>
                    <div class="rent-unit">per month</div>
                    <div class="button-container col-6">
                        <a class="btn btn-primary" href="#">view</a>
    
                    </div> 

                </div>

            </div>

        </div>
    </div>


    
    <div class="property-card row ">

        <div class="image-container col-md-4">
            <img src="img/properties/1/1d4f0757fdb86d5f.jpg" />
        </div>

        <div class="content-container col-md-8">
            <div class="row no-gutters justify-content-between">
                <div class="star-container" title="4.5">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                </div>

                <div class="interested-container">
                    <i class="far fa-heart"></i>
                    <div class="interested-text">3 interested</div>
                </div>

            </div>

            <div class="detail-container">
                <div class="detail-text">
                    <h4>PG for Girls Borivali West</h3>
                    <p>Plot no.258/D4, Gorai no.2, Borivali West, Mumbai, Maharashtra 400092</p>
                    <div class="gender">
                        <img src="img/female.png" width="45px">
                    </div>
                </div>

            </div>

            <div clas=" rent-details row no-gutters">
                <div class="rent-container col-auto justify-content-between">
                    <div class="rent">Rs 9,500/-</div>
                    <div class="rent-unit">per month</div>
                    <div class="button-container col-6">
                        <a class="btn btn-primary" href="#">view</a>
    
                        </div> 

                    </div>    
                </div>
            </div>
       </div>

    </div>

    <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-heading" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="filter-heading">Filters</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span area-hidden="true">&times;</span>
                    </button>
        
                </div>

                <div class="modal-body">
                    <h5>Gender</h5>
                    <hr/>

                    <div>
                        <button class="btn btn-outline-dark btn-active">
                            No Filter
                        </button>

                        <button class="btn btn-outline-dark ">
                            <i class="fas fa-venus-mars">Unisex</i>
                        </button>
                        <button class="btn btn-outline-dark">
                            <i class="fas fa-mars"></i>Male
                        </button>
                        <button class="btn btn-outline-dark">
                            <i class="fas fa-venus"></i>Female
                        </button>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success" data-dismiss="modal">Okay</button>
                </div>

            </div>

        </div>

    </div>

    
    <?php

    include "includes/footer.php";

    ?>




<?php 

 include "includes/signup_modal.php";

?>


<?php
   include "includes/login_modal.php";

?>

        
   
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/common.js"> </script>
  </body>
</html>