<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>GRACE&SOUL</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
  </head>
  <body>
    <div class="logo">
      <a href="index.html"><img src="logo.png" alt="" width="150px" class="logo-img"></a>
      </div>
      <div class="shop-button">
        <a href="#">SHOP</a>
      </div>
      <div class="search-icon">
        <a href="index-search.html"><img class="search-icon-image" src="search icon.png" width="45px" alt=""> </a>
      </div>
    <div class="cookie-container">
      <p>This website uses cookies to offer visitors the best possible user experience. Information about cookies and their functions you can find in our <a href="#">Privacy Policy</a> or in our a
      <a href="#">cookie Policy</a>. By using our website, you agree to the use of cookies.</p>
      <button class="cookie-btn">
       Im okay with that
      </button>
    </div>
    <div class="navbar">
      <img class="navbar-img" src="navabar.png" alt="" width="45px">
      <div class="navbar-content">
        <a href="#">PRODUCTS</a>
        <a href="releases.html">CATEGORIES</a>
        <a href="#">SIGN_IN</a>
        <a href="#">SIGN_UP</a>
      </div>
    </div>
    <script src="script.js">
    const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 20);
    </script>
    
    <style>
    * {
  background: #ffffff;
  }

  .cookie-container {
    font-family: sans-serif;
    padding: 32px;
    margin: 24px 0;
    line-height: 2;
    position: fixed;
    bottom: 99999px;
    left: 0;
    right: 0;
    background: #2f3640;
    color: #808080;
    padding: 0 32px;
    transition: 400ms;
    box-shadow: 0 -2px 16px #2f3640;
  }

  .cookie-container.active {
    bottom: 0;
  }

  .cookie-container a {
    color: #4d4dff;
  }

  .cookie-btn {
    background: #ff1a1a;
    border: 0;
    padding: 12px 48px;
    font-size: 18px;
    margin-bottom: 8px;
    border-radius: 8px;
    cursor: pointer;
  }

  

  .logo a{
    text-decoration: none;
    color: black;
  }

 .navbar {
font-family: sans-serif;
width: 45px;
position: relative;
bottom: 145px;
 }

 .navbar-content {
   display: none;
   position: relative;
   top: 15px;
 }

 .navbar-content a{
   display: block;
   text-decoration: none;
   color: #000;
   font-weight: bolder;
   padding: 5px;
   font-size: 25px;
 }

 .navbar:hover .navbar-content {
   display: block;
 }

 .navbar-img {
   width: 50px;
 }

 .shop-button {
  text-align: center;
  position: relative;
  top: 200px;
  font-family: sans-serif;
  font-size: 50px;
 }

 .shop-button a{
   color: #000;
   text-decoration: none;

 }

 .search-icon a{
   position: relative;
   float: right;
   bottom: 140px;
 }

}
/*Moto G4, iphone6/7/8, Galaxy S5 HORIZONTAL*/  @media only screen and (max-width:375px) {
.logo {
  text-align: center;
  font-family: sans-serif;
  font-size: 35px;
  font-weight: bolder;
  color: black;
}

.logo-img {
  width: 100px;
}

.logo a{
  text-decoration: none;
  color: black;
}
.navbar {
font-family: sans-serif;
width: 45px;
position: relative;
bottom: 115px;
}

.navbar-content {
  display: none;
  position: relative;
  top: 15px;
}

.navbar-content a{
  text-decoration: none;
  color: #000;
  font-weight: bolder;
  padding: 5px;
  font-size: 25px;
}


.navbar-img {
  width: 49px;
}
.shop-button {
 text-align: center;
 position: relative;
 top: 200px;
 font-family: sans-serif;
 font-size: 40px;
}

.shop-button a{
  color: white;
  text-decoration: none;
}

.search-icon {

}

.search-icon a{
  position: relative;
  float: right;
  bottom: 115px;
  padding-right: 4px;
}
.search-icon-image {
  width: 47px;
}

}

/*Moto G4, iphone6/7/8/X, Galaxy S5/Fold, pixel 2/XL WERTIKAL*/  @media only screen and (max-width:850px) and (max-height:450px) {

.logo {
  text-align: center;
  font-size: 35px;
  font-family: sans-serif;
  font-weight: bolder;
  color: black;
}

.logo a{
  text-decoration: none;
  color: black;
}
.navbar {
font-family: sans-serif;
width: 45px;
position: relative;
bottom: 102px;
}

.navbar-content {
  display: none;
  position: relative;
  top: 15px;
}

.navbar-content a{
  text-decoration: none;
  color: white;
  font-weight: bolder;
  padding: 5px;
  font-size: 25px;
}


.navbar-img {
  width: 49px;
}
.shop-button {
 text-align: center;
 position: relative;
 top: 130px;
 font-family: sans-serif;
 font-size: 30px;
}

.shop-button a{
  color: white;
  text-decoration: none;
}

.search-icon {

}

.search-icon a{
  position: relative;
  float: right;
  bottom: 100px;
  padding-right: 4px;
}
.search-icon-image {
  width: 47px;
}

}
    </style>
  </body>
</html>
