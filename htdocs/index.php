<?php
  $directory = 'images/';
  $images = glob($directory . '*.{jpg,jpeg,png,gif,heic,JPG,JPEG,PNG,GIF,HEIC}', GLOB_BRACE);
  $randomImage = $images[array_rand($images)];
?>
<!-- RIP Little Man, 2/20/2024 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sleep Good, Bud</title>
<style>
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden;
    background-color: black;
  }
  .fullscreen-image {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
  }
</style>
</head>
<body>
  <img src="<?php echo $randomImage; ?>" alt="Random Image of Little Man" class="fullscreen-image">
</body>
</html>
