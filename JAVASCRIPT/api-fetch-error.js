<!DOCTYPE html>
<html>
<body>
<h1>JavaScript Fetch API</h1>
<h2>Handling Errors</h2>

<p id="demo"></p>

<script>
async function loadText(file) {
  const response = await fetch(file);
  if (!response.ok) {
    myDisplayer(response.status + " " + response.statusText);
    return;
  }
  myDisplayer(await response.text());
}

loadText("fetch.txt");

// Function to display any text
function myDisplayer(text) {
  document.getElementById("demo").innerHTML = text;
}
</script>

</body>
</html> 