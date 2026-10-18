<!DOCTYPE html>
<html>
<body>
<h1>JavaScript Fetch API</h1>
<h2>Fetching a Text File</h2>

<p id="demo"></p>

<script>
// Async function to download a file
async function loadText(file) {
  const response = await fetch(file);
  myDisplayer(await response.text());
}

loadText("fetch.txt");
myDisplayer("JavaScript continues.");

// Function to display any text
function myDisplayer(text) {
  document.getElementById("demo").innerHTML += text;
}
</script>

</body>
</html> 