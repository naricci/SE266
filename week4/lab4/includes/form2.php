    <div class="col-sm-6">
        <form action="#" method="post">
            <fieldset>
                <legend>Form 2: Search Data</legend>
                <label>Columns: </label>
                <select name="column">
                    <option value="id" selected="selected">ID</option>
                    <option value="corp">Corp</option>
                    <option value="incorp_dt">Date</option>
                    <option value="email">Email</option>
                    <option value="zipcode">Zip Code</option>
                    <option value="owner">Owner</option>
                    <option value="phone">Phone</option>
                </select>
                <input type="search" name="search" value="<?php $search; ?>" placeholder="Search..." />
                <input type="hidden" name="action" value="Submit2" />
                <input type="submit" value="Submit" class="btn btn-success" /> 
                <input type="reset" value="Reset" class="btn btn-danger" /><!-- RESET BUTTON -->
            </fieldset>
        </form>
    </div>
</div>
<br />