<?php

use App\Http\Controllers\Committee_Controller;
use App\Http\Controllers\FO_OAM_BoardofDir_Controller;
use App\Http\Controllers\FO_OAM_Committees_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FARMC_Authentication\AuthController;
use App\Http\Controllers\FarmcMembership_Controller;
use App\Http\Controllers\FC_GenInfo_Controller;
use App\Http\Controllers\FC_ListofMem_Controller;
use App\Http\Controllers\FC_Membership_Controller;
use App\Http\Controllers\FC_Officers_Commit_Controller;
use App\Http\Controllers\FisherfolkOrg_category;
use App\Http\Controllers\FisherfolkRepresentative_Controller;
use App\Http\Controllers\ProfileForm_Controller;
use App\Http\Controllers\FisherfolkOrganization_Controller;
use App\Http\Controllers\FO_ListofMem_Controller;
use App\Http\Controllers\FC_Officers_Controller;
use App\Http\Controllers\FC_OrgStruct_Controller;
use App\Http\Controllers\FDP_PersonalInfo_Controller;
use App\Models\FC_ListofMem_Model;
use App\Models\FC_Officers_Commit_Model;
use App\Models\FDP_PersonalInfo_Model;

Route::get('/', function () {
    return view('FARMC_Authentication/login');
});
Route::get('/registeracc', function () {
    return view('FARMC_Authentication/register');
});
Route::get('/forgetpass', function () {
    return view('FARMC_Authentication/forgetpass');
});

// ---------------------------------------------------------------------------------------//
//AUTHENTICATION
// ---------------------------------------------------------------------------------------//

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/reg-account', [AuthController::class, 'register'])->name('register');
Route::post('/forg-account', [AuthController::class, 'resetPassword'])->name('password.reset');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ---------------------------------------------------------------------------------------//

Route::get('/dash', function () {
    return view('dashboard');
});

// ---------------------------------------------------------------------------------------//
// ORGANIZED FARMC
//*LEVELS OF DEVELOPMENT*/
// ---------------------------------------------------------------------------------------//

//LevelOne

// Route::view('/level1', 'LoD.Level1.Level1');
Route::view('/L1Incomplete', 'LoD.Level1.L1_Incomplete');
Route::view('/officers', 'LVL1_Profile_Form.FARMC_Officers.officers');
Route::view('/mandatedmem', 'LVL1_Profile_Form.Composition_OM.mandated_member');
Route::view('/fisherfolkrep', 'LVL1_Profile_Form.Composition_OM.fisherfolk_representative');
Route::view('/committee', 'LVL1_Profile_Form.MFARMC_Committee.committee');


// ---------------------------------------------------------------------------------------//

//LevelTwo

// Route::view('/level2', 'LoD.Level2.Level2');
Route::view('/L2Completedtbl', 'LoD.Level2.L2_Completedtbl');
Route::view('/L2Incompletetbl', 'LoD.Level2.L2_Incompletetbl');
Route::view('/L2Incomplete', 'LoD.Level2.L2_Incomplete');
Route::view('/L2Editform', 'LoD.Level2.L2_Editform');
Route::view('/L2Viewform', 'LoD.Level2.L2_Viewform');

// Route::view('/basicFunction', 'LVL2_Basic_Function.basicFunction');

// ---------------------------------------------------------------------------------------//

//LevelThree

// Route::view('/level3', 'LoD.Level3.Level3');
Route::view('/L3Completedtbl', 'LoD.Level3.L3_Completedtbl');
Route::view('/L3Incompletetbl', 'LoD.Level3.L3_Incompletetbl');
Route::view('/L3Incomplete', 'LoD.Level3.L3_Incomplete');
Route::view('/L3Editform', 'LoD.Level3.L3_Editform');
Route::view('/L3Viewform', 'LoD.Level3.L3_Viewform');

// Route::view('/fullyOperational', 'LVL3_Fully_Operational.fullyOperational');

// ---------------------------------------------------------------------------------------//

//LevelFour

// Route::view('/level4', 'LoD.Level4.Level4');
Route::view('/L4Completedtbl', 'LoD.Level4.L4_Completedtbl');
Route::view('/L4Incompletetbl', 'LoD.Level4.L4_Incompletetbl');
Route::view('/L4Incomplete', 'LoD.Level4.L4_Incomplete');
Route::view('/L4Editform', 'LoD.Level4.L4_Editform');
Route::view('/L4Viewform', 'LoD.Level4.L4_Viewform');

