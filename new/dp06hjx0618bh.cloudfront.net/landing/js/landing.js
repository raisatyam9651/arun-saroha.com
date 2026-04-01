var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
$(function() {
    $.ajaxSetup({xhrFields: { withCredentials: true } });
    var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    var hostUrl='https://cureconsult.com/'
    var pageObj = {
        campaign:ko.observable(''),
        name:ko.observable(),
        phone:ko.observable(),
        qualification:ko.observable(),
        experience:ko.observable(),
        doctor:ko.observable(),
        hospital:ko.observable(),
        date:ko.observable(''),
        slot:ko.observable(''),
        img_url:ko.observable(''),
        doctorDetails:ko.observable(''),
        selectedhospital:ko.observable(''),
        selecteddoctor:ko.observable(''),
        selectedDate:ko.observable(''),
        selectedslot:ko.observable(''),
        bookloading:ko.observable(false),
        initialBookAppointment:ko.observable(false),
        confirmBookAppointment:ko.observable(false),
        editBookAppointment:ko.observable(false),
        submitbookAppointmentInfo:ko.observable(false),
        successBookAppointment:ko.observable(false),
        enabledoctorList:ko.observable(false),
        enableslotList:ko.observable(false),
        bookAppointmnetCaption:ko.observable('Schedule An Appointment With'),
        availableHospitals:ko.observableArray([]),
        availableDoctors:ko.observableArray([]),
        availableDates:ko.observableArray([]),
        availableSlots:ko.observableArray([]),
        whatsapp:ko.observable(),
        email:ko.observable(),
        address:ko.observable(),
        doctors:ko.observableArray([]),
        reviews:ko.observableArray([]),
        faq:ko.observableArray([]),
        specificDoctor:ko.observable(true),
        displaydoctors:ko.observable(),
        loadMap:function () {
            var self = this;
            var pos = {lat: parseFloat(self.campaign().lat), lng: parseFloat(self.campaign().lng)};
            // The map, centered at pos
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 10, center: pos});
            // The marker, positioned at pos
            var marker = new google.maps.Marker({position: pos, map: map});
        },
        enableDoctor:function () {
            var self=this;
            self.displaydoctors(!self.displaydoctors());
        },
        confirmBookClick:function () {
            var self = this;

            self.bookAppointmnetCaption('Almost Done!')
            self.confirmBookAppointment(true);
            self.initialBookAppointment(false);
        },
        getFirstThree:function () {
            var self = this;
            if (self.campaign())
            return (self.campaign().doctors).slice(0,3);
        },
        getDoctor:function (data,event) {
            var self = pageObj;
            $('#doctormodal').modal('hide');
            self.selectedDate('');
            self.date('');
            self.selectedslot('');
            self.slot('');
            self.img_url('');
            self.bookAppointmnetCaption('Schedule An Appointment With')
            var docId=$(event.target).data('id');
            self.specificDoctor(true)
            self.bookloading(true);
            self.getDoctordetails(docId);
        },
        getDoctordetails:function (docId) {
            var self = this;

            $.get(hostUrl+'/landingpage/getdoctor/'+params.split("CampaignId=")[1]+'/'+docId).done(function(data){
                self.doctorDetails(data);
                self.hospital(data.hospital);
                self.doctor(data.name);
                self.img_url(data.img_url);
                self.selecteddoctor(docId);
                self.selectedhospital(data.hospital_id);
                //self.name(data[0].name);
                self.qualification(data.qualification);
                self.experience(data.experience);
                self.address(data.address);
                if(self.specificDoctor()){
                    if(self.selectedDate() == '')
                        self.selectedDate(data.available_date);
                    if(self.date() == '')
                        self.date(data.available_date);
                    if(self.slot() == '')
                        self.slot(data.available_time);
                    if(self.selectedslot() == '')
                        self.selectedslot(data.slot_id);
                }
                self.bookloading(false);
                self.initialBookAppointment(true);
            })
                .fail(function(){
                    console.log("GetDoctor is Failed");
                });
        },
        bookDateChange:function () {
            var self = this;
            var date=document.getElementById("prefered_date").value;
            var doc=document.getElementById("doc").value;
            //console.log(date)
            self.selectedDate(date);
            $.get(hostUrl+'/landingpage/getslotavailability/'+doc+'/'+date).done(function(data){
                //console.log(data);
                self.availableSlots(data);
                //console.log(self.selectedslot());
                if(self.selectedslot()!='')
                    document.getElementById("prefered_time").value = self.selectedslot();
                self.enableslotList(true);
                self.bookloading(false);
            })
                .fail(function(){
                    console.log("Get Slots is Failed");
                });
        },
        submitBookAppointment:function () {
            var self = this;
            var name=$('#patient_name').val();
            var mobile=$('#patient_phone').val();
            if(name.trim()!="" && mobile.length==10 && /^\d{10}$/.test(mobile)){
                var obj={};
                obj.slot=self.selectedslot();
                obj.doctorId=self.selecteddoctor();
                obj.name = name;
                obj.phone = mobile;
                obj.date =self.selectedDate();
                obj.time =self.slot();
                $.get(hostUrl+'/landingpage/bookappointment',obj).done(function(data){
                    //console.log(data.message);
                    self.bookAppointmnetCaption('Thank You! Your Appointment Has Been Scheduled')
                    self.confirmBookAppointment(false);
                    self.successBookAppointment(true);
                    gtag('event', 'Book Appointment');
                    gt('event', 'Book Appointment');
                })
                    .fail(function(){
                        console.log("Book Appointment is Failed");
                    });
            }
            else {
                $(".text-danger").remove();
                $('patient_name').removeClass('errorspace');
                if(name==""){
                    $('#patient_name').after("<p class='text-danger text-left mb-1'>Name is Required</p>");
                    $('#patient_name').addClass('errorspace');
                }
                $('patient_phone').removeClass('errorspace');
                if(mobile){
                    var m=/^\d{10}$/;
                    if(!m.test(mobile)){
                        $('#patient_phone').after("<p class='text-danger text-left mb-1'>Enter 10 digit Phone number</p>");
                        $('#patient_phone').addClass('errorspace');
                    }
                }
                else {
                    $('#patient_phone').after("<p class='text-danger text-left mb-1'>Phone number is Required</p>");
                    $('#patient_phone').addClass('errorspace');
                }
                return;
            }
        },
        genaralisedBookAppointment:function () {
            var self = this;

            self.specificDoctor(false);
            self.selectedhospital('')
            self.selecteddoctor('')
            self.selectedDate('')
            self.selectedslot('')
            self.bookloading(true);
            self.editBookAppointmentClick();
        },
        editBookAppointmentClick:function () {
            var self = this;

            self.bookAppointmnetCaption('Edit Scheduled Appointment')
            self.initialBookAppointment(false);

            self.enabledoctorList(false);
            self.enableslotList(false);


            $.get(hostUrl+'/landingpage/gethospitalavailability/'+params.split("CampaignId=")[1]).done(function(data){
                //console.log(data);
                self.availableHospitals(data);
                //console.log(self.selectedhospital())
                if(self.selectedhospital()!='')
                    document.getElementById("hospital").value = self.selectedhospital();
                self.editBookAppointment(true);
                self.boookHospitalChange();
            })
                .fail(function(){
                    console.log("Fetching Availabile Hospitals is Failed");
                });
        },
        submitEditBookAppointment:function () {
            var self = this;
            var hospital = $('#hospital').val();
            var doctor = $('#doc').val();
            var date = $('#prefered_date').val();
            var time = $('#prefered_time').val();

            self.getDoctordetails(doctor);
            self.date($('#prefered_date').find(':selected').text());
            self.selectedDate(date);
            self.slot($('#prefered_time').find(':selected').text());
            self.selectedslot($('#prefered_time').val());
            self.editBookAppointment(false);
            self.bookAppointmnetCaption('Schedule An Appointment With');
            self.initialBookAppointment(true);
        },
        boookHospitalChange:function (data,event) {
            var self = pageObj;
            self.enabledoctorList(true);
            if(self.selectedhospital()!=undefined)
                $.get(hostUrl+'/landingpage/getdoctoravailability/'+params.split("CampaignId=")[1]+'/'+document.getElementById("hospital").value).done(function(data){
                    //console.log(data);
                    self.availableDoctors(data);

                    if(self.selecteddoctor()!='')
                        document.getElementById("doc").value= self.selecteddoctor();
                    self.bookDoctorChange();
                })
                    .fail(function(){
                        console.log("Fetching Availabile Doctors is Failed");
                    });

        },
        bookDoctorChange:function (data,event) {
            var self = pageObj;
            if(self.selecteddoctor()!=undefined)
                $.get(hostUrl+'/landingpage/getdateavailability/'+document.getElementById("doc").value).done(function(data){
                    //console.log(data);
                    self.availableDates(data);
                    //console.log(self.selectedDate());
                    if(self.selectedDate()!='')
                        document.getElementById("prefered_date").value= self.selectedDate();
                    self.bookDateChange();
                })
                    .fail(function(){
                        console.log("Fetching Availabile Dates is Failed");
                    });
        },
        formSubmit:function () {
            var self = this;
            //console.log("click")
            var obj={};
            if (isMobile){
                var name=$('#contact-form-m #name').val();
                var mobile=$('#contact-form-m #phone').val();
                var email=$('#contact-form-m #email').val();
                var city=$("#contact-form-m #city option:selected").val();
                var msg=$('#contact-form-m #message').val();
            }
            else {
                var name=$('#contact-form #name').val();
                var mobile=$('#contact-form #phone').val();
                var email=$('#contact-form #email').val();
                var city=$("#contact-form #city option:selected").val();
                var msg=$('#contact-form #message').val();
            }
            var url=window.location.href;
            if(name.trim()!=""&&mobile.length==10 && /^\d{10}$/.test(mobile)&&email.indexOf('@')>-1&&msg!=""){
                obj.name=name;
                obj.mobile=mobile;
                obj.email=email;
                obj.city=city;
                obj.message=msg;
                obj.url=url;
                $('#contactrequest').prop( "disabled", true );
                //console.log(obj);
                $.get(hostUrl+'/landingpage/contactus', obj).done(function(data){
                    if(data.message=="success") {
                        $('#thankyoumodal').modal('show');
                        $('#contactrequest').prop( "disabled", false );
                        $('.contact-field').val('');
                        gtag('event', 'Form submission');
                        gt('event', 'Form submission');
                    }
                })
                    .fail(function(){
                        $('#contactrequest').prop( "disabled", false );
                        console.log("Landing page Contact Us Failed");
                    });
            }
            else{
                $(".text-danger").remove();
                if (isMobile){
                    $('#contact-form-m #name').removeClass('errorspace');
                    if(name==""){
                        $('#contact-form-m #name').after("<p class='text-danger text-left mb-1'>Name is Required</p>");
                        $('#contact-form-m #name').addClass('errorspace');
                    }

                    $('#contact-form-m #email').removeClass("errorspace");
                    if(email == ''){
                        $('#contact-form-m #email').after("<p class='text-danger text-left mb-1'>EmailId is Required</p>");
                        $('#contact-form-m #email').addClass("errorspace");
                    }
                    else{
                        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if(!regex.test(email)) {
                            $('#contact-form-m #email').after("<p class='text-danger text-left mb-1'>Email-id is invalid</p>");
                            $('#contact-form-m #email').addClass("errorspace");
                        }
                    }

                    $('#contact-form-m #phone').removeClass("errorspace");
                    if(mobile == ''){
                        $('#contact-form-m #phone').after("<p class='text-danger text-left mb-1'>Phone number is Required</p>");
                        $('#contact-form-m #phone').addClass('errorspace');
                    }
                    else{
                        var regex =  /^\d{10}$/;
                        if(!regex.test(mobile)) {
                            $('#contact-form-m #phone').after("<p class='text-danger text-left mb-1'>Phone number is invalid</p>");
                            $('#contact-form-m #phone').addClass("errorspace");
                        }
                    }
                    $('#contact-form-m #message').removeClass('errorspace');
                    if(msg==""){
                        $('#contact-form-m #message').after("<p class='text-danger text-left mb-1'>Message is Required</p>");
                        $('#contact-form-m #message').addClass('errorspace');
                    }

                }
                else {
                    $('#contact-form #name').removeClass('errorspace');
                    if(name==""){
                        $('#contact-form #name').after("<p class='text-danger text-left mb-1'>Name is Required</p>");
                        $('#contact-form #name').addClass('errorspace');
                    }

                    $('#contact-form #email').removeClass("errorspace");
                    if(email == ''){
                        $('#contact-form #email').after("<p class='text-danger text-left mb-1'>EmailId is Required</p>");
                        $('#contact-form #email').addClass("errorspace");
                    }
                    else{
                        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        if(!regex.test(email)) {
                            $('#contact-form #email').after("<p class='text-danger text-left mb-1'>EmailId is invalid;