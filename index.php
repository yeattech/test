<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="author" content="Jonathan">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="Gundam Nation">
  <link rel="stylesheet" href="style/style.css" />
  <script src="script/main.js" defer></script>
  <script src="script/script.js"></script>
  <title>Gundam Nation | Welcome</title>
</head>

<body onload=display_ct();>
  <div class="scrollTop" onclick="scrollToTop();">Back To Top</div>
  <?php include 'header.php'; ?>









  <div class="homepage">
    <div class="container">
      <div>
        <p class="welcome">Welcome to The Gundam Nation!</p>
      </div>
      <div>
        <p class="purpose">The Gundam information center where you can dive in and find information of your favourite Gundam and characters.</p>
      </div>
    </div>
  </div>

  <div class="youtube_video">
    <h2>Watch the latest series of Gundam on Youtube!</h2>
    <div class="wrapper">
      <div class="video-wrapper">
        <iframe src="https://www.youtube-nocookie.com/embed/O3NUuJI1xLU" title="SD GUNDAM WORLD HEROES-Episode 24-Chosen Future-Sub" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="news_gundam">
    <h2>Latest News of Gundam!</h2>
    <table class="index-table">
      <tr>
        <th><a href="https://en.gundam.info/news/event/02_4579.html"><img src="image/oct01.jpg" class="index-table-pic" alt="Gundaminfo-link1"></a></th>
        <th><a href="https://en.gundam.info/news/info/02_4588.html"><img src="image/sep30.jpg" class="index-table-pic" alt="Gundaminfo-link2"></a></th>
        <th><a href="https://en.gundam.info/news/gunpla/01_5686.html"><img src="image/sep23.jpg" class="index-table-pic" alt="Gundaminfo-link3"></a></th>
      </tr>
      <tr>
        <td><a href="https://en.gundam.info/news/event/02_4579.html">
            <p>Gundam Factory Yokohama Online Tour Backyard Tour Mission 0!<br><br><span>October 01,2021</span></p>
          </a></td>
        <td><a href="https://en.gundam.info/news/info/02_4588.html">
            <p>GUNDAM.INFO October Streaming Calendar Has Been Updated!<br><br><span>September 30,2021</span></p>
          </a></td>
        <td><a href="https://en.gundam.info/news/gunpla/01_5686.html">
            <p>SDW HEROES Wukong Impulse Gundam DX Set Shipping Today!<br><br><span>September 23,2021</span></p>
          </a></td>
      </tr>
    </table>

  </div>
  <div class="container-information-adjust-divider">
    <span id='ct' class="time"></span>
  </div>
  <?php include 'footer.php'; ?>

</body>

</html>