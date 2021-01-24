<form action="register_db.php" method="post">
            <table>
            <tr>
                <th>User Name</th>
                <td><input type="text" name="user" placeholder="User Name" required="required" /></td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td><input type="text" name="full" placeholder="Full Name" required="required" /></td>
            </tr>
            <tr>
                <th>PassWord</th>
                <td><input type="password" id="pwd"  name="pass" 
                placeholder="Password" pattern="[a-zA-Z\d]{7}"  required="required" /></td>
            </tr>
            <tr>
             <th>ConFirm PassWord</th>
             <td>
             <input type="password"  id="cpwd" name="confirm" 
             placeholder="ConFirm PassWord" 
             pattern="[a-zA-Z\d]{7}" required="required" onblur="Check(this.value)"/>
             </td>
            </tr>
             <!--Function fomula-->
            <tr>
            	<td><p id="error" style="color:#F00"></p></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><input type="radio" name="gen" value="Male" />Male
                <input type="radio" name="gen" value="Female" />Female</td>
            </tr>
            <tr>
            <th>Country</th>
            <td><select name="Country">
               <option>Please select</option>
                <option>Myanmar</option>
                <option>Thailand</option>
                <option>China</option>
                <option>Janpan</option>
                <option>Indian</option>
                </select></td>
            </tr>
            
            <tr>
                <th>User Type</th>
            <td>
                <input type="radio" name="utype" value="Gold"/>Gold&nbsp;&nbsp;&nbsp;
               <input type="radio" name="utype" value="Silver"/> Silver
           </tr>
           <tr>
           <td colspan="2">
           <input type="submit" value="Register" />&nbsp;&nbsp;&nbsp;
           <input type="reset" value="Cancel" />
           </td>
           </tr>     
        </table>
</form>
