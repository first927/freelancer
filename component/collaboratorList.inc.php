<?php
    $j = 0;
    while($j < 4){ ?>
<div class="col-md-4">
    <div class="card card-stats show-box" onclick="popupModal(<?php echo $i; ?>)" data-toggle="modal" data-target="#profileModal" >
        <div class="card-header" data-background-color="orange">
            <i class="material-icons">content_copy</i>
        </div>
        <div class="card-content">
            <p class="category">Used Space</p>
            <p><b>Username surname</b></p>
        </div>
        <div class="card-footer">
            <div class="stats">
                <i class="material-icons text-info">info</i> <a href="#pablo" >Get More Profile Detail</a>
            </div>
        </div>
    </div>
</div>
<?php $j++; } ?>
