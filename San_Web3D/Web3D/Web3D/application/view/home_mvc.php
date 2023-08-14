<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coca Cola Journey</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/all.css">
    <link rel="stylesheet" href="./css/other.css">

   
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <script src="https://www.x3dom.org/release/x3dom.js"></script>
    <link rel="stylesheet" href="https://www.x3dom.org/release/x3dom.css">

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <div class="logo">
        <a class="navbar-brand" href="javascript:swap('home')">
            <h1>1</h1>
            <h1>oca</h1>
            <h2>Cola</h2>   
            <h3>UK</h3>
            <p>Taste the Feeling</p>
        </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active nav-a-home" href="javascript:swap('home')">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-a-about" href="javascript:swap('about')">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-a-models" href="javascript:swap('gallery')">Models</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-a-drinks" href="#" id="navbardrop" data-bs-toggle="dropdown">Drinks</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://www.coca-cola.com/gb/en/brands/diet-coke">Diet Coke</a>
                    <a class="dropdown-item" href="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste">Coca cola</a>
                    <a class="dropdown-item" href="https://www.coca-cola.co.uk/brands/dr-pepper">Dr Pepper</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid main_contents swap-home">
    <div class="row row-splash">
        <div class="col-sm-12">
            <div id="main_3d_image">
                <div id="main_text" class="col-xs-12 col-sm-4"> 
                    <h2>Coca Cola UK</h2>
                    <h3>Founded by Dr John S Pemberton</h3>
                    <p>The Coca-Cola Company is a multinational beverage corporation known for its iconic carbonated soft drink, Coca-Cola. Founded in 1886 by pharmacist John S. Pemberton, the company has since expanded its product portfolio to include a wide range of non-alcoholic beverages, including sodas, juices, energy drinks, and water, and has become a global leader in the beverage industry.</p>
                </div>
            </div>
        </div>
    </div>

   

    <div class="row">
        <div class="col-md-5 ">
            <div class="card">
                <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste">
                    <img class="card-img-top img-fluid" src="Assets/img/diet_coke.webp" alt="diet coke">
                </a>
            </div>
        </div> 
        <div class="col-md-7">
            <div class="card-body">
                <h3 class="card-title">Diet Coke</h3>
                <p class="card-text">
Diet Coke is a sugar-free soft drink that was introduced by The Coca-Cola Company in 1982. Its development and release were influenced by changing consumer preferences and concerns about sugar and calorie consumption</p>
                <a href="https://www.coca-cola.com/gb/en/brands/diet-coke" class="btn btn-primary">Find out more</a>
            </div>
        </div>
    </div>

   

    <div class="row">
        <div class="col-md-5 ">
            <div class="card">
                <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste">
                    <img class="card-img-top img-fluid" src="Assets/img/sprite.webp" alt="sprite">
                </a>
            </div>
        </div> 
        <div class="col-md-7">
            <div class="card-body">
                <h3 class="card-title">Sprite</h3>
                <p class="card-text">Sprite, introduced by The Coca-Cola Company in 1961, is a popular lemon-lime flavored carbonated soft drink known for its crisp and refreshing taste, enjoyed worldwide as a versatile mixer and standalone beverage.</p>
                <a href="https://www.coca-cola.com/gb/en/brands/sprite" class="btn btn-primary">Find out more</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-5 ">
            <div class="card">
                <a href="https://www.coca-cola.co.uk/brands/coca-cola-original-taste">
                    <img class="card-img-top img-fluid" src="Assets/img/dr_pepper.webp" alt="dr pepper">
                </a>
            </div>
        </div> 
        <div class="col-md-7">
            <div class="card-body">
                <h3 class="card-title">Dr pepper</h3>
                <p class="card-text">Dr Pepper, originating in Waco, Texas in the 1880s, is a unique and iconic blend of 23 flavors, cherished for its distinct taste and timeless appeal, making it one of the oldest and most beloved soft drinks in the United States and beyond.</p>
                <a href="https://www.coca-cola.com/gb/en/brands/dr-pepper" class="btn btn-primary">Find out more</a>
            </div>
        </div>
    </div>

   


 
