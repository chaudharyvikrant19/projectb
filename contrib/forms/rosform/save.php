<?php
//------------Forms generated from formsWiz
include_once("../../globals.php");
include_once("$srcdir/api.inc");
include_once("$srcdir/forms.inc");
foreach ($_POST as $k => $var) {
$_POST[$k] = mysql_escape_string($var);
echo "$var\n";
}
if ($encounter == "")
$encounter = date("Ymd");
if ($_GET["mode"] == "new"){
$newid = formSubmit("form_rosform", $_POST, $_GET["id"], $userauthorized);
addForm($encounter, "Review of Systems", $newid, "rosform", $pid, $userauthorized);
}elseif ($_GET["mode"] == "update") {
sqlInsert("update form_rosform set pid = {$_SESSION["pid"]},groupname='".$_SESSION["authProvider"]."',user='".$_SESSION["authUser"]."',authorized=$userauthorized,activity=1, date = NOW(), fever='".$_POST["fever"]."', chills='".$_POST["chills"]."', rash='".$_POST["rash"]."', cancer='".$_POST["cancer"]."', acne='".$_POST["acne"]."', eyes_diplopia='".$_POST["eyes_diplopia"]."', eyes_cataracts='".$_POST["eyes_cataracts"]."', eyes_glaucoma='".$_POST["eyes_glaucoma"]."', head_dizziness='".$_POST["head_dizziness"]."', head_syncope='".$_POST["head_syncope"]."', head_headache='".$_POST["head_headache"]."', ear_pain='".$_POST["ear_pain"]."', ear_loss='".$_POST["ear_loss"]."', nose_congestion='".$_POST["nose_congestion"]."', nose_epitaxis='".$_POST["nose_epitaxis"]."', throat_sore='".$_POST["throat_sore"]."', throat_dysphagia='".$_POST["throat_dysphagia"]."', throat_swollen_glands='".$_POST["throat_swollen_glands"]."', respiratory_dyspnea='".$_POST["respiratory_dyspnea"]."', respiratory_rest='".$_POST["respiratory_rest"]."', respiratory_exertion='".$_POST["respiratory_exertion"]."', respiratory_cough='".$_POST["respiratory_cough"]."', respiratory_asthma='".$_POST["respiratory_asthma"]."', cardiac_palpitation='".$_POST["cardiac_palpitation"]."', cardiac_heart_murmur='".$_POST["cardiac_heart_murmur"]."', cardiac_chest_pain='".$_POST["cardiac_chest_pain"]."', cardiac_pleuritic='".$_POST["cardiac_pleuritic"]."', cardiac_htm='".$_POST["cardiac_htm"]."', cardiac_ntg_use='".$_POST["cardiac_ntg_use"]."', hem_lymph_anemia='".$_POST["hem_lymph_anemia"]."', hem_lymph_nightsweats='".$_POST["hem_lymph_nightsweats"]."', gi_nausea='".$_POST["gi_nausea"]."', gi_vomiting='".$_POST["gi_vomiting"]."', gi_diarrhea='".$_POST["gi_diarrhea"]."', gi_constipation='".$_POST["gi_constipation"]."', gi_black_stools='".$_POST["gi_black_stools"]."', gi_blood_stools='".$_POST["gi_blood_stools"]."', gi_pain='".$_POST["gi_pain"]."', gi_abdominal_pain='".$_POST["gi_abdominal_pain"]."', gu_nocturia='".$_POST["gu_nocturia"]."', gu_stream='".$_POST["gu_stream"]."', gu_hematuria='".$_POST["gu_hematuria"]."', gu_pain='".$_POST["gu_pain"]."', gu_incontinence='".$_POST["gu_incontinence"]."', gu_frequency='".$_POST["gu_frequency"]."', gyn_lump='".$_POST["gyn_lump"]."', gyn_checkup='".$_POST["gyn_checkup"]."', gyn_mammogram='".$_POST["gyn_mammogram"]."', sexual='".$_POST["sexual"]."', ortho_pain='".$_POST["ortho_pain"]."', ortho_trauma='".$_POST["ortho_trauma"]."', ortho_neuro='".$_POST["ortho_neuro"]."', endo_diabetes='".$_POST["endo_diabetes"]."', endo_thyroid='".$_POST["endo_thyroid"]."', psych_sleep_problems='".$_POST["psych_sleep_problems"]."', psych_memory_loss='".$_POST["psych_memory_loss"]."', leg_swelling='".$_POST["leg_swelling"]."', leg_numbness='".$_POST["leg_numbness"]."', appearance_nad='".$_POST["appearance_nad"]."', appearance_mild='".$_POST["appearance_mild"]."', appearance_moderate='".$_POST["appearance_moderate"]."', appearance_severe_distress='".$_POST["appearance_severe_distress"]."', skin_moles='".$_POST["skin_moles"]."', skin_rash='".$_POST["skin_rash"]."', head_ent_nl_inspection='".$_POST["head_ent_nl_inspection"]."', head_pharynx_nl='".$_POST["head_pharynx_nl"]."', head_abn_tm='".$_POST["head_abn_tm"]."', head_scleral_icterus='".$_POST["head_scleral_icterus"]."', eyes_pupils_right='".$_POST["eyes_pupils_right"]."', eyes_pupils_left='".$_POST["eyes_pupils_left"]."', fundi_right='".$_POST["fundi_right"]."', fundi_left='".$_POST["fundi_left"]."', vision_fields_normal='".$_POST["vision_fields_normal"]."', vision_fields_abnormal='".$_POST["vision_fields_abnormal"]."', ears_right='".$_POST["ears_right"]."', ears_left='".$_POST["ears_left"]."', ears_hearing_deficit='".$_POST["ears_hearing_deficit"]."', nose_erythema='".$_POST["nose_erythema"]."', nose_discharge='".$_POST["nose_discharge"]."', throat_nl='".$_POST["throat_nl"]."', throat_thyroid_nl='".$_POST["throat_thyroid_nl"]."', throat_thyromegaly='".$_POST["throat_thyromegaly"]."', throat_erytheomatous='".$_POST["throat_erytheomatous"]."', lymph_cervical_right='".$_POST["lymph_cervical_right"]."', lymph_cervical_left='".$_POST["lymph_cervical_left"]."', lymph_axillary_right='".$_POST["lymph_axillary_right"]."', lymph_axillary_left='".$_POST["lymph_axillary_left"]."', lymph_supraclav_right='".$_POST["lymph_supraclav_right"]."', lymph_supraclav_left='".$_POST["lymph_supraclav_left"]."', lymph_inguinal_right='".$_POST["lymph_inguinal_right"]."', lymph_inguinal_left='".$_POST["lymph_inguinal_left"]."', carotid_bruits='".$_POST["carotid_bruits"]."', respiratory_no_distress='".$_POST["respiratory_no_distress"]."', chest_non_tender='".$_POST["chest_non_tender"]."', respiratory_distress='".$_POST["respiratory_distress"]."', respiratory_clear_to_ausc='".$_POST["respiratory_clear_to_ausc"]."', respiratory_splinting='".$_POST["respiratory_splinting"]."', respiratory_rales='".$_POST["respiratory_rales"]."', respiratory_rhonchi='".$_POST["respiratory_rhonchi"]."', respiratory_wheezing='".$_POST["respiratory_wheezing"]."', heart_regular_rate='".$_POST["heart_regular_rate"]."', heart_irregular_rate='".$_POST["heart_irregular_rate"]."', heart_murmur='".$_POST["heart_murmur"]."', heart_gallop='".$_POST["heart_gallop"]."', heart_rub='".$_POST["heart_rub"]."', heart_tachy_brady='".$_POST["heart_tachy_brady"]."', heart_jvd='".$_POST["heart_jvd"]."', heart_grade='".$_POST["heart_grade"]."', heart_sys_dias='".$_POST["heart_sys_dias"]."', breast_right_cystic='".$_POST["breast_right_cystic"]."', breast_left_cystic='".$_POST["breast_left_cystic"]."', abdomen_non_tender='".$_POST["abdomen_non_tender"]."', abdomen_no_organomegaly='".$_POST["abdomen_no_organomegaly"]."', abdomen_guarding='".$_POST["abdomen_guarding"]."', abdomen_rebound='".$_POST["abdomen_rebound"]."', abdomen_bowel_sounds='".$_POST["abdomen_bowel_sounds"]."', abdomen_hepatomegaly='".$_POST["abdomen_hepatomegaly"]."', rectal_prostate='".$_POST["rectal_prostate"]."', rectal_hemmocult='".$_POST["rectal_hemmocult"]."', rectal_tender='".$_POST["rectal_tender"]."', rectal_hemmorrhoids='".$_POST["rectal_hemmorrhoids"]."', genitalia_hernia='".$_POST["genitalia_hernia"]."', genitalia_ext_vagina='".$_POST["genitalia_ext_vagina"]."', genitalia_male='".$_POST["genitalia_male"]."', speculum='".$_POST["speculum"]."', palpation='".$_POST["palpation"]."', uterus='".$_POST["uterus"]."', adnexa_right='".$_POST["adnexa_right"]."', adnexa_left='".$_POST["adnexa_left"]."', neuro_exam_cns='".$_POST["neuro_exam_cns"]."', neuro_exam_oriented='".$_POST["neuro_exam_oriented"]."', neuro_exam_confused='".$_POST["neuro_exam_confused"]."', neuro_exam_mmse='".$_POST["neuro_exam_mmse"]."', muscle_strength='".$_POST["muscle_strength"]."', reflexes_rue='".$_POST["reflexes_rue"]."', reflexes_rle='".$_POST["reflexes_rle"]."', reflexes_lue='".$_POST["reflexes_lue"]."', reflexes_lle='".$_POST["reflexes_lle"]."', vibration='".$_POST["vibration"]."', sensation='".$_POST["sensation"]."', babinski='".$_POST["babinski"]."', edema='".$_POST["edema"]."', varicosities='".$_POST["varicosities"]."', nails='".$_POST["nails"]."', joints_neck='".$_POST["joints_neck"]."', joints_shoulder_right='".$_POST["joints_shoulder_right"]."', joints_sholder_left='".$_POST["joints_sholder_left"]."', joints_elbow_right='".$_POST["joints_elbow_right"]."', joints_elbow_left='".$_POST["joints_elbow_left"]."', joints_wrist_right='".$_POST["joints_wrist_right"]."', joints_wrist_left='".$_POST["joints_wrist_left"]."', joints_hand_right='".$_POST["joints_hand_right"]."', joints_hand_left='".$_POST["joints_hand_left"]."', joints_hip_right='".$_POST["joints_hip_right"]."', joints_hip_left='".$_POST["joints_hip_left"]."', joints_back_right='".$_POST["joints_back_right"]."', joints_back_left='".$_POST["joints_back_left"]."', joints_slr_right='".$_POST["joints_slr_right"]."', joints_slr_left='".$_POST["joints_slr_left"]."', joints_knee_right='".$_POST["joints_knee_right"]."', joints_knee_left='".$_POST["joints_knee_left"]."', joints_ankle_right='".$_POST["joints_ankle_right"]."', joints_ankle_left='".$_POST["joints_ankle_left"]."', joints_foot_right='".$_POST["joints_foot_right"]."', joints_foot_left='".$_POST["joints_foot_left"]."', conclusions_impression='".$_POST["conclusions_impression"]."', conclusions_discussion='".$_POST["conclusions_discussion"]."', conclusions_treatment='".$_POST["conclusions_treatment"]."', conclusions_breast_self_exam='".$_POST["conclusions_breast_self_exam"]."', conclusions_flex_sig_colonoscopy='".$_POST["conclusions_flex_sig_colonoscopy"]."', conclusions_mammography='".$_POST["conclusions_mammography"]."', conclusions_cholesterol_teaching='".$_POST["conclusions_cholesterol_teaching"]."', conclusions_advance_directive='".$_POST["conclusions_advance_directive"]."', follow_up='".$_POST["follow_up"]."' where id=$id");
}
$_SESSION["encounter"] = $encounter;
formHeader("Redirecting....");
formJump();
formFooter();
?>
