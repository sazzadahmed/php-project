<?php

class cv {
    public $conn;
    public $data_username='root';
    public $password='';
    public $name='';
    public $email='';
    public $father_name='';
    public $mother_name='';
    public $birth_of_date;
    public $gender='';
    public $marital_status='';
    public $nationality='';
    public $religion='';
    public $present_address='';
    public $permanent_address='';
    public $additionalemail='';
    public $mobile_number='';
    public $facebook_id='';
    public $media='';
    public $schoolname='';
    public $examdatessc='';
    public $resultssc='';
    public $divisionssc='';
    public $ssc='';
    public $collegename='';
    public $examdatehsc='';
    public $resulthsc='';
    public $divisionhsc='';
    public $hsc='';
    public $university='';
    public $examdategraduate='';
    public $resultgraduate='';
    public $divisiongraduate='';
    public $graduate='';
    public $universitypost='';
    public $examdatepostgraduate='';
    public $resultpostgraduate='';
    public $divisionpostgraduate='';
    public $postgraduate='';
    
    public $professionalexperience='';
    public $personalskill='';
    public $technicalskill='';
    public $languageproficiency='';
    public $interest='';
    public $refername='';
    public $referprofession='';
    public $refercontact='';
    public $referarea='';
    public $id;
    
    public function __construct() {
        $servername='localhost';
        $username='root';
        $password='';

                    try {
                  $this->conn = new PDO("mysql:host=$servername;dbname=cv", $username, $password);
                  // set the PDO error mode to exception
                  $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 
                  }
              catch(PDOException $e)
                  {
                  echo "Connection failed: " . $e->getMessage();
                  }

        
    }
    public function prepare($data)
    {
        if(array_key_exists('first_name', $data))
        {
            $this->name=$data['first_name'].$data['sure_name'];
        }
        if(array_key_exists('email', $data))
        {
            $this->email=$data['email'];
        }
        if(array_key_exists('father_name', $data))
        {
            $this->father_name=$data['father_name'];
        }
        if(array_key_exists('mother_name', $data))
        {
            $this->mother_name=$data['mother_name'];
        }
        if(array_key_exists('birth_of_date', $data))
        {
            $this->birth_of_date=$data['birth_of_date'];
        }
        if(array_key_exists('gender', $data))
        {
            $this->gender=$data['gender'];
        }
        if(array_key_exists('maritalstatus', $data))
        {
            $this->marital_status=$data['maritalstatus'];
        }
        if(array_key_exists('nationality', $data))
        {
            $this->nationality=$data['nationality'];
        }
        if(array_key_exists('present_address', $data))
        {
            $this->present_address=$data['present_address'];
        }
        if(array_key_exists('permanent_address', $data))
        {
            $this->permanent_address=$data['permanent_address'];
        }
        if(array_key_exists('emailtext', $data))
        {
            $this->additionalemail=$data['emailtext'];
        }
        if(array_key_exists('mobilenumber', $data))
        {
            $this->mobile_number=$data['mobilenumber'];
        }
        if(array_key_exists('facebookid', $data))
        {
            $this->facebook_id=$data['facebookid'];
        }
        if(array_key_exists('media', $data))
        {
            $this->media=$data['media'];
        }
        if(array_key_exists('schoolname', $data))
        {
            $this->schoolname=$data['schoolname'];
        }
        if(array_key_exists('examdatessc', $data))
        {
            $this->examdatessc=$data['examdatessc'];
        }
        if(array_key_exists('resultssc', $data))
        {
            $this->resultssc=$data['resultssc'];
        }
        if(array_key_exists('divisionssc', $data))
        {
            $this->divisionssc=$data['divisionssc'];
        }
        if(array_key_exists('divisionssc', $data))
        {
            $this->divisionssc=$data['divisionssc'];
        }
        if(array_key_exists('ssc', $data))
        {
            $this->ssc=$data['ssc'];
        }
        if(array_key_exists('collegename', $data))
        {
            $this->collegename=$data['collegename'];
        }
        if(array_key_exists('examdatehsc', $data))
        {
            $this->examdatehsc=$data['examdatehsc'];
        }
        if(array_key_exists('resulthsc', $data))
        {
            $this->resulthsc=$data['resulthsc'];
        }
        if(array_key_exists('divisionhsc', $data))
        {
            $this->divisionhsc=$data['divisionhsc'];
        }
        if(array_key_exists('hsc', $data))
        {
            $this->hsc=$data['hsc'];
        }
        if(array_key_exists('hsc', $data))
        {
            $this->hsc=$data['hsc'];
        }
        if(array_key_exists('university', $data))
        {
            $this->university=$data['university'];
        }
        if(array_key_exists('examdategraduate', $data))
        {
            $this->examdategraduate=$data['examdategraduate'];
        }
        if(array_key_exists('resultgraduate', $data))
        {
            $this->resultgraduate=$data['resultgraduate'];
        }
        if(array_key_exists('divisiongraduate', $data))
        {
            $this->divisiongraduate=$data['divisiongraduate'];
        }
        if(array_key_exists('graduate', $data))
        {
            $this->graduate=$data['graduate'];
        }
        if(array_key_exists('universitypost', $data))
        {
            $this->universitypost=$data['universitypost'];
        }
        if(array_key_exists('examdatepostgraduate', $data))
        {
            $this->examdatepostgraduate=$data['examdatepostgraduate'];
        }
        if(array_key_exists('resultpostgraduate', $data))
        {
            $this->resultpostgraduate=$data['resultpostgraduate'];
        }
        if(array_key_exists('divisionpostgraduate', $data))
        {
            $this->divisionpostgraduate=$data['divisionpostgraduate'];
        }
        if(array_key_exists('postgraduate', $data))
        {
            $this->postgraduate=$data['postgraduate'];
        }
        if(array_key_exists('postgraduate', $data))
        {
            $this->postgraduate=$data['postgraduate'];
        }
        if(array_key_exists('professionalexperience', $data))
        {
            $this->professionalexperience=$data['professionalexperience'];
        }
        if(array_key_exists('personalskill', $data))
        {
            $this->personalskill=$data['personalskill'];
        }
        if(array_key_exists('technicalskill', $data))
        {
            $this->technicalskill=$data['technicalskill'];
        }
        if(array_key_exists('languageproficiency', $data))
        {
            $this->languageproficiency=$data['languageproficiency'];
        }
        if(array_key_exists('interest', $data))
        {
            $this->interest=$data['interest'];
        }
        if(array_key_exists('refername', $data))
        {
            $this->refername=$data['refername'];
        }
        if(array_key_exists('referprofession', $data))
        {
            $this->referprofession=$data['referprofession'];
        }
        if(array_key_exists('refercontact', $data))
        {
            $this->refercontact=$data['refercontact'];
        }
        if(array_key_exists('referarea', $data))
        {
            $this->referarea=$data['referarea'];
        }
        if(array_key_exists('religion', $data))
        {
            $this->religion=$data['religion'];
        }
        
         if(array_key_exists('id', $data))
        {
            $this->id=$data['id'];
        }
        
        
        
    }
    public function store()
    {
        try {
            $query='INSERT INTO per_info(id,name,email,contact'
                    . ',father_name,mother_name,birth_of_date,gender,maritalstatus,nationality'
                    . ',religion,present_address,permanent_address,emailtext'
                    . ',facebookid,media,professionalexperience,personalskill,technicalskill,languageproficiency'
                    . ',interest,refername,referprofession,refercontact,referaddress'
                    . ',schoolname,examdatessc,resultssc,divisionssc,collegename,examdatehsc,resulthsc,divisionhsc'
                    . ',university,examdategraduate,resultgraduate,divisiongraduate,universitypost,examdatepostgraduate,'
                    . 'resultpostgraduate,divisionpostgraduate) '
                    . 'VALUES(:id, :name,:email, :contact,'
                    . ':father_name, :mother_name,:bd,:gender,:m_s,:ntly,:rlgn,:p_a,:pr_a,:e_t'
                    . ',:f_id,:media,:p_ex,:pe_sk,:tcsk,:lanpro,:inter,:refer,:re_pro,:re_cont,:re_ad'
                    . ',:s_n,:e_d_s,:r_ssc,:d_ssc,:clg,:e_d_h,:r_hsc,:d_hsc'
                    . ',:un,:ex_gra,:re_gra,:di_gra,:un_po,:ex_post,:re_po,:di_po)';
            $stmt=  $this->conn->prepare($query);
            $stmt->execute(array(
                    ':id' => null,
                    ':name'=>  $this->name,
                    ':email'=>  $this->email,
                    ':contact'=>  $this->mobile_number,
                    ':father_name'=>  $this->father_name,
                    ':mother_name'=>  $this->mother_name,
                    ':bd'=>  $this->birth_of_date,
                    ':gender'=>  $this->gender,
                    ':m_s'=>$this->marital_status,
                    ':ntly'=>  $this->nationality,
                ':rlgn'=>  $this->religion,
                ':p_a'=>  $this->permanent_address,
                ':pr_a'=>  $this->permanent_address,
                ':e_t'=>$this->additionalemail,
                ':f_id'=>  $this->facebook_id,':media'=>  $this->media,':p_ex'=>  $this->professionalexperience,
                ':pe_sk'=>$this->personalskill,':tcsk'=>  $this->technicalskill,':lanpro'=>  $this->languageproficiency,
                ':inter'=>  $this->interest,':refer'=>  $this->refername,':re_pro'=>  $this->referprofession,':re_cont'=>  $this->refercontact,
                ':re_ad'=>  $this->referarea,
                ':s_n'=>  $this->schoolname,':e_d_s'=>  $this->examdatessc,':r_ssc'=>  $this->resultssc,
                ':d_ssc'=>  $this->divisionssc,':clg'=>  $this->collegename,':e_d_h'=>  $this->examdatehsc,
                ':r_hsc'=>  $this->resulthsc,  ':d_hsc'=>  $this->divisionhsc,
                ':un'=>  $this->university,':ex_gra'=>  $this->examdategraduate,':re_gra'=>  $this->resultgraduate,':di_gra'=>  $this->divisiongraduate,
                ':un_po'=>  $this->universitypost,':ex_post'=>  $this->examdatepostgraduate,':re_po'=>  $this->resultpostgraduate,
                ':di_po'=>  $this->divisionpostgraduate
                    ));
            
            
            
        } catch (Exception $ex) {
            echo $ex->getMessage();
            
        }
    }
    public function index()
    {
        try
        {
            $query='SELECT * FROM per_info';
            $stmt=  $this->conn->query($query);
            $data=$stmt->fetchAll();
            return $data;
        } catch (Exception $ex) {

        }
    }
    public function detail()
    {
        try
        {
            $query='SELECT * FROM per_info where id='.$this->id;
            $stmt=  $this->conn->query($query);
            $data=$stmt->fetchAll();
            return $data;
        } catch (Exception $ex) {

        }
    }
    
  
}
