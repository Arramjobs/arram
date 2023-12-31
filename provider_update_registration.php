

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <style>
        .bg-primary{
            background-color: rgb(16, 16, 99) !important;
        }
        <style>
      body {
  font-family: Arial, sans-serif;
  background-color: #f1f1f1;
  margin: 0;
  padding: 0;
  margin-left:-200px;
  margin-right:290px;
}

.container {
  background-color: #fff;
  padding: 30px;
  border-radius: 5px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  width: 50%; 
  margin: 50px auto; 
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  margin-left:-120px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
}

.error {
  color: red;
  margin-top: 5px;
}

/* Form input styles */
.form-control {
  border-radius: 3px;
  border: 1px solid #ccc;
  padding: 10px;
}

.form-control-file {
  border: 1px solid #ccc;
  padding: 10px;
}

/* Form button style */
.btn-primary {
  background-color: #4285f4;
  border: none;
}

.btn-primary:hover {
  background-color: #2d76d9;
}


.form-control[type="file"] {
  border: none;
  background-color: transparent;
  color: #4285f4;
  cursor: pointer;
}

button[type="submit"] {
  width: 100%;
  margin-top: 20px;
  padding: 12px;
  font-weight: bold;
}
#wid{
    width: 100%;
}


 
    </style>
</head>
<body >
    <div class="containers">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    
   <br>
   <br>
   <div class="containers px-4 text-center">
    <div class="row gx-5">
      <div class="col">
       
      </div>
    
    </div>
  </div>
  <h2><center>Update Profile</center></h2>
    <div class="container">
        <!-- <h2 class="text-white bg-secondary rounded-5 ms-5 me-5 shadow">Provider Registration Form</h2> -->
        <!-- <h3 class="d-inline-flex p-2 ms-5 me-1 bg-info text-white rounded-3 shadow">Provider Registration Form</h3> -->
        
        <div>
        
       
        <!-- <h4 class="grid-text-center d-flex justify-content-start text-dark bg-secondary bg-opacity-5 rounded-3 ms-5 me-5 mt-3"><center>Company Details</center></h4> -->
        <div class="text-center p-2 border bg-secondary rounded-3  bg-opacity-75 ms-5 me-5 text-white fs-5">Company Details</div>
        <form  name="forms" >
       
            <div class=" mb-3 mt-4  ms-5 me-5 w-55  ">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control"  id="name" name="name" placeholder="enter name" onkeypress="return allowOnlyLetters(event, this)">
                <p id="nameerr"  style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="phno" class="form-label">Mobile Number:</label>
                <input type="number" class="form-control"  id="phno" name="phno">
                <p id="pherr"  style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="email" class="form-label" >Email-ID:</label>
                <input type="email" class="form-control"  id="email" name="email" placeholder="enter email">
                <p id="mailerr" style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="addr" class="form-label" >Address:</label>
                <input type="address" class="form-control"  id="addr" name="addr" placeholder="enter address">
                <p id="adderr" style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="file" class="form-label" >Logo:</label>
                <input type="file" class="form-control" id="file" name="file" required>
                <p id="logerr" style="color: red;"></p>
            </div>
            <br>
            <!-- <h3 class=" grid-text-center d-flex justify-content-start text-dark bg-light bg-opacity-50 rounded-3 ms-5 me-5 mt-3"><center>Contact person details</center></h3> -->
            <!-- <div class="grid-text-center p-2 border bg-light  rounded-1 ms-5 me-5">Contact person details</div> -->
             <div class="text-center p-2 border bg-secondary rounded-3  bg-opacity-75 ms-5 fs-5 me-5 text-light">Contact person details</div>
            
            <div class="mb-3 mt-4  ms-5 me-5 w-55 " >
                <label for="name1" class="form-label">Name:</label>
                <input type="text" class="form-control"  id="name1" name="name1" placeholder="enter name" onkeypress="return allowOnlyLetters1(event, this)">
                <p id="nameerr1"  style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="phno1" class="form-label">Mobile Number:</label>
                <input type="number" class="form-control"  id="phno1" name="phno1">
                <p id="pherr1"  style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="mail1" class="form-label">Email-ID:</label>
                <input type="email" class="form-control"  id="mail1" name="mail1" placeholder="enter email">
                <p id="mailerr1" style="color: red;"></p>
            </div>
            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                <label for="role" class="form-label">Role:</label>
                <input type="text" class="form-control"  id="role" name="role" placeholder="enter role">
                <p id="rolerr" style="color: red;"></p>
            </div> 
            <div>
                <button class="btn bg-primary ms-5 mt-3 mb-5  text-white" onclick="return group()"><center>Submit</center></button>
                
            </div>
        </form>
       </div>
    </div>
    <br>
    <br>
   

  
   
 </div>  
 <!-- <script src="regvalid.js"></script> -->
 <script type="text/javascript">
      function allowOnlyLetters(e, t)   
  {    
   if (window.event)    
   {    
      var charCode = window.event.keyCode;    
   }    
   else if (e)   
   {    
      var charCode = e.which;    
   }    
  else {
   return true; }   

    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)) {
   
    document.getElementById("nameerr").innerHTML = "";
    document.forms.phno.focus();
   return true;
} 
else if(((charCode > 48) && (charCode < 57))){
    
    document.getElementById("nameerr").innerHTML = "Numbers not allowed Please enter only letters";
    document.forms.name.focus();
    return false;

} 
  }
  
  function allowOnlyLetters1(e, t)   
  {    
   if (window.event)    
   {    
      var charCode = window.event.keyCode;    
   }    
   else if (e)   
   {    
      var charCode = e.which;    
   }    
  else {
   return true; }   

    if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)) {
   
    document.getElementById("nameerr1").innerHTML = "";
    document.forms.phno1.focus();
   return true;
} 
else if(((charCode > 48) && (charCode < 57))){
    
    document.getElementById("nameerr1").innerHTML = "Numbers not allowed Please enter only letters";
    document.forms.name1.focus();
    return false;

} 
  }
  
    
