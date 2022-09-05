<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeInformation;
use App\Models\BasicInformation;
use App\Models\BankInformation;
use App\Models\JobInformation;
use App\Models\PreviousCompany;
use App\Models\UniversityInfo;
use App\Models\CollegeInfo;
use App\Models\SchoolInfo;
use App\Models\NomineeInfo;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function allEmployee(){
        $allemployee = EmployeeInformation::all();
        return response()->json($allemployee);
    }
    
    //addEmployee
    public function addEmployee(Request $request){

        $request->validate([
            'employeeId' => 'required',
            'email' => 'required|email',
            'fullName' => 'required',
            'phone' => 'required',
            'department'=>'required',
            'password' => 'required',            
        ]);

        $allemployee = EmployeeInformation::insert([
            'employeeId' => $request->employeeId,
            'email' => $request->email,
            'fullName' => $request->fullName,
            'phone' => $request->phone,
            'department' => $request->department,
            'password' => bcrypt($request->password),  
            'created_at' =>Carbon::now(),          
        ]);
        return response()->json([
            'success' => 'Success', 
            'Employee' => $allemployee,           
        ]);
    }

    //editEmployee
    public function editEmployee($id){
        $editemployee = EmployeeInformation::findOrFail($id);
        return response()->json($editemployee);
    }

    //updateEmployee
    public function updateEmployee(Request $request, $id){
        EmployeeInformation::findOrFail($id)->update([
            'employeeId' => $request->employeeId,
            'email' => $request->email,
            'fullName' => $request->fullName,
            'phone' => $request->phone,
            'department' => $request->department,
            'password' => bcrypt($request->password),  
            'updated_at' =>Carbon::now(), 
        ]);
        return response()->json([
            'Updated' => 'successfull',
        ]);
    }

    //deleteEmployee
    public function deleteEmployee($id){
        EmployeeInformation::findOrFail($id)->delete();
        return response()->json([
            "Delete" => "successfull",
        ]);
    }
    
    //allBasicInfo
    public function allBasicInfo(){
        $allBasicInfo = BasicInformation::all();
        return response()->json($allBasicInfo, 200);
    }

    //addBasicInfo    
    public function addBasicInfo(Request $request){
        $request->validate([
            'fatherName' => 'required',
            'motherName' => 'required',
            'religion' => 'required',
            'maritalStatus' => 'required',
            'bloodGroup'=>'required',            
            'birthDate' => 'required',
            'temporaryAddrees' => 'required',
            'parmanentAddress' => 'required',
            'nid' => 'required',
        ]);

        $basicInfo = new BasicInformation();
        $basicInfo->fatherName = $request->fatherName;
        $basicInfo->motherName = $request->motherName;
        $basicInfo->religion = $request->religion;
        $basicInfo->maritalStatus = $request->maritalStatus;
        $basicInfo->bloodGroup = $request->bloodGroup;
        $basicInfo->telephoneNo = $request->telephoneNo;
        $basicInfo->birthDate = $request->birthDate;
        $basicInfo->temporaryAddrees = $request->temporaryAddrees;
        $basicInfo->parmanentAddress = $request->parmanentAddress;
        $basicInfo->nid = $request->nid;
        $basicInfo->passport = $request->passport;
        $basicInfo->insuranceNo = $request->insuranceNo;
        $basicInfo->created_at = Carbon::now();
        $basicInfo->save();

        return response()->json([
            'message' => true,
        ], 201);
    }

    //editBasicInfo
    public function editBasicInfo($id){
        $editBasicInfo = BasicInformation::findOrFail($id);
        return response()->json($editBasicInfo);
    }

    //updateBasicInfo
    public function updateBasicInfo(Request $request, $id){
        BasicInformation::findOrFail($id)->update([
            'fatherName' => $request->fatherName,
            'motherName' => $request->motherName,
            'religion' => $request->religion,
            'maritalStatus' => $request->maritalStatus,
            'bloodGroup' => $request->bloodGroup,
            'telephoneNo' => $request->telephoneNo,  
            'birthDate' => $request->birthDate,  
            'temporaryAddrees' => $request->temporaryAddrees,  
            'parmanentAddress' => $request->parmanentAddress,  
            'nid' => $request->nid,  
            'passport' => $request->passport,  
            'insuranceNo' => $request->insuranceNo,  
            'updated_at' =>Carbon::now(), 
        ]);
        return response()->json([
            'Updated' => 'successfull',
        ]);
    }

    //deleteBasicInfo
    public function deleteBasicInfo($id){
        BasicInformation::findOrFail($id)->delete();
        return response()->json([
            "Delete" => "successfull",
        ]);
    }

    //allBankInfo
    public function allBankInfo(){
        $allBankInfo = BankInformation::all();
        return response()->json($allBankInfo);
    }
    
    //addBankInfo
    public function addBankInfo(Request $request){

        $request->validate([
            'bankName' => 'required',
            'bankAccNumber' => 'required',
            'bankBranceName' => 'required',
            'providentFundAcc' => 'required',            
        ]);
        $addBankInfo = BankInformation::insert([
            'bankName' => $request->bankName,
            'bankAccNumber' => $request->bankAccNumber,
            'bankBranceName' => $request->bankBranceName,
            'providentFundAcc' => $request->providentFundAcc,  
            'created_at' =>Carbon::now(),          
        ]);
        return response()->json([
            'success' => 'Success', 
            'Bank Information' => $addBankInfo,           
        ]);
    }

    //editBankInfo
    public function editBankInfo($id){
        $editBankInfo = BankInformation::findOrFail($id);
        return response()->json($editBankInfo);
    }

    //updateBankInfo
    public function updateBankInfo(Request $request, $id){
        BankInformation::findOrFail($id)->update([
            'bankName' => $request->bankName,
            'bankAccNumber' => $request->bankAccNumber,
            'bankBranceName' => $request->bankBranceName,
            'providentFundAcc' => $request->providentFundAcc, 
            'updated_at' =>Carbon::now(), 
        ]);
        return response()->json([
            'Updated' => 'successfull',
        ]);
    }

    //deleteBankInfo
    public function deleteBankInfo($id){
        BankInformation::findOrFail($id)->delete();
        return response()->json([
            "Deleted" => "successfull",
        ]);
    }

    //allJobInfo
    public function allJobInfo(){
        $allJobInfo = JobInformation::all();
        return response()->json($allJobInfo);
    }
    
    //addJobInfo
    public function addJobInfo(Request $request){

        $request->validate([
            'jobType' => 'required',
            'designation' => 'required',
            'salary' => 'required',
            'registrationDate' => 'required',
            'joinDate' => 'required',            
        ]);
        $addJobInfo = JobInformation::insert([
            'jobType' => $request->jobType,
            'designation' => $request->designation,
            'salary' => $request->salary,
            'registrationDate' => $request->registrationDate,  
            'joinDate' => $request->joinDate,  
            'resignDate' => $request->resignDate,  
            'confirmationDate' => $request->confirmationDate,  
            'salaryIncrementDate' => $request->salaryIncrementDate,  
            'created_at' =>Carbon::now(),          
        ]);
        return response()->json([
            'success' => 'Success', 
            'Bank Information' => $addJobInfo,           
        ]);
    }

    //editJobInfo
    public function editJobInfo($id){
        $editJobInfo = JobInformation::findOrFail($id);
        return response()->json($editJobInfo);
    }

    //updateJobInfo
    public function updateJobInfo(Request $request, $id){
        JobInformation::findOrFail($id)->update([
            'jobType' => $request->jobType,
            'designation' => $request->designation,
            'salary' => $request->salary,
            'registrationDate' => $request->registrationDate,  
            'joinDate' => $request->joinDate,  
            'resignDate' => $request->resignDate,  
            'confirmationDate	' => $request->confirmationDate	,  
            'salaryIncrementDate' => $request->salaryIncrementDate, 
            'updated_at' =>Carbon::now(), 
        ]);
        return response()->json([
            'Updated' => 'successfull',
        ]);
    }

    //deleteJobInfo
    public function deleteJobInfo($id){
        JobInformation::findOrFail($id)->delete();
        return response()->json([
            "Deleted" => "successfull",
        ]);
    }

    //allPreviousComp
    public function allPreviousComp(){
        $allPreviousComp = PreviousCompany::all();
        return response()->json($allPreviousComp);
    }
    
    //addPreviousComp
    public function addPreviousComp(Request $request){

        $request->validate([
            'companyName' => 'required',
            'workDuration' => 'required',
            'resignCause' => 'required',                        
        ]);
        $addPreviousComp = PreviousCompany::insert([
            'companyName' => $request->companyName,
            'workDuration' => $request->workDuration,
            'resignCause' => $request->resignCause,             
            'created_at' =>Carbon::now(),          
        ]);
        return response()->json([
            'success' => 'Success', 
            'Bank Information' => $addPreviousComp,           
        ]);
    }

    //editPreviousComp
    public function editPreviousComp($id){
        $editPreviousComp = PreviousCompany::findOrFail($id);
        return response()->json($editPreviousComp);
    }

    //updatePreviousComp
    public function updatePreviousComp(Request $request, $id){
        PreviousCompany::findOrFail($id)->update([
            'companyName' => $request->companyName,
            'workDuration' => $request->workDuration,
            'resignCause' => $request->resignCause,
            'updated_at' =>Carbon::now(), 
        ]);
        return response()->json([
            'Updated' => 'successfull',
        ]);
    }

    //deletePreviousComp
    public function deletePreviousComp($id){
        PreviousCompany::findOrFail($id)->delete();
        return response()->json([
            "Deleted" => "successfull",
        ]);
    }

    //allUniversity
    public function allUniversity(){
        $allUniversity = UniversityInfo::all();
        return response()->json($allUniversity);
    }
    
    //addUniversity
    public function addUniversity(Request $request){

        $request->validate([
            'instituteName' => 'required',
            'passingYear' => 'required',
            'result' => 'required',                        
            'academicSession' => 'required',                        
        ]);
        $addUniversity = UniversityInfo::insert([
            'instituteName' => $request->instituteName,
            'passingYear' => date('Y-m-d', strtotime($request->passingYear)),
            'result' => $request->result,             
            'academicSession' => $request->academicSession,             
            'created_at' =>Carbon::now(),          
        ]);
        return response()->json([
            'success' => 'Success', 
            'Bank Information' => $addUniversity,           
        ]);
    }

    //editUniversity
    public function editUniversity($id){
        $editUniversity = UniversityInfo::findOrFail($id);
        return response()->json($editUniversity);
    }

    //updateUniversity
    public function updateUniversity(Request $request, $id){
        UniversityInfo::findOrFail($id)->update([
            'instituteName' => $request->instituteName,
            'passingYear' => $request->passingYear,
            'result' => $request->result,             
            'academicSession' => $request->academicSession, 
            'updated_at' =>Carbon::now(), 
        ]);
        return response()->json([
            'Updated' => 'successfull',
        ]);
    }

    //deleteUniversity
    public function deleteUniversity($id){
        UniversityInfo::findOrFail($id)->delete();
        return response()->json([
            "Deleted" => "successfull",
        ]);
    }

    //allCollege
    public function allCollege(){
        $allCollege = CollegeInfo::all();
        return response()->json($allCollege);
    }
    
    //addCollege
    public function addCollege(Request $request){

        $request->validate([
            'instituteName' => 'required',
            'passingYear' => 'required',
            'result' => 'required',                        
            'academicSession' => 'required',                        
        ]);
        $addCollege = CollegeInfo::insert([
            'instituteName' => $request->instituteName,
            'passingYear' => date('Y-m-d', strtotime($request->passingYear)),
            'result' => $request->result,             
            'academicSession' => $request->academicSession,             
            'created_at' =>Carbon::now(),          
        ]);
        return response()->json([
            'success' => 'Success', 
            'Bank Information' => $addCollege,           
        ]);
    }

    //editCollege
    public function editCollege($id){
        $editCollege = CollegeInfo::findOrFail($id);
        return response()->json($editCollege);
    }

    //updateCollege
    public function updateCollege(Request $request, $id){
        CollegeInfo::findOrFail($id)->update([
            'instituteName' => $request->instituteName,
            'passingYear' => $request->passingYear,
            'result' => $request->result,             
            'academicSession' => $request->academicSession, 
            'updated_at' =>Carbon::now(), 
        ]);
        return response()->json([
            'Updated' => 'successfull',
        ]);
    }

    //deleteCollege
    public function deleteCollege($id){
        CollegeInfo::findOrFail($id)->delete();
        return response()->json([
            "Deleted" => "successfull",
        ]);
    }

    //allSchooly
    public function allSchooly(){
        $allSchooly = SchoolInfo::all();
        return response()->json($allSchooly);
    }
    
    //addSchooly
    public function addSchooly(Request $request){

        $request->validate([
            'instituteName' => 'required',
            'passingYear' => 'required',
            'result' => 'required',                        
            'academicSession' => 'required',                        
        ]);
        $addSchooly = SchoolInfo::insert([
            'instituteName' => $request->instituteName,
            'passingYear' => date('Y-m-d', strtotime($request->passingYear)),
            'result' => $request->result,             
            'academicSession' => $request->academicSession,             
            'created_at' =>Carbon::now(),          
        ]);
        return response()->json([
            'success' => 'Success', 
            'Bank Information' => $addSchooly,           
        ]);
    }

    //editSchooly
    public function editSchooly($id){
        $editCollege = SchoolInfo::findOrFail($id);
        return response()->json($editCollege);
    }

    //updateSchooly
    public function updateSchooly(Request $request, $id){
        SchoolInfo::findOrFail($id)->update([
            'instituteName' => $request->instituteName,
            'passingYear' => $request->passingYear,
            'result' => $request->result,             
            'academicSession' => $request->academicSession, 
            'updated_at' =>Carbon::now(), 
        ]);
        return response()->json([
            'Updated' => 'successfull',
        ]);
    }

    //deleteSchooly
    public function deleteSchooly($id){
        SchoolInfo::findOrFail($id)->delete();
        return response()->json([
            "Deleted" => "successfull",
        ]);
    }

    //allNominee
    public function allNominee(){
        $allNominee = NomineeInfo::all();
        return response()->json($allNominee);
    }
    
    //addNominee
    public function addNominee(Request $request){

        $request->validate([
            'nomineeName' => 'required',
            'relation' => 'required',
            'address' => 'required',                        
            'dateOfBirth' => 'required',                        
            'phone' => 'required',                        
            'parmanentAddress' => 'required',                        
        ]);
        $addNominee = NomineeInfo::insert([
            'nomineeName' => $request->nomineeName,
            'relation' => $request->relation,
            'address' => $request->address,
            'dateOfBirth' => date('Y-m-d', strtotime($request->dateOfBirth)),
            'phone' => $request->phone,             
            'parmanentAddress' => $request->parmanentAddress,             
            'created_at' =>Carbon::now(),          
        ]);
        return response()->json([
            'success' => 'Success', 
            'Bank Information' => $addNominee,           
        ]);
    }

    //editNominee
    public function editNominee($id){
        $editNominee = NomineeInfo::findOrFail($id);
        return response()->json($editNominee);
    }

    //updateNominee
    public function updateNominee(Request $request, $id){
        NomineeInfo::findOrFail($id)->update([
            'nomineeName' => $request->nomineeName,
            'relation' => $request->relation,
            'address' => $request->address,
            'dateOfBirth' => date('Y-m-d', strtotime($request->dateOfBirth)),
            'phone' => $request->phone,             
            'parmanentAddress' => $request->parmanentAddress,
            'updated_at' =>Carbon::now(), 
        ]);
        return response()->json([
            'Updated' => 'successfull',
        ]);
    }

    //deleteNominee
    public function deleteNominee($id){
        NomineeInfo::findOrFail($id)->delete();
        return response()->json([
            "Deleted" => "successfull",
        ]);
    }

    
}
