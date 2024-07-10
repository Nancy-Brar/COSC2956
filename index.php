<?php 
    $title = "Home Page";
    require_once "./includes/header.php"
?>
<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="receive.php" class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" required>
            </div>
            
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" required>
            </div>
            
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="inputCity" required>
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
                <label for="inputZip" class="form-label">Area Code</label>
                <input type="text" name="province" class="form-control" id="inputZip" required>
            </div>
            
            <div class="col-12">
                <button type="submit" name="area_code" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form method="post" action="delete.php" class="row g-3">
                <div class="d-flex col-md-12 ">
                    <input type="text" name="id" class="col-md- 2 form-control" 
                    style="background-color: lightgreen; color: green; border-radius: 0;"
                    id="inputZip" placeholder="Primary Key" required>
                    
                    <button type="submit" name="area_code" 
                    style="background-color: red; color: white; border: 0; border-radius: 0;"
                    class="col-md-10 btn btn-primary">Click this button to delete record.</button>
                </div>    
            </form>
        </div>
    </div>
</div>

<?php 
    require_once "./includes/footer.php"
?>