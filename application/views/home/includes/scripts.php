<!-- Vendors JS -->
<script src="<?php echo base_url(); ?>assets/home/js/vendor.min.js"></script>
<!-- AjaxChimp JS -->
<script src="<?php echo base_url(); ?>assets/home/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator JS -->
<script src="<?php echo base_url(); ?>assets/home/js/form-validator.min.js"></script>
<!-- Contact Form JS -->
<script src="assets/home/js/contact-form-script.js"></script>
<!-- flow-inc Map JS -->
<script src="assets/home/js/flow-inc-map.js"></script>
<!-- Main JS -->
<script src="<?php echo base_url(); ?>assets/home/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

<script>
        $(function () {
                $("form[name='contact']").validate({
                        rules: {
                                name: "required",
                                subject: "required",
                                email: {
                                        required: true,
                                        email: true
                                },
                                mobile: {
                                        required: true,
                                        minlength: 10,
                                        maxlength: 10
                                }
                        },
                        messages: {
                                name: "Please Enter Name",
                                subject: "Please Enter Subject",
                                mobile: {
                                        required: "Please Enter Mobile Number",
                                        minlength: "Please Enter 10 digit valid Mobile Number",
                                        maxlength: "Please Enter 10 digit valid Mobile Number",
                                },
                                email: "Please Enter a valid email address"
                        },
                        submitHandler: function (form) {
                                // Validation has passed, so call the AJAX request to store data
                                var services_ids = $("input[name='service[]']:checked").map(function () {
                                        return this.value;
                                }).get();

                                var formData = $(form).serializeArray();
                                formData.push({ name: "services_ids", value: services_ids });

                                $.ajax({
                                        method: "POST",
                                        url: "<?php echo base_url('contact-enquiry'); ?>", // URL for the create method
                                        data: formData,
                                        success: function (response) {
                                                alert(response);
                                                // You can perform additional actions after successful submission
                                        }
                                });
                        }
                });
        });
</script>