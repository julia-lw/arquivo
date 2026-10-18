<!DOCTYPE html>
<html>
<body>
<h1>JavaScript Fetch API</h1>
<h2>Fetching a Text File</h2>

<p id="demo"></p>

<script>
let file = "fetch.txt";

// Fetch a file
fetch(file)
  .then(response => response.text())
  .then(data => myDisplayer(data));

// Function to display any text
function myDisplayer(text) {
  document.getElementById("demo").innerHTML = text;
}
</script>

</body>
</html> 