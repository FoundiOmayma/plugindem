<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="row g-3" method="post" action="http://localhost/wp_tuto/wp-login.php" enctype="multipart/form-data">
        <div class="col-md-6">
        <label for="urlTitle" class="form-label">URL Title</label>
        <input type="text"  name="titleurl" class="form-control" id="urlTitle" placeholder="url title">
        </div>
        <div class="col-md-6">
        <label for="urlLogo" class="form-label">URL Logo</label>
        <input type="text" class="form-control" name="logourl" id="urlLogo" placeholder="url logo">
        </div>
        <div class="row g-3">
            <div class="col-4">
            <label for="bgImage" class="form-label">Bg image</label>
            <input type="file" class="form-control" name="bgimg" id="bgImage">
            </div>
        </div>
        <div class="col-4">
        <label for="logoImage" class="form-label">logo image</label>
        <input type="file" class="form-control" id="logoImage" name="logoimg">
        </div>
        <div class="row g-3">
            <div class="col-md-6 range-wrap">
            <label for="arrondissement" class="form-label">Arrondissement</label>
            <input type="range" class="range" value="10" min="1" max="20" class="form-control" name="foo"  id="arrondissement">
            <output for="foo" class="bubble" onforminput="value = foo.valueAsNumber;"></output>

            </div>
        </div>   

        <div class="col-md-4">
        <label for="btncolor" class="form-label">Button color</label>
        <input type="color" name="btncolor" class="form-control form-control-color" id="btncolor">

        </div>
        <div class="row g-3">
            <div class="col-md-3">
                <label for="" >Remember me : </label>
                <label for="yes">Yes</label>
                <input type="radio" name="rememberme" class="form-control" value="Yes" id="yes">
                <label for="no">No</label>
                <input type="radio" name="rememberme" class="form-control" value="No" id="no">
            </div>
        </div>   
        <div class="col-12">
        <button type="submit" name="btnsave" class="btn btn-primary">Save</button>
        </div>
        </form>
    </div>
    <script>
       const allRanges = document.querySelectorAll(".range-wrap");
allRanges.forEach(wrap => {
  const range = wrap.querySelector(".range");
  const bubble = wrap.querySelector(".bubble");

  range.addEventListener("input", () => {
    setBubble(range, bubble);
  });
  setBubble(range, bubble);
});

function setBubble(range, bubble) {
  const val = range.value;
  const min = range.min ? range.min : 0;
  const max = range.max ? range.max : 100;
  const newVal = Number(((val - min) * 100) / (max - min));
  bubble.innerHTML = val;

  // Sorta magic numbers based on size of the native UI thumb
  bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
}
    </script>
</body>
</html>


