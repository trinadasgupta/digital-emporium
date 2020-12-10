<H1>Checkout Form</H1>
<?php
$total = 399 * $_POST['quantity'];
print "Your total Bill: Rs. $total";
?>
<FORM ACTION = PayPal.php METHOD = POST>
<INPUT TYPE = HIDDEN NAME = quantity VALUE = "<?=$_POST['quantity']?>">
<TABLE>
		<TR>
			<TD>Quantity:</TD>
			<TD><INPUT DISABLED TYPE = TEXT  VALUE = "<?=$_POST['quantity']?>"></TD>
		</TR>
		<TR>
			<TD>Name:</TD>
			<TD><INPUT TYPE = TEXT NAME = fullname></TD>
		</TR>
 		<TR>
			<TD>Phone:</TD>
			<TD><INPUT TYPE = TEXT NAME = phone></TD>
		</TR>
 		<TR>
			<TD>Email:</TD>
			<TD><INPUT TYPE = TEXT NAME = email></TD>
		</TR>
		<TR>
			<TD>Address:</TD>
			<TD><INPUT TYPE = TEXT NAME = address></TD>
		</TR>
		<TR>
			<TD></TD>
			<TD><INPUT TYPE = SUBMIT VALUE = " Proceed to Payment "></TD>
		</TR>
</TABLE>
</FORM>