function group()
{
    var x=document.forms.name.value;
    var p=document.forms.phno.value;
    var a=document.forms.email.value;
    var y=document.forms.addr.value;
    var l=document.forms.file.value;
    var x1=document.forms.name1.value;
    var p1=document.forms.phno1.value;
    var a1=document.forms.mail1.value;
    var r=document.forms.role.value;

    if(x != "")
    {
        if(x.length<4)
        {
            document.getElementById("nameerr").innerHTML="* Name should be in atleast 4 characters";
            return false;
        }
        else if(x.length>50)
        {
            document.getElementById("nameerr").innerHTML="* Name should not exceed 50 characters";
            return false;
        }
        else{
            document.getElementById("nameerr").innerHTML="";
            
        }
    }
    else if(x=="")
    {
        var namesms1="* Name must be filled out";
        document.getElementById("nameerr").innerHTML=namesms1;
        document.forms.name.focus();
        return false;
    }

     if(p !="" )
     {
        if(p.length!==10)
        {
            document.getElementById("pherr").innerHTML="Phone number  must be in 10 digits";
            return false;
        }
        else if(p.length>11)
        {
         document.getElementById("pherr1").innerHTML="phone number should not exceed 10 digits";
         return false;
        }
      
        else{
            document.getElementById("pherr").innerHTML="";
            
        }
    }  
    
     else if(p=="")
     {
        var phsms="phone number must be filled out";
        document.getElementById("pherr").innerHTML=phsms;
        document.forms.phno.focus();
        return false;
        
    }

    if(a=="")
     {
         var emailsms="email must be filled out";
         document.getElementById("mailerr").innerHTML=emailsms;
         document.forms.email.focus();
         return false;
     }
     else if(a!="")
     {
         // document.getElementById("mailerr").innerHTML="";
        /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
         if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a))
         {
             document.getElementById("mailerr").innerHTML="";
             // return (true);
         }
         else{
             document.getElementById("mailerr").innerHTML="you have entered an invalid email address";
             return false;
         }
     }   

     if(y!="")
     {
         if(y.length<11)
         {
             document.getElementById("adderr").innerHTML="* Address should be in atleast 10 characters";
             return false;
         }
         else if(y.length>35)
         {
             document.getElementById("adderr").innerHTML="* Address should not exceed 35 characters";
             return false;
         }
         else
         {
             document.getElementById("adderr").innerHTML="";
         }
     }
     else 
     {
         var adderr = "* Address must be in filled out";
         document.getElementById("adderr").innerHTML=adderr;
         document.forms.addr.focus();
         return false;
     }

     
    if(x1 != "")
    {
        if(x1.length<4)
        {
            document.getElementById("nameerr1").innerHTML="* Name should be in atleast 4 characters";
            return false;
        }
        else if(x1.length>50)
        {
            document.getElementById("nameerr1").innerHTML="* Name should not exceed 50 characters";
            return false;
        }
        else{
            document.getElementById("nameerr1").innerHTML="";
            
        }
    }
    if(l=="")
    {
        var logsms="*Please upload your file";
        document.getElementById("logerr").innerHTML=logsms;
        document.forms.file.focus();
        return false;
    }
    else{
        document.getElementById("logerr").innerHTML="";
        
    }
    if(x1=="")
    {
        var namesms2="* Name must be filled out";
        document.getElementById("nameerr1").innerHTML=namesms2;
        document.forms.name1.focus();
        return false;
    }

    if(p1 !="" )
    {
       if(p1.length!==10)
       {
           document.getElementById("pherr1").innerHTML="Phone number  must be in 10 digits";
           return false;
       }
       else if(p1.length>11)
       {
        document.getElementById("pherr1").innerHTML="phone number should not exceed 10 digits";
        return false;
       }
     
       else{
           document.getElementById("pherr1").innerHTML="";
           
       }
   }  
   
    else if(p1=="")
    {
       var phsms1="phone number must be filled out";
       document.getElementById("pherr1").innerHTML=phsms1;
       document.forms.phno1.focus();
       return false;
       
   }

  
    if(a1=="")
    {
        var emailsms1="email must be filled out";
        document.getElementById("mailerr1").innerHTML=emailsms1;
        document.forms.mail1.focus();
        return false;
    }
    else if(a1!="")
    {
        // document.getElementById("mailerr").innerHTML="";
       /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a1))
        {
            document.getElementById("mailerr1").innerHTML="";
            // return (true);
        }
        else{
            document.getElementById("mailerr1").innerHTML="you have entered an invalid email address";
            return false;
        }
    }   

    if(r!="")
     {
          if(y.length>50)
         {
             document.getElementById("rolerr").innerHTML="* Address should not exceed 50 characters";
             return false;
         }
         else
         {
             document.getElementById("rolerr").innerHTML="";
         }
     }
     else 
     {
         var adderr = "* role must be in filled out";
         document.getElementById("rolerr").innerHTML=adderr;
         document.forms.role.focus();
         return false;
     }
  }
 

    


 
 </script>
</body>
</html>