</div>


<div class="container-fluid main_contents swap-about">
    <div class="row render-gallery-wrapper">
        <div class="another-wrapper">
            <div class="carousel slide" id="image-gallery" data-bs-ride="carousel">
                <div class="carousel-indicators">

                </div>
                <div class="carousel-inner">

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#image-gallery" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#image-gallery" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid main_contents swap-gallery">
    <div class='col-lg-12 model-title'><h1> 3D Models</h1></div>
    <div class="row model-display-wrapper">
        <div class="col-lg-8">
            <div class="model-selection-wrapper">
                <ul class="nav nav-pills justify-content-center bg-white">
                    
                    <li class="nav-item">
                        <button class="nav-link active rounded-5 btn_diet" onclick="switchModel('sprite')">sprite</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-5 btn_dr" onclick="switchModel('drpepper')">Dr Pepper</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-5 btn_spr" onclick="switchModel('dietcoke')">dietcoke</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link rounded-5 btn_fanta" onclick="switchModel('cola')">Coca cola</button>
                    </li>
                </ul>
            </div>
            <div class="x3d-wrapper bg-white">
                <x3d class="x3d-app" showStat="true" max-height="600px">
                    <scene>
                        <inline nameSpaceName="Model" mapDEFToID="true" url="models/sprite.x3d"></inline>
                    </scene>
                </x3d>
            </div>
            <div class="description-text-wrapper bg-white">
                <div class="model-description-title">
                    <h2>Diet Cola</h2>
                </div>
                <div class="model-description-subtitle">
                    <h3>World's Diet Favourite</h3>
                </div>
                <div class="model-description-text">
                    <p>Diet Cola Zero is the healthier version of the Coca Cola brand, and is a sugar free beverage that comes in bottles and cans of all sizes.</p>
                </div>
                <div class="model-description-method">
                    <p>This X3D model of the Diet Coke Can has been created in Blender and exported to VRML97, and then using transcoders for display.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="model-controls-wrapper bg-white">
                <div class="model-controls-title">
                    <h2>Controls to the 3D models</h2>
                </div>
                <div class="model-controls-buttons">
                    <div class="btn-group" role="group">
                        <button class="btn btn-secondary disabled">Camera</button>
                        <button class="btn btn-outline-secondary btn-camera-reset" onclick="cameraSet('Main')">Default</button>
                        <button class="btn btn-outline-secondary btn-camera-side" onclick="cameraSet('Side')">Side</button>
                        <button class="btn btn-outline-secondary btn-camera-top" onclick="cameraSet('Top')">Top</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button class="btn btn-secondary disabled">Animation</button>
                        <button class="btn btn-success btn-anim-status" onclick="toggleAnimation()">Playing</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button class="btn btn-secondary disabled">Light</button>
                        <button class="btn btn-outline-secondary active btn-light-scene" onclick="toggleLights('scene')">Scene Lights</button>
                        <button class="btn btn-outline-secondary active btn-light-head" onclick="toggleLights('headlight')">Headlight</button>
                    </div>
                    <div class="btn-group" role="group">
                        <button class="btn btn-secondary disabled">Render</button>
                        <button class="btn btn-outline-secondary btn-render-shaded" onclick="setRender()">Toggle</button>
                        <button class="btn btn-outline-success btn-render-wire disabled">Shaded</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-sm footer">
    <div class="container">
        <div class="navbar-text float-left copyright">
            <p><span class="align-baseline">Sn419  Web Application</span></p>
        </div>

    </div>
</nav>


<script src="https://kit.fontawesome.com/f313f6e042.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="Jscript/home.js"></script>
<script src="Jscript/model_controls.js"></script>
<script src="Jscript/carousel.js"></script>
</body>
</html>