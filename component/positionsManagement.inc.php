             <br>
             // เห็นเฉพาะเจ้าของ Project นะจ้ะ //
             <br>
             <div class="card card-nav-tabs">
                <div class="card-header" data-background-color="purple">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Positions Management: </span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="active">
                                 <a href="#profile" data-toggle="tab">
                                    Front-End Programmer
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                            <li class="">
                                <a href="#messages" data-toggle="tab">
                                    Back-End Programmer
                                    <div class="ripple-container"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-content">
                <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                        // List คนสมัครในตำแหน่งนี้ //
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th style="text-align: center;">Username</th>
                                <th style="text-align: center;">RequestDetails</th>
                                <th style="text-align: center;">Email</th>
                                <th style="text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="text-align: center;">John</td>
                            <td style="text-align: center;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal" id="pos1" >View Details</button></td>
                            <td style="text-align: center;">john@example.com</td>
                            <td style="text-align: center;">
                                <div class="btn-group btn-group-md">
                                    <button type="button" class="btn btn-success">Accept</button>
                                    <button type="button" class="btn btn-warning">Reply</button>
                                    <button type="button" class="btn btn-danger">Decline</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">Mary</td>
                            <td style="text-align: center;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal" id="pos2">View Details</button></td>
                            <td style="text-align: center;">mary@example.com</td>
                            <td style="text-align: center;">
                                <div class="btn-group btn-group-md">
                                    <button type="button" class="btn btn-success">Accept</button>
                                    <button type="button" class="btn btn-warning">Reply</button>
                                    <button type="button" class="btn btn-danger">Decline</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">July</td>
                            <td style="text-align: center;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal" id="pos3">View Details</button></td>
                            <td style="text-align: center;">july@example.com</td>
                            <td style="text-align: center;">
                                <div class="btn-group btn-group-md">
                                    <button type="button" class="btn btn-success">Accept</button>
                                    <button type="button" class="btn btn-warning">Reply</button>
                                    <button type="button" class="btn btn-danger">Decline</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="messages">
                // List คนสมัครในตำแหน่งนี้ //
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th style="text-align: center;">Username</th>
                        <th style="text-align: center;">RequestDetails</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">John</td>
                    <td style="text-align: center;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal" id="pos1">View Details</button></td>
                    <td style="text-align: center;">john@example.com</td>
                    <td style="text-align: center;">
                        <div class="btn-group btn-group-md">
                            <button type="button" class="btn btn-success">Accept</button>
                            <button type="button" class="btn btn-warning">Reply</button>
                            <button type="button" class="btn btn-danger">Decline</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center;">OOP RANGER</td>
                    <td style="text-align: center;"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal" id="pos2">View Details</button></td>
                    <td style="text-align: center;">OPERSOKDF@example.com</td>
                    <td style="text-align: center;">
                        <div class="btn-group btn-group-md">
                            <button type="button" class="btn btn-success">Accept</button>
                            <button type="button" class="btn btn-warning">Reply</button>
                            <button type="button" class="btn btn-danger">Decline</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="tab-pane" id="myjob">
        <?php include "myJobList.inc.php" ; ?>
    </div>
    <div class="tab-pane" id="fb">
        <div class="iframe-container hidden-sm hidden-xs">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/e1vknPjU7Sw" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal details -->
<div id="detailsModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Details</h4>
      </div>
      <div class="modal-body">
        <p id="mDetail">Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script>
 $().ready(function(){
    $(".btn-info").click(function (e) {
        e.preventDefault();
        $("#mDetail").text($(this).attr("id"));
        // $(this).hide();

    });
});
</script>