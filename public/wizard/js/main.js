(function($) {
    var form = $("#signup-form");
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        labels: {
            previous: 'Previous',
            next: 'Next',
            finish: 'Submit',
            current: ''
        },
        titleTemplate: '<div class="title"><span class="number">#index#</span>#title#</div>',
        onStepChanging: function(event, currentIndex, newIndex) {
            //form.validate().settings.ignore = ":disabled,:hidden";
            // console.log(form.steps("getCurrentIndex"));
            return true;
        },
        onFinishing: function(event, currentIndex) {
           // form.validate().settings.ignore = ":disabled";
          //  console.log(getCurrentIndex);
            return true;
        },
        onFinished: function(event, currentIndex) {
            saveProperty();
        },
        // onInit : function (event, currentIndex) {
        //     event.append('demo');
        // }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });


    // $.dobPicker({
    //     daySelector: '#expiry_date',
    //     monthSelector: '#expiry_month',
    //     yearSelector: '#expiry_year',
    //     dayDefault: 'DD',
    //     yearDefault: 'YYYY',
    //     minimumAge: 0,
    //     maximumAge: 120
    // });


    // $('#button').click(function () {
    //     $("input[type='file']").trigger('click');
    // })

})(jQuery);
