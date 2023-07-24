function validate()
    {
        var name = document.getElementById("Name");
        var degree = document.getElementById("Degree");
        var enroll_Num = document.getElementById("enrollNumber");
        var year = document.getElementById("AcedamicYear");
        var email = document.getElementById("emailAddress");
        var contact_Num = document.getElementById("contactNumber");
        var age = document.getElementById("Age");
        var gender = document.getElementById("Gender");
        var date = document.getElementById("date");
        var time = document.getElementById("time");
        var mentor = document.getElementById("Mentor");
        var level = document.getElementById("Level");
        
        var emailpattern = /^([a-z 0-9\.-]+)@([a-z 0-9 -]+).([a-z]{2,8})(.{a-z}{2,8})?$/ ;

        if(name.value.trim() =="" || degree.value.trim() =="" || enroll_Num.value.trim() =="" || year.value.trim() =="" || 
            email.value.trim() =="" || contact_Num.value.trim() =="" || age.value.trim() =="" || gender.value.trim() =="" || 
            date.value.trim() =="" || time.value.trim() =="" || mentor.value.trim() =="" || level.value.trim() =="")
        {
            alert("No empty space are allowed!");
            return false;            
        }
        else if(!emailpattern.test(email))
        {
            alert("Invalid Email!");
            return false;
        }  
        else
        {
            true;
        }  
    }