<!DOCTYPE html>
<html>
<body>
<h1>JavaScript Fetch API</h1>
<h2>Response url Property</h2>

<p id="demo"></p>

<script>
// Async function to download a file
async function loadText(file) {
  const response = await fetch(file);
  myDisplayer(response.url);
}

// Call the async function
loadText("fetch.txt");

// Function to display any text
function myDisplayer(text) {
  document.getElementById("demo").innerHTML = text;
}
</script>

</body>
</html> 