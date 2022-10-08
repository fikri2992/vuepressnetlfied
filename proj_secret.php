<!DOCTYPE html>
<html>
<body>

<p>Tunggu 5 Detik Untuk melihat pesan rahasia</p>

<h1 id="test_secret"></h1>

<script>
async function myDisplay() {
  let myPromise = new Promise(function(resolve) {
    setTimeout(function() {resolve("Hacktoberfest");}, 5000);
  });
  document.getElementById("test_secret").innerHTML = await myPromise;
}

myDisplay();
</script>

</body>
</html>
