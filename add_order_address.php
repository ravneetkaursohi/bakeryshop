<?php
include "connection.php";
include "user_header.php";
?>
<div class="container">
    <h2>Add Shipping Address Detail </h2>
    <form class="form-horizontal" action="add_order_address_action.php" method="post">
<div class="form-group">
    Location
    <textarea rows="5" cols="22" class="form-control" name="location"></textarea>
</div>
<div class="form-group">
    Apartment
    <textarea rows="5" cols="22" class="form-control" name="apartment"></textarea>
</div>
<div class="form-group">
    City
    <input type="text" class="form-control" name="city">
</div>
<div class="form-group">
    State
    <select class="form-control" name="state">
        <option value="">Choose One</option>
        <option>Punjab</option>
    </select>
</div>
<div class="form-group">
    Contact No.
    <input type="text" name="cno" class="form-control"/>
</div>
<div class="form-group">
    <input type="submit" value="SUBMIT" class="btn btn-primary"/>
</div>
</form>
</div>
