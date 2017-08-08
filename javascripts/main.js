$(document).ready(function() {

    $('#hospital_form').bootstrapValidator({


        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            holder_first_name: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
            holder_last_name: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
			hospital_name: {
                validators: {
                    stringLength: {
                        min: 3,
                    },
                    notEmpty: {
                        message: 'Please enter Hospital Name'
                    }
                }
            },
			hospital_password: {
                validators: {
                    stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    }
                }
            },
			confirm_password: {
                validators: {
                    identical: {
                        field: 'hospital_password',
                        message: 'The password and its confirm are not the same'
                    },
                    
                    notEmpty: {
                        message: 'Please confirm your Password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    },
                    remote: {
                    message:"Email already exists",
                    url: "check_email.php",
                    type: "post",

                 }
                }
            },
            contact_no: {
                validators: {
                    stringLength: {
                        min: 10, 
                        max: 10,
                    },
                    integer: {
                        message: 'The value is not an integer'
                    },
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                
                }
            },
			city: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Destrict/City'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your State'
                    }
                }
            }        
        }
    })

    .on('success.form.bv', function(e) {

            $('#success_message').slideDown({ opacity: "show" }, "slow")
                $('#hospital_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                }, 'json'); 
            });


      //Receiver Validation

    $('#patient_form').bootstrapValidator({


        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    },
                    remote: {
                        message:"Email already exists",
                        url: "check_email.php",
                        type: "post",
                    }
                }
            },
            
            patient_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
            patient_password: {
                validators: {
                     stringLength: {
                        min: 8,

                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    }
                }
            },
            patient_confirm_password: {
                validators: {
                    identical: {
                        field: 'patient_password',
                        message: 'The password and its confirm are not the same'
                    },
                    
                    notEmpty: {
                        message: 'Please confirm your Password'
                    }
                }
            },
            patient_contact_no: {
                validators: {
                  stringLength: {
                        min: 10, 
                        max: 12,
                    },
                    integer: {
                        message: 'The value is not an integer'
                    },
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
                 blood_group: {
                validators: {
                    notEmpty: {
                        message: 'Please select your blood_group'
                    }
                }
            }
            
                
        }


    })

    .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#patient_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
                }, 'json');
            });
    $('#addDetails').bootstrapValidator({

        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter Name'
                    },
                   
                }
            },
            age: {
                validators: {
                     greaterThan: {
                        value: 18,
                        message: 'Age must be greater than or equal to 18'
                    },
                    notEmpty: {
                        message: 'Please enter Age'
                    }
                }
            },
           
            contact_no: {
                validators: {
                  stringLength: {
                        min: 10, 
                        max: 12,
                    },
                    notEmpty: {
                        message: 'Please enter Contact No.'
                     }
                
            }
            },
                blood_group: {
                validators: {
                    notEmpty: {
                        message: 'Please select blood_group'
                    }
                }
            }
            
                
        }


    })

    .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#addDetails').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });


// Login Validation

    $('#login_button').click(function(){

        var email = $("#email").val();
        var password = $("#password").val();

        // Checking for blank field of email.
        if( email ==''){
            $('#email').focus();
            document.getElementById("demo").innerHTML = "Please enter Email";
        }

        // Checking for blank field of password.
        else if(password ==''){
            $('#password').focus();
            document.getElementById("demo").innerHTML = "Please enter Password";
        }

        else {
            $.ajax({
                type: "POST",
                url: "login.php",
                data: {email:email,password:password},
                success: function(data)
                {
                    console.log(data);
                    if(data==='Hospital'){
                        console.log('success');
                        window.location.replace("dashboard.php");
                    }
                    else if(data==='Receiver'){
                        window.location.replace("availablebloodsamples.php");
                    }
                    else {
                    document.getElementById("demo").innerHTML = "Either email or password is incorrect";
                    }

                }
            });
        }
    });

});