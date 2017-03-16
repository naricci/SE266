<div class="row">
    <div class="col-sm-6">
        <form action="#" method="post">
            <fieldset>
                <legend>Form 1: Sort Data</legend>
                <label>Sort By: </label>
                <!-- Logic to control which radio button is selected/checked -->
                ASC <input type="radio" name="order" value="ASC" 
                    <?php if ($order == 'ASC'): ?>
                        checked="checked" 
                    <?php endif; ?>
                        />
                DESC <input type="radio" name="order" value="DESC"
                    <?php if ($order == 'DESC'): ?>
                        checked="checked" 
                    <?php endif; ?>
                       /> 
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
                <input type="hidden" name="action" value="Submit1" />
                <input type="submit" value="Submit" class="btn btn-success" />
                <input type="reset" value="Reset" class="btn btn-danger"/><!-- RESET BUTTON -->
            </fieldset>
        </form>
    </div>