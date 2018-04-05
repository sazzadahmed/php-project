<!DOCTYPE html>
<html>
    <haed>
        <title>Resume Processing</title>
        <link type="text/css" rel="stylesheet" href="Css/index.css"/>
        <link type="text/css" rel="stylesheet" href="Css/addtion.css"/>
        <script type="text/javascript" src="Js/index.js"></script>
    </haed>
    <body>
        <h2 style="text-alignment:center">Employee Resistration Form</h2>
        <form name="cv" action="View/store.php"method="post"style="border:3px solid transperant;padding:20px 100px,20px 50px;margin:10px 10px;"onsubmit="return validateForm()">
            <div class="full_width">
                <div class="group floatleft" style="width:45%;margin-right:7%">
                    <label>First Name<span style="color: red">**</span></label>
                <br/>
                <input type="text" name="first_name" required="">
                </div>
                 <div class="group floatright"style="width:45%">
                <label>Sure Name<span style="color: red">**</span></label><br/>
                 <input type="text" name="sure_name" required="">
                 </div>
                <div class="group floatclear">
                 <label>Email<span style="color: red">**</span></label>
                 <br/>
                 <input type="email" name="email" required>
                </div>
            </div>
            <div class="full_width">
                <h3>Personal Details</h3>
                <div class="group floatleft" style="width:45%;margin-right:7%">
                <label>Father Name<span style="color: red">**</span></label>
                <input type="text" name="father_name" required/>
                </div>
                <div class="group floatright"style="width:45%">
                <label>Mother Name<span style="color: red">**</span></label>
                <input type="text" name="mother_name" required/>
                </div>
                <div class="group floatleft"style="width:45%;margin-right:9%">
                <label>Birth of Date<span style="color: red">**</span></label>
                <br/>
                <input type="date" name="birth_of_date" required/>
                </div>
                <div class="group floatleft"style="width:45%;min-height: 42px;">
                <label>Gender<span style="color: red">**</span></label>
                <select name="gender">
                    
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                </div>
                <div class="group floatclear"/>
                <div class="width30 floatleft group">
                <label>Marital Status<span style="color: red">**</span></label>
                <br/>
                <select name="maritalstatus">
                    <option value="married">Married</option>
                    <option value="unmarried">Unmarried</option>
                </select>
                </div>
                <div class="width30 floatleft group">
                <label>Nationality<span style="color: red">**</span></label>
                <br/>
                <select name="nationality">
                    <option value="bangladeshi">Bangladeshi</option>
                    <option value="others">Others</option>
                </select>
                </div>
                <div class="width30 floatleft group">
                <label>Religion<span style="color: red">**</span></label>
                <br/>
                <select name="religion">
                    <option value="islam">Islam</option>
                    <option value="hinduism">Hinduism</option>
                    <option value="buddhism">Buddhism</option>
                    <option value="christ">Christ</option>
                    <option value="other">Other</option>
                </select>
                </div>
                </div>
                <br/><br/>
                <div class="group">
                <label>Present Address<span style="color: red">**</span></label>
                <br/>
                <textarea name="present_address"></textarea>
                <br/><br/>
                </div>
                <div class="group">
                <lebel>Permanet Address<span style="color: red">**</span></lebel>
                <br/>
                <textarea name="permanent_address"></textarea>
                </div>
                <div class="group">
                <label>Additional Email(If available)</label>
                <input type="text" name="emailtext"/>
                </div>
                <div class="group">
                <label>Mobile Number<span style="color: red">**</span></label>
                <input type="text" name="mobilenumber"required=/>
                </div>
                <div class="group">
                <label>Facebook Id(If available)</label>
                <input type="text" name="facebookid"/>
                </div>
                <div class="group">
                <label>Other Social Media(If available)</label>
                <input type="text" name="media"/>
                </div>
                
                <h3>Academic Qualification</h3>
                <h4>SCC</h4>
                <div class="group" style="border:1px solid #ddd;overflow: hidden">
                <div class="group floatleft" style="width:45%;margin-right:7%">
                <label>Name Of The School<span style="color: red">**</span></label>
                <input type="text" name="schoolname" required/>
                </div>
                <div class="group floatright"style="width:45%">
                <label>Passing Year<span style="color: red">**</span></label>
                <input type="text" name="examdatessc" required/>
                </div>
                 <div class="group floatleft" style="width:45%;margin-right:9%">
                <label>Result/Cgpa<span style="color: red">**</span></label>
                <br/>
                <input type="text" name="resultssc" class="demo" required/>
                </div>
                <div class="group floatleft"style="width:45%;min-height: 42px;">
                <label>Division/Group<span style="color: red">**</span></label>
                <select name="divisionssc">
                    <option value="science">Science</option>
                    <option value="arts">Arts</option>
                    <option value="commerce">Commerce</option>
                </select>
                </div>
                 <input type="hidden" name="ssc" value="ssc"/>
                </div>
                
                 <h4>HSC</h4>
                <div class="group" style="border:1px solid #ddd;overflow: hidden">
                <div class="group floatleft" style="width:45%;margin-right:9%">
                <label>Name Of The College<span style="color: red">**</span></label>
                <input type="text" name="collegename" required/>
                </div>
                <div class="group floatright"style="width:45%">
                <label>Passing Year<span style="color: red">**</span></label>
                <input type="text" name="examdatehsc" required/>
                </div>
                 <div class="group floatleft" style="width:45%;margin-right:9%">
                <label>Result/Cgpa<span style="color: red">**</span></label>
                <br/>
                <input type="text" name="resulthsc"class="demo" required/>
                </div>
                <div class="group floatleft"style="width:45%;min-height: 42px;">
                <label>Division/Group<span style="color: red">**</span></label>
                <select name="divisionhsc">
                    <option value="science">Science</option>
                    <option value="arts">Arts</option>
                    <option value="commerce">Commerce</option>
                </select>
                </div>
                </div>
                 <input type="hidden" name="hsc" value="ssc"/>
                
                 
                 <h4>Graduate</h4>
                <div class="group" style="border:1px solid #ddd;overflow: hidden">
                <div class="group floatleft" style="width:45%;margin-right:9%">
                <label>Name Of The Institute/University<span style="color: red">**</span></label>
                <input type="text" name="university" required/>
                </div>
                <div class="group floatright"style="width:45%">
                <label>Passing Year<span style="color: red">**</span></label>
                <input type="text" name="examdategraduate" required/>
                </div>
                 <div class="group floatleft" style="width:45%;margin-right:9%">
                <label>Result/Cgpa<span style="color: red">**</span></label>
                <br/>
                <input type="text" name="resultgraduate" class="demo" required/>
                </div>
                <div class="group floatleft"style="width:45%;min-height: 42px;">
                <label>Division/Group<span style="color: red">**</span></label>
                <select name="divisiongraduate">
                    <option value="science">Science</option>
                    <option value="arts">Arts</option>
                    <option value="commerce">Commerce</option>
                </select>
                </div>
                </div>
                  <input type="hidden" name="graduate" value="graduate"/>
                  
                     <h4>Post-Graduate<span style="color: red">**</span></h4>
                <div class="group" style="border:1px solid #ddd;overflow: hidden">
                <div class="group floatleft" style="width:45%;margin-right:9%">
                <label>Name Of The Institute/University<span style="color: red">**</span></label>
                <input type="text" name="universitypost" required/>
                </div>
                <div class="group floatright"style="width:45%">
                <label>Passing Year<span style="color: red">**</span></label>
                <input type="text" name="examdatepostgraduate" required/>
                </div>
                 <div class="group floatleft" style="width:45%;margin-right:9%">
                <label>Result/Cgpa<span style="color: red">**</span></label>
                <br/>
                <input type="text" name="resultpostgraduate" class="demo" required/>
                </div>
                <div class="group floatleft"style="width:45%;min-height: 42px;">
                <label>Division/Group<span style="color: red">**</span></label>
                <select name="divisionpostgraduate">
                    <option value="science">Science</option>
                    <option value="arts">Arts</option>
                    <option value="commerce">Commerce</option>
                </select>
                </div>
                </div>
                      <input type="hidden" name="postgraduate" value="postgraduate"/>
                      </div>
               <div class="extra_full_width">
                 <div style="float: left;width:50%">
                <h3>Professional Experience: </h3>
                
                <textarea name="professionalexperience"> </textarea>
                </div>
                <div style="float: left;width:50%">
                <h3>Personal Skills and Qualities:</h3>
                 <textarea name="personalskill"> </textarea>
                 </div>
                   <div style="float: left;width:50%">
                 <h3>Technical Skills:</h3>
                 <textarea name="technicalskill"> </textarea>
                   </div>
                 <div style="float: left;width:50%">
                 <h3>Language Proficiency:  </h3>
                 <textarea name="languageproficiency"> </textarea>
                 </div>
                 <div style="clear:both;width:50%">
                  <h3>Interest: </h3>
                 <textarea name="interest"> </textarea>
                 </div>
                   
                
                
            </div>
            
            
            <h3>Reference:</h3>
            <div class="extra_full_width"style="width:100%;border:2px solid #fff">
                <div class="refer">
                     <div class="full_width"style="border:2px solid #ddd; min-height:300px;">
                <div class="group floatleft" style="width:45%;margin-right:7%">
                <label>Name<span style="color: red">**</span></label>
                <br/>
                <input type="text" name="refername" required="">
                </div>
                 <div class="group floatright"style="width:45%">
                <label>Profession<span style="color: red">**</span></label><br/>
                 <input type="text" name="referprofession" required="">
                 </div>
                  <div class="group floatleft" style="width:45%;margin-right:7%">
                <label>Contact<span style="color: red">**</span></label>
                <br/>
                <input type="text" name="refercontact" required="">
                </div>
                 <div class="group floatright"style="width:45%">
                <label>Adress<span style="color: red">**</span></label><br/>
                <textarea name="referarea"style="width:98%"></textarea>
                 </div>
                    </div>
                </div>
            </div>
            
            <div class="extra_full_width"style="border:2px solid #fff">
                    <div style="width:100%;text-align:right">
                     
            <input type="submit" value="Make Resume"/>
             </div>
            </div>
           
        </form>
        <script>
function validateForm() {
 var a = document.getElementsByClassName('demo');
  console.log(a.length);
  for(var b=0;b<4;b++)
  {
      var d=a[b].value;
      if(isNaN(d))
      {
          alert('Cgpa should be valid');
          return false;
      }
  }
    return true;
}
        </script>
            
        
    </body>
</html>