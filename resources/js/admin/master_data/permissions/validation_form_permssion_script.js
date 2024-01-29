class Validation {
    static initSignIn() {
        Codebase.helpers("jq-validation");
        $(".form-permission").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3,
                },
            },
            messages: {
                name: {
                    required: "Please enter an permission name",
                    minlength:
                        "Permission name must consist of at least 3 characters",
                },
            },
        });
    }
}

Codebase.onLoad(() => Validation.initSignIn());
