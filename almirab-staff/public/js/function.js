   
$(document).ready(function() { 

    /** */
    $('#dataTable_staff').DataTable({
        paging: false,
        pageLength: 100,
        lengthChange: true,
        searching: true,
        ordering: true,
        info: false,
        autoWidth: false,
        language: {
        search: "",
        searchPlaceholder: " Izlash...",
        sLengthMenu: "Кўриш _MENU_ тадан",
        sInfo: "Ko'rish _START_ dan _END_ gacha _TOTAL_ jami",
        emptyTable: "Ma'lumot mavjud emas",
        }
    });



    $('.js_password_update').on('submit', function(e) {
        e.preventDefault();

        let url = $(this).attr('action');
        let method = $(this).attr('method');
        let password = $(this).find('.error_password')
        let password_confirm = $(this).find('.error_password_confirm')

        console.log(url);
        
        $.ajax({
            url: url,
            method: method,
            data: $(this).serialize(),
            success: function(res) {
            console.log(res);
                if(res.error) {
                    password.html(res.error.password)
                    password_confirm.html(res.error.password_confirm)
                }

                if(res.success) {
                    window.location.href = 'http://127.0.0.1:8000/home';
                }
                console.log(res);
        
            },
            error: function(res) {
                console.log(res);
            }

        });

    });

   
    $('#js_add_staff').on('submit', function (e) {
        e.preventDefault();

         var url = $(this).attr('action');
         var method = $(this).attr('method');
         var formData = new FormData(this);

         var firstname_error = $(document).find('.validation-firstname');
         var lastname_error = $(document).find('.validation-lastname');
         var reference_error = $(document).find('.validation-reference');
         var address_error = $(document).find('.validation-address');
         var born_error = $(document).find('.validation-born');
         var specialty_error = $(document).find('.validation-specialty');
         var work_activity_error = $(document).find('.validation-work_activity');
         var lang_error = $(document).find('.validation-lang');
         var salary_error = $(document).find('.validation-salary');
         var phone_one_error = $(document).find('.validation-phone_one');
         var phone_two_error = $(document).find('.validation-phone_two');
         var marital_status_error = $(document).find('.validation-marital_status');
         var file1_error = $(document).find('.validation-file1');
         var file2_error = $(document).find('.validation-file2');
         $.ajax({
             type:method,
             url: url,
             data: formData,
             contentType: false,
             processData: false,
             success: (res) => {

                console.log(res)
                if (res.status==1) {
                    location.reload();
                }
                if (res.status == 0) {
                    if (res.errors.firstname) {
                        firstname_error.html(res.errors.firstname);
                        firstname_error.siblings('input[name="firstname"]').addClass('is-invalid')   
                    }
                    if (res.errors.lastname) {
                        lastname_error.html(res.errors.lastname);
                        lastname_error.siblings('input[name="lastname"]').addClass('is-invalid')
                    }
                    if (res.errors.reference) {
                        reference_error.html(res.errors.reference);
                        reference_error.siblings('input[name="reference"]').addClass('is-invalid')
                    }
                    if (res.errors.address) {
                        address_error.html(res.errors.address);
                        address_error.siblings('input[name="address"]').addClass('is-invalid')
                    }
                    if (res.errors.born) {
                        born_error.html(res.errors.born);
                        born_error.siblings('input[name="born"]').addClass('is-invalid')                        
                    }
                    if (res.errors.specialty) {
                        specialty_error.html(res.errors.specialty);
                        specialty_error.siblings('input[name="specialty"]').addClass('is-invalid')
                    }
                    if (res.errors.work_activity) {
                        work_activity_error.html(res.errors.work_activity);
                        work_activity_error.siblings('input[name="work_activity"]').addClass('is-invalid')
                    }
                    if (res.errors.lang) {
                        lang_error.html(res.errors.lang);
                        lang_error.siblings('input[name="lang"]').addClass('is-invalid')
                    }
                    if (res.errors.salary) {
                        salary_error.html(res.errors.salary);
                        salary_error.siblings('input[name="salary"]').addClass('is-invalid')
                    }
                    if (res.errors.phone_one) {
                        phone_one_error.html(res.errors.phone_one);
                        phone_one_error.siblings('input[name="phone_one"]').addClass('is-invalid')
                    }
                    if (res.errors.phone_two) {
                        phone_two_error.html(res.errors.phone_two);
                        phone_two_error.siblings('input[name="phone_two"]').addClass('is-invalid')
                    }
                    if (res.errors.marital_status) {
                        marital_status_error.html(res.errors.marital_status);
                        marital_status_error.siblings('input[name="marital_status"]').addClass('is-invalid')                        
                    }
                    if (res.errors.file1) {
                        file1_error.html(res.errors.file1);
                        file1_error.siblings('input[name="file1"]').addClass('is-invalid')
                    }
                    if (res.errors.file2) {
                        file2_error.html(res.errors.file2);
                        file2_error.siblings('input[name="file2"]').addClass('is-invalid')
                    }

                }

             }
         });
    })
    $('#js_add_staff input[name="firstname"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-firstname').html(' ');
    });
    $('#js_add_staff input[name="lastname"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-lastname').html(' ');
    })
    $('#js_add_staff input[name="reference"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-reference').html(' ');
    })
    $('#js_add_staff input[name="address"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-address').html(' ');
    })
    $('#js_add_staff input[name="born"]').on('change', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-born').html(' ');
    })
    $('#js_add_staff input[name="specialty"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-specialty').html(' ');
    })
    $('#js_add_staff input[name="work_activity"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-work_activity').html(' ');
    })
    $('#js_add_staff input[name="lang"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-lang').html(' ');
    })
    $('#js_add_staff input[name="salary"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-salary').html(' ');
    })
    $('#js_add_staff input[name="phone_one"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-phone_one').html(' ');
    })
    $('#js_add_staff input[name="phone_two"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-phone_two').html(' ');
    })
    $('#js_add_staff input[name="marital_status"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-marital_status').html(' ');
    })
    $('#js_add_staff input[name="file1"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-file1').html(' ');
    })
    $('#js_add_staff input[name="file2"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-file2').html(' ');
    })


    $('.js_edit_staff').on('submit', function (e) {
        e.preventDefault();

         var url = $(this).attr('action');
         var method = $(this).attr('method');
         var formData = new FormData(this);
        
         var firstname_error = $(document).find('.validation-firstname');
         var lastname_error = $(document).find('.validation-lastname');
         var reference_error = $(document).find('.validation-reference');
         var address_error = $(document).find('.validation-address');
         var born_error = $(document).find('.validation-born');
         var specialty_error = $(document).find('.validation-specialty');
         var work_activity_error = $(document).find('.validation-work_activity');
         var lang_error = $(document).find('.validation-lang');
         var salary_error = $(document).find('.validation-salary');
         var phone_one_error = $(document).find('.validation-phone_one');
         var phone_two_error = $(document).find('.validation-phone_two');
         var marital_status_error = $(document).find('.validation-marital_status');
         var file1_error = $(document).find('.validation-file1');
         var file2_error = $(document).find('.validation-file2');

         $.ajax({
             type:method,
             url: url,
             data: formData,
             contentType: false,
             processData: false,
             success: (res) => {

                console.log(res)
                
                if (res.status == 1) {
                    location.reload();
                }
                
                if (res.status == 0) {
                    if (res.errors.firstname) {
                        firstname_error.html(res.errors.firstname);
                        firstname_error.siblings('input[name="firstname"]').addClass('is-invalid')   
                    }
                    if (res.errors.lastname) {
                        lastname_error.html(res.errors.lastname);
                        lastname_error.siblings('input[name="lastname"]').addClass('is-invalid')
                    }
                    if (res.errors.reference) {
                        reference_error.html(res.errors.reference);
                        reference_error.siblings('input[name="reference"]').addClass('is-invalid')
                    }
                    if (res.errors.address) {
                        address_error.html(res.errors.address);
                        address_error.siblings('input[name="address"]').addClass('is-invalid')
                    }
                    if (res.errors.born) {
                        born_error.html(res.errors.born);
                        born_error.siblings('input[name="born"]').addClass('is-invalid')                        
                    }
                    if (res.errors.specialty) {
                        specialty_error.html(res.errors.specialty);
                        specialty_error.siblings('input[name="specialty"]').addClass('is-invalid')
                    }
                    if (res.errors.work_activity) {
                        work_activity_error.html(res.errors.work_activity);
                        work_activity_error.siblings('input[name="work_activity"]').addClass('is-invalid')
                    }
                    if (res.errors.lang) {
                        lang_error.html(res.errors.lang);
                        lang_error.siblings('input[name="lang"]').addClass('is-invalid')
                    }
                    if (res.errors.salary) {
                        salary_error.html(res.errors.salary);
                        salary_error.siblings('input[name="salary"]').addClass('is-invalid')
                    }
                    if (res.errors.phone_one) {
                        phone_one_error.html(res.errors.phone_one);
                        phone_one_error.siblings('input[name="phone_one"]').addClass('is-invalid')
                    }
                    if (res.errors.phone_two) {
                        phone_two_error.html(res.errors.phone_two);
                        phone_two_error.siblings('input[name="phone_two"]').addClass('is-invalid')
                    }
                    if (res.errors.marital_status) {
                        marital_status_error.html(res.errors.marital_status);
                        marital_status_error.siblings('input[name="marital_status"]').addClass('is-invalid')                        
                    }
                    if (res.errors.file1) {
                        file1_error.html(res.errors.file1);
                        file1_error.siblings('input[name="file1"]').addClass('is-invalid')
                    }
                    if (res.errors.file2) {
                        file2_error.html(res.errors.file2);
                        file2_error.siblings('input[name="file2"]').addClass('is-invalid')
                    }

                }

                if(res.status == 2) {
                    console.log(res.errors);
                }
             }
         });
    })
    $('.js_edit_staff input[name="firstname"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-firstname').html(' ');
    });
    $('.js_edit_staff input[name="lastname"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-lastname').html(' ');
    })
    $('.js_edit_staff input[name="reference"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-reference').html(' ');
    })
    $('.js_edit_staff input[name="address"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-address').html(' ');
    })
    $('.js_edit_staff input[name="born"]').on('change', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-born').html(' ');
    })
    $('.js_edit_staff input[name="specialty"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-specialty').html(' ');
    })
    $('.js_edit_staff input[name="work_activity"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-work_activity').html(' ');
    })
    $('.js_edit_staff input[name="lang"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-lang').html(' ');
    })
    $('.js_edit_staff input[name="salary"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-salary').html(' ');
    })
    $('.js_edit_staff input[name="phone_one"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-phone_one').html(' ');
    })
    $('.js_edit_staff input[name="phone_two"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-phone_two').html(' ');
    })
    $('.js_edit_staff input[name="marital_status"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-marital_status').html(' ');
    })
    $('.js_edit_staff input[name="file1"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-file1').html(' ');
    })
    $('.js_edit_staff input[name="file2"]').on('keyup', function () {
        $(this).removeClass('is-invalid')
        $(document).find('.validation-file2').html(' ');
    })
   
    $('.js_delet_staff').on('submit', function (e) {
        e.preventDefault();
         var url = $(this).attr('action');
         var method = $(this).attr('method');
         var formData = new FormData(this);
        
         $.ajax({
             type:method,
             url: url,
             data: formData,
             contentType: false,
             processData: false,
             success: (res) => {

                console.log(res)
                
                if (res.status == 1) {
                    location.reload();
                }
                
                if (res.status == 0) {
                   console.log('ochirilmadi');
             }
            }
         });
    })
    $('.js_select_status').change(function() {
        var slectStatus= $(".js_select_status").val();
        if (slectStatus == 1) {
            console.log(slectStatus);
              $('.Sinov').removeClass('d-none');
              console.log($('#test_duration').val());
        }
        else{
            $('.Sinov').addClass('d-none');
        }
    })
    $('.js_selectEdit_status').change(function() {
        var slectStatus= $(".js_selectEdit_status").val();
        if (slectStatus == 1) {
            console.log(slectStatus);
              $('.SinovEdit').removeClass('d-none');
            //   console.log($('#test_duration').val());
        }
        else{
            $('.SinovEdit').addClass('d-none');
        }
    })
});