// Route::view('/sustainabilityMechanism', 'LVL4_Sustainability_Mechanism.sustainabilityMechanism');

// ---------------------------------------------------------------------------------------//

//LevelFive

Route::view('/level5', 'LoD.Level5.Level5');
Route::view('/L5Completedtbl', 'LoD.Level5.L5_Completedtbl');
Route::view('/L5Incompletetbl', 'LoD.Level5.L5_Incompletetbl');
Route::view('/L5Incomplete', 'LoD.Level5.L5_Incomplete');
Route::view('/L5Editform', 'LoD.Level5.L5_Editform');
Route::view('/L5Viewform', 'LoD.Level5.L5_Viewform');

// Route::view('/modelExcellence', 'LVL5_Model_of_Excellence.modelofExcellence');

// ---------------------------------------------------------------------------------------//
//LEVEL ONE DATA//
// ---------------------------------------------------------------------------------------//

Route::get('/dash', [ProfileForm_Controller::class,'allLevelCount']);

//Profile Form
Route::view('/basicStructure', 'LVL1_Profile_Form.Basic_Structure.basic_structure');
Route::get('/officers-form/{id}', [ProfileForm_Controller::class,'display_officer_form']);
Route::get('/level1', [ProfileForm_Controller::class,'displayAll']);
Route::get('/mandated-officers-form/{id}', [ProfileForm_Controller::class,'display_mandatedOfficer_form']);
Route::get('/L1Viewform/{id}', [ProfileForm_Controller::class,'display_level1_info']);
Route::get('/fisherfolk-rep-form/{id}', [ProfileForm_Controller::class,'display_fisherfolkRep_form']);
Route::get('/secretariat-form', [ProfileForm_Controller::class,'display_sectariat_form']);
Route::put('/add-basic-info', [ProfileForm_Controller::class,'createProfileForm']);
Route::put('/add-officer/{id}', [ProfileForm_Controller::class,'addOfficer']);
Route::put('/add-mandated-officer/{id}', [ProfileForm_Controller::class,'addMandatedOfficer']);
Route::put('/add-secretariat', [ProfileForm_Controller::class,'addSecretariat']);
Route::get('/L1Incompletetbl',[ProfileForm_Controller::class, 'display_level1_incomplete']);
Route::get('/L1Completedtbl',[ProfileForm_Controller::class, 'display_level1_complete']);
Route::get('/L1Archivedtbl',[ProfileForm_Controller::class, 'display_level1_archived']);
Route::get('/L1Archivedtbl/{id}', [ProfileForm_Controller::class, 'L1moveToArchived']);
Route::get('/L1Editform/{id}',[ProfileForm_Controller::class, 'display_level1_edit']);
Route::put('/edit-profileForm/{id}', [ProfileForm_Controller::class,'editBasicStructure']);
// Route::view('/L1Editform', 'LoD.Level1.L1_Editform');

//Fisherfolk Representative
Route::put('/add-fisherfolk-rep', [FisherfolkRepresentative_Controller::class,'createFisherfolkRep']);

//Committee
Route::put('/add-committee', [Committee_Controller::class,'createCommittee']);
Route::get('/go-to-committee', [Committee_Controller::class,'display_committee_form']);

// ---------------------------------------------------------------------------------------//
//LEVEL TWO DATA//
// ---------------------------------------------------------------------------------------//

//Basic Function
Route::get('/basicFunction/{id}', [ProfileForm_Controller::class,'display_level2']);
Route::get('/level2', [ProfileForm_Controller::class,'level2Count']);
Route::put('/add-basicFunction/{id}', [ProfileForm_Controller::class,'addBasicFunction']);
Route::put('/edit-basicFunction/{id}', [ProfileForm_Controller::class,'editBasicFunction']);
Route::get('/L2Viewform/{id}', [ProfileForm_Controller::class,'display_level2_info']);
Route::get('/L2Editform/{id}', [ProfileForm_Controller::class,'display_level2_edit']);

