function validate()
{
var chks = document.getElementsByName('setuju');
var hasChecked = false;
for (var i = 0; i < chks.length; i++)
{
	if (chks[i].checked)
	{
	hasChecked = true;
	break;
	}
}

if (hasChecked == false)
	{
	alert("Please select at least one.");
	return false;
	}

return true;
}