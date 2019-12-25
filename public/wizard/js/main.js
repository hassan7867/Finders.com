(function ($) {
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
        onStepChanging: function (event, currentIndex, newIndex) {
            if (newIndex === 2) {
                if (document.getElementById('select-country').value === '-1') {
                    document.getElementById('country-validate').style.display = 'block';
                    document.getElementById('city-validate').style.display = 'none';
                    document.getElementById('location-validate').style.display = 'none';
                    return false;
                }
                if (document.getElementById('select-city').value === '-1' || document.getElementById('select-city').value === 'Select City') {
                    document.getElementById('city-validate').style.display = 'block';
                    document.getElementById('country-validate').style.display = 'none';
                    document.getElementById('location-validate').style.display = 'none';
                    return false;
                }
                if (document.getElementById('select-location').value === '' || document.getElementById('select-location').value === undefined) {
                    document.getElementById('city-validate').style.display = 'none';
                    document.getElementById('country-validate').style.display = 'none';
                    document.getElementById('location-validate').style.display = 'block';
                    return false;
                }
                document.getElementById('country-validate').style.display = 'none';
                document.getElementById('city-validate').style.display = 'none';
                document.getElementById('location-validate').style.display = 'none';
                return true;
            }
            if (newIndex === 3) {
                if (document.getElementById('property-title').value === '' || document.getElementById('property-title').value === undefined) {
                    document.getElementById('property-title-validate').style.display = 'block';
                    document.getElementById('property-description-validate').style.display = 'none';
                    document.getElementById('property-price-validate').style.display = 'none';
                    document.getElementById('property-land-area-validate').style.display = 'none';
                    document.getElementById('property-expiry-after-validate').style.display = 'none';
                    return false;
                }
                if (document.getElementById('property-description').value === '' || document.getElementById('property-description').value === undefined) {
                    document.getElementById('property-title-validate').style.display = 'none';
                    document.getElementById('property-description-validate').style.display = 'block';
                    document.getElementById('property-price-validate').style.display = 'none';
                    document.getElementById('property-land-area-validate').style.display = 'none';
                    document.getElementById('property-expiry-after-validate').style.display = 'none';
                    return false;
                }
                if (document.getElementById('property-price').value === '' || document.getElementById('property-price').value === undefined) {
                    document.getElementById('property-title-validate').style.display = 'none';
                    document.getElementById('property-description-validate').style.display = 'none';
                    document.getElementById('property-price-validate').style.display = 'block';
                    document.getElementById('property-land-area-validate').style.display = 'none';
                    document.getElementById('property-expiry-after-validate').style.display = 'none';
                    return false;
                }
                if (document.getElementById('property-land-area').value === '' || document.getElementById('property-land-area').value === undefined || document.getElementById('property-unit').value === '' || document.getElementById('property-unit').value === undefined) {
                    document.getElementById('property-title-validate').style.display = 'none';
                    document.getElementById('property-description-validate').style.display = 'none';
                    document.getElementById('property-price-validate').style.display = 'none';
                    document.getElementById('property-land-area-validate').style.display = 'block';
                    document.getElementById('property-expiry-after-validate').style.display = 'none';
                    return false;
                }
                if (document.getElementById('property-expiry-date').value === '' || document.getElementById('property-expiry-date').value === undefined) {
                    document.getElementById('property-title-validate').style.display = 'none';
                    document.getElementById('property-description-validate').style.display = 'none';
                    document.getElementById('property-price-validate').style.display = 'none';
                    document.getElementById('property-land-area-validate').style.display = 'none';
                    document.getElementById('property-expiry-after-validate').style.display = 'block';
                    return false;
                }
                document.getElementById('property-title-validate').style.display = 'none';
                document.getElementById('property-description-validate').style.display = 'none';
                document.getElementById('property-price-validate').style.display = 'none';
                document.getElementById('property-land-area-validate').style.display = 'none';
                document.getElementById('property-expiry-after-validate').style.display = 'none';
                return true;
            }
            if (newIndex === 4) {
                if (propertyType === 'home') {
                    if (document.getElementById('bedroom-feature').value === '' || document.getElementById('bedroom-feature').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'block';
                        document.getElementById('bathroom-validate').style.display = 'none';
                        document.getElementById('kitchen-validate').style.display = 'none';
                        document.getElementById('store-room-validate').style.display = 'none';
                        document.getElementById('home-parking-space-validate').style.display = 'none';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'none';
                        document.getElementById('room-validate').style.display = 'none';
                        document.getElementById('elevator-validate').style.display = 'none';
                        document.getElementById('commercial-parking-space-validate').style.display = 'none';
                        return false;
                    }
                    if (document.getElementById('bathroom-feature').value === '' || document.getElementById('bathroom-feature').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'none';
                        document.getElementById('bathroom-validate').style.display = 'block';
                        document.getElementById('kitchen-validate').style.display = 'none';
                        document.getElementById('store-room-validate').style.display = 'none';
                        document.getElementById('home-parking-space-validate').style.display = 'none';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'none';
                        document.getElementById('room-validate').style.display = 'none';
                        document.getElementById('elevator-validate').style.display = 'none';
                        document.getElementById('commercial-parking-space-validate').style.display = 'none';
                        return false;
                    }
                    if (document.getElementById('kitchen-feature').value === '' || document.getElementById('kitchen-feature').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'none';
                        document.getElementById('bathroom-validate').style.display = 'none';
                        document.getElementById('kitchen-validate').style.display = 'block';
                        document.getElementById('store-room-validate').style.display = 'none';
                        document.getElementById('home-parking-space-validate').style.display = 'none';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'none';
                        document.getElementById('room-validate').style.display = 'none';
                        document.getElementById('elevator-validate').style.display = 'none';
                        document.getElementById('commercial-parking-space-validate').style.display = 'none';
                        return false;
                    }
                    if (document.getElementById('store-room-feature').value === '' || document.getElementById('store-room-feature').value === undefined || document.getElementById('property-unit').value === '' || document.getElementById('property-unit').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'none';
                        document.getElementById('bathroom-validate').style.display = 'none';
                        document.getElementById('kitchen-validate').style.display = 'none';
                        document.getElementById('store-room-validate').style.display = 'block';
                        document.getElementById('home-parking-space-validate').style.display = 'none';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'none';
                        document.getElementById('room-validate').style.display = 'none';
                        document.getElementById('elevator-validate').style.display = 'none';
                        document.getElementById('commercial-parking-space-validate').style.display = 'none';
                        return false;
                    }
                    if (document.getElementById('home-parking-space-feature').value === '' || document.getElementById('home-parking-space-feature').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'none';
                        document.getElementById('bathroom-validate').style.display = 'none';
                        document.getElementById('kitchen-validate').style.display = 'none';
                        document.getElementById('store-room-validate').style.display = 'none';
                        document.getElementById('home-parking-space-validate').style.display = 'block';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'none';
                        document.getElementById('room-validate').style.display = 'none';
                        document.getElementById('elevator-validate').style.display = 'none';
                        document.getElementById('commercial-parking-space-validate').style.display = 'none';
                        return false;
                    }

                } else if (propertyType === 'plot') {
                    return true;
                } else {
                    if (document.getElementById('builtin-year-feature').value === '' || document.getElementById('builtin-year-feature').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'none';
                        document.getElementById('bathroom-validate').style.display = 'none';
                        document.getElementById('kitchen-validate').style.display = 'none';
                        document.getElementById('store-room-validate').style.display = 'none';
                        document.getElementById('home-parking-space-validate').style.display = 'none';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'block';
                        document.getElementById('room-validate').style.display = 'none';
                        document.getElementById('floor-validate').style.display = 'none';
                        document.getElementById('elevator-validate').style.display = 'none';
                        document.getElementById('commercial-parking-space-validate').style.display = 'none';
                        return false;
                    }
                    if (document.getElementById('room-feature').value === '' || document.getElementById('room-feature').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'none';
                        document.getElementById('bathroom-validate').style.display = 'none';
                        document.getElementById('kitchen-validate').style.display = 'none';
                        document.getElementById('store-room-validate').style.display = 'none';
                        document.getElementById('home-parking-space-validate').style.display = 'none';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'none';
                        document.getElementById('room-validate').style.display = 'block';
                        document.getElementById('floor-validate').style.display = 'none';
                        document.getElementById('elevator-validate').style.display = 'none';
                        document.getElementById('commercial-parking-space-validate').style.display = 'none';
                        return false;
                    }
                    if (document.getElementById('floor-feature').value === '' || document.getElementById('floor-feature').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'none';
                        document.getElementById('bathroom-validate').style.display = 'none';
                        document.getElementById('kitchen-validate').style.display = 'none';
                        document.getElementById('store-room-validate').style.display = 'none';
                        document.getElementById('home-parking-space-validate').style.display = 'none';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'none';
                        document.getElementById('room-validate').style.display = 'none';
                        document.getElementById('floor-validate').style.display = 'block';
                        document.getElementById('elevator-validate').style.display = 'none';
                        document.getElementById('commercial-parking-space-validate').style.display = 'none';
                        return false;
                    }
                    if (document.getElementById('elevator-feature').value === '' || document.getElementById('elevator-feature').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'none';
                        document.getElementById('bathroom-validate').style.display = 'none';
                        document.getElementById('kitchen-validate').style.display = 'none';
                        document.getElementById('store-room-validate').style.display = 'none';
                        document.getElementById('home-parking-space-validate').style.display = 'none';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'none';
                        document.getElementById('room-validate').style.display = 'none';
                        document.getElementById('floor-validate').style.display = 'none';
                        document.getElementById('elevator-validate').style.display = 'block';
                        document.getElementById('commercial-parking-space-validate').style.display = 'none';
                        return false;
                    }
                    if (document.getElementById('commercial-parking-space-feature').value === '' || document.getElementById('commercial-parking-space-feature').value === undefined) {
                        document.getElementById('bedroom-validate').style.display = 'none';
                        document.getElementById('bathroom-validate').style.display = 'none';
                        document.getElementById('kitchen-validate').style.display = 'none';
                        document.getElementById('store-room-validate').style.display = 'none';
                        document.getElementById('home-parking-space-validate').style.display = 'none';
                        document.getElementById('corner-validate').style.display = 'none';
                        document.getElementById('park-facing-validate').style.display = 'none';
                        document.getElementById('electricity-validate').style.display = 'none';
                        document.getElementById('water-supply-validate').style.display = 'none';
                        document.getElementById('sui-gas-validate').style.display = 'none';
                        document.getElementById('builtin-year-validate').style.display = 'none';
                        document.getElementById('room-validate').style.display = 'none';
                        document.getElementById('floor-validate').style.display = 'none';
                        document.getElementById('elevator-validate').style.display = 'none';
                        document.getElementById('commercial-parking-space-validate').style.display = 'block';
                        return false;
                    }
                }

                document.getElementById('bedroom-validate').style.display = 'none';
                document.getElementById('bathroom-validate').style.display = 'none';
                document.getElementById('kitchen-validate').style.display = 'none';
                document.getElementById('store-room-validate').style.display = 'none';
                document.getElementById('home-parking-space-validate').style.display = 'none';
                document.getElementById('corner-validate').style.display = 'none';
                document.getElementById('park-facing-validate').style.display = 'none';
                document.getElementById('electricity-validate').style.display = 'none';
                document.getElementById('water-supply-validate').style.display = 'none';
                document.getElementById('sui-gas-validate').style.display = 'none';
                document.getElementById('builtin-year-validate').style.display = 'none';
                document.getElementById('room-validate').style.display = 'none';
                document.getElementById('floor-validate').style.display = 'none';
                document.getElementById('elevator-validate').style.display = 'none';
                document.getElementById('commercial-parking-space-validate').style.display = 'none';
                return true;
            }

            //form.validate().settings.ignore = ":disabled,:hidden";
            // console.log(form.steps("getCurrentIndex"));
            return true;
        },
        onFinishing: function (event, currentIndex) {
            // form.validate().settings.ignore = ":disabled";
            //  console.log(getCurrentIndex);
            return true;
        },
        onFinished: function (event, currentIndex) {
            if (document.getElementById('contact-name').value === '' || document.getElementById('contact-name').value === undefined) {
                document.getElementById('contact-name-validate').style.display = 'block';
                document.getElementById('contact-email-validate').style.display = 'none';
                document.getElementById('contact-mobile-validate').style.display = 'none';
                return false;
            }
            if (document.getElementById('contact-email').value === '' || document.getElementById('contact-email').value === undefined) {
                document.getElementById('contact-name-validate').style.display = 'none';
                document.getElementById('contact-email-validate').style.display = 'block';
                document.getElementById('contact-mobile-validate').style.display = 'none';
                return false;
            }
            if (/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(document.getElementById('contact-email').value)) {
                document.getElementById('contact-email-format-validate').style.display = 'none';
                document.getElementById('contact-email-validate').style.display = 'none';
            } else {
                document.getElementById('contact-name-validate').style.display = 'none';
                document.getElementById('contact-email-validate').style.display = 'none';
                document.getElementById('contact-email-format-validate').style.display = 'block';
                document.getElementById('contact-mobile-validate').style.display = 'none';
                return false;
            }
            if (document.getElementById('contact-mobile').value === '' || document.getElementById('contact-mobile').value === undefined) {
                document.getElementById('contact-name-validate').style.display = 'none';
                document.getElementById('contact-email-validate').style.display = 'none';
                document.getElementById('contact-email-format-validate').style.display = 'none';
                document.getElementById('contact-mobile-validate').style.display = 'block';
                return false;
            }
            document.getElementById('contact-name-validate').style.display = 'none';
            document.getElementById('contact-email-validate').style.display = 'none';
            document.getElementById('contact-email-format-validate').style.display = 'none';
            document.getElementById('contact-mobile-validate').style.display = 'none';
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