Route::get('/L2Archivedtbl',[ProfileForm_Controller::class, 'display_level2_archived']);
Route::get('/L2Archivedtbl/{id}', [ProfileForm_Controller::class, 'L2moveToArchived']);
Route::get('/L2Incompletetbl',[ProfileForm_Controller::class, 'display_level2_incomplete']);
Route::get('/L2Completedtbl',[ProfileForm_Controller::class, 'display_level2_complete']);

// ---------------------------------------------------------------------------------------//
//LEVEL THREE DATA//
// ---------------------------------------------------------------------------------------//

//Fully Functional
Route::get('/fullyoperational/{id}', [ProfileForm_Controller::class,'display_level3']);
Route::get('/level3', [ProfileForm_Controller::class,'level3Count']);
Route::put('/add-fullyOperational/{id}', [ProfileForm_Controller::class,'addFullyOperational']);
Route::put('/edit-fullyOperational/{id}', [ProfileForm_Controller::class,'editFullyOperational']);
Route::get('/L3Viewform/{id}', [ProfileForm_Controller::class,'display_level3_info']);
Route::get('/L3Editform/{id}', [ProfileForm_Controller::class,'display_level3_edit']);
Route::get('/L3Inc-edit/{id}', [ProfileForm_Controller::class,'inc_edit3']);

Route::get('/L3Archivedtbl',[ProfileForm_Controller::class, 'display_level3_archived']);
Route::get('/L3Archivedtbl/{id}', [ProfileForm_Controller::class, 'L3moveToArchived']);
Route::get('/L3Incompletetbl',[ProfileForm_Controller::class, 'display_level3_incomplete']);
Route::get('/L3Completedtbl',[ProfileForm_Controller::class, 'display_level3_complete']);

// ---------------------------------------------------------------------------------------//
//LEVEL FOUR DATA//
// ---------------------------------------------------------------------------------------//

//Sustainability Mechanism
Route::get('/sustainability/{id}', [ProfileForm_Controller::class,'display_level4']);
Route::get('/level4', [ProfileForm_Controller::class,'level4Count']);
Route::put('/add-sustainabilityMechanism/{id}', [ProfileForm_Controller::class,'addSustainabilityMechanism']);
Route::put('/edit-sustainabilityMechanism/{id}', [ProfileForm_Controller::class, 'editSustainabilityMechanism']);
Route::get('/L4Viewform/{id}', [ProfileForm_Controller::class,'display_level4_info']);
Route::get('/L4Editform/{id}', [ProfileForm_Controller::class,'display_level4_edit']);

Route::get('/L4Archivedtbl',[ProfileForm_Controller::class, 'display_level4_archived']);
Route::get('/L4Archivedtbl/{id}', [ProfileForm_Controller::class, 'L4moveToArchived']);
Route::get('/L4Incompletetbl',[ProfileForm_Controller::class, 'display_level4_incomplete']);
Route::get('/L4Completedtbl',[ProfileForm_Controller::class, 'display_level4_complete']);

// ---------------------------------------------------------------------------------------//
//LEVEL FIVE DATA//
// ---------------------------------------------------------------------------------------//

//Sustainability Mechanism
Route::get('/modelExcellence/{id}', [ProfileForm_Controller::class,'display_level5']);
Route::get('/level5', [ProfileForm_Controller::class,'level5Count']);
Route::put('/add-modelExcellence/{id}', [ProfileForm_Controller::class,'addmodelExcellence']);
Route::put('/edit-modelExcellence/{id}', [ProfileForm_Controller::class,'editmodelExcellence']);
Route::get('/L5Viewform/{id}', [ProfileForm_Controller::class,'display_level5_info']);
Route::get('/L5Editform/{id}', [ProfileForm_Controller::class,'display_level5_edit']);

Route::get('/L5Archivedtbl',[ProfileForm_Controller::class, 'display_level5_archived']);
Route::get('/L5Archivedtbl/{id}', [ProfileForm_Controller::class, 'L5moveToArchived']);
Route::get('/L5Incompletetbl',[ProfileForm_Controller::class, 'display_level5_incomplete']);
Route::get('/L5Completedtbl',[ProfileForm_Controller::class, 'display_level5_complete']);


