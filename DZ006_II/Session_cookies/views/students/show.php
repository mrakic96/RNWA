

<div class="card" style="width: 18rem;">
  <div class="card-body">
  	    <h5 class="card-title">DETALJI</h5>
  	<br>

    <p class="card-text">ID: <?php echo $student->roll_num; ?></p>
    <p class="card-text">Ime: <?php echo $student->first_name; ?></p>
    <p class="card-text">Prezime: <?php echo $student->last_name; ?></p>
    <p class="card-text">Broj tel.: <?php echo $student->phone; ?></p>
    <p class="card-text">Datum prijema: <?php echo $student->admission_date; ?></p>
    <p class="card-text">Prosjek ocjena: <?php echo $student->cet_marks; ?></p>
<!--     <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
 -->  </div>
</div>
