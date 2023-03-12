
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex, follow">
<title><?=$data['title']?></title>
<style>@font-face{ font-family: 'Montserrat'; font-style: normal; font-weight: 500; font-display: swap; src: url(/fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw0aXpsog.woff2) format('woff2'); unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;} @font-face{ font-family: 'Montserrat'; font-style: normal; font-weight: 500; font-display: swap; src: url(/fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw9aXpsog.woff2) format('woff2'); unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;} @font-face{ font-family: 'Montserrat'; font-style: normal; font-weight: 500; font-display: swap; src: url(/fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw2aXpsog.woff2) format('woff2'); unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;} @font-face{ font-family: 'Montserrat'; font-style: normal; font-weight: 500; font-display: swap; src: url(/fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw3aXpsog.woff2) format('woff2'); unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;} @font-face{ font-family: 'Montserrat'; font-style: normal; font-weight: 500; font-display: swap; src: url(/fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw5aXo.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>
<style>@font-face{ font-family: 'Titillium Web'; font-style: normal; font-weight: 700; font-display: swap; src: url(/fonts.gstatic.com/s/titilliumweb/v15/NaPDcZTIAOhVxoMyOr9n_E7ffHjDGIVzY4SY.woff2) format('woff2'); unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;} @font-face{ font-family: 'Titillium Web'; font-style: normal; font-weight: 700; font-display: swap; src: url(/fonts.gstatic.com/s/titilliumweb/v15/NaPDcZTIAOhVxoMyOr9n_E7ffHjDGItzYw.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;} @font-face{ font-family: 'Titillium Web'; font-style: normal; font-weight: 900; font-display: swap; src: url(/fonts.gstatic.com/s/titilliumweb/v15/NaPDcZTIAOhVxoMyOr9n_E7ffEDBGIVzY4SY.woff2) format('woff2'); unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;} @font-face{ font-family: 'Titillium Web'; font-style: normal; font-weight: 900; font-display: swap; src: url(/fonts.gstatic.com/s/titilliumweb/v15/NaPDcZTIAOhVxoMyOr9n_E7ffEDBGItzYw.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>
<style>*{-webkit-box-sizing:border-box;box-sizing:border-box}body{padding:0;margin:0}#notfound{position:relative;height:100vh}#notfound .notfound{position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.notfound{max-width:767px;width:100%;line-height:1.4;padding:0 15px}.notfound .notfound-404{position:relative;height:150px;line-height:150px;margin-bottom:25px}.notfound .notfound-404 h1{font-family:titillium web,sans-serif;font-size:186px;font-weight:900;margin:0;text-transform:uppercase;background:url(../img/text.png);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-size:cover;background-position:center}.notfound h2{font-family:titillium web,sans-serif;font-size:26px;font-weight:700;margin:0}.notfound p{font-family:montserrat,sans-serif;font-size:14px;font-weight:500;margin-bottom:0;text-transform:uppercase}.notfound a{font-family:titillium web,sans-serif;display:inline-block;text-transform:uppercase;color:#fff;text-decoration:none;border:none;background:#5c91fe;padding:10px 40px;font-size:14px;font-weight:700;border-radius:1px;margin-top:15px;-webkit-transition:.2s all;transition:.2s all}.notfound a:hover{opacity:.8}@media only screen and (max-width:767px){.notfound .notfound-404{height:110px;line-height:110px}.notfound .notfound-404 h1{font-size:120px}}</style>
</head>
<body>
<div id="notfound">
<div class="notfound">
<div class="notfound-404">
<h1>404</h1>
</div>
<h2>Oops! This Page Could Not Be Found</h2>
<p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable</p>
<a href="#">Go To Homepage</a>
</div>
</div>

</body>
</html>
