// เห็นเฉพาะ Freelance นะจ้ะ //
<br>
<button type="button" id="toggleButton" class="btn btn-primary" data-toggle="collapse" data-target="#positions">Register to this job</button>

<div id="positions" class="collapse">
  <h4 class="title">Our positions 
    <div class="btn-group btn-group-sm">
      <button type="button" class="btn btn-success selectAvailable">Available</button>
      <button type="button" class="btn btn-dafault selectUnavailable">Unavailable</button>
      <button type="button" class="btn btn-warning selectAll">All</button>
    </div>
  </h4>

  <button type="button" value="job1" class="btn btn-success active buttonAvailable">Front-End Programmer (Javascript, HTML, CSS)</button>
  <button type="button" value="job2" class="btn btn-default disabled buttonUnavailable">Back-End Programmer (PHP, blah blah blah)</button>
  <button type="button" value="job3" class="btn btn-success active buttonAvailable">Front-End Programmer</button>
  <button type="button" value="job4" class="btn btn-default disabled buttonUnavailable">Back-End Programmer (PHP, blah blah blah)</button>
  <button type="button" value="job5" class="btn btn-default disabled buttonUnavailable">Back-End Programmer (PHP, blah blah blah)</button>
  <button type="button" value="job6" class="btn btn-default disabled buttonUnavailable">Back-End Programmer</button>
  <button type="button" value="job7" class="btn btn-success active buttonAvailable">Front-End Programmer (Javascript, HTML, CSS)</button>
  <button type="button" value="job8" class="btn btn-default disabled buttonUnavailable">Back-End Programmer (PHP, blah blah blah)</button>    
</div>

<div class="collapse" id="agreementCollapseInReg">
  <?php include 'component/addAgreement.inc.php'; ?>
</div>


<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(".buttonAvailable").click(function (e) {
           // $(this).text("lerpso");
           e.preventDefault();
            // alert($(this).attr("id"));
            // confirm("Do you wanna register to "+$(this).attr("id")+" ?");
            // $("#agreementCollapse").collapse("hide");
            $("#agreementCollapseInReg #addAgreementJobID").text(<?php echo $pID; ?>);
            // $("#addAgreementJobName").text();
            $("#agreementCollapseInReg #addAgreementPosID").text($(this).attr("value"));
            $("#agreementCollapseInReg").collapse("show");
          });
  $("#agreementCollapseInReg #addAgreementBtnCancel").click(function (e){
            $("#agreementCollapseInReg").collapse("hide");
  });
  $(".selectAvailable").click(function (e) {
    e.preventDefault();
    $(".buttonAvailable").show(499);
    $(".buttonUnavailable").hide(499);
  });
  $(".selectUnavailable").click(function (e) {
    e.preventDefault();
    $(".buttonAvailable").hide(499);
    $(".buttonUnavailable").show(499);
  });

</script>