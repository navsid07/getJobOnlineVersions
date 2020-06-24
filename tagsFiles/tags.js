(function(){

var tagify = new Tagify(document.querySelector('input[name=tags3-1]'), {
    delimiters : null,
    templates : {
        tag : function(v, tagData){
            console.log(tagData)
            try{
            // _ESCAPE_START_
                return `<tag title='${v}' contenteditable='false' spellcheck="false" class='tagify__tag ${tagData.class ? tagData.class : ""}' ${this.getAttributes(tagData)}>
                            <x title='remove tag' class='tagify__tag__removeBtn'></x>
                            <div>
                                ${tagData.code ?
                                `<img onerror="this.style.visibility = 'hidden'" src='https://lipis.github.io/flag-icon-css/flags/4x3/${tagData.code.toLowerCase()}.svg'>` : ''
                                }

                                <span class='tagify__tag-text'>${v}</span>
                            </div>
                        </tag>`;
            // _ESCAPE_END_
            }
            catch(err){}
        },

        dropdownItem : function(tagData){
            try{
            // _ESCAPE_START_
                return `<div class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'>
                           
                            <span>${tagData.value}</span>
                        </div>`
            // _ESCAPE_END_
            }
            catch(err){}
        }
    },
    enforceWhitelist : true,
    whitelist : [
    'B.Tech in Mechanical Engineering', 'B.Tech in Civil Engineering','B.Tech in Chemical Engineering', 'B.Tech in Electrical Engineering','B.Tech in Electronics Engineering','B.Tech in EC Engineering','B.Tech in IT Engineering','B.Tech in Production Engineering','B.Tech in Aeronautical Engineering','B.Tech inTextile Engineering','B.Tech in Environmental Engineering','B.Tech in Naval Architecture','B.Tech in Mining Engineering','B.Tech in Petroleum Engineering','B.Tech in IC Engineering','B.Tech in Food Processing and Technology','B.Tech in Power Engineering',
    'B.E. + M.E. Mechanical Engineering','B.Tech. + M.Tech. Electrical Engineering','B.E. + MBA',
    'Diploma in Mechanical Engineering', 'Diploma in Civil Engineering','Diploma in Chemical Engineering', 'Diploma in Electrical Engineering','Diploma in Electronics Engineering','Diploma in EC Engineering','Diploma in IT Engineering','Diploma in Production Engineering','Diploma in Aeronautical Engineering','Diploma in Textile Engineering','Diploma in Environmental Engineering','Diploma in Naval Architecture','Diploma in Mining Engineering','Diploma in Petroleum Engineering','Diploma in IC Engineering','Diploma in Food Processing and Technology','Diploma in Power Engineering',
    'B.Arch','B.Des. Fashion Design','B.Des. Leather Design','B.Des. Apparel Design','B.Des. Textile Design','B.Des. Interior Design','B.Des. Product Design','B.Des. Accessory Design','B.Pharmacy','B.Sc. Physics','B.Sc. Mathematics','B.Sc. Chemistry','B.Sc. Geology','B.Sc. IT','B.Sc. Computer Science','B.Sc. Biotechnology','B.Sc. Agriculture','B.Sc. Nautical Science','B.Sc. Hotel Management','B.Sc. Electronics and Communication','MBBS','BDS','B.Sc. Nursing','Bachelor of Pharmacy','Pharm D','BAMS','BHMS','BUMS','Physiotherapy','B.V.Sc. & A.H.','Bachelor of Occupational Therapy','Bachelor of Audiology Speech Language Pathology',
    'B.Sc. Biochemistry','B.Sc. Biology','B.Sc. Physics','B.Sc. Chemistry','B.Sc. Environmental Science','B.Sc. Biotechnology','B.Sc. Occupational Therapy','B.Sc. Physiotherapy','B.Sc. Radiology','B.Sc. Bioinformatics','B.Sc. Anthropology','B.Sc. Microbiology','B.Sc. Zoology','B.Sc. Forensic Science','B.Sc. Agriculture','B.Sc. Pathology','B.Sc. Speech Therapy','B.F.Sc. (Fisheries Science)','B.Sc. Horticulture','B.Sc. Genetics','B.Sc. Health Science and Nutrition','B.Sc. Sports Science','B.Sc. Audiology','B.Sc. Botany',
    'Diploma in Mechanical Engineering (DME)','Diploma in Electrical Engineering','Diploma in Civil Engineering','Diploma in Chemical Engineering','Diploma in Electronics and Communications Engineering','Diploma in Computer Science and Engineering','Diploma in Information Technology','Diploma in Agricultural Engineering','Diploma in Textile Engineering','Diploma in Environmental Engineering','Diploma in Instrumentation and Control','Diploma in Mechatronics Engineering','Diploma in Mining Technology','Diploma in Petroleum Engineering','Diploma in Aeronautical Engineering','Diploma in Automobile Engineering','Diploma in Plastic Engineering','Diploma in Metallurgy','Diploma in Fire and Safety Technology',
    'ITI Electrician','ITI Fireman','ITI Welder','ITI Wireman','ITI Mechanic','ITI Turner',
    'Diploma in Operation Theatre Technology (DOTT)','Diploma in X Ray Technology','Diploma in Radiography and Medical Imaging','Diploma in ECG Technology','Diploma in Dialysis Technology','Diploma in Medical Record Technology','Diploma in Medical Laboratory Technology (DMLT)','Diploma in Ophthalmic Technology','Diploma in Physiotherapy','Diploma in Anaesthesia Technology','Diploma in Nursing Care Assistant','Diploma in Sanitary Inspector','Diploma in Hearing Language and Speech (DHLS)','Diploma in Dental Hygienist','Diploma in Audiometry Technician','Diploma in Audiology and Speech Therapy',
    'X-Ray/Radiology Assistant (or Technician)','Medical Laboratory Assistant','Operation Theatre Assistant','Nursing Care Assistant (Certificate)','ECG Assistant','Dental Assistant','Ophthalmic Assistant','CT Scan Technician','Dialysis Technician','MRI Technician',
    'Postgraduate Diploma in Human Resource Management (PGDM HR)','Postgraduate Diploma in Banking and Finance','MBA','M.Tech','MCA','PGPM','PGDEMA','Post Graduate Diploma in Hotel Management','PGDM in Digital Marketing','PGDM in International Business','Post Graduate Diploma in Software Engineering (PGDSE)',
    'Certification in Finance and Accounts','Business Accounting and Taxation','Tally','PGDM Finance','M.Com','Digital Marketing','Mobile App Development','Machine Learning','Diploma in Computer Application','Diploma in Human Resource Management','Post Graduate Programme in Public Policy and Management (PGP-PMP)'

],

    dropdown : {
        enabled: 1, // suggest tags after a single character input
        classname : 'extra-properties' // custom class for the suggestions dropdown
    } // map tags' values to this property name, so this property will be the actual value and not the printed value on the screen
})

tagify.on('click', function(e){
    console.log(e.detail);
});

tagify.on('remove', function(e){
    console.log(e.detail);
});

tagify.on('add', function(e){
    console.log( "original Input:", tagify.DOM.originalInput);
    console.log( "original Input's value:", tagify.DOM.originalInput.value);
    console.log( "event detail:", e.detail);
      
    //alert(JSON.parse(taggg) );
});

// add the first 2 tags from the "allowedTags" Aray automatically
//tagify.addTags(tagify.settings.whitelist.slice(0,2));

})()
// 'Post Graduate Diploma in Management','Post Graduate Diploma in Business Management','Post Graduate Diploma in Information Technology','Post Graduate Diploma in Marketing Management','Post Graduate Diploma in Financial Management','Post Graduate Diploma in Business Analytics','Post Graduate Diploma in Business Administration','Diploma in Front Office','Diploma in Retail Management','Post Graduate Diploma in Information Technology Management','Post Graduate Diploma in Operations Management','Post Graduate Diploma in Logistics and Supply Chain Management','Post Graduate Diploma in International Business','Post Graduate Diploma in Finance','Diploma in Business Management','Diploma in Tourism & Travel Management','Post Graduate Diploma in Rural Management','Diploma in Event Management','Post Graduate Diploma in Supply Chain Management','Diploma in Management','Executive Post Graduate Diploma in Management','','','','','','','','','','','','','',
 // 'Diploma in Fine Arts','Diploma in Engineering','Diploma in Mechatronics','Diploma in Textile Technology','Diploma in Fashion Technology','Diploma in ceramic technology','Diploma in Rubber Technology','Diploma in Modren office Practice','Diploma in Plastic technology','Diploma in dental mechanics','Diploma in Buisness Administration','Diploma in commercial practice','Diploma in Hotel Management and Catering Technology','Diploma in Agriculture','Diploma in cosmetology','Diploma in beauty culture','Diploma in 3D animation','','','','','','',
 