// ---------------------------------------------------------------------------------------//
//FARMC Membership
// ---------------------------------------------------------------------------------------//
Route::view('/personal_info', 'FARMC_Membership.personal_info');
Route::put('/add-personal-info', [FarmcMembership_Controller::class,'addFARMC_PersonalInfo']);
Route::get('/membership/{id}', [FarmcMembership_Controller::class,'displayMembershipForm']);
Route::put('/add-membership/{id}', [FarmcMembership_Controller::class,'addFARMC_Membership']);
Route::get('/org_membership/{id}', [FarmcMembership_Controller::class,'displayOrgMembershipForm']);
Route::put('/add-orgmembership/{id}', [FarmcMembership_Controller::class,'addOrg_Membership']);
Route::get('/farmc_membership', [FarmcMembership_Controller::class,'farmc_membership_count']);
Route::get('/FARMCViewform/{id}', [FarmcMembership_Controller::class,'display_mem_Viewform']);
Route::get('/viewall_members',[FarmcMembership_Controller::class, 'display_all_members']);
Route::put('/edit-membership/{id}', [FarmcMembership_Controller::class,'editFARMC_Membership']);
Route::get('/membership_edit/{id}', [FarmcMembership_Controller::class,'display_membership_edit']);
Route::get('/membership_archived',[FarmcMembership_Controller::class, 'display_membership_archived']);
Route::get('/membership_archived/{id}', [FarmcMembership_Controller::class, 'moveToMem_archived']);


// ---------------------------------------------------------------------------------------------------//
// ------------------------------ FISHERFOLK ORGANIZATION ---------------------------------------//
// ---------------------------------------------------------------------------------------------------//

Route::get('/FOMunicipal', [FisherfolkOrg_category::class,'display_municipal']);
Route::get('/viewMunAssociation/{id}', [FisherfolkOrg_category::class,'display_MunAssociation_viewform']);

Route::get('/FOFishworker', [FisherfolkOrg_category::class,'display_fishworker']);
Route::get('/viewFishAssociation/{id}', [FisherfolkOrg_category::class,'display_Fisher_Association_viewform']);

Route::get('/FOCommercial', [FisherfolkOrg_category::class,'display_commercial']);
Route::get('/viewComAssociation/{id}', [FisherfolkOrg_category::class,'display_Com_Association_viewform']);

Route::get('/FOWomenF', [FisherfolkOrg_category::class,'display_women']);
Route::get('/viewWomAssociation/{id}', [FisherfolkOrg_category::class,'display_Wom_Association_viewform']);

Route::get('/FOYouth',  [FisherfolkOrg_category::class,'display_youth']);
Route::get('/viewYouthAssociation/{id}', [FisherfolkOrg_category::class,'display_Youth_Association_viewform']);

Route::get('/FOIPs',  [FisherfolkOrg_category::class,'display_IPs']);
Route::get('/viewIPAssociation/{id}', [FisherfolkOrg_category::class,'display_IPs_Association_viewform']);


//ASSOCIATION FORM

Route::view('/FOform1_BasicInfo', 'Fisherfolk_Organization.Association_Form.form1_BasicInfo');
Route::put('/Form1_add_BasicInfo', [FisherfolkOrganization_Controller::class,'createform1_basicInfo']);
Route::get('/FOform1_ExecOff/{id}', [FisherfolkOrganization_Controller::class,'display_exec_off']);
Route::put('/add_ExecOff/{id}', [FisherfolkOrganization_Controller::class,'add_exec_off']);
Route::get('/FOform1_BoardofDir/{id}', [FO_OAM_BoardofDir_Controller::class,'display_boardofDir']);
Route::put('/add_BoardofDir/{id}', [FO_OAM_BoardofDir_Controller::class,'add_boardofDir']);
Route::get('/FOform1_Committees/{id}', [FO_OAM_Committees_Controller::class,'display_committees']);
Route::put('/add_Committees', [FO_OAM_Committees_Controller::class,'add_comm']);

Route::post('/add_ListofMembers', [FO_ListofMem_Controller::class,'add_listofMem']);
Route::get('/FOform1_ListofMem', [FO_ListofMem_Controller::class,'display_listofMem']);

Route::get('/FOform1_Capcon/{id}', [FisherfolkOrganization_Controller::class,'display_CapCon_off']);
Route::put('/add_Capcon/{id}', [FisherfolkOrganization_Controller::class,'add_CapCon']);


//COOPERATIVE FORM

