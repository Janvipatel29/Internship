<html>
      <body>
<!--
    Method :
     Get : Get is Default method to pass data in formtag.
           Data will be visible in URL.
           It not secure method to pass sensitive data like Username Password.
           Its usefull for sorting $searching Record.
     Post: Post Secure method to pass sensitive Data.
           Data will be hidden.
   Action: You can spacify page name where data will submit.
-->
<h1> Form Demo </h1>
	<form>
	    <table>
		<tr>
       		    <td>Name : </td>
	            <td><input type="text" name="txt1"/></td>
		</tr>
		<tr>
		    <td>Age : </td>
		    <td><input type="Number" name="txt2"/></td>
		</tr>
		<tr>
		    <td><input type="submit" /></td>
		    <td><input type="reset" /></td>
		</tr>
	    </table>
	</form>

	<h1>Form Post Method Demo</h1>
	<form action="process.php" method="post">
	    <table>
		<tr>
       		    <td>Name : </td>
	            <td><input type="text" name="txt1"/></td>
		</tr>
		<tr>
		    <td>Age : </td>
		    <td><input type="Number" name="txt2"/></td>
		</tr>
		<tr>
		    <td><input type="submit" /></td>
		    <td><input type="reset" /></td>
		</tr>
	    </table>
	</form>
      </body>
</html>
