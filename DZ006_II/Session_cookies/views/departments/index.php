<p>Lista svih odjela:</p>

<a href='?controller=departments&action=create'><button type="button" class="btn btn-primary btn-sm">NOVI ODJEL</button></a>


<table class="table" style="margin-top: 20px;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ime odjela</th>
      <th scope="col">Akcije</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach($departments as $department) { ?>

      <tr>
        <th scope="row"><?php echo $department->id; ?></th>
        <td><?php echo $department->name; ?></td>
        <td>
            <a href="?controller=departments&action=show&id=<?php echo $department->id?>"><button type="button" class="btn btn-info btn-sm">Detalji</button></a>
            <a href='?controller=departments&action=edit&id=<?php echo $department->id; ?>'><button type="button" class="btn btn-primary btn-sm">Uredi</button></a>
            <a href='?controller=departments&action=delete&id=<?php echo $department->id; ?>'><button type="button" class="btn btn-danger btn-sm">Izbrisi</button></a>

        </td>
      </tr>
      
    <?php } ?>

  </tbody>
</table>