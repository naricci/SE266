<form action="#" method="get">
    <fieldset>
        <legend>Form 1: Sort</legend>
        <label>Columns</label>
        <select name="columns">
            <option value="id" selected="selected">ID</option>
            <option value="corp">Corp</option>
            <option value="incorp_d">Date</option>
            <option value="email">Email</option>
            <option value="zipcode">Zip Code</option>
            <option value="owner">Owner</option>
            <option value="phone">Phone</option>
        </select>
        <label>Sort By: </label>
        // Logic to control which radio button is selected/checked
        ASC <input type="radio" name="ascending" value="ASC" checked="checked"/>
        DESC <input type="radio" name="descending" value="DESC" />
        <input type="hidden" name="action" value="Sort" />
        <input type="submit" value="Submit" />
        <input type="reset" value="Reset" />
    </fieldset>
</form>