<p>Lista svih ocjena:</p>

<a href='?controller=marks&action=create'><button type="button" class="btn btn-primary btn-sm">NOVA OCJENA</button></a>
<br>

<table class="table" style="margin-top: 20px;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student ID</th>
      <th scope="col">Ocjena</th>
      <th scope="col">Akcije</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($marks as $mark) { ?>

    <tr>
      <th scope="row"><?php echo $mark->id; ?></th>
      <td><?php echo $mark->student_roll_num; ?></td>
      <td><?php echo $mark->marks; ?></td>
      <td>
          <a href="?controller=marks&action=show&id=<?php echo $mark->id?>"><button type="button" class="btn btn-info btn-sm">Detalji</button></a>
          <a href='?controller=marks&action=edit&id=<?php echo $mark->id; ?>'><button type="button" class="btn btn-primary btn-sm">Uredi</button></a>
          <a href='?controller=marks&action=delete&id=<?php echo $mark->id; ?>'><button type="button" class="btn btn-danger btn-sm">Izbrisi</button></a>

      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>