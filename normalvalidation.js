function val()
{
	var mail=document.getElementById("email").value;
    var phone=document.getElementById("telephone").value;
    var pincode=document.getElementById("pin").value;
    var l=phone/1000000000;
    var name=document.getElementById("name").value;

  if(!isNaN(name))
  {
        document.getElementById("demo").innerHTML="*Invalid Name";
        return false;
  }
  if(mail.charAt(mail.length-4)!=('.')&&mail.charAt(mail.length-3)!=('.'))
	{
        document.getElementById("demo").innerHTML="*Invalid E-mail";
        return false;
	}
  if(isNaN(document.getElementById("telephone").value))
  {
        document.getElementById("demo").innerHTML="*Invalid Number";
        return false;
  }
    if(l<6||l>=10)
  {
        document.getElementById("demo").innerHTML="*Invalid Number";
        return false;
  }
  if(isNaN(pincode))
  {
        document.getElementById("demo").innerHTML="*Invalid Pin Code";
        return false;
  }
  if(pincode.toString().length>6)
  {
        document.getElementById("demo").innerHTML="*Invalid Pin Code";
        return false;
  }

    else
    {
        alert("Click OK to submit form");
        return true;
    }
}
