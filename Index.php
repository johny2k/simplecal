<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <link rel="stylesheet" href="css/custom.css">
    <title>A Simple PHP Calculator</title>
  </head>
  <body>
    <h2>A simple php calculator</h2>
    <form action="functions.php" method="get">
      <input type="text" name="number01" plaeholder="Insert number here">
      <select name="opt">
        <label>Select here</label>
        <option value="add">Add</option>
        <option value="sub">Substract</option>
      </select>
      <input type="text" name="number02" placeholder="Insert number here">
      <button type="submit">Calculate!</button>
    </form>
  </body>
</html>
