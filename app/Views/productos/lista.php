

<div class="container"> 

<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
    <h5 class="card-title">Listado de productos</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">created_at</th>
     
    </tr>
  </thead>
  <tbody>
  <?php 
   foreach($datos as $dato):
   ?>
    <tr>
      <th scope="row"><?php echo $dato['id'];?></th>
      <td><?php echo $dato['nombre'];?></td>
      <td><?php echo $dato['created_at'];?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

