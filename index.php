<?php
require_once "./includes/header.php"
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form method="post" action="receive.php" class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" required>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" name="address"  required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">City</label>
          <input type="text" class="form-control" id="inputCity" name="city" required>
        </div>
        <div class="col-md-4">
          <label for="inputProvince" class="form-label">Province</label>
          <select id="inputProvince" class="form-select" name="province" required>
            <option value="" disabled selected>Choose...</option>
            <option selected>Choose...</option>
            <option>Alberta</option>
            <option>British Columbia</option>
            <option>Manitoba</option>
            <option>New Brunswick</option>
            <option>Newfoundland</option>
            <option>Labrador Northwset Territories</option>
            <option>Nova Scotia</option>
            <option>Nunavut</option>
            <option>Ontario</option>
            <option>Prince Edward Island</option>
            <option>Quebec</option>
            <option>Saskatchewan</option>
            <option>Yukon</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="inputAreaCode" class="form-label">Area Code</label>
          <input type="text" class="form-control" id="inputAreaCode" name="area_code" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="container">
          <div class="row justify-content-center mt-5">
              <div class="col-8">
                <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>
              </div>
          </div>
        </div>
        <div class="d-flex">
          <span class="input-group-text ">Primary Key</span>
          <a href='delete_record.php?id=<?php echo $row['client_id']; ?>' class='btn btn-danger'>To delete a record, click this button</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
require_once "./includes/footer.php"
?>
