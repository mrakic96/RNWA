<p>Lista svih studenata:</p>
<a href='?controller=students&action=create'><button type="button" class="btn btn-primary btn-sm">NOVI STUDENT</button></a>
<br>

<table class="table" style="margin-top: 20px;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">Akcije</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($students as $student) { ?>

    <tr>
      <th scope="row"><?php echo $student->roll_num; ?></th>
      <td><?php echo $student->first_name; ?></td>
      <td><?php echo $student->last_name; ?></td>
      <td>
          <a href="?controller=students&action=show&id=<?php echo $student->roll_num?>"><button type="button" class="btn btn-info btn-sm">Detalji</button></a>
          <a href='?controller=students&action=edit&roll_num=<?php echo $student->roll_num; ?>'><button type="button" class="btn btn-primary btn-sm">Uredi</button></a>
          <a href='?controller=students&action=delete&id=<?php echo $student->roll_num; ?>'><button type="button" class="btn btn-danger btn-sm">Izbrisi</button></a>

          <!-- <a href="?controller=students&action=edit&roll_num=<?php echo $student->roll_num?>"> Edit</a> -->
          <!-- <a href='?controller=students&action=delete&id=<?php echo $student->roll_num; ?>'>Delete</a> -->
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>