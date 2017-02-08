<form action="#" method="get">
    <fieldset>
        <legend>Form 2: Search</legend>
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
        <input name="action" type="hiddn" value="search" placeholder="Search...." />
        <input type="button" value="Submit" name="submit" /> 
        <input type="reset" value="Reset" />
    </fieldset>
</form>
