CREATE TABLE IF NOT EXISTS `form_physician_history` (
id bigint(20) NOT NULL auto_increment,
date datetime default NULL,
pid bigint(20) default NULL,
user varchar(255) default NULL,
groupname varchar(255) default NULL,
authorized tinyint(4) default NULL,
activity tinyint(4) default NULL,

/* Physician History */

established tinyint(1),
consultation tinyint(1),
report_sent tinyint(1),
report_sent_date varchar(32),
primary_care varchar(255),
other_physician varchar(255),
who_sent varchar(255),
chief_complaint longtext,
hpi longtext,
current_prescription longtext,
current_nonprescription longtext,

/* Changes since last visit */
ph_lvch_ill tinyint(1),
ph_lvch_surg tinyint(1),
ph_lvch_newmed tinyint(1),
ph_lvch_famhist tinyint(1),
ph_lvch_newallerg tinyint(1),
ph_lvch_gynhist tinyint(1),
ph_lvch_obsthist tinyint(1),
ph_lvch_notes longtext,

ph_allergies_none tinyint(1),
ph_allergies_data longtext,

cancer_scr_cytology tinyint(1),
cancer_scr_cytology_date varchar(32),
cancer_scr_hpv  tinyint(1),
cancer_scr_hpv_date varchar(32),
cancer_scr_notes longtext,

last_mammogram varchar(32),
last_mammogram_notes longtext,

last_colorectal varchar(32),
last_colorectal_notes longtext,

/* Gynecologic history */
gh_imp varchar(32),
gh_age_at_menarche varchar(255),
gh_length_of_flow varchar(255),
gh_interval_periods varchar(255),
gh_recent_changes varchar(255),
gh_sexually_active tinyint(1),
gh_had_sex tinyint(1),
gh_partners tinyint,
gh_partners_are varchar(6),
gh_method_contraception varchar(255),
gh_contraceptive_history varchar(255),

/* Obstetric history */
oh_pregnancies tinyint,
oh_abortions tinyint,
oh_miscarriages tinyint,
oh_premature_births tinyint,
oh_live_births tinyint,
oh_living_children tinyint,
oh_ch_rec_0 longtext, /* compound record: date, width, sex, weeks, delivery, notes : separated by |~ */
oh_ch_rec_1 longtext, /* compound record: date, width, sex, weeks, delivery, notes : separated by |~ */
oh_ch_rec_2 longtext, /* compound record: date, width, sex, weeks, delivery, notes : separated by |~ */
oh_ch_rec_3 longtext, /* compound record: date, width, sex, weeks, delivery, notes : separated by |~ */
oh_complications longtext,
oh_diabetes tinyint(1),
oh_hipertension tinyint(1),
oh_preemclampsia tinyint(1),
oh_depression tinyint(1),
oh_depression_treated longtext,

/* Past history */
ph_noncontrib tinyint(1),
ph_nochange_since tinyint(1),
ph_nochange_since_date varchar(32),
ph_surgeries longtext,
ph_illnesses longtext,
ph_injuries longtext,
ph_immunizations_tuberculosis longtext,

/* Family history */
fh_noncontrib tinyint(1),
fh_nochange_since tinyint(1),
fh_nochange_since_date varchar(32),
fh_mother tinyint(1),
fh_mother_dec_cause varchar(255),
fh_mother_dec_age tinyint,
fh_father tinyint(1),
fh_father_dec_cause varchar(255),
fh_father_dec_age tinyint,
fh_sibl_living tinyint,
fh_sibl_deceased tinyint,
fh_sibl_cause varchar(255),
fh_children_living tinyint,
fh_children_deceased tinyint,
fh_children_cause varchar(255),
fhd_diabetes tinyint(1),
fhd_cancer tinyint(1),
fhd_osteoporosis tinyint(1),
fhd_heart tinyint(1),
fhd_hipertension tinyint(1),
fhd_other tinyint(1),
fhd_hyperlipidemia tinyint(1),
fhd_deepvenous tinyint(1),
fhd_diabetes_who varchar(255),
fhd_cancer_who varchar(255),
fhd_osteoporosis_who varchar(255),
fhd_heart_who varchar(255),
fhd_hipertension_who varchar(255),
fhd_other_who varchar(255),
fhd_hyperlipidemia_who varchar(255),
fhd_deepvenous_who varchar(255),

/* Social history */
sh_noncontrib tinyint(1),
sh_nochange_since tinyint(1),
sh_nochange_since_date varchar(32),
sh_tobacco tinyint(1),
sh_alcohol tinyint(1),
sh_drugs tinyint(1),
sh_misuse tinyint(1),
sh_partner_violence tinyint(1),
sh_sexual_abuse tinyint(1),
sh_health_hazards tinyint(1),
sh_seat_belt tinyint(1),
sh_diet tinyint(1),
sh_folic_acid tinyint(1),
sh_calcium tinyint(1),
sh_reg_exercise tinyint(1),
sh_caffeine tinyint(1),
sh_advance tinyint(1),
sh_organ_donation tinyint(1),
sh_other tinyint(1),
sh_nochanges_since2 tinyint(1),
sh_nochanges_since2_date varchar(32),
sh_notes_1 varchar(255),
sh_notes_2 varchar(255),
sh_notes_3 varchar(255),
sh_notes_4 varchar(255),
sh_notes_5 varchar(255),
sh_notes_6 varchar(255),
sh_notes_7 varchar(255),
sh_notes_8 varchar(255),
sh_notes_9 varchar(255),
sh_notes_10 varchar(255),
sh_notes_11 varchar(255),
sh_notes_12 varchar(255),
sh_notes_13 varchar(255),
sh_notes_14 varchar(255),
sh_notes_15 varchar(255),
sh_notes_16 varchar(255),
ros_const_negative tinyint(1) DEFAULT 0,
ros_const_weight_loss tinyint(1) DEFAULT 0,
ros_const_weight_gain tinyint(1) DEFAULT 0,
ros_const_fever tinyint(1) DEFAULT 0,
ros_const_fatigue tinyint(1) DEFAULT 0,
ros_const_other tinyint(1) DEFAULT 0,
ros_const_tallest_height varchar(32),
ros_eyes_negative tinyint(1) DEFAULT 0,
ros_eyes_vision_change tinyint(1) DEFAULT 0,
ros_eyes_glasses tinyint(1) DEFAULT 0,
ros_eyes_other tinyint(1) DEFAULT 0,
ros_ear_negative tinyint(1) DEFAULT 0,
ros_ear_ulcers tinyint(1) DEFAULT 0,
ros_ear_sinusitis tinyint(1) DEFAULT 0,
ros_ear_headache tinyint(1) DEFAULT 0,
ros_ear_hearing_loss tinyint(1) DEFAULT 0,
ros_ear_other tinyint(1) DEFAULT 0,
ros_cv_negative tinyint(1) DEFAULT 0,
ros_cv_orthopnea tinyint(1) DEFAULT 0,
ros_cv_chest_pain tinyint(1) DEFAULT 0,
ros_cv_difficulty_breathing tinyint(1) DEFAULT 0,
ros_cv_edema tinyint(1) DEFAULT 0,
ros_cv_palpitation tinyint(1) DEFAULT 0,
ros_cv_other tinyint(1) DEFAULT 0,
ros_resp_negative tinyint(1) DEFAULT 0,
ros_resp_wheezing tinyint(1) DEFAULT 0,
ros_hemoptysis tinyint(1) DEFAULT 0,
ros_resp_shortness tinyint(1) DEFAULT 0,
ros_resp_cough tinyint(1) DEFAULT 0,
ros_resp_other tinyint(1) DEFAULT 0,
ros_gastr_negative tinyint(1) DEFAULT 0,
ros_gastr_diarrhea tinyint(1) DEFAULT 0,
ros_gastr_bloody_stool tinyint(1) DEFAULT 0,
ros_gastr_nausea tinyint(1) DEFAULT 0,
ros_gastr_constipation tinyint(1) DEFAULT 0,
ros_gastr_flatulence tinyint(1) DEFAULT 0,
ros_gastr_pain tinyint(1) DEFAULT 0,
ros_gastr_fecal tinyint(1) DEFAULT 0,
ros_gastr_other tinyint(1) DEFAULT 0,
ros_genit_negative tinyint(1) DEFAULT 0,
ros_genit_hematuria tinyint(1) DEFAULT 0,
ros_genit_dysuria tinyint(1) DEFAULT 0,
ros_genit_urgency tinyint(1) DEFAULT 0,
ros_genit_frequency tinyint(1) DEFAULT 0,
ros_genit_incomplete_emptying tinyint(1) DEFAULT 0,
ros_genit_incontinence tinyint(1) DEFAULT 0,
ros_genit_dyspareunia tinyint(1) DEFAULT 0,
ros_genit_abnormal_periods tinyint(1) DEFAULT 0,
ros_genit_pms tinyint(1) DEFAULT 0,
ros_genit_abnormal_bleeding tinyint(1) DEFAULT 0,
ros_genit_abnormal_discharge tinyint(1) DEFAULT 0,
ros_genit_other tinyint(1) DEFAULT 0,
ros_muscul_negative tinyint(1) DEFAULT 0,
ros_muscul_weakness tinyint(1) DEFAULT 0,
ros_muscul_pain tinyint(1) DEFAULT 0,
ros_muscul_other tinyint(1) DEFAULT 0,
ros_skin_negative tinyint(1) DEFAULT 0,
ros_skin_rash tinyint(1) DEFAULT 0,
ros_skin_ulcers tinyint(1) DEFAULT 0,
ros_skin_dry tinyint(1) DEFAULT 0,
ros_skin_pigmented tinyint(1) DEFAULT 0,
ros_skin_other tinyint(1) DEFAULT 0,
ros_breast_negative tinyint(1) DEFAULT 0,
ros_breast_mastalgia tinyint(1) DEFAULT 0,
ros_breast_discharge tinyint(1) DEFAULT 0,
ros_breast_masses tinyint(1) DEFAULT 0,
ros_breast_other tinyint(1) DEFAULT 0,
ros_neuro_negative tinyint(1) DEFAULT 0,
ros_neuro_syncope tinyint(1) DEFAULT 0,
ros_neuro_seizures tinyint(1) DEFAULT 0,
ros_neuro_numbness tinyint(1) DEFAULT 0,
ros_neuro_trouble_walking tinyint(1) DEFAULT 0,
ros_neuro_memory tinyint(1) DEFAULT 0,
ros_neuro_other tinyint(1) DEFAULT 0,
ros_psych_negative tinyint(1) DEFAULT 0,
ros_psych_depression tinyint(1) DEFAULT 0,
ros_psych_crying tinyint(1) DEFAULT 0,
ros_psych_anxiety tinyint(1) DEFAULT 0,
ros_psych_other tinyint(1) DEFAULT 0,
ros_endo_negative tinyint(1) DEFAULT 0,
ros_endo_diabetes tinyint(1) DEFAULT 0,
ros_endo_hipothyroid tinyint(1) DEFAULT 0,
ros_endo_hiperthyroid tinyint(1) DEFAULT 0,
ros_endo_flashes tinyint(1) DEFAULT 0,
ros_endo_hair_loss tinyint(1) DEFAULT 0,
ros_endo_intolerance tinyint(1) DEFAULT 0,
ros_endo_other tinyint(1) DEFAULT 0,
ros_hemato_negative tinyint(1) DEFAULT 0,
ros_hemato_bruises tinyint(1) DEFAULT 0,
ros_hemato_bleeding tinyint(1) DEFAULT 0,
ros_hemato_adenopathy tinyint(1) DEFAULT 0,
ros_hemato_other tinyint(1) DEFAULT 0,

/* Review of systems */







PRIMARY KEY (id)
) ENGINE=MyISAM;