Route::view('/FOform2GenInfo', 'Fisherfolk_Organization.Cooperative_Form.form2_GenInfo');
Route::put('/Form2_add_GenInfo', [FC_GenInfo_Controller::class,'createform2_genInfo']);
Route::get('/FOform2_Membership/{id}', [FC_Membership_Controller::class,'display_foMembership']);
Route::put('/Form2_add_Membership/{id}', [FC_Membership_Controller::class,'add_foMembership']);
Route::get('/FOform2_Officers/{id}', [FC_Officers_Controller::class,'display_foOfficers']);
Route::put('/Form2_add_Officers/{id}', [FC_Officers_Controller::class,'add_foOfficers']);
Route::get('/FOform2_Officers1/{id}', [FC_Officers_Commit_Controller::class,'display_foOfficers1']);
Route::put('/Form2_add_Officers1', [FC_Officers_Commit_Controller::class,'add_foOfficers1']);

Route::get('/FOform2_OrgStruct/{id}', [FC_OrgStruct_Controller::class,'display_orgstruct']);
Route::put('/Form2_add_OrgStruct/{id}', [FC_OrgStruct_Controller::class,'add_OrgStruct']);

Route::get('/FOform2_ListofMem/{id}', [FC_ListofMem_Controller::class,'display_fc_listofMem']);
Route::post('/Form2_add_ListofMem/{id}', [FC_ListofMem_Controller::class,'add_listofMem']);


// ---------------------------------------------------------------------------------------------------//
Route::view('/FOmregistered', 'Fisherfolk_Organization.Municipal.registeredtbl');
Route::view('/FOmunregistered', 'Fisherfolk_Organization.Municipal.unregisteredtbl');
// ---------------------------------------------------------------------------------------------------//




// ---------------------------------------------------------------------------------------------------//
// ------------------------------ FISHERFOLK DIRECTORS PROGRAM ---------------------------------------//
// ---------------------------------------------------------------------------------------------------//

Route::view('/FDP_pers_info', 'Fisherfolk_Directors_Program.RFDP_Form.RFDP_personal_info');
Route::put('/add-personal-info1', [FDP_PersonalInfo_Controller::class,'addFDP_PersonalInfo']);
Route::get('/FDP_orgMem/{id}', [FDP_PersonalInfo_Controller::class,'displayFDP_orgMem']);
Route::put('/add-fdp_orgMem/{id}', [FDP_PersonalInfo_Controller::class,'addFDP_orgMem']);

Route::get('/nationalFR', [FDP_PersonalInfo_Controller::class,'display_NFD']);
Route::get('/archived_NFD',[FDP_PersonalInfo_Controller::class, 'display_NFD_archived']);
Route::get('/archived_NFD/{id}', [FDP_PersonalInfo_Controller::class, 'moveToNFD_archived']);

Route::get('/provincialFR', [FDP_PersonalInfo_Controller::class,'display_PFR']);
Route::get('/archived_PFR',[FDP_PersonalInfo_Controller::class, 'display_PFR_archived']);
Route::get('/archived_PFR/{id}', [FDP_PersonalInfo_Controller::class, 'moveToPFR_archived']);


Route::get('/regionalFD', [FDP_PersonalInfo_Controller::class,'display_RFD']);
Route::get('/archived_RFD',[FDP_PersonalInfo_Controller::class, 'display_RFD_archived']);
Route::get('/archived_RFD/{id}', [FDP_PersonalInfo_Controller::class, 'moveToRFD_archived']);


Route::get('/regionalFR', [FDP_PersonalInfo_Controller::class,'display_RFR']);
Route::get('/archived_RFR',[FDP_PersonalInfo_Controller::class, 'display_RFR_archived']);
Route::get('/archived_RFR/{id}', [FDP_PersonalInfo_Controller::class, 'moveToRFR_archived']);

Route::get('/rfdp-viewform/{id}', [FDP_PersonalInfo_Controller::class,'display_rfdp_Viewform']);
Route::put('/edit-rfdp/{id}', [FDP_PersonalInfo_Controller::class,'edit_RFDP']);
Route::get('/rfdp_edit/{id}', [FDP_PersonalInfo_Controller::class,'display_rfdp_edit']);




// Route::get('/nationlFR', 'Fisherfolk_Directors_Program.National_FD.nationalFD');
