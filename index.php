<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Docker - QSFC7</title>
</head>
<body>
  <?php
    $result = file_get_contents('http://node-container:9001/products');
    $products = json_decode($result);
  ?>

  <h1>Produtos</h1>
  <div class="container">
    <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Preço</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $product): ?>
        <tr>
          <td><?php echo $product->name ?></td>
          <td><?php echo $product->price ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  </div>
</body>
